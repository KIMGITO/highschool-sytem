<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *  'user_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'occupation',
        'created_by',
        'updated_by',
     */
    public function definition(): array
    {

        return [
            'user_id' => fake()->unique()->numberBetween(4, User::all()->count()),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'occupation' => fake()->jobTitle(),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
