<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSscmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sscmasters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('InvestmentListID');
            $table->integer('FundID');
            $table->integer('InvestmentID');
            $table->date('RegDate');
            $table->string('RegNo');
            $table->integer('Period');
            $table->float('InterestRate');
            $table->float('EorR');
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
        Schema::drop('sscmasters');
    }
}
