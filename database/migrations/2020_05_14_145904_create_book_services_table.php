<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_services', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_book')->unsigned();
            $table->foreign('id_book')->references('id')->on('books');
            $table->integer('id_service')->unsigned();
            $table->foreign('id_service')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_services');
    }
}
