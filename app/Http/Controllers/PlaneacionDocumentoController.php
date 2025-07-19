<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Documento;
use App\Models\HistoricoDocumento;
use App\Models\PlaneacionDocumento;
use App\Models\User;
use App\Utils\UtilPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


    public function indexDatatablePendientes(Request $request) 
    {
        try {
            $params = $request->query();

            if(isset($params['page']) && isset($params['limit'])) {
                $page  = max(1, intval($params['page']));
                $limit = max(1, intval($params['limit']));
                $offset = ($page - 1) * $limit;

                $data = PlaneacionDocumento::with(['cliente', 'documento'])->orderBy('id', 'DESC')
                    ->orderBy('cliente_id')
                    ->whereIn('cliente_id', UtilPermissions::getUserClients())
                    // ->whereEstado(0)
                    ->offset($offset)
                    ->limit($limit)
                    ->get()
                    ->map(function($item) {
                        $item->clientenombre = $item->cliente->nombre;
                        $item->docnombre     = $item->documento->nombre;
                        if($item->documento) {
                            $plantilla = $item->documento->plantilla ? (Storage::disk('documentos')->exists($item->documento->plantilla) ? Storage::disk('documentos')->url($item->documento->plantilla) : null) : null;
                            $item->plantilla = $plantilla;
                        }
                        return $item;
                    });
            } else {
                $data = PlaneacionDocumento::with(['cliente', 'documento'])->orderBy('id', 'DESC')
                    ->whereIn('cliente_id', UtilPermissions::getUserClients())
                    // ->whereEstado(0)
                    ->get()
                    ->map(function($item) {
                        $item->clientenombre = $item->cliente->nombre;
                        $item->docnombre     = $item->documento->nombre;
                        if($item->documento) {
                            $item->plantilla = $item->documento->plantilla ? (Storage::disk('documentos')->exists($item->documento->plantilla) ? Storage::disk('documentos')->url($item->documento->plantilla) : null) : null;
                        }
                        return $item;
                    });
            }

            $total = PlaneacionDocumento::whereIn('cliente_id', UtilPermissions::getUserClients())->count();
            return $this->response->success([
                'data'  => $data,
                'total' => $total
            ]);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error'.$th->getMessage());
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

                $data = PlaneacionDocumento::with(['historicoDocumentos'])->orderBy('id', 'DESC')
                    ->orderBy('cliente_id')
                    ->whereIn('cliente_id', UtilPermissions::getUserClients())
                    ->offset($offset)
                    ->limit($limit)
                    ->get()
                    ->map(function($item) {
                        $item->clientenombre = $item->cliente->nombre;
                        $item->docnombre     = $item->documento->nombre;
                        $item->historicoDocumentos = $item->historicoDocumentos->map(function($historico) {
                            $historico->document = Storage::disk('documentos')->url($historico->document);
                            $documento = PlaneacionDocumento::with(['documento'])->whereId($historico->planeacion_documento_id)->first();

                            $user = User::find($historico->user_id);
                            $historico->namedoc  = $documento->documento->nombre ?? null;
                            $historico->user = $user->fullname ?? null;

                            $historico->fechacreacion = $historico->created_at->format('Y-m-d H:i:s');
                            return $historico;
                        })->toArray() ?? [];
                        return $item;
                    });
            } else {
                $data = PlaneacionDocumento::orderBy('id', 'DESC')
                    ->whereIn('cliente_id', UtilPermissions::getUserClients())
                    ->get()
                    ->map(function($item) {
                        $item->clientenombre = $item->cliente->nombre;
                        $item->docnombre     = $item->documento->nombre;
                        return $item;
                    });
            }

            $total = PlaneacionDocumento::whereIn('cliente_id', UtilPermissions::getUserClients())->count();
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
            $data = PlaneacionDocumento::whereId($id)->with(['cliente', 'documento'])->first();
            if(!$data) {
                return $this->response->notFound('No existe el registro');
            }
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
    public function update(Request $request, $id)
    {
        try {
            $planeacionDocumento = PlaneacionDocumento::find($id);
            if(!$planeacionDocumento) {
                return $this->response->notFound('No existe el registro');
            }
            // validamos que el documento | File | requerido
            // validamos que ciclo_item_estandar_id | requerido | exista

            $request->validate([
                'documento_id'  => 'required|integer',
                'ciclo_item_estandar_id' => 'required|integer|exists:ciclo_item_estandars,id'
            ]);
            
            $data = $request->except(['documento', 'observaciones']);

            if($request->hasFile('documento')) {
                $filename = $request->file('documento')->store('/', 'documentos');

                $data['estado']    = 1;
                $data['documento'] = $filename;
            }

            $planeacionDocumento->update($data);

            // se crea el historico
            HistoricoDocumento::create([
                'planeacion_documento_id' => $planeacionDocumento->id,
                'user_id' => auth()->user()->id,
                'ciclo_item_estandar_id' => $request->ciclo_item_estandar_id,
                'document' => $filename,
                'observaciones' => $request->observaciones
            ]);

            return $this->response->success($planeacionDocumento);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = PlaneacionDocumento::find($id);
            if(!$data) {
                return $this->response->notFound('No existe el registro');
            }
            $data->delete();
            return $this->response->success('Registro eliminado correctamente');
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }
}
