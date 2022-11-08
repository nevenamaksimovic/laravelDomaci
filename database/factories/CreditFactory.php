<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $minAmount = $this->faker->numberBetween(1000, 3000);
        return [
            'min_amount' => $minAmount,
            'max_amount' => $minAmount * 2,
            'rate' => $this->faker->randomFloat(2, 1, 22),
            'min_period' => $this->faker->numberBetween(1, 3),
            'max_period' => $this->faker->numberBetween(4, 7)
        ];
    }
}
