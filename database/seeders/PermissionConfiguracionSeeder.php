<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'  => 'configuracion',
                'alias' => 'Vista de configuración',
            ],
            [
                'name'  => 'configuracion-usuarios-clientes',
                'alias' => 'Vista de asociación de usuarios a clientes',
            ],
            [
                'name'  => 'configuracion-formato-cliente',
                'alias' => 'Vista de configuración para formatos de clientes',
            ],
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
