<?php

namespace Modules\GMonitorix\Listeners;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\GMonitorix\Models\ErrorEntry;

class ExceptionListener
{
    use Dispatchable, SerializesModels;

    public function handle(\Throwable $event): void
    {
        ErrorEntry::create([
            'type' => get_class($event),
            'message' => $event->getMessage(),
            'file' => $event->getFile(),
            'line' => $event->getLine(),
            'trace' => $event->getTraceAsString(),
            'url' => request()->fullUrl(),
            'ip_address' => request()->ip(),
            'user_id' => auth()->id(),
        ]);
    }
}
