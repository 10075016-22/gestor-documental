<?php

namespace Database\Seeders;

use App\Models\PlanAccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanAccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "criterio"   => "Si el puntaje obtenido es menor a 60%",
                "valoracion" => "Critico",
                "color"      => "#FC0607",
                "minimo"     => 0,
                "maximo"     => 59,
                "accion"     => "- Realizar y enviar al Ministerio del Trabajo un plan de mejoramiento. \n- Enviar a la ARL el avance del plan de mejoramiento a los 3 meses. \n- El Ministerio del Trabajo realizará seguimiento anual."

            ],
            [
                "criterio" => "Si el puntaje obtenido es mayor o igual a 60% y menor a 85%",
                "valoracion" => "Moderadamente aceptable",
                "color" => "#F2DB0F",
                "minimo" => 60,
                "maximo" => 84,
                "accion" => "- Realizar y enviar al Ministerio del Trabajo un plan de mejoramiento. \n- Enviar a la ARL el avance del plan de mejoramiento a los 6 meses. \n- Plan de visita por parte del Ministerio de Trabajo."
            ],
            [
                "criterio" => "Si el puntaje obtenido es mayor o igual a 85%",
                "valoracion" => "Aceptable",
                "color" => "#4FA800",
                "minimo" => 85,
                "maximo" => 100,
                "accion" => "- Mantener la calificación y evidencias a disposición del Ministerio del Trabajo."
            ]
        ];

        foreach ($data as $key => $value) {
            PlanAccion::create($value);
        }
    }
}
