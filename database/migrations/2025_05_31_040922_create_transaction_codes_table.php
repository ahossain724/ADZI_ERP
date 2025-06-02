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
        Schema::create('transaction_codes', function (Blueprint $table) {
           $table->id();
            $table->string('transaction_type');
            $table->string('code')->nullable();
            $table->string('description')->nullable();
            $table->string('starting')->nullable();
            $table->string('increment')->nullable();
            $table->string('prefix')->nullable();
            $table->string('suffix')->nullable();
            $table->string('active')->nullable();
            $table->string('team')->nullable();
            $table->string('format')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_codes');
    }
};
