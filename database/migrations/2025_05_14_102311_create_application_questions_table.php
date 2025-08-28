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
        Schema::create('application_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_posting_question_id')->constrained('job_posting_questions')->cascadeOnDelete();
            $table->string('answer')->nullable();
            $table->foreignId('application_id')->constrained('applications')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_questions');
    }
};
