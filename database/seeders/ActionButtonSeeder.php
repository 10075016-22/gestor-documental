<?php

namespace Database\Seeders;

use App\Models\ActionsTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id'      => 1,
                'type_field_id' => 19,
                'order'         => 1,
                'message'       => 'Eliminar'
            ],
            [
                'table_id'      => 1,
                'type_field_id' => 20,
                'order'         => 1,
                'message'       => 'Asociar estandar'
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 19,
                'order'         => 1,
                'message'       => 'Eliminar'
            ],
            [
                'table_id'      => 1,
                'type_field_id' => 21,
                'order'         => 1,
                'message'       => 'Ver formato cliente'
            ],
            [
                'table_id'      => 2,
                'type_field_id' => 22,
                'order'         => 1,
                'message'       => 'Asociar clientes'
            ]
        ];

        foreach ($data as $value) {
            ActionsTable::create($value);
        }
    }
}
