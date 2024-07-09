<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'model_name' => $this->faker->domainWord,
            'manufacturing_year' => random_int(1960, 2022),
            'price' => round(random_int(2000, 20000) / 50) * 50,
            'mileage' => round(random_int(20000, 200000) / 500) * 500,
        ];
    }
}