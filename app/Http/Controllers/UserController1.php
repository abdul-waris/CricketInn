<?php
/**
 * Created by PhpStorm.
 * User: MUHAMMAD HAJIQ
 * Date: 27-Sep-17
 * Time: 10:06 PM
 */

namespace App\Http\Controllers;
use App\Http\Requests\teamvalidation;
use App\player;
use App\team;
use App\groundbooking;
use App\postnews;
use App\newgroundregister;
use Illuminate\Http\Request;
use App\players;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\playerregister;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\In;

class UserController1 extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   /*
   *
   * About US
   * **/ 
    public function about()
    {
        return view('User.about');
    }

    /*
    *
    *   Contact
    */
    public function contact(){
        return view('User.contact');
    }
    

     /*
    *
    * Fixtures
    *
    */
    public function Fixture(){

        $groundbook = \App\groundbooking::orderBy('created_at','desc')->get();
        return view('User.fixture.fixture',['groundbook'=>$groundbook]);
    }
/*
*
*
*Show Fixture Matches
*
**/
public function showfixturematch($id)
{           $id;
            $fixture = DB::table('groundbooks')->where('id','=', $id)->first();
             $team_name = $fixture->team_name;
             $opponent_teamname = $fixture->opponent_teamname;
             /*
             First team id and data
             */
            
             $teamid = DB::table('teams')->where('team_name','=',$team_name)->first();
             //get team id
              $firstteamid = $teamid->id;
             $firstteam = players::all()->where('team_id','=',$firstteamid);
             $teamname = team::all()->where('id','=',$firstteamid);
           /*
           Second team id and data
           
           */
             $teamid = DB::table('teams')->where('team_name','=' ,$opponent_teamname)->first();
            //get team id
              $opponentteamid = $teamid->id;
               $opponentteam = players::all()->where('team_id','=',$opponentteamid );
             $secondteam= team::all()->where('id','=',$opponentteamid );
            return view('User.fixture.showfixturematch',['firstteam'=>$firstteam ,'teamname'=>$teamname, 'opponentteam'=>$opponentteam , 'secondteam'=>$secondteam]);        
            //return $id;

}
    
    
    
    public function home(){
        return view('/user.Home1');
    }

    public function news(){
        $posts = postnews::orderBy('created_at', 'desc')->get();
        return view('/user.news',['posts'=>$posts]);

    }
   /* public function teamregistor(){
        return view('User.teamregistration');
    }

    public function groundbooked(teamvalidation $request){
        return view ('User.booked');
    }*/
    /**
     * @param $r
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */

    public function postnews($r){
       // return view('postnews');
        return response($r->all());
    }
    /*public function player(){
        return view('/user.playerregister');
    }
    public function groundbooking(playerregister $request){
        $players = new players();
       $players->teamname = Input::get('teamname');
        $players->caption_name =Input::get('captainname');
        $players->cnic = Input::get('cnic');
        $players->user_id =Auth::user()->id;
        if(isset($_POST["player"]) && is_array($_POST["player"])){
        $capture_field_vals ="";
        foreach($_POST["player"] as $key => $text_field){
            $capture_field_vals .= $text_field .", ";
        }
            $players -> player_name = $capture_field_vals;

    }
        if(isset($_POST["playerstatus"]) && is_array($_POST["playerstatus"])){
            $capture_field_vals ="";
            foreach($_POST["playerstatus"] as $key => $text_field){
                $capture_field_vals .= $text_field .", ";
            }
            $players->player_role = $capture_field_vals;

        }
        $players->save();

        //foreach ($pname as $player){
          //  print_r($player);
            //echo $player;
        //}

        return view('user/groundbooking');


    }
*/
    //public function show(){
      //  $posts = postnews::all();
        //return view('/home',['posts'=>$posts]);
    //}
   /* public function teamregistor(){
        return view('user/teamregistration');
    }*/


}