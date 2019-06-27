@extends('layouts.layout')
@section('content')

    <div class="container">
        <h1 style="color:white;">Search By Ground Name</h1>
        
         <div class="container">
 
<div class="row">
 
<div class="panel panel-default">
 
<div class="panel-heading">
 
<h3>Search By Ground Name </h3>
 
</div>
 
<div class="panel-body">
 
<div class="form-group">
 

        <input type="text" class="form-controller" id="search" name="search"></input>
 
</div>
 
 
<table class="table table-bordered table-hover">
 
<thead>
 
<tr>
 
<th>ID</th>
 
<th>Ground Name</th>
 
<th>Owner Name</th>
 
<th>Address</th>
 
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

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    

    $('#search').on('keyup',function(){
                     var value=$(this).val();
                   // alert(value);
                   
                   $.ajax({
                       type:'post',
                        url:'grounds',
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