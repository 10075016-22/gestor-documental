<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                'module'  => 'Inicio',
                'order'   => 1,
                'divider' => 0
            ],
            [
                'module'      => 'Home',
                'description' => 'Modulo principal',
                'icon'  => 'mdi-home',
                'name'  => '/dashboard',
                'status' => 1,
                'permission_id' => 1,
                'order' => 2
            ],
            [
                'module'  => 'Divisor 1',
                'order'   => 3,
                'divider' => 1
            ],
            // modulos principales
            [
                'module'  => 'Tus módulos',
                'order'   => 4,
                'divider' => 0
            ],
            [
                'module'      => 'Clientes',
                'description' => 'Modulo para ver listado de clientes',
                'icon'  => 'mdi-account-group',
                'name'  => '/dashboard/clientes',
                'order' => 5
            ],
            [
                'module'      => 'Ciclos',
                'description' => 'Modulo para ver listado de ciclos',
                'icon'  => 'mdi-list-box-outline',
                'name'  => '/dashboard/ciclos',
                'order' => 6
            ],
            [
                'module'      => 'Evaluaciones',
                'description' => 'Modulo para ver evaluación(es)',
                'icon'  => 'mdi-sort-calendar-ascending',
                'name'  => '/dashboard/evaluaciones',
                'order' => 7
            ],
            [
                'module'      => 'Documentos',
                'description' => 'Modulo para ver documentos',
                'icon'  => 'mdi-text-box-check-outline',
                'name'  => '/dashboard/documentos',
                'order' => 8
            ],
            [
                'module'      => 'Usuarios',
                'description' => 'Modulo para administrar usuarios',
                'icon'  => 'mdi-account-switch',
                'name'  => '/dashboard/usuarios',
                'order' => 9
            ],
            [
                'module'  => 'Reportes',
                'order'   => 10,
                'divider' => 0
            ],
            [
                'module'      => 'Reportes',
                'description' => 'Modulo para ver reportes',
                'icon'  => 'mdi-file-chart-outline',
                'name'  => '/dashboard/reportes',
                'order' => 11
            ],
            [
                'module'  => 'Configuración',
                'order'   => 12,
                'divider' => 0
            ],
            [
                'module'      => 'Configuración',
                'description' => 'Modulo para ver configuraciones',
                'icon'  => 'mdi-cogs',
                'name'  => '/dashboard/configuracion',
                'order' => 13
            ]
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($modules as $data) {
            Module::create($data);
        }

    }
}
