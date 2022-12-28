<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'passenger_id' => $this->faker->numberBetween(1, 100),
            'trip_id' => $this->faker->numberBetween(1, 100),
            'amount' => $this->faker->numberBetween(1, 10000)
        ];
    }
}
