<?php

use App\Http\Controllers\CicloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EstandarController;
use App\Http\Controllers\FormsTableController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PlanAccionController;
use App\Http\Controllers\PlaneacionDocumentoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'authenticate']);

// Grouping usign jwt middleware
Route::middleware([JwtMiddleware::class])->group(function () {
    Route::post('/logout', [UserController::class, 'logout']);
    // services
    Route::group(['prefix' => 'v1'], function() {

        // dashboard
        Route::get('/dashboard/cards',      [DashboardController::class, 'getCards']);
        Route::get('/dashboard/charts',     [DashboardController::class, 'getCharts']);
        Route::get('/dashboard/calendar',   [DashboardController::class, 'getCalendar']);

        // modules
        Route::resource("/modules", ModuleController::class);

        // users
        Route::put("/users/restore/{id}", [UserController::class, "restoreUser"]);
        
        Route::get("/users/datatable", [UserController::class, 'indexDatatable']);
        Route::resource("/users", UserController::class);

        // permissions
        Route::resource("/permissions", PermissionController::class);

        // roles
        Route::get("/roles/datatable", [RoleController::class, 'indexDatatable']);
        Route::get("/roles/permisos-grupos", [ RoleController::class, 'permissionByGroups']);
        Route::resource("/roles", RoleController::class);

        // plan accion
        Route::get("/plan-accion/datatable", [PlanAccionController::class, 'indexDatatable']);
        Route::resource("/plan-accion", PlanAccionController::class);

        // clientes
        Route::get("/clientes/datatable", [ClienteController::class, 'indexDatatable']);
        Route::resource("/clientes", ClienteController::class);

        // documentos
        Route::get("/documentos/datatable", [DocumentoController::class, 'indexDatatable']);
        Route::resource("/documentos", DocumentoController::class);

        Route::get("/planeacion-documentos/datatable", [PlaneacionDocumentoController::class, 'indexDatatable']);
        Route::get("/planeacion-documentos/cliente/{id}", [PlaneacionDocumentoController::class, 'getByClientId']);
        Route::resource("/planeacion-documentos", PlaneacionDocumentoController::class);

        // estandar
        Route::get("/estandar/datatable", [EstandarController::class, 'indexDatatable']);
        Route::resource("/estandar", EstandarController::class);

        // Ciclos
        Route::get("/ciclos/datatable", [CicloController::class, 'indexDatatable']);
        Route::resource("/ciclos", CicloController::class);

        // Empleados
        Route::get("/empleados/datatable", [EmpleadoController::class, 'indexDatatable']);
        Route::resource("/empleados", EmpleadoController::class);

    });

    // associated to tables
    Route::group(['prefix' => 'form'], function() {
        Route::get("/select/{id}",    [FormsTableController::class, 'getSelect']);
    });
    Route::group(['prefix' => 'grid'], function() {
        Route::get("/configuracion/table/{id}",   [TableController::class, 'getTable']);
        Route::get("/configuracion/headers/{id}", [TableController::class, 'getHeaders']);
        Route::get("/configuracion/actions/{id}", [TableController::class, 'getActions']);
        Route::get("/configuracion/form/{id}",    [TableController::class, 'getForm']);
        Route::resource("/configuracion", TableController::class);
    });

});

Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'Why so seriuos?']);
});