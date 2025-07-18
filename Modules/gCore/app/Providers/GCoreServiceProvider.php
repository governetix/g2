<?php

namespace Modules\GCore\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Modules\GCore\Services\SeoService;
use Modules\GCore\Console\Commands\GenerateSitemapCommand;
use Modules\GCore\Console\Commands\ScanRoutesCommand;
use Modules\GCore\Console\Commands\ListRoutesControllersCommand;

class GCoreServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        // Diagnóstico temporal: Forzar recompilación de la vista de traducciones
        if (app()->environment('local')) {
            \Illuminate\Support\Facades\Artisan::call('view:clear');
            // Intentar cargar la vista para forzar su compilación
            try {
                app('view')->getEngineResolver()->resolve('blade')->getCompiler()->compile(app('view')->getFinder()->find('gcore::admin.translations.index'));
            } catch (\Exception $e) {
                // Ignorar errores de compilación aquí, solo queremos forzarla
            }
        }
        
        $this->registerCommandSchedules();
        $this->registerConfig();
        $this->loadTypographySettings();
        
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../../Routes/web.php');

        $this->app['router']->aliasMiddleware('setlocale', \Modules\GCore\Http\Middleware\SetLocaleMiddleware::class);

        $this->publishes([
            __DIR__.'/../../Resources/assets' => public_path('modules/gcore'),
        ], 'gcore-assets');

        $this->registerViews();

        Blade::componentNamespace('Modules\\GCore\\View\\Components', 'gcore');
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        require_once __DIR__ . '/../Helpers/app.php';

        $this->app->singleton(SeoService::class, function ($app) {
            return new SeoService();
        });

        $this->app->singleton('translator.loader', function ($app) {
            $path = $app['path.lang'];
            return new \Modules\GCore\Services\DatabaseTranslationLoader($app['files'], $path, $app->make(\Modules\GCore\Repositories\TranslationRepository::class));
        });
    }

    /**
     * Load typography settings from the database.
     */
    protected function loadTypographySettings(): void
    {
        try {
            $typographySettings = DB::table('settings')
                                    ->where('key', 'typography_settings')
                                    ->first();

            if ($typographySettings && $typographySettings->value) {
                $settings = json_decode($typographySettings->value, true);
                Config::set('gcore.typography', $settings);
            }
        } catch (\Exception $e) {
            // Log the error, but don't stop the application
            // This can happen if the settings table doesn't exist yet during migration
            
        }
    }

    /**
     * Register command Schedules.
     */
    protected function registerCommandSchedules(): void
    {
        $this->app->booted(function () {
            // $this->commands([
            //     GenerateSitemapCommand::class,
            //     // ScanRoutesCommand::class, // Deshabilitado permanentemente debido a errores de carga
            //     ListRoutesControllersCommand::class,
            // ]);
            // $schedule = $this->app->make(Schedule::class);
            // $schedule->command('inspire')->hourly();
        });
    }

    /**
     * Register translations.
     */
    public function registerTranslations(): void
    {
        $langPath = resource_path('lang/modules/gcore');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'gcore');
            $this->loadJsonTranslationsFrom($langPath);
        } else {
            $this->loadTranslationsFrom(__DIR__ . '/../../Resources/lang', 'gcore');
            $this->loadJsonTranslationsFrom(__DIR__ . '/../../Resources/lang');
        }
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        $configPath = __DIR__ . '/../Config';

        if (is_dir($configPath)) {
            $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($configPath));

            foreach ($iterator as $file) {
                if ($file->isFile() && $file->getExtension() === 'php') {
                    $config = str_replace($configPath.DIRECTORY_SEPARATOR, '', $file->getPathname());
                    $config_key = str_replace([DIRECTORY_SEPARATOR, '.php'], ['.', ''], $config);
                    $segments = explode('.', 'gcore.'.$config_key);

                    // Remove duplicated adjacent segments
                    $normalized = [];
                    foreach ($segments as $segment) {
                        if (end($normalized) !== $segment) {
                            $normalized[] = $segment;
                        }
                    }

                    $key = ($config === 'config.php') ? 'gcore' : implode('.', $normalized);

                    $this->publishes([$file->getPathname() => config_path($config)], 'config');
                    $this->mergeConfigFrom($file->getPathname(), $key);
                }
            }
        }
    }

    /**
     * Register views.
     */
    public function registerViews(): void
    {
        $viewPath = resource_path('views/modules/gcore');
        $sourcePath = __DIR__ . '/../../Resources/views';

        $this->publishes([$sourcePath => $viewPath], ['views', 'gcore-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), 'gcore');

        Blade::componentNamespace('Modules\\GCore\\View\\Components', 'gcore');
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (config('view.paths') as $path) {
            if (is_dir($path.'/modules/gcore')) {
                $paths[] = $path.'/modules/gcore';
            }
        }

        return $paths;
    }
}