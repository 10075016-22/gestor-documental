<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use App\Models\PlaneacionDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTablePlaneacionDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 6,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 6,
                'text'     => 'Cliente',
                'value'    => 'clientenombre',
                'order'    => 2
            ],
            [
                'table_id' => 6,
                'text'     => 'Documento',
                'value'    => 'docnombre',
                'order'    => 3
            ],
            [
                'table_id' => 6,
                'text'     => 'Observación',
                'value'    => 'observaciones',
                'order'    => 4
            ],
            [
                'table_id' => 6,
                'text'     => 'Fecha limite',
                'value'    => 'fecha_fin',
                'type_field_id' => 5,
                'order'    => 5
            ],
            [
                'table_id' => 6,
                'text'     => '¿Documento cargado?',
                'value'    => 'estado',
                'type_field_id' => 4,
                'order'    => 6
            ],            
            // seguimiento
            [
                'table_id' => 11,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 11,
                'text'     => 'Cliente',
                'value'    => 'clientenombre',
                'order'    => 2
            ],
            [
                'table_id' => 11,
                'text'     => 'Documento',
                'value'    => 'docnombre',
                'order'    => 3
            ],
            [
                'table_id' => 11,
                'text'     => 'Observación',
                'value'    => 'observaciones',
                'order'    => 4
            ],
            [
                'table_id' => 11,
                'text'     => 'Fecha limite',
                'value'    => 'fecha_fin',
                'type_field_id' => 5,
                'order'    => 5
            ],
        ];

        foreach ($data as $key => $value) {
            HeadersTable::create($value);
        }
    }
}
