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
                'message'       => 'Eliminar',
                'permission_id' => 11
            ],
            [
                'table_id'      => 1,
                'type_field_id' => 20,
                'order'         => 1,
                'message'       => 'Asociar estandar',
                'permission_id' => 13
            ],
            [
                'table_id'      => 1,
                'type_field_id' => 23,
                'order'         => 1,
                'message'       => 'Editar',
                'permission_id' => 10
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 19,
                'order'         => 1,
                'message'       => 'Eliminar',
                'permission_id' => 17
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 23,
                'order'         => 1,
                'message'       => 'Editar',
                'permission_id' => 16
            ],
            [
                'table_id'      => 1,
                'type_field_id' => 21,
                'order'         => 1,
                'message'       => 'Ver formato cliente',
                'permission_id' => 12
            ],
            [
                'table_id'      => 2,
                'type_field_id' => 22,
                'order'         => 1,
                'message'       => 'Asociar clientes',
                'permission_id' => 28
            ],
            [
                'table_id'      => 2,
                'type_field_id' => 23,
                'order'         => 1,
                'message'       => 'Editar',
                'permission_id' => 26
            ],
            [
                'table_id'      => 6,
                'type_field_id' => 23,
                'order'         => 1,
                'message'       => 'Editar',
                'permission_id' => 20
            ],
            [
                'table_id'      => 6,
                'type_field_id' => 19,
                'order'         => 1,
                'message'       => 'Eliminar',
                'permission_id' => 21
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 23,
                'order'         => 1,
                'message'       => 'Editar',
                'permission_id' => 36
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 19,
                'order'         => 1,
                'message'       => 'Eliminar',
                'permission_id' => 37
            ],
            [
                'table_id'      => 11,
                'type_field_id' => 24,
                'order'         => 1,
                'message'       => 'Ver plantilla',
                'permission_id' => 52
            ]
        ];

        foreach ($data as $value) {
            ActionsTable::create($value);
        }
    }
}
