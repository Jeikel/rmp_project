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
            $table->string('image_name')->nullable();
            $table->integer('bp_code')->nullable()->unsigned();
            $table->foreign('bp_code')->references('id')->on('countries');
            $table->string('bphone',14)->nullable();
            $table->integer('cp_code')->nullable()->unsigned();
            $table->foreign('cp_code')->references('id')->on('countries');
            $table->string('cphone',14)->nullable();
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
        Schema::drop('ind_profile');
    }
}
