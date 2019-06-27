@extends('layouts.layout')
@section('content')
<div class="panel panel-primary">
        <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center">Congratulation your Ticket Is booked</h3>
            </div>
            <div class="panel-body"> 
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <td>Ground Name</td>
                        <th>Total Tickets</th>
                        <th>Enclouser Name</th>
                        <th>Match Name</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($groundbooked as $groundbooked)
                      <tr>
                        <td>{{$groundbooked->groundname}}</td>
                        <td>{{$groundbooked->no_of_ticket}}</td>
                        <td>{{$groundbooked->enclouser_name}}</td>
                        <td>{{$groundbooked->match_name}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
        </div>
        </div>
        </div>
        </div>
@endsection