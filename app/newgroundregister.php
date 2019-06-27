<?php

namespace App;
use Illuminate\Notifications\Notifiable;


use Illuminate\Database\Eloquent\Model;

class newgroundregister extends Model
{
    use Notifiable;

 protected $table = 'newgroundregister';
 protected $fillable =[
    'admin_id','groundname' ,'ownername','address','city','Province','state','cnic','groundrate','electricityrate',
];


protected $hidden = [
    'remember_token',
];
    //
}

