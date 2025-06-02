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
        Schema::create('g_l_interfaces', function (Blueprint $table) {
            $table->id();
            $table->string('glinterfacetype');
            $table->string('itemgroup')->nullable();
            $table->string('customersupplieragent')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('account')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g_l_interfaces');
    }
};
