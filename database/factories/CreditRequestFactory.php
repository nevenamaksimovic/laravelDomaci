<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CreditRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => $this->faker->numberBetween(1, 15),
            'credit_id' => $this->faker->numberBetween(1, 5),
            'amount' => $this->faker->numberBetween(1200, 2700),
            'period' => $this->faker->numberBetween(1, 6)
        ];
    }
}
