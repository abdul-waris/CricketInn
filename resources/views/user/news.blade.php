@extends('layouts.layout')

@section('content')

<div class="container" id="newsbox">


    <div class="container" id="leftcont">
        <div class="row">
            @foreach($posts as $post)
            <div id="leftside">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
               <div id="image">
                   <a href="#"><img src="images.jpg" class="img-responsive" alt="latest news" style="height: 152px; width:205px; margin-left: -15px; border-radius:10px ; margin-bottom:-4px; "> </a>
               </div>
             </div>

               <div class="clearfix itemdes" id="description">
                   <div class="col-lg-9 col-md-9 col-xs-9 col-sm-9">
                       <div class="des">
                           <a href="#"><h4>{{$post->fixture}}</h4></a>
                       </div>

                       <div class="data">{{$post->news}}

                       </div>
                       <div class="date">{{$post->created_at->diffForHumans()}}</div>
                       <div class="auhter"> By Admin </div>
                   </div>
               </div>

            <div class="clearfix col-lg-12"></div>
            <div class="clearfix col-md-12"></div>
            <div class="clearfix col-sm-12"></div>
            <div class="clearfix col-xs-12"></div>
        </div>
            @endforeach


            <div id="leftside">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div id="image">
                        <a href="#"><img src="images.jpg" class="img-responsive" alt="latest news" style="height: 152px; width:205px; margin-left: -15px; border-radius:10px ; margin-bottom:-4px; "> </a>
                    </div>
                </div>

                <div class="clearfix itemdes" id="description">
                    <div class="col-lg-9 col-md-9 col-xs-9 col-sm-9">
                        <div class="des">
                            <a href="#"><h4>Caught, run out, but not out!</h4></a>
                        </div>

                        <div class="data">
                            Jonny Singer talks us through the decision to give India batsman Hardik Pandya not out during
                            their recent ODI vs Australia.
                        </div>
                        <div class="date"> 28-09-2017</div>
                        <div class="auhter"> By Admin name</div>
                    </div>
                </div>

                <div class="clearfix col-lg-12"></div>
                <div class="clearfix col-md-12"></div>
                <div class="clearfix col-sm-12"></div>
                <div class="clearfix col-xs-12"></div>
            </div>

        </div>

    </div>
</div>





    <!--  <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container" style="width: 100%">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Update Post </div>
                    <div class="panel-body">
                            <form method="post" action="postnews" id="form-insert">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name"> Name: </label>
                                <input type="text" id="name" class="form-control" name="name" >
                            </div>

                            <div class="form-group">
                                <label for="news"> News: </label>
                                <input type="text" id="news" class="form-control" name="news" required>
                            </div>

                            <div class="form-group">
                                <label for="des" > Descritpion: </label>
                                <textarea  class="form-control" id="des" name="des" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Img"> Image: </label>
                                <input type="file" name="image" id="img">
                            </div>

                            <button type="submit" class="btn btn-primary" id="getrequest"> Submit </button>
                            {{ csrf_field() }}
                            </form>
                    </div>
                </div>
            </div>
            <div class=" clearfix col-xs-12"></div>
            <div class="clearfix col-sm-12"></div>
        </div>
    </div>-->
   <!--<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            $('#form-insert').on('submit', function (e) {

                e.preventDefault();

               /* var name='haziq';
                var news = 'hahahahahaha';
                var des = 'hello';

                $('#name').val(name);
                $('#news').val(news);
                $('#des').val(des);
              /*  var name= $('#name').val();
                var news =$('#news').val();
                var des = $('#des').val();
                */
               var data = $(this).serialize();

              var url = $(this).attr('action');
              var post = $(this).attr('method');
                alert(url);
                $.ajax({
                    type:post,
                    url:url,
                    data:{
                        /*'name':name,
                        /'news':news,
                        'des':des*/
                        data
                    },
                    success:function (data) {
                      console.log(data);
                    }
                });
            });

        });
    </script>-->

@endsection