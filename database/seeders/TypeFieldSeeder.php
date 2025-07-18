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
                'description' => 'Acción para eliminar',
                'color'       => 'error',
                'icon'        => 'mdi-delete-outline'
            ],
            [
                'name'        => 'ACTION_ASSOCIATE_STANDAR',
                'description' => 'Acción para asociar estandar a cliente',
                'color'       => 'indigo darken-2',
                'icon'        => 'mdi-account-file-text'
            ],
            [
                'name'        => 'ACTION_VIEW_FORMAT',
                'description' => 'Acción para ver formato de cliente',
                'color'       => 'primary',
                'icon'        => 'mdi-eye-outline'
            ],
            [
                'name'        => 'ACTION_ASSOCIATE_CLIENT',
                'description' => 'Acción para asociar clientes a usuario',
                'color'       => 'indigo',
                'icon'        => 'mdi-account-box-plus-outline'
            ],
            [
                'name'        => 'ACTION_EDIT',
                'description' => 'Acción para editar',
                'color'       => 'blue-grey-darken-1',
                'icon'        => 'mdi-pencil-box-outline'
            ],
            [
                'name'        => 'ACTION_VIEW_TEMPLATE',
                'description' => 'Acción para ver plantilla',
                'color'       => 'primary',
                'icon'        => 'mdi-download-box-outline'
            ],
            [
                'name'        => 'ACTION_VIEW_UPLOAD_FILE',
                'description' => 'Acción para subir archivo',
                'color'       => 'teal-darken-2',
                'icon'        => 'mdi-cloud-upload-outline'
            ],
            [
                'name'        => 'ACTION_VIEW_HISTORIC',
                'description' => 'Acción para ver historico',
                'color'       => 'indigo',
                'icon'        => 'mdi-history'
            ]
        ];

        foreach ($data as $key => $value) {
            TypeField::create($value);
        }
    }
}
