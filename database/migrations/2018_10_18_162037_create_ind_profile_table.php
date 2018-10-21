<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ind_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('bphone',10)->nullable();
            $table->string('cphone',10)->nullable();
            $table->string('hometown',20)->nullable();
            $table->string('about',200)->nullable();
            $table->string('bstory',200)->nullable();
            $table->date('birthday')->nullable();
            $table->integer('gender')->nullable();
            $table->string('ogender',30)->nullable();
            $table->string('howint',200)->nullable();
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
        Schema::dropIfExists('ind_profile');
    }
}
