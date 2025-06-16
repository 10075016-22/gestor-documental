<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    protected $response;
    public function __construct(ResponseClass $response)
    {
        $this->response = $response;
    }

    public function index()
    {
        try {
            $configuration = Table::with(['headers' => function($query) {
                $query->with(['type_field'])
                      ->orderBy('order');
            }])->get();

            return $this->response->success($configuration);
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
    public function show($id)
    {
        try {
            $configuration = Table::whereId($id)->with(['headers' => function($query) {
                $query->with(['type_field'])
                      ->orderBy('order');
            }])->get();

            return $this->response->success($configuration);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        //
    }
}
