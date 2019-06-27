@extends('layouts.layout')
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
                <a href="{{'teamshow'.$team->id}}" class="btn btn-default"> show team member </a>
                    @if($team->user_id == Auth()->user()->id)
                <a href="{{'teamedit'.$team->id}}" class="btn btn-default"> Edit team member </a>
                   @else      
                   <a href="{{'teamedit'.$team->id}}" class="btn btn-default" disabled> Edit team member </a>
                    @endif
            </div>
        </div>
        </div>
</div>

@endforeach
@endsection
    