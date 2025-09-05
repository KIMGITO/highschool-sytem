<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'salutation' => $this->faker->title(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'hire_date' => $this->faker->date(),
            'salary' => $this->faker->randomFloat(2, 30000, 100000),
            'status' => $this->faker->boolean(),
            'photo' => $this->faker->imageUrl(200, 200, 'people'),
            'bio' => $this->faker->paragraph(),
            'social_links' => [
                'facebook' => $this->faker->url(),
                'twitter' => $this->faker->url(),
                'linkedin' => $this->faker->url(),
            ],
            'department_id' => Department::factory(),
            'user_id' => User::factory(),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
