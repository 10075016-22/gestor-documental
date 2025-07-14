<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionPlaneacionDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'  => 'fecha-documento',
                'alias' => 'Vista de fecha de documento',
            ],
            [
                'name'  => 'fecha-documento-datatable-nuevo',
                'alias' => 'Vista de fecha de documento - Nuevo',
            ],
            [
                'name'  => 'fecha-documento-datatable-editar',
                'alias' => 'Vista de fecha de documento - Editar',
            ],
            [
                'name'  => 'fecha-documento-datatable-eliminar',
                'alias' => 'Vista de fecha de documento - Eliminar',
            ],
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
