<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\CicloItemEstandar;
use App\Utils\UtilPermissions;
use Illuminate\Http\Request;

class CicloItemEstandarController extends Controller
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
        try {
            $cicloItemEstandar = CicloItemEstandar::join('formato_clientes', 'formato_clientes.ciclo_item_estandars_id', '=', 'ciclo_item_estandars.id')
                                                    ->select('ciclo_item_estandars.*')
                                                    ->whereIn('formato_clientes.cliente_id', UtilPermissions::getUserClients())
                                                    ->distinct()
                                                    ->get();
            return $this->response->success($cicloItemEstandar);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error'.$th->getMessage());
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
    public function show(CicloItemEstandar $cicloItemEstandar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CicloItemEstandar $cicloItemEstandar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CicloItemEstandar $cicloItemEstandar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CicloItemEstandar $cicloItemEstandar)
    {
        //
    }
}
