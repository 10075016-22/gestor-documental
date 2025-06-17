<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Estandar;
use App\Models\EstandarCliente;
use Illuminate\Http\Request;

class EstandarController extends Controller
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

    public function indexDatatable(Request $request)
    {
        try {
            $params = $request->query();

            if(isset($params['page']) && isset($params['limit'])) {
                $page  = max(1, intval($params['page']));
                $limit = max(1, intval($params['limit']));
                $offset = ($page - 1) * $limit;

                $data = EstandarCliente::with(['cliente', 'estandar'])
                            ->orderBy('id', 'DESC')
                            ->offset($offset)
                            ->limit($limit)
                            ->get()
                            ->map(function($estandar) {
                                $estandar->Eid           = $estandar->id;
                                $estandar->Ecantidad     = $estandar->estandar->cantidad;
                                $estandar->Enombre       = $estandar->estandar->nombre;
                                $estandar->Edescripcion  = $estandar->estandar->descripcion;
                                
                                $estandar->Cnombre       = $estandar->cliente->nombre;
                                $estandar->Cid           = $estandar->cliente->id;
                                
                                return $estandar;
                            });
            } else {
                $data = EstandarCliente::with(['cliente', 'estandar'])->orderBy('id', 'DESC')->get()
                ->map(function($estandar) {
                    $estandar->Eid           = $estandar->id;
                    $estandar->Ecantidad     = $estandar->estandar->cantidad;
                    $estandar->Enombre       = $estandar->estandar->nombre;
                    $estandar->Edescripcion  = $estandar->estandar->descripcion;
                    
                    $estandar->Cnombre       = $estandar->cliente->nombre;
                    $estandar->Cid           = $estandar->cliente->id;
                    
                    return $estandar;
                });
            }

            $total = Estandar::count();
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
    public function show(Estandar $estandar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estandar $estandar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estandar $estandar)
    {
        //
    }
}
