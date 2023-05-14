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
        Schema::table('academin_research_score_summary_claimeds', function (Blueprint $table) {
            $table->string('applicant_claimed_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('academin_research_score_summary_claimeds01', function (Blueprint $table) {
            //
        });
    }
};
