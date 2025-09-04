<?php

namespace Database\Seeders;

use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()->count(3)->create()->each(function ($student){
            $guardians = Guardian::all();
            $student->guardians->attach($guardians->random(2)->pluck('id')->toArray());
        });
    }
}
