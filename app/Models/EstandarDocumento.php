<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstandarDocumento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'estandar_id',
        'documento_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    public function estandar() {
        return $this->belongsTo(Estandar::class);
    }

    public function documento() {
        return $this->belongsTo(Documento::class);
    }


}
