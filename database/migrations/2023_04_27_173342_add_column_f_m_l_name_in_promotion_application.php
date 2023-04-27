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
        Schema::table('promotion_applications', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('promotion_applications', function (Blueprint $table) {
           $table->string('f_name')->after('name');
           $table->string('m_name')->after('f_name');
           $table->string('l_name')->after('m_name');
           $table->string('notificatio_date_last_promotion');
        });
    }
};
