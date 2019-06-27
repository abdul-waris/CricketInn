<?php
/**
 * Created by PhpStorm.
 * User: MUHAMMAD HAJIQ
 * Date: 02-Nov-17
 * Time: 8:02 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class players extends Model

{
    protected $table = 'players';


   /* protected $fillable = [
        'user_id','teamname', 'captain_name', 'cnic','player_name','player_name0','player_name1','player_name2','player_name3','player_name4'
,'player_name5','player_name6','player_name7','player_name8','player_name9','player_name10','player_name11','player_name12','player_name13','player_name14'
,'player_name15','player_name16','player_name17','player_role'
    ];*/
    protected $fillable = [
        'user_id','teamname','playerrole', 'player_role' ,'player_name'
    ];

    protected $hidden = [
        'remember_token',
    ];


}