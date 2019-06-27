@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
<div class="panel-heading">
        <h3 class="panel-title" style="text-align:center">Congratulation your Ticket Is booked</h3>
    </div>
    <div class="panel-body"> 
    <form class="form-horizontal">

     <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Booked By :</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->user_id}}</p>
           </div>
    </div>


     <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Match_Name:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->match_name}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Enclosure_name:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->enclouser_name}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Seat Number:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->seats}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Total Seats:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->no_of_ticket}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Match Date:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->match_date}}</p>
        </div>
    </div>
    
    
    <button onclick="printDiv('print')">Print this page</button>


</div>
</div>
</div>
</div>
@endsection
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