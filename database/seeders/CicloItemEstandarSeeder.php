<?php

namespace Database\Seeders;

use App\Models\CicloItemEstandar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CicloItemEstandarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Responsable del Sistema de Gestión de Seguridad y Salud en el Trabajo SG-SST',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Afiliación al Sistema General de Riesgos Laborales',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Diseñador y Responsable del Sistema de Gestión de Seguridad y Salud en el Trabajo SG-SST',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Asignación de recursos para el Sistema de Gestión en Seguridad y Salud en el Trabajo - SG-SST',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Afiliación al Sistema General de Riesgos Laborales',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Conformación COPASST O Asignación de VIGIA',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Conformación Comité de Convivencia',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Asignación de recursos para el Sistema de Gestión en Seguridad y Salud en el Trabajo - SG-SST',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Pago de pensión trabajadores alto riesgo',
                'valor'       => 0.5
            ],
            [
                'ciclo_sub_estandar_id' => 1,
                'nombre'      => 'Capacitación COPASST o VIGIA',
                'valor'       => 0.5
            ],
            // Capacitación en el Sistema de Gestión de la Seguridad y la Salud en el Trabajo (6%)
            [
                'ciclo_sub_estandar_id' => 2,
                'nombre'      => 'Programa Capacitación promoción y prevención PYP',
                'valor'       => 2
            ],
            // Plan Anual de Trabajo (2%)
            [
                'ciclo_sub_estandar_id' => 3,
                'nombre'      => 'Plan que identifica objetivos, metas, responsabilidad, recursos con cronograma y firmado.',
                'valor'       => 2
            ],
            // Política de Seguridad y Salud en el Trabajo (1%)
            [
                'ciclo_sub_estandar_id' => 4,
                'nombre'      => 'Política del Sistema de Gestión de Seguridad y Salud en el Trabajo SG-SST firmada, fechada y comunicada al COPASST',
                'valor'       => 1
            ],
            // Objetivos del Sistema de Gestión de la Seguridad y la Salud en el Trabajo SG-SST (1%)
            [
                'ciclo_sub_estandar_id' => 5,
                'nombre'      => 'Objetivos definidos, claros, medibles, cuantificables, con metas, documentados, revisados del SG-SST',
                'valor'       => 1
            ],
            // Evaluación inicial del SG-SST (1%)
            [
                'ciclo_sub_estandar_id' => 6,
                'nombre'      => 'Evaluación e identificación de prioridades',
                'valor'       => 1
            ],
            // Conservación de la documentación (2%)
            [
                'ciclo_sub_estandar_id' => 7,
                'nombre'      => 'Archivo o retención documental del Sistema de Gestión en Seguridad y Salud en el Trabajo SG-SST',
                'valor'       => 2
            ],
            // Rendición de cuentas (1%)
            [
                'ciclo_sub_estandar_id' => 8,
                'nombre'      => 'Rendición sobre el desempeño',
                'valor'       => 1
            ],
            // Normatividad nacional vigente y aplicable en materia de seguridad y salud en el trabajo (2%)
            [
                'ciclo_sub_estandar_id' => 9,
                'nombre'      => 'Matriz legal',
                'valor'       => 2
            ],
            // Comunicación (1%)
            [
                'ciclo_sub_estandar_id' => 10,
                'nombre'      => 'Mecanismos de comunicación, auto reporte en Sistema de Gestión de Seguridad y Salud en el Trabajo SG-SST',
                'valor'       => 1
            ],
            // Adquisiciones (1%)
            [
                'ciclo_sub_estandar_id' => 11,
                'nombre'      => 'Identificación, evaluación, para adquisición de productos y servicios en Sistema de Gestión de Seguridad y Salud en el Trabajo SG-SST',
                'valor'       => 1
            ],
            // Contratación (2%)
            [
                'ciclo_sub_estandar_id' => 12,
                'nombre'      => 'Evaluación y selección de proveedores y contratistas',
                'valor'       => 2
            ],
            // Gestión del cambio (1%)
            [
                'ciclo_sub_estandar_id' => 13,
                'nombre'      => 'Evaluación del impacto de cambios internos y externos en el Sistema de Gestión de Seguridad y Salud en el Trabajo SG-SST',
                'valor'       => 1
            ],
            // Condiciones de salud en el trabajo (9%)
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Descripciòn sociodemogràfica y diagnostico de condiciones de salud',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Actividades de Promoción y Prevención en Salud',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Información al médico de los perfiles de cargo',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Realización de evaluaciones medicas ocupacionales de acuerdo con los peligros  o factores de riesgo, periodicidad y comunicaciòn al trabajador',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Custodia de Historias Clínicas',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Restricciones y recomendaciones médico laborales',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Estilos de vida y entornos saludables (controles tabaquismo, alcoholismo, farmacodependencia y otros)',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Agua potable, servicios sanitarios y disposición de basuras',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 14,
                'nombre'      => 'Eliminación adecuada de residuos sólidos, líquidos o gaseosos',
                'valor'       => 1
            ],
            // Registro, reporte e investigación de las enfermedades laborales, los incidentes y accidentes del trabajo (5%)
            [
                'ciclo_sub_estandar_id' => 15,
                'nombre'      => 'Reporte de los accidentes de trabajo y enfermedad laboral a la ARL, EPS y Dirección Territorial del Ministerio de Trabajo',
                'valor'       => 2
            ],
            [
                'ciclo_sub_estandar_id' => 15,
                'nombre'      => 'Investigación de Accidentes, Incidentes y Enfermedad Laboral',
                'valor'       => 2
            ],
            [
                'ciclo_sub_estandar_id' => 15,
                'nombre'      => 'Registro y análisis estadístico de Incidentes, Accidentes de Trabajo y Enfermedad Laboral',
                'valor'       => 1
            ],
            // Mecanismos de vigilancia de las condiciones de salud de los trabajadores (6%)
            [
                'ciclo_sub_estandar_id' => 16,
                'nombre'      => 'Medición de la frecuencia de la accidentalidad',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 16,
                'nombre'      => 'Medición de la severidad de la accidentalidad',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 16,
                'nombre'      => 'Medición de la mortalidad por accidente de trabajo',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 16,
                'nombre'      => 'Medición de la prevalencia de  Enfermedad Laboral',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 16,
                'nombre'      => 'Medición de la incidencia de Enfermedad Laboral',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 16,
                'nombre'      => 'Medición del ausentismo por causa mèdica',
                'valor'       => 1
            ],
            // Identificación de peligros, evaluación y valoración de riesgos (15%)
            [
                'ciclo_sub_estandar_id' => 17,
                'nombre'      => 'Metodología para la identificación de peligros, evaluación y valoración de los riesgos',
                'valor'       => 4
            ], 
            [
                'ciclo_sub_estandar_id' => 17,
                'nombre'      => 'Identificación de peligros con participación de todos los niveles de la empresa',
                'valor'       => 4
            ],
            [
                'ciclo_sub_estandar_id' => 17,
                'nombre'      => 'Identificación de sustancias catalogadas como carcinògenas o con toxicidad aguda',
                'valor'       => 3
            ],
            [
                'ciclo_sub_estandar_id' => 17,
                'nombre'      => 'Realización mediciones ambientales, químicos, físicos y biológicos',
                'valor'       => 4
            ],
            // Medidas de prevención y control para intervenir los peligros/riesgos (15%)
            [
                'ciclo_sub_estandar_id' => 18,
                'nombre'      => 'Entrega de Elementos de Protección Persona EPP, se verifica con contratistas y subcontratistas',
                'valor'       => 1
            ],
            [
                'ciclo_sub_estandar_id' => 18,
                'nombre'      => 'Implementaciòn de medidas de prevenciòn y control de peligros/riesgos identificados',
                'valor'       => 2.5
            ],
            [
                'ciclo_sub_estandar_id' => 18,
                'nombre'      => 'Verificaciòn de aplicaciòn de medidas de prevenciòn y control por parte de los trabajadores',
                'valor'       => 2.5
            ],
            [
                'ciclo_sub_estandar_id' => 18,
                'nombre'      => 'Elaboraciòn de procedimientos, instructivos fichas, protocolos',
                'valor'       => 2.5
            ],
            [
                'ciclo_sub_estandar_id' => 18,
                'nombre'      => 'Realizaciòn de inspecciones sistemàticas a las instalaciones, maquinaria o equipos con la participaciòn del COPASST',
                'valor'       => 2.5
            ],
            [
                'ciclo_sub_estandar_id' => 18,
                'nombre'      => 'Mantenimiento periódico de instalaciones, equipos, máquinas, herramientas',
                'valor'       => 2.5
            ],
            // Plan de prevención, preparación y respuesta ante emergencias (10%) 
            [
                'ciclo_sub_estandar_id' => 19,
                'nombre'      => 'Se cuenta con el Plan de Prevención y Preparación ante emergencias',
                'valor'       => 5
            ],
            [
                'ciclo_sub_estandar_id' => 19,
                'nombre'      => 'Brigada de prevención conformada, capacitada y dotada',
                'valor'       => 5
            ],
            // Gestión y resultados del SG-SST (5%)
            [
                'ciclo_sub_estandar_id' => 20,
                'nombre'      => 'Definiciòn de indicadores del SGSST de acuerdo con las condiciones de la empresa',
                'valor'       => 1.25
            ],
            [
                'ciclo_sub_estandar_id' => 20,
                'nombre'      => 'Las empresa adelanta auditoría por lo menos una vez al año',
                'valor'       => 1.25
            ],
            [
                'ciclo_sub_estandar_id' => 20,
                'nombre'      => 'Revisión anual por la alta dirección, resultados y alcance de la auditoría',
                'valor'       => 1.25
            ],
            [
                'ciclo_sub_estandar_id' => 20,
                'nombre'      => 'Planificar auditoría con el COPASST',
                'valor'       => 1.25
            ],
            // Acciones preventivas y correctivas con base en los resultados del SG-SST (10%)
            [
                'ciclo_sub_estandar_id' => 21,
                'nombre'      => 'Definir acciones preventivas y correctivas con base en los resultados del SG-SST',
                'valor'       => 2.5
            ],
            [
                'ciclo_sub_estandar_id' => 21,
                'nombre'      => 'Acciones de mejora conforme a revisiòn de la alta direcciòn',
                'valor'       => 2.5
            ],
            [
                'ciclo_sub_estandar_id' => 21,
                'nombre'      => 'Acciones de mejora con base en investigaciones de accidentes de trabajo y enfermedades laborales',
                'valor'       => 2.5
            ],
            [
                'ciclo_sub_estandar_id' => 21,
                'nombre'      => 'Elaboraciòn plan de mejoramiento e implementaciòn de medidas y acciones correctivas solicitadas por autoridades y ARL',
                'valor'       => 2.5
            ],
        ];

        foreach ($data as $value) {
            CicloItemEstandar::create($value);
        }
    }
}
