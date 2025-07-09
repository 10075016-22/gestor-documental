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
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 4,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 2,
                'ciclo_item_estandars_id' => 9,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 2,
                'ciclo_sub_estandar_id'   => 3,
                'ciclo_item_estandars_id' => 10,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 24,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 4,
                'ciclo_sub_estandar_id'   => 17,
                'ciclo_item_estandars_id' => 39,
            ],
            [
                'formato_id'    => 1,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 4,
                'ciclo_sub_estandar_id'   => 18,
                'ciclo_item_estandars_id' => 44,
            ],

            // formato para copiar - Formato 21
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 1,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 3,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 4,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 6,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 1,
                'ciclo_item_estandars_id' => 8,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 1,
                'ciclo_sub_estandar_id'   => 2,
                'ciclo_item_estandars_id' => 9,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 2,
                'ciclo_sub_estandar_id'   => 4,
                'ciclo_item_estandars_id' => 11,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 2,
                'ciclo_sub_estandar_id'   => 3,
                'ciclo_item_estandars_id' => 10,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 1,
                'ciclo_estandar_id'       => 2,
                'ciclo_sub_estandar_id'   => 7,
                'ciclo_item_estandars_id' => 14,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 21,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 22,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 24,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 14,
                'ciclo_item_estandars_id' => 26,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 15,
                'ciclo_item_estandars_id' => 30,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 15,
                'ciclo_item_estandars_id' => 31,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 3,
                'ciclo_sub_estandar_id'   => 15,
                'ciclo_item_estandars_id' => 31,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 4,
                'ciclo_sub_estandar_id'   => 17,
                'ciclo_item_estandars_id' => 40,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 4,
                'ciclo_sub_estandar_id'   => 18,
                'ciclo_item_estandars_id' => 48,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 5,
                'ciclo_sub_estandar_id'   => 19,
                'ciclo_item_estandars_id' => 49,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 2,
                'ciclo_estandar_id'       => 5,
                'ciclo_sub_estandar_id'   => 19,
                'ciclo_item_estandars_id' => 50,
            ],
            [
                'formato_id'    => 2,
                'ciclo_id'      => 3,
                'ciclo_estandar_id'       => 6,
                'ciclo_sub_estandar_id'   => 20,
                'ciclo_item_estandars_id' => 53,
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
