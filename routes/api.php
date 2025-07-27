<?php

use App\Http\Controllers\CicloController;
use App\Http\Controllers\CicloItemEstandarController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EstandarClienteController;
use App\Http\Controllers\EstandarController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\FormatoClienteController;
use App\Http\Controllers\FormatoController;
use App\Http\Controllers\FormsTableController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PlanAccionController;
use App\Http\Controllers\PlaneacionDocumentoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioXClienteController;
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
        Route::get("/clientes/usuario/{id}", [ClienteController::class, 'getClientUser']);
        Route::post("/clientes/{id}", [ClienteController::class, 'update']); // El put no está tomando el formData
        Route::resource("/clientes", ClienteController::class);

        // documentos
        Route::get("/documentos/datatable", [DocumentoController::class, 'indexDatatable']);
        Route::get("/documentos/seguimiento", [DocumentoController::class, 'getSeguimiento']);
        Route::post("/documentos/{id}", [DocumentoController::class, 'update']); // El put no está tomando el formData
        Route::resource("/documentos", DocumentoController::class);


        // planeacion documentos seguimiento
        Route::get("/planeacion-documentos/seguimiento/datatable", [PlaneacionDocumentoController::class, 'indexDatatablePendientes']);

        Route::get("/planeacion-documentos/datatable", [PlaneacionDocumentoController::class, 'indexDatatable']);
        Route::get("/planeacion-documentos/cliente/{id}", [PlaneacionDocumentoController::class, 'getByClientId']);
        Route::post("/planeacion-documentos/{id}", [PlaneacionDocumentoController::class, 'update']); // El put no está tomando el formData
        Route::resource("/planeacion-documentos", PlaneacionDocumentoController::class);

        // estandar
        Route::get("/estandar/datatable", [EstandarController::class, 'indexDatatable']);
        Route::resource("/estandar", EstandarController::class);

        Route::resource("/estandar-cliente", EstandarClienteController::class);

        // Ciclos
        Route::get("/ciclos/datatable", [CicloController::class, 'indexDatatable']);
        Route::resource("/ciclos", CicloController::class);

        // Ciclo Item Estandar
        Route::resource("/ciclo-item-estandar", CicloItemEstandarController::class);


        // Empleados
        Route::get("/empleados/datatable", [EmpleadoController::class, 'indexDatatable']);
        Route::resource("/empleados", EmpleadoController::class);

        Route::resource("/formatos", FormatoController::class);

        Route::get('/formatos-clientes/clientes',     [FormatoClienteController::class, 'getClientes']);
        Route::get('/formatos-clientes/preview/{id}', [FormatoClienteController::class, 'getFormato']);
        Route::get('/formatos-clientes/export/{id}',  [FormatoClienteController::class, 'exportFormatoByClient']);
        Route::get('/formatos-clientes/preview/cliente/{id}', [FormatoClienteController::class, 'getFormatoByCliente']);
        Route::get('/formatos-clientes/preview/cliente/{id}/chart', [FormatoClienteController::class, 'getFormatoByClienteChart']);
        Route::resource("/formatos-cliente", FormatoClienteController::class);


        Route::resource("/usuarios-clientes", UsuarioXClienteController::class);

        // evaluacion
        Route::get("/evaluacion/formato-item/{cliente_id}/{id}", [EvaluacionController::class, 'getByFormatoItemId']);
        Route::get("/evaluacion/detalle/datatable", [EvaluacionController::class, 'indexDatatableDetalle']);
        Route::get("/evaluacion/datatable", [EvaluacionController::class, 'indexDatatable']);
        Route::resource("/evaluacion", EvaluacionController::class);


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