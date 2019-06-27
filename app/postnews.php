<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postnews extends Model
{
    protected $table = 'postnews';


    protected $fillable = [
        'fixture', 'news', 'des','image','admin_id'
    ];

    //
}
