<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenewallistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renewallists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('InvestmentListID');
            $table->integer('RenEncID');
            $table->date('OldOLDate');
            $table->integer('OldOLNo');
            $table->string('OldOLFileNo');
            $table->float('OldInterestRate');
            $table->integer('OldPeriod');
            $table->float('OldInvestAmount');
            $table->string('Posted');
            $table->float('OldEorR');
            $table->date('OldInvestDate');
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
        Schema::drop('renewallists');
    }
}
