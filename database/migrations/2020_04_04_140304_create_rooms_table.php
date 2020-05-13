<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('avatar')->default('hotel-default.jpg');
            $table->string('description');
            $table->integer('amount_bed');
            $table->integer('id_cate')->unsigned();
            $table->foreign('id_cate')->references('id')->on('categories');
            $table->text('content');
            $table->integer('size')->default(14);
            $table->integer('number')->default(1);
            $table->boolean('status')->default(0);
            $table->boolean('active')->default(1);
            $table->string('star')->default(1);
            $table->string('price');
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
        Schema::dropIfExists('rooms');
    }
}
