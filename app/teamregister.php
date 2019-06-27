<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teamregister extends Model
{
    protected $table ="teamregister";

    protected $fillable =[
      'teamname','user_id','caption_name' , 'cnic' , 'player_name'
    ];


    protected $hidden = [
         'remember_token',
    ];

    //
}
