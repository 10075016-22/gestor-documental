<?php

namespace Database\Seeders;

use App\Models\FormsTable;
use Illuminate\Database\Seeder;

class FormEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id'      => 10,
                'type_field_id' => 11,
                'field_name' => 'tipoidentificacion_id',
                'label'      => 'Tipo identificación',
                'size'       => 6,
                'required'   => 1,
                'order'      => 1,
                'query'      => 'id,nombre AS text|tipo_identificacions'
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 11,
                'field_name' => 'cliente_id',
                'label'      => 'Cliente',
                'size'       => 6,
                'required'   => 1,
                'order'      => 1,
                'query'      => 'id,nombre AS text|clientes'
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 6,
                'field_name' => 'nrodocumento',
                'label'      => 'N° documento',
                'size'       => 6,
                'required'   => 1,
                'maxlength'  => 12,
                'order'      => 2
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 6,
                'field_name' => 'nombre',
                'label'      => 'Nombre',
                'size'       => 6,
                'required'   => 1,
                'order'      => 3
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 6,
                'field_name' => 'apellidos',
                'label'      => 'Apellidos',
                'size'       => 6,
                'required'   => 1,
                'order'      => 4
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 9,
                'field_name' => 'email',
                'label'      => 'Email',
                'size'       => 6,
                'required'   => 1,
                'order'      => 5
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 6,
                'field_name' => 'telefono',
                'label'      => 'Télefono',
                'size'       => 6,
                'required'   => 1,
                'maxlength'  => 12,
                'order'      => 6
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 17,
                'field_name' => 'fecha_ingreso',
                'label'      => 'Fecha de ingreso',
                'size'       => 6,
                'required'   => 1,
                'order'      => 7
            ],
            [
                'table_id'      => 10,
                'type_field_id' => 6,
                'field_name' => 'cargo',
                'label'      => 'Cargo',
                'size'       => 6,
                'required'   => 1,
                'order'      => 8
            ]
        ];

        foreach ($data as $value) {
            FormsTable::create($value);
        }
    }
}
