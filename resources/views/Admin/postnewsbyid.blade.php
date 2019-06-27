@extends('layouts.app')

@section('content')

<div class="container" style="width: 100%">

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Update Post </div>
                        <div class="panel-body">
                        @foreach($team as $teams)
                            <form method="post" action="news">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <input type="hidden" name="userid" value={{$teams->user_id}}>
                                <div class="form-group {{$errors->has('fixture')? 'has-error':''}}">
                                    <label for="Fixture Name"> Fixture Name: </label>
                                    <input type="text" id="Fixture Name" class="form-control" name="fixture" value={{ $teams->team_name }} readonly  >

                                    @if ($errors->has('fixture'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('fixture') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('news')? 'has-error':''}}">
                                    <label for="news"> News: </label>
                                    <input type="text" id="news" class="form-control" name="news" >

                                    @if ($errors->has('news'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('news') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('des')? 'has-error':''}}">
                                    <label for="des" > Descritpion: </label>
                                    <textarea  class="form-control" id="des" name="des" ></textarea>

                                    @if ($errors->has('des'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('des') }}</strong>
                                    </span>
                                    @endif
                                </div>

                              <!-- '<div class="form-group {{$errors->has('image')?'has-error':''}}">
                                    <label for="image"> Image: </label>
                                    <input type="file" name="image" id="image">
                                    @if ($errors->has('image'))
                                        <span class="help-block animated shake">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>-->

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

// <!--<script>
//         $(document).ready(function () {
//           $("#button").click(function (e) {

//                e.preventDefault();
//                var fixture= $('#fixture').val();
//                var news= $('#news').val();
//                var des = $('#des').val();

//                var value=$(this).serialize();


//                $.post('Admin/news' , {fixture:fixture , news:news , des:des },function (data) {

//                    console.log('fixture' +fixture , 'news'+news , 'des'+des);
//                });


//            });


//         });
//     </script>-->
    @endsection
