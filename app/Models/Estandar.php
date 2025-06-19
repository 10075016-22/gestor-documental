<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estandar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "nombre",
        "descripcion",
        "cantidad",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];

    public function documentos() {
        return $this->belongsToMany(Documento::class);
    }
    public function clientes() {
        return $this->belongsToMany(Cliente::class);
    }
    
}
