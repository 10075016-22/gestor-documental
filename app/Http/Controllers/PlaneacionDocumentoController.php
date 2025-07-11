<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\PlaneacionDocumento;
use Illuminate\Http\Request;

class PlaneacionDocumentoController extends Controller
{
    protected $response;
    public function __construct(ResponseClass $response)
    {
        $this->response = $response;
    }
    
    public function index()
    {
        try {
            $data = PlaneacionDocumento::with(['cliente', 'documento'])->get();
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
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

                $data = PlaneacionDocumento::orderBy('id', 'DESC')
                    ->orderBy('cliente_id')
                    ->offset($offset)
                    ->limit($limit)
                    ->get()
                    ->map(function($item) {
                        $item->clientenombre = $item->cliente->nombre;
                        $item->docnombre     = $item->documento->nombre;
                        return $item;
                    });
            } else {
                $data = PlaneacionDocumento::orderBy('id', 'DESC')->get()->map(function($item) {
                    $item->clientenombre = $item->cliente->nombre;
                    $item->docnombre     = $item->documento->nombre;
                    return $item;
                });
            }

            $total = PlaneacionDocumento::count();
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
        try {
            $request->validate([
                'cliente_id'    => 'required|integer',
                'documento_id'  => 'required|integer',
                'fecha_fin'     => 'required|date|after_or_equal:today'
            ]);

            $data = PlaneacionDocumento::create($request->all());
            return $this->response->success($data);
        } catch (\Throwable $th) {
            $errorCode = $th->getCode();
            if($errorCode == 23000) {
                return $this->response->error('Ha ocurrido un error, el registro ya existe', [], 409);
            }            
            return $this->response->error('Ha ocurrido un error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $data = PlaneacionDocumento::whereId($id)->with(['cliente', 'documento'])->get();
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    public function getByClientId($id) {
        try {
            $data = PlaneacionDocumento::whereClienteId($id)->with(['cliente', 'documento'])->get();
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlaneacionDocumento $planeacionDocumento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlaneacionDocumento $planeacionDocumento)
    {
        //
    }
}
