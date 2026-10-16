<?php

namespace Database\Factories;

use App\Models\Undername;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Undername>
 */
class UndernameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_perusahaan' => fake()->company(),
            'nomor_izin_ekspor' => fake()->numerify('#############'),
            'alamat' => fake()->address(),
            'telepon' => fake()->phoneNumber(),
            'email' => fake()->unique->safeEmail(),
            'fee' => fake()->numberBetween(
                1,
                10
            ),
        ];
    }
}
