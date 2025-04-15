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
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_number');
            $table->string('address')->nullable();
            $table->string('state_province')->nullable();
            $table->string('salutation')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('url')->nullable();
            $table->string('control_account_ap');
            $table->string('supplier_type')->nullable();
            $table->string('tax_scope');
            $table->string('credit_available')->nullable();
            $table->string('agent')->nullable();
            $table->string('location')->nullable();
            $table->string('permit_approval')->nullable();
            $table->string('time_slot')->nullable();
            $table->string('payment_instructions')->nullable();
            $table->string('short_name')->nullable();
            $table->string('address2')->nullable();
            $table->string('zip_postal_code')->nullable();
            $table->string('first_name')->nullable();
            $table->string('title')->nullable();
            $table->string('mobile_phone_number')->nullable();
            $table->string('control_account_git')->nullable();
            $table->string('price_group')->nullable();
            $table->string('supplier_status')->nullable();
            $table->string('credit_terms')->nullable();
            $table->string('commission_percent')->nullable();;
            $table->string('bin')->nullable();
            $table->string('buyer')->nullable();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('country');
            $table->string('middle_name')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('supplier_group');
            $table->string('sic_code')->nullable();
            $table->string('credit_limit')->nullable();
            $table->string('discount_percent')->nullable();
            $table->string('currency');
            $table->date('expiration_date')->nullable();
            $table->string('delivery_zone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
