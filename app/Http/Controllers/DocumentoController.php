<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Documento;
use App\Utils\UtilPermissions;
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

    public function getSeguimiento() {
        try {
            $data = Documento::join('estandar_documentos', 'documentos.id', '=', 'estandar_documentos.documento_id')
                            ->join('estandar_clientes', 'estandar_documentos.estandar_id', '=', 'estandar_clientes.estandar_id')
                            ->whereIn('estandar_clientes.cliente_id', UtilPermissions::getUserClients())
                            ->select('documentos.*')
                            ->distinct('documentos.id')
                            ->get()
                            ->map(function($documento) {
                                $documento->fileplantilla = $documento->plantilla ? Storage::disk('documentos')->url($documento->plantilla) : null;
                                return $documento;
                            });
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error '.$th->getMessage());
        }
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
                    ->distinct()
                    ->get()
                    ->map(function($documento) {
                        $documento->tipodocumento = $documento->tipoDocumento->nombre;
                        $documento->fileplantilla = $documento->plantilla ? Storage::disk('documentos')->url($documento->plantilla) : null;
                        return $documento;
                    });
            } else {
                $data = Documento::with(['tipoDocumento'])
                                ->leftJoin('estandar_documentos', 'documentos.id', '=', 'estandar_documentos.documento_id')
                                ->orderBy('documentos.id', 'DESC')
                                ->distinct()
                                ->get();
            }

            $total = Documento::with(['tipoDocumento'])
                                ->leftJoin('estandar_documentos', 'documentos.id', '=', 'estandar_documentos.documento_id')
                                ->where($where)
                                ->distinct()
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
    public function show($id)
    {
        try {
            $documento = Documento::find($id);
            if(!$documento) {
                return $this->response->notFound('No existe el registro');
            }
            return $this->response->success($documento);
        } catch (\Throwable $th) {
            return $this->response->error('An error has occurred');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $documento = Documento::find($id);
            if(!$documento) {
                return $this->response->notFound('No existe el registro');
            }
            // observacion si llega cómo null no lo actualiza
            $data = $request->except('plantilla');
            if($data['descripcion'] === null || $data['descripcion'] === 'null') {
                unset($data['descripcion']); // eliminamos la llave si llega con null
            }
            if ($request->hasFile('plantilla')) {
                $filename = $request->file('plantilla')->store('/', 'documentos');
                $data['plantilla'] = $filename;
            }
            $documento->update($data);
            return $this->response->success($documento);
        } catch (\Throwable $th) {
            return $this->response->error('No se ha podido actualizar el registro '. $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $record = Documento::find($id);
            if(!$record) {
                return $this->response->notFound('No existe el registro');
            }
            if($record) $record->delete();

            return $this->response->success([]);
        } catch (\Throwable $th) {
            return $this->response->error('An error has occurred');
        } 
    }
}
