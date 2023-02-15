<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
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
            'seat_id' => $this->faker->numberBetween(1, 100),
            'dates' => $this->faker->dateTimeBetween('now', '+4 week'),
            'driver_name' => $this->faker->name(),
            'van_plate' => $this->faker->text($maxNbChars=6),
            'trip_status' => $this->faker->boolean(),
            'orig_fare' => $this->faker->numberBetween(1, 10000),
            'extra_fare' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
