<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tipo_documento_id',
        'nombre',
        'descripcion',
        'obligatorio',
        'generaFormato',
        'plantilla'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at',
        'deleted_at'
    ];

    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }
}
