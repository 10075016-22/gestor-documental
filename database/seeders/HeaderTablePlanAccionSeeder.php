<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTablePlanAccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 8,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 8,
                'text'     => 'Valoración',
                'value'    => 'valoracion',
                'order'    => 2
            ],
            [
                'table_id' => 8,
                'text'     => 'Criterio',
                'value'    => 'criterio',
                'order'    => 3
            ],
            [
                'table_id' => 8,
                'text'     => 'Acción',
                'value'    => 'accion',
                'order'    => 4,
                'type_field_id' => 16
            ],
            [
                'table_id' => 8,
                'text'     => 'Color',
                'value'    => 'color',
                'order'    => 5,
                'type_field_id' => 15
            ]
        ];

        foreach ($data as $key => $item) {
            HeadersTable::create($item);
        }
    }
}
