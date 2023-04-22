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
        Schema::create('academic_research_score_research_papers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_user_id');
            $table->string('title_research_chapter')->nullable();
            $table->string('name_journal')->nullable();
            $table->string('vol_pp_no_year')->nullable();
            $table->string('impact_factor')->nullable();
            $table->string('no_authors')->nullable();
            $table->string('type_authorship')->nullable();
            $table->string('sr_in_ugc')->nullable();
            $table->string('claimed_score')->nullable();
            $table->string('varified_by_committee')->nullable();
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
        Schema::dropIfExists('academic_research_score_research_papers');
    }
};
