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
        Schema::create('academin_research_score_invited_lectures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_user_id');
            $table->string('name_of_the_event')->nullable();
            $table->string('title')->nullable();
            $table->string('invited_or_al_poster')->nullable();
            $table->string('international_national_state')->nullable();
            $table->string('organiser_institute')->nullable();
            $table->string('claimed_score')->nullable();
            $table->string('duration')->nullable();
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
        Schema::dropIfExists('academin_research_score_invited_lectures');
    }
};
