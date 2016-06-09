<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investmentlists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('InvestmentListID');
            $table->integer('InvestmentTypeID');
            $table->integer('FundID');
            $table->date('OLDate');
            $table->date('OLNo');
            $table->string('OLFileNo');
            $table->date('FPLDate');
            $table->integer('FPLNo');
            $table->string('FPLFileNo');
            $table->float('EorR');
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
        Schema::drop('investmentlists');
    }
}
