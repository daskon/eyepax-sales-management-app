<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'tele' => fake()->numerify('##########'),
            'joined_date' => fake()->dateTimeThisMonth(),
            'comment' => fake()->text(),
            'route' => 'barnes place',
        ];
    }
}
