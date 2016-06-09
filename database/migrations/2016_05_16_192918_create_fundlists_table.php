<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundlists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('FundID');
            $table->integer('BranchID');
            $table->string('FundName');
            $table->string('FundDesc');
            $table->string('FundAccNo');
            $table->float('FundStartBalance');
            $table->date('FundStartDate');
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
        Schema::drop('fundlists');
    }
}
