<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'  => 'perfiles',
                'alias' => 'Menú de perfiles',
            ],
            [
                'name'  => 'perfiles-datatable',
                'alias' => 'Vista de datatable de perfiles',
            ],
            [
                'name'  => 'perfiles-datatable-nuevo',
                'alias' => 'Vista de datatable de perfiles - nuevo',
            ],
            [
                'name'  => 'perfiles-datatable-eliminar',
                'alias' => 'Vista de datatable de perfiles - eliminar',
            ],
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($data as $val) {
            Permission::create($val);
        }
    }
}
