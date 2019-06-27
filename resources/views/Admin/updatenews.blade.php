@extends('layouts.app')

@section('content')

<div class="container" style="width: 100%">

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Update Post </div>
                        <div class="panel-body">
                        @foreach($team as $teams)
                    
                            <form method="post" action="newsupdate{{$teams->id}}">
                            
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <input type="hidden" name="userid" value="{{$teams->admin_id}}" >
                                <div class="form-group {{$errors->has('fixture')? 'has-error':''}}">
                                    <label for="Fixture Name"> Fixture Name: </label>
                                    <input type="text" id="Fixture Name" class="form-control" name="fixture" value="{{$teams->fixture}}" readonly  >

                                    @if ($errors->has('fixture'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('fixture') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('news')? 'has-error':''}}">
                                    <label for="news"> News: </label>
                                    <input type="text" id="news" class="form-control" name="news" value="{{$teams->news}}">

                                    @if ($errors->has('news'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('news') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('des')? 'has-error':''}}">
                                    <label for="des" > Descritpion: </label>
                                    <textarea  class="form-control" id="des" name="des">{{$teams->des}}</textarea>

                                    @if ($errors->has('des'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('des') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary"> Submit </button>
                                {{ csrf_field() }}
                            </form>
                            @endforeach
                        </div>
                </div>
            </div>
            <div class=" clearfix col-xs-12"></div>
            <div class="clearfix col-sm-12"></div>
        </div>
    </div>
    @endsection
