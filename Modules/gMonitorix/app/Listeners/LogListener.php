<?php

namespace Modules\GMonitorix\Listeners;

use Illuminate\Log\Events\MessageLogged;
use Modules\GMonitorix\Models\LogEntry;

class LogListener
{
    public function handle(MessageLogged $event): void
    {
        LogEntry::create([
            'level' => $event->level,
            'message' => $event->message,
            'context' => $event->context,
            'channel' => config('logging.default'), // O el canal específico si se puede determinar
            'remote_addr' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'user_id' => auth()->id(),
        ]);
    }
}
