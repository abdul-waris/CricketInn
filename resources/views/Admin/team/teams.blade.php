@extends('layouts.app')

@section('content')

@foreach($teams as $team)
    <div class="container" id="teamscont">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">{{$team->team_name}}</h1>
        </div>
        <div class="panel-body">{{$team->captain_name}}</div>

        <div class="panel-footer clearfix">
            <div class="pull-right">
                <a href="#" class="btn btn-primary"> {{$team->created_at}}</a>
                <a href="{{'show'.$team->id}}" class="btn btn-default"> show team member </a>
                <a href="{{'edit'.$team->id}}" class="btn btn-default"> Edit team member </a>
                <a href="{{'post'.$team->id}}" class="btn btn-default"> post news </a>
            </div>
        </div>
        </div>
</div>

@endforeach
{{$teams->links()}}
    @endsection
