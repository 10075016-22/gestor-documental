<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CicloItemEstandar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'ciclo_sub_estandar_id',
        'documento_id',
        'nombre',
        'descripcion',
        'valor'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cicloSubEstandar() {
        return $this->belongsTo(CicloEstandarSubEstandar::class, 'ciclo_sub_estandar_id');
    }

    public function documento() {
        return $this->belongsTo(Documento::class);
    }
}
