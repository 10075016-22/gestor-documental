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
                'module'        => 'Inicio',
                'order'         => 1,
                'divider'       => 0,
                'permission_id' => 1, // ID del permiso de vista principal
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
                'module'        => 'Divisor 1',
                'divider'       => 1,
                'order'         => 3,
                'permission_id' => 6,
            ],
            // modulos principales
            [
                'module'  => 'Tus módulos',
                'divider' => 0,
                'order'   => 4,
            ],
            [
                'module'        => 'Clientes',
                'description'   => 'Modulo para ver listado de clientes',
                'icon'          => 'mdi-account-group',
                'name'          => '/dashboard/clientes',
                'order'         => 5,
                'permission_id' => 7,
            ],
            [
                'module'        => 'Evaluaciones',
                'description'   => 'Modulo para ver evaluación(es)',
                'icon'          => 'mdi-sort-calendar-ascending',
                'name'          => '/dashboard/evaluaciones',
                'order'         => 6,
                'permission_id' => 13,
            ],
            [
                'module'        => 'Documentos',
                'description'   => 'Modulo para ver documentos',
                'icon'          => 'mdi-text-box-check-outline',
                'name'          => '/dashboard/documentos',
                'order'         => 7,
                'permission_id' => 14,
            ],
            [
                'module'        => 'Fecha de Documentos',
                'description'   => 'Vista para configurar calendario de documentos | fechas en las que se van a subir los documentos',
                'icon'          => 'mdi-calendar-cursor-outline',
                'name'          => '/dashboard/calendario-documentos',
                'order'         => 8,
                'permission_id' => 15,
            ],
            [
                'module'        => 'Estandar',
                'description'   => 'Modulo para administrar estandar y documentos',
                'icon'          => 'mdi-file-document-arrow-right-outline',
                'name'          => '/dashboard/estandar',
                'order'         => 9,
                'permission_id' => 16,
            ],
            [
                'module'        => 'Usuarios',
                'description'   => 'Modulo para administrar usuarios',
                'icon'          => 'mdi-account-switch',
                'name'          => '/dashboard/usuarios',
                'order'         => 10,
                'permission_id' => 17,
            ],
            [
                'module'        => 'Reportes',
                'order'         => 11,
                'divider'       => 0,
                'permission_id' => 6,
            ],
            [
                'module'        => 'Reportes',
                'description'   => 'Modulo para ver reportes',
                'icon'          => 'mdi-file-chart-outline',
                'name'          => '/dashboard/reportes',
                'order'         => 12,
                'permission_id' => 18,
            ],
            [
                'module'        => 'Configuración',
                'order'         => 13,
                'divider'       => 0,
                'permission_id' => 6,
            ],
            [
                'module'        => 'Ciclos',
                'description'   => 'Modulo para ver listado de ciclos',
                'icon'          => 'mdi-list-box-outline',
                'name'          => '/dashboard/ciclos',
                'order'         => 14,
            ],
            [
                'module'        => 'Configuración',
                'description'   => 'Modulo para ver configuraciones',
                'icon'          => 'mdi-cogs',
                'name'          => '/dashboard/configuracion',
                'order'         => 15,
                'permission_id' => 18,
            ]
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($modules as $data) {
            Module::create($data);
        }

    }
}
