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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
                $table->string('location')->nullable();
                $table->string('locationtype')->nullable();
                $table->string('region')->nullable();
                $table->string('country')->nullable();
                $table->date('effectivitydate')->nullable();
                $table->date('expirationdate')->nullable();
                $table->string('depotname')->nullable();
                $table->string('defaultpaymentcode')->nullable();
                $table->string('timeslots')->nullable(); 
                $table->string('ipaddress')->nullable();
                $table->string('titleimageurl')->nullable();
                $table->string('backgroundimageurl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
