<?php

namespace Database\Seeders;

use App\Models\GrupoPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // General
            [ 'grupo_id' => 1, 'permission_id' => 6 ],
            // Home
            [ 'grupo_id' => 2, 'permission_id' => 1 ],
            [ 'grupo_id' => 2, 'permission_id' => 2 ],
            [ 'grupo_id' => 2, 'permission_id' => 3 ],
            [ 'grupo_id' => 2, 'permission_id' => 4 ],
            [ 'grupo_id' => 2, 'permission_id' => 5 ],

            // Clientes
            [ 'grupo_id' => 3, 'permission_id' => 7 ],
            [ 'grupo_id' => 3, 'permission_id' => 8 ],
            [ 'grupo_id' => 3, 'permission_id' => 9 ],
            [ 'grupo_id' => 3, 'permission_id' => 10 ],
            [ 'grupo_id' => 3, 'permission_id' => 11 ],
            [ 'grupo_id' => 3, 'permission_id' => 12 ],
            [ 'grupo_id' => 3, 'permission_id' => 13 ],

            // Documentos - 5
            [ 'grupo_id' => 5, 'permission_id' => 14 ],
            [ 'grupo_id' => 5, 'permission_id' => 15 ],
            [ 'grupo_id' => 5, 'permission_id' => 16 ],
            [ 'grupo_id' => 5, 'permission_id' => 17 ],
            [ 'grupo_id' => 5, 'permission_id' => 45 ],

            // Fecha documentos
            [ 'grupo_id' => 6, 'permission_id' => 18 ],
            [ 'grupo_id' => 6, 'permission_id' => 19 ],
            [ 'grupo_id' => 6, 'permission_id' => 20 ],
            [ 'grupo_id' => 6, 'permission_id' => 21 ],
            [ 'grupo_id' => 6, 'permission_id' => 51 ],
            [ 'grupo_id' => 6, 'permission_id' => 54 ],

            // Estandar
            [ 'grupo_id' => 7, 'permission_id' => 22 ],
            [ 'grupo_id' => 7, 'permission_id' => 46 ],

            // Usuarios
            [ 'grupo_id' => 8, 'permission_id' => 23 ],
            [ 'grupo_id' => 8, 'permission_id' => 24 ],
            [ 'grupo_id' => 8, 'permission_id' => 25 ],
            [ 'grupo_id' => 8, 'permission_id' => 26 ],
            [ 'grupo_id' => 8, 'permission_id' => 27 ],
            [ 'grupo_id' => 8, 'permission_id' => 28 ],

            // Perfiles
            [ 'grupo_id' => 9, 'permission_id' => 29 ],
            [ 'grupo_id' => 9, 'permission_id' => 30 ],
            [ 'grupo_id' => 9, 'permission_id' => 31 ],
            [ 'grupo_id' => 9, 'permission_id' => 32 ],

            // Empleados
            [ 'grupo_id' => 10, 'permission_id' => 33 ],
            [ 'grupo_id' => 10, 'permission_id' => 34 ],
            [ 'grupo_id' => 10, 'permission_id' => 35 ],
            [ 'grupo_id' => 10, 'permission_id' => 36 ],
            [ 'grupo_id' => 10, 'permission_id' => 37 ],

            // Plan de acción
            [ 'grupo_id' => 14, 'permission_id' => 38 ],
            [ 'grupo_id' => 14, 'permission_id' => 39 ],

            // Seguimiento
            [ 'grupo_id' => 15, 'permission_id' => 44 ],
            [ 'grupo_id' => 15, 'permission_id' => 52 ],
            [ 'grupo_id' => 15, 'permission_id' => 53 ],

            // formatos cliente
            [ 'grupo_id' => 13, 'permission_id' => 47 ],
            [ 'grupo_id' => 13, 'permission_id' => 48 ],
            [ 'grupo_id' => 13, 'permission_id' => 49 ],

            // evaluacion
            [ 'grupo_id' => 4, 'permission_id' => 55 ],
            [ 'grupo_id' => 4, 'permission_id' => 56 ],
            [ 'grupo_id' => 4, 'permission_id' => 57 ],
            [ 'grupo_id' => 4, 'permission_id' => 58 ],
            [ 'grupo_id' => 4, 'permission_id' => 61 ],

            // configuración
            [ 'grupo_id' => 12, 'permission_id' => 43 ],

        };

        foreach ($data as $key => $value) {
            GrupoPermission::create($value);
        }
    }
}
