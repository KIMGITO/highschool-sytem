<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Competence;
use App\Models\Assessment;
use App\Models\Student;
use id;
use App\Models\Subject;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assessment_id' => Assessment::factory(),
            'student_id' => Student::factory(),
            'subject_id' => Subject::factory(),
            'competence_id' => fake()->numberBetween(1,5),
            'score' => $this->faker->randomFloat(2, 0, 100),
            // 'scale_id' => Scale::factory(),
            'remarks' => $this->faker->sentence(),
        ];
    }
}
