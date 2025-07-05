<?php

namespace Database\Seeders;

use App\Models\CicloEstandar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CicloEstandarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // estandar's para ciclo 1 - PLANEAR
            [
                'ciclo_id'    => 1,
                'nombre'      => 'Recursos (10%)',
                'descripcion' => 'Estandar 7 - recursos 10%',
                'porcentaje'  => 0.1
            ],
            [
                'ciclo_id'    => 1,
                'nombre'      => 'Gestión integral del Sistema de Gestión de la Seguridad y la Salud en el Trabajo (15%)',
                'descripcion' => 'Item general 15%',
                'porcentaje'  => 0.15
            ],

            // estandar's para ciclo 2 - HACER
            [
                'ciclo_id'    => 2,
                'nombre'      => 'Gestión de la salud (20%)',
                'descripcion' => 'Item general 20%',
                'porcentaje'  => 0.2
            ],
            [
                'ciclo_id'    => 2,
                'nombre'      => 'Gestión de peligros y riesgos (30%)',
                'descripcion' => 'Item general 30%',
                'porcentaje'  => 0.3
            ],
            [
                'ciclo_id'    => 2,
                'nombre'      => 'Gestión de amenazas (10%)',
                'descripcion' => 'Item general 10%',
                'porcentaje'  => 0.1
            ],
            // Estandar's para ciclo 3 - VERIFICAR
            [
                'ciclo_id'    => 3,
                'nombre'      => 'Verificación del SG-SST (5%)',
                'descripcion' => 'Item general 5%',
                'porcentaje'  => 0.05
            ],
            // Estandar's para ciclo 4 - ACTUAR
            [
                'ciclo_id'    => 4,
                'nombre'      => 'Mejoramiento (10%)',
                'descripcion' => 'Item general 10%',
                'porcentaje'  => 0.1
            ]

        ];

        foreach ($data as $key => $value) {
            CicloEstandar::create($value);
        }
    }
}
