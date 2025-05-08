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
        Schema::create('invoice_simples', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_number');
            $table->string('control');
            $table->string('sales');
            $table->string('customer_payer');
            $table->string('narration')->nullable();
            $table->string('division')->nullable();
            $table->string('section')->nullable();
            $table->string('project')->nullable();
            $table->date('date')->nullable();
            $table->string('invoice_number');
            $table->string('tax_rate')->nullable();
            $table->string('currency');
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
        Schema::dropIfExists('invoice_simples');
    }
};
