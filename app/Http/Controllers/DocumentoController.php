<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
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

    public function indexDatatable(Request $request) 
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


                $data = Documento::with(['tipoDocumento'])->orderBy('documentos.id', 'DESC')
                    ->offset($offset)
                    ->limit($limit)
                    ->where($where)
                    ->leftJoin('estandar_documentos', 'documentos.id', '=', 'estandar_documentos.documento_id')
                    ->get()
                    ->map(function($documento) {
                        $documento->tipodocumento = $documento->tipoDocumento->nombre;
                        return $documento;
                    });
            } else {
                $data = Documento::with(['tipoDocumento'])->orderBy('documentos.id', 'DESC')
                ->leftJoin('estandar_documentos', 'documentos.id', '=', 'estandar_documentos.documento_id')
                ->get();
            }

            $total = Documento::with(['tipoDocumento'])->orderBy('documentos.id', 'DESC')
            ->leftJoin('estandar_documentos', 'documentos.id', '=', 'estandar_documentos.documento_id')
            ->where($where)
            ->count();
            return $this->response->success([
                'data'  => $data,
                'total' => $total
            ]);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error '.$th->getMessage());
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
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documento $documento)
    {
        //
    }
}
