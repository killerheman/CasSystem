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
        Schema::create('academic_research_score_publications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_user_id');
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('auth')->nullable();
            $table->string('co_author')->nullable();
            $table->string('publisher_month_year')->nullable();
            $table->string('isbn_issn')->nullable();
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
        Schema::dropIfExists('academic_research_score_publications');
    }
};
