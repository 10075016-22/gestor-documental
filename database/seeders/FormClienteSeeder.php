<?php

namespace Database\Seeders;

use App\Models\FormsTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 1,
                'type_field_id' => 6, // FORM_TEXT
                'field_name' => 'nombre',
                'label' => 'Nombre',
                'size' => 12,
                'required' => 1,
                'order' => 1,
                'visible' => 1,
                'editable' => 1,
                'filter_field' => 0,
                'modify_to' => null,
                'info' => 'Nombre del cliente'
            ],
            [
                'table_id' => 1,
                'type_field_id' => 6, // FORM_TEXT
                'field_name' => 'nit',
                'label' => 'Nit',
                'size' => 4,
                'required' => 1,
                'order' => 1,
                'visible' => 1,
                'editable' => 1,
                'filter_field' => 0,
                'modify_to' => null,
                'info' => 'Nit de cliente'
            ],
            [
                'table_id' => 1,
                'type_field_id' => 9, // FORM_EMAIL
                'field_name' => 'email',
                'label' => 'Email',
                'size' => 4,
                'required' => 1,
                'order' => 1,
                'visible' => 1,
                'editable' => 1,
                'filter_field' => 0,
                'modify_to' => null,
                'info' => 'Email de cliente'
            ],
            [
                'table_id' => 1,
                'type_field_id' => 6, // FORM_TEXT
                'field_name' => 'direccion',
                'label' => 'Dirección',
                'size' => 4,
                'required' => 1,
                'order' => 1,
                'visible' => 1,
                'editable' => 1,
                'filter_field' => 0,
                'modify_to' => null,
                'info' => 'Dirección de cliente'
            ],
            [
                'table_id' => 1,
                'type_field_id' => 6, // FORM_TEXT
                'field_name' => 'telefono',
                'label' => 'Télefono',
                'size' => 4,
                'required' => 1,
                'order' => 1,
                'visible' => 1,
                'editable' => 1,
                'filter_field' => 0,
                'modify_to' => null,
                'info' => 'Télefono de cliente'
            ],
            [
                'table_id' => 1,
                'type_field_id' => 10, // FORM_FILE
                'field_name' => 'logo',
                'label' => 'Logo',
                'size' => 4,
                'required' => 1,
                'order' => 1,
                'visible' => 1,
                'editable' => 1,
                'filter_field' => 0,
                'modify_to' => null,
                'info' => 'Logo de cliente'
            ]
        ];

        foreach ($data as $value) {
            FormsTable::create($value);
        }
    }
}
