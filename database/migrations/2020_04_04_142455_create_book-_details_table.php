<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book-details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adult');
            $table->integer('child')->default(0);
            $table->integer('id_book')->unsigned();
            $table->foreign('id_book')->references('id')->on('books');
            $table->integer('id_room')->unsigned();
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->integer('id_service')->unsigned();
            $table->foreign('id_service')->references('id')->on('services');
            $table->softDeletes();
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
        Schema::dropIfExists('book-_details');
    }
}
