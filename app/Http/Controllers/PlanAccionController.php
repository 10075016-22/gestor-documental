<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\PlanAccion;
use Illuminate\Http\Request;

class PlanAccionController extends Controller
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
            $planAccions = PlanAccion::all();
            return $this->response->success($planAccions);
        } catch (\Exception $e) {
            return $this->response->error($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $planAccion = PlanAccion::create($request->all());
            return $this->response->success($planAccion);
        } catch (\Exception $e) {
            return $this->response->error($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $planAccion = PlanAccion::find($id);

            if (!$planAccion) {
                return $this->response->notFound('PlanAccion not found');
            }

            return $this->response->success($planAccion);
        } catch (\Exception $e) {
            return $this->response->error($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $planAccion = PlanAccion::find($id);

            if (!$planAccion) {
                return $this->response->notFound('PlanAccion not found');
            }

            $planAccion->update($request->all());
            return $this->response->success($planAccion);
        } catch (\Exception $e) {
            return $this->response->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $planAccion = PlanAccion::find($id);

            if (!$planAccion) {
                return $this->response->notFound('PlanAccion not found');
            }

            $planAccion->delete();
            return $this->response->success([]);
        } catch (\Exception $e) {
            return $this->response->error($e->getMessage());
        }
    }
}
