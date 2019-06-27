@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
  <h2> Users </h2>
  <div class="panel panel-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel-heading">All Users</div>
    <div class="panel-body">
     <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Detail</th>      
      </tr>
    </thead>
     @foreach($users as $user)
    <tbody>
     <tr>
     
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        
         <td><a href="gbdetail{{$user->id}}"> Detail </a></td>
      </tr>

    </tbody>
 @endforeach
  </table>
    </div>
  </div>
</div>
</div>
<a type="submit" href="home" class="btn btn-primary"> Back </a>
 {{$users->links()}}
@endsection