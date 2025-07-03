<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tipoidentificacion_id',
        'cliente_id',
        'nrodocumento',
        'nombre',
        'apellidos',
        'email',
        'telefono',
        'fecha_ingreso',
        'cargo'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at', 
        'deleted_at',
        'tipoidentificacion_id',
        'cliente_id',
    ];

    public function tipoidentificacion () {
        return $this->belongsTo(TipoIdentificacion::class);
    }
    public function cliente () {
        return $this->belongsTo(Cliente::class);
    }
}
