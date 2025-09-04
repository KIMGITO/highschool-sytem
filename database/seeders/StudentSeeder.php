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
        $guardians = Guardian::all();

        Student::factory()->count(3)->create()->each(function ($student) use($guardians){
            $student->guardians()->attach($guardians->random(2)->pluck('id')->toArray());
        });
    }
}
