<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grade;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = Grade::all();
        Book::factory()->count(6)->create()->each(function ($book) use ($grades) {
            $book->grades()->attach($grades->random(1)->pluck('id')->toArray());
        });
    }
}

