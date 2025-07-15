<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\User;
use App\Models\UsuarioXCliente;
use Illuminate\Http\Request;

class UsuarioXClienteController extends Controller
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
                'user_id'   => 'required|int',
                'clientes'  => 'required|array|exists:clientes,id',
            ]);
            $user = User::find($request->user_id);

            if(!$user) {
                return $this->response->error("El usuario no existe");
            }
            $clientes = $request->clientes;
            $associateid = [];
            // eliminamos los clientes asociados al usuario
            $user->clientes()->detach();
            // asociamos a X usuario N clientes
            foreach ($clientes as $key => $clienteid) {
                $associateid[] = UsuarioXCliente::create([ 'user_id' => $user->id, 'cliente_id' => $clienteid ]);
            }

            return $this->response->success($associateid);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error'.$th->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(UsuarioXCliente $usuarioXCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsuarioXCliente $usuarioXCliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsuarioXCliente $usuarioXCliente)
    {
        //
    }
}
