<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;

use App\Console\Commands\ListRoutesControllersCommand;

use Illuminate\Support\ServiceProvider;
use Modules\GCore\Providers\GCoreServiceProvider;
use Modules\GBackup\Providers\GBackupServiceProvider;
use Modules\GMonitorix\Providers\GMonitorixServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(GCoreServiceProvider::class);
        $this->app->register(GBackupServiceProvider::class);
        $this->app->register(GMonitorixServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->commands([
            ListRoutesControllersCommand::class,
        ]);

        View::addNamespace('gcore', base_path('Modules/gCore/Resources/views'));
    }
}
