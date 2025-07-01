<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\FormsTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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

    public function getSelect($id) {
        try {
            $form = FormsTable::find($id);

            if(!$form) {
                return $this->response->error("No existe el registro", [], 417);
            }
            
            $form->makeVisible(['query'])->toArray();
            $query = $form->query ?? '';
            
            list($fieldsPart, $table) = explode('|', $query);
            $fields = array_map('trim', explode(',', $fieldsPart));

            if (!Schema::hasTable($table)) {
                return $this->response->error('Configuración errada [table] !! Consulta con tu administrador');
            }

            $columns = Schema::getColumnListing($table);
            foreach ($fields as $field) {
                // Extract base field name before AS clause
                $baseField = trim(explode(' AS ', $field)[0]);
                // Also handle lowercase 'as'
                $baseField = trim(explode(' as ', $baseField)[0]);
                
                if (!in_array($baseField, $columns)) {
                    return $this->response->error('Configuración errada [fields]!! Consulta con tu administrador');
                }
            }
            
            $results = DB::table($table)->select($fields)->get();

            return $this->response->success($results);
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
