<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticketbooking extends Model
{
    protected $table = 'ticketbooking';
 protected $fillable =[
    'user_id','admin_id','payment','unique_number' ,'groundname','ground_id','enclouser_name','match_name','no_of_ticket','seats','match_date',
];


protected $hidden = [
    'remember_token',
];
    //
}
