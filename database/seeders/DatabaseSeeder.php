<?php

namespace Database\Seeders;

use App\Models\Guardian;
use App\Models\Pathway;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\LevelSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\SubjectSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\PathwaySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PathwaySeeder::class,
            DepartmentSeeder::class,
            SubjectSeeder::class,
            GradeSeeder::class,
            StreamSeeder::class,
            GuardianSeeder::class,
            StudentSeeder::class,
            BookSeeder::class,
        ]);
    }
}
