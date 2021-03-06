<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('terminal');
            $table->integer('adults');
            $table->integer('kids');
            $table->string('tour');
            $table->string('date');
            $table->longText('message');
            $table->boolean('status');
            $table->boolean('accept');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->engine = "InnoDB";

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
