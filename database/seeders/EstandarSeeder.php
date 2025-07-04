<?php

namespace Database\Seeders;

use App\Models\Estandar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstandarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nombre'        => '7 Estandarés',
                'descripcion'   => 'AUTOEVALUACIÓN DE ACUERDO A LOS ESTÁNDARES MÍNIMOS SG-SST',
                'cantidad'      => '7'
            ],
            [
                'nombre'        => '21 Estandarés',
                'descripcion'   => 'AUTOEVALUACIÓN DE ACUERDO A LOS ESTÁNDARES MÍNIMOS SG-SST',
                'cantidad'      => '21'
            ],
            [
                'nombre'        => '60 Estandarés',
                'descripcion'   => 'AUTOEVALUACIÓN DE ACUERDO A LOS ESTÁNDARES MÍNIMOS SG-SST',
                'cantidad'      => '60'
            ]

        ];
        
        //Estandar::factory(35)->create();
        foreach  ($data as $key => $value){
            Estandar::create($value);
        }
    }
}
