@extends('gcore::admin.layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Configuración Visual</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Alert Component Example -->
            <x-gcore::card title="Ejemplos de Alertas" class="shadow-lg">
                <x-gcore::alert message="¡Operación exitosa!" type="success" dismissible class="mb-2" />
                <x-gcore::alert message="Información importante." type="info" class="mb-2" />
                <x-gcore::alert message="Advertencia: algo requiere atención." type="warning" dismissible class="mb-2" />
                <x-gcore::alert message="Error: la operación falló." type="danger" />
            </x-gcore::card>

            <!-- Blockquote Component Example -->
            <x-gcore::card title="Ejemplo de Cita" class="shadow-lg">
                <x-gcore::blockquote cite="Albert Einstein">
                    "La imaginación es más importante que el conocimiento."
                </x-gcore::blockquote>
                <x-gcore::blockquote class="mt-4">
                    "Una cita sin autor."
                </x-gcore::blockquote>
            </x-gcore::card>

            <!-- Button Component Example -->
            <x-gcore::card title="Ejemplos de Botones" class="shadow-lg">
                <div class="flex flex-wrap gap-2 mb-4">
                    <x-gcore::button>Botón Primario</x-gcore::button>
                    <x-gcore::button variant="secondary">Secundario</x-gcore::button>
                    <x-gcore::button variant="success">Éxito</x-gcore::button>
                    <x-gcore::button variant="danger">Peligro</x-gcore::button>
                    <x-gcore::button variant="warning">Advertencia</x-gcore::button>
                    <x-gcore::button variant="info">Información</x-gcore::button>
                    <x-gcore::button variant="light">Claro</x-gcore::button>
                    <x-gcore::button variant="dark">Oscuro</x-gcore::button>
                    <x-gcore::button variant="link">Enlace</x-gcore::button>
                </div>
                <div class="flex flex-wrap gap-2 mb-4">
                    <x-gcore::button size="sm">Pequeño</x-gcore::button>
                    <x-gcore::button size="md">Mediano</x-gcore::button>
                    <x-gcore::button size="lg">Grande</x-gcore::button>
                </div>
                <div class="flex flex-wrap gap-2 mb-4">
                    <x-gcore::button outline variant="primary">Outline Primario</x-gcore::button>
                    <x-gcore::button outline variant="success">Outline Éxito</x-gcore::button>
                </div>
                <div class="flex flex-wrap gap-2">
                    <x-gcore::button icon="fas fa-save">Guardar</x-gcore::button>
                    <x-gcore::button disabled>Deshabilitado</x-gcore::button>
                </div>
            </x-gcore::card>

            <!-- Dropdown Component Example -->
            <x-gcore::card title="Ejemplos de Dropdowns" class="shadow-lg">
                <div class="flex gap-4">
                    <x-gcore::dropdown label="Menú Izquierda">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Opción 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Opción 2</a>
                        <div class="border-t border-gray-100"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-700 hover:bg-red-100">Eliminar</a>
                    </x-gcore::dropdown>

                    <x-gcore::dropdown label="Menú Derecha" align="right">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Perfil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configuración</a>
                    </x-gcore::dropdown>
                </div>
            </x-gcore::card>

            <!-- Card Component Example -->
            <x-gcore::card title="Ejemplo de Tarjeta" class="shadow-lg">
                <p>Este es un ejemplo del componente Card. Puedes usarlo para agrupar contenido de forma visualmente distintiva.</p>
                <x-slot:footer>
                    <small>Pie de página de la tarjeta.</small>
                </x-slot:footer>
            </x-gcore::card>

            <!-- Divider Component Example -->
            <x-gcore::card title="Ejemplo de Divisor" class="shadow-lg">
                <p>Divisor horizontal:</p>
                <x-gcore::divider orientation="horizontal" class="my-4" />
                <p>Divisor vertical (dentro de un flexbox):</p>
                <x-gcore::flex direction="row" align="center" gap="10px" class="h-20">
                    <span>Elemento 1</span>
                    <x-gcore::divider orientation="vertical" />
                    <span>Elemento 2</span>
                </x-gcore::flex>
            </x-gcore::card>

            <!-- Flex Component Example -->
            <x-gcore::card title="Ejemplo de Flexbox" class="shadow-lg">
                <x-gcore::flex direction="row" justify="space-around" align="center" gap="15px" class="bg-gray-100 p-4 rounded">
                    <div class="p-2 bg-blue-200 rounded">Item 1</div>
                    <div class="p-2 bg-green-200 rounded">Item 2</div>
                    <div class="p-2 bg-red-200 rounded">Item 3</div>
                </x-gcore::flex>
                <p class="mt-4">Flexbox en columna:</p>
                <x-gcore::flex direction="column" justify="center" align="start" gap="10px" class="bg-gray-100 p-4 rounded">
                    <div class="p-2 bg-blue-200 rounded">Item A</div>
                    <div class="p-2 bg-green-200 rounded">Item B</div>
                </x-gcore::flex>
            </x-gcore::card>

            <!-- Grid Component Example -->
            <x-gcore::card title="Ejemplo de Grid" class="shadow-lg">
                <x-gcore::grid columns="repeat(2, 1fr)" gap="10px" class="bg-gray-100 p-4 rounded">
                    <div class="p-2 bg-purple-200 rounded">Grid Item 1</div>
                    <div class="p-2 bg-orange-200 rounded">Grid Item 2</div>
                    <div class="p-2 bg-teal-200 rounded">Grid Item 3</div>
                    <div class="p-2 bg-pink-200 rounded">Grid Item 4</div>
                </x-gcore::grid>
            </x-gcore::card>

            <!-- HeroSection Component Example -->
            <x-gcore::card title="Ejemplo de Hero Section" class="shadow-lg col-span-full">
                <x-gcore::hero-section title="Bienvenido al Showroom Visual" subtitle="Explora los componentes visuales de tu aplicación."
                                       image-url="https://via.placeholder.com/1200x400/007bff/ffffff?text=Hero+Image"
                                       overlay-color="rgba(0,0,0,0.5)" height="250px">
                    <x-gcore::button variant="light" size="lg">Más Información</x-gcore::button>
                </x-gcore::hero-section>
            </x-gcore::card>

            <!-- InfoBox Component Example -->
            <x-gcore::card title="Ejemplo de InfoBox" class="shadow-lg">
                <x-gcore::info-box type="info" title="Información Importante" message="Este es un mensaje informativo." icon="fas fa-info-circle" class="mb-4" />
                <x-gcore::info-box type="success" title="Éxito" message="Operación completada correctamente." icon="fas fa-check-circle" class="mb-4" />
                <x-gcore::info-box type="warning" title="Advertencia" message="Algo salió mal, pero no es crítico." icon="fas fa-exclamation-triangle" class="mb-4" />
                <x-gcore::info-box type="error" title="Error" message="Ha ocurrido un error crítico." icon="fas fa-times-circle" />
            </x-gcore::card>

            <!-- Kpi Component Example -->
            <x-gcore::card title="Ejemplo de KPI" class="shadow-lg">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-gcore::kpi label="Ventas Hoy" value="1,234" unit="$" icon="fas fa-dollar-sign" change="+5%" change-type="positive" />
                    <x-gcore::kpi label="Usuarios Activos" value="567" icon="fas fa-users" change="-2%" change-type="negative" />
                    <x-gcore::kpi label="Tasa de Conversión" value="3.2" unit="%" icon="fas fa-chart-line" change="0%" change-type="neutral" />
                </div>
            </x-gcore::card>

            <!-- CtaSection Component Example -->
            <x-gcore::card title="Ejemplo de CTA Section" class="shadow-lg col-span-full">
                <x-gcore::cta-section title="¿Listo para Empezar?" subtitle="Únete a nuestra plataforma hoy mismo."
                                      background-color="hsl(var(--color-primario))" text-color="hsl(var(--color-fondo-principal))">
                    <x-gcore::button variant="light" size="lg">Regístrate Ahora</x-gcore::button>
                </x-gcore::cta-section>
            </x-gcore::card>

            <!-- EmptyState Component Example -->
            <x-gcore::card title="Ejemplo de Empty State" class="shadow-lg">
                <x-gcore::empty-state title="No hay datos disponibles" message="Aún no se ha cargado ninguna información."
                                      icon="fas fa-database">
                    <x-gcore::button variant="primary">Cargar Datos</x-gcore::button>
                </x-gcore::empty-state>
            </x-gcore::card>

            <!-- FeatureGrid Component Example -->
            <x-gcore::card title="Ejemplo de Feature Grid" class="shadow-lg col-span-full">
                <x-gcore::feature-grid :features="[
                    ['icon' => 'fas fa-shield-alt', 'title' => 'Seguridad', 'description' => 'Protección avanzada para tus datos.'],
                    ['icon' => 'fas fa-rocket', 'title' => 'Rendimiento', 'description' => 'Velocidad y eficiencia garantizadas.'],
                    ['icon' => 'fas fa-headset', 'title' => 'Soporte', 'description' => 'Asistencia 24/7 para todas tus dudas.']
                ]" columns="3" gap="20px" />
            </x-gcore::card>

        </div>
    </div>
@endsection
