@extends('layouts.Layout')
@section('content')
<style>

</style>
<div class="container" style="width:100%">
<div class='row'>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title" style="text-align:center">Congratulation your Ground Is booked</h3>
    </div>
    <div class="panel-body"> 
    <form class="form-horizontal" action='https://sandbox.2checkout.com/checkout/purchase' method='post'>

     <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Booked By :</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$name->name}}</p>
        </div>
    </div>


     <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Team_Name:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->team_name}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Opponent_TeamName:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->opponent_teamname}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Match Time:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->time}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Match Start Date:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->start_date}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Match End Date:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->end_date}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Address:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$groundrecord->address}}</p>
        </div>
    </div>
    
    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Rate:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$groundrecord->groundrate}}</p>
        </div>
    </div>
    
    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground Electricity Rate:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$groundrecord->electricityrate}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Ground City:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$groundrecord->city}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4">Overs:</label>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <p class="form-control-static">{{$lastrecord->overs}}</p>
        </div>
    </div>

<input type='hidden' name='sid' value='901384323' >
<input type='hidden' name='mode' value='2CO' >
<input type='hidden' name='li_0_type' value='Ground Booking' >
<input type='hidden' name='li_0_name' value='Ground Booking' >
<input type='hidden' name='li_0_product_id' value='{{$lastrecord->id}}' >
<input type='hidden' name='li_0__description' value='Ground Booked' >
<input type='hidden' name='li_0_price' value='{{$days}}' >
<input type='hidden' name='ship_zip' value='54000' >
<input type='hidden' name='street_address' value='{{$groundrecord->address}}' >
<input type='hidden' name='street_address2' value='{{$groundrecord->address}}' >
<input type='hidden' name='city' value='{{$groundrecord->city}}' >
<input type='hidden' name='state' value='{{$lastrecord->state}}' >
<input type='hidden' name='zip' value='54000' >
<input type='hidden' name='country' value='{{$lastrecord->state}}' >
<input type='hidden' name='email' value='example@2co.com' >
<input type='hidden' name='phone' value='0332-4461056' >
<input name='submit' class='btn btn-primary' type='submit' value='Checkout' >

</form>
</div>
</div>
</div>
</div>
</div>
<!--<form name="easypayform" action="https://easypaystg.easypaisa.com.pk/easypay/Index.jsf" method="POST">
<! -- Store Id Provided by Easypay--
<input name="storeId" value="3223" hidden = "true"/>
<! -- Amount of Transaction from merchant’s website --
<input name="amount" value="1033" hidden = "true"/>
<! – Post back URL from merchant’s website -- 
<input name="postBackURL" value=" https://www.consuldents.com/easypay/confirmEasypay.php" hidden = "true"/>
<! – Order Reference Number from merchant’s website -- 
<input name="orderRefNum" value="1101" hidden = "true"/>
<! – Expiry Date from merchant’s website (Optional) -- 
<input type ="hidden" name="expiryDate" value="20170720 201521">
<! – Merchant Hash Value (Optional) -- 
<input type ="hidden" name="merchantHashedReq" value="askldjflaksdjflkasdf======asdfas dfkjaskdf">
<! – If Merchant wants to redirect to Merchant website after payment completion (Optional) -- 
<input type ="hidden" name="autoRedirect" value="0">
<! – If merchant wants to post specific Payment Method (Optional) -- 
<input type ="hidden" name="paymentMethod" value="">
<! – If merchant wants to post specific Payment Method (Optional) -- 
<input type ="hidden" name="emailAddr" value="shaan@uexel.com">
<! – If merchant wants to post specific Payment Method (Optionl) -- 
<input type ="hidden" name="mobileNum" value="03345385426">

 <input type = "submit" value="Submit"> 
</form>-->
@endsection