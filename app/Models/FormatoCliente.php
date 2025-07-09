<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatoCliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'ciclo_id',
        'ciclo_estandar_id',
        'ciclo_sub_estandar_id',
        'ciclo_item_estandars_id',
        'cumple',
        'justifica',
        'observacion',
        'calificacion'
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function ciclo() {
        return $this->belongsTo(Ciclo::class);
    }

    public function cicloEstandar() {
        return $this->belongsTo(CicloEstandar::class);
    }

    public function cicloSubEstandar() {
        return $this->belongsTo(CicloEstandarSubEstandar::class);
    }

    public function cicloItemEstandar() {
        return $this->belongsTo(CicloItemEstandar::class, 'ciclo_item_estandars_id');
    }

}
