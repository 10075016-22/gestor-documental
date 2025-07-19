<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Cliente;
use App\Models\EstandarCliente;
use App\Models\Evaluacion;
use App\Models\FormatoCliente;
use App\Utils\UtilPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EvaluacionController extends Controller
{
    
    protected $response;
    public function __construct(ResponseClass $response)
    {
        $this->response = $response;
    }
    
    public function index()
    {
        //
    }

    public function indexDatatableDetalle(Request $request) 
    {
        try {
            $params = $request->query();

            $where = [];

            if(isset($params['field_id'])) {
                $where[] = [$params['field_id'], '=', $params['field_value']];
            }

            if(isset($params['page']) && isset($params['limit'])) {
                $page  = max(1, intval($params['page']));
                $limit = max(1, intval($params['limit']));
                $offset = ($page - 1) * $limit;

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
                ->where('c.id', $params['field_value'])
                ->offset($offset)
                ->limit($limit)
                ->get();
            } else {
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
                ->where('c.id', $params['field_value'])
                ->get();
            }

            $total = $data->count();
            return $this->response->success([
                'data'  => $data,
                'total' => $total
            ]);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error '.$th->getMessage());
        }
    }

    public function getByFormatoItemId($cliente_id, $id) {
        try {
            $data = FormatoCliente::select(
                'c2.nombre AS ciclo',
                'c3.nombre AS estandar',
                'c4.nombre AS subestandar',
                'c5.nombre AS itemdelestandar',
                'c5.valor',
                'formato_clientes.id',
                'formato_clientes.calificacion',
                'formato_clientes.ciclo_item_estandars_id'                
            )
            ->leftJoin('clientes as c', 'formato_clientes.cliente_id', '=', 'c.id')
            ->leftJoin('formatos as f2', 'formato_clientes.formato_id', '=', 'f2.id')
            ->leftJoin('ciclos as c2', 'c2.id', '=', 'formato_clientes.ciclo_id')
            ->leftJoin('ciclo_estandars as c3', 'c3.id', '=', 'formato_clientes.ciclo_estandar_id')
            ->leftJoin('ciclo_estandar_sub_estandars as c4', 'c4.id', '=', 'formato_clientes.ciclo_sub_estandar_id')
            ->leftJoin('ciclo_item_estandars as c5', 'c5.id', '=', 'formato_clientes.ciclo_item_estandars_id')
            ->where('formato_clientes.cliente_id', $cliente_id)
            ->where('formato_clientes.id', $id)
            ->first();

            if(!$data) {
                return $this->response->error('No se encontro el registro');
            }

            $ciclo_item_estandars_id = $data->ciclo_item_estandars_id;
            $SELECT = "SELECT p.cliente_id, 
                            c2.nombre AS cliente, 
                            p.fecha_fin AS fecha_limite,
                            h.created_at AS fecha_cargado,
                            u.fullname AS usuario_gestor,
                            p.observaciones AS observaciones_planeacion, 
                            p.estado as estado_planeacion, 
                            h.document as documento_cargado, 
                            h.observaciones AS observacion_historico, 
                            d.nombre AS nombre_documento, 
                            d.plantilla AS plantilla_documento,
                            c.nombre AS item_estandar
                        FROM planeacion_documentos p
                        LEFT JOIN historico_documentos h  ON h.planeacion_documento_id = p.id
                        LEFT JOIN documentos d ON d.id = p.documento_id 
                        LEFT JOIN ciclo_item_estandars c ON c.id = h.ciclo_item_estandar_id
                        INNER JOIN clientes c2 ON c2.id = p.cliente_id
                        INNER JOIN users u ON u.id = h.user_id
                        WHERE p.cliente_id = ? 
                        AND h.ciclo_item_estandar_id = ?";
            $planeacion = DB::select($SELECT, [$cliente_id, $ciclo_item_estandars_id]);

            foreach($planeacion as $key => $value) {
                $planeacion[$key]->documento_cargado = $value->documento_cargado ? Storage::disk('documentos')->url($value->documento_cargado) : null;
            }

            return $this->response->success([
                'general'    => $data,
                'planeacion' => $planeacion
            ]);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error '.$th->getMessage());
        }
    }

    public function indexDatatable(Request $request) 
    {
        try {
            $params = $request->query();

            if(isset($params['page']) && isset($params['limit'])) {
                $page  = max(1, intval($params['page']));
                $limit = max(1, intval($params['limit']));
                $offset = ($page - 1) * $limit;

                $data = Cliente::orderBy('id', 'DESC')
                    ->offset($offset)
                    ->limit($limit)
                    ->whereIn('id', UtilPermissions::getUserClients())
                    ->get()
                    ->map(function ($cliente) {
                        $cliente->logo = $cliente->logo ? Storage::disk('logos')->url($cliente->logo) : null;

                        // formato de cliente
                        $formato = FormatoCliente::with(['formato'])->where('cliente_id', $cliente->id)->first();
                        $cliente->formato = $formato->formato->nombre ?? 'N/A';
                        $cliente->formato_id = $formato->formato->id ?? null;

                        // Estandar cliente
                        $estandarcliente = EstandarCliente::whereClienteId($cliente->id)->first();
                        $cliente->estandarcliente = $estandarcliente->estandar_id ?? null;
                        
                        return $cliente;
                    });
            } else {
                $data = Cliente::orderBy('id', 'DESC')
                    ->whereIn('id', UtilPermissions::getUserClients())
                    ->get();
            }

            $total = Cliente::whereIn('id', UtilPermissions::getUserClients())->count();
            return $this->response->success([
                'data'  => $data,
                'total' => $total
            ]);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluacion $evaluacion)
    {
        //
    }
}
