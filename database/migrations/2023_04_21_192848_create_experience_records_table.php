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
        Schema::create('experience_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_users_id')->nullable();

            $table->string('ug_pg_in_years')->nullable();
            $table->string('ug_pg_from')->nullable();
            $table->string('ug_pg_to')->nullable();

            $table->string('mphil_phd_in_years')->nullable();
            $table->string('mphil_phd_from')->nullable();
            $table->string('mphil_phd_to')->nullable();

            $table->string('years_spent_in_mphil')->nullable();
            $table->string('years_spent_in_phd')->nullable();

            $table->string('years_of_guiding_completed')->nullable();
            $table->string('years_of_guiding_registered')->nullable();
            $table->string('years_of_guiding_phd')->nullable();

            $table->string('papers_published_international_journals')->nullable();
            $table->string('papers_published_national_journals')->nullable();
            $table->string('papers_published_state_level_journals')->nullable();
            $table->string('papers_published_total')->nullable();


            $table->string('conferences_seminars_international_attended')->nullable();
            $table->string('onferences_seminars_national_attended')->nullable();
            $table->string('onferences_seminars__state_level_attended')->nullable();
            $table->string('onferences_seminars_total_attended')->nullable();

            $table->string('conferences_seminars_international_papers_presented')->nullable();
            $table->string('onferences_seminars_national_papers_presented')->nullable();
            $table->string('onferences_seminars__state_level_papers_presented')->nullable();
            $table->string('onferences_seminars_total_papers_presented')->nullable();


            $table->string('awards_prizes_honours_recognitions')->nullable();
            $table->longText('specialization_in_the_subject_discipline')->nullable();

            $table->string('future_academic_development_plan',)->nullable();
            $table->string('vision_to_the_department',)->nullable();
            $table->string('contribution_to_the_department',)->nullable();
            $table->string('other_relevant_information',)->nullable();

            $table->longText('file')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_records');
    }
};
