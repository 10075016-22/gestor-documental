<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CicloEstandarSubEstandar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'ciclo_estandar_id',
        'nombre',
        'descripcion',
        'porcentaje',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cicloEstandar() {
        return $this->belongsTo(CicloEstandar::class, 'ciclo_estandar_id');
    }
}
