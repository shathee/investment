<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenenclistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renenclists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('RenEncID');
            $table->integer('FundID');
            $table->integer('FDRID');
            $table->date('RenEncDate');
            $table->date('OLDate');
            $table->integer('OLNo');
            $table->string('OLFileNo');
            $table->float('ActualInterest');
            $table->float('EorRMode');
            $table->string('Posted');
            $table->string('SCID');
            $table->integer('Period');
            $table->float('InterestRate');
            $table->float('OldEorR');
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
        Schema::drop('renenclists');
    }
}
