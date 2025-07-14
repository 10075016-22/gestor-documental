<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'  => 'usuario',
                'alias' => 'Vista de usuarios',
            ],
            [
                'name'  => 'usuario-datatable',
                'alias' => 'Vista de datatable de usuarios',
            ],
            [
                'name'  => 'usuario-datatable-nuevo',
                'alias' => 'Vista de datatable de usuarios - nuevo',
            ],
            [
                'name'  => 'usuario-datatable-editar',
                'alias' => 'Vista de datatable de usuarios - editar',
            ],
            [
                'name'  => 'usuario-datatable-eliminar',
                'alias' => 'Vista de datatable de usuarios - eliminar',
            ],
            [
                'name'  => 'usuario-datatable-asociar-cliente',
                'alias' => 'Vista de datatable de usuarios - asociar cliente',
            ],
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
