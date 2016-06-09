<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('TaxTypeID');
            $table->string('TaxTypeName');
            $table->string('DeductOn');
            $table->string('YearlyCalculate');
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
        Schema::drop('taxtypes');
    }
}
