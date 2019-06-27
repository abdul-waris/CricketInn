@extends('layouts.layout')
@section('content')
<div class="container" style="width:100%">
<div class='row'>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title" style="text-align:center">About Us</h3>
    </div>
    <div class="panel-body"> 
        <p>
        In this project we develop a website. The website name is <b>“CricketInn”</b>. In which we make an online booking system for grounds and seats. And provide the facility to user to register his teams for match and booking his seats for matches. In this website we provide the live score board for currently running match in ground. That’s why user can view the live score of match easily.
        We develop this website because the lovers of cricket are present in large amount in Pakistan. And almost everyone wants to play cricket. And there is no such kind of website for domestics level ground booking. That’s why we make this website. There are a lot of problems for booking the ground and it is a time consuming process. Now we face the some problems such as travel expense, time consuming, and some time the incharge of ground is not present and we need to come again for ground booking. And we need to do a lot of paperwork such as write the application for match and give in hard form to ground incahrge.
        In past, everything is done on paper. There is no online system for store the data and user need to come in office for view the record and face a lot of difficulty in searching the specific record.     
        So that’s why we make this website. We can booked the ground without visiting the ground and save him travel expense. In this website we provide facility of seat booking for match. And user booked the seats and ground using this website and pay using PayPal and other APIs. And view the fixture of matches and team members.
        </p>
  </div>
    <div class="panel-footer">

        <a href="{{url('/home')}}" class="btn btn-primary">Go Back</a>
    </div>
</div>
</div>
</div>
</div>
     
@endsection