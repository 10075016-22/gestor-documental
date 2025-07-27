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
            [
                'name'  => 'fecha-documento-datatable',
                'alias' => 'Vista de fecha de documento',
            ],
            [
                'name'  => 'seguimiento-datatable',
                'alias' => 'Vista de seguimiento',
            ],
            [
                'name'  => 'seguimiento-datatable-viewtemplate',
                'alias' => 'Vista de seguimiento - ver template',
            ],
            [
                'name'  => 'seguimiento-datatable-uploadfile',
                'alias' => 'Vista de seguimiento - subir archivo',
            ],
            [
                'name'  => 'fecha-documento-datatable-historico',
                'alias' => 'Vista de fecha de documento - historico',
            ],
            [
                'name'  => 'evaluacion-datatable',
                'alias' => 'Vista de evaluacion',
            ],
            [
                'name'  => 'evaluacion-datatable-viewformat',
                'alias' => 'Vista de evaluacion - ver formato',
            ],
            [
                'name'  => 'evaluacion-datatable-viewevaluacion',
                'alias' => 'Vista de evaluacion - ver evaluacion',
            ],
            [
                'name'  => 'evaluacion-datatable-viewchart',
                'alias' => 'Vista de evaluacion - ver gráfica',
            ],
            [
                'name'  => 'evaluacion-datatable-detalle',
                'alias' => 'Vista de evaluacion - detalle',
            ],
            [
                'name'  => 'evaluacion-datatable-update',
                'alias' => 'Detalle de evaluacion - hacer evaluación a item',
            ],
            [
                'name'  => 'evaluacion-datatable-export',
                'alias' => 'Detalle de evaluacion - exportar',
            ],
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($permissions as $data) {
            Permission::create($data);
        }
    }
}
