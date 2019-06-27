@extends('layouts.layout')
@section('content')
<style type="text/css">
h2{
    color:white;
}
#holder{   
height:200px;    
width:550px;
background-color:transparent;
/*border:1px solid #A4A4A4;
*/margin-left:10px;   
}
#place {
position:relative;
margin:2px;
}
#place li a{
font-size:10px;
<!--font-size:0.6em;-->
padding:10px;
margin:10px;

}
#place li
{
 list-style: none outside none;
 position: absolute;   
 border:1px solid black;
}    
#place li:hover
{
background-color:yellow;
color:yellow;      
}
#place a:hover
{
font-size:15px;
text-align:center;
color:yellow;      
} 
#place .seat{
/*<!--background:url("download (1).png") no-repeat scroll 0 0 transparent;
-->*/
background-color:white;
height:35px;
width:35px;
display:block;   
}
#place .selectedSeat
{ 
    background-color:grey;
/*background-image:url("download.jpg");*/    
}
#place .selectingSeat
{ 
    background-color:black;
/*background-image:url("download.png");*/      
}
/*#place .row-3, #place .row-4{
margin-top:10px;
}*/
#place .col{
    padding-left:5px;
}
#seatDescription li{
verticle-align:middle;    
list-style: none outside none;
padding-left:35px;
height:35px;
float:left;
}
  
</style>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-xs-8 col-sm-8">
<h2> Choose seats by clicking the corresponding seat in the layout below:</h2>
   <div class="panel panel-default">
   <div class="panel-body">
    <div id="holder"> 
        <ul  id="place">
        </ul>    
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div style="float:left;"> 
    <ul id="seatDescription">
        <li style="background:url('images/available_seat_img.gif') no-repeat scroll 0 0 transparent; color:white;">Available Seat</li>
        <li style="background:url('images/booked_seat_img.gif') no-repeat scroll 0 0 transparent; color:white;">Booked Seat</li>
        <li style="background:url('images/selected_seat_img.gif') no-repeat scroll 0 0 transparent; color:white;">Selected Seat {{$name}}</li>
    </ul>
    </div>
        <div style="clear:both;width:100%">
        <input type="button" id="btnShowNew" value="Show Selected Seats" />
        <input type="button" id="btnShow" value="Show All" />           
        </div>
<!--<div class="container">
<div class="row">
<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3" style="border:1px solid black;">
{{$name}}
</div>
<div class="col-sm-9 col-xs-9 col-md-9 col-lg-9" style="border:1px solid black;">
{{$name}}
<br>
<?php
$count=0;
for ($i=0;$i<50;$i++){
//    echo '<a class="hovertext" href="#" title=""><img src="download (1).png" class="img-responsive"  width="20px" height="10px"; style="float:left; padding-left:5px;"></a>';
  
    if($count%5==0)
    {
       echo '<br>';
    }else{
//echo $i;
//echo '<a href="#" id="book"><img src="download (1).png" class="img-responsive" id="seat" alt="Match Ticket" width="20px" height="10px"; style="float:left; padding-left:5px;"></a>';
//echo '<a class="hovertext" href="#" title=""><img src="download (1).png" class="img-responsive"  width="20px" height="10px"; style="float:left; padding-left:5px;"></a>';
  //echo '<div class="conatiner" style="color:white;"> 2 </div>';

    }
         $count = $count+1;
    
}
?>
</div>
</div>-->
<div class="container" style="margin-top:10px;">
<div class="row">
<div class="col-sm-8 col-lg-8 col-md-8 col-xs-8">
<div class="panel panel-primary">
<div class="panel-heading">
        <h3 class="panel-title">Ticket Booking</h3>
    </div>
    <div class="panel-body">
    <form class="form-horizontal">
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2"> Name </label>
        <div class="col-xs-10">
            <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{Auth()->user()->name}}" readonly>
        </div>
    </div>
    
    <div class="form-group">
        <label for="ename" class="control-label col-xs-2">Enclouser Name </label>
        <div class="col-xs-10">
            <input type="text" class="form-control" id="ename" placeholder="ename" name="ename" value="{{$name}}"readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="match name" class="control-label col-xs-2">Match Name </label>
        <div class="col-xs-10">
            <input type="text" class="form-control" id="match name" placeholder="ename" name="match name" value="{{$teamname->team_name}} VS {{$teamname->opponent_teamname}}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="seats" class="control-label col-xs-2">No of Seats </label>
        <div class="col-xs-10">
            <input type="text" class="form-control" id="seats" placeholder="seats" name="seats" readonly>
        </div>
    </div>
    </form>
    
    </div> 
    <div class="panel-footer clearfix">
        <div class="pull-right">
            <a href="#" class="btn btn-default">Book</a>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // $("#book  img").hover(function(){
//$(this).animate({width: "10%", height: "10%"}, 'slow');
  //      },function(){
    //        $(this).animate({width: "20px", height: "15px"}, 'slow');
      //  });
 
$('#place li').click(function(){
    alert();
});

var settings = {
               rows: 5,
               cols: 10,
               rowCssPrefix: 'row-',
               colCssPrefix: 'col-',
               seatWidth: 40,
               seatHeight: 40,
               seatCss: 'seat',
               selectedSeatCss: 'selectedSeat',
               selectingSeatCss: 'selectingSeat'
           };

           var init = function (reservedSeat) {
                var str = [], seatNo, className;
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {
                        seatNo = (i + j * settings.rows + 1);
                        console.log(className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString());
                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            console.log(className += ' ' + settings.selectedSeatCss);
                        }
                        console.log((i * settings.seatHeight).toString());
                        str.push('<li class="' + className + '"' +
                                  'style="top:' + (i * settings.seatHeight+2).toString() + 'px;left:' + (j * settings.seatWidth+10).toString() + 'px">' +
                                 '<a href='+seatNo+' title="' + seatNo + '">' + seatNo + '</a>' + 
                                  '</li>');
                    }
                }
                $('#place').html(str.join(''));
            };
            //case I: Show from starting
            //init();
 
            //Case II: If already booked
            var bookedSeats = [5, 10, 25];
            init(bookedSeats);


            $('.' + settings.seatCss).click(function () {
if ($(this).hasClass(settings.selectedSeatCss)){
    alert('This seat is already reserved');
}
else{
    $(this).toggleClass(settings.selectingSeatCss);
    }
});
 
$('#btnShow').click(function () {
    var str = [];
    var count=0;
    $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
        str.push($(this).attr('title'));
        var total =count++;
    });
    //alert(total);
    alert(str.join(','));
})
 
$('#btnShowNew').click(function () {
    var str = [], item;
     var value = [];
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');    
    value =str.push(item);
   //console.log(str.length);         
    });
      var totalseats =str.length
//console.log(value.length);
     var numbers= str.join(',');
            alert(totalseats);
            alert(numbers);
     
})

});

</script>
