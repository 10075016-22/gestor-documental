<?php

namespace Database\Seeders;

use App\Models\TipoIdentificacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoIdentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [ 
            [ 
                'nombre' => 'Cédula de ciudadanía', 
                'codigo' => 'CC',
                'observacion' => 'Documento oficial para colombianos mayores de 18 años' 
            ],
            [ 
                'nombre' => 'Cédula de extranjería', 
                'codigo' => 'CE',
                'observacion' => 'Documento de identidad para extranjeros mayores de edad residentes en Colombia' 
            ],
            [ 
                'nombre' => 'Pasaporte', 
                'codigo' => 'PA',
                'observacion' => 'Documento de viaje, puede usarse como identificación en ciertos casos' 
            ],
            [ 
                'nombre' => 'Permiso por Protección Temporal (PPT)', 
                'codigo' => 'PPT',
                'observacion' => 'Emitido a migrantes venezolanos bajo el Estatuto Temporal de Protección' 
            ],
            [ 
                'nombre' => 'Permiso Especial de Permanencia (PEP)', 
                'codigo' => 'PEP',
                'observacion' => 'Ya no se expide, pero algunos aún están vigentes hasta su vencimiento' 
            ],
        ];

        foreach ($data as $value) {
            TipoIdentificacion::create($value);
        }
    }
}
