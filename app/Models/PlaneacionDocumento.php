<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlaneacionDocumento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cliente_id',
        'documento_id',
        'fecha_fin',
        'observaciones',
        'estado'
    ];

    protected $hidden = [
        'cliente_id',
        'documento_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function documento() {
        return $this->belongsTo(Documento::class);
    }


}
