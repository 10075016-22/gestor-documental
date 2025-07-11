<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documento>
 */
class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_documento_id' => 1,
            'nombre'        => 'FORMATO ' . strtoupper(fake()->words(3, true)),
            'descripcion'   => fake()->paragraph(),
            'obligatorio'   => fake()->boolean(),
            'generaFormato' => fake()->boolean()
        ];
    }
}
