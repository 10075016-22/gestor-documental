<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'grupo_permissions');
    }

}
