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
            $table->string('district')->nullable();
            $table->string('college_type')->nullable();
            $table->string('aished_id');
            $table->string('academic_level')->nullable();
            $table->text('address')->nullable();
            $table->string('cycle_of_accreditation')->nullable();
            $table->boolean('accrediation_status')->default(false);
            $table->string('last_accredetion')->nullable();
            $table->string('accredetion_upto')->nullable();
            $table->string('grade')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('praposed_date_of_pending_aqar')->nullable();
            $table->string('aqar_submition_upto')->nullable();
            $table->string('praposed_date_of_pending_iiqa')->nullable();
            $table->string('whether_aqar_pending')->nullable();
            $table->string('aqar_pending_ch')->nullable();
            $table->string('liqa_status')->nullable();
            $table->string('iqa_status_prapose')->nullable();
            $table->string('iqa_submition_date')->nullable();
            $table->string('iqa_submition_date_prapose')->nullable();
            $table->boolean('ssr_status')->nullable();
            $table->string('ssr_submission_date')->nullable();
            $table->text('remark')->nullable();
            $table->boolean('accept')->default(false);
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
