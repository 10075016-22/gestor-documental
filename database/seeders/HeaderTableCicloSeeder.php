<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTableCicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 7,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 7,
                'text'     => 'Nombre',
                'value'    => 'nombre',
                'order'    => 2
            ],
            [
                'table_id' => 7,
                'text'     => 'Descripción',
                'value'    => 'descripcion',
                'order'    => 3
            ],
        ];   
        
        foreach ($data as $key => $value) {
            HeadersTable::create($value);
        }
    }
}
