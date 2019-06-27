@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
  <h2> Users </h2>
  <div class="panel panel-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel-heading">{{$users->name}}</div>
    <div class="panel-body">
     <table class="table table-striped" id="data">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th></th>
        <th></th>
        <th>View TicketBooks</th>
      </tr>
    </thead>
     
    <tbody>
     <tr>
     
        <td>{{$users->id}}</td>
        <td>{{$users->name}}</td>
        <td></td>
        <td></td>
        <td><a href="#viewticketbooks{{$users->id}}" data-toggle="collapse">View TicketBooks </a></td>
      </tr>
    </tbody>
 <a type="submit" href="bookedtickets" class="btn btn-primary"> Back </a>
  </table>
    </div>
  </div>
</div>
</div>
<!-- View Ticket Book -->
<div id="viewticketbooks{{$users->id}}" class="collapse">
<div class="container">
<div class="row">
  <h2> Users Book Tickets </h2>
  <div class="panel panel-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel-heading">{{$users->name}}</div>
    <div class="panel-body">
     <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Match Name</th>
        <th>Enclouser Name</th>
        <th>Match Date</th>
        <th>Seat Number</th>
        <th>Ground Name</th>
         <th>Total Seats</th>
      </tr>
    </thead>
     @foreach($ticketbook as $ticketbooks)
    <tbody>
     <tr>
     
        <td><a href="ticketdetail{{$ticketbooks->id}}">{{$ticketbooks->id}}</a></td>
        <td>{{$users->name}}</td>
        <td>{{$ticketbooks->match_name}}</td>
        <td>{{$ticketbooks->enclouser_name}}</td>
        <td>{{$ticketbooks->match_date}}</td>
        <td>{{$ticketbooks->seats}}</td>
        <td>{{$ticketbooks->groundname}}</td>
        <td>{{$ticketbooks->no_of_ticket}}</td>
      </tr>
 @endforeach
    <tr>
     
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
                <td></td>
      <td>{{$totalticket}}</td>
      </tr>
 
  </tbody>
  </table>
        <a href="#viewticketbooks{{$users->id}}" data-toggle="collapse" class="btn btn-default"> Hide </a>

  </div>
   </div>
  </div>
</div>
</div>
</div>  
<!-- End Ticket Book -->
@endsection
