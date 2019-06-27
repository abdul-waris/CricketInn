<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroundbookindTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groundbookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->Auth()->id();
            $table->string('team_name');
            $table->string('opponent_teamname');
            $table->string('address');
            $table->string('state');
            $table->string('Province');
            $table->string('cnic')->unique();
            $table->integer('ground_id')->unsigned();
            $table->foreign('ground_id')->references('id')->on('newgroundregister');
            $table->integer('overs');
            $table->date('start_date');
            $table->date('end_date');
            $table->rememberToken();
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groundbookings', function (Blueprint $table) {
            Schema::dropIfExists('groundbookings'); //
        });
    }
}
