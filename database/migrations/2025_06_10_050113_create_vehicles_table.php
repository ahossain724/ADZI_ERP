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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle')->nullable();
            $table->string('description')->nullable();
            $table->string('vehicletype')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('ctsize')->nullable();
            $table->string('notes')->nullable();
            $table->string('lulabelno')->nullable();
            $table->string('owner')->nullable();
            $table->string('mlwkg')->nullable();
            $table->string('uwkg')->nullable();
            $table->string('tonnage')->nullable();
            $table->string('budcapacity')->nullable();
            $table->string('cttype')->nullable();
            $table->string('dg')->nullable();
            $table->string('deliveryzone')->nullable();
            $table->string('remarks')->nullable();
            $table->date('effectivitydate')->nullable(); 
            $table->string('team')->nullable();
            $table->string('documenttypedocumentnumber')->nullable();
            $table->date('expirationdate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
