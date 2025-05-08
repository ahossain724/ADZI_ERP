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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_number');
            $table->string('bank')->nullable();
            $table->string('ref_number')->nullable();
            $table->date('ref_date')->nullable();
            $table->string('customer_payer')->nullable();
            $table->string('ledger')->nullable();
            $table->string('narration')->nullable();
            $table->date('date')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('taxable')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount_received')->nullable();
            $table->string('year')->nullable();
            $table->string('period')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
