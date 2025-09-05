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
        Schema::create('assessment_result', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('assessment_id')->constrained()->cascadeOnDelete();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subject_id')->nullable()-> constrained()->nullOnDelete();
            $table->decimal('score', 8, 2);
            $table->foreignId('scale_id')->nullable()->constrained('scales')->nullOnDelete();
            $table->text('remarks')->nullable();
            $table->unique(['assessment_id', 'student_id', 'subject_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_result');
    }
};
