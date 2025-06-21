<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'   => 'home',
                'alias'  => 'Vista principal',
            ],
            [
                'name'   => 'home-cards',
                'alias'  => 'Vista de tarjetas de inicio',
            ],
            [
                'name'   => 'home-calendar',
                'alias'  => 'Vista de calendario de inicio',
            ],
            [
                'name'   => 'home-card-documentos-clientes',
                'alias'  => 'Vista de card de cantidad de documentos por clientes',
            ],
            [
                'name'   => 'home-card-evaluaciones-clientes',
                'alias'  => 'Vista de card de seguimiento de evaluaciones por clientes',
            ],
            [
                'name'   => 'general-menu-titulos',
                'alias'  => 'Permiso para ver los títulos del menú general',
            ]
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }

    }
}
