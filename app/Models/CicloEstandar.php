<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CicloEstandar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'ciclo_id',
        'nombre',
        'descripcion',
        'porcentaje',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function ciclo() {
        return $this->belongsTo(Ciclo::class);
    }
}
