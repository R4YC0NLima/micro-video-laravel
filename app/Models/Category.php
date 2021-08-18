<?php

namespace App\Models;

use App\Models\Traits\useUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

/**
 * @method static create(array $all)
 */
class Category extends Model
{
    use SoftDeletes;
    use HasFactory;
    use useUuid;

    protected $fillable = [
      'name',
      'description',
      'is_active'
    ];
    protected $dates    = ['deleted_at'];
    protected $casts    = [
        'id' => 'string'
    ];
}
