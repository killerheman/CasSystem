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
        Schema::create('part_a_mphil_phd_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_users_id')->nullable();
            $table->string('file')->nullable();
            $table->string('type')->nullable();
            $table->string('period_of_from')->nullable();
            $table->string('period_of_to')->nullable();
            $table->string('name_of_institute_university')->nullable();
            $table->string('research_topic')->nullable();
            $table->string('date_of_notification_result_conferring_the_degree')->nullable();
            $table->string('encl_no')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mphil_phd_records');
    }
};
