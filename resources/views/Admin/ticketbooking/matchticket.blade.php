@extends('layouts.app')
@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Fixtures </h3>
    </div>
    <div class="panel-body">
     @if(count($currentmatch) == '0')
    <ul class="list-group">
  <li class="list-group-item">
    No Record
    </li>
           @else
                @foreach($currentmatch as $currentmatch)                
                 <li class="list-group-item">
                    {{$currentmatch->team_name}} VS {{$currentmatch->opponent_teamname}}
                    <span><small>{{$currentmatch->duration}}</small></span>
                    <a href="{{'bookedmatchprintform'.$currentmatch->id}}" class="card-link pull-right">Print Form</a>
                    <a href="{{'ticketbooking'.$currentmatch->id}}" class="card-link pull-right" style="margin-right:10px;">Book Seat</a>
                </li>
                
                <!--<li class="list-group-item">
                    //$player =$teams->player_role}}
                </li>-->
                @endforeach
            @endif
            </ul>
    
    </div>
</div>


@endsection