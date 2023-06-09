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
        Schema::create('naac_status_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_id');
            $table->string('district');
            $table->string('college_type');
            $table->string('aished_id');
            $table->string('academic_level');
            $table->text('address');
            $table->string('cycle_of_accreditation')->nullable();
            $table->boolean('accrediation_status');
            $table->date('last_accredetion')->nullable();
            $table->date('accredetion_upto')->nullable();
            $table->string('grade')->nullable();
            $table->string('cgpa')->nullable();
            $table->date('praposed_date_of_pending_aqar')->nullable();
            $table->string('aqar_submition_upto')->nullable();
            $table->date('praposed_date_of_pending_iiqa')->nullable();
            $table->string('liqa_status')->nullable();
            $table->date('iqa_submition_date')->nullable();
            $table->boolean('ssr_status');
            $table->date('ssr_submission_date')->nullable();
            $table->text('remark');
            $table->boolean('accept');
            $table->boolean('is_complete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naac_status_reports');
    }
};
