<?php

namespace Database\Factories;

use App\Models\Forwarder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Forwarder>
 */
class ForwarderFactory extends Factory
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
            'alamat' => fake()->address(),
            'telepon' => fake()->phoneNumber(),
            'email' => fake()->unique->safeEmail(),
        ];
    }
}
