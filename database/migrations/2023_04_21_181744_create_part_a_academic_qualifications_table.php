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
        Schema::create('part_a_academic_qualifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_users_id')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('college_university')->nullable();
            $table->string('session')->nullable();
            $table->string('year_of_passing')->nullable();
            $table->string('marks_obtained_out_of_or_cgpa_grade')->nullable();
            $table->string('class_with_%')->nullable();
            $table->string('file')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_a_academic_qualifications');
    }
};
