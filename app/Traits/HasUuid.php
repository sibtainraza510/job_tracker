<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Closure;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 * @method static void creating(Closure $callback)
 */
trait HasUuid
{
    protected static function bootHasUuid()
    {
        static::creating(function ($model) {

            if (! $model->uuid) {
                $model->uuid = Str::uuid();
            }
        });
    }
}