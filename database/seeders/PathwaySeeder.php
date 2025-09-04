<?php

namespace Database\Seeders;

use App\Models\Pathway;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PathwaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pathway::factory()->count(3)->create();
    }
}
