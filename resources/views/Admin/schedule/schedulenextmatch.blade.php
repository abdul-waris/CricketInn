@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">UpComming Matches</h3>
    </div>
    <div class="panel-body">
    <ul class="list-group">
                @foreach($nextmatch as $nextmatch)
                <!--<li class="list-group-item">
                    //$teams->caption_name}} C(caption)

                </li>-->
                <li class="list-group-item">
                    {{$nextmatch->team_name}} VS {{$nextmatch->opponent_teamname}}
                <span><small>{{$nextmatch->duration}}</small></span>
                </li>
                <!--<li class="list-group-item">
                    //$player =$teams->player_role}}
                </li>-->
                @endforeach
            </ul>
    
    </div>
</div>
@endsection