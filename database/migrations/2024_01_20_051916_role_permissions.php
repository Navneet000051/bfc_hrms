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
        Schema::table('role_permissions', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->integer('roleid')->default(0);
        $table->integer('parentid')->default(0);
        $table->integer('subparentid')->default(0);
        $table->integer('menuid')->default(0);
        $table->boolean('add')->default(0);
        $table->boolean('view')->default(0);
        $table->boolean('edit')->default(0);
        $table->boolean('delete')->default(0);
        $table->boolean('status')->default(1);
        $table->boolean('menu_status')->default(0);
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};
