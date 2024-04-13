<?php

namespace Modules\Shared\Traits;

use Illuminate\Support\Str;

trait UtilityUuid
{
    public static $uuidKey = 'uuid';
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->{self::$uuidKey} = (string) Str::orderedUuid();
        });
    }
}
