@extends('layouts.app')
@section('content')
<div class="container" style="width:100%">
<div class='row'>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<div class="panel panel-primary" id="print">
    <div class="panel-heading">
        <h3 class="panel-title" style="text-align:center">Congratulation your Team Is booked</h3>
    </div>
    <div class="panel-body"> 
    <form class="form-horizontal">

@foreach($teams as $teams)
     <div class="form-group">
        <label for="teamname" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Team_Name:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$teams->team_name}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="opponentteamname" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Captain Name:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$teams->captain_name}}<span>
                        <small>{{$teams->captain_role}}</small>
                    </span></p>
        </div>
    </div>

    <div class="form-group">
        <label for="startdate" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Status:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$teams->status}}</p>
        </div>
    </div>
  @endforeach
@foreach($players as $player)
<div class="form-group">
        <label for="opponentteamname" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Player Name:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$player->player_name}} <span>
                        <small>{{$player->player_role}}</small>
                    </span></p>
        </div>
    </div>

@endforeach
    </form>
    </div>
@endsection