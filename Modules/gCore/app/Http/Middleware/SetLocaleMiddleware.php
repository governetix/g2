<?php

namespace Modules\GCore\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Obtener el idioma de la sesión, preferencias del usuario o URL
        // Por ahora, usaremos un idioma fijo para la prueba
        $locale = $request->segment(1); // Asume que el idioma está en el primer segmento de la URL

        if (in_array($locale, config('app.locales', ['en', 'es']))) {
            App::setLocale($locale);
        } else {
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
