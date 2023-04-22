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
        Schema::create('part_a_academic_service_priors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_users_id')->nullable();
            $table->string('file')->nullable();
            $table->string('institution')->nullable();
            $table->string('designation')->nullable();
            $table->string('nature_of_appointment')->nullable();
            $table->string('nature_of_duties')->nullable();
            $table->string('pay_scale_pay_band_and_agp')->nullable();

            $table->string('duration_from')->nullable();
            $table->string('duration_to')->nullable();
            $table->string('experience_year')->nullable();
            $table->string('experience_months')->nullable();

            $table->string('minimum_qualification_for_the_post')->nullable();
            $table->string('highest_degree_obtained')->nullable();
            $table->string('encl_no')->nullable();
            $table->string('remarks')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_service_priors');
    }
};
