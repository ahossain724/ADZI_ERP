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
        Schema::create('g_l_vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_number');
            $table->string('reference')->nullable();
            $table->date('date')->nullable();
            $table->string('year')->nullable();
            $table->string('period')->nullable();
            $table->string('header_message')->nullable();
            $table->string('team')->nullable();
            $table->string('team_member')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g_l_vouchers');
    }
};
