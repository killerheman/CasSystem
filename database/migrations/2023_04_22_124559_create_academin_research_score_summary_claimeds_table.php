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
        Schema::create('academin_research_score_summary_claimeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_user_id');
            $table->string('assessment_period_from')->nullable();
            $table->string('assessment_period_to')->nullable();
            $table->string('entire_assessment_period_from')->nullable();
            $table->string('entire_assessment_period_to')->nullable();
            $table->string('total_claimed_score')->nullable();
            $table->string('year')->nullable();
            $table->string('type')->nullable();
            $table->string('claimed_score')->nullable();
            $table->string('applicant_sign')->nullable();
            $table->string('verify_by_committee')->nullable();
            $table->string('encl_no')->nullable();
            $table->text('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academin_research_score_summary_claimeds');
    }
};
