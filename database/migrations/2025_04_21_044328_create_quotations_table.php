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
        $table->string('quotation_number');
        $table->string('deadline')->nullable();
        $table->string('project');
        $table->date('quotation_deadline')->nullable();
        $table->date('date')->nullable();
        $table->string('currency');
        $table->string('division')->nullable();
        $table->string('customer_enquiry')->nullable();
        $table->date('validity')->nullable();
        $table->string('customer_number');
        $table->string('exchange_rate');
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
        $table->string('payment_confirmation');
        $table->string('team_member')->nullable();
        $table->date('start_date')->nullable();
        $table->string('print_tax')->nullable();
        $table->string('department')->nullable();;
        $table->string('location_of_installation')->nullable();
        $table->string('international_commercial_terms')->nullable();
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
