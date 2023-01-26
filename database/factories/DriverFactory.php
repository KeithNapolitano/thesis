<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'driver_name' => $this->faker->name(),
            'driver_contact' => $this->faker->phoneNumber(),
            'driver_address' => $this->faker->address(),
            'route_id' => $this->faker->numberBetween(1, 100),
            'van_id' => $this->faker->numberBetween(1, 100)
        ];
    }
}
