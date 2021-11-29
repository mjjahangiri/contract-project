<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('transaction');
            $table->string('transactionDate');
            $table->string('contractNo')->unique();
            $table->string('buyerNationalCode')->get('10');
            $table->string('buyerName');
            $table->string('buyerMobile')->get('11');
            $table->string('buyerPhone')->get('11');
            $table->longText('buyerAddress');
            $table->string('sellerNationalCode')->get('10');
            $table->string('sellerName');
            $table->string('sellerMobile')->get('11');
            $table->string('sellerPhone')->get('11');
            $table->longText('sellerAddress');
            $table->string('machineType');
            $table->string('YearOfConstruction')->get('4');
            $table->string('machineColor');
            $table->string('discoloration');
            $table->string('hurt');
            $table->longText('description')->nullable();
            $table->string('totalAmount');
            $table->string('prepayment');
            $table->string('prepaymentDate');
            $table->string('clearing');
            $table->string('clearingDate');
            $table->string('firstPay')->nullable();
            $table->string('firstPayDate')->nullable();
            $table->string('secondPay')->nullable();
            $table->string('secondPayDate')->nullable();
            $table->string('penalty')->nullable();
            $table->string('penaltyDate')->nullable();
            $table->string('licenseCost');
            $table->string('contractImage');
            $table->string('buyerPostalCode')->nullable();
            $table->string('sellerPostalCode')->nullable();
            $table->string('machineNumber1');
            $table->string('machineNumber2');
            $table->string('machineNumber3');
            $table->string('machineNumber4');
            $table->string('avarez')->nullable();
            $table->string('avarezDate')->nullable();
            $table->boolean('fuelCart')->default(0);
            $table->string('documentNumber')->nullable();
            $table->string('documentDate')->nullable();
            $table->boolean('insurance')->default(0);
            $table->string('insuranceDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
