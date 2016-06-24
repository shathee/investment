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
            $table->integer('investment_type');
            $table->integer('fund_id');
            $table->date('old_date');
            $table->date('old_no');
            $table->string('old_file_no');
            $table->date('fpl_date');
            $table->integer('fpl_no');
            $table->string('fpl_file_no');
            $table->float('eorr');
            $table->string('posted');


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
