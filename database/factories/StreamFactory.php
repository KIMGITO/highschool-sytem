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

        $classes = array_map(
            fn($f, $s) => "Form $f $s",
            [1, 1, 2, 2, 3, 3, ,4],
            ['East', 'West', 'East', 'West', 'East', 'West']
        );
        return [
            'name' =>fake()->$classes,
            'denote' => strtoupper(fake()->unique()->bothify('F?#')),
            'level_id' => fake()->numberBetween(1, 6),
            'description' => fake()->sentence(),
            'crated_by' =>1,
            'updated_by' =>1,
        ];
    }
}
