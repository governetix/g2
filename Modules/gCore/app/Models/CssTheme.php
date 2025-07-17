<?php

namespace Modules\GCore\Models;

use Illuminate\Database\Eloquent\Model;

class CssTheme extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'css_themes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'path',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
