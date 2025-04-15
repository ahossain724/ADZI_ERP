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
        Schema::create('customer', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('customer_number');
            $table->string('address')->nullable();
            $table->string('state_province')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('url')->nullable();
            $table->string('control_account_ar');
            $table->string('price_group')->nullable();
            $table->string('industry_segment')->nullable();
            $table->string('comission_percent')->nullable();
            $table->string('credit_limit')->nullable();
            $table->string('credit_terms')->nullable();
            $table->date('expiration_date')->nullable();
            $table->date('date_of_financial_statement')->nullable();
            $table->string('bin')->nullable();
            $table->string('points_ob')->nullable();
            $table->string('short_name')->nullable();
            $table->string('address2')->nullable();
            $table->string('zip_postal_code')->nullable();
            $table->string('first_name')->nullable();
            $table->string('title')->nullable();
            $table->string('mobile_phone_number')->nullable();
            $table->string('customer_group');
            $table->string('sic_code')->nullable();
            $table->string('discount_percent')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('average_payment_days')->nullable();
            $table->string('credit_available')->nullable();
            $table->date('date_of_credit_application')->nullable();
            $table->date('date_incorporated')->nullable();
            $table->string('payment_instructions')->nullable();
            $table->string('remarks')->nullable();
            $table->string('backorder_type')->nullable();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('country');
            $table->string('middle_name')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('customer_type')->nullable();
            $table->string('tax_scope');
            $table->string('agent')->nullable();
            $table->string('customer_status')->nullable();
            $table->string('credit_rating')->nullable();
            $table->date('date_approved')->nullable();
            $table->date('date_of_credit_evaluation')->nullable();
            $table->string('payment_method')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
