<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Estandar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstandarCliente>
 */
class EstandarClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id'  => Cliente::pluck('id')->random(),
            'estandar_id' => Estandar::pluck('id')->random(),
        ];
    }
}
