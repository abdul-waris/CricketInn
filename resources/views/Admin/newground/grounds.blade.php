@extends('layouts.app')
@section('content')
 <div class="container" style="width:100%;">
         <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                   <div class="panel panel-default">
                       <div class="panel-heading">  New Ground Registration  </div>
                            <div class="panel-body">
                                <form method="POST" action="newgroundregister" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-lg-4 col-sm-4 col-xs-4" for="name"> UserName: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                           <!-- <div class="form-control" id="name">hello</div>-->
                                            <p class="form-control tooltip-test" title="Admin Name" >{{Auth::user()->name}}</p>
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('groundname')? 'has-error':''}}">
                                        <label class="control-label col-md-4 col-lg-4 col-sm-4 col-xs-4" for="groundname"> Ground Name: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6" >
                                            <input type="text" name="groundname" id="groundname" class="form-control tooltip-test" title="ground name" placeholder="Enter Your groundName" value="{{ old('groundname') }}"  >

                                            @if ($errors->has('groundname'))
                                                <span class="help-block animated shake">
                                        <strong>{{ $errors->first('groundname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('ownername')? 'has-error':''}}">
                                        <label for="ownername" class="control-label col-md-4 col-lg-4 col-sm-4 col-xs-4"> Owner Name: </label>
                                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                             <input type="text" name="ownername" id="ownername" class="form-control tooltip-test" title="Owner name" placeholder="Enter Owner name" value="{{ old('ownername') }}">

                                             @if ($errors->has('ownername'))
                                                 <span class="help-block animated shake">
                                        <strong>{{ $errors->first('ownername') }}</strong>
                                                     </span>
                                             @endif
                                         </div>
                                    </div>

                                    <div class="form-group {{$errors->has('address')? 'has-error':''}}">
                                        <label for="address" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Address: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <input type="text" class="form-control tooltip-test" title="Street Address / House No " name="address" id="address" placeholder="Enter Address" value="{{ old('address') }}">
                                            <p class="help-block">
                                                Street Address / House No / Club Name
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
                                        @if($errors->has('province'))
                                            <span class="help-block animated shake">
                                                <strong>{{$errors->first('province')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{$errors->has('state')? 'has-error':''}}">
                                        <label for="state" class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> State: </label>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                                            <input type="text" class="form-control tooltip-test" title="State name" name="state" id="state" placeholder="State" value="{{ old('state') }}">
                                        @if($errors->has('state'))
                                            <span class="help-block animated shake">
                                                <strong>{{$errors->first('state')}}</strong>
                                            </span>
                                            @endif
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

                                    <div class="form-group {{$errors->has('groundrate')? 'has-error':''}}">
                                        <label for="groundrate" class="control-label col-sm-4 col-md-4 col-lg-4 col-xs-4"> Ground Rate: </label>
                                         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                                 <div class='input-group date'>
                                                     <input type="text" class="form-control tooltip-test" title="Ground rate" name="groundrate" id="groundrate" placeholder="Ground Rate" value="{{old('groundrate')}}">
                                                         <span class="input-group-addon">.00</span>
                                                        
                                                 </div>
                                             @if($errors->has('groundrate'))
                                                 <span class="help-block animated shake">
                                                     <strong>{{$errors->first('groundrate')}}</strong>
                                                 </span>
                                                 @endif
                                         </div>
                                      </div>

                                    <div class="form-group {{$errors->has('electricityrate')? 'has-error':''}}">
                                        <label for="electricity" class="control-label col-sm-4 col-md-4 col-lg-4 col-xs-4"> Electric city: </label>
                                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                            <div class='input-group date'>
                                                <input type="text" class="form-control tooltip-test" title="Electricity Rate" name="electricityrate" id="electricityrate" placeholder="Enter Electricity Rate" value="{{old('electricityrate')}}">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                            @if($errors->has('electricityrate'))
                                                <span class="help-block animated shake">
                                                     <strong>{{$errors->first('electricityrate')}}</strong>
                                                 </span>
                                            @endif
                                        </div>
                                    </div>
                                
                                  <div class="form-group {{$errors->has('time')? 'has-error':''}}">
                                    <label class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Time T20: </label>
                                    
                                        <input type="hidden" value="5" name="times20">
                                    <label class="radio-inline ">
                                        <input id="radio1" name="time20[]" value="8AM-10:30AM" type="checkbox">
                                         8AM-10:30AM</label>
                                    <label class="radio-inline ">
                                        <input id="radio2" name="time20[]" value="11AM-1:30PM" type="checkbox">
                                        11AM-1:30PM</label>
                                    <label class="radio-inline ">
                                        <input id="radio3" name="time20[]" value="2PM-4:30PM" type="checkbox">
                                        2PM-4:30PM</label>
                                        <label class="radio-inline  ">
                                        <input id="radio3" name="time20[]" value="5PM-7:30PM" type="checkbox">
                                        5PM-7:30PM</label>
                                        <label class="radio-inline  ">
                                        <input id="radio3" name="time20[]" value="8PM-10:30PM" type="checkbox">
                                        8PM-10:30PM</label>
                                        <label class="radio-inline ">
                                        <input id="radio3" name="time20[]" value="None" type="checkbox">
                                        None</label>
                                    
                                @if ($errors->has('time'))
                                    <span class="help-block animated shake">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group {{$errors->has('time')? 'has-error':''}}">
                                    <label class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Time One Day: </label>
                                    
                                        
                                    <label class="radio-inline ">
                                        <input id="radio1" name="time50[]" value="8AM-1:00PM" type="checkbox">
                                        8AM-1:00PM</label>
                                    <label class="radio-inline ">
                                        <input id="radio2" name="time50[]" value="1:30PM-6:30PM" type="checkbox">
                                        1:30PM-6:30PM</label>
                                    <label class="radio-inline ">
                                        <input id="radio3" name="time50[]" value="7PM-12:00AM" type="checkbox">
                                        7PM-12:00AM</label>
                                        <label class="radio-inline ">
                                        <input id="radio3" name="time50[]" value="None" type="checkbox">
                                        None</label>
                                    
                                @if ($errors->has('time50'))
                                    <span class="help-block animated shake">
                                        <strong>{{ $errors->first('time50') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                            <div class="form-group {{$errors->has('time')? 'has-error':''}}">
                                    <label class="control-label col-ms-4 col-lg-4 col-sm-4 col-xs-4"> Time Test: </label>
                                    
                                        
                                    <label class="radio-inline ">
                                        <input id="radio1" name="timetest[]" value="8AM-4:00PM" type="checkbox">
                                        8AM-4:00PM</label>
                                        <label class="radio-inline ">
                                        <input id="radio1" name="timetest[]" value="None" type="checkbox">
                                        None</label>
                                        
                                    
                                @if ($errors->has('time50'))
                                    <span class="help-block animated shake">
                                        <strong>{{ $errors->first('time50') }}</strong>
                                    </span>
                                @endif
                            </div>


                                  <!--  <span>Ground Book for :</span>  <span id="days">  </span> <span>days</span>-->

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" class="btn btn-primary pull-right tooltip-test"  title="Submit form" id="submitbutton" value="submit"> Submit </button>
                                    </div>
                                        </div>

                                    
                                </form>

                            </div>
                  </div>
              </div>

         </div>

    </div>

@endsection