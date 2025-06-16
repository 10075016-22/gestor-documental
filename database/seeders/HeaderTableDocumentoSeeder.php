<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTableDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 3,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 3,
                'text'     => 'Tipo de documento',
                'value'    => 'tipodocumento',
                'order'    => 2
            ],
            [
                'table_id' => 3,
                'text'     => 'Documento',
                'value'    => 'nombre',
                'order'    => 3
            ],
            [
                'table_id' => 3,
                'text'     => 'Descripción',
                'value'    => 'descripcion',
                'order'    => 4
            ],
            [
                'table_id' => 3,
                'text'     => '¿Es Obligatorio?',
                'value'    => 'obligatorio',
                'type_field_id'  => 4,
                'order'    => 5
            ],
            [
                'table_id' => 3,
                'text'     => '¿Genera formato?',
                'value'    => 'generaFormato',
                'type_field_id'  => 4,
                'order'    => 6
            ]
        ];

        foreach ($data as $key => $value) {
            HeadersTable::create($value);
        }
    }
}
