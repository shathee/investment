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
            $table->integer('tax_type_id');
            $table->integer('ren_enc_id');
            $table->float('tax_ded_amount');
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
        Schema::drop('taxdeducts');
    }
}
