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
        <th>View GroundBooks</th>
        <th></th>
      </tr>
    </thead>
     
    <tbody>
     <tr>
     
        <td>{{$users->id}}</td>
        <td>{{$users->name}}</td>
        <td></td>
        <td><a href="#viewgroundbooks{{$users->id}}" data-toggle="collapse">View GroundBooks</a></td>
       <td></td>
      </tr>
    </tbody>
 <a type="submit" href="bookedtickets" class="btn btn-primary"> Back </a>
  </table>
    </div>
  </div>
</div>
</div>
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
        <th> Name </th>
        <th>Team Name</th>
        <th>Opponent Team_name</th>
        <th>Overs</th>
        <th>City</th>
        <th>Ground Name</th>
        <th>Match Date</th>
      </tr>
    </thead>
     @foreach($groundbooks as $groundbook)
    <tbody>
     <tr>
     
        <td>{{$groundbook->id}}</td>
        <td>{{$users->name}}</td>
        <td>{{$groundbook->team_name}}</td>
        <td>{{$groundbook->opponent_teamname}}</td>
        <td> {{$groundbook->overs}}</td>
        <td>{{$groundbook->city}}</td>
        <td>{{$groundbook->groundname}}</td>
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
@endsection