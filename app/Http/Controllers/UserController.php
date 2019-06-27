<?php

namespace App\Http\Controllers;

use App\Http\Requests\teamvalidation;
use App\player;
use App\payment;
use App\team;
use App\groundbooking;
use App\postnews;
use App\newgroundregister;
use Illuminate\Http\Request;
use App\players;
use App\ticketbooking;
use App\livescore;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\playerregister;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\In;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function player(){
        return view('/user.team.playerregister');
    }
  /*
   *
   *
   * Player register  insert the data inti database.....
   *
   *
   * */
  public function groundbooking(playerregister $playerregister){
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
      $team->captain_role = htmlspecialchars(Input::get('playerrole'));
    $player_role = htmlspecialchars(Input::get('playerrole'));
     
    //End player table input....................................................................

     /*$players->teamname = Input::get('teamname');
     $caption_name =Input::get('captainname');
     $player_role = Input::get('playerrole');
     $cnic = Input::get('cnic');
     $user_id =auth()->id();*/

     /*echo $players->playerrole = Input::get('playerrole');
     echo $players->teamname = Input::get('teamname');
     echo $players->caption_name =Input::get('captainname');
     echo $players->playerrole = Input::get('playerrole');
     echo $players->cnic = Input::get('cnic');
     echo $players->user_id =auth()->id();
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
         // echo $players->player_name = $capture_field_vals;
        // echo'<pre>';
         //print_r($capture_field_vals);
         //echo'</pre>';

         $array =  explode(',', $capture_field_vals);
         $countt = count($array);
         //echo $countt;
         for ($x = 0; $x < $countt; $x++) {
             //$y = 'player_name'.$x;
             $playerValue = $array[$x];
             // echo $players->player_name.$x = Input::get($array[$x]);
            //echo( $players->player_name = $playerValue );
                 if($x==0){
                     echo( $players->player_name0 = $playerValue );
                 }elseif ($x==1){
                     echo( $players->player_name1 = $playerValue );
                 }elseif ($x==2){
                     echo( $players->player_name2 = $playerValue );
                 }elseif ($x==3){
                     echo( $players->player_name3 = $playerValue );
                 }elseif ($x==4){
                     echo( $players->player_name4 = $playerValue );
                 }elseif ($x==5){
                     echo( $players->player_name5 = $playerValue );
                 }elseif ($x==6){
                     echo( $players->player_name6 = $playerValue );
                 }elseif ($x==7){f
                     echo( $players->player_name7 = $playerValue );
                 }elseif ($x==8){
                     echo( $players->player_name8 = $playerValue );
                 }elseif ($x==9){
                     echo( $players->player_name9 = $playerValue );
                 }elseif ($x==10){
                     echo( $players->player_name10 = $playerValue );
                 }elseif ($x==11){
                     echo( $players->player_name11 = $playerValue );
                 }elseif ($x==12){
                     echo( $players->player_name12 = $playerValue );
                 }elseif ($x==13){
                     echo( $players->player_name13 = $playerValue );
                 }elseif ($x==14){
                     echo( $players->player_name14 = $playerValue );
                 }elseif ($x==15){
                     echo( $players->player_name15 = $playerValue );
                 }elseif ($x==16){
                     echo( $players->player_name16 = $playerValue );
                 }elseif ($x==17){
                     echo( $players->player_name17 = $playerValue );
                 }
         }
     }*/
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

        echo $playername = $array[$x];
         echo  $playerValue = $array1[$x];

         // echo $players->player_name.$x = Input::get($array[$x]);
         //echo("<li> $players->$y = ".$playerValue." </li>");
     DB::table('players')->insert(
             array('team_id' => $team_id ,'player_name' => $playername , 'playerrole'=>$player_role ,  'player_role' => $playerValue)

     );
     }
    // $team->save();
    // $player->save();
    ($teams = DB::table('teams')->where('id','=',$team_id)->get());
    $players = DB::table('players')->where('team_id','=',$team_id)->get();

     return view('user/booked',['teams'=>$teams,'players'=>$players ]);
    }

 }
 /*
  * End of Player registration form
  *
  * */
  /*
  *
  *     Show Registered Teams
  */
  public function teams(){
      $teams = team::all();
      return view('User.team.teams',['teams'=>$teams]);
  }
  /*
  *
  * Show Team Members
  *
  ***/
  public function showteammember($id){
    $teamid= DB::table('teams')->where('id' ,'=' ,$id)->first();
    //$team=$teamid->user_id;
    $teams = $teamid->id;
    $team_name = $teamid->team_name;
        $team = players::all()->where('team_id' , '=' , $teams);
    $teamname = team::all()->where('id','=', $id);
      return view('User.showteammamber',['team'=>$team, 'teamname'=>$teamname]);
   
   // return $id;
  }
  
  /*
  *
  *     Edit players
  *
  */
  public function edit($id){
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
//         $i=0;
// foreach($playernames as $playername){
//   //      echo $playername->player_role;
//   echo    "<input id='radio1' name='playerstatus[$i]' value='Batsman' type='radio' ";
//   if ($playername->player_role=='Batsman')
//   echo "checked";
//   else echo " "; 
//   echo " />";
//       echo 'Batsman';
//       echo    "<input id='radio1' name='playerstatus[$i]' value='Bowler' type='radio' ";
//   if ($playername->player_role=='Bowler')
//   echo "checked";
//   else echo " "; 
//   echo " />";
//       echo 'Bowler';
//       echo    "<input id='radio1' name='playerstatus[$i]' value='All Rounder' type='radio' ";
//   if ($playername->player_role=='All Rounder')
//   echo "checked";
//   else echo " "; 
//   echo " />";
//       echo 'All Rounder <br>';
// $i++;
//      
   // }
       return view('User.team.editteamplayer',['teamplayer'=>$teamplayer , 'playernames'=>$playernames , 'numberofplayers'=>$numberofplayers,'id'=> $id ]);
  }
/*
*
* Updated teams
*
*/
public function update($id,playerregister $playerregister){

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
    session()->flash('success','Your Team Player is successfully Updated');
      return view('User.showteammamber',['team'=>$team, 'teamname'=>$teamname]);
   
           
    }
    
    /*
     * End of Ground booking form
     *
     * */
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
 *
 * GROUND RREGISTRATION
 * */
    public function groundregistor(){
        $groundname = newgroundregister::all();
       return view('User.groundbook.groundregistration',['groundname'=>$groundname]);
       
    }

    public function groundbooked(teamvalidation $request){

             $groundbook = new groundbooking();

                  /*  $datee1 = htmlspecialchars($_POST["matchdatestart"]);
                    $datee2 =htmlspecialchars($_POST["matchdateend"]);
                    $teamname =htmlspecialchars($_POST["teamname"]);
                    echo $teamname;
                    echo $datee1;
                    echo $datee2;*/
                   // $groundbook->user_id = auth()->id();
                    $team_name = Input::get('teamname');
                    $opponent_teamname = Input::get('secondteam');
                  
                  if($team_name == $opponent_teamname){
                            session()->flash('error-mas' , 'Your team Name and opponent teamname is same');
                            return redirect()->back()->withInput();
                    }else{
                        echo 'ok';
                        //print_r($team=team::all()->where(['team_name','=',$team_name],['team_name','=',$opponent_teamname]));
                        if($team=team::all()->where('team_name','=',$team_name))
                        {
                            //return $team;
                            if($team->isEmpty()) {
                                echo 'empty';
                                session()->flash('error-mas' , 'Your team Name is not registered');
                                return redirect()->back()->withInput();
                            }else{
                                    if($teams = team::all()->where('team_name' , '=' , $opponent_teamname)){
                                        if($teams->isEmpty()){
                                            echo 'empty';
                                            session()->flash('error-mas' , 'Your opponent teamname is not registered');
                                            return redirect()->back()->withInput();
                                        }else{
                                            echo $team_name = Input::get('teamname');
                                            echo $opponent_teamname = Input::get('secondteam');
                                            echo $address = Input::get('address');
                                            echo $city = Input::get('city');
                                            echo $cnic = Input::get('cnic');
                                            echo $province = Input::get('province');
                                            $payment = 'non_pay';
                                              echo $state = Input::get('state');
                                              $user_id = auth()->id();
                                             echo $status = auth()->user()->status;
                                             echo $day=input::get('days');
                                             $days= 10*$day;
                                                    if(isset($_POST['overs'])){
                                                        echo $overs = $_POST['overs'];
                                                    }
                                              echo $groundbook->cnic = Input::get('cnic') ;
                                              echo $start_date = Input::get('matchdatestart');
                                              echo $end_date = Input::get('matchdateend');
                                              
                                              if(isset($_POST['groundname'])){
                                                echo $ground_id = $_POST['groundname'];
                                            }
                                             if(isset($_POST['time20'])){
                                                echo $time = $_POST['time20'];
                                            }
                                             
                                            // Specify the start date. This date can be any English textual format  
                                              $date_from = $start_date;   
                                                $date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
                                              echo '<br>';
                                              // Specify the end date. This date can be any English textual format  
                                              $date_to = $end_date;  
                                              $date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
                                            //echo  date("Y-m-d H:i:s", 1532826734); 
                                            echo '<br>';
                                            echo $date_to - $date_from;
                                            echo '<br>';

                                        //Diff In Hours
                                        //     $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $start_date);
                                        //     $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $end_date);
                                        //  echo   $diff_in_hours = $to->diffInDays($from);
                                        //  echo '<br>';
                                        //  echo $diff_in_hour = $to->diffInSeconds($from);
                                        //  print_r($diff_in_hours);
                                        //      //End 
                                              
                                             // Loop from the start date to end date and output all dates inbetween  
                                              for ($i=$date_from; $i<=$date_to; $i+=86400) {  
                                                echo '<br>';
                                                //echo date("Y-m-d H:i:s", 1533164789); 
                                                  echo($duration=date('Y-m-d', $i));
                                                        
                                                  //$date_from+= $diff_in_hour; 
                                                 //   $array = explode(',',$duration);
                                                //     print_r($array);
                                                        if(DB::table('groundbooks')->where('duration','=',$duration)->where('time','=',$time)->where('ground_id','=',$ground_id)->first()){
                                                        session()->flash('error-mas','Your date and time is aleady book'.$duration .'/' .$time );
                                                        return Redirect()->back()->withInput();
                                                        }else{
                                                        DB::table('groundbooks')->insert(
                                                                  array('user_id' => $user_id ,'payment'=>$payment ,'team_name' => $team_name , 'opponent_teamname'=>$opponent_teamname ,'address' => $address ,'city'=>$city ,'state'=>$state , 'province'=>$province ,'status'=>$status,'ground_id'=>$ground_id, 'time'=>$time, 'cnic'=>$cnic, 'overs'=>$overs, 'start_date'=>$start_date,'end_date'=>$end_date,'duration'=> $duration)
                                                        );
                                                         session()->flash('success','Your Ground is Book');
                                                        }
                                                    }
                                                    
                                                    $lastrecord =DB::table('groundbooks')->latest()->first();
                                                    ($name = DB::table('users')->where('id','=', auth()->user()->id)->first());
                                                    //$lastrecord=groundbooking::all()->orderBy('id','des')->first();
                                                    $groundrecord = DB::table('newgroundregister')->where('id','=',$ground_id)->first();
                                                    return view('user.groundbook.payment',['lastrecord'=>$lastrecord , 'days'=>$days,'groundrecord'=>$groundrecord, 'name'=>$name]);
                                              // $groundbook->save();
                                           // return view('user.groundbooking');
                                        }
                                    }
                            }
                    }else{
                        return redirect()->back()->withInput();
                    }
                }
                 // return $teams = team::all()->where('team_name','=',$team_name);


       // return view ('User.booked',['teams'=>$teams]);
    }

    /*
 *
 * END GROUND RREGISTRATION
 * */
/*
*
*
*   Pay For Ground
*
*/
public function payment(){
    return view('User.groundbook.payment');
}
/*
*   PAYMENT
*
*/
public function pay(Request $request)
{
    //dd($request->all());
    $payment = new payment;
    echo $payment->payment_name= Input::get('li_0_name');
   '<br>';
    echo $payment->sid= Input::get('sid');
    '<br>';
    echo $payment->key= Input::get('key');
    '<br>';
  //  echo $payment->order_number= Input::get('order_number');
    '<br>';
    echo $payment->invoice_id= Input::get('invoice_id');
    '<br>';
    echo $payment->pay_id= Input::get('li_0_product_id');
    $pay_id= Input::get('li_0_product_id');
    '<br>';
    //echo $payment->phone= Input::get('phone');
    '<br>';
    echo $payment->card_holder_name= Input::get('card_holder_name');
    $payment->save();
    $payment='pay';
    DB::table('groundbooks')->where('id','=',  $pay_id)->update(['payment'=>$payment]);
    
   ( $lastrecord =DB::table('groundbooks')->latest()->first());
   $ground_id =$lastrecord->ground_id;
    ($name = DB::table('users')->where('id','=', auth()->user()->id)->first());
    //$lastrecord=groundbooking::all()->orderBy('id','des')->first();
    $groundrecord = DB::table('newgroundregister')->where('id','=',$ground_id)->first();
     return view('user.groundbook.payground',['lastrecord'=>$lastrecord , 'groundrecord'=>$groundrecord, 'name'=>$name]);
}
/*

    End Ground Registration With Payment

*/
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /*public function userindex()
        {
            return view('/home');playerregister
        }*/

/*
 *
 * NewsNotifications
 *
 */
    public function newsnotification(){
        $posts = postnews::paginate(10);
        return view('/user.news',['posts'=>$posts]);

    }
    //////////////////////////////Fixture in UserController1//////////////////////////////
    /*
    *
    * Fixtures
    *
    */
   /* public function Fixture(){

        $groundbook = \App\groundbooking::all();
        return view('User.fixture',['groundbook'=>$groundbook]);
    }  */
/*
*
*
*Show Fixture Matches
*
**/
/* public function showfixturematch($id)
{           $id;
            $fixture = DB::table('groundbooks')->where('id','=', $id)->first();
             $team_name = $fixture->team_name;
             $opponent_teamname = $fixture->opponent_teamname;
             /*
             First team id and data
             *
            
             $teamid = DB::table('teams')->where('team_name','=',$team_name)->first();
             //get team id
              $firstteamid = $teamid->id;
             $firstteam = players::all()->where('team_id','=',$firstteamid);
             $teamname = team::all()->where('id','=',$firstteamid);
           /*
           Second team id and data
           
           *
             $teamid = DB::table('teams')->where('team_name','=' ,$opponent_teamname)->first();
            //get team id
              $opponentteamid = $teamid->id;
               $opponentteam = players::all()->where('team_id','=',$opponentteamid );
             $secondteam= team::all()->where('id','=',$opponentteamid );
            return view('User.showfixturematch',['firstteam'=>$firstteam ,'teamname'=>$teamname, 'opponentteam'=>$opponentteam , 'secondteam'=>$secondteam]);        
            //return $id;

}*/
    
 //////////////////////////////End Fixture in UserController1//////////////////////////////
  //////////////////////////////TicketBooking With Payment //////////////////////////////
/*
    Ticket Booking fixture 
    
    */   
    public function fixtureticket()
    {
        $currentmatch = DB::table('groundbooks')->where('duration', '>=', date('Y-m-d'))->get();
        

        //dd($currentmatch);
         //var_dump(date('d/F/Y'));
    return view('user.ticketbook.ticketbooking',['currentmatch'=> $currentmatch]);
        
    }
 /*
    Ticket Booking 
    
    */
    public function ticketbookingground($id){
        //return $id;
        $teamname = DB::table('groundbooks')->where('id','=',$id)->first();
        //dd($teamname);
        return view('user.ticketbook.ticketbookingground',['teamname'=>$teamname]);
    }

   /* public function ticket($name,$id){
        
        
        echo $name;
        echo $id;
        $teamname = DB::table('groundbooks')->where('id','=',$id)->first();
        //echo Input::get('teamid');
        return view('User.tickett',['name'=>$name,'teamname'=>$teamname]);

       // echo $name = $_GET['name'];
    }*/

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
           return view ('User.ticketbook.tickett',["name"=>$name , "teamname"=>$teamname,'ground_name'=>$ground_name,'ground_id'=>$ground_id]);
    }
    public function ticketbook($id)
    {
        return $id;
        # code...
    }

    // Get Ticket Detail 

    public function ticketbooked(){
       // return 1;
       $ticketbooking = new ticketbooking();
       $name = Auth()->user()->id;
      $user_id =  Auth()->user()->id;
       $random = uniqid();
      $ground_id = Input::get('groundid');
       $enclouser_name = Input::get('EN');
       $match_name = Input::get('match');
       $no_of_ticket = Input::get('tickets');
       $match_date = Input::get('matchdate');
      $groundname =Input::get('groundname');
    echo   $payment = 'No-pay';
      
 
      if($no_of_ticket == NULL){
          return redirect()->back()->withInput();
      }
      $ticketbooking->no_of_ticket = Input::get('tickets');
       $money = 10*Input::get('tickets');
      $seats =Input::get('seat');
      if($seats == NULL){
          return redirect()->back()->withInput();
      }
      print_r(count($seatss =explode(',',$seats)));
      for($i=0;$i<count($seatss =explode(',',$seats));$i++){
           ($seatss[$i]).'<br>';
          if(DB::table('ticketbooking')->where('ground_id','=',$ground_id)
          ->where('match_date','=',$match_date)
          ->where('payment','=', 'pay')
          ->where('enclouser_name','=',$enclouser_name)
          ->where('seats','=',$seatss[$i])->first()){
             session()->flash('error-mas','These Seats Already Reserve');
             return redirect()->back()->withInput();
             
         }else{
          DB::table('ticketbooking')->insert(['user_id'=>$user_id, 'payment'=>$payment, 'unique_number'=>$random, 'groundname'=>$groundname ,'ground_id'=>$ground_id, 'enclouser_name'=>$enclouser_name, 'seats'=>$seatss[$i],'match_name'=>$match_name,'no_of_ticket'=>$no_of_ticket,'match_date'=>$match_date ]);
      }
     }
    ($groundaddress = newgroundregister::find($ground_id)->first());
    '<br>';
      ($lastrecord = DB::table('ticketbooking')->latest()->first());
         ($seatsss = DB::table('ticketbooking')->select('seats')->where('unique_number','=',$random)->get()); 
           
         return view('user.ticketbook.ticketbooked',['lastrecord'=>$lastrecord ,'money'=>$money, 'groundaddress'=>$groundaddress,'seats'=>$seatsss]);
  }
   
  public function ticketpay(Request $request){

        //dd($request->all());
        $payment = new payment;
    echo $payment->payment_name= Input::get('li_0_name');
   '<br>';
    echo $payment->sid= Input::get('sid');
    '<br>';
    echo $payment->key= Input::get('key');
    '<br>';
  //  echo $payment->order_number= Input::get('order_number');
    '<br>';
    echo $payment->invoice_id= Input::get('invoice_id');
    '<br>';
    echo $payment->pay_id= Input::get('li_0_product_id');
    $pay_id= Input::get('li_0_product_id');
    '<br>';
    //echo $payment->phone= Input::get('phone');
    '<br>';
    echo $payment->card_holder_name= Input::get('card_holder_name');
    $payment->save();
    $payment='pay';
    DB::table('ticketbooking')->where('unique_number','=',  $pay_id)->update(['payment'=>$payment]);
    
   ( $lastrecord =DB::table('ticketbooking')->latest()->first());
   ($seats = DB::table('ticketbooking')->select('seats')->where('unique_number','=',$pay_id)->get()); 

   $ground_id =$lastrecord->ground_id;
    ($name = DB::table('users')->where('id','=', auth()->user()->id)->first());
    //$lastrecord=groundbooking::all()->orderBy('id','des')->first();
    ($groundaddress = newgroundregister::find($ground_id)->first());
     return view('user.ticketbook.payticket',['lastrecord'=>$lastrecord , 'seats'=>$seats, 'groundaddress'=>$groundaddress, 'name'=>$name]);

  }

    //////////////////////////////End TicketBooking With Payment //////////////////////////////

//    public function image(){
//         return view('user.image');
//     }
//     public function imageupload(Request $request){
       
//       echo   $request->get('ha');
//       echo  $file = $request->file('image');
//       echo 'File Name: '.$file->getClientOriginalName();
//       echo '<br>';
//       // if($request->hasFile('image')){
//         //  echo $image = $request->file('image');
//         //  //return $image->getClientOriginalName();
//         //  return 'hello';
//         // }
        
//     }

//////////////////////////////Schedule Matches  /////////////////////////////

    /*

Schedule By lastmatch

*/
public function schedulelastmatch(){
    $lastmatch = DB::table('groundbooks')->where('duration', '<' ,date('Y-m-d'))->get();
    
        return view('user.schedule.schedulelastmatch',['lastmatch'=>$lastmatch]);
    }
    /*
    
    Schedule By currentmatch
    
    */
    public function schedulecurrentmatch(){
        $currentmatch = DB::table('groundbooks')->where('duration', '=', date('Y-m-d'))->get();
        //dd($currentmatch);
         //var_dump(date('d/F/Y'));
    return view('user.schedule.schedulecurrentmatch',['currentmatch'=> $currentmatch]);
    }
    /*
    
    Schedule By nextmatch
    
    */
    public function schedulenextmatch(){
        $nextmatch = DB::table('groundbooks')->where('duration', '>' ,date('Y-m-d'))->get();
        return view('user.schedule.schedulenextmatch',['nextmatch' => $nextmatch]);
    }

    //////////////////////////////Schedule Matches  /////////////////////////////

///////////////////////////////////////////////////Start Search//////////////////////////////////

///////////////////////////////////////////////////Search By Team Name//////////////////////////////////
    /*
   Search by teamname view

 */
public function searchbyteamname(){
    return view('user.search.search');
}
/*  
Search by teamname


*/
public function search(Request $request)
{
 
if($request->ajax()) 
{
    $output="";
    if(empty($request->search)){
        return 'Please Enter Team Name';
    }else{
 
    $products=DB::table('teams')->where('team_name','LIKE','%'.$request->search."%")->get();
     
    if($products)
     
    {
        //return view('test',['product'=>$product]);
     
    foreach ($products as $key => $product) {
     
    $output.='<tr>'.
     
    '<td>'.$product->id.'</td>'.
     
    '<td>'.$product->team_name.'</td>'.
     
    '<td>'.$product->captain_name.'</td>'.
     
    '<td>'.$product->cnic.'</td>'.
   
    '<td>'.'<a href='.'show'.$product->id.' >'.'Get player Names'.'</a>'.'</td>'.

    '<td>'.'<a href='.'match'.$product->id.' >'.'Get Matches'.'</a>'.'</td>'.
   
    '</tr>';
     
    
    }
  }
    }
  return Response($output);

}

}
/*

Search By date

*/
public function searchbydate(){
    return view('User.search.searchbydate');
}

public function datee(){
    return 'hello';
}

public function searchbydatee(Request $request)
{
 
if($request->ajax()) 
{
    $output="";
    if(empty($request->search)){
        return 'Please Enter Team Name';
    }else{
 
    ($products=DB::table('groundbooks')->where('duration','LIKE','%'.$request->search."%")->get());
     
    if($products)
     
    {
        //return view('test',['product'=>$product]);
     
    foreach ($products as $key => $product) {
     
    $output.='<tr>'.
     
    '<td>'.$product->id.'</td>'.
     
    '<td>'.$product->team_name.'</td>'.
     
    '<td>'.$product->opponent_teamname.'</td>'.
     
     '<td>'.$product->city.'</td>'.
   
     '<td>'.'<a href='.'fixture'.$product->id.' >'.'Get player Names'.'</a>'.'</td>'.

     '<td>'.'<a href='.'matchbydate'.$product->id.' >'.'Get Matches'.'</a>'.'</td>'.

     '<td>'.'<a href='.'match'.$product->id.' >'.'Get Matches'.'</a>'.'</td>'.
    '</tr>';
     
    
    }
  }else{
      return 'There is no such result';
  }
    }
  return Response($output);

}

}
public function matchbydate($id){
   // return $id;
    $team = DB::table('groundbooks')->select('team_name','opponent_teamname')->where('id','=',$id)->first();
    $firstname = $team->team_name;
    $second = $team->opponent_teamname;
    $groundbooks = DB::table('groundbooks')->where('team_name','=',$firstname)->where('opponent_teamname','=',$second)->orderBy('created_at','des')->get();
    return view('user.search.matchbydate',['groundbooks'=>$groundbooks]);

}


// public function searchbydatee(Request $request){
//     //return "hello";
//     if($request->ajax()) 
//     {
//         $output="";
//         if(empty($request->search)){
//             return 'Please Enter Team Name';
//         }else{
//               //  echo $request->search;
//        // var_dump($products=DB::table('groundbooks')->where('duration','=',$request->search)->get());
//             //$products=DB::table('groundbooks')->where('duration','LIKE','%'.$request->search."%")->get());
//             $products=DB::table('teams')->where('team_name','LIKE','%'.$request->search."%")->get();

//         if($products)
         
//         {
//             //return view('test',['product'=>$product]);
         
//         foreach ($products as $key => $product) {
         
//         $output.='<tr>'.
         
//         '<td>'.$product->id.'</td>'.
         
//         '<td>'.$product->team_name.'</td>'.
         
//         '<td>'.$product->opponent_teamname.'</td>'.
         
//         '<td>'.$product->cnic.'</td>'.
       
//         '<td>'.'<a href='.'show'.$product->id.' >'.'Get player Names'.'</a>'.'</td>'.
    
//         '<td>'.'<a href='.'match'.$product->id.' >'.'Get Matches'.'</a>'.'</td>'.
       
//         '</tr>';
         
        
//         }
//       }
//         }
//       return Response($output);
    
//     }
    
//     }

///////////////////////////////////////////////////Search By Ground Name//////////////////////////////////

public function searchbygroundname(){
    return view ('user.search.searchbygroundname');
}

public function grounds(Request $request){
    if($request->ajax()) 
{
    $output="";
    if(empty($request->search)){
        return 'Please Enter Team Name';
    }else{
 
    $products=DB::table('newgroundregister')->where('groundname','LIKE','%'.$request->search."%")->get();
     
    if($products)
     
    {
     
    foreach ($products as $key => $product) {
     
    $output.='<tr>'.
     
    '<td>'.$product->id.'</td>'.
     
    '<td>'.$product->groundname.'</td>'.
     
    '<td>'.$product->ownername.'</td>'.
     
    '<td>'.$product->address.'</td>'.
   
    '<td>'.'<a href='.'showgroundmatches'.$product->id.' >'.'Get Team Names'.'</a>'.'</td>'.

    '<td>'.'<a href='.'match'.$product->id.' >'.'Get Matches'.'</a>'.'</td>'.
   
    '</tr>';
     
    
  }
  }
    }
  return Response($output);

}

}
 
///////////////////////////////////////////////////End Search//////////////////////////////////

/*

Get Ground Matches
*/
public function showgroundmatches(){
    
}
/*


Get Team Players


*/
public function show($id){

   // return $id;
    ($teamid= DB::table('teams')->where('id' ,'=' ,$id)->first());
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
   return view('User.showbyteamname',['team'=>$team, 'teamname'=>$teamname]);
   //'<pre>';
  //return $team;
   //return $team_name;
  //'</pre>';
}
/*

Get Fixture

*/

public function showmatch($id){
    //return $id;
    ($teamid= DB::table('teams')->where('id' ,'=' ,$id)->first());
   //$team=$teamid->user_id;
   $teams = $teamid->id;
   $i=0;
   $team_name = $teamid->team_name;
   ($groundbook = DB::table('groundbooks')->where('team_name','=',$team_name)->orderBy('created_at','des')->get());
        foreach($groundbook as $ground){
             $ground_id = $ground->ground_id.'<br>';
            ($groundname = DB::table('newgroundregister')->select("groundname","address")->where('id','=',$ground_id)->get());
           foreach($groundname as $gn)
           {
            $gb=$gn->groundname;
            $ga =$gn->address;
           return view('User.showmatch',['groundbook'=>$groundbook,'gb'=>$gb,'ga'=>$ga]);
              //echo  $gn->groundname;
            }

        //     echo $groundname[0];
        //     ($groundbook[$i]["name_ground"] = $groundname[0]);
        // $i++;
        }

        
   $team = players::all()->where('team_id' , '=' , $teams);
   $teamname = team::all()->where('id','=', $id);
//return view('User.showmatch',['groundbook'=>$groundbook]);
   //'<pre>';
  //return $team;
   //return $team_name;
  //'</pre>';
}
/*

Get Print for00m

*/
public function bookedmatchprintform($id){

    //return $id;

    ($booked = DB::table('groundbooks')->where('id','=',$id)->first());
      $user_id = $booked->user_id;
    $admin_id = $booked->admin_id;
    $ground_id= $booked->ground_id;
    $grounddetail = DB::table('newgroundregister')->where('id','=',$ground_id)->first();
    //echo $grounddetail->groundname;
    if($user_id != NULL){
            $username = DB::table('users')->where('id','=',$user_id)->first();
             $username->name;
             return view('user.bookedmatchprintform', ['booked'=>$booked , 'grounddetail'=>$grounddetail , 'username'=>$username]);

     }else{
         $adminname = DB::table('admins')->where('id','=',$admin_id)->first();
          $adminname->name;
         return view('user.bookedmatchprintform', ['booked'=>$booked , 'grounddetail'=>$grounddetail , 'adminname'=>$adminname]);

     }

     
}
///////////////////////////////////////////////////End Search By Team Name//////////////////////////////////

/////////////////////////////////Live Score Board///////////////////////////////////
 
public function livescore(){
   ($currentmatch = DB::table('groundbooks')->where('duration', '=', date('Y-m-d'))->get());

    return view ('User.livescore.livescorefixture',['currentmatch'=>$currentmatch]);
    
}

// public function getscore($id){
//     ($currentmatch=DB::table('groundbooks')->where('id','=',$id)->first());
//     ($livescore=DB::table('livescores')->where('match_id','=',$id)->orderBy('created_at', 'desc')->first()); 

//                 return view('User.livescore.livescoreboard',['currentmatch'=>$currentmatch , 'player1run'=>$player1run, 'player2run'=>$player2run, 'bawlernamerun'=>$bawlernamerun,'livescore'=>$livescore , 'totalovers'=>$totalovers]);

// }
public function livescoreboard($id)
{
    ($currentmatch=DB::table('groundbooks')->where('id','=',$id)->first());
     ($livescore=DB::table('livescores')->where('match_id','=',$id)->orderBy('created_at', 'desc')->first()); 
   if($livescore == NULL){
    return 'No Score ';
    }else{
            $bowlername = $livescore->bowler;
                $player1 = $livescore->player1;
                $player2 = $livescore->player2;

                $player1run = DB::table('livescores')->where('player1','=',$player1)->where('match_id','=',$id)->SUM('run1');
                $player2run = DB::table('livescores')->where('player2','=',$player2)->where('match_id','=',$id)->SUM('run2');

                $bawlernamerun = DB::table('livescores')->where('bowler','=',$bowlername)->where('match_id','=',$id)->SUM('run1','run2');
                ($sumball = DB::table('livescores')->where('match_id','=',$id)->SUM('no_of_ball'));
                    $totalovers =  $sumball/6;
                
                return view('User.livescore.livescoreboard',['currentmatch'=>$currentmatch , 'player1run'=>$player1run, 'player2run'=>$player2run, 'bawlernamerun'=>$bawlernamerun,'livescore'=>$livescore , 'totalovers'=>$totalovers]);
        }
}

/////////////////////////////////End Live Score Board///////////////////////////////////
 
/////////////////////////////////Ground Booked///////////////////////////////////

public function groundbook(){
    $groundbooked =DB::table('groundbooks')
    ->join('newgroundregister','newgroundregister.id','=','groundbooks.ground_id')
    ->where('user_id','=',Auth()->user()->id)
    ->where('payment','=','pay')
    ->get();
return view ('user.groundbook.groundbooked',['groundbooked'=>$groundbooked]);
}


/////////////////////////////////Ticket Booked///////////////////////////////////


public function ticketbookedd(){
    $groundbooked =DB::table('ticketbooking')
    ->join('newgroundregister','newgroundregister.id','=','ticketbooking.ground_id')
    ->where('user_id','=',Auth()->user()->id)
    ->where('payment','=','pay')
    ->get();
    return view ('user.ticketbook.bookedticket',['groundbooked'=>$groundbooked]);
    }
}



