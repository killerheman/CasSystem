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
        Schema::create('academin_research_score_guidances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_user_id');
            $table->string('name_of_the_scholar')->nullable();
            $table->string('title_of_the_dissertation/thesis')->nullable();
            $table->string('type')->nullable();
            $table->string('awarded_thesis_submitted')->nullable();
            $table->string('mphil_phd')->nullable();
            $table->string('university')->nullable();
            $table->string('month_and_year')->nullable();
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
        Schema::dropIfExists('academin_research_score_guidances');
    }
};
