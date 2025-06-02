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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->string('shortname')->nullable();
            $table->string('name')->nullable();
            $table->string('cent')->nullable();
            $table->string('cents')->nullable();
            $table->string('decimal_places')->nullable();
            $table->string('active')->nullable();
            $table->string('exchange_rate')->nullable();
            $table->string('exchange_ratesell')->nullable();
            $table->string('exchange_ratebuy')->nullable();
            $table->string('wordformula')->nullable();
            $table->date('effectivity_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
