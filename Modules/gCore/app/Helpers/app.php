<?php

if (! function_exists('app_name')) {
    function app_name(): string
    {
        return config('app.name');
    }
}

if (! function_exists('format_currency')) {
    function format_currency(float $amount, string $currency = 'USD'): string
    {
        return number_format($amount, 2) . ' ' . $currency;
    }
}

if (! function_exists('get_active_css_theme_path')) {
    function get_active_css_theme_path(): string
    {
        // Por ahora, devuelve una ruta por defecto. Más adelante, esto se gestionará dinámicamente.
        return asset('modules/gcore/css/app.css');
    }
}