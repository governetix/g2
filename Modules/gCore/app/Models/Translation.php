<?php

namespace Modules\GCore\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = 'translations';

    protected $fillable = [
        'locale',
        'group',
        'key',
        'value',
    ];
}
