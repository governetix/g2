<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\GCore\Providers\GCoreServiceProvider;
use Modules\GBackup\Providers\GBackupServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(GCoreServiceProvider::class);
        $this->app->register(GBackupServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
