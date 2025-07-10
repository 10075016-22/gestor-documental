<?php

namespace Database\Seeders;

use App\Models\FormatoCliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormatoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // formato para copiar - Formato 7
            [
                'formato_id'    => 1,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 1,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 4,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 2,
                'ciclo_item_estandars_id' => 9,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 2,
                'ciclo_sub_estandar_id'   => 3,
                'ciclo_item_estandars_id' => 10,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 24,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 4,
                'ciclo_sub_estandar_id'   => 17,
                'ciclo_item_estandars_id' => 39,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 4,
                'ciclo_sub_estandar_id'   => 18,
                'ciclo_item_estandars_id' => 44,
                'preview'       => 1,
            ],

            // formato para copiar - Formato 21
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 1,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 3,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 4,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 6,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 8,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 2,
                'ciclo_item_estandars_id' => 9,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 2,
                'ciclo_sub_estandar_id'   => 4,
                'ciclo_item_estandars_id' => 11,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 2,
                'ciclo_sub_estandar_id'   => 3,
                'ciclo_item_estandars_id' => 10,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 2,
                'ciclo_sub_estandar_id'   => 7,
                'ciclo_item_estandars_id' => 14,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 21,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 22,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 24,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 26,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 15,
                'ciclo_item_estandars_id' => 30,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 15,
                'ciclo_item_estandars_id' => 31,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 15,
                'ciclo_item_estandars_id' => 31,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 4,
                'ciclo_sub_estandar_id'   => 17,
                'ciclo_item_estandars_id' => 40,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 4,
                'ciclo_sub_estandar_id'   => 18,
                'ciclo_item_estandars_id' => 48,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 5,
                'ciclo_sub_estandar_id'   => 19,
                'ciclo_item_estandars_id' => 49,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 5,
                'ciclo_sub_estandar_id'   => 19,
                'ciclo_item_estandars_id' => 50,
                'preview'       => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 3,
                'ciclo_estandar_id'       => 6,
                'ciclo_sub_estandar_id'   => 20,
                'ciclo_item_estandars_id' => 53,
                'preview'       => 1,
            ],

            // formato para copiar - Formato 60
            // [
                
            // ]
        ];

        foreach ($data as $key => $value) {
            FormatoCliente::create($value);
        }
    }
}
