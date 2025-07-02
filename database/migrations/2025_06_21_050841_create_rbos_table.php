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
        Schema::create('rbos', function (Blueprint $table) {
            $table->id();
            $table->string('rbo_name')->nullable();
            $table->string('short_name')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('address')->nullable();
            // Removed ->change() as these are new columns being created
            $table->unsignedBigInteger('reference_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            
            // Define foreign key constraints
            // Ensure 'referencestbl' and 'brand' tables exist before running this migration
            $table->foreign('reference_id')->references('id')->on('referencestbl')->onDelete('set null');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rbos');
    }
};
