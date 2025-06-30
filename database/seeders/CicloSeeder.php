<?php

namespace Database\Seeders;

use App\Models\Ciclo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nombre' => 'Planear',
            ],
            [
                'nombre' => 'Hacer'
            ],
            [
                'nombre' => 'Verificar'
            ],
            [
                'nombre' => 'Actuar'
            ]
        ];

        foreach ($data as $value) {
            Ciclo::create($value);
        }
    }
}
