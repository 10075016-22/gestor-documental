<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'  => 'empleados',
                'alias' => 'Menú de empleados',
            ],
            [
                'name'  => 'empleados-datatable',
                'alias' => 'Vista de lista de empleados',
            ],
            [
                'name'  => 'empleados-datatable-nuevo',
                'alias' => 'Vista de lista de empleados - Nuevo',
            ],
            [
                'name'  => 'empleados-datatable-editar',
                'alias' => 'Vista de lista de empleados - Editar',
            ],
            [
                'name'  => 'empleados-datatable-eliminar',
                'alias' => 'Vista de lista de empleados - Eliminar',
            ],
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
