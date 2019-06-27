@extends('layouts.app')
@section('content')
<div class="container" style="width: 100%">
        <div class="row">
            <div class="col-lg-8 col-md-8 colsm-8 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Player Name</div>
                    <div class="panel-body">
                        <form method="post" action="{{'teamupdate'.$id}}" class="form-horizontal" onsubmit="myfunction()">
                           
                                                       <input type="hidden" name="_token" value="{{csrf_token()}}" >
            {{Auth::user()->id}}
                            <div class="form-group {{$errors->has('team_name')? 'has-error':''}}">
                                    <label class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label" for="team_name"> Team Name: </label>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control tooltip-test" title="Team Name" id="team_name" value="{{$teamplayer->team_name}}"name="teamname" required>
                                        @if ($errors->has('team_name'))
                                            <span class="help-block animated shake">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                            <div class="form-group {{$errors->has('captainname')? 'has-error':''}}">
                                <label class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label" for="captain"> Captain Name: </label>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                    <input type="text" class="form-control tooltip-test" title="Captain Name"  value="{{$teamplayer->captain_name}}" id="captain" name="captainname" >
                                    @if ($errors->has('captainname'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('captainname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                <div class="form-group {{$errors->has('playerrole')? 'has-error':''}}">
                                <label class='radio-inline'>Players Role </label>
                                
                                <label class='radio-inline'> <input id='radio1' name='playerrole' value='Batsman' type='radio'{{ $teamplayer->captain_role == 'Batsman' ? 'checked' : '' }} > Batsman </label>
                                
                                <label class='radio-inline'> <input id='radio2' name='playerrole' value='Bowler' type='radio' {{ $teamplayer->captain_role == 'Bowler' ? 'checked' : '' }} > Bowler </label>
                                
                                <label class='radio-inline'> <input id='radio3' name='playerrole' value='All Rounder' type='radio' {{ $teamplayer->captain_role == 'All Rounder' ? 'checked' : '' }} > All Rounder </label>
                                
                                @if ($errors->has('playerrole'))
                                    <span class="help-block animated shake">
                                        <strong>{{ $errors->first('playerrole') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group {{$errors->has('cnic')? 'has-error':''}}">
                                <label class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label" for="cnic"> Cnic No: </label>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                    <input type="text" class="form-control tooltip-test" title="Cnic No" value="{{$teamplayer->cnic }}" id="cnic" name="cnic" >
                                    @if ($errors->has('cnic'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('cnic') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                             <div class="form-group {{$errors->has('sampleinlineradio')? 'has-error':''}}">
                                   
                                   @if($numberofplayers == 11)
                                    <label class="radio-inline">Number of Players</label>
                                    <label class="radio-inline">
                                        <input id="radio1" name="sampleinlineradio" value="11" type="radio" {{ $numberofplayers == '11' ? 'checked' : '' }}>
                                        11 Players</label>
                                          <label class="radio-inline">
                                        <input id="radio2" name="sampleinlineradio" value="16" type="radio"  disabled{{ $numberofplayers == '16' ? 'checked' : '' }}>
                                        16 Players</label>
                                    <label class="radio-inline">
                                        <input id="radio3" name="sampleinlineradio" value="18" type="radio" disabled{{ $numberofplayers == '18' ? 'checked' : '' }}>
                                        18 Players</label>
                                        @endif

                                        @if($numberofplayers == 16)
                                        <label class="radio-inline">Number of Players</label>
                                    <label class="radio-inline">
                                        <input id="radio1" name="sampleinlineradio" value="11" type="radio" disabled>
                                        11 Players</label>
                                          <label class="radio-inline">
                                        <input id="radio2" name="sampleinlineradio" value="16" type="radio"  {{ $numberofplayers == '16' ? 'checked' : '' }}>
                                        16 Players</label>
                                    <label class="radio-inline">
                                        <input id="radio3" name="sampleinlineradio" value="18" type="radio" disabled{{ $numberofplayers == '18' ? 'checked' : '' }}>
                                        18 Players</label>
                                        @endif

                                   @if($numberofplayers == 18)
                                        <label class="radio-inline">Number of Players</label>
                                    <label class="radio-inline">
                                        <input id="radio1" name="sampleinlineradio" value="11" type="radio" disabled{{ $numberofplayers == '11' ? 'checked' : '' }}>
                                        11 Players</label>
                                          <label class="radio-inline">
                                        <input id="radio2" name="sampleinlineradio" value="16" type="radio"  disabled{{ $numberofplayers == '16' ? 'checked' : '' }}>
                                        16 Players</label>
                                    <label class="radio-inline">
                                        <input id="radio3" name="sampleinlineradio" value="18" type="radio" {{ $numberofplayers == '18' ? 'checked' : '' }}>
                                        18 Players</label>
                                        @endif
                                @if ($errors->has('sampleinlineradio'))
                                    <span class="help-block animated shake">
                                        <strong>{{ $errors->first('sampleinlineradio') }}</strong>
                                    </span>
                                @endif
                            </div>        
                            @php
  
                           $i=0;
                           
foreach($playernames as $playername){
  //      echo $playername->player_role;

  echo "<div class='form-group'><label class='col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label' for='player'> Player Name: </label> <div class='col-md-6 col-lg-6 col-sm-6 col-xs-6'><input type='text' class='form-control tooltip-test' title='Player Name' id='player' name='player[]' value= '$playername->player_name' > </div> </div> <br><br>";
 echo "<input type='hidden' value=$playername->id  name='id[]'>" ;
   echo    "<input id='radio1' name='playerstatus[$i]' value='Batsman' type='radio' ";
  if ($playername->player_role=='Batsman')
  echo "checked";
  else echo " "; 
  echo " />";
  
      echo 'Batsman';
      echo    "<input id='radio1' name='playerstatus[$i]' value='Bowler' type='radio' ";
  if ($playername->player_role=='Bowler')
  echo "checked";
  else echo " "; 
  echo " />";
      echo 'Bowler';
      echo    "<input id='radio1' name='playerstatus[$i]' value='All Rounder' type='radio' ";
  if ($playername->player_role=='All Rounder')
  echo "checked";
  else echo " "; 
  echo " />";
      echo 'All Rounder <br>';

$i++;
}
@endphp                                          
                            <div id="fields"></div>
                            
                            <input type="submit" value="Edit" class="btn btn-success" id="formvalue">


                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix col-xs-12"></div>

        </div>
    </div>
    
            
<script>
        
    $(window).scroll(function() {
        sessionStorage.scrollTop = $(this).scrollTop(

        );
    });

    $(document).ready(function() {
        if (sessionStorage.scrollTop != "undefined") {
            $(window).scrollTop(sessionStorage.scrollTop);
        }
    });






</script>
@endsection