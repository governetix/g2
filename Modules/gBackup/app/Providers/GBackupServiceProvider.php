<?php

namespace Modules\GBackup\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\GBackup\Console\Commands\BackupFileCommand;

class GBackupServiceProvider extends ServiceProvider
{
    protected $commands = [
        BackupFileCommand::class,
    ];

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'gbackup');
        $this->loadTranslationsFrom(__DIR__ . '/../../Resources/lang', 'gbackup');
        $this->mergeConfigFrom(__DIR__ . '/../../Config/config.php', 'gbackup');
        $this->commands($this->commands);
    }
}
