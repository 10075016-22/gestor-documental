<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'  => 'documentos',
                'alias' => 'Menú de documentos'
            ],
            [
                'name'  => 'documentos-datatable',
                'alias' => 'Vista de documentos'
            ],
            [
                'name'  => 'documentos-datatable-editar',
                'alias' => 'Vista de documentos - editar'
            ],
            [
                'name'  => 'documentos-datatable-eliminar',
                'alias' => 'Vista de documentos - eliminar'
            ],
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
