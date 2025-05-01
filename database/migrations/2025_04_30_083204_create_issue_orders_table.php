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
        Schema::create('issue_orders', function (Blueprint $table) {
            $table->id();
            $table->string('transfer_order_number');
            $table->string('order_number')->nullable();
            $table->string('to_warehouse')->nullable();
            $table->date('order_date')->nullable();
            $table->string('reference')->nullable();
            $table->string('to_division')->nullable();
            $table->string('to_section')->nullable();
            $table->string('to_project')->nullable();
            $table->string('header_message')->nullable();
            $table->string('footer_message')->nullable();
            $table->string('notes')->nullable();
            $table->string('team')->nullable();
            $table->string('location')->nullable();
            $table->string('customer_number')->nullable();
            $table->string('team_member')->nullable();
            $table->string('supplier_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issue_orders');
    }
};
