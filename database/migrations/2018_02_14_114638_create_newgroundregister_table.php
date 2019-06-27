<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewgroundregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('newgroundregister', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('groundname');
            $table->string('ownername');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('state');
            $table->integer('groundrate');
            $table->Integer('electricityrate');
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
        Schema::table('newgroundregister', function (Blueprint $table) {
            //
        });
    }
}
