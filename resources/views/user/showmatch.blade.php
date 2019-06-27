@extends('layouts.layout')
@section('content')
 @foreach($groundbook as $fixture)

    <div class="card border-secondary mb-3"style="max-width: 80rem; margin:50px; border-color:black;background-color:white;">
        <div class="card-header">Match</div>
        <div class="card-body text-secondary">
            <h4 class="card-title"><a href="{{'fixture'.$fixture->id}}">{{$fixture->team_name}} VS {{$fixture->opponent_teamname}}</a>
           </h4><span> <small>Match held in {{$gb}} ground in {{$ga}}</small></span>
            <p class="card-text">Match between the {{$fixture->team_name}} and  {{$fixture->opponent_teamname}}. Match will be Held <strong> {{$fixture->duration}}</strong> . </p>
        
        <a href="{{'bookedmatchprintform'.$fixture->id}}" class="card-link pull-right">Print Form</a>
       
        </div>
    </div>
    @endforeach
@endsection