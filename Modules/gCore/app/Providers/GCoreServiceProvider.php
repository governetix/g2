<?php

namespace Modules\GCore\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\GCore\Services\SeoService;
use Modules\GCore\Console\Commands\GenerateSitemapCommand;

class GCoreServiceProvider extends ServiceProvider
{

    protected string $name = 'GCore';

    protected string $nameLower = 'gcore';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->registerCommands();
        $this->registerCommandSchedules();
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(base_path('Modules/' . $this->name . '/database/migrations'));
        $this->loadRoutesFrom(base_path('Modules/' . $this->name . '/Routes/web.php'));

        $this->app['router']->aliasMiddleware('setlocale', \Modules\GCore\Http\Middleware\SetLocaleMiddleware::class);

        $this->publishes([
            __DIR__.'/../Resources/assets' => public_path('modules/gcore'),
        ], 'gcore-assets');

        Blade::component('x-gcore::seo-meta', \Modules\GCore\View\Components\SeoMeta::class);
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        require_once __DIR__ . '/../Helpers/app.php';
        // $this->app->register(EventServiceProvider::class);
        // $this->app->register(RouteServiceProvider::class);

        $this->app->singleton(SeoService::class, function ($app) {
            return new SeoService();
        });
    }

    /**
     * Register commands in the format of Command::class
     */
    protected function registerCommands(): void
    {
        $this->commands([
            GenerateSitemapCommand::class,
        ]);
    }

    /**
     * Register command Schedules.
     */
    protected function registerCommandSchedules(): void
    {
        // $this->app->booted(function () {
        //     $schedule = $this->app->make(Schedule::class);
        //     $schedule->command('inspire')->hourly();
        // });
    }

    /**
     * Register translations.
     */
    public function registerTranslations(): void
    {
        $langPath = resource_path('lang/modules/'.$this->nameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->nameLower);
            $this->loadJsonTranslationsFrom($langPath);
        } else {
            $this->loadTranslationsFrom(base_path('Modules/' . $this->name . '/Resources/lang'), $this->nameLower);
            $this->loadJsonTranslationsFrom(base_path('Modules/' . $this->name . '/Resources/lang'));
        }
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        $configPath = base_path('Modules/' . $this->name . '/Config');

        if (is_dir($configPath)) {
            $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($configPath));

            foreach ($iterator as $file) {
                if ($file->isFile() && $file->getExtension() === 'php') {
                    $config = str_replace($configPath.DIRECTORY_SEPARATOR, '', $file->getPathname());
                    $config_key = str_replace([DIRECTORY_SEPARATOR, '.php'], ['.', ''], $config);
                    $segments = explode('.', $this->nameLower.'.'.$config_key);

                    // Remove duplicated adjacent segments
                    $normalized = [];
                    foreach ($segments as $segment) {
                        if (end($normalized) !== $segment) {
                            $normalized[] = $segment;
                        }
                    }

                    $key = ($config === 'config.php') ? $this->nameLower : implode('.', $normalized);

                    $this->publishes([$file->getPathname() => config_path($config)], 'config');
                    $this->merge_config_from($file->getPathname(), $key);
                }
            }
        }
    }

    /**
     * Merge config from the given path recursively.
     */
    protected function merge_config_from(string $path, string $key): void
    {
        $existing = config($key, []);
        $module_config = require $path;

        config([$key => array_replace_recursive($existing, $module_config)]);
    }

    /**
     * Register views.
     */
    public function registerViews(): void
    {
        $viewPath = resource_path('views/modules/'.$this->nameLower);
        $sourcePath = base_path('Modules/' . $this->name . '/Resources/views');

        $this->publishes([$sourcePath => $viewPath], ['views', $this->nameLower.'-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->nameLower);

        Blade::componentNamespace('Modules\GCore\View\Components', $this->nameLower);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (config('view.paths') as $path) {
            if (is_dir($path.'/modules/'.$this->nameLower)) {
                $paths[] = $path.'/modules/'.$this->nameLower;
            }
        }

        return $paths;
    }
}