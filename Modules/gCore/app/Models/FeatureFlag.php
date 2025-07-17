<?php

namespace Modules\gCore\Models;

use Illuminate\Database\Eloquent\Model;

class FeatureFlag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feature_flags';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'is_enabled',
        'description',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_enabled' => 'boolean',
    ];
}
