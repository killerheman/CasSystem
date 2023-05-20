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
        Schema::table('part_a_experience_records', function (Blueprint $table) {
            $table->string('phd_fellow_agency')->nullable();
            $table->string('phd_fellow_duration')->nullable();
            $table->string('phd_fellow_file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('part_experience_record', function (Blueprint $table) {
            //
        });
    }
};
