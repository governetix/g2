<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;

use App\Console\Commands\ListRoutesControllersCommand;

use Illuminate\Support\ServiceProvider;
use Modules\GCore\Providers\GCoreServiceProvider;
use Modules\GBackup\Providers\GBackupServiceProvider;
use Modules\GMonitorix\Providers\GMonitorixServiceProvider;
use Modules\GCore\Services\DatabaseTranslationLoader;
use Modules\GCore\Repositories\TranslationRepository;
use Illuminate\Translation\Translator;

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

        $this->app->singleton('translator', function ($app) {
            $loader = new DatabaseTranslationLoader($app['files'], $app['path.lang'], $app->make(TranslationRepository::class));
            $locale = $app['config']['app.locale'];
            $trans = new Translator($loader, $locale);
            $trans->setFallback($app['config']['app.fallback_locale']);
            return $trans;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
