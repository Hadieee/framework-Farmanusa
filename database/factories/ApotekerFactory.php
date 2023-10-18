<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apoteker>
 */
class ApotekerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_apoteker' => fake()->unique()->numberBetween(1000000000, 9999999999),
            'nama_apoteker' => fake()->name(),
            'alamat_apoteker' => fake()->address(),
        ];
    }
}
