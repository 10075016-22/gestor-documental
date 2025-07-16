<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoricoDocumento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'planeacion_documento_id',
        'user_id',
        'ciclo_item_estandar_id',
        'document',
        'observaciones'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function planeacionDocumento() {
        return $this->belongsTo(PlaneacionDocumento::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function cicloItemEstandar() {
        return $this->belongsTo(CicloItemEstandar::class);
    }
    
}
