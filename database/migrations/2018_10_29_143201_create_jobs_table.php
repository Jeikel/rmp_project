<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title',30);
            $table->string('company',30);
            $table->integer('city')->unsigned();
            $table->foreign('city')->references('id')->on('cities');
            $table->date('date_fr');
            $table->date('date_to')->nullable();
            $table->integer('current')->default(0);
            $table->string('timeline',300)->nullable();
            $table->string('description',300)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
