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
        Schema::create('part_a_refresher_program_attendeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotion_application_users_id')->nullable();
            $table->string('file')->nullable();
            $table->string('type')->nullable();
            $table->string('particulars')->nullable();
            $table->string('place')->nullable();
            $table->string('duration_from')->nullable();
            $table->string('duration_to')->nullable();
            $table->string('sponsoring_agency')->nullable();
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
        Schema::dropIfExists('refresher_program_attendeds');
    }
};
