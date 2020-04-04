<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room-details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('size')->default(14);
            $table->boolean('status')->default(0);
            $table->boolean('active')->default(1);
            $table->integer('id_room')->unsigned();
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->integer('id_service')->unsigned();
            $table->foreign('id_service')->references('id')->on('services');
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
        Schema::dropIfExists('room-_details');
    }
}
