<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Formato;
use Illuminate\Http\Request;

class FormatoController extends Controller
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
            $data = Formato::orderBy('id')->get();
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
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
    public function show(Formato $formato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formato $formato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formato $formato)
    {
        //
    }
}
