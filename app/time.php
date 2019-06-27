<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    protected $table = 'times';
 protected $fillable =[
    'ground_id','T20','oneday' ,'test',
];


protected $hidden = [
    'remember_token',
];
    //
}

