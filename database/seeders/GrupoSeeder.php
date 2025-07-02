<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'nombre' => 'General' ],
            [ 'nombre' => 'Home' ],
            [ 'nombre' => 'Clientes' ],
            [ 'nombre' => 'Evaluaciones' ],
            [ 'nombre' => 'Documentos' ],
            [ 'nombre' => 'Fechas de documentos' ],
            [ 'nombre' => 'Estandar' ],
            [ 'nombre' => 'Usuarios' ],
            [ 'nombre' => 'Perfiles' ],
            [ 'nombre' => 'Reportes' ],
            [ 'nombre' => 'Configuración' ],
            [ 'nombre' => 'Formatos Cliente' ],
            [ 'nombre' => 'Plan de acción' ],
        ];

        foreach ($data as $key => $value) {
            Grupo::create($value);
        }
    }
}
