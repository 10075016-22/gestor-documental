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
                'name'   => 'Home',
                'alias'  => 'Vista principal'
            ],
            [
                'name'  => 'Ciclo',
                'alias' => 'Vista de ciclos'
            ],
            [
                'name'  => 'Ciclo-Estandar',
                'alias' => 'Vista de estandar de ciclos'
            ],
            [
                'name'  => 'Ciclo-Sub-Estandar',
                'alias' => 'Vista de sub estandar de ciclos'
            ],
            [
                'name'  => 'Tipo-Documentos',
                'alias' => 'Vista de tipo de documentos'
            ],
            [
                'name'  => 'Documentos',
                'alias' => 'Vista de documentos'
            ],
            [
                'name'  => 'Clientes',
                'alias' => 'Vista de clientes'
            ]
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }

    }
}
