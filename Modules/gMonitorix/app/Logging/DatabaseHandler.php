<?php

namespace Modules\GMonitorix\Logging;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\LogRecord;
use Modules\GMonitorix\Models\LogEntry;

class DatabaseHandler extends AbstractProcessingHandler
{
    protected function write(LogRecord $record): void
    {
        LogEntry::create([
            'level' => $record->level->getName(),
            'message' => $record->message,
            'context' => $record->context,
            'channel' => $record->channel,
            'remote_addr' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'user_id' => auth()->id(),
        ]);
    }
}
