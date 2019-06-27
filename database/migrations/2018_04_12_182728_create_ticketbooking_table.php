<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketbookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticketbooking', function (Blueprint $table) {
            $table->increment('id')->primary();
            $table->integer('user_id');
            $table->string('admin_id');
            $table->string('payment');
            $table->string('unique_number');
            $table->integer('ground_id');
            $table->string('groundname');
            $table->string('enclouser_name');
            $table->string('match_name');
            $table->integer('no_of_ticket');
            $table->string('seats');
            $table->string('match_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
        Schema::dropIfExist('ticketbooking');
    }
}
