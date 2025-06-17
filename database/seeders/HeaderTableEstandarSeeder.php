<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTableEstandarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 4,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 4,
                'text'     => 'Nombre',
                'value'    => 'Enombre',
                'order'    => 2
            ],
            [
                'table_id' => 4,
                'text'     => 'Descripción',
                'value'    => 'Edescripcion',
                'order'    => 3
            ],
            [
                'table_id' => 4,
                'text'     => 'Cantidad',
                'value'    => 'Ecantidad',
                'order'    => 4
            ],
            [
                'table_id' => 4,
                'text'     => 'Cliente',
                'value'    => 'Cnombre',
                'order'    => 5
            ]
        ];

        foreach ($data as $key => $item) {
            HeadersTable::create($item);
        }
    }
}
