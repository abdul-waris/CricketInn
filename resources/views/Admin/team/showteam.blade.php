@extends('layouts.app')
@section('content')
<div class="container-fluid">

    <div class="panel panel-default" id="showteampanel">
            @foreach($teamname as $teamname)
        <div class="panel-heading">
            <h1 class="panel-title">{{$teamname->team_name}}<span>
                    <small>{{$teamname->captain_name}}</small>
                </span>
                </h1>
        </div>
        @endforeach

        <div class="panel-body">

            <ul class="list-group">
                @foreach($team as $teams)
                <!--<li class="list-group-item">
                    //$teams->caption_name}} C(caption)

                </li>-->
                <li class="list-group-item">
                    {{$player =$teams->player_name}} <span>
                        <small>{{$player =$teams->player_role}}</small>
                    </span>
                </li>
                <!--<li class="list-group-item">
                    //$player =$teams->player_role}}
                </li>-->
                @endforeach
            </ul>
        </div>

     </div>
    </div>

<div class="panel-footer clearfix">
    <div class="pull-right">
        <a href="{{url('Admin/team')}}" class="btn btn-default">Go Back</a>
    </div>
</div>
    @endsection
