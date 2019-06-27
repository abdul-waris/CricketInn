<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    protected $table = 'payments';
    protected $fillable = [
        'id','payment_name','sid', 'key' ,'invoice_id','pay_id','card_holder_name'
    ];

    protected $hidden = [
        'remember_token',
    ];

}
