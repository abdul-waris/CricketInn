@extends('layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Carousel Two After Nav-->
    <!--<div class="container" id="rowcontainer" style="width: 100%;display: block; margin-top: -30px " >
        <!-- Row
        <div class="row" id="news">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class=" carousel slide " id="MyCarousel" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li  data-target="#MyCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#MyCarousel" data-slide-to="1"></li>
                        <li data-target="#MyCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="download.jpg" alt="First img" width="100%">
                            <div class="container" style="background-color: #2ab27b">
                                <div class="carousel-caption">
                                    <h3> hello </h3>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="/examples/images/slide3.png" alt="third img" width="100%">
                            <div class="container">
                                <div class="carousel-caption" style="-webkit-animation-delay: 2s;">
                                    <h3> hey </h3>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="/examples/images/slide3.png" alt="third img" width="100%">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h3> heeyyy </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control left" href="#MyCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>

                    <a class="carousel-control right" href="#MyCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!-- Clearfixes--

            <div class="clearfix visible-sm-block"></div>
            <div class="clearfix visible-xs-block"></div>

            <!-- Secand Carousel --

            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">

                <div class=" carousel slide " id="MYCarousel" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li  data-target="#MYCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#MYCarousel" data-slide-to="1"></li>
                        <li data-target="#MYCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="download.jpg" alt="First img" width="100%">
                            <div class="container" style="background-color: #2ab27b">
                                <div class="carousel-caption">
                                    <h3> hello </h3>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="/examples/images/slide3.png" alt="third img" width="100%">
                            <div cleass="container">
                                <div class="carousel-caption" style="-webkit-animation-delay: 2s;">
                                    <h3> hey </h3>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="/examples/images/slide3.png" alt="third img" width="100%">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h3> heeyyy </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control left" href="#MYCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>

                    <a class="carousel-control right" href="#MYCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>

                </div>

            </div>
            <!-- Clearfixes --
            <div class="clearfix visible-sm-block"></div>
            <div class="clearfix visible-xs-block"></div>
            <div class="clearfix visible-md-block"></div>
            <div class="visible-lg-block"></div>

        </div>


    </div>
    <!-- finish the Row Container -->

    <!-- Container (TOUR Section) -->
    <div class="bg-1">
        <div class="container">
            <h3 class="text-center">Matches DATES</h3>
            <p class="text-center">we"'"ll play you some Cricket.<br> Remember to book your tickets!</p>

            <div class="row text-center">
                @foreach($groundbook as $groundbook)
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
               
                    <div class="thumbnail">
                        <img src="{{URL::asset('images.jpg')}}" class="img-responsive" alt="Match Ticket" style="height:250px;">
                        <p><strong>{{$groundbook->team_name}} VS {{$groundbook->opponent_teamname}}</strong></p>
                        <p>{{date('M, d Y', strtotime($groundbook->duration))}}</p>
                        <a href="ticketbooking{{$groundbook->id}}" class="buton btn btn-default">Buy Tickets</a>
                    </div>
                </div>
                @endforeach
            
            </div>
        </div>
    </div>

     <div class="bg-1">
        <div class="container">
            <h3 class="text-center">Details</h3>
            
            <div class="row text-center">
            
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
               <a href="users"><h4 class="text-center"> Users </h4></a>
                    <div class="thumbnail">
                        <div class="container Count" style="height:100px; width: auto; background-color:white; padding:20px; font-size:30px;">
                          {{$user}}
                       </div>
                    </div>
                </div>

                 <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
               <a href="bookedtickets"><h4 class="text-center">Tickets Booked</h4></a>
                    <div class="thumbnail">
                        <div class="container Count" style="height:100px; width: auto; background-color:white;padding:20px; font-size:30px;">
                           {{$ticketbooking}}
                        </div>
                    </div>
                </div>

                 <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">

               <a href="groundbookeds"><h4 class="text-center">Ground Booked</h4></a>
                    <div class="thumbnail">
                        <div class="container Count" style="height:100px; width: auto; background-color:white; padding:20px; font-size:30px;">
                                 {{$groundbooking}}
                         </div>
                    </div>
                </div>
               
                            </div>
        </div>
    </div>

    <!--Latest News-->
    <div class="container">
        <div class="headerline">
            <h3 class="text-center">
                Latest News
            </h3>
            <hr>


            <div class="section-news" style="background-color: transparent;">

                <div class="row">
                    @foreach($posts as  $post)
                    <div class="latest-news" style="margin-bottom:5px;">
                        <div class="thumb col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="{{URL::asset('images.jpg')}}" class="img-responsive" alt="latest news"style="height: 200px; margin-left: -15px; border-top-left-radius: 11px">
                        </div>
                        <div class="clearfix topbar">
                            <div class="date"> {{$post->created_at}} </div>
                            <div class="auhter"> By Admin name</div>
                            <div class="des">
                                <a href="#"><h4>{{$post->fixture}}</h4></a>
                            </div>
                            <div class="data">
                                {{$post->des}}

                            </div>
                            <div class="news">
                                {{$post->news}}
                            </div>
                            <a href="update{{$post->id}}" class="btn btn-default"> Edit News </a>
                        </div>


                    </div>
                    @endforeach
                   {{$posts->links()}}
                        <!--<button type="button" id="button" class="btn btn-danger">Hide</button>-->

                    <hr>


                    <!--<div class="latest-news">
                        <div class="thumb col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="images.jpg" class="img-responsive" alt="latest news" style="height:200px ; margin-left:-15px; border-top-left-radius: 11px">
                        </div>

                        <div class="clearfix topbar">
                            <div class="date"> 28-09-2017</div>
                            <div class="auhter"> By Admin name</div>
                            <div class="des">
                                <a href="#"><h4>Caught, run out, but not out!</h4></a>
                            </div>

                            <div class="data">
                                Jonny Singer talks us through the decision to give India batsman Hardik Pandya not out during
                                their recent ODI vs Australia.
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>-->
    </div>
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function () {
            $('#button').click(function (e) {
                e.preventDefault();
               alert('hello');
               // $('.date').toggle();
            });

            $('.Count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 1000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
        });
    </script>

@endsection

