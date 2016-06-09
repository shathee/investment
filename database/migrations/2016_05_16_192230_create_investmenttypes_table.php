<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmenttypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investmenttypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('InvestmentTypeID');
            $table->string('InvestmentHead');
            $table->string('InvestmentFeature');
            $table->string('Remarks');
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
        Schema::drop('investmenttypes');
    }
}
