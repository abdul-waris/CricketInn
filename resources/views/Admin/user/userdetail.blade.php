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
        <th>Registered Teams</th>
        <th>View GroundBooks</th>
        <th>View TicketBooks</th>
      </tr>
    </thead>
     
    <tbody>
     <tr>
     
        <td>{{$users->id}}</td>
        <td>{{$users->name}}</td>
        <td><a href="#viewteams{{$users->id}}" data-toggle="collapse"> View Teams </a></td>
        <td><a href="#viewgroundbooks{{$users->id}}" data-toggle="collapse">View GroundBooks</a></td>
        <td><a href="#viewticketbooks{{$users->id}}" data-toggle="collapse">View TicketBooks </a></td>
      </tr>
    </tbody>
 <a type="submit" href="bookedtickets" class="btn btn-primary"> Back </a>
  </table>
    </div>
  </div>
</div>
</div>
<!-- Teams -->
<div id="viewteams{{$users->id}}" class="collapse">
<div class="container">
<div class="row">
  <h2> Users Register Teams </h2>
  <div class="panel panel-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel-heading">{{$users->name}}</div>
    <div class="panel-body">
     <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Team Name</th>
        <th>Captain Name</th>
        <th>Players</th>
      </tr>
    </thead>
     @foreach($teams as $team)
    <tbody>
     <tr>
     
        <td>{{$team->id}}</td>
        <td>{{$team->team_name}}</td>
        <td>{{$team->captain_name}}</td>
        <td><a href="show{{$users->id}}"> View Players</a></td>
        <!--<td><a data-toggle="collapse" href="#viewticketbooks{{$users->id}}"> View TicketBooks </a></td>-->
      </tr>

    </tbody>
 @endforeach
  </table>
        <a href="#viewteams{{$users->id}}" data-toggle="collapse" class="btn btn-default"> Hide </a>

  </div>
   </div>
  </div>
</div>
</div>
</div>  
<!-- End Team -->
<!-- Ground Books -->
<div id="viewgroundbooks{{$users->id}}" class="collapse">
<div class="container">
<div class="row">
  <h2> Users Book Grounds </h2>
  <div class="panel panel-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel-heading">{{$users->name}}</div>
    <div class="panel-body">
     <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Team Name</th>
        <th>Opponent Team_name</th>
        <th>Overs</th>
        <th>City</th>
        <th>Match Date</th>
      </tr>
    </thead>
     @foreach($groundbooks as $groundbook)
    <tbody>
     <tr>
     
        <td>{{$groundbook->id}}</td>
        <td>{{$groundbook->team_name}}</td>
        <td>{{$groundbook->opponent_teamname}}</td>
        <td> {{$groundbook->overs}}</td>
        <td>{{$groundbook->city}}</td>

        <td>{{$groundbook->duration}}</td>
      </tr>

    </tbody>
 @endforeach
  </table>
        <a href="#viewgroundbooks{{$users->id}}" data-toggle="collapse" class="btn btn-default"> Hide </a>
  </div>
   </div>
  </div>
</div>
</div>
</div>  

<!--End Ground Books -->
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
        <th>Match Name</th>
        <th>Enclouser Name</th>
        <th>Match Date</th>
        <th>Seat Number</th>
        <th>Total Seats</th>
      </tr>
    </thead>
     @foreach($ticketbook as $ticketbooks)
    <tbody>
     <tr>
     
        <td>{{$ticketbooks->id}}</td>
        <td>{{$ticketbooks->match_name}}</td>
        <td>{{$ticketbooks->enclouser_name}}</td>
        <td>{{$ticketbooks->match_date}}</td>
        <td>{{$ticketbooks->seats}}</td>
        <td>{{$ticketbooks->no_of_ticket}}</td>
      </tr>
 @endforeach
    <tr>
     
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
