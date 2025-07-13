<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Module extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'module',
        'description',
        'icon',
        'name',
        'order',
        'status',
        'permission_id'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected function casts(): array {
        return [];
    }

    public function permission() {
        return $this->belongsTo(Permission::class, 'permission_id');
    }
}
