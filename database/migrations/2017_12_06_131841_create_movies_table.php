<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('movies', function (Blueprint $table) {
             $table->increments('id')->unique();
             $table->string('titel');
             $table->string('genre');
             $table->integer('year');
             $table->string('actors');
             $table->string('plot');
             $table->string('director');
             $table->string('rating');
             $table->string('reviews');
             $table->timestamps();
         });
     }
    // TO BE REMOVED!
    // public function up()
    // {
    //     Schema::create('movies', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
