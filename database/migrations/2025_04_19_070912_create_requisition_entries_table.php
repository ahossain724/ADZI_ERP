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
        Schema::create('requisition_entries', function (Blueprint $table) {
            $table->id();
            $table->string('requisition_number');
            $table->date('date')->nullable();
            $table->string('warehouse');
            $table->string('division')->nullable();
            $table->string('project')->nullable();
            $table->date('required_by_date')->nullable();
            $table->string('reference')->nullable();
            $table->string('section')->nullable();
            $table->string('department')->nullable();
            $table->string('notes')->nullable();
            $table->string('terms_and_conditions')->nullable();
            $table->string('other_specifications')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisition_entries');
    }
};
