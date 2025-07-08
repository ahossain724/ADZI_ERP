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
        Schema::create('item_details', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('item');
            $table->decimal('rate', 10, 2);
            $table->integer('quantity');
            $table->string('unit', 50);

            // Dynamic dimensions:
            // Since dimensions are dynamic, you have a few options:
            // OPTION 1: Predefine a reasonable number of dimension columns (simpler initially)
            $table->string('erd')->nullable();
            $table->string('dimension_width')->nullable();
            $table->string('dimension_height')->nullable();
            $table->string('dimension_color')->nullable();
            // Add more as needed, or make them dynamic in a JSON column (Option 2)

            // OPTION 2: Use a JSON column for dynamic dimensions (more flexible)
            // This is recommended if the number/names of dimensions can vary widely.
            $table->json('dimensions')->nullable(); // Stores dimensions as JSON (e.g., {"length": "10cm", "width": "5cm"})

            $table->timestamps(); // Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_details');
    }
};