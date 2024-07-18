<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'director' => $this->faker->name(),
            'protagonist' => $this->faker->name(),
            'duration' => $this->faker->numberBetween($min = 60, $max = 180), // Assuming duration is in minutes
            'synopsis' => $this->faker->paragraph(),
            'release' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            'poster' => $this->faker->imageUrl($width = 640, $height = 480),
            'genre' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
