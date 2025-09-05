<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assessment>
 */
class AssessmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'type' => fake()->randomElement(['Exam', 'Quiz', 'Assignment']),
            'term' => fake()->randomElement(['Term 1', 'Term 2', 'Term 3']),
            'code' => strtoupper(fake()->bothify('A###??')),
            'description' => fake()->paragraph(),
            'date' => fake()->date(),
            'grade_id' => GradeFactory::factory(), // Assuming GradeFactory exists
            'created_by' => 1, // Assuming user with ID 1 exists
            'updated_by' => 1, // Assuming user with ID 1 exists
        ];
    }
}
