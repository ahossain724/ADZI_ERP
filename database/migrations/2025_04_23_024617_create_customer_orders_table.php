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
            $table->string('order_number');
            $table->string('customer_po')->nullable();
            $table->date('date')->nullable();
            $table->date('customer_po_date')->nullable();
            $table->string('customer_number');
            $table->string('reference')->nullable();
            $table->string('header_message')->nullable();
            $table->string('footer_message')->nullable();
            $table->string('notes')->nullable();
            $table->string('project');
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
            $table->string('exchange_rate');
            $table->string('location_of_installation')->nullable();
            $table->date('issue_date')->nullable();
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
