<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Documento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlaneacionDocumento>
 */
class PlaneacionDocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id'    => Cliente::inRandomOrder()->first()->id,
            'documento_id'  => Documento::inRandomOrder()->first()->id,
            'fecha_fin'     => fake()->dateTimeBetween('-15 days', '+15 days'),
            'observaciones' => fake()->sentence(),
        ];
    }
}
