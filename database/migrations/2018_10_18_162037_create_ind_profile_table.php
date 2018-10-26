<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndProfileTable extends Migration
{    
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
            $table->integer('ocity')->nullable()->unsigned();
            $table->foreign('ocity')->references('id')->on('cities');
            $table->string('oaddress',50)->nullable();
            $table->integer('mcity')->nullable()->unsigned();
            $table->foreign('mcity')->references('id')->on('cities');
            $table->string('maddress',50)->nullable();
            $table->integer('bcity')->nullable()->unsigned();
            $table->foreign('bcity')->references('id')->on('cities');
            $table->string('baddress',50)->nullable();
            $table->string('hometown',20)->nullable();
            $table->string('about',200)->nullable();
            $table->string('bstory',200)->nullable();
            $table->date('birthday')->nullable();
            $table->integer('gender')->nullable();
            $table->string('ogender',30)->nullable();
            $table->string('howint',200)->nullable();            
            $table->integer('rating')->nullable();
            $table->integer('rat_desc')->nullable();
            $table->string('accomp',300)->nullable();
            $table->string('publications',300)->nullable();
            $table->string('projects',300)->nullable();
            $table->string('ptimeline',2500)->nullable();
            $table->string('devent',100)->nullable();
            $table->string('vision',500)->nullable();
            $table->string('obstacle',500)->nullable();
            $table->string('openreg',250)->nullable();
            $table->string('waysta',250)->nullable();
            $table->string('whywork',250)->nullable();
            $table->string('mission',250)->nullable();
            $table->string('currentg',500)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ind_profile');
    }

    
}
