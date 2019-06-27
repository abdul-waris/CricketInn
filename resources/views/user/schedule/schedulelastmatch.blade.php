@extends('layouts.layout')
@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Privious Matches</h3>
    </div>
    <div class="panel-body">
    <ul class="list-group">
                @foreach($lastmatch as $lastmatch)
                <!--<li class="list-group-item">
                    //$teams->caption_name}} C(caption)

                </li>-->
                <li class="list-group-item">
                    {{$lastmatch->team_name}} VS {{$lastmatch->opponent_teamname}}
                <span><small>{{$lastmatch->duration}}</small></span>
                </li>
                <!--<li class="list-group-item">
                    //$player =$teams->player_role}}
                </li>-->
                @endforeach
            </ul>
    
    </div>
</div>
@endsection