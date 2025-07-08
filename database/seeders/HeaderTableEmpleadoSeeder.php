<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTableEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 10,
                'text'     => 'Tipo Id.',
                'value'    => 'tipodoc',
                'order'    => 1,
                'type_field_id'  => 1
            ],
            [
                'table_id' => 10,
                'text'     => 'N° Documento',
                'value'    => 'nrodocumento',
                'order'    => 1,
                'type_field_id'  => 1
            ],
            [
                'table_id' => 10,
                'text'     => 'Empleado',
                'value'    => 'fullname',
                'order'    => 2,
            ],
            [
                'table_id' => 10,
                'text'     => 'Email',
                'value'    => 'email',
                'order'    => 3,
            ],
            [
                'table_id' => 10,
                'text'     => 'Télefono',
                'value'    => 'telefono',
                'order'    => 4,
            ],
            [
                'table_id' => 10,
                'text'     => 'Fecha de ingreso',
                'value'    => 'fecha_ingreso',
                'order'    => 5,
            ],
            [
                'table_id' => 10,
                'text'     => 'Cargo',
                'value'    => 'cargo',
                'order'    => 6,
            ],
        ];

        foreach ($data as $key => $value) {
            HeadersTable::create($value);
        }
    }
}
