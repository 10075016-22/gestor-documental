<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 2,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 2,
                'text'     => 'Usuario',
                'value'    => 'name',
                'order'    => 2
            ],
            [
                'table_id' => 2,
                'text'     => 'Nombre de usuario',
                'value'    => 'fullname',
                'order'    => 3
            ],
            [
                'table_id' => 2,
                'text'     => 'Email',
                'value'    => 'email',
                'order'    => 4
            ],
            [
                'table_id' => 2,
                'type_field_id'  => 2,
                'text'     => 'Estado',
                'value'    => 'status',
                'order'    => 5
            ],
            [
                'table_id' => 2,
                'type_field_id'  => 5,
                'text'     => 'Perfil',
                'value'    => 'roles',
                'order'    => 6
            ],
            [
                'table_id' => 2,
                'type_field_id'  => 5,
                'text'     => 'Clientes asociados',
                'value'    => 'clientes',
                'width'    => '25%',
                'order'    => 6
            ],
        ];

        foreach ($data as $key => $value) {
            HeadersTable::create($value);
        }
    }
}
