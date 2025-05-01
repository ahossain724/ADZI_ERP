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
        Schema::create('delivery_orders', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_order_number');
            $table->date('date')->nullable();
            $table->string('header_message')->nullable();
            $table->string('footer_message')->nullable();
            $table->string('notes')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('vat_challan')->nullable();
            $table->string('total_net_weight')->nullable();
            $table->string('vehicle')->nullable();
            $table->date('vat_challan_date')->nullable();
            $table->string('total_gross_weight')->nullable();
            $table->string('team')->nullable();
            $table->string('team_member')->nullable();
            $table->string('driver_responsible_person')->nullable();
            $table->string('time')->nullable();
            $table->string('total_cartons')->nullable();
            $table->timestamps();
            });
        }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_orders');
    }
};
