<?php

namespace Database\Seeders;

use App\Models\FormsTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormCalendarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id'      => 6,
                'type_field_id' => 11, // FORM_SELECT
                'field_name'    => 'cliente_id',
                'label'         => 'Cliente',
                'size'          => 12,
                'required'      => 1,
                'order'         => 1,
                'query'         => 'id,nombre AS text|clientes'
            ],
            [
                'table_id'      => 6,
                'type_field_id' => 11, // FORM_SELECT
                'field_name'    => 'documento_id',
                'label'         => 'Documento',
                'size'          => 12,
                'required'      => 1,
                'order'         => 2,
                'query'         => 'id,nombre AS text|documentos'
            ],
            [
                'table_id'      => 6,
                'type_field_id' => 12, // FORM_TEXTAREA
                'field_name'    => 'observaciones',
                'label'         => 'Observaciones',
                'size'          => 12,
                'required'      => 0,
                'order'         => 3
            ],
            [
                'table_id'      => 6,
                'type_field_id' => 17, // FORM_DATE
                'field_name'    => 'fecha_fin',
                'label'         => 'Fecha de entrega',
                'size'          => 6,
                'required'      => 1,
                'order'         => 4
            ]
        ];

        foreach ($data as $key => $value) {
            FormsTable::create($value);
        }
    }
}
