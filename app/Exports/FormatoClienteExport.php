<?php

namespace App\Exports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class FormatoClienteExport implements FromView
{
    protected $datos;
    protected $cliente;
    protected $resumen;

    public function __construct(array $datos, Cliente $cliente, $resumen)
    {
        $this->datos   = $datos;
        $this->cliente = $cliente;
        $this->resumen = $resumen;
    }


    public function array(): array
    {
        return $this->datos;
    }

    public function view(): View
    {
        return view('exports.formato_cliente', [ 
            'data'    => $this->datos,
            'cliente' => $this->cliente,
            'resumen' => $this->resumen
        ]);
    }
}
