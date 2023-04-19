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
        Schema::create('promotion_application_part_a_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_id')->nullable();
            $table->string('name')->nullable();
            $table->string('category_a')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('category', ['SC', 'ST', 'EBC', 'BC', 'EWS', 'General'])->nullable();
            $table->string('current_designation')->nullable();
            $table->string('current_pay_scale')->nullable();
            $table->string('current_grade_pay')->nullable();
            $table->string('date_of_confirmation')->nullable();
            $table->string('date_of_initial_appointment')->nullable();
            $table->string('present_stage')->nullable();
            $table->string('pay_scale_at_lnmu')->nullable();
            $table->string('applied_for_position')->nullable();
            $table->string('applied_for_stage')->nullable();
            $table->string('applied_for_grade_pay')->nullable();
            $table->string('date_of_last_promotion')->nullable();
            $table->string('date_of_eligibility_for_promotion')->nullable();
            $table->string('address_for_correspondence')->nullable();
            $table->string('address_for_correspondence_pincode')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('permanent_address_pincode')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email_id')->nullable();

            $table->longText('academic_qualifications')->nullable();
            $table->longText('academic_service_prior_to_joining')->nullable();
            $table->longText('service_in_lnmu_from_the_date_of_joining')->nullable();


            $table->string('teaching_experience_ug_pg_in_years')->nullable();
            $table->string('teaching_experience_ug_pg_from')->nullable();
            $table->string('teaching_experience_ug_pg_to')->nullable();

            $table->string('research_experience_mphil_phd_in_years')->nullable();
            $table->string('research_experience_mphil_phd_from')->nullable();
            $table->string('research_experience_mphil_phd_to')->nullable();

            $table->string('years_spent_in_mphil')->nullable();
            $table->longText('years_spent_in_mphil_data')->nullable();
            $table->string('years_spent_in_phd')->nullable();
            $table->longText('years_spent_in_phd_data')->nullable();


            $table->string('doctoral_research_years_of_guiding_phd_completed')->nullable();
            $table->string('doctoral_research_years_of_guiding_phd_registered')->nullable();

            $table->string('doctoral_research_papers_published_international_journals')->nullable();
            $table->string('doctoral_research_papers_published_national_journals')->nullable();
            $table->string('doctoral_research_papers_published_state_level_journals')->nullable();
            $table->string('doctoral_research_papers_published_total')->nullable();

            $table->longText('total_no_of_conferences_seminars_workshops')->nullable();
            $table->string('awards_prizes_honours_recognitions')->nullable();
            $table->longText('specialization_in_the_subject_discipline')->nullable();

            $table->longText('orientation_refresher_course_attended')->nullable();
            $table->longText('other_training_program_summer_school')->nullable();
            $table->string('contribution_to_the_department',)->nullable();
            $table->string('other_relevant_information',)->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_application_part_a_s');
    }
};
