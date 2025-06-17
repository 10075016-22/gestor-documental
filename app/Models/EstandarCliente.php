<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstandarCliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "cliente_id",
        "estandar_id",
    ];

    protected $hidden = [
        "cliente_id",
        "estandar_id",
        "created_at",
        "updated_at",
        "deleted_at",
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function estandar()
    {
        return $this->belongsTo(Estandar::class);
    }
}
