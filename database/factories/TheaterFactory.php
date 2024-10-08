<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Theater>
 */
class TheaterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'poster' => '1726735908.jpg',
            'threeD' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'dolby' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
