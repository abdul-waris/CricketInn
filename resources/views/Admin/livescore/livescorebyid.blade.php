@extends('layouts.app')
@section('content')

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/4.1.2/papaparse.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
   
     <title>
    CSV FILE UPLOAD
</title>
<meta name="csrf_token" content="{{ csrf_token() }}" />
</head>


<style>
select.models{
  display:none;
}
select.models.active{
  display:inline-block;
}
</style>
 <div class="row">
<div class="bs-example col-lg-12 col-sm-12 col-md-12">
<div class="row">
        <div class="panel panel-default col-md-5 col-sm-5 col-lg-5"  style="float:left;">
                <!-- Default panel contents -->
                @foreach($teamname as $teamname)
                <div class="panel-heading" id="fixture">Team Name {{$teamname->team_name}} </div>
                <!--<div class="panel-body">
                    <p>The following products are currently available on our store.</p>
                </div>-->
                <!-- List group -->
        
                        <ul class="list-group" width="200px" id="playername">
                                
                               <li class="list-group-item">{{$teamname->captain_name}} (c) </li>
                                @endforeach
                                @foreach($firstteam as $firstteam)
                                <li class="list-group-item">{{$firstteam->player_name}} 
                                    <span>
                                     <small>{{$firstteam->player_role}}</small> </span> </li>        
                                @endforeach
                            </ul>
                
            </div>
        </dvi>
              <div class="row">      
           <div class="panel panel-default col-md-5 col-sm-5 col-lg-5" style="float:left; margin-left:20px;">
                    <!-- Default panel contents -->
                            @foreach($secondteam as $secondteam)
                    <div class="panel-heading" >Team Name {{$secondteam->team_name}} </div>
                    <!--<div class="panel-body">
                        <p>The following products are currently available on our store.</p>
                    </div>-->
                    <!-- List group -->
            
                            <ul class="list-group" width="200px" id="fixture">
                                    
                                    <li class="list-group-item">{{$secondteam->captain_name}} (c) </li>
                                    @endforeach
                                    @foreach($opponentteam as $opponentteam)
                                   <li class="list-group-item">{{$opponentteam->player_name}}<span>
                                         <small>{{$opponentteam->player_role}}</small> </span> </li>       
                                    @endforeach
                                        
                                </ul>
                    
                        </div>
                    </div>
                    </div>
           </div>
<select class='main' name="battingteam">
                <option value="None">-- How Play first --</option>                   
                    <option value="{{$secondteam->team_name}}">{{$secondteam->team_name}}</option>        
                    <option value="{{$teamname->team_name}}">{{$teamname->team_name}}</option>
                    </select>
<!--
<select class='models second'>
  <option> Lancer</option>
  <option> Sedan</option>
  <option> Coupe</option>
  </select>

<select class='models first'>
  <option> Civic</option>
  <option> Something else</option>
  <option>{{$opponentteam->player_name}}</option>
</select>
-->
<div class="data"></div>
      <div class="container pull-right" style=" border:1px solid black; height:400px">
         <form class="form-horizontal">
         
          <input type="hidden" name="id" id="id" value="{{$id}}">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-highlight">
      <thead>
        <th>Player Name1</th>
        <th>Run</th>
        <th>Total Run</th>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" class="form-control" placeholder="Player Name1" name="p1" id="p1"/></td>
          <td><input type="text" class="form-control" placeholder="Run" name="r1" id="r1" /></td>
          <td><input type="text" class="form-control" placeholder="Total Run" name="t1" readonly/></td>
          </tr>
          </tbody>
          <thead> 
                <th>Player Name2</th>
                <th>Run</th>
                <th>Total Run</th>
        
          </thead>
          <tbody>
          <tr>
          <td><input type="text" class="form-control" placeholder="Player Name2" name="p2" id="p2"/></td>
          <td><input type="text" class="form-control" placeholder="Run" name="r2" id="r2"/></td>
          <td><input type="text" class="form-control" placeholder="Total Run" name="t2" readonly/></td>
          </tr>
          </tbody>
          <thead>
            <th>Bowler Name</th>
            <th> Ball no </th>
            <th>Ball </th>
            <th>No Bowl</th>
            <th>Wide</th>
            <th>Free Hit </th>      
          </thead>
          <tbody>
          <tr>

          <td><input type="text" class="form-control" name="bname" id="bname" placeholder="Bowler Name" /></td>
          <td><input type="integer" class="form-control" name="bnum" id="bnum" placeholder="Ball No" /></td>
          <td><div class="radio">
               <label><input type="radio" id="ball" name="ball" value="Ball" checked>Ball</label>
            </div>
          </td>
          <td><div class="radio">
               <label><input type="radio" id="noball" name="ball" value="NoBall">No Ball</label>
            </div>
          </td>
          <td><div class="radio">
              <label><input type="radio" id="wideball" name="ball" value="wideball">Wide Ball</label>
              </div>
          </td>
          <td><div class="radio">
              <label><input type="radio" id="wideball" name="ball" value="freehit">Free Hit</label>
              </div>
          </td>
          </tr>
          </tbody>
    </table>
  </div>
  <button type="submit" class="btn btn-primary pull-right update"> Update </button>
</form>
</div>
</body>
</html>



<script>
            $(document).ready(function(){
      
                        $.ajaxSetup({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                      });
                 $('.update').on('click', function(e) {
          e.preventDefault();
         // alert('hello');
           //var data = $(this).serialize();
        var p1= $('#p1').val();
        alert(p1);
        var ball = $('input[name=ball]:checked').val();
      
        var r1 = $('#r1').val();
         var p2 = $('#p2').val();
         var r2 = $('#r2').val();
         var bname =$('#bname').val();
         var bnum = $('#bnum').val();
         var id = $('#id').val();
         var battingteam = $('select[name=battingteam]').val();
         //alert(battingteam);

           $.ajax({
                                       
                                        url: "postlivescore",
                                        type:"POST",
                                       cache:false,
                                        
                                       
                                       beforeSend: function (xhr) {
                                            
                                        var token = $('meta[name="csrf_token"]').attr('content');
                                            if (token) {
                                                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                                            }
                                            
                                        },
                               data: {p1:p1, r1:r1, p2:p2, r2:r2, bname:bname, bnum:bnum, id:id, battingteam:battingteam},
                                        success:function(data){
                                             console.log(data);
                                         
                                        },error:function(e){ 
                                            alert("error!!!!" + JSON.stringify(e));
                                            document.write( JSON.stringify(e));
                                        }                                         
                                    });//end of ajax 
                                    
                                    });  
            }); 
            
                     </script>
            @endsection