<?php

use App\Models\Admin;
use App\Models\JobPostingCategory;
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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->boolean('is_active')->default(true);
            $table->json('title');
            $table->json('description');
            $table->double('salary');
            $table->json('terms');
            $table->enum('interview_type', ['in_person', 'phone', 'video']);
            $table->json('interview_dates');
            $table->json('location');
            $table->integer('invitations_expiry')->default(168);
            $table->foreignIdFor(JobPostingCategory::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Admin::class , 'created_by')->nullable()->constrained('admins')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
