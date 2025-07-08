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
        Schema::create('quotations', function (Blueprint $table) {
        $table->id();
        $table->string('quotation_number')->nullable();
        $table->string('deadline')->nullable();
        $table->date('quotation_deadline')->nullable();
        $table->string('rbo')->nullable();
        $table->string('customer_name')->nullable();
        $table->string('brand')->nullable();
        $table->string('product_category')->nullable();
        $table->string('references')->nullable();
        $table->date('date')->nullable();
        $table->string('exchange_rate')->nullable();
        $table->string('section')->nullable();
        $table->date('customer_enquiry_date')->nullable();
        $table->string('invoicing_rule')->nullable();
        $table->string('header_message')->nullable();
        $table->string('footer_message')->nullable();
        $table->string('notes')->nullable();
        $table->string('partial_delivery')->nullable();
        $table->string('quote_by')->nullable();
        $table->string('team')->nullable();
        $table->string('location')->nullable();
        $table->string('delivery')->nullable();
        $table->string('payment_confirmation')->nullable();
        $table->string('team_member')->nullable();
        $table->date('start_date')->nullable();
        $table->string('print_tax')->nullable();
        $table->string('department')->nullable();
        $table->string('location_of_installation')->nullable();
        $table->string('international_commercial_terms')->nullable();
        $table->string('currency')->nullable();
        $table->string('division')->nullable();
        $table->string('customer_enquiry')->nullable();
        $table->date('validity')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
