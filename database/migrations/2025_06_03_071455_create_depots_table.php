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
        Schema::create('depots', function (Blueprint $table) {
            $table->id();
            $table->string('depotrow')->nullable();
            $table->string('address1')->nullable();
            $table->string('stateprovince')->nullable();
            $table->string('salutation')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('taxscope')->nullable();
            $table->string('portofdischarge')->nullable();
            $table->string('remarks')->nullable();
            $table->string('i_d')->nullable();
            $table->string('depotname')->nullable();
            $table->string('address2')->nullable();
            $table->string('zippostalcode')->nullable();
            $table->string('firstname')->nullable();
            $table->string('title')->nullable();
            $table->string('fax')->nullable();
            $table->string('taxnumber')->nullable();
            $table->string('alternatecode')->nullable();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('middlename')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('shortname')->nullable();
            $table->string('depottype')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depots');
    }
};
