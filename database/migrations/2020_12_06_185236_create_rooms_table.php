<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('id')->autoIncrement();
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('room_name');
            $table->double('length');
            $table->double('width');
            $table->double('height');
            $table->integer('floor_id');
            $table->foreign('floor_id')->references('id')->on('floors');
            $table->integer('wall_id');
            $table->foreign('wall_id')->references('id')->on('walls');
            $table->integer('ceiling_id');
            $table->foreign('ceiling_id')->references('id')->on('ceilings');
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
