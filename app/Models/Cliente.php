<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'nit',
        'email',
        'direccion',
        'telefono',
        'logo',
        'estado'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function estandarClientes() {
        return $this->hasMany(EstandarCliente::class, 'cliente_id', 'id');
    }
}
