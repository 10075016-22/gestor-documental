<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    protected $response;
    public function __construct(ResponseClass $response)
    {
        $this->response = $response;
    }
    
    public function index()
    {
        try {
            $data = Cliente::orderBy('id', 'DESC')->get();
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

                $data = Cliente::orderBy('id', 'DESC')
                    ->offset($offset)
                    ->limit($limit)
                    ->get();
            } else {
                $data = Cliente::orderBy('id', 'DESC')->get();
            }

            $total = Cliente::count();
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
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
