@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
  <h2> Ticket </h2>
  <div class="panel panel-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel-heading">Ticket Detail</div>
    <div class="panel-body">
     <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Enclouser Name</th>
        <th>Seats</th>
        <th>Ground Name</th>
        <th>Ground Address</th>
        <th>Registered By</th>      
      </tr>
    </thead>
    
    <tbody>
     <tr>
     
        <td>{{$ticketbook->id}}</td>
        <td>{{$ticketbook->enclouser_name}}</td>
        <td>{{$ticketbook->seats}}</td>
           <td>{{$groundname->groundname}}</td>
     <td>{{$groundname->address}}</td>
        <td>@if($user_name != NULL)
        {{$user_name->name}}
        @else
        {{$admin_name->name}}
        @endif
        </td>
               </tr>

    </tbody>
 
  </table>
    </div>
  </div>
</div>
</div>

@endsection