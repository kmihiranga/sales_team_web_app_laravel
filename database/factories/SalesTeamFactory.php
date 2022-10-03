<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SalesTeam>
 */
class SalesTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'person_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telephone' => rand(1, 9),
            'current_route' => $this->faker->city(),
            'joined_date' => $this->faker->date(),
            'comments' => $this->faker->text(),
        ];
    }
}
