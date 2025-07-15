<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'  => 'documentos-datatable-nuevo',
                'alias' => 'Vista de documentos - nuevo'
            ],
            [
                'name'  => 'estandar-datatable',
                'alias' => 'Vista de estandar'
            ],
            [
                'name'  => 'formatos-cliente-datatable',
                'alias' => 'Vista de formatos de cliente'
            ],
            [
                'name'  => 'formatos-cliente-datatable-nuevo',
                'alias' => 'Vista de formatos de cliente - nuevo'
            ],
            [
                'name'  => 'formatos-cliente-datatable-detalle',
                'alias' => 'Vista de formatos de cliente - detalle'
            ],
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
