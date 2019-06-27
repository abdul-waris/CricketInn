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
        <th>Password</th>
        <th>Detail</th>
        <!-- <th>Update</th> -->
        <th>Delete</th>      
      </tr>
    </thead>
     @foreach($users as $user)
    <tbody>
     <tr>
     
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td><a href="detail{{$user->id}}"> Detail </a></td>
         <!-- <td><a href="update{{$user->id}}"> Update </a></td> -->
        
          <td><a href=" {{ URL('Admin/destoryUser/'.$user->id ) }}"> Delete </a></td>
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