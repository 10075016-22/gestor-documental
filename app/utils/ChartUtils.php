<?php

namespace App\utils;

use App\Models\FormatoCliente;
use App\Utils\UtilPermissions;

class ChartUtils
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public static function getQualificationByClients() {
        try {
            // Obtenemos los datos por cliente y ciclo
            $rawData = FormatoCliente::selectRaw('c.nombre AS cliente, c2.nombre AS ciclo, SUM(c5.valor) as esperada, SUM(formato_clientes.calificacion) as obtenida')
                ->leftJoin('clientes as c', 'formato_clientes.cliente_id', '=', 'c.id')
                ->join('ciclos as c2', 'c2.id', '=', 'formato_clientes.ciclo_id')
                ->join('ciclo_item_estandars as c5', 'c5.id', '=', 'formato_clientes.ciclo_item_estandars_id')
                ->where('formato_clientes.preview', 0)
                ->whereIn('formato_clientes.cliente_id', UtilPermissions::getUserClients())
                ->groupBy('c.nombre', 'c2.nombre')
                ->get();
    
            // Agrupamos por cliente
            $agrupado = [];
    
            foreach ($rawData as $row) {
                $cliente = $row->cliente;
                $ciclo = $row->ciclo;
                $esperada = floatval($row->esperada);
                $obtenida = floatval($row->obtenida);
    
                $agrupado[$cliente]['nombre'] = $cliente;
                $agrupado[$cliente]['total_esperada'] = ($agrupado[$cliente]['total_esperada'] ?? 0) + $esperada;
                $agrupado[$cliente]['total_obtenida'] = ($agrupado[$cliente]['total_obtenida'] ?? 0) + $obtenida;
    
            }
    
            // Armar cabecera de la tabla
            $header = ['Cliente'];
            $header[] = "Total Esperada";
            $header[] = "Total Obtenida";
    
            // Armar datos para el gráfico
            $data = [$header];
            foreach ($agrupado as $clienteData) {
                $row = [$clienteData['nombre']];
                $row[] = $clienteData['total_esperada'];
                $row[] = $clienteData['total_obtenida'];
                $data[] = $row;
            }
    
            return [
                'type' => 'ColumnChart',
                'cols' => 6,
                'data' => $data,
                'options' => [
                    'title' => 'Calificación total por Cliente',
                    'height' => 500,
                    'width' => '100%',
                    'vAxis' => [
                        'minValue' => 0,
                        'maxValue' => 5,
                        'title' => 'Calificación'
                    ],
                    'hAxis' => [
                        'title' => 'Clientes',
                        'slantedText' => true,
                        'slantedTextAngle' => 10
                    ],
                    'legend' => ['position' => 'top'],
                    'isStacked' => false,
                    'bar' => ['groupWidth' => '60%']
                ],
                'permission' => 'home-card-evaluaciones-clientes'
            ];
    
        } catch (\Throwable $th) {
            return [];
        }
    }

    // Estado documentación SST
    public static function getDocumentSSTByStatus() {
        try {
            $data = [
                'type' => 'BarChart',
                'cols' => 12,
                'data' => [
                    ['Area', 'Documentos Cargados', 'Documentos Pendientes'],
                    ['Políticas SST', 12, 3],
                    ['Procedimientos', 25, 5], 
                    ['Formatos', 45, 10],
                    ['Matrices', 15, 4],
                    ['Programas', 20, 6]
                ],
                'options' => [
                    'title' => 'Estado Documentación SST',
                    'height' => 400,
                    'width' => '100%',
                    'isStacked' => true,
                    'legend' => ['position' => 'top']
                ],
                'permission' => 'home-card-evaluaciones-clientes'
            ];
            return $data;
        } catch (\Throwable $th) {
            return [];
        }
    }
    
}
