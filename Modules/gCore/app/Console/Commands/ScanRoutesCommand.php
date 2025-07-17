<?php

namespace Modules\gCore\Console\Commands; // Corregido el namespace para el módulo gCore

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\ConnectionException;
use Throwable;

/**
 * Comando Artisan para escanear componentes de la aplicación Laravel
 * y verificar sus respuestas HTTP.
 *
 * Este comando itera a través de las rutas registradas en la aplicación,
 * realiza solicitudes HTTP GET a cada una y reporta el código de estado.
 * Es útil para identificar rápidamente rutas inaccesibles o que devuelven errores.
 */
class ScanRoutesCommand extends Command // Corregido el nombre de la clase para que coincida con el archivo
{
    /**
     * El nombre y la firma del comando Artisan.
     *
     * @var string
     */
    protected $signature = 'gcore:scan-routes
                            {--base_url= : URL base de la aplicación (ej. http://127.0.0.1:8000)}'; // Corregido el signature

    /**
     * La descripción del comando Artisan.
     *
     * @var string
     */
    protected $description = 'Escanea todas las rutas HTTP descubribles de la aplicación y reporta su estado.';

    /**
     * Ejecuta el comando Artisan.
     *
     * @return int
     */
    public function handle()
    {
        // Obtener la URL base de la opción del comando o del archivo .env
        $baseUrl = $this->option('base_url') ?? config('app.url');

        // Validar que se haya proporcionado una URL base
        if (empty($baseUrl)) {
            $this->error('No se ha proporcionado una URL base. Por favor, especifícala con --base_url o en tu archivo .env (APP_URL).');
            return Command::FAILURE;
        }

        // Asegurarse de que la URL base no termine en / para evitar dobles barras
        $baseUrl = rtrim($baseUrl, '/');

        // Lógica mejorada para añadir el puerto 8000 si la URL base es localhost o 127.0.0.1 y no tiene puerto
        $parsedUrl = parse_url($baseUrl);
        if (
            isset($parsedUrl['host']) &&
            in_array($parsedUrl['host'], ['localhost', '127.0.0.1']) &&
            !isset($parsedUrl['port'])
        ) {
            $baseUrl .= ':8000';
        }

        $this->info("Iniciando escaneo de rutas de la aplicación desde: {$baseUrl}");
        $this->warn("Nota: Este escáner solo intentará rutas GET sin parámetros obligatorios.");
        $this->warn("Asegúrate de que APP_DEBUG=true en tu archivo .env para obtener detalles completos de los errores 500.");


        $routes = Route::getRoutes(); // Obtener todas las rutas registradas en la aplicación
        $scannedCount = 0;
        $errorCount = 0;

        // Iterar sobre cada ruta registrada
        foreach ($routes as $route) {
            // Filtrar rutas para escanear solo las relevantes y accesibles directamente
            // Se excluyen métodos que no sean GET, rutas con parámetros obligatorios
            // y rutas que no tienen un URI definido (ej. rutas de cierre de sesión CSRF)
            if (in_array('GET', $route->methods()) &&
                !empty($route->uri()) && // Asegura que la URI no esté vacía
                !str_contains($route->uri(), '{') // Excluye rutas con parámetros en la URI (ej. /users/{id})
            ) {
                $uri = ltrim($route->uri(), '/'); // Limpiar la URI para evitar dobles barras
                $fullUrl = "{$baseUrl}/{$uri}"; // Construir la URL completa

                $this->line("Escaneando: {$fullUrl}");
                Log::info("Escaneando URL: {$fullUrl}");

                try {
                    // Realizar la solicitud HTTP GET
                    $response = Http::timeout(10)->get($fullUrl); // Timeout de 10 segundos

                    // Verificar el código de estado HTTP
                    if ($response->successful()) { // Código 2xx
                        $this->info("  [OK] Estado: {$response->status()}");
                        Log::info("URL escaneada exitosamente: {$fullUrl} - Estado: {$response->status()}");
                    } else { // Otros códigos (3xx, 4xx, 5xx)
                        $errorMessage = "Sin detalles adicionales en la respuesta.";
                        $responseBody = $response->body();

                        // Prioridad 1: Intentar extraer el JSON de la página de error de Ignition (Laravel Debug)
                        if (config('app.debug') && preg_match('/<script id="app-data" type="application\/json">(.*?)<\/script>/s', $responseBody, $matches)) {
                            $jsonData = json_decode($matches[1], true);
                            if (json_last_error() === JSON_ERROR_NONE && isset($jsonData['report']['message']) && isset($jsonData['report']['file'])) {
                                $errorMessage = "Excepción: " . $jsonData['report']['message'] . " en " . $jsonData['report']['file'] . ":" . $jsonData['report']['line'];
                            } elseif (json_last_error() === JSON_ERROR_NONE && isset($jsonData['message'])) {
                                $errorMessage = "Mensaje JSON: " . $jsonData['message'];
                            } else {
                                $errorMessage = "JSON de error de Ignition (sin mensaje específico o JSON inválido): " . json_encode($jsonData, JSON_PRETTY_PRINT);
                            }
                        }
                        // Prioridad 2: Si no es Ignition JSON, intentar parsear JSON de la respuesta directamente
                        elseif ($response->json()) {
                            $errorMessage = json_encode($response->json(), JSON_PRETTY_PRINT);
                        }
                        // Prioridad 3: Si es HTML, intentar extraer mensajes de error de patrones comunes
                        elseif (!empty($responseBody)) {
                            // Buscar mensaje de excepción en div.exception-message (Laravel por defecto o Ignition simple)
                            if (preg_match('/<div class="exception-message">(.*?)<\/div>/s', $responseBody, $matches)) {
                                $errorMessage = "Excepción: " . trim(strip_tags($matches[1]));
                            }
                            // Buscar mensaje de error en h1 (común en errores de servidor)
                            elseif (preg_match('/<h1[^>]*>(.*?)<\/h1>/s', $responseBody, $matches)) {
                                $errorMessage = "Encabezado H1: " . trim(strip_tags($matches[1]));
                            }
                            // Fallback a título si no se encuentra nada más específico
                            elseif (preg_match('/<title>(.*?)<\/title>/s', $responseBody, $matches)) {
                                $errorMessage = "Título de la página: " . trim($matches[1]);
                            }
                            // Último recurso: truncar el cuerpo HTML y registrar el cuerpo completo en el log
                            else {
                                $errorMessage = "Cuerpo HTML truncado: " . substr($responseBody, 0, 500) . (strlen($responseBody) > 500 ? '...' : '');
                                if (config('app.debug')) {
                                    Log::error("Cuerpo completo de la respuesta HTML para {$fullUrl} (Estado: {$response->status()}): " . $responseBody);
                                    $errorMessage .= " (Cuerpo completo en log)";
                                }
                            }
                        }
                        $this->error("  [ERROR] Ruta: /{$uri}, Estado: {$response->status()}, Detalles: {$errorMessage}");
                        Log::error("Error al escanear URL: {$fullUrl} - Estado: {$response->status()} - Detalles: {$errorMessage}");
                        $errorCount++;
                    }
                } catch (ConnectionException $e) {
                    // Manejar errores de conexión (ej. host no alcanzable, servidor no corriendo)
                    $this->error("  [ERROR] Conexión fallida a {$fullUrl}: " . $e->getMessage());
                    Log::error("Conexión fallida a URL: {$fullUrl} - Error: " . $e->getMessage());
                    $errorCount++;
                } catch (Throwable $e) {
                    // Capturar cualquier otra excepción inesperada durante la solicitud
                    $this->error("  [ERROR] Excepción inesperada al escanear {$fullUrl}: " . $e->getMessage());
                    Log::error("Excepción inesperada al escanear URL: {$fullUrl} - Error: " . $e->getMessage());
                    $errorCount++;
                }
                $scannedCount++;
            }
        }

        $this->info("\n--- Resumen del Escaneo ---");
        $this->info("Rutas escaneadas: {$scannedCount}");
        if ($errorCount > 0) {
            $this->error("Rutas con errores: {$errorCount}");
        } else {
            $this->info("Todas las rutas escaneadas respondieron con éxito (código 2xx).");
        }

        return Command::SUCCESS;
    }
}
