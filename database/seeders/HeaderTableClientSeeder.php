<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTableClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 1,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 1,
                'text'     => 'Logo',
                'value'    => 'logo',
                'order'    => 2
            ],
            [
                'table_id' => 1,
                'text'     => 'Nombre',
                'value'    => 'nombre',
                'order'    => 3
            ],
            [
                'table_id' => 1,
                'text'     => 'NIT',
                'value'    => 'nit',
                'order'    => 4
            ],
            [
                'table_id' => 1,
                'text'     => 'Email',
                'value'    => 'email',
                'order'    => 5
            ],
            [
                'table_id' => 1,
                'text'     => 'Dirección',
                'value'    => 'direccion',
                'order'    => 6
            ],
            [
                'table_id' => 1,
                'text'     => 'Télefono',
                'value'    => 'telefono',
                'order'    => 7
            ]
        ];

        foreach ($data as $key => $value) {
            HeadersTable::create($value);
        }
    }
}
