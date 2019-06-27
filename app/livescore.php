<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livescore extends Model
{
    protected $table = 'livescores';
 protected $fillable =[
    'match_id','player1','run1' ,'player2','run2','bowler','no_f_ball'
];


protected $hidden = [
    'remember_token',
];
    //
}
