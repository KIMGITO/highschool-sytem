<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->numberBetween(1,6),
            'description' => $this->faker->sentence(),
            'created_by' => fake()->numberBetween(1,3),
            'updated_by' => fake()->numberBetween(1,3 ),
        ];
    }
}
