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
        Schema::create('part_a_general_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_users_id')->nullable();
            $table->string('name')->nullable();
            $table->string('category_a')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('category', ['SC', 'ST', 'EBC', 'BC', 'EWS', 'General'])->nullable();
            $table->string('current_designation')->nullable();
            $table->string('current_pay_scale')->nullable();
            $table->string('current_grade_pay')->nullable();
            $table->string('date_of_confirmation')->nullable();
            $table->string('date_of_initial_appointment')->nullable();
            $table->string('present_stage')->nullable();
            $table->string('pay_scale_at_lnmu')->nullable();
            $table->string('applied_for_position')->nullable();
            $table->string('applied_for_stage')->nullable();
            $table->string('applied_for_grade_pay')->nullable();
            $table->string('date_of_last_promotion')->nullable();
            $table->string('date_of_eligibility_for_promotion')->nullable();
            $table->string('address_for_correspondence')->nullable();
            $table->string('address_for_correspondence_pincode')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('permanent_address_pincode')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email_id')->nullable();
            $table->string('file')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_a_general_infos');
    }
};
