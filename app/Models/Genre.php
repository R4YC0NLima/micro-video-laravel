<?php

namespace App\Models;

use App\Models\Traits\useUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(array $all)
 */
class Genre extends Model
{
    use HasFactory;

    use SoftDeletes;
    use HasFactory;
    use useUuid;

    protected $fillable = [
        'name',
        'is_active'
    ];
    protected $dates    = ['deleted_at'];
    protected $casts    = [
        'id' => 'string'
    ];
}
