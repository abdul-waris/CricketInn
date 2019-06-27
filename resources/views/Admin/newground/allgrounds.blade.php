@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">Ground Booked</h3>
        </div>
        <div class="panel-body"> 
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Ground Name</th>
                    <th>Ground Address</th>
                    <th>Ground City</th>
                    <th>Ground Province</th>
                    <th>Ground Rate</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($allground as $allground)
                  <tr>
                  <td>{{$allground->groundname}}</td>
                  <td>{{$allground->address}}</td>
                    <td>{{$allground->city}}</td>
                  <td>{{$allground->province}}</td>
                  <td>{{$allground->groundrate}}</td>
                  <!-- <td><a href = 'Admin/deleteGround/{{ $allground->id}}'>Delete</a></td> -->
                  <td><a href = "{{ URL('Admin/deleteGround/'.$allground->id ) }}">Delete</a></td>
      
                  </tr>
                 @endforeach
                </tbody>
              </table>
    </div>
    </div>
    </div>
    </div>

@endsection()