<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGroungbooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groundbooks', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('status');  
            $table->string('team_name');
            $table->string('opponent_teamname');
            $table->string('address');
            $table->string('city');
            $table->string('time');
            $table->string('province');
            $table->string('state');
            $table->string('cnic');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('duration');
            $table->rememberToken();
            $table->timestamp();
            


            
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
        Schema::table('groundbooks', function (Blueprint $table) {
            Schema::dropIfExists('groundbooks');
            //
        });
    }
}
