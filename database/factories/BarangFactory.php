<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Enum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namabarang' => fake()->word(),
            'jenisbarang' => fake()->randomElement(['Makanan', 'Minuman']),
            'hargamodal' => fake()->randomElement([6000, 8000, 4000, 7000]),
            'hargajual' => fake()->randomElement([13000, 17000, 9000, 15000]),
            'stock' => fake()->randomElement([50, 35, 60, 40])
        ];
    }
}
