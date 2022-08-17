<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gymnast>
 */
class GymnastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teamIDs = Team::all()->pluck('id')->toArray();

        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->rand(18, 28),
            'team_id' => $this->faker->randomElement($teamIDs)
        ];
    }
}
