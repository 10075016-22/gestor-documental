<?php

namespace App\Http\Controllers;

use App\Interface\ResponseClass;
use App\Models\Cliente;
use App\Models\Documento;
use App\Models\EstandarCliente;
use App\Models\Evaluacion;
use App\Models\PlaneacionDocumento;
use App\Models\User;
use Illuminate\Http\Request;

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
            $user = auth()->user();

            $data = [];
            if( $user->hasRole('SuperAdmin') ) {
                $data = [
                    [
                        'type' => 'ColumnChart',
                        'cols'  => 6,
                        'data' => self::getCalculateColumnsClientDocument(),
                        'options' => [
                          'title' => 'Cantidad de documentos por cliente',
                          'hAxis' => [
                            'title' => 'Clientes', 
                            'titleTextStyle' => ['color' => '#333']
                          ],
                          'vAxis' => [
                            'minValue' => 0,
                            'title' => 'Documentos',
                            'titleTextStyle' => ['color' => '#333']
                          ],
                          'chartArea' => [
                            'width' => '50%', 
                            'height' => '70%'
                          ],
                          'height' => 400,
                          'width' => '100%',
                          'legend' => ['position' => 'bottom'],
                        ],
                        'permission' => 'home-card-documentos-clientes'
                    ],
                    [
                        'type' => 'ColumnChart',
                        'cols'  => 6,
                        'data' => [
                            ["Clientes", "Cliente 1", "Cliente 2", "Cliente 3", "Cliente 4", "Cliente 5", "Cliente 6"],
                            ["Evaluaciones", 56, 78, 27, 12, 34, 45]
                        ],
                        'options' => [
                          'title' => 'Seguimiento de evaluaciones por cliente',
                          'hAxis' => [
                            'title' => 'Clientes', 
                            'titleTextStyle' => ['color' => '#333']
                          ],
                          'vAxis' => [
                            'minValue' => 0,
                            'maxValue' => 100,
                            'title' => 'Porcentaje de avance',
                            'titleTextStyle' => ['color' => '#333']
                          ],
                          'height' => 400,
                          'width' => '100%',
                          'legend' => [
                            'position' => 'bottom'],
                        ],
                        'permission' => 'home-card-evaluaciones-clientes'
                    ]

                ];
            }
            return $this->response->success($data);
        } catch (\Throwable $th) {
            return $this->response->error('Ha ocurrido un error' . $th->getMessage());
        }
    }

    public function getCalendar() {
        try {
            $user = auth()->user();
            $data = [];
            if( $user->hasRole('SuperAdmin') ) {
                $data = self::getCalendarEvents();
            }
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
            PlaneacionDocumento::whereEstado(0)->get()->map(function($event) use (&$data) {
                $data[] = [
                    'id'     => $event->id,
                    'title'  => $event->documento->nombre,
                    'start'  => $event->fecha_fin,
                    'end'    => $event->fecha_fin,
                    'color'  => self::colorFromClientId($event->cliente_id),
                    'client' => $event->cliente->nombre,
                    'image'  => $event->cliente->logo,
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
