<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class team extends Model
{
    use Notifiable;
    protected $table ="teams";

    protected $fillable =[
        'user_id','status','team_name' ,'cnic','captain_name'
    ];


    protected $hidden = [
        'remember_token',
    ];

    //
}
