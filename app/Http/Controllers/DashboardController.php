<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Cliente;
use App\Models\Documento;
use App\Models\EstandarCliente;
use App\Models\Evaluacion;
use App\Models\PlaneacionDocumento;
use App\Models\User;
use App\utils\ChartUtils;
use App\Utils\UtilPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    protected $response;
    public function __construct(ResponseClass $response)
    {
        $this->response = $response;
    }
    
    /**
     * Esta función trae las cards sencillas del dashboard
     */
    public function getCards() {
        try {
            $user = auth()->user();

            $data = [];
            if( $user->hasRole('SuperAdmin') ) {
                $data = [
                    [
                        'id'    => 1,
                        'icon'  => 'account-multiple',
                        'title' => 'Usuarios',
                        'count' => User::count(),
                        'percentage' => self::getCalculateUsersWithLastMonth(),
                    ],
                    [
                        'id'    => 2,
                        'icon'  => 'account-multiple',
                        'title' => 'Clientes',
                        'count' => Cliente::count(),
                        'percentage' => self::getCalculateClientesWithLastMonth(),
                    ],
                    [
                        'id'    => 3,
                        'icon'  => 'account-multiple',
                        'title' => 'Documentos',
                        'count' => Documento::count(),
                        'percentage' => self::getCalculateDocumentosWithLastMonth(),
                    ],
                    [
                        'id'    => 4,
                        'icon'  => 'sort-calendar-ascending',
                        'title' => 'Evaluaciones',
                        'count' => Evaluacion::count(),
                        'percentage' => self::getCalculateEvaluacionesWithLastMonth(),
                    ],
                ];
            }
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error');
        }
    }

    public function getCharts() {
        try {
            $data = [
                ChartUtils::getDocumentSSTByStatus(),
                [
                    'type' => 'LineChart',
                    'cols' => 6,
                    'data' => [
                        ['Mes', 'Cumplimiento SST'],
                        ['Ene', 65], ['Feb', 70], ['Mar', 75], ['Abr', 72],
                        ['May', 78], ['Jun', 82], ['Jul', 85], ['Ago', 88],
                        ['Sep', 86], ['Oct', 90], ['Nov', 92], ['Dic', 95]
                    ],
                    'options' => [
                        'title' => 'Tendencia de Cumplimiento SST',
                        'curveType' => 'function',
                        'height' => 400,
                        'width' => '100%',
                        'legend' => ['position' => 'bottom'],
                    ],
                    'permission' => 'home-card-evaluaciones-clientes'
                ],
                [
                    'type' => 'PieChart', 
                    'cols' => 6,
                    'data' => [
                        ['Estado', 'Cantidad'],
                        ['Completo', 35],
                        ['En proceso', 45],
                        ['Pendiente', 20]
                    ],
                    'options' => [
                        'title' => 'Estado Plan Anual SST',
                        'height' => 400,
                        'width' => '100%',
                        'pieHole' => 0.4
                    ],
                    'permission' => 'home-card-evaluaciones-clientes'
                ],
                [
                    'type' => 'ColumnChart',
                    'cols' => 6,
                    'data' => [
                        ['Mes', 'Capacitaciones', 'Inspecciones', 'Simulacros'],
                        ['Ene', 4, 2, 1], ['Feb', 3, 3, 0], 
                        ['Mar', 5, 2, 1], ['Apr', 4, 4, 0],
                        ['May', 6, 3, 1], ['Jun', 3, 2, 1]
                    ],
                    'options' => [
                        'title' => 'Actividades SST por Mes',
                        'height' => 400,
                        'width' => '100%',
                        'legend' => ['position' => 'bottom']
                    ],
                    'permission' => 'home-card-evaluaciones-clientes'
                ],
                ChartUtils::getQualificationByClients()
            ];

            $data = array_filter($data, function($item) {
                return in_array($item['permission'], UtilPermissions::getUserPermissionsByName());
            });
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error' . $th->getMessage());
        }
    }

    public function getCalendar() {
        try {
            $data = [];
            $data = self::getCalendarEvents();
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error al cargar el calendario');
        }
    }

    // public functions calendar
    private static function colorFromClientId($clientId) {
        $hash = crc32($clientId);
        return '#' . substr(dechex($hash), 0, 6);
    }

    private static function getCalendarEvents() {
        $data = [];

        try {
            PlaneacionDocumento::whereEstado(0)->whereIn('cliente_id', UtilPermissions::getUserClients())->get()->map(function($event) use (&$data) {
                $data[] = [
                    'id'     => $event->id,
                    'title'  => $event->documento->nombre,
                    'start'  => $event->fecha_fin,
                    'end'    => $event->fecha_fin,
                    'color'  => self::colorFromClientId($event->cliente_id),
                    'client' => $event->cliente->nombre,
                    'image'  => $event->cliente->logo ? Storage::disk('logos')->url($event->cliente->logo) : null,
                    'status' => $event->estado === 1,
                    // 'image'  => $event->cliente->imagen ? asset('storage/' . $event->cliente->imagen) : null,
                ];
            });
            return $data;
        } catch (\Throwable $th) {
            return [];
        }
    }


    // private functions charts
    /**
     * 
     * @return array
     * [
     *  ["nombre1", "nombre2", "nombre3"],
     *  ["documento1", "documento2", "documento3"],
     */
    private static function getCalculateColumnsClientDocument() {
        $data = [];
        $data[0] = Cliente::all()->pluck('nombre')->toArray();
        foreach (Cliente::all() as $cliente) {
            $data[1][] = $cliente->estandarClientes()->count();
        }
        return $data;
    }

    // private functions cards
    private static function getCalculateUsersWithLastMonth() {
        $thisMonthUsers = User::whereRaw('MONTH(created_at) = MONTH(CURRENT_TIMESTAMP)')->count();
        return $thisMonthUsers;
    }
    private static function getCalculateClientesWithLastMonth() {
        $thisMonthClientes = Cliente::whereRaw('MONTH(created_at) = MONTH(CURRENT_TIMESTAMP)')->count();
        return $thisMonthClientes;
    }

    private static function getCalculateDocumentosWithLastMonth() {
        $thisMonthDocumentos = Documento::whereRaw('MONTH(created_at) = MONTH(CURRENT_TIMESTAMP)')->count();
        return $thisMonthDocumentos;
    }
    private static function getCalculateEvaluacionesWithLastMonth() {
        $thisMonthEvaluaciones = Evaluacion::whereRaw('MONTH(created_at) = MONTH(CURRENT_TIMESTAMP)')->count();
        return $thisMonthEvaluaciones;
    }
}
