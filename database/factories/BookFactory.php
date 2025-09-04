<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
            'subject_id' => fake()->numberBetween(1, 3),
            'publisher' => fake()->company(),
            'author' => fake()->lastName(),
            'description' => fake()->sentence(),
            'created_by' => 1,
            'updated_by' => 1,

        ];
    }
}
