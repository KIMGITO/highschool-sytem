<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'adm_no' => fake()->unique()->numberBetween(1001, 9999),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'sir_name' => fake()->lastName(),
            'gender' => fake()->randomElement(['male', 'female']),
            'date_of_birth' => fake()->date(),
            'address' => fake()->address(),
            'enrollment_year' => fake()->year(),
            'status' => fake()->randomElement(['active', 'dropped', 'graduated']),
            'grade_id' => fake()->numberBetween(1, 3),
        ];
    }
}
