<?php

namespace App\Models\Traits;

use Ramsey\Uuid\Uuid;

trait useUuid
{
    public static function boot()
    {
        parent::boot();
        static::creating(function($obj) {
            $obj->id = Uuid::uuid4();
        });
    }
}
