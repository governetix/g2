<?php

namespace Modules\GMonitorix\Models;

use Illuminate\Database\Eloquent\Model;

class ErrorEntry extends Model
{
    protected $table = 'error_entries';

    protected $fillable = [
        'type',
        'message',
        'file',
        'line',
        'trace',
        'url',
        'ip_address',
        'user_id',
    ];
}
