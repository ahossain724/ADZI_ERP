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
    { Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->string('item_code');
        $table->string('description')->nullable();
        $table->string('long_description')->nullable();
        $table->string('links')->nullable();
        $table->string('notes')->nullable();
        $table->string('stock_type')->nullable();
        $table->string('barcode')->nullable();
        $table->string('alias')->nullable();
        $table->string('warehouse');
        $table->string('issue_unit')->nullable();
        $table->string('conv_factor_issue')->nullable();
        $table->string('item_group');
        $table->string('price_category')->nullable();
        $table->string('grade')->nullable();
        $table->string('division')->nullable();
        $table->string('net_weight_per_unit')->nullable();
        $table->string('minimum_order_qty')->nullable();
        $table->string('yield_percent')->nullable();
        $table->string('lead_time_fixed')->nullable();
        $table->string('superceded_by')->nullable();
        $table->string('part_no')->nullable();
        $table->string('length')->nullable();
        $table->string('brand')->nullable();
        $table->string('minimum_price')->nullable();
        $table->date('effectivity_date')->nullable();
        $table->string('bin_locations')->nullable();
        $table->string('stocking_unit')->nullable();;
        $table->string('packing_unit')->nullable();
        $table->string('conv_factor_packing')->nullable();
        $table->string('tax_category');
        $table->string('import_duty')->nullable();
        $table->string('supplier_number')->nullable();
        $table->string('unit_of_weight')->nullable();
        $table->string('minimum_order_value')->nullable();
        $table->string('demand_time_fence')->nullable();
        $table->string('lead_time_variable')->nullable();
        $table->string('supercedes')->nullable();
        $table->string('hs_code')->nullable();
        $table->string('width')->nullable();
        $table->string('standard_cost')->nullable();
        $table->string('multiplier_selling')->nullable();
        $table->date('expiration_date')->nullable();
        $table->string('team')->nullable();
        $table->string('alternative_unit')->nullable();
        $table->string('statistical_unit')->nullable();;
        $table->string('conv_factor_statistical')->nullable();
        $table->string('item_category')->nullable();
        $table->string('support_category')->nullable();
        $table->string('country_of_origin')->nullable();
        $table->string('weight_per_unit')->nullable();
        $table->string('shelf_life')->nullable();
        $table->string('order_multiple')->nullable();
        $table->string('planning_time_fence')->nullable();
        $table->string('lead_time_transport')->nullable();
        $table->string('supercession_code')->nullable();
        $table->string('unit_of_length')->nullable();
        $table->string('height')->nullable();
        $table->string('standard_price')->nullable();
        $table->string('multiplier_purchasing')->nullable();
        $table->string('strip')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
