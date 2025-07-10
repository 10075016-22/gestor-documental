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
     * Show the form for editing the specified resource.
     */
    public function edit(FormatoCliente $formatoCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormatoCliente $formatoCliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormatoCliente $formatoCliente)
    {
        //
    }
}
