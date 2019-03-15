<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaleventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_events', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->bigInteger('event_id')->unsigned();
            $table->timestamps();
            $table -> foreign('id') -> references('id') -> on('users');
            $table -> foreign('event_id') -> references('event_id') -> on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_event');
    }
}
