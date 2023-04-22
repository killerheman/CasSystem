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
        Schema::create('academin_research_score_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_user_id');
            $table->string('name_of_pi_and_co_pi')->nullable();
            $table->string('title_of_the_project')->nullable();
            $table->string('funding_agency')->nullable();
            $table->string('grant_sanctioned_or_component')->nullable();
            $table->string('duration_from')->nullable();
            $table->string('duration_to')->nullable();
            $table->string('agency_to_it_is_offered')->nullable();
            $table->string('type')->nullable();
            $table->string('claimed_score')->nullable();
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
        Schema::dropIfExists('academin_research_score_projects');
    }
};
