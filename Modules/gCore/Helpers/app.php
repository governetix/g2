<?php

use Modules\gCore\Models\CssTheme;
use Modules\gCore\Models\FeatureFlag;

if (!function_exists('get_active_css_theme_path')) {
    function get_active_css_theme_path()
    {
        $activeTheme = CssTheme::where('is_active', true)->first();

        if ($activeTheme) {
            return asset($activeTheme->path);
        }

        // Fallback to default if no active theme is found
        return asset('modules/gcore/css/app.css');
    }
}

if (!function_exists('is_feature_enabled')) {
    function is_feature_enabled(string $name): bool
    {
        $featureFlag = FeatureFlag::where('name', $name)->first();

        return $featureFlag ? $featureFlag->is_enabled : false;
    }
}
