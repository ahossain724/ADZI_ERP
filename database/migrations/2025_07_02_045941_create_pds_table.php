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
        Schema::create('pds', function (Blueprint $table) {
            $table->id();
            $table->string('pd_row')->nullable();
            $table->string('unit_rate')->nullable();
            $table->string('rate_qty')->nullable();
            $table->string('type')->nullable();
            $table->string('item')->nullable();
            $table->string('bom_key')->nullable();
            $table->string('entry_date')->nullable();
            $table->string('specifications')->nullable();
            $table->string('additional_requirements')->nullable();
            $table->string('material_warehouse')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pds');
    }
};
