<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('release_year');
            $table->integer('language_id')->unsigned();
            $table->integer('original_language_id')->unsigned();
            $table->string('rental_duration');
            $table->string('rental_rate');
            $table->string('length');
            $table->string('replacement_cost');
            $table->string('rating');
            $table->string('special_features');

               $table->foreign('language_id')->references('id')->on('languages');
               $table->foreign('original_language_id')->references('id')->on('languages');

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
        Schema::dropIfExists('films');
    }
}
