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
        Schema::create('promotion_application_part_b_s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('promotion_application_id');
            $table->string('A1_academic_year')->nullable();
            $table->string('A1_semester')->nullable();
            $table->string('total_classes_assigned')->comment('Teaching')->nullable();
            $table->string('number_of_classes_tought')->comment('Teaching')->nullable();
            $table->string('teaching')->comment('Teaching = (No of classes taught / total classes assiged) X 100 % ')->nullable();
            $table->string('claimed_by_the_candidate')->nullable();
            $table->string('varified_by_the_candidate')->nullable();
            $table->string('varified_by_the_committee')->nullable();
            $table->string('remark_ks')->nullable();
            $table->string('encl_no')->comment('*Encl No.')->nullable();
            $table->string('A1_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_application_part_b_s');
    }
};
