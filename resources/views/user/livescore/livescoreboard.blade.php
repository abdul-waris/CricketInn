@extends('layouts.layout')
@section('content')
<div class="row">
 
<div class="panel panel-default">
 
<div class="panel-heading">
 
<h3>Live Score</h3><span>
{{$currentmatch->team_name}} VS {{$currentmatch->opponent_teamname}}
 
</div>
 
<div class="panel-body table-responsive" id="load">
<table class="table table-bordered table-striped table-highlight ">
    <thead>
      <tr>
        <th>Player Name1</th>
        <th>Run</th>
        <th>Total Run</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$livescore->player1}}</td>
        <td>{{$livescore->run1}}</td>
        <td>{{$player1run}}</td>
      </tr>
      </tbody>
      <thead>
      <tr>
        <th>Player Name2</th>
        <th>Run</th>
        <th>Total Run</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$livescore->player2}}</td>
        <td>{{$livescore->run2}}</td>
        <td>{{$player2run}}</td>
      </tr>
      </tbody>
        <thead>
      <tr>
        <th>Bowler Name</th>
        <th>Runs</th>
        <th>Total Bowls</th>
        <th>Total Overs </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$livescore->bowler}}</td>
        <td>{{$livescore->no_of_ball}}</td>
        <td>{{$livescore->no_of_ball}}</td>
        <td>{{$totalovers}}/{{$currentmatch->overs}}</td>
      </tr>
      </tbody>
    
  </table>
</div>
</div>
</div>
@endsection
<script>
//  setTimeout(function(){
//    window.location.reload(1);

//  },5000);
</script>