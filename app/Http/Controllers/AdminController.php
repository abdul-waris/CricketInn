<?php
namespace App\Http\Controllers;


use App\Notifications\newsalert;
use App\players;
use App\Models;
use App\team;
use App\User;
use App\groundbooking;
use App\newgroundregister;
//use App\playerregister;
use Illuminate\Http\Request;
use App\postnews;
use App\livescore;
use App\ticketbooking;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Auth;
use App\Http\Requests\postrequest;
use App\Http\Requests\teamvalidation;
use App\Http\Requests\playerregister;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use DateTime;
use DatePeriod;
use DateInterval;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;




class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
/*
*
* ALL Users
*
*/
    public function allusers(){
        ($users = user::paginate(8));
    return view('Admin/user/allusers',['users'=>$users]);
    }
    /*
    *
    * User All Detail
    *
    */
    public function userdetail($id){
      //  return $id;
     ($users =DB::table('users')->where('id','=',$id)->first());
       ($teams =DB::table('teams')->where('user_id','=',$id)->get());
       ($groundbooks = DB::table('groundbooks')->where('user_id','=',$id)->get());
        ($ticketbook = DB::table('ticketbooking')->where('user_id','=',$id)->get());
        ($totalticket = DB::table('ticketbooking')->where('user_id','=',$id)->SUM('no_of_ticket'));

            return view('Admin.user.userdetail',['totalticket'=>$totalticket, 'users'=>$users,'teams'=>$teams, 'groundbooks'=>$groundbooks, 'ticketbook'=>$ticketbook]);
    }
/*
*
* All Ticket Booking
*
*/
public function allbookedticket(){
    ($users = user::paginate(8));
        return view('Admin/ticketbook/allusertk',['users'=>$users ]);
}
 /*
    *
    * Usertk All Detail
    All Ticket Booking Show By Id
    *
    */
    public function usertkdetail($id){
        //  return $id;
       ($users =DB::table('users')->where('id','=',$id)->first());
         ($teams =DB::table('teams')->where('user_id','=',$id)->get());
         ($groundbooks = DB::table('groundbooks')->where('user_id','=',$id)->get());
          ($ticketbook = DB::table('ticketbooking')->where('user_id','=',$id)->get());
          ($totalticket = DB::table('ticketbooking')->where('user_id','=',$id)->SUM('no_of_ticket'));
  
              return view('Admin.ticketbook.usertkdetail',['totalticket'=>$totalticket, 'users'=>$users,'teams'=>$teams, 'groundbooks'=>$groundbooks, 'ticketbook'=>$ticketbook]);
      }
/*
*Ground Book
*
*/
public function bookedticketdetail($id){
    ($ticketbook = DB::table('ticketbooking')->where('id','=',$id)->first());
     $user = $ticketbook->user_id;
    //($user_name = DB::table('users')->where('id','=',$user)->first()); 
    if($user != NULL){
        ($user_name = DB::table('users')->where('id','=',$user)->first()); 
        $ground =$ticketbook->ground_id;
     ($groundname = DB::table('newgroundregister')->where('id','=',$ground)->first());
                return view('Admin/ticketbook/bookedticketdetail',['ticketbook'=>$ticketbook , 'groundname'=>$groundname, 'user_name'=>$user_name]);

    }else{
    $admin = $ticketbook->admin_id;
    ($admin_name = DB::table('admins')->where('id','=',$admin)->first());
    $ground =$ticketbook->ground_id;
    ($groundname = DB::table('newgroundregister')->where('id','=',$ground)->first());
               return view('Admin/ticketbook/bookedticketdetail',['ticketbook'=>$ticketbook , 'groundname'=>$groundname,'admin_name'=>$admin_name]);

    }
    // $ground =$ticketbook->ground_id;
    //  ($groundname = DB::table('newgroundregister')->select('groundname')->where('id','=',$ground)->first());
    //             return view('Admin/ticketbook/bookedticketdetail',['ticketbook'=>$ticketbook , 'groundname'=>$groundname, 'user_name'=>$user_name, 'admin_name'=>$admin_name]);
}
/*
*
* All Ground Booked
*
*/
public function allgroundbooks(){
    ($users = user::paginate(8));
        return view('Admin/groundbook/allusergb',['users'=>$users ]);
}
/*
*
** Ground Book Detail
*
*/
public function groundbookdetail($id){
    ($users =DB::table('users')->where('id','=',$id)->first());
    ($groundbooks = DB::table('groundbooks')->join('newgroundregister','newgroundregister.id','=','groundbooks.ground_id')->where('user_id','=',$id)->get());
    return view('Admin/groundbook/gbdetail',['users'=>$users,'groundbooks'=>$groundbooks]);
}

    public function adminindex()
    {
        $posts = postnews::all();
        ($user = user::all()->count()); 
        ($ticketbooking = ticketbooking::all()->SUM('no_of_ticket'));
        ($groundbooking = groundbooking::all()->count());
        $posts = postnews::paginate(8);
        ($groundbook = DB::table('groundbooks')->where('duration','<',date('Y-m-d'))->orderBy('duration','des')->limit(3)->latest()->get());
        return view('Admin.home',['posts'=>$posts, 'groundbook'=>$groundbook, 'user'=>$user , 'ticketbooking'=>$ticketbooking, 'groundbooking'=>$groundbooking]);
        //return view('Admin.home');
    }

   /* public function news(){


        return view('Admin.news');
    }*/

     /*
    
    POST NEWS BY ADMIN ACCORDING TO ID

    */
    public function postnewsbyid($id,Request $request){
        //return $id;
        $teamid= DB::table('teams')->where('id' ,'=' ,$id)->first();
        //$teamname = $teamid->team_name;
        $team = team::all()->where('id','=',$id);
        //return $teamname;
        return view('Admin.postnewsbyid',['team'=>$team]);
        }
        /*
        
        POST NEWS BY ADMIN AND NOTIFY THE USERS
        
        */

    public function postnews(){
       
        // return view('/postnews');

        $news = new postnews;
       echo  $news->fixture = Input::get("fixture");
        echo $news->news = Input::get("news");
        echo $news->des= Input::get("des");
        $image  = Input::get("image");
        echo $userid = Input::get('userid');
        $news->admin_id = auth()->user()->id;
        $user_id = DB::table('users')->where('id' ,'=',$userid)->get();
          $news->save();
        $user= new User();
       // redirect('Admin/home');
        ($posts = postnews::all());
        $users = user::all();
         ($posts = postnews::paginate(10));

        //dd($users);
       //dd($user_id);
       // var_dump($user_id->notify(new newsalert($news)));
        //        auth()->user()->notify(new newsalert());
         //dd($user_id->id);
             
         foreach ($users as $user) {

          // echo  $users = $user->id;
            $user->notify(new newsalert($news));
                   
        }
        ($ticketbooking = ticketbooking::all()->SUM('no_of_ticket'));
        ($groundbooking = groundbooking::all()->count());
        $posts = postnews::paginate(8);
        ($groundbook = DB::table('groundbooks')->where('duration','<',date('Y-m-d'))->orderBy('duration','des')->limit(3)->latest()->get());
        ($user = user::all()->count()); 
       
        return view('Admin.home',['posts'=>$posts, 'groundbook'=>$groundbook, 'user'=>$user , 'ticketbooking'=>$ticketbooking, 'groundbooking'=>$groundbooking]);
        
        

        //echo "Data inserted";

    }
    

    
    
        public function shownews(){
         var_dump($_POST);
         //return view('Admin/hello');
     }
/*
Show All teams

*/
     public function teams(){
         $teams = team::orderBy('id', 'desc')->paginate(5);
         return view('Admin.team.teams',['teams'=>$teams]);

     }

        /*
            
            SHOW THE TEAM_REGISTRATION FORM
            
            */

            public function teamregistration(){
                //return 1;
                return view ('Admin.team.team_registration');
            }

            /*
            
            Team Registered
            
            */

            public function teamregistor(playerregister $playerregister){
                $player = new players();

                //Team Table ..............................................................................
                 $team = new team();
                 $team_name =  htmlspecialchars(Input::get('teamname'));
                if($team->all()->where('team_name','=',$team_name)->first()){
                    session()->flash('error-mas','This Team Is Already Registered Please Change Team Name');
                    return redirect()->back()->withInput();
                }else{
                    $team->team_name =  htmlspecialchars(Input::get('teamname'));
                  $team->cnic = htmlspecialchars(Input::get('cnic'));
                  $team->user_id = auth()->id();
                 $team->status = auth()->user()->status;
                 //Team Table input End....................................................................
            
                 //use for player table......................................................................
                  $team->captain_name =htmlspecialchars(Input::get('captainname'));
                //echo  $team->player_role = htmlspecialchars(Input::get('playerrole'));
                  $team->captain_role = htmlspecialchars(Input::get('playerrole'));
                $player_role = htmlspecialchars(Input::get('playerrole'));
                 
                //End player table input....................................................................
            
                                /*
                      * Get player name from form using javascript
                      *
                      *
                      * */
                if(isset($_POST["player"]) && is_array($_POST["player"])){
                     $capture_field_vals ="";
                     $value =1;
                     foreach($_POST["player"] as $key => $text_field){
                          $capture_field_vals .= $text_field;
                                     $value++;
                         if($value>Input::get('sampleinlineradio')){
            
                             }else{
            
                              $capture_field_vals .= ",";
                             }
                             //}
                     }
                    // $array =  explode(',', $capture_field_vals);
                     //$countt = count($array);
                     //echo $countt;
                    $array =  explode(',', $capture_field_vals);
                 }
            
            
                //  echo'<pre>';
                //  print_r($array);
                //  echo'</pre>';
            
            
                 /*
                      * End array of player name  form using javascript
                      *
                      *
                      * */
                 if(isset($_POST["playerstatus"]) && is_array($_POST["playerstatus"])){
                     $capture_radio_vals ="";
                     $value =1;
                     foreach($_POST["playerstatus"] as $key => $text_field){
                         $capture_radio_vals .= $text_field  ;
                         $value++;
                         if($value>Input::get('sampleinlineradio')){
            
                         }else{
            
                             $capture_radio_vals .= ",";
                         }
            
                     }
                     $array1 = explode(',',$capture_radio_vals);
                 }
            
            
                //  echo'<pre>';
                //  print_r($array1);
                //  echo'</pre>';
            
                 //$countt = count($array);
                 $team->save();
                 /*
                  *
                  *
                  * Insert data into database using for loop
                  *
                  *
                  *
                  * */
                // $team_id = DB::select('select id from teams');
                 //foreach ($team_id as $team_id)
                   //  echo $team_id;
                   // $teamid= DB::table('teams')->select('id')->where('user_id', '=' ,auth()->id())->get();
                 $teamid= DB::table('teams')->where('user_id' ,'=' ,auth()->id())->orderBy('created_at','desc')->first();
                 //var_dump($teamid->id);
                $team_id = $teamid->id;
                 // foreach ($teamid as $teamiid) {
                  //   var_dump($teamiid->team_name);
            
            //        }
                //  $team->save();
                 for ($x = 0; $x < Input::get('sampleinlineradio'); $x++) {
                     //$y = 'player_name'.$x;
            
                    $playername = $array[$x];
                       $playerValue = $array1[$x];
            
                     // echo $players->player_name.$x = Input::get($array[$x]);
                     //echo("<li> $players->$y = ".$playerValue." </li>");
                 DB::table('players')->insert(
                          array('team_id' => $team_id ,'player_name' => $playername , 'playerrole'=>$player_role ,  'player_role' => $playerValue)
            
                  );
                 }
               
                 ($teams = DB::table('teams')->where('id','=',$team_id)->get());
                 $players = DB::table('players')->where('team_id','=',$team_id)->get();
              
              
                   return view('Admin.team.booked',['teams'=>$teams,'players'=>$players ]);
            
                }
             }
            

     /*
     
     Edit team members by admin

     */
     public function teamedit($id){

            $teamplayer = DB::table('teams')->where('id','=',$id)->first();
           // return $id;
            $teamid = $teamplayer->id; 
           ($playernames = DB::table('players')->where('team_id','=',$teamid)->get());
              $numberofplayers = count($playernames);
             // $numberofplayers = 16;
             // if($numberofplayers == 11){
               //   echo $numberofplayers = 'hello';
              //}if($numberofplayers ==16){
                // echo  $numberofplayers = 'by';
             // }if($numberofplayers== 18){
               //  echo  $numberofplayers = 'bt';
              //}
             return view('Admin.team.updateteam',['teamplayer'=>$teamplayer , 'playernames'=>$playernames , 'numberofplayers'=>$numberofplayers,'id'=> $id ]);
        }

        public function teamupdate($id , Request $requestR){
        
            $teamname = Input::get('teamname');
            $captainname = Input::get('captainname');
            $playerrole = Input::get('playerrole');
            $cnic = Input::get('cnic');
               ($teamid=DB::table('teams')->where('id','=',$id)->update(['team_name'=>$teamname, 'captain_name'=>$captainname, 'captain_role'=>$playerrole, 'cnic'=>$cnic]));
               
               
                /*
                 * Get player name from form using php
                 *
                 *
                 * */
           if(isset($_POST["player"]) && is_array($_POST["player"])){
                $capture_field_vals ="";
                $value =1;
                foreach($_POST["player"] as $key => $text_field){
                     $capture_field_vals .= $text_field;
                                $value++;
                    if($value>Input::get('sampleinlineradio')){
       
                        }else{
       
                         $capture_field_vals .= ",";
                        }
                        //}
                }
               // $array =  explode(',', $capture_field_vals);
                //$countt = count($array);
                //echo $countt;
               $array =  explode(',', $capture_field_vals);
            }
       
       
           //  echo'<pre>';
           //  print_r($array);
           //  echo'</pre>';
       
       
            /*
                 * End array of player name  form using php
                 *
                 *
                 * */
            if(isset($_POST["playerstatus"]) && is_array($_POST["playerstatus"])){
       
                $capture_radio_vals ="";
                $value =1;
                foreach($_POST["playerstatus"] as $key => $text_field){
                    $capture_radio_vals .= $text_field  ;
                    $value++;
                    if($value>Input::get('sampleinlineradio')){
       
                    }else{
       
                        $capture_radio_vals .= ",";
                    }
       
                }
                 $capture_radio_vals;
                $array1 = explode(',',$capture_radio_vals);
            }
       
       
           //  echo'<pre>';
           //  print_r($array1);
           //  echo'</pre>';
       
            /*
            *
            * 
            * * Player Id's
            * 
            * ***/
           if(isset($_POST["id"]) && is_array($_POST["id"])){
               $capture_field_vals ="";
               $value =1;
               foreach($_POST["id"] as $key => $text_field){
                    $capture_field_vals .= $text_field;
                               $value++;
                   if($value>Input::get('sampleinlineradio')){
       
                       }else{
       
                        $capture_field_vals .= ",";
                       }
                       //}
               }
              // $array =  explode(',', $capture_field_vals);
               //$countt = count($array);
               //echo $countt;
              $arrayy =  explode(',', $capture_field_vals);
           }
       
       
           // echo'<pre>';
           // print_r($arrayy);
           // echo'</pre>';
       
        sizeof($array);   
            for ($x = 0; $x < sizeof($array); $x++) {
                //$y = 'player_name'.$x;
       
                $playername = $array[$x];
                $playerValue = $array1[$x];
                $pid = $arrayy[$x];
                // echo $players->player_name.$x = Input::get($array[$x]);
                //echo("<li> $players->$y = ".$playerValue." </li>");
            (DB::table('players')->where('id','=',$pid)->update(['player_name' => $playername , 'playerrole'=>$playerrole ,  'player_role' => $playerValue]));
           //           array('team_id' => $id ,'player_name' => $playername , 'playerrole'=>$playerrole ,  'player_role' => $playerValue)
       
           //   );
            }
            $teamid= DB::table('teams')->where('id' ,'=' ,$id)->first();
           //$team=$teamid->user_id;
           $teams = $teamid->id;
           $team_name = $teamid->team_name;
               $team = players::all()->where('team_id' , '=' , $teams);
           $teamname = team::all()->where('id','=', $id);
             //return view('User.showteammamber',['team'=>$team, 'teamname'=>$teamname]);
             return view('Admin.team.showteam',['team'=>$team, 'teamname'=>$teamname]);

                  
           }
           
           /*
            * End of Ground booking form
            *
            * */
       ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           
             /*
     Show selected team according to id
     */
     public function show($id){

          $teamid= DB::table('teams')->where('id' ,'=' ,$id)->first();
         //$team=$teamid->user_id;
         $teams = $teamid->id;
         $team_name = $teamid->team_name;
       // return $team;
        // $team = DB::table('playes')->where('id' ,'=', $teams);
        // print_r($player);
         //return $player;
         $team = players::all()->where('team_id' , '=' , $teams);
         $teamname = team::all()->where('id','=', $id);
         //$team->pluck('player_name','player_name');
        return view('Admin.team.showteam',['team'=>$team, 'teamname'=>$teamname]);
         //'<pre>';
        //return $team;
         //return $team_name;
        //'</pre>';
     }

        /*
        POST NEWS BY ADMIN ACCORDING TO ID to Admin home page
        
        */
       /* public function postnewshomepage(postrequest $postrequest){
           
            $postnews = new postnews;
        
             echo $postnews->fixture = Input::get('fixture');
            echo $postnews->news = Input::get('news');
            echo $postnews->des = Input::get('des');
           echo $userid = Input::get('userid');
            $postnews->admin_id = auth()->user()->id;
                // $postnews->save();  
            $posts = postnews::all();
                $user_id = DB::table('users')->where('id' ,'=',$userid)->first();
             //dd($userid);
                // echo $user_id->name;
            //$user = User::all();
            //foreach($user as $users){
              //echo $users->id;
             //  var_dump($user_id->notify(new newsalert($news)));
           // }
               return view('Admin.home',['posts'=> $posts]);

        }*/

        public function Fixture(){

            $groundbook = \App\groundbooking::orderBy('duration', 'desc')->where('payment','=','pay')->paginate(7);
            return view('Admin.fixture',['groundbook'=>$groundbook]);
        }

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
            return view('Admin.showfixturematch',['firstteam'=>$firstteam ,'teamname'=>$teamname, 'opponentteam'=>$opponentteam , 'secondteam'=>$secondteam]);        
            //return $id;

}
/*
Live Score Board

*/

public function livescore(){
    $fixture = groundbooking::all();
    return view('Admin.livescore.livescore',['fixture'=>$fixture]);
}

/*
Get team id from booking table for livescore
*/
public function livescorebyid($id){
    //return $id;
    $fixture = DB::table('groundbooks')->where('id','=',$id)->first();
     $team_name = $fixture->team_name;
     $opponent_team = $fixture->opponent_teamname; 
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
            $teamid = DB::table('teams')->where('team_name','=' ,$opponent_team)->first();
           //get team id
             $opponentteamid = $teamid->id;
              $opponentteam = players::all()->where('team_id','=',$opponentteamid );
            $secondteam= team::all()->where('id','=',$opponentteamid );
            return view('Admin.livescore.livescorebyid',['firstteam'=>$firstteam ,'teamname'=>$teamname, 'opponentteam'=>$opponentteam , 'secondteam'=>$secondteam,'id'=>$id]);
}
/*
*
*
*POST SCORE USING AJAX
*
*
*
*/


public function postlivescore(){
    

  $livescore = new livescore();
 echo  $livescore->player1 = Input::get('p1');
    $livescore->batting_team = Input::get('battingteam');
  echo $livescore->run1 = Input::get('r1');
  $livescore->player2 = Input::get('p2');
  $livescore->run2 = Input::get('r2');
  $livescore->bowler = Input::get('bname');
  $livescore->no_of_ball = Input::get('bnum');
   echo $livescore->match_id = Input::get('id');
 $livescore->save();
  
  

}


// public function livescored(){
//     //echo $number2 = $_POST["number2"];

// }
/*
*
* Ground Book By Admin
*
*/
public function groundbook() {
    $groundname = newgroundregister::all();
    return view('Admin.groundbooking.groundbook',['groundname'=>$groundname]);
}
/*
*
* Ground Booked By Admin
*
*/
public function groundbooked(teamvalidation $teamvalidation){
       $teamname = Input::get('teamname');
        $second_teamname = Input::get('secondteam');

            $groundbooked =new groundbooking();
             if($teamname == $second_teamname ){
                session()->flash('error-mas' , 'Your team Name and Opponent teamname is same');
                return Redirect()->back()->withInput();
                        
                 }else{
                    if($team = DB::table('teams')->where('team_name','=',$teamname)->first())
                    { 
                      if($team=DB::table('teams')->where('team_name','=',$second_teamname)->first()){

                         $team_name = Input::get('teamname');
                         $opponent_teamname = Input::get('secondteam');
                         $address = Input::get('address');
                         $city = Input::get('city');
                         $province = Input::get('province');
                         $state = Input::get('state');
                         $admin_id = auth()->user()->id;
                         $status = auth()->user()->status;
                         $cnic = Input::get('cnic') ;
                         $start_date = Input::get('matchdatestart');
                          $end_date = Input::get('matchdateend');
                          if(isset($_POST['groundname'])){
                                $ground_id = $_POST['groundname'];
                          }
                          if(isset($_POST['overs'])){
                              $overs = $_POST['overs'];
                        } 
                        if(isset($_POST['time20'])){
                             $time = $_POST['time20'];
                        }
                          // Specify the start date. This date can be any English textual format  
                            $date_from = $start_date;   
                            $date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
                            
                            // Specify the end date. This date can be any English textual format  
                            $date_to = $end_date;  
                            $date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
                            
                            // Loop from the start date to end date and output all dates inbetween  
                            for ($i=$date_from; $i<=$date_to; $i+=86400) {  
                                  $duration=date("Y-m-d", $i);  
                                //$array = explode(',',$duration);
                                //print_r($array);
                                if(DB::table('groundbooks')->where('duration','=',$duration)->where('time','=',$time)->where('ground_id','=',$ground_id)->first()){
                                    session()->flash('error-mas','Your date and time is aleady book'.$duration .'/' .$time );
                                    return Redirect()->back()->withInput();
                                    }else{
                                DB::table('groundbooks')->insert(
                                       array('admin_id' => $admin_id ,'team_name' => $team_name , 'opponent_teamname'=>$opponent_teamname ,'address' => $address ,'time'=>$time,'city'=>$city ,'state'=>$state , 'province'=>$province ,'status'=>$status,'ground_id'=>$ground_id,'cnic'=>$cnic,'overs'=>$overs, 'start_date'=>$start_date,'end_date'=>$end_date,'duration'=>$duration)
                                );
                                session()->flash('success','Your Ground is Book');

                              }
                            } 
                                
                                
                          // $groundbooked->save();
                            }else{
                                session()->flash('error-mas','Your Opponent Team is not registered');
                                return Redirect()->back()->withInput();
                            }
                        
                    }else{
                        session()->flash('error-mas','Youe teamname is not register');
                        return Redirect()->back()->withInput();
                    }
                }

            
          $lastrecord =DB::table('groundbooks')->latest()->first();
           ($name = DB::table('admins')->where('id','=', auth()->user()->id)->first());
           //$lastrecord=groundbooking::all()->orderBy('id','des')->first();
           $groundrecord = DB::table('newgroundregister')->where('id','=',$ground_id)->first();
             return view('Admin.groundbooking.groundbooked',['lastrecord'=>$lastrecord , 'groundrecord'=>$groundrecord, 'name'=>$name]);
}
/*

Schedule By lastmatch

*/
public function schedulelastmatch(){
$lastmatch = DB::table('groundbooks')->where('duration', '<' ,date('Y-m-d'))->get();

    return view('Admin.schedule.schedulelastmatch',['lastmatch'=>$lastmatch]);
}
/*

Schedule By currentmatch

*/
public function schedulecurrentmatch(){
    $currentmatch = DB::table('groundbooks')->where('duration', '=', date('Y-m-d'))->get();
    //dd($currentmatch);
     //var_dump(date('d/F/Y'));
return view('Admin.schedule.schedulecurrentmatch',['currentmatch'=> $currentmatch]);
}
/*

Schedule By nextmatch

*/
public function schedulenextmatch(){
    $nextmatch = DB::table('groundbooks')->where('duration', '>' ,date('Y-m-d'))->get();
    return view('Admin.schedule.schedulenextmatch',['nextmatch' => $nextmatch]);
}
/*

Register Ground

*/
public function grounds(){
    return view('Admin.newground.grounds');
}

/*

NewGround Register

*/
public function newgroundregister(\App\Http\Requests\newgroundregister $newgroundregister){
    $newgroundregister = new newgroundregister();
     $groundname =  Input::get('groundname');
     $address = Input::get('address');
    //print_r($groundname = DB::table('newgroundregister')->where('groundname','=',$groundname )->orwhere('address','=',$address)->first());
    if($groundname = DB::table('newgroundregister')->where('address','=',$address)->first()){
                session()->flash('error-mas','Your Groundname and Address already exist please change any one');
        return Redirect()->back()->withInput();
    }else{
       
                // echo $groundname =  Input::get('groundname');
                // echo $ownername = Input::get('ownername');
                // echo $address = Input::get('address');
                // echo $city = Input::get('city');
                // echo $province = Input::get('province');
                // echo $state = Input::get('state');
                // echo $cnic = Input::get('cnic');
                // echo $groundrate = Input::get('groundrate');
                // echo $electricityrate = Input::get('electricityrate');
                // echo $admin_id=auth()->user()->id;
               
                if(isset($_POST["time20"]) && is_array($_POST["time20"])){
                    if($_POST["time20"] == !NULL ){
                          $length =count($_POST['time20']);
                    $capture_checkbox_vals ="";
                    $value =1;
                    foreach($_POST["time20"] as $key => $text_field){
                        $capture_checkbox_vals .= $text_field  ;
                       // $capture_checkbox_vals .= ",";
                        $value++;
                        if($value>$length){
           
                        }else{
           
                            $capture_checkbox_vals .= ",";
                        }
           
                    }
                     $capture_checkbox_vals;
                    $array1 = explode(',',$capture_checkbox_vals);
                 }
                }else{
                    session()->flash('error-mas','Please select one from T20 time');
                                return Redirect()->back()->withInput();
                }
           
           
                // echo'<pre>';
                // print_r($array1);
                // echo'</pre>';
           
                if(isset($_POST["time50"]) && is_array($_POST["time50"])){
                    if($_POST["time50"] == !NULL ){

                    
             $length =count($_POST['time50']);
                    
               $capture_checkbox_vals ="";
               $value =1;
               foreach($_POST["time50"] as $key => $text_field){
                   $capture_checkbox_vals .= $text_field  ;
                  // $capture_checkbox_vals .= ",";
                   $value++;
                   if($value>$length){
      
                   }else{
      
                       $capture_checkbox_vals .= ",";
                   }
      
               }
                $capture_checkbox_vals;
               $arra = explode(',',$capture_checkbox_vals);
           }
        }else{
            session()->flash('error-mas','Please select one from One day time');
                        return Redirect()->back()->withInput();
        }
      
        //    echo'<pre>';
        //    print_r($arra);
        //    echo'</pre>';


           if(isset($_POST["timetest"]) && is_array($_POST["timetest"])){
               if($_POST["timetest"] == !NULL){
            $length =count($_POST['timetest']);
       $capture_checkbox_vals ="";
       $value =1;
       foreach($_POST["timetest"] as $key => $text_field){
           $capture_checkbox_vals .= $text_field  ;
          // $capture_checkbox_vals .= ",";
           $value++;
           if($value>$length){

           }else{

               $capture_checkbox_vals .= ",";
           }

       }
        $capture_checkbox_vals;
       $array3 = explode(',',$capture_checkbox_vals);
   }
           }else{
            session()->flash('error-mas','Please select one from test time');
            return Redirect()->back()->withInput();
           }

//    echo'<pre>';
//    print_r($array3);
//    echo'</pre>';
                
   $newgroundregister->groundname =  Input::get('groundname');
                $newgroundregister->ownername = Input::get('ownername');
                $newgroundregister->address = Input::get('address');
                $newgroundregister->city = Input::get('city');
                $newgroundregister->province = Input::get('province');
                $newgroundregister->state = Input::get('state');
                $newgroundregister->cnic = Input::get('cnic');
                $newgroundregister->groundrate = Input::get('groundrate');
                $newgroundregister->electricityrate = Input::get('electricityrate');
                $newgroundregister->admin_id=auth()->user()->id;
                if($newgroundregister->save()){
                    $ground_id =$newgroundregister->id;
                }


               
                // echo $id;
              $a=count($array3);
              $c=count($array1);
              $b=count($arra);
             $large = max($a,$b,$c);
            for($i=0;$i<$large;$i++){
                
                $t20 =array_key_exists($i, $array1)?  $array1[$i] : "";
                $oneday= array_key_exists($i, $arra)?  $arra[$i] : "";;
                $test=array_key_exists($i, $array3)? $array3[$i] : "";;
                  DB::table('times')->insert(['ground_id'=>$ground_id , 'T20'=>$t20 , 'oneday'=>$oneday, 'test'=>$test]);
                }
              //  return view ('Admin.newground.newgroundregister');
    }
       
            $ground_detail = DB::table('newgroundregister')->where('id','=',$ground_id)->first();
            $time = DB::table('times')->where('ground_id','=',$ground_id)->select('T20')->get();
            $timeo = DB::table('times')->where('ground_id','=',$ground_id)->select('oneday')->get();
            $timet = DB::table('times')->where('ground_id','=',$ground_id)->select('test')->get(); 
    //$newgroundregister->save();
    return view ('Admin.newground.newgroundregister',['ground_detail'=>$ground_detail, 'time'=>$time, 'timeo'=>$timeo, 'timet'=>$timet]);
}

public function bookedmatchprintform($id){

    //return $id;

    ($booked = DB::table('groundbooks')->where('id','=',$id)->first());
    echo  $user_id = $booked->user_id;
    $admin_id = $booked->admin_id;
    $ground_id= $booked->ground_id;
    $grounddetail = DB::table('newgroundregister')->where('id','=',$ground_id)->first();
    //echo $grounddetail->groundname;
    if($user_id != NULL){
            $username = DB::table('users')->where('id','=',$user_id)->first();
            echo $username->name;
             return view('Admin.bookedmatchprintform', ['booked'=>$booked , 'grounddetail'=>$grounddetail , 'username'=>$username]);

     }else{
         $adminname = DB::table('admins')->where('id','=',$admin_id)->first();
         echo $adminname->name;
         return view('Admin.bookedmatchprintform', ['booked'=>$booked , 'grounddetail'=>$grounddetail , 'adminname'=>$adminname]);

     }

     
}
/*
    Ticket Booking fixture 
    
    */   
    public function fixtureticket()
    {
        $currentmatch = DB::table('groundbooks')->where('duration', '<=', date('Y-m-d'))->get();
        

        //dd($currentmatch);
         //var_dump(date('d/F/Y'));
    return view('Admin.ticketbooking.matchticket',['currentmatch'=> $currentmatch]);
        
    }
    /*
    *
    *       Show Ground View
    *
    *
    */
public function ticketbooking($id){
     //return $id;
     $teamname = DB::table('groundbooks')->where('id','=',$id)->first();
     //dd($teamname);
     return view('Admin.ticketbooking.ticketbooking',['teamname'=>$teamname]);
    // return view('Admin.ticketbooking');
}
/*
*
*
* Book tickets for match
*
*/

public function tickett($name,$int)
{
    echo $name;
   echo $int;
   $teamname = DB::table('groundbooks')->where('id','=',$int)->first();
   $date =$teamname->start_date;
   $ground_id = $teamname->ground_id;
   $ground = (DB::table('newgroundregister')->where('id','=',$ground_id)->first());
 $ground_name = $ground->groundname;
   ($tickets = DB::table('ticketbooking')->where('match_date','=',$date)->first());
    //$teamname->team_name;
       return view ('Admin.ticketbooking.ticket',["name"=>$name , "teamname"=>$teamname,'ground_name'=>$ground_name,'ground_id'=>$ground_id]);
}
/*
*
*   Ticketbooked details
*
*/
public function ticketbooked(){
    // return 1;
    $ticketbooking = new ticketbooking();
      $name = Auth()->user()->id;
     $user_id =  Auth()->user()->id;
     $ground_id = Input::get('groundid');
      $enclouser_name = Input::get('EN');
      $match_name = Input::get('match');
      $no_of_ticket = Input::get('tickets');
      $match_date = Input::get('matchdate');
     $groundname =Input::get('groundname');

     if($no_of_ticket == NULL){
         return redirect()->back()->withInput();
     }
     $ticketbooking->no_of_ticket = Input::get('tickets');
     $seats =Input::get('seat');
     if($seats == NULL){
         return redirect()->back()->withInput();
     }
     print_r(count($seatss =explode(',',$seats)));
     for($i=0;$i<count($seatss =explode(',',$seats));$i++){
          $seatss[$i].'<br>';
         if(DB::table('ticketbooking')->where('ground_id','=',$ground_id)
         ->where('match_date','=',$match_date)
         ->where('enclouser_name','=',$enclouser_name)
         ->where('seats','=',$seatss[$i])->first()){
            session()->flash('error-mas','These Seats Already Reserve');
            return redirect()->back()->withInput();
            
        }else{
         DB::table('ticketbooking')->insert(['admin_id'=>$user_id, 'groundname'=>$groundname ,'ground_id'=>$ground_id, 'enclouser_name'=>$enclouser_name, 'seats'=>$seatss[$i],'match_name'=>$match_name,'no_of_ticket'=>$no_of_ticket,'match_date'=>$match_date ]);
     }
    }
     
    // $ticketbooking->seats =Input::get('seat');
     
    //  ($users = DB::table('ticketbooking')->select('seats')->get());
    //  echo count($users);
    //  print_r(count($seatss =explode(',',$users)));




    //  for($i=0;$i<count($seatss =explode(',',$users));$i++){
    //     // echo $seatss[$i].'<br>';
    //  }
 //    $user = explode(',',$users);
 //     for($i=0;$i<=count($user);$i++){
 //        print_r ($arr=(($user[$i])));
 //        // print_r(json_encode($arr,true));
 //     }
 //     //dd(DB::table('ticketbooking')->where('seats','=' ,$seats)->first());
     //$ticketbooking->save();
     $lastrecord = DB::table('ticketbooking')->latest()->first();
  //return view('user.ticketbooking.ticketbooked',['lastrecord'=>$lastrecord]);
 }
 /*
    *
    *About
    *
    *
    **/
    
    public function about()
        {
            return view('Admin.aboutus');
        }

        /*
        *
        *Contact Us
        *
        **/
        public function contact()
        {
            return view('Admin.contact');
        }

        /*
        *
        *
        *Update News
        *
        */
        public function editnews($id){
           // return $id;
            ($team = DB::table('postnews')->where('id','=',$id)->get());
            return view('Admin.updatenews',['team'=>$team]);
        }
        /*
        *
        * Updated news
        */
        public function newsupdate($id){
             $id;
           $fixture = Input::get("fixture");
         $news = Input::get("news");
         $des= Input::get("des");
      //  $image  = Input::get("image");
       // echo $userid = Input::get('userid');
         $admin_id = auth()->user()->id;
        DB::table('postnews')->where('id','=',$id)->update(['fixture'=>$fixture, 'news'=>$news, 'des'=>$des, 'admin_id'=>$admin_id]);
        session()->flash('success','Your News is successfully Updated');
        $posts = postnews::all();
        ($ticketbooking = ticketbooking::all()->SUM('no_of_ticket'));
        ($groundbooking = groundbooking::all()->count());
        $posts = postnews::paginate(8);
        ($groundbook = DB::table('groundbooks')->where('duration','<',date('Y-m-d'))->orderBy('duration','des')->limit(3)->latest()->get());
        ($user = user::all()->count()); 
       
        return view('Admin.home',['posts'=>$posts, 'groundbook'=>$groundbook, 'user'=>$user , 'ticketbooking'=>$ticketbooking, 'groundbooking'=>$groundbooking]);
        
         }

         public function registeredground(){
             $allground = DB::table('newgroundregister')->get();
             return view('Admin.newground.allgrounds',['allground'=>$allground]);
         }
        public function destory($id){
            info('DEL');
            info($id);
            
            // DB::table('newgroundregister')->where('id',$id)->delete();

            DB::delete('delete from newgroundregister where id = ?',[$id]);
            $allground = DB::table('newgroundregister')->get();
            return view('Admin.newground.allgrounds',['allground'=>$allground]);
        }
        public function destoryUser($id){
            info('DEL');
            info($id);

            // DB::table('newgroundregister')->where('id',$id)->delete();

            DB::delete('delete from users where id = ?',[$id]);
                 ($users = user::paginate(8));
            return view('Admin/user/allusers',['users'=>$users]);
        }
}













