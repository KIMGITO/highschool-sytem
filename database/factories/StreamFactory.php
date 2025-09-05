<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stream>
 */
class StreamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

       
        return [
            'name' =>fake()->numberBetween(1,6),
            'denote' => strtoupper(fake()->unique()->bothify('F?#')),
            'grade_id' => fake()->numberBetween(1, 6),
            'description' => fake()->sentence(),
            'created_by' =>1,
            'updated_by' =>1,
        ];
    }
}
