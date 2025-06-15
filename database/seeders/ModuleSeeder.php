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
                'module'      => 'Home',
                'description' => 'Modulo principal',
                'icon'  => 'mdi-home',
                'name'  => '/dashboard',
                'order' => 1,
                'status' => 1,
                'permission_id' => 1
            ],
            [
                'module'  => 'Divisor',
                'order'   => 2,
                'divider' => 1
            ],
            [
                'module'      => 'Ciclos',
                'description' => 'Modulo para ver listado de ciclos',
                'icon'  => 'mdi-list-box-outline',
                'name'  => '/dashboard/ciclos',
                'order' => 3
            ],
            [
                'module'      => 'Clientes',
                'description' => 'Modulo para ver listado de clientes',
                'icon'  => 'mdi-account-group',
                'name'  => '/dashboard/clientes',
                'order' => 3
            ],
            [
                'module'      => 'Evaluaciones',
                'description' => 'Modulo para ver evaluación(es)',
                'icon'  => 'mdi-sort-calendar-ascending',
                'name'  => '/dashboard/clientes',
                'order' => 4
            ],
            [
                'module'      => 'Documentos',
                'description' => 'Modulo para ver documentos',
                'icon'  => 'mdi-text-box-check-outline',
                'name'  => '/dashboard/documento',
                'order' => 5
            ],
            [
                'module'  => 'Divisor',
                'order'   => 6,
                'divider' => 1
            ],
            [
                'module'      => 'Reportes',
                'description' => 'Modulo para ver reportes',
                'icon'  => 'mdi-file-chart-outline',
                'name'  => '/dashboard/reportes',
                'order' => 7
            ],
            [
                'module'      => 'Configuración',
                'description' => 'Modulo para ver configuraciones',
                'icon'  => 'mdi-cogs',
                'name'  => '/dashboard/configuracion',
                'order' => 8
            ]
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($modules as $data) {
            Module::create($data);
        }

    }
}
