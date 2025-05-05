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
        Schema::create('iou_adjustments', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_number');
            $table->string('adjustment_from')->nullable();
            $table->string('amount')->nullable();
            $table->date('date')->nullable();
            $table->string('narration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_o_u_adjustments');
    }
};
