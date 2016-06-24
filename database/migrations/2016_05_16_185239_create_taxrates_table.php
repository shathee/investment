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
            $table->integer('tax_type_id');
            $table->date('implement_date');
            $table->string('from_amount');
            $table->string('to_amount');
            $table->string('tax_rate_taka');
            $table->string('tax_rate_percent');
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
        Schema::drop('taxrates');
    }
}
