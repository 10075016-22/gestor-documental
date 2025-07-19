<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Cliente;
use App\Models\FormatoCliente;
use Illuminate\Http\Request;

class FormatoClienteController extends Controller
{
    protected $response;
    public function __construct(ResponseClass $response)
    {
        $this->response = $response;
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function getClientes() {
        try {
            $clientes = Cliente::get();
            return $this->response->success($clientes);
        } catch (\Throwable $th) {
            return $this->response->error("Ha ocurrido un error");
        }
    }

    public function getFormatoByCliente($id) {
        try {
            $data = FormatoCliente::select(
                'c2.nombre AS ciclo',
                'c3.nombre AS estandar',
                'c4.nombre AS subestandar',
                'c5.nombre AS itemdelestandar',
                'c5.valor',
                'formato_clientes.*'
            )
            ->leftJoin('clientes as c', 'formato_clientes.cliente_id', '=', 'c.id')
            ->join('formatos as f2', 'formato_clientes.formato_id', '=', 'f2.id')
            ->join('ciclos as c2', 'c2.id', '=', 'formato_clientes.ciclo_id')
            ->join('ciclo_estandars as c3', 'c3.id', '=', 'formato_clientes.ciclo_estandar_id')
            ->join('ciclo_estandar_sub_estandars as c4', 'c4.id', '=', 'formato_clientes.ciclo_sub_estandar_id')
            ->join('ciclo_item_estandars as c5', 'c5.id', '=', 'formato_clientes.ciclo_item_estandars_id')
            ->where('formato_clientes.preview', 0)
            ->where('formato_clientes.cliente_id', $id)
            ->get();

            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error("Ha ocurrido un error");
        }
    }

    public function getFormatoByClienteChart($id) {
        try {

            $cliente = Cliente::find($id);
            if (!$cliente) {
                return $this->response->error("Cliente no encontrado");
            }

            $data = FormatoCliente::selectRaw('c2.nombre AS ciclo, sum(c5.valor) as calificacion_posible, sum(formato_clientes.calificacion) as calificacion_obtenida')
                ->leftJoin('clientes as c', 'formato_clientes.cliente_id', '=', 'c.id')
                ->join('formatos as f2', 'formato_clientes.formato_id', '=', 'f2.id')
                ->join('ciclos as c2', 'c2.id', '=', 'formato_clientes.ciclo_id')
                ->join('ciclo_item_estandars as c5', 'c5.id', '=', 'formato_clientes.ciclo_item_estandars_id')
                ->where('formato_clientes.preview', 0)
                ->where('formato_clientes.cliente_id', $id)
                ->groupBy('c2.nombre')
                ->get()
                ->map(function ($item) {
                    return [
                        $item->ciclo,
                        floatval($item->calificacion_obtenida),
                        floatval($item->calificacion_posible)
                    ];
                });

            $chart = [
                [
                    'type' => 'ColumnChart',
                    'cols' => 12,
                    'data' => [
                        ['Ciclo', 'Calificación Obtenida', 'Calificación Posible'],
                        ...$data
                    ],
                    'options' => [
                        'title' => 'Calificación cliente: ' . $cliente->nombre,
                        'height' => 400,
                        'width' => '100%',
                        'vAxis' => [
                            'title' => 'Calificación Obtenida'
                        ],
                        'hAxis' => [
                            'title' => 'Ciclos',
                        ],
                        'legend' => ['position' => 'bottom'],
                    ],
                    'permission' => 'home-card-evaluaciones-clientes'
                ]
            ];

            return $this->response->success($chart);
        } catch (\Throwable $th) {
            return $this->response->error("Ha ocurrido un error");
        }
    }

    public function getFormato($id) {
        try {
            $data = FormatoCliente::select(
                'c2.nombre AS ciclo',
                'c3.nombre AS estandar',
                'c4.nombre AS subestandar',
                'c5.nombre AS itemdelestandar',
                'c5.valor',
                'formato_clientes.*'
            )
            ->leftJoin('clientes as c', 'formato_clientes.cliente_id', '=', 'c.id')
            ->join('formatos as f2', 'formato_clientes.formato_id', '=', 'f2.id')
            ->join('ciclos as c2', 'c2.id', '=', 'formato_clientes.ciclo_id')
            ->join('ciclo_estandars as c3', 'c3.id', '=', 'formato_clientes.ciclo_estandar_id')
            ->join('ciclo_estandar_sub_estandars as c4', 'c4.id', '=', 'formato_clientes.ciclo_sub_estandar_id')
            ->join('ciclo_item_estandars as c5', 'c5.id', '=', 'formato_clientes.ciclo_item_estandars_id')
            ->where('formato_clientes.preview', 1)
            ->where('formato_clientes.formato_id', $id)
            ->get();

            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error("Ha ocurrido un error");
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(FormatoCliente $formatoCliente)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $formatoCliente = FormatoCliente::find($id);
            if(!$formatoCliente) {
                return $this->response->notFound('No existe el registro');
            }
            /**
             * cumplimiento: 
             * 1 = Cumple
             * 2 = Justifica -> debe tener observación
             * 3 = No Aplica
             */
            if($request->cumplimiento == 2) {
                $request->validate([
                    'observacion' => 'required|string|max:255'
                ]);
            }
            
            // Si justifica el formato - documento
            if($request->cumplimiento == 2) {
                $formatoCliente->update([
                    'justifica'   => 1,
                    'observacion' => $request->observacion
                ]);
            } else {
                // Sino se valida si cumple o no cumple
                $formatoCliente->update([
                    'cumple'        => $request->cumplimiento === 1 ? 1 : 0,
                    'observacion'   => $request->observacion
                ]);
            }
            return $this->response->success($formatoCliente);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormatoCliente $formatoCliente)
    {
        //
    }
}
