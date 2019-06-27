@extends('layouts.app')
@section('content')
<div class="container" style="width:100%">
    <div class='row'>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="panel panel-primary" id="print">
        <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">Congratulation your Ground Is Register</h3>
        </div>
        <div class="panel-body"> 
        <form class="form-horizontal">
    
         <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Owner:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->ownername}}</p>
            </div>
        </div>
    
    
         <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Name:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->groundname}}</p>
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Cnic:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->cnic}}</p>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Address:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->address}}</p>
            </div>
        </div>
        
        <div class="form-group">
                <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">City:</label>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                    <p class="form-control-static">{{$ground_detail->city}}</p>
                </div>
            </div>
    
        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Province:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->province}}</p>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">State:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->state}}</p>
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Rate:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->groundrate}}</p>
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Electricity Rate:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->electricityrate}}</p>
            </div>
        </div>
    
        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground City:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$ground_detail->ownername}}</p>
            </div>

       
        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">T20:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">
                     @foreach($time as $time)
                    {{$time->T20}}
                    @endforeach
                </p>
            </div>
        </div>

<div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">One Day:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">@foreach($timeo as $timeo)
                    {{$timeo->oneday}}
                    @endforeach
                </p>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Test:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">
                    @foreach($timet as $timet)
                    {{$timet->test}} 
                    @endforeach
                </p>
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