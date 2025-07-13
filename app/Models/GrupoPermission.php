<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class GrupoPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupo_id',
        'permission_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function grupo() {
        return $this->belongsTo(Grupo::class);
    }

    public function permission() {
        return $this->belongsTo(Permission::class);
    }
}
