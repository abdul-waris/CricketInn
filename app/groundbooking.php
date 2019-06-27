<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class groundbooking extends Model
{
 
 use Notifiable;

 protected $table = 'groundbooks';
 protected $fillable =[
    'user_id','status','payment','admin_id','team_name','time' ,'Opponent_teamname','address','city','Province','state','cnic','ground_id','overs','matchstartdate','matchenddate','duration',
];


protected $hidden = [
    'remember_token',
];
    //
}
