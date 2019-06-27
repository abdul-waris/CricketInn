<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamregister', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('teamname')->unique();
            $table->string('caption_name');
            $table->string('cnic')->unique();
            $table->string('player_name');
            $table->rememberToken();
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
        Schema::dropIfExists('teamregister');
    }
}
