@extends('layouts.layout')

@section('content')

<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in'<strong>' User'<strong>'!
                </div>
            </div>
        </div>
    </div>
</div>-->


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
            <h3 class="text-center">TOUR DATES</h3>
            <p class="text-center"><br> Remember to book your tickets!</p>

            <div class="row text-center">
                <div class="col-sm-4 col-lg-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="images.jpg" class="img-responsive" alt="Match Ticket" >
                        <p><strong>Match Ticket</strong></p>
                        <p>Fri. 27 November 2015</p>
                        <!--<button class="buton">Buy Tickets</button>-->
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="images.png" class="img-responsive" alt="Match Ticket">
                        <p><strong>Match Ticket</strong></p>
                        <p>Sat. 28 November 2015</p>
                       <!--<button class="buton">Buy Tickets</button>-->
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="images.jpg" class="img-responsive" alt="Match Ticket" >
                        <p><strong>Match Ticket</strong></p>
                        <p>Sun. 29 November 2015</p>
                        <!--<button class="buton">Buy Tickets</button>-->
                    </div>
                </div>
                <div class="clearfix col-sm-4"></div>
                <div class="clearfix col-lg-4"></div>
                <div class="clearfix col-xs-4"></div>

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


            <div class="section-news" style="background-color: transparent;;">

                <div class="row">



                    <div class="latest-news ">
                        <div class="thumb col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="images.jpg" class="img-responsive" alt="latest news"style="height: 200px; margin-left: -15px; border-top-left-radius: 11px">
                        </div>
                        <div class="clearfix topbar">
                            <div class="date"> 28-09-2017 </div>
                            <div class="auhter"> By Admin </div>
                            <div class="des">
                                <a href="#"><h4>Caught, run out, but not out!</h4></a>
                            </div>
                            <div class="data">
                                Jonny Singer talks us through the decision to give India batsman Hardik Pandya not out during
                                their recent ODI vs Australia.

                            </div>
                        </div>

                    </div>


                    <hr>


                    <div class="latest-news">
                        <div class="thumb col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="images.jpg" class="img-responsive" alt="latest news" style="height:200px ; margin-left:-15px; border-top-left-radius: 11px">
                        </div>

                        <div class="clearfix topbar">
                            <div class="date"> 28-09-2017</div>
                            <div class="auhter"> By Admin </div>
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

        </div>
    </div>

@endsection
