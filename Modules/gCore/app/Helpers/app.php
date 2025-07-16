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
