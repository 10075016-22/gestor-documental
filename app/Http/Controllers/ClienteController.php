<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Cliente;
use App\Models\EstandarCliente;
use App\Models\UsuarioXCliente;
use App\Utils\UtilPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function getClientUser($id)
    {
        try {
            // si está asociado hacemos la relación con UsuarioXcliente
            $data = Cliente::orderBy('id', 'DESC')->get()->map(function ($cliente) use ($id) {
                $userXCliente = UsuarioXCliente::whereUserId($id)->whereClienteId($cliente->id)->first();
                $cliente->associate = $userXCliente ? true : false;
                return $cliente;
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

            if(isset($params['page']) && isset($params['limit'])) {
                $page  = max(1, intval($params['page']));
                $limit = max(1, intval($params['limit']));
                $offset = ($page - 1) * $limit;

                $data = Cliente::orderBy('id', 'DESC')
                    ->offset($offset)
                    ->limit($limit)
                    ->whereIn('id', UtilPermissions::getUserClients())
                    ->get()
                    ->map(function ($cliente) {
                        $cliente->logo = $cliente->logo ? Storage::disk('logos')->url($cliente->logo) : null;
                        $estandarcliente = EstandarCliente::whereClienteId($cliente->id)->first();
                        $cliente->estandarcliente = $estandarcliente->estandar_id ?? null;
                        return $cliente;
                    });
            } else {
                $data = Cliente::orderBy('id', 'DESC')
                    ->whereIn('id', UtilPermissions::getUserClients())
                    ->get();
            }

            $total = Cliente::whereIn('id', UtilPermissions::getUserClients())->count();
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
                'nombre'    => 'required|string|max:255',
                'nit'       => 'required|string|unique:clientes,nit|max:20',
                'email'     => 'required|email|unique:clientes,email|max:255',
                'direccion' => 'required|string|max:255',
                'telefono'  => 'required|string|max:20',
                'logo'      => 'required|file|mimes:jpeg,png,jpg'
            ]);
            $data = $request->except('logo');

            if ($request->hasFile('logo')) {
                $filename = $request->file('logo')->store('/', 'logos');
                $data['logo'] = $filename;
            }

            $cliente = Cliente::create($data);
            return $this->response->success($cliente);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error creando el cliente '.$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $data = Cliente::find($id);
            if(!$data) {
                return $this->response->notFound('No existe el registro');
            }
            $data->logo = $data->logo ? Storage::disk('logos')->url($data->logo) : null;
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
            $cliente = Cliente::find($id);
            if(!$cliente) {
                return $this->response->notFound('No existe el registro');
            }

            $data = $request->except('logo');
            if ($request->hasFile('logo')) {
                $filename = $request->file('logo')->store('/', 'logos');
                $data['logo'] = $filename;
            }

            $cliente->update($data);
            return $this->response->success($cliente);
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
            $cliente = Cliente::find($id);
            if(!$cliente) {
                return $this->response->notFound('No existe el registro');
            }
            if($cliente) $cliente->delete();

            return $this->response->success([]);
        } catch (\Throwable $th) {
            return $this->response->error('An error has occurred');
        }    
    }
}
