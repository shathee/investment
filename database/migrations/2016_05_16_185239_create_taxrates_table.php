<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxrates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('TaxRateID');
            $table->integer('TaxTypeID');
            $table->date('ImplementDate');
            $table->string('FromAmount');
            $table->string('ToAmount');
            $table->string('TaxRateTaka');
            $table->string('TaxRatePercent');
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
        Schema::drop('taxrates');
    }
}
