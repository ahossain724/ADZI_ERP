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
        Schema::create('site_defaults', function (Blueprint $table) {
            $table->id();
            $table->string('sitename')->nullable();
            $table->string('object')->nullable();
            $table->string('country')->nullable();
            $table->string('siccode')->nullable();
            $table->string('discount')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('salesperson')->nullable();
            $table->string('shippingproduct')->nullable();
            $table->string('section')->nullable();
            $table->string('dropship')->nullable();
            $table->string('printtax')->nullable();
            $table->string('emailsuccess')->nullable();
            $table->string('bankcode')->nullable();
            $table->string('paypaluserid')->nullable();
            $table->string('itemgroup')->nullable();
            $table->string('customerprefix')->nullable();
            $table->string('unitofdistance')->nullable();
            $table->string('controlaccountar')->nullable();
            $table->string('agent')->nullable();
            $table->string('market')->nullable();
            $table->string('projectmanager')->nullable();
            $table->string('residence')->nullable();
            $table->string('project')->nullable();
            $table->string('active')->nullable();
            $table->string('timecutoff')->nullable();
            $table->string('emailfailure')->nullable();
            $table->string('accountnumber')->nullable();
            $table->string('taxcode')->nullable();
            $table->string('fulfilmentcategory')->nullable();
            $table->string('orderprefix')->nullable();
            $table->string('unitofweight')->nullable();
            $table->string('customergroup')->nullable();
            $table->string('creditlimit')->nullable();
            $table->string('comission')->nullable();
            $table->string('region')->nullable();
            $table->string('paymentcode')->nullable();
            $table->string('saturdaydelivery')->nullable();
            $table->string('codebasis')->nullable();
            $table->string('priceincludetax')->nullable();
            $table->string('daystodeliver')->nullable();
            $table->string('bank')->nullable();
            $table->string('accountname')->nullable();
            $table->string('taxscope')->nullable();
            $table->string('showsupplier')->nullable();
            $table->string('qoutationprefix')->nullable();
            $table->string('city')->nullable();
            $table->string('pricegroup')->nullable();
            $table->string('creditterms')->nullable();
            $table->string('currency')->nullable();
            $table->string('territory')->nullable();
            $table->string('shippingcode')->nullable();
            $table->string('division')->nullable();
            $table->string('backordertype')->nullable();
            $table->string('invoicingrule')->nullable();
            $table->string('email')->nullable();
            $table->string('branch')->nullable();
            $table->string('paymentcodes')->nullable();
            $table->string('taxcategory')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_defaults');
    }
};
