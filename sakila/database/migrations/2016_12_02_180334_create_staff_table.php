<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('address_id')->unsigned();
            $table->string('picture');
            $table->string('email');
            $table->integer('store_id')->unsigned();
            $table->string('active');
            $table->string('username');
            $table->string('password');

            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
          


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
        Schema::dropIfExists('staff');
    }
}
