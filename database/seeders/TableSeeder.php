<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table'    => 'Clientes',
                'descripcion' => 'Tabla para listado de clientes',
                'endpoint' => 'clientes/datatable',
                'icon'     => 'mdi-account-group-outline'
            ],
            [
                'table'    => 'Usuarios',
                'descripcion' => 'Tabla para administrar usuarios',
                'endpoint' => 'users/datatable',
                'icon'     => 'mdi-account-switch'
            ],
            [
                'table'    => 'Documentos',
                'descripcion' => 'Tabla para administrar documentos',
                'endpoint' => 'documentos/datatable',
                'icon'     => 'mdi-text-box-check-outline'
            ],
            [
                'table'    => 'Estandar de cliente',
                'descripcion' => 'Tabla para administrar estandar de cliente, con documentos',
                'endpoint' => 'estandar/datatable',
                'icon'     => 'mdi-file-document-arrow-right-outline'
            ],
            [
                'table'    => 'Documentos de estandar',
                'descripcion' => 'Tabla para administrar documentos - tabla detalle',
                'endpoint' => 'documentos/datatable',
                'icon'     => 'mdi-text-box-check-outline'
            ]
        ];

        foreach ($data as $key => $value) {
            Table::create($value);
        }
    }
}
