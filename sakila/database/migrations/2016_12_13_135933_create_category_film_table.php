<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_film', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('film_id')->unsigned();
            $table->integer('category_id')->unsigned();
            

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');

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
        Schema::dropIfExists('category_film');
    }
}
