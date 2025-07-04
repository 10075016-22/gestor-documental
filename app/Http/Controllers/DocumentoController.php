<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


                $data = Documento::with(['tipoDocumento'])
                    ->leftJoin('estandar_documentos', 'documentos.id', '=', 'estandar_documentos.documento_id')
                    ->select('documentos.*')
                    ->where($where)
                    ->orderBy('documentos.id', 'DESC')
                    ->offset($offset)
                    ->limit($limit)
                    ->get()
                    ->map(function($documento) {
                        $documento->tipodocumento = $documento->tipoDocumento->nombre;
                        $documento->fileplantilla = $documento->plantilla ? Storage::disk('documentos')->url($documento->plantilla) : null;
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
        try {
            $request->validate([ 'nombre' => 'required|string|max:255']);

            $data = $request->except('plantilla');

            if ($request->hasFile('plantilla')) {
                $filename = $request->file('plantilla')->store('/', 'documentos');
                $data['plantilla'] = $filename;
            }
            $documento = Documento::create($data);

            return $this->response->success($documento);
        } catch (\Throwable $th) {
            return $this->response->error('No se ha podido crear el registro '. $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Documento $documento)
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
