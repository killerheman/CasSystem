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
        Schema::table('naac_status_reports', function (Blueprint $table) {
            $table->after('aished_id', function($table){
                $table->string('principal_name')->nulllable();
                $table->string('principal_phone')->nulllable();
                $table->string('iqac_coordinator_name')->nulllable();
                $table->string('iqac_coordinator_phone')->nulllable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('naac_status_reports', function (Blueprint $table) {
            //
        });
    }
};
