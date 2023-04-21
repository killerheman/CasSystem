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
        Schema::create('promotion_applications', function (Blueprint $table) {
            $table->id();
            $table->string('promotion_level')->nullable();
            $table->string('promotion_level_from')->nullable();
            $table->string('promotion_level_to')->nullable();
            $table->string('name')->nullable();
            $table->string('department')->nullable();
            $table->string('college')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('notification_reference_no')->nullable();
            $table->string('notification_reference_date')->nullable();
            $table->string('date_of_appointment')->nullable();
            $table->string('date_of_confirmation')->nullable();
            $table->string('assessment_promotion_from')->nullable();
            $table->string('assessment_promotion_to')->nullable();
            $table->string('promotion_notification_no')->nullable();
            $table->string('promotion_notification_date')->nullable();
            $table->string('grade_annual_performance')->nullable();
            $table->string('total_academic_research_scores')->nullable();
            $table->unsignedBigInteger('promotion_application_users_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_applications');
    }
};
