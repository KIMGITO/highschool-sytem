<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = Level::all();
        Book::factory()->count(6)->create()->each(function ($book) use ($levels) {
            $book->levels()->attach($levels->random(1)->pluck('id')->toArray());
        });
    }
}

