@extends('layouts.layout')

@section('content')
        <!--@foreach($groundbook as $fixture)

    <div class="card border-secondary mb-3"style="max-width: 80rem; margin:50px; border-color:black;">
        <div class="card-header">Match</div>
        <div class="card-body text-secondary">
            <h4 class="card-title"><a href="{{'fixture'.$fixture->id}}">{{$fixture->team_name}} VS {{$fixture->opponent_teamname}}</a></h4>
            <p class="card-text">Match between the {{$fixture->team_name}} and  {{$fixture->opponent_teamname}}. Match will be started <strong> {{$fixture->start_date}}</strong> and end<strong> {{$fixture->end_date}}</strong> . </p>
        <a href="{{'bookedmatchprintform'.$fixture->id}}" class="card-link pull-right">Print Form</a>
       <a href="{{'fixture'.$fixture->id}}" class="card-link pull-right" style="margin-right:10px;">View Teams Players</a>
        </div>
    </div>
    @endforeach-->
    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"> Fixtures </h3>
    </div>
    <div class="panel-body">
    @foreach($groundbook as $fixture)

    <div class="card border-secondary mb-3"style="max-width: 80rem; margin:50px; border-color:black;">
        <div class="card-header">Match</div>
        <div class="card-body text-secondary">
            <h4 class="card-title"><a href="{{'fixture'.$fixture->id}}">{{$fixture->team_name}} VS {{$fixture->opponent_teamname}}</a></h4>
            <p class="card-text">Match between the {{$fixture->team_name}} and  {{$fixture->opponent_teamname}}. Match will be started <strong> {{$fixture->start_date}}</strong> and end<strong> {{$fixture->end_date}}</strong> . </p>
        <a href="{{'bookedmatchprintform'.$fixture->id}}" class="card-link pull-right">Print Form</a>
       <a href="{{'fixture'.$fixture->id}}" class="card-link pull-right" style="margin-right:10px;">View Teams Players</a>
        </div>
    </div>
@endforeach    
    </div>
    
</div>

    @endsection