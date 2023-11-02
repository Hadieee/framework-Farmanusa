<?php

namespace Database\Factories;

use App\Models\Apoteker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resep>
 */
class ResepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_resep' => fake()->unique()->numberBetween(1000000000, 9999999999),
            'nama_resep' => fake()->name(),
            'nama_obat' => fake()->randomElement([
                'Parasetamol',
                'Ibuprofen',
                'Aspirin',
                'Omeprazol',
                'Amoksisilin',
                'Metformin',
                'Amlodipin',
                'Simvastatin',
                'Ranitidin',
                'Cefuroksim',
                'Ketoprofen',
                'Prednison',
                'Cetirizine',
                'Loratadin',
                'Erythromycin',
                'Alprazolam',
                'Atorvastatin',
                'Losartan',
                'Furosemid',
                'Levofloxacin'
            ]),
            'jumlah_obat' => fake()->numberBetween(1, 99),
            'apoteker_id' => Apoteker::all()->random()->id
        ];
    }
}
