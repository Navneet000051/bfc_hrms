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
        Schema::create('login_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->string('agent')->nullable();
            $table->integer('userid')->nullable();
            $table->string('login_at');
            $table->string('logout_at'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('login_activities');
    }
};
