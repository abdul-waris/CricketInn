@extends('layouts.layout')
@section('content')
<div class="panel panel-primary">
<div class="panel-heading">
        <h3 class="panel-title" style="text-align:center">Congratulation your Ticket Is booked</h3>
    </div>
    <div class="panel-body"> 
    <form class="form-horizontal" action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

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
    @foreach($seats as $seats)
        <div class="form-group">
            <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Seat Number:</label>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="form-control-static">{{$seats->seats}}</p>
            </div>
            @endforeach
    
    <input type='hidden' name='sid' value='901384650' >
<input type='hidden' name='mode' value='2CO' >
<input type='hidden' name='li_0_type' value='Ticket Booking' >
<input type='hidden' name='li_0_name' value='Ticket Booking' >
<input type='hidden' name='li_0_product_id' value='{{$lastrecord->unique_number}}' >
<input type='hidden' name='li_0__description' value='Ticket Booked' >
<input type='hidden' name='li_0_price' value='{{$money}}' >
<input type='hidden' name='ship_zip' value='54000' >
<input type='hidden' name='street_address' value='{{$groundaddress->address}}' >
<input type='hidden' name='street_address2' value='{{$groundaddress->address}}' >
<input type='hidden' name='city' value='{{$groundaddress->city}}' >
<input type='hidden' name='state' value='{{$groundaddress->state}}' >
<input type='hidden' name='zip' value='54000' >
<input type='hidden' name='country' value='{{$groundaddress->state}}' >
<input type='hidden' name='email' value='example@2co.com' >
<input type='hidden' name='phone' value='0332-4461056' >
<input name='submit' class='btn btn-primary' type='submit' value='Payment' >

    


</div>
</div>
</div>
</div>
@endsection
