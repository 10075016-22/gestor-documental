<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanAccion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'criterio',
        'valoracion',
        'color',
        'minimo',
        'maximo',
        'accion',
        'color_text'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
