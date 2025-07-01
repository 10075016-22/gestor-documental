<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\FormsTable;
use Illuminate\Http\Request;

class FormsTableController extends Controller
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

    public function getSelect(Request $request) {

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
    public function show(FormsTable $formsTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormsTable $formsTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormsTable $formsTable)
    {
        //
    }
}
