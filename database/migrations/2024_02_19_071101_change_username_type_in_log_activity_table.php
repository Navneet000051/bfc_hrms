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
        Schema::table('create_log_activity_tables', function (Blueprint $table) {
            $table->string('username')->nullable()->change();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('log_activity', function (Blueprint $table) {
            $table->integer('username')->nullable()->change();
        });
    }
};
