<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundledgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('FundID');
            $table->integer('RenEncID');
            $table->integer('InvestmentID');
            $table->date('TranDate');
            $table->float('Amount');
            $table->string('DrCr');
            $table->string('Posted');
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
        Schema::drop('fundledgers');
    }
}
