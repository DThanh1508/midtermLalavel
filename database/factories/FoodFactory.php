<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fruitName' => $this->faker->name(),
            'oldPrice' => $this->faker->name(),
            'newPrice' => $this->faker->name(),
            'produced_on' => now(),
        ];
    }
}
