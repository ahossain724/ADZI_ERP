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
        Schema::create('customer_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->nullable();
            $table->string('customer_po')->nullable();
            $table->string('rbo')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('brand')->nullable();
            $table->string('project')->nullable();
            $table->string('references')->nullable();
            $table->string('date')->nullable();
            $table->string('customer_po_date')->nullable();
            $table->string('header_message')->nullable();
            $table->string('footer_message')->nullable();
            $table->string('notes')->nullable();
            $table->string('print_tax')->nullable();
            $table->string('quote_by')->nullable();
            $table->string('team')->nullable();
            $table->string('division')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_confirmation')->nullable();
            $table->string('periods')->nullable();
            $table->string('invoicing_rule')->nullable();
            $table->string('partial_delivery')->nullable();
            $table->string('restrict_dos')->nullable();
            $table->string('section')->nullable();
            $table->string('exchange_rate')->nullable();
            $table->string('location_of_installation')->nullable();
            $table->string('issue_date')->nullable();
            $table->timestamps();
            });
        }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_orders');
    }
};
