<?php

namespace Modules\GMonitorix\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\GMonitorix\Providers\EventServiceProvider;

class GMonitorixServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'gmonitorix');
        $this->loadTranslationsFrom(__DIR__ . '/../../Resources/lang', 'gmonitorix');
        $this->mergeConfigFrom(__DIR__ . '/../../Config/config.php', 'gmonitorix');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}
