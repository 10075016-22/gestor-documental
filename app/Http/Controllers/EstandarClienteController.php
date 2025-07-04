<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\EstandarCliente;
use Illuminate\Http\Request;

class EstandarClienteController extends Controller
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
        try {
            $request->validate([
                'cliente_id'    => 'required',
                'estandar_id'   => 'required',
            ]);

            $record = EstandarCliente::create($request->all());
            
            return $this->response->success($record);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(EstandarCliente $estandarCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EstandarCliente $estandarCliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EstandarCliente $estandarCliente)
    {
        //
    }
}
