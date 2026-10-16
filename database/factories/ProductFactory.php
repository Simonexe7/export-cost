<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_product' => 'Vanilla Beans',
            'grade' => fake()->unique()->randomElement([
                'A',
                'B',
            ]),
            'satuan' => 'Kg'
        ];
    }
}
