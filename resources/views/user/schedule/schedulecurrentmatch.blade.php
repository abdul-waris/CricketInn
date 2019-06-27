@extends('layouts.layout')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Current Matches</h3>
    </div>
    <div class="panel-body">
    <ul class="list-group">
                @foreach($currentmatch as $currentmatch)
                <!--<li class="list-group-item">
                    //$teams->caption_name}} C(caption)

                </li>-->
                <li class="list-group-item">
                    {{$currentmatch->team_name}} VS {{$currentmatch->opponent_teamname}}
                    <span><small>{{$currentmatch->duration}}</small></span>
                
                </li>
                <!--<li class="list-group-item">
                    //$player =$teams->player_role}}
                </li>-->
                @endforeach
            </ul>
    
    </div>
</div>

@endsection