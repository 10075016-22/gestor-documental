<?php

namespace Database\Seeders;

use App\Models\TypeField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // FIELD -> Campos de grid
        // FORM -> formulario
        $data = [
            [
                'name'        => 'FIELD_TEXT',
                'description' => 'Campo tipo texto'
            ],
            [
                'name'        => 'FIELD_STATUS',
                'description' => 'Campo para estados'
            ],
            [
                'name'        => 'FIELD_LOGO',
                'description' => 'Campo para mostrar logo'
            ],
            [
                'name'        => 'FIELD_YES_NO',
                'description' => 'Campo para mostrar SI - NO'
            ],
            [
                'name'        => 'FIELD_CHIP',
                'description' => 'Campo para mostrar el texto en un chip'
            ],

            // Campos para formularios
            [
                'name'        => 'FORM_TEXT',
                'description' => 'Campo de formulario tipo texto'
            ],
            [
                'name'        => 'FORM_NUMBER',
                'description' => 'Campo de formulario tipo númerico'
            ],
            [
                'name'        => 'FORM_COLOR',
                'description' => 'Campo de formulario tipo color'
            ],
            [
                'name'        => 'FORM_EMAIL',
                'description' => 'Campo de formulario tipo email'
            ],
            [
                'name'        => 'FORM_FILE',
                'description' => 'Campo de formulario tipo archivo'
            ],
            [
                'name'        => 'FORM_SELECT',
                'description' => 'Campo de formulario tipo select'
            ],
            [
                'name'        => 'FORM_TEXTAREA',
                'description' => 'Campo de formulario tipo textarea'
            ],
            [
                'name'        => 'FORM_SWITCH',
                'description' => 'Campo de formulario tipo switch'
            ],
            [
                'name'        => 'FORM_PASSWORD',
                'description' => 'Campo de formulario tipo password'
            ],
            [
                'name'        => 'FIELD_COLOR',
                'description' => 'Campo para mostrar un texto con color de celda'
            ],
            [
                'name'        => 'FIELD_HTML',
                'description' => 'Campo para mostrar un texto html'
            ],
            [
                'name'        => 'FORM_DATE',
                'description' => 'Campo de formulario tipo fecha'
            ],
            [
                'name'        => 'FIELD_FILE',
                'description' => 'Campo para mostrar visualizar un archivo'
            ],
            [
                'name'        => 'ACTION_DELETE',
                'description' => 'Acción para eliminar'
            ],
            [
                'name'        => 'ACTION_ASSOCIATE_STANDAR',
                'description' => 'Acción para asociar estandar a cliente'
            ],
            [
                'name'        => 'ACTION_VIEW_FORMAT',
                'description' => 'Acción para ver formato de cliente'
            ]
        ];

        foreach ($data as $key => $value) {
            TypeField::create($value);
        }
    }
}
