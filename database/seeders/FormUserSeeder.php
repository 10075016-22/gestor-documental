<?php

namespace Database\Seeders;

use App\Models\FormsTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'table_id'      => 2,
                'type_field_id' => 6,
                'field_name' => 'fullname',
                'label'      => 'Nombre completo',
                'size'       => 12,
                'required'   => 1,
                'order'      => 1
            ],
            [
                'table_id'      => 2,
                'type_field_id' => 6,
                'field_name' => 'name',
                'label'      => 'Usuario',
                'size'       => 6,
                'required'   => 1,
                'order'      => 2
            ],
            [
                'table_id'      => 2,
                'type_field_id' => 9,
                'field_name' => 'email',
                'label'      => 'Email',
                'size'       => 6,
                'required'   => 1,
                'order'      => 3
            ],
            [
                'table_id'      => 2,
                'type_field_id' => 14,
                'field_name' => 'password',
                'label'      => 'Contraseña',
                'size'       => 6,
                'required'   => 1,
                'editable'   => 0,
                'order'      => 4,
            ],
            [
                'table_id'      => 2,
                'type_field_id' => 11,
                'field_name' => 'role_id',
                'label'      => 'Perfil',
                'size'       => 6,
                'required'   => 1,
                'order'      => 4,
                'query'      => 'id,name AS text|roles'
            ],
            [
                'table_id'      => 2,
                'type_field_id' => 13,
                'field_name' => 'status',
                'label'      => 'Estado',
                'size'       => 4,
                'order'      => 5
            ]
        ];

        foreach ($data as $value) {
            FormsTable::create($value);
        }
    }
}
