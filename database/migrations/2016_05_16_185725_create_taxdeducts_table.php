<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxdeductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxdeducts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('TaxTypeID');
            $table->integer('RenEncID');
            $table->float('TaxDedAmount');
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
        Schema::drop('taxdeducts');
    }
}
