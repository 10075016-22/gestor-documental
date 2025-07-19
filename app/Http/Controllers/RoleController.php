<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Grupo;
use App\Models\HeadersTable;
use App\Models\Table;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
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
            $roles = Role::get();
            return $this->response->success($roles);
        } catch (\Throwable $th) {
            return $this->response->error('An error has occurred');
        }
    }

    public function permissionByGroups() {
        try {
            $grupos = Grupo::with('permissions')->get()->map(function ($grupo) {
                return [
                    'nombre' => $grupo->nombre,
                    'permissions' => $grupo->permissions->map(function ($permiso) {
                        return [
                            'id' => $permiso->id,
                            'name' => $permiso->name,
                            'guard_name' => $permiso->guard_name,
                        ];
                    }),
                ];
            });
            return $this->response->success($grupos);
        } catch (\Throwable $th) {
            return $this->response->error('An error has occurred' .$th->getMessage());
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

                $data = Role::orderBy('id', 'DESC')
                    ->offset($offset)
                    ->limit($limit)
                    ->get();
            } else {
                $data = Role::orderBy('id', 'DESC')->get();
            }

            $total = Role::count();
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
            $role = Role::create($request->all());

            if ($request->has('permissions')) {
                $role->syncPermissions($request->permissions);
            }
            return $this->response->success($role);
        } catch (\Throwable $th) {
            return $this->response->error('An error has occurred');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $profile = Role::find($id);

            if (!$profile) {
                return $this->response->error('The record does not exist');
            }

            $profile->permissions = $profile->permissions()->get();

            return $this->response->success($profile);
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
            $role = Role::find($id);
            if (!$role) {
                return $this->response->error('El registro no existe');
            }
            $role->update(['name' => $request->name]);

            if ($request->has('permissions')) {
                $role->syncPermissions($request->permissions);
            }
            return $this->response->success($role);
        } catch (\Throwable $th) {
            return $this->response->error('An error has occurred');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $role = Role::find($id);
            if (!$role) {
                return $this->response->error('The record does not exist');
            }
            $role->delete();
            return $this->response->success([]);
        } catch (\Throwable $th) {
            return $this->response->error('An error has occurred');
        }
    }
}
