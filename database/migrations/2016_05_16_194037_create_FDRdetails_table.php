<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFDRdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FDRdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('InvestmentListID');
            $table->integer('FundID');
            $table->integer('InvestmentID');
            $table->integer('BranchID');
            $table->float('InterestRate');
            $table->date('DraftDate');
            $table->string('DraftNo');
            $table->float('DraftAmount');
            $table->integer('Period');
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
        Schema::drop('FDRdetails');
    }
}
