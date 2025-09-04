<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_grade', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('book_number')->unique();
            $table->enum('condition', ['new', 'used', 'acceptable', 'bad'])->default('new');
            $table->enum('status', ['available', 'issued', 'lost'])->default('available');
            $table->foreignId('book_id')->constrained('books')->cascadeOnDelete();
            $table->foreignId('grade_id')->nullable()->constrained('grades')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_grade');
    }
};
