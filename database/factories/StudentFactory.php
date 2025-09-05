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
            'stream_id' => fake()->numberBetween(1, 3),
            'user_id' => fake()->unique()->numberBetween(1, 3),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
