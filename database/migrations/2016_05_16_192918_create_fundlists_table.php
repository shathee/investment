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
        Schema::create('fund_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id');
            $table->string('fund_name');
            $table->string('fund_desc');
            $table->string('fund_acc_no');
            $table->float('fund_start_balance');
            $table->date('fund_start_date');
            $table->softDeletes();
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
        Schema::drop('fund_lists');
    }
}
