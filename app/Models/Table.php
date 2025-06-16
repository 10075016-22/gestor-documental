<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Table extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'table',
        'descripcion',
        'endpoint',
        'icon'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    // relationship
    public function headers() {
        return $this->hasMany(HeadersTable::class, 'table_id', 'id');
    }
}
