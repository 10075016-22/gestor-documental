<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Seeder;

class HeaderTableEvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 12,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 12,
                'text'     => 'Cliente',
                'value'    => 'nombre',
                'order'    => 2
            ],
            [
                'table_id' => 12,
                'text'     => 'Formato',
                'value'    => 'formato',
                'order'    => 3
            ],

            // detalle de evaluación
            [
                'table_id' => 13,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 13,
                'text'     => 'Ciclo',
                'value'    => 'ciclo',
                'order'    => 2
            ],
            [
                'table_id' => 13,
                'text'     => 'Estandar',
                'value'    => 'estandar',
                'order'    => 3
            ],
            [
                'table_id' => 13,
                'text'     => 'Item estándar',
                'value'    => 'itemdelestandar',
                'order'    => 4
            ],
            [
                'table_id' => 13,
                'text'     => 'Valor',
                'value'    => 'valor',
                'order'    => 5
            ],
            [
                'table_id' => 13,
                'text'     => 'Calificación',
                'value'    => 'calificacion',
                'order'    => 6
            ],
            
        ];

        foreach ($data as $key => $value) {
            HeadersTable::create($value);
        }
    }
}
