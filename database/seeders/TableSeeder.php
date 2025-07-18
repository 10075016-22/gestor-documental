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
                'endpoint' => 'clientes',
                'icon'     => 'mdi-account-group-outline'
            ],
            [
                'table'    => 'Usuarios',
                'descripcion' => 'Tabla para administrar usuarios',
                'endpoint' => 'users',
                'icon'     => 'mdi-account-switch'
            ],
            [
                'table'    => 'Documentos',
                'descripcion' => 'Tabla para administrar documentos',
                'endpoint' => 'documentos',
                'icon'     => 'mdi-text-box-check-outline'
            ],
            [
                'table'    => 'Estandar de cliente',
                'descripcion' => 'Tabla para administrar estandar de cliente, con documentos',
                'endpoint' => 'estandar',
                'icon'     => 'mdi-file-document-arrow-right-outline'
            ],
            [
                'table'    => 'Documentos de estandar',
                'descripcion' => 'Tabla para administrar documentos - tabla detalle',
                'endpoint' => 'documentos',
                'icon'     => 'mdi-text-box-check-outline'
            ],
            [
                'table'    => 'Fechas de documentos',
                'descripcion' => 'Tabla para administrar las fechas limite de documentos',
                'endpoint' => 'planeacion-documentos',
                'icon'     => 'mdi-calendar-cursor-outline'
            ],
            [
                'table'    => 'Ciclos',
                'descripcion' => 'Tabla para administrar los ciclos',
                'endpoint' => 'ciclos',
                'icon'     => 'mdi-list-box-outline'
            ],
            [
                'table'    => 'Plan de acción',
                'descripcion' => 'Tabla para listar los registros de plan de acción',
                'endpoint' => 'plan-accion',
                'icon'     => 'mdi-security-network'
            ],
            [
                'table'    => 'Perfiles',
                'descripcion' => 'Tabla para listar los perfiles',
                'endpoint' => 'roles',
                'icon'     => 'mdi-account-supervisor-circle-outline'
            ],
            [
                'table'    => 'Empleados',
                'descripcion' => 'Tabla para administrar los empleados',
                'endpoint' => 'empleados',
                'icon'     => 'mdi-account-tie'
            ],
            [
                'table'    => 'Documentos seguimiento',
                'descripcion' => 'Tabla para ver los documentos de seguimiento',
                'endpoint' => 'planeacion-documentos/seguimiento',
                'icon'     => 'mdi-format-list-checks'
            ],
            [
                'table'    => 'Evaluaciones',
                'descripcion' => 'Tabla para ver los documentos de seguimiento',
                'endpoint' => 'evaluacion',
                'icon'     => 'mdi-sort-calendar-ascending'
            ],
            [
                'table'    => 'Detalle evaluacion',
                'descripcion' => 'Tabla para hacer la gestión de evaluaciones',
                'endpoint' => 'evaluacion/detalle',
                'icon'     => 'mdi-format-list-checks'
            ]
        ];

        foreach ($data as $key => $value) {
            Table::create($value);
        }
    }
}
