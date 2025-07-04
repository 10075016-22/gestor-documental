<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
           
    ['tipo_documento_id' => 1, 'nombre' => '1. Carta de designación', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Hoja de vida del representante designado', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '3. Licencia en SST con el alcance pertinente', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Documento de roles y responsabilidades', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Documento que defina la asignación de recursos humanos, financieros, técnicos y tecnologicos para la implementación y mantenimiento del SG-SST', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Base de datos de personal activo en la empresa y tomar muestra aleatoria según cantidad de trabajadores', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. No lleva documento si no aplica', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Convocatoría', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Elección', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '3. Conformación', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '4. Acta de constitución', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '5. Actas de reunión (mensual)', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soporte de entrenamientos de los integrantes del COPASST', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Convocatoría', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Elección', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '3. Conformación', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '4. Acta de constitución', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '5. Actas de reunión (trimestral)', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz de plan de capacitación', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Evidencias de los entrenamientos', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soportes de Inducciones y Reinducciones', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soporte de curso de 50 o 20 horas', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Politica de SST firmada', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soporte de socialización al COPASST', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Documento de objetivos firmados y que sean medibles', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soporte de ultima evaluación del SG-SST', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Licencia en SST del auditor', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Plan anual de trabajo con firmas', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Documento de archivo y retención documental', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Matriz de gestión documental', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Documento de rendición de cuentas que se evidencie socialización a todos los niveles de la empresa', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz Legal con normas vigentes a los riesgos laborales.', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Documento de mecanismos eficaces de comunicación interna y externa en materia de SST', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Procedimiento para la identificación y evaluación de productos y servicios relacionados con SST', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soporte que el procedimiento se cumple', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Procedimiento para la selección y evaluación de proveedores en temas relacionados con SST', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soporte que el procedimiento se cumple', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Procedimiento para evaluar el impacto en SST que se genere por los cambios internos o externos', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Consolidado de información sociodemografica', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Diagnóstico de condiciones de salud', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Documentos de PVE', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Perfil Biomedico', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soporte de socialización a IPS ocupacional', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '3. Documento perfiles de cargo', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Revisar conceotps medicos por el porcentaje según la cantidad de empleados', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soporte de resultados de las evaluaciones médicas a los trabajadores', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Certificados de custodia clinicas de la IPS que presta servicios', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Procedimiento de reintegro laboral donde se acaten las recomendaciones y restricciones médico laborales a los trabajadores', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soporte donde se evidencie el proceso donde se acatan medidas emitidas por medico ocupacional', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Programa de estilos de vida saludable donde se evidencie el enfoque en temas de tabaquismo, alcoholismo, fármaco dependencia, entre otros', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Evidencia que se cuenta con los suministros de serivicios', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Evidencia que se eliminan de manera adecuada los residuos', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soporte de FURAT o FUREL (2 días habiles siguientes al ATEL)', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soporte de reporte a EPS del Trabajador (2 días habiles siguientes al ATEL)', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '3. Soporte de reporte a la ARL (cuando aplique) (2 días habiles siguientes al ATEL)', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Documentos de investigación del ATEL con participación del equipo investigador (15 días posterior al ATEL)', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz consolidada de registro de accidentes con analisis de los mismos del año vigente', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz consolidada de registro de accidentes con analisis de los mismos del año vigente', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz consolidada de registro de accidentes con analisis de los mismos del año vigente', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz consolidada de registro de accidentes con analisis de los mismos del año vigente', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz consolidada de registro de accidentes con analisis de los mismos del año vigente', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz consolidada de registro de accidentes con analisis de los mismos del año vigente', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Matriz de ausentismos', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Procedimiento de metodología para realización de la Matriz IPER', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Matriz IPER', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Notificación de riesgos', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Certificado de no cumplimiento', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Certificados de mediciones ambientales', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Plan de emergencias', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soportes de implementación', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Procedimientos según la necesidad de la empresa', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soportes de las inspecciones realizadas', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. soporte de mantenimientos periodicos', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Procedimiento de manejo, uso e inspección de EPP', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Matriz de EPP', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '3. Soporte de entrega de EPP o Dotación', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Subir plan de emergencias en documento', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soporte de conformación de brigadas', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soporte de entrenamientos de brigadas', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '3. Soporte de entrega de dotación brigadistas', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Excel con fichas te indicadores', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Autoevaluación del año anterior', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soporte de socialización ante alta dirección', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Plan de trabajo COPASST', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Procedimiento de acciones preventivas y correctivas', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '2. Soportes de cierre de las acciones', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soporte de acciones de mejora emitidas por la alta dirección', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Soportes de acciones de mejora según se realice', 'obligatorio' => '1', 'generaFormato' => '1'],
    ['tipo_documento_id' => 1, 'nombre' => '1. Plan de trabajo de mejoramiento según indicaciones de ARL', 'obligatorio' => '1', 'generaFormato' => '1'],


        ];
        //Documento::factory(120)->create();
        foreach ($data as $key => $value ) {

            Documento::create($value);
        }
    }
}
