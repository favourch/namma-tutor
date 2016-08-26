<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function ($table) {
            $table->increments('id');
            $table->integer('tutor_id')->unsigned();
            $table->string('subject_name', 100);
            $table->string('short_name',10)->nullable();
            $table->string('description')->nullable();
            $table->date('created_at');
            $table->date('updated_at');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subject');
    }
}
