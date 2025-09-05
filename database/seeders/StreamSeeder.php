<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Stream;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stream::factory()->count(6)->create();
    }
}
