<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubjectFees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_fees', function ($table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned();
            $table->enum('based_on',['monthly','weekly','hourly','contract']);
            $table->integer('fees')->nullable();
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subject_fees');
    }
}
