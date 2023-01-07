<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paket_data>
 */
class Paket_dataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'kecepatan' => random_int(1, 1000),
            'harga' => random_int(100000, 1000000),
            'ppn(%)' => random_int(10, 100),
            'label' => fake()->randomDigit,
        ];
    }
}
