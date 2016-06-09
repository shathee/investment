<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsequenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tsequences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SeqName');
            $table->integer('StartNumber');
            $table->integer('IncrementBy');
            $table->string('MaxNumber');
            $table->string('Cycle');
            $table->string('NextNumber');
            $table->timestamp('LastTimeStamp');
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
        Schema::drop('tsequences');
    }
}
