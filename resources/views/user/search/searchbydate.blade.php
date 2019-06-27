@extends('layouts.layout')
@section('content')

    <div class="container">
        <h1 style="color:white;">Search BYy Date</h1>
        
         <div class="container">
 
<div class="row">
 
<div class="panel panel-default">
 
<div class="panel-heading">
 
<h3>Registered Teams </h3>
 
</div>
 
<div class="panel-body">
 
<div class="form-group">
<label for="matchdateend" class="control-label col-sm-4 col-md-4 col-lg-4 col-xs-4"> Match End: </label>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
  <div class='input-group date'>
    <input type="text" class="form-control tooltip-test" title="Enter date" name="datepick" id="datepicker" placeholder="Select Date">                                                <span class="input-group-addon">
     <span class="glyphicon glyphicon-calendar"></span>
      </span>
    </div> 
</div>
    <input type="button" class="form-controller btn btn-primary" id="search" name="search" value="Search">
</div>
    
<input type="text" class="form-controller" id="search1" name="search"></input> 
</div>
 
<table class="table table-bordered table-hover">
 
<thead>
 
<tr>
 
<th>ID</th>
 
<th>Team Name</th>
 
<th>Opponent TeamName</th>
 
<th>Cnic</th>
 
<th>Player Names</th>

<th>Matches</th>

</tr>
 
</thead>
 
<tbody>
 
</tbody>
 
</table>
 
</div>
 
</div>
 
</div>
 
</div>
 
    </div>
    <div class="result" style="color:white;"></div>
//  /<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">

$('#datepicker').datepicker({
            changeMonth:true,
            changeYear:true,
            yearRange:"c:c+5",
            numberOfMonths: 1,
            dateFormat:"yy-mm-dd",
            todayHighlight: true,
            //autoclose:true;
            //minDate: 0

        });
        // var valuee = $('datepick').val();
        //             alert(valuee);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#search').on('click',function(){
                     var value=$('#datepicker').val();
                    alert(value);
                   
                   $.ajax({
                       type:'post',
                        url:'datee',
                    data:{'search':value},
                        success:function(data){
                            console.log(data);
                            $('tbody').html(data);
                        }
                    })
                   
                });

    /*$(".btn-submit").click(function(e){
        e.preventDefault();

        var name = $("input[name=name]").val();
        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();
       // var data = $('this').serialize();

        $.ajax({
           type:'POST',
           url:'searched',
           data:{name:name, password:password, email:email},
           success:function(data){
              //alert(data.success);
              console.log(data);
              $(".result").html(data);
           }
        });*/

            
	
</script>
@endsection