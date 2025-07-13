<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionsTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_id',
        'type_field_id',
        'order',
        'message',
        'color',
        'icon'
    ];

    protected $hidden = [
        'table_id',
        'type_field_id',
        'created_at',
        'updated_at'
    ];

    public function table() {
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function typeField() {
        return $this->belongsTo(TypeField::class, 'type_field_id');
    }
}
