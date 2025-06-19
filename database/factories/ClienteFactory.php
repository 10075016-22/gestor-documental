<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->company(),
            'nit' => fake()->unique()->numerify('##########'),
            'email' => fake()->unique()->companyEmail(),
            'direccion' => fake()->address(),
            'telefono' => fake()->phoneNumber(),
            'logo' => 'https://picsum.photos/640/480',
            'created_at' => fake()->dateTimeBetween('-3 month', 'now'),
        ];
    }
}
