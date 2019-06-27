<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivescoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livescores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->string('player1');
            $table->integer('run1');
            $table->string('player2');
            $table->integer('run2');
            $table->string('bowler');
            $table->integer('no_of_ball');
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
        Schema::dropIfExists('livescores');
    }
}
