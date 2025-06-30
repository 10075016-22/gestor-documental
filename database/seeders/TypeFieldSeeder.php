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
            ]
        ];

        foreach ($data as $key => $value) {
            TypeField::create($value);
        }
    }
}
