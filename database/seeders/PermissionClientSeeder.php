<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'  => 'clientes',
                'alias' => 'Menú de clientes'
            ],
            [
                'name'  => 'clientes-datatable',
                'alias' => 'Vista de datatable de clientes'
            ],
            [
                'name'  => 'clientes-datatable-nuevo',
                'alias' => 'Vista de datatable de clientes - nuevo',
            ],
            [
                'name'  => 'clientes-datatable-editar',
                'alias' => 'Vista de datatable de clientes - editar',
            ],
            [
                'name'  => 'clientes-datatable-eliminar',
                'alias' => 'Vista de datatable de clientes - eliminar',
            ],
            [
                'name'  => 'clientes-datatable-ver-formato',
                'alias' => 'Vista de datatable de clientes - ver formato',
            ],
            [
                'name'  => 'clientes-datatable-asociar-formato',
                'alias' => 'Vista de datatable de clientes - asociar formato',
            ]
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
