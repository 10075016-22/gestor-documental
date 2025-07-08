<?php

namespace Database\Seeders;

use App\Models\CicloEstandarSubEstandar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CicloSubEstandarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Recursos 10%
            [
                'ciclo_estandar_id' => 1,
                'nombre'            => 'Recursos financieros, técnicos, humanos y de otra índole requeridos para coordinar y desarrollar el Sistema de Gestión de la Seguridad y la Salud en el Trabajo (SG-SST) (4%)',
                'porcentaje'        => 0.04
            ],
            [
                'ciclo_estandar_id' => 1,
                'nombre'            => 'Capacitación en el Sistema de Gestión de la Seguridad y la Salud en el Trabajo (6%)',
                'porcentaje'        => 0.06
            ],
            // GESTION INTEGRAL DEL SISTEMA DE GESTIÓN DE LA SEGURIDAD Y LA SALUD EN EL TRABAJO (15%)
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Plan Anual de Trabajo (2%)',
                'porcentaje'        => 0.02
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Política de Seguridad y Salud en el Trabajo (1%)',
                'porcentaje'        => 0.01
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Objetivos del Sistema de Gestión de la Seguridad y la Salud en el Trabajo SG-SST (1%)',
                'porcentaje'        => 0.01
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Evaluación inicial del SG-SST (1%)',
                'porcentaje'        => 0.01
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Conservación de la documentación (2%)',
                'porcentaje'        => 0.02
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Rendición de cuentas (1%)',
                'porcentaje'        => 0.01
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Normatividad nacional vigente y aplicable en materia de seguridad y salud en el trabajo (2%)',
                'porcentaje'        => 0.02
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Comunicación (1%)',
                'porcentaje'        => 0.01
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Adquisiciones (1%)',
                'porcentaje'        => 0.01
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Contratación (2%)',
                'porcentaje'        => 0.02
            ],
            [
                'ciclo_estandar_id' => 2,
                'nombre'            => 'Gestión del cambio (1%)',
                'porcentaje'        => 0.01
            ],
            // Gestión de la salud 
            [
                'ciclo_estandar_id' => 3,
                'nombre'            => 'Condiciones de salud en el trabajo (9%)',
                'porcentaje'        => 0.09
            ],
            [
                'ciclo_estandar_id' => 3,
                'nombre'            => 'Registro, reporte e investigación de las enfermedades laborales, los incidentes y accidentes del trabajo (5%)',
                'porcentaje'        => 0.05
            ],
            [
                'ciclo_estandar_id' => 3,
                'nombre'            => 'Mecanismos de vigilancia de las condiciones de salud de los trabajadores (6%)',
                'porcentaje'        => 0.06
            ],
            // Gestión de peligros y riesgos
            [
                'ciclo_estandar_id' => 4,
                'nombre'            => 'Identificación de peligros, evaluación y valoración de riesgos (15%)',
                'porcentaje'        => 0.15
            ],
            [
                'ciclo_estandar_id' => 4,
                'nombre'            => 'Medidas de prevención y control para intervenir los peligros/riesgos (15%)',
                'porcentaje'        => 0.15
            ],
            // Gestión de amenazas
            [
                'ciclo_estandar_id' => 5,
                'nombre'            => 'Plan de prevención, preparación y respuesta ante emergencias (10%)',
                'porcentaje'        => 0.10
            ],
            // Verificación del SG-SST
            [
                'ciclo_estandar_id' => 6,
                'nombre'            => 'Gestión y resultados del SG-SST (5%)',
                'porcentaje'        => 0.05
            ],
            // Mejoramiento
            [
                'ciclo_estandar_id' => 7,
                'nombre'            => 'Acciones preventivas y correctivas con base en los resultados del SG-SST (10%)',
                'porcentaje'        => 0.10
            ],
            
        ];

        foreach ($data as $value) {
            CicloEstandarSubEstandar::create($value);
        }
    }
}
