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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->string('po_number');
            $table->string('reference')->nullable();
            $table->string('warehouse');
            $table->string('supplier_code');
            $table->string('currency');
            $table->date('date')->nullable();
            $table->string('purchase_type')->nullable();
            $table->string('discount_account')->nullable();
            $table->string('notes')->nullable();
            $table->string('terms_and_conditions')->nullable();
            $table->string('pi_no_to')->nullable();
            $table->date('pi_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
