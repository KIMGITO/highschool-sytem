<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'code' => strtoupper(fake()->unique()->bothify('???###')),
            'description' => fake()->sentence(),
            'credits' => fake()->numberBetween(1, 5),
            'department_id' => fake()->numberBetween(1, 3),
            'created_by' => fake()->numberBetween(1, 3),
            'updated_by' => fake()->numberBetween(1, 3),

        ];
    }
}
