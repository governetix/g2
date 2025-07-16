<?php

namespace Modules\GMonitorix\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Log\Events\MessageLogged;
use Modules\GMonitorix\Listeners\LogListener;
use Modules\GMonitorix\Listeners\ExceptionListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        MessageLogged::class => [
            LogListener::class,
        ],
        // Para capturar excepciones no manejadas
        Throwable::class => [
            ExceptionListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
