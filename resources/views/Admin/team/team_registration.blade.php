@extends('layouts.app')
@section('content')
 <div class="container" style="width: 100%">
        <div class="row">
            <div class="col-lg-8 col-md-8 colsm-8 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Player Name</div>
                    <div class="panel-body">
                        <form method="post" action="teamregister" class="form-horizontal" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            {{Auth::user()->id}}
                            <div class="form-group {{$errors->has('team_name')? 'has-error':''}}">
                                    <label class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label" for="team_name"> Team Name: </label>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                        <input type="text" class="form-control tooltip-test" title="Team Name" id="team_name" value="{{ old('teamname') }}"name="teamname" >
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
                                    <input type="text" class="form-control tooltip-test" title="Captain Name"  value="{{ old('captainname') }}" id="captain" name="captainname" >
                                    @if ($errors->has('captainname'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('captainname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                <div class="form-group {{$errors->has('playerrole')? 'has-error':''}}">
                                <label class='radio-inline'>Players Role </label>
                                <label class='radio-inline'> <input id='radio1' name='playerrole' value='Batsman' type='radio'> Batsman </label>
                                <label class='radio-inline'> <input id='radio2' name='playerrole' value='Bowler' type='radio'> Bowler </label>
                                <label class='radio-inline'> <input id='radio3' name='playerrole' value='All Rounder' type='radio'> All Rounder </label>
                                @if ($errors->has('playerrole'))
                                    <span class="help-block animated shake">
                                        <strong>{{ $errors->first('playerrole') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group {{$errors->has('cnic')? 'has-error':''}}">
                                <label class="col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label" for="cnic"> Cnic No: </label>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                    <input type="text" class="form-control tooltip-test" title="Cnic No" value="{{ old('cnic') }}" id="cnic" name="cnic" >
                                    @if ($errors->has('cnic'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('cnic') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                             <div class="form-group {{$errors->has('sampleinlineradio')? 'has-error':''}}">
                                    <label class="radio-inline">Number of Players</label>
                                    <label class="radio-inline">
                                        <input id="radio1" name="sampleinlineradio" value="11" type="radio">
                                         11 Players</label>
                                    <label class="radio-inline">
                                        <input id="radio2" name="sampleinlineradio" value="16" type="radio">
                                        16 Players</label>
                                    <label class="radio-inline">
                                        <input id="radio3" name="sampleinlineradio" value="18" type="radio">
                                        18 Players</label>
                                @if ($errors->has('sampleinlineradio'))
                                    <span class="help-block animated shake">
                                        <strong>{{ $errors->first('sampleinlineradio') }}</strong>
                                    </span>
                                @endif
                            </div>

                          
                            <div id="fields"></div>
                            <input type="submit" value="submit" class="btn btn-success" id="formvalue">


                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix col-xs-12"></div>

        </div>
    </div>
<script>

    function myfunction() {
        alert('Are you sure?');

    }

   /* function getvalues(){
        var player = document.getElementsByName('player[]');
        for (var i = 0; i <player.length; i++) {
            var inp = player[i];
           alert("player name["+ i +"].value="+inp.value);
        }
        var pstatus = document.getElementsByName('playerstatus[]');
        for(var j=0 ; j<pstatus.length; j++){
            var status = pstatus[j];
            ("Player status["+ j +"].value=" + status.value);
        }

    }*/
      $(document).ready(function () {
        $("input[name='sampleinlineradio']").click(function() {
           var value = $("input[name='sampleinlineradio']:checked").val();
           // alert(value);
            if(value ==11) {
                $('#fields').empty();
                $('#fields').text("please enter" + value +"player name");

                for(var i=0;  i<value; i++){
                    $('#fields').append("<div class='form-group'><label class='col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label' for='player'> Player Name " + i + " : </label> <div class='col-md-6 col-lg-6 col-sm-6 col-xs-6'><input type='text' class='form-control tooltip-test' title='Player Name' id='player' name='player[]"+ i +"' > </div> </div> <br><br> " +
                                 "<div class='form-group'><label class='radio-inline'>Players Role </label> <label class='radio-inline'> <input id='radio1' name='playerstatus[]" + i + "' value='Batsman' type='radio'> Batsman </label> <label class='radio-inline'> <input id='radio2' name='playerstatus[]" + i + "' value='Bowler' type='radio'> Bowler </label> <label class='radio-inline'> <input id='radio3' name='playerstatus[]" + i + "' value='All Rounder' type='radio'> All Rounder </label></div> ")

                            //console.log(i);
                            //$('#fields').text(i);

                }

            }
            if(value == 16){
                $('#fields').empty();
                $('#fields').text("please enter" + value + "player name");
                for(var i=0;  i<value; i++) {
                    $('#fields').append("<div class='form-group'><label class='col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label' for='player'> Player Name " + i + " : </label> <div class='col-md-6 col-lg-6 col-sm-6 col-xs-6'><input type='text' class='form-control tooltip-test' title='Player Name' id='player' name='player[]"+ i +"' > </div> </div> <br><br> " +
                            "<div class='form-group'><label class='radio-inline'>Players Role </label> <label class='radio-inline'> <input id='radio1' name='playerstatus[]" + i + "' value='Batsman' type='radio'> Batsman </label> <label class='radio-inline'> <input id='radio2' name='playerstatus[]" + i + "' value='Bowler' type='radio'> Bowler </label> <label class='radio-inline'> <input id='radio3' name='playerstatus[]" + i + "' value='All Rounder' type='radio'> All Rounder </label></div> ")

                }
            }

            if(value == 18){
                $('#fields').empty();
                $('#fields').text("please enter" + value + "player name");
                for(var i=0;  i<value; i++) {
                    $('#fields').append("<div class='form-group'><label class='col-md-4 col-lg-4 col-sm-4 col-xs-4 control-label' for='player'> Player Name " + i + " : </label> <div class='col-md-6 col-lg-6 col-sm-6 col-xs-6'><input type='text' class='form-control tooltip-test' title='Player Name' id='player' name='player[]"+ i +"' > </div> </div> <br><br> " +
                            "<div class='form-group'><label class='radio-inline'>Players Role </label> <label class='radio-inline'> <input id='radio1' name='playerstatus[]" + i + "' value='Batsman' type='radio'> Batsman </label> <label class='radio-inline'> <input id='radio2' name='playerstatus[]" + i + "' value='Bowler' type='radio'> Bowler </label> <label class='radio-inline'> <input id='radio3' name='playerstatus[]" + i + "' value='All Rounder' type='radio'> All Rounder </label></div> ")

                }
            }
        });

        /* $('input[type=submit]').on('click',function () {
              //alert('hello');}}
              var name = $('input[name=player]').val();
              for (var i=0 ; i<name ;i++){
               var player = name[i];
                  alert(player.value);
              }

             // alert(player);

          });*/
    });

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