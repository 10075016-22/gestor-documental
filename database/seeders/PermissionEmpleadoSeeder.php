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
                'alias' => 'Vista de lista de empleados',
            ]
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
