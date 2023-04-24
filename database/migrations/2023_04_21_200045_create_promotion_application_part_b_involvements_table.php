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
        Schema::create('promotion_application_part_b_involvements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_user_id');
            $table->string('academic_year')->nullable();
            $table->string('semester')->nullable();
            $table->enum('activity',[1,2,3,4,5,6,7])->comment('INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES / RESEARCH ACTIVITIES:');
            $table->string('claimed_by_candidate')->nullable();
            $table->string('verify_by_committee')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('promotion_application_part_b_involvements');
    }
};
