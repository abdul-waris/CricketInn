@extends('layouts.layout')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">Congratulation your Ground Is booked</h3>
        </div>
        <div class="panel-body"> 
            <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Ground Name</td>
                    <th>Your Team</th>
                    <th>Opponent Team</th>
                    <th>Match Date</th>
                    <th>Match Time</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($groundbooked as $groundbooked)
                  <tr>
                    <td>{{$groundbooked->groundname}}</td>
                    <td>{{$groundbooked->team_name}}</td>
                    <td>{{$groundbooked->opponent_teamname}}</td>
                    <td>{{$groundbooked->duration}}</td>
                    <td>{{$groundbooked->time}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
    </div>
    </div>
    </div>
    </div>
@endsection