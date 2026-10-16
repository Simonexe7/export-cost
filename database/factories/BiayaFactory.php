<?php

namespace Database\Factories;

use App\Models\Biaya;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Biaya>
 */
class BiayaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_biaya' => fake()->randomElement([
                'Packing',
                'Transport',
                'Handling',
                'Custom Clereance',
                'Dokumen',
                'Asuransi',
            ]),

            'jenis_biaya' => fake()->randomElement([
                'Fixed',
                'Variable'
            ]),

            'nilai_biaya' => fake()->numberBetween(
                50000,
                500000
            ),
        ];
    }
}
