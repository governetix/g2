<?php

namespace Modules\GMonitorix\Models;

use Illuminate\Database\Eloquent\Model;

class LogEntry extends Model
{
    protected $table = 'log_entries';

    protected $fillable = [
        'level',
        'message',
        'context',
        'channel',
        'remote_addr',
        'user_agent',
        'user_id',
    ];

    protected $casts = [
        'context' => 'array',
    ];
}
