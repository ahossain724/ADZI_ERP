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
        Schema::create('user_docs', function (Blueprint $table) {
            $table->id();
            $table->string('documentname')->nullable();
            $table->string('title')->nullable();
            $table->string('sourcedocuments')->nullable();
            $table->string('ordertype')->nullable();
            $table->string('referencefield')->nullable();
            $table->string('infogroups')->nullable();
            $table->string('printorgname')->nullable();
            $table->string('printorgaddress')->nullable();
            $table->string('printlogo')->nullable();
            $table->string('printcustomerdetails')->nullable();
            $table->string('printdeliverydetails')->nullable();
            $table->string('printstandardfooter')->nullable();
            $table->string('active')->nullable();
            $table->string('header')->nullable();
            $table->string('footer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_docs');
    }
};
