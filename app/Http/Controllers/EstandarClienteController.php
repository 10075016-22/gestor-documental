<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\EstandarCliente;
use App\Models\FormatoCliente;
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

            $formato = self::getFormatById($request->estandar_id);

            // eliminamos los formatos anteriores
            FormatoCliente::whereClienteId($request->cliente_id)->delete();

            foreach ($formato as $key => $value) {
                FormatoCliente::create([
                    'cliente_id'                => $request->cliente_id,
                    'formato_id'                => $request->estandar_id,
                    'ciclo_id'                  => $value->ciclo_id,
                    'ciclo_estandar_id'         => $value->ciclo_estandar_id,
                    'ciclo_sub_estandar_id'     => $value->ciclo_sub_estandar_id,
                    'ciclo_item_estandars_id'   => $value->ciclo_item_estandars_id
                ]);
            }

            $record = EstandarCliente::create($request->all());
            
            return $this->response->success($record);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    private static function getFormatById($id) {
        try {
            $format = FormatoCliente::whereFormatoId($id)->wherePreview(1)->get();
            return $format;
        } catch (\Throwable $th) {
            return [];
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
