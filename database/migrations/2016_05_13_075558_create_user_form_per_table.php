<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFormPerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userformpers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserID');
            $table->integer('FormID');
            $table->string('InsertPer');
            $table->string('UpdatePer');
            $table->string('DeletePer');
            $table->string('SavePer');
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
        Schema::drop('userformpers');
    }
}
