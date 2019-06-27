@extends('layouts.layout')

@section('content')
    
    <div class="container" style="width:1000px; float:left;">
         <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                   <div class="panel panel-default">
                       <div class="panel-heading">  Ground Registration  </div>
                            <div class="panel-body">
                                <form method="POST" action="groundbooking" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-lg-4 col-sm-4 col-xs-4" for="name"> UserName: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                           <!-- <div class="form-control" id="name">hello</div>-->
                                            <p class="form-control tooltip-test" title="Your Name" >{{Auth::user()->name}}</p>
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('teamname')? 'has-error':''}}">
                                        <label class="control-label col-md-4 col-lg-4 col-sm-4 col-xs-4" for="teamname"> Team Name: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6" >
                                            <input type="text" name="teamname" id="teamname" class="form-control tooltip-test" title="Team name" placeholder="Enter Your TeamName" value="{{ old('teamname') }}"  >

                                            @if ($errors->has('teamname'))
                                                <span class="help-block animated shake">
                                        <strong>{{ $errors->first('teamname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('secondteam')? 'has-error':''}}">
                                        <label for="secondteam" class="control-label col-md-4 col-lg-4 col-sm-4 col-xs-4"> Opponent Team: </label>
                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                             <input type="text" name="secondteam" id="secondteam" class="form-control tooltip-test" title="opponent team name" placeholder="Enter Other Teamname" value="{{ old('secondteam') }}">

                                             @if ($errors->has('secondteam'))
                                                 <span class="help-block animated shake">
                                        <strong>{{ $errors->first('secondteam') }}</strong>
                                                     </span>
                                             @endif
                                         </div>
                                    </div>

                                    <div class="form-group {{$errors->has('address')? 'has-error':''}}">
                                        <label for="address" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Address: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <input type="text" class="form-control tooltip-test" title="Street Address / House No " name="address" id="address" placeholder="Enter Address" value="{{ old('address') }}">
                                            <p class="help-block">
                                                Street Address / House No / Company Name
                                            </p>

                                            @if ($errors->has('address'))
                                                <span class="help-block  animated shake">
                                        <strong>{{ $errors->first('address') }}</strong>
                                                     </span>
                                            @endif
                                        </div>
                                 </div>

                                    <div class="form-group {{$errors->has('city')? 'has-error':''}}">
                                        <label for="city" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> City: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <input type="text" class="form-control tooltip-test" title="City Name" name="city" id="city" placeholder="City/Town" value="{{ old('city') }}">
                                            @if ($errors->has('city'))
                                                <span class="help-block animated shake">
                                        <strong>{{ $errors->first('city') }}</strong>
                                                     </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group {{$errors->has('province')? 'has-error':''}}">
                                        <label for="province" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Province / Region: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <input type="text" class="form-control tooltip-test" title="Province Name" name="province" id="province" placeholder=" Province / Region" value="{{ old('province') }}">
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('state')? 'has-error':''}}">
                                        <label for="state" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> State: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <input type="text" class="form-control tooltip-test" title="State name" name="state" id="state" placeholder="State" value="{{ old('state') }}">
                                        </div>
                                    </div>

                                     <div class="form-group">                                    
                                        <label for="groundname" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Selecct Ground:  </label>                              
                                          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                          <select class="form-control" name='groundname' id="ground" style="width:280px;" required>
                                                <option value="">Select Ground</option>
                                            
                                                @foreach($groundname as $groundnames)                  
                                                        <option value="{{$groundnames->id}}">{{$groundnames->groundname}}/City : {{$groundnames->city}} {{$groundnames->groundrate}} + Electric charge{{$groundnames->electricityrate}}</option>        
                                                @endforeach                
                                                                                
                                            </select>
                                            
                                            </div>
                                            </div>
                                                                            
                                    <div class="form-group {{$errors->has('cnic')? 'has-error':''}}">
                                        <label for="cnic" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Cnic: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <input type="text" class="form-control tooltip-test" title="Id Number" name="cnic" id="cnic" placeholder="CNIC" value="{{ old('cnic') }}">
                                        @if($errors->has('cnic'))
                                            <span class="help-block animated shake">
                                                <strong>{{$errors->first('cnic')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group {{$errors->has('overs')? 'has-error':''}}">
                                    <label class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Overs: </label>
                                    <label class="radio-inline">
                                        <input id="radio1" name="overs" value="20" type="radio">
                                         T 20</label>
                                    <label class="radio-inline">
                                        <input id="radio2" name="overs" value="50" type="radio">
                                        One Day</label>
                                    <label class="radio-inline">
                                        <input id="radio3" name="overs" value="300" type="radio">
                                        Test 3 day</label>
                                @if ($errors->has('overs'))
                                    <span class="help-block animated shake">
                                        <strong>{{ $errors->first('overs') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div id="a">
                           
                            </div>
                                    <div class="form-group {{$errors->has('matchdatestart')? 'has-error':''}}">
                                        <label for="matchdatestart" class="control-label col-sm-4 col-md-4 col-lg-4 col-xs-4"> Match Start: </label>
                                         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                                 <div class='input-group date'>
                                                     <input type="text" class="form-control tooltip-test" title="Enter date" name="matchdatestart" id="datepicker1" placeholder="Enter date of match" value="{{old('matchdate')}}">
                                                     <span class="input-group-addon">
                                                         <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                 </div>
                                             @if($errors->has('matchdatestart'))
                                                 <span class="help-block animated shake">
                                                     <strong>{{$errors->first('matchdatestart')}}</strong>
                                                 </span>
                                                 @endif
                                         </div>
                                      </div>

                                    <div class="form-group {{$errors->has('matchdateend')? 'has-error':''}}">
                                        <label for="matchdateend" class="control-label col-sm-4 col-md-4 col-lg-4 col-xs-4"> Match End: </label>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                            <div class='input-group date'>
                                                <input type="text" class="form-control tooltip-test" title="Enter date" name="matchdateend" id="datepicker2" placeholder="Enter date of match End" value="{{old('matchdate')}}">
                                                <span class="input-group-addon">
                                                         <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                            </div>
                                            @if($errors->has('matchdateend'))
                                                <span class="help-block animated shake">
                                                     <strong>{{$errors->first('matchdateend')}}</strong>
                                                 </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{$errors->has('days')? 'has-error':''}}">
                                        <label for="days" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Ground Book For: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <div id="day"> </div>
                                            @if($errors->has('days'))
                                                <span class="help-block animated shake">
                                                <strong>{{$errors->first('days')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <input type="hidden" id="days" name="days" value=""/>
                                <div class="name">
                                </div>
                               
  
                                
                                  <!--  <span>Ground Book for :</span>  <span id="days">  </span> <span>days</span>-->

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" class="btn btn-primary pull-right tooltip-test"  title="Submit form" id="submitbutton" value="submit"> Submit </button>
                                    </div>
                                        </div>

                                    <div id="result"></div>
                                </form>

                            </div>
                  </div>
              </div>

         </div>

    </div>

    <div class='container' style="float:left; width:300px;">
    hello
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $(document).ready(function () {

 $('#ground').change(function(){
                            // var value = $('#ground option:selected').val();
                            //     $('.name').html(value + ' ' + 'Won the Toss');
                                
                        });
       
       // $('#datetimepicker').datetimepicker();

        $('#datepicker1,#datepicker2').datepicker({
            changeMonth:true,
            changeYear:true,
            yearRange:"c:c+5",
            numberOfMonths: 1,
            dateFormat:"yy-mm-dd",
            todayHighlight: true,
            minDate: 0


        });
        $('#datepicker2').change(function() {
            var diff = $('#datepicker1').datepicker("getDate") - $('#datepicker2').datepicker("getDate");
            var days = diff/(1000*60*60*24)*-1;
            if(days==0){
                $('#day').html('Current day');
                $('#days').val(1);
            }else{
                $('#day').html(days +' '+ 'Day' );
                $('#days').val(days+1);
            }

           // $('#day').html("<input type='text' disabled class='form-control tooltip-test date' title='Id Number' name='days' id='days' placeholder='Ground Book For:' value="+ days +");
        });


         $("input[name='overs']").click(function(){
                           var val= $("input[name='overs']:checked").val();
                                if(val == 20){
                                            $('#a').empty();
                                            $('#a').append("<div class='form-group {{$errors->has('matchtime')? 'has-error':''}}' id='timet20'>"+
                                        "<label for='matchdtime' class='control-label col-sm-4 col-md-4 col-lg-4 col-xs-4'> Match Time: </label>"+
                                        "<div class='col-lg-6 col-sm-6 col-md-6 col-xs-6'>"+
                                                                                         
                                    "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                        "<input id='radio1' name='time20' value='8AM-10:30AM' type='radio'>"+
                                         "8AM-10:30AM</label>"+ 
                                         "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                     "<input id='radio1' name='time20' value='11AM-1:30PM' type='radio'>"+
                                         "11AM-1:30PM</label>"+
                                         "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                    "<input id='radio1' name='time20' value='2PM-4:30PM' type='radio'>"+
                                         "2PM-4:30PM</label>"+              
                                         "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                    "<input id='radio1' name='time20' value='5PM-7:30PM' type='radio'>"+
                                         "5PM-7:30PM</label>"+ 
                                         "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                   "<input id='radio1' name='time20' value='8PM-10:30PM' type='radio'>"+
                                         "8PM-10:30PM</label>"+    
                                         "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                         "<input id='radio1' name='time20' value='8AM-10:30PM' type='radio'>"+
                                         "Full Day</label>"+      

                                             "@if($errors->has('matchtime'))"+
                                                 "<span class='help-block animated shake'>"+
                                                     "<strong>{{$errors->first('matchtime')}}</strong>"+
                                                 "</span>"+
                                                 "@endif"+
                                         "</div></div>")

                                         
                                }
                                if(val == 50){
                                            $('#a').empty();
                                            $('#a').append("<div class='form-group {{$errors->has('matchtime')? 'has-error':''}}' id='timet20'>"+
                                        "<label for='matchdtime' class='control-label col-sm-4 col-md-4 col-lg-4 col-xs-4'> Match Time: </label>"+
                                        "<div class='col-lg-6 col-sm-6 col-md-6 col-xs-6'>"+
                                                                                         
                                    "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                        "<input id='radio1' name='time20' value='8AM-1:00PM' type='radio'>"+
                                         "8AM-1:00PM</label>"+ 
                                         "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                     "<input id='radio1' name='time20' value='1:30PM-6:30PM' type='radio'>"+
                                         "1:30PM-6:30PM</label>"+
                                         "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                    "<input id='radio1' name='time20' value='7PM-12:00AM' type='radio'>"+
                                         "7PM-12:00AM</label>"+              
                                         "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                         "<input id='radio1' name='time20' value='8AM-12:00AM' type='radio'>"+
                                         "Full Day</label>"+      

                                             "@if($errors->has('matchtime'))"+
                                                 "<span class='help-block animated shake'>"+
                                                     "<strong>{{$errors->first('matchtime')}}</strong>"+
                                                 "</span>"+
                                                 "@endif"+
                                         "</div></div>")

                                }
                                if(val == '300'){
                                            $('#a').empty();
                                            $('#a').append("<div class='form-group {{$errors->has('matchtime')? 'has-error':''}}' id='timet20'>"+
                                        "<label for='matchdtime' class='control-label col-sm-4 col-md-4 col-lg-4 col-xs-4'> Match Time: </label>"+
                                        "<div class='col-lg-6 col-sm-6 col-md-6 col-xs-6'>"+
                                                                                         
                                    "<label class='radio-inline col-lg-3 col-sm-3 col-md-3 col-xs-3'>"+
                                        "<input id='radio1' name='time20' value='8AM-1:00PM' type='radio' checked>"+
                                         "8AM-4:00PM</label>"+      

                                             "@if($errors->has('matchtime'))"+
                                                 "<span class='help-block animated shake'>"+
                                                     "<strong>{{$errors->first('matchtime')}}</strong>"+
                                                 "</span>"+
                                                 "@endif"+
                                         "</div></div>")

                                }

//                                 $("input[name='all']").change(function(){
//      var checked = $(this).is(':checked');
//      if(checked){
//        $("input[name='time20']").each(function(){
//          $(this).prop("checked",true);
//        });
//      }else{
//        $("input[name='time20']" ).each(function(){
//          $(this).prop("checked",false);
//        });
//      }
//    });
                        });
           /*  $("form").submit(function (e) {
            e.preventDefault();
           var action = $(this).attr("action");
           var data = $(this).serialize();
           /* var teamname = $('#teamname').val();
            var secondteam = $('#secondteam').val();
            var addres = $('#address').val();
            var city = $('#city').val();
            var province = $('#province').val();
            var state = $('#state').val();
            var cnic = $('#cnic').val();
            {teamname:teamname,secondteam:secondteam,address:addres,city:city,province:province,state:state,cnic:cnic}*

            $.post(action , data ,function (data) {

             console.log(data);

            })
            
        });*/

      /*$('button').click(function () {
            var value1 = $('#datepicker1').datepicker('getDate');
            var value2 =$('#datepicker2').datepicker('getDate');
            //alert(value2);
           // alert(value1);
            var diff = value2 - value1;
            var days = diff / 1000 / 60 / 60 / 24;
            alert(days);
            /*if(value1 > value2){
                var diff = value2 - value1;
                var days = diff / 1000 / 60 / 60 / 24;
                alert(value1 + 'Privious days' + days);
            }else {
                var diff = value1 - value2;
                var days = diff / 1000 / 60 / 60 / 24;
                alert(value2 + 'Next days' +days);
            }*/

        //});

        /*  $('#datepicker1').datepicker();

        $("#datepicker2").datepicker({

            useCurrent:false
        });
        $('button').click(function () {
        $('#datepicker1').on('change',function () {
            var value1 = $('#datepicker1').val();
            alert(value1);
        });
        $('#datepicker2').on('change',function () {
            var value2 = $('#datepicker2').val();
            alert(value2);
        });

        });*/
         /*var value1  = $('#datepicker1').val();
         var value2  = $('#datepicker2').val();
        $('button').click(function () {
            if(value1==value2 || value1 >= value2 ){
                alert('value1' + value1 + 'value2' + value2);
            }else {
                alert('value1' + value1 + 'value2' + value2);
            }

        });*/

        /*         var value = $('#datepicker1,#datepicker2').val();

        var date = new Date();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        var day = date.getDate();

        var newdate = year + '-' + month + '-' + day;
        console.log(newdate);
        console.log(value);
        if (value > newdate) {
           alert('good' + value);

        } else {
            alert('bad' + value);
        }*/

    });

    </script>




    <script>
        $(window).scroll(function() {
            sessionStorage.scrollTop = $(this).scrollTop(

            );
        });

        $(document).ready(function() {
            if (sessionStorage.scrollTop != "undefined") {
                $(window).scrollTop(sessionStorage.scrollTop);
            }
        });



    </script>

@endsection