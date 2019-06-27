@extends('layouts.app')
@section('content')

<div class="container" style="width:100%">
<div class='row'>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<div class="panel panel-primary" id="print">
    <div class="panel-heading">
        <h3 class="panel-title" style="text-align:center">Congratulation your Ground Is booked</h3>
    </div>
    <div class="panel-body"> 
    <form class="form-horizontal">

     <div class="form-group">
        <label for="Name" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Booked By :</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
        @if(empty($adminname->name))
            <p class="form-control-static">{{$username->name}}</p>
            @else
            <p class="form-control-static">{{$adminname->name}}</p>
        @endif
        </div>
    </div>


     <div class="form-group">
        <label for="teamname" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Team_Name:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$booked->team_name}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="opponentteamname" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Opponent_TeamName:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$booked->opponent_teamname}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="startdate" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Match Start Date:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$booked->start_date}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="enddate" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Match End Date:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$booked->end_date}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="address" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Address:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$grounddetail->address}}</p>
        </div>
    </div>
    
    <div class="form-group">
        <label for="groundrate" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Rate:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$grounddetail->groundrate}}</p>
        </div>
    </div>
    
    <div class="form-group">
        <label for="electricityrate" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Electricity Rate:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$grounddetail->electricityrate}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="groundname" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Name:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$grounddetail->groundname}}</p>
        </div>
    </div>


    <div class="form-group">
        <label for="city" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground City:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$grounddetail->city}}</p>
        </div>
    </div>
    </form>
    </div>
    <button onclick="printDiv('print')">Print this page</button>

<script>
//function myFunction() {
    function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    
//}
</script>
</div>
</div>
</div>
</div>
@endsection