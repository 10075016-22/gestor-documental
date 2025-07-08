<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
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

    public function indexDatatable(Request $request) 
    {
        try {
            $params = $request->query();

            if(isset($params['page']) && isset($params['limit'])) {
                $page  = max(1, intval($params['page']));
                $limit = max(1, intval($params['limit']));
                $offset = ($page - 1) * $limit;

                $data = Empleado::with(['tipoidentificacion'])->orderBy('id', 'DESC')
                    ->offset($offset)
                    ->limit($limit)
                    ->get()
                    ->map(function ($empleado) {
                        $empleado->fullname = $empleado->nombre. " ".$empleado->apellidos;
                        $empleado->tipodoc  = $empleado->tipoidentificacion->codigo ?? '';
                        return $empleado;
                    });
            } else {
                $data = Empleado::orderBy('id', 'DESC')->get();
            }

            $total = Empleado::count();
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
                'nrodocumento'  => 'required|string|max:15',
                'nombre'        => 'required|string|max:1000',
                'apellidos'     => 'required|string|max:1000',
                'email'         => 'required|email',
                'telefono'      => 'required|string|max:12',
                'fecha_ingreso' => 'required|date',
                'cargo'         => 'required|string'
            ]);

            $empleado = Empleado::create($request->all());

            return $this->response->success($empleado);
        } catch (\Throwable $th) {
            return $this->response->error('No se ha podido crear el registro');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
