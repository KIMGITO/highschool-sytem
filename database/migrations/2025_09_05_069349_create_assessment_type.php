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
        Schema::create('assessment_type', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->enum('input_type', ['score', 'rating'])->default('score');
            $table->decimal('max_score', 8, 2)->nullable(); // Nullable if input_type is 'rating'
            $table->foreignId('scale')->nullable()->constrained('scales')->nullOnDelete(); // e.g., for grading scale
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_type');
    }
};
