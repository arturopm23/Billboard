<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShowTime>
 */
class ShowTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => Movie::factory(),
            'theater_id' => Theater::factory(),
            'show_hour' => $this->faker->randomElement(['13:00', '16:00', '20:00', '23:00']),
            'show_day' => $this->faker->date()
        ];
    }
}
