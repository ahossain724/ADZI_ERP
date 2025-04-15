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
        Schema::create('codes', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('code_type')->nullable();
            $table->string('code')->nullable();
            $table->string('detailed_description')->nullable();
            $table->string('alternate_code')->nullable();
            $table->integer('active');
            $table->string('team')->nullable();
            $table->string('property_list')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codes');
    }
};
