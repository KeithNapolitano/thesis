<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'route_id' => $this->faker->numberBetween(1, 100),
            'passenger_id' => $this->faker->numberBetween(1, 100),
            'tickets' => $this->faker->numberBetween(1, 14),
            'payment_id' => $this->faker->numberBetween(1, 14),
            'present' => $this->faker->boolean(),
            'seat' => $this->faker->text($maxNbChars=10),
            'ref_num' => $this->faker->text($maxNbChars=8),
        ];
    }
}
