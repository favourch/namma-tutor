<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class City extends Migration
{
    public function up()
    {
        //
        Schema::create('city', function ($table) {
            $table->increments('id');
            $table->string('state_id');
            $table->string('city_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('city');

    }
}
