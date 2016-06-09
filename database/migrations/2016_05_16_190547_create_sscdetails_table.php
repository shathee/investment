<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSscdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sscdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('FundID');
            $table->integer('InvestmentID');
            $table->integer('NoSSC');
            $table->integer('ValSSC');
            $table->string('SLNoPreface');
            $table->string('SLNoFrom');



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
        Schema::drop('sscdetails');
    }
}
