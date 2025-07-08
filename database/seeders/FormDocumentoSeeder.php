<?php

namespace Database\Seeders;

use App\Models\FormsTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id'      => 3,
                'type_field_id' => 6, // FORM_TEXT
                'field_name' => 'nombre',
                'label'      => 'Nombre de documento',
                'size'       => 12,
                'required'   => 1,
                'order'      => 1
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 12, // FORM_TEXTAREA
                'field_name' => 'descripcion',
                'label'      => 'Comentarios para el Responsable del SGSST',
                'size'       => 12,
                'required'   => 0,
                'order'      => 2
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 13, // FORM_SWITCH
                'field_name' => 'obligatorio',
                'label'      => '¿Es obligatorio?',
                'size'       => 6,
                'required'   => 0,
                'order'      => 3
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 13, // FORM_SWITCH
                'field_name' => 'generaFormato',
                'label'      => '¿Genera Formato?',
                'size'       => 6,
                'required'   => 0,
                'order'      => 4
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 10, // FORM_FILE
                'field_name' => 'plantilla',
                'label'      => 'Plantilla',
                'size'       => 6,
                'required'   => 0,
                'order'      => 5
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 11, // FORM_SELECT
                'field_name' => 'tipo_documento_id',
                'label'      => 'Tipo de documento',
                'size'       => 6,
                'required'   => 1,
                'order'      => 6,
                'query'      => 'id,nombre AS text|tipo_documentos'
            ]
        ];

        foreach ($data as $value) {
            FormsTable::create($value);
        }
    }
}
