@extends('layouts.app')
@section('content')
@foreach($fixture as $fixture)
<div class="card border-secondary mb-3"style="max-width: 80rem; margin:50px; border:solid black 2px">
        <div class="card-header">Match</div>
        <div class="card-body text-secondary">
            <h4 class="card-title"><a href="{{'fixture'.$fixture->id}}">{{$fixture->team_name}} VS {{$fixture->opponent_teamname}}</a></h4>
            <p class="card-text">Match between the {{$fixture->team_name}} and  {{$fixture->opponent_teamname}}. Match will be started <strong> {{$fixture->start_date}}</strong> and end<strong> {{$fixture->end_date}}</strong> . </p>
            <a href="{{'livscore'. $fixture->id}}" class="btn btn-default pull-right"> Live Score </a>
            
        </div>
    </div>
</div> 
@endforeach
@endsection