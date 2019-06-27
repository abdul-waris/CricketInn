<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <title>Stadium Booking</title>
    <link href="{{asset('css/page_style.css') }}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}"  rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.css')}}"/ >

    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
   <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
       <script src="{{asset('/js/user.js')}}"></script>
          
              <script src="{{asset('/js/build/jquery.datetimepicker.full.min.js')}}"></script>

    
</head>
<body  style="background: url('Pallekele-Cricket-Stadium-001.jpg') no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;">

<!--Carousel Main -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="picture1.jpg" class="img-responsive" alt="First Slide" width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h3 class="animated zoomInUp"> Asia Cup </h3>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="picture2.jpg" class="img-responsive" alt="Second Slide" width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h3 class="animated zoomInUp"> PSL </h3>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="picture3.jpg"  class="img-responsive" alt="Third Slide"  width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h3 class="zoomInUp"> World Cup </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<!-- NavBar for Home-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="font-size:15px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarcollapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img src="logo.png" width="150px" style="margin-left:0px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarcollapse">
            <ul class="nav navbar-nav">
               

            </ul>
            <ul class=" nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                @else
                <li><a href="{{url('/home')}}">Home</a></li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                         Booking <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                               <a href="{{url('/groundregistration')}}">Ground Booking</a>
                            </li>
                            <li>
                               <a href="{{url('/ticketbooking')}}">Ticket Booking</a>
                            </li>
                        </ul>
                    </li>
                <li><a href="{{url('/playerregister')}}">Team registration</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     Booked <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                           <a href="{{url('/groundbooked')}}">Ground Booked</a>
                        </li>
                        <li>
                           <a href="{{url('/ticketbooked')}}">Ticket Booked</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('/news')}}">News</a></li>
                <li><a href="{{url('/livescore')}}">Live Score</a></li>
                <li><a href="{{url('/teams')}}">Teams</a></li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             Search <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                               <a href="{{url('/search')}}">Search By Teamname</a>
                            </li>
                            <li>
                               <a href="{{url('/searchbydate')}}">Search By Date</a>
                            </li>
                            <!-- <li>
                               <a href="{{url('/searchbygroundname')}}">Search By Ground</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             Matches Schedule <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                               <a href="{{url('/schedulelastmatch')}}">Privious Matches</a>
                            </li>
                            <li>
                               <a href="{{url('/schedulecurrentmatch')}}">Current Matches</a>
                            </li>
                            <li>
                               <a href="{{url('/schedulenextmatch')}}">UpComming Matches</a>
                            </li>
                        </ul>
                    </li>
                <li><a href="{{url('/fixture')}}">Fixture</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::guard('web')->user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                
                    <li class="dropdown" id="markread">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-bell"></span> Notifications <span class="badge">{{count(auth()->user()->unreadNotifications)}}</span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li onclick="markasread()">
                                @forelse(auth()->user()->unreadNotifications as $notification)
                                        @include('notifications.'.snake_case(class_basename($notification->type)))

                                @empty
                                    <a href="">
                                        No Notification
                                    </a>
                                    @endforelse
                            </li>
                        </ul>
                    </li>
                

                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @if(session()->has('error-mas'))
    <div class="row">
       <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">&times;</button>
                <strong>Error:</strong>{{session()->get('error-mas')}}
    </div>
    </div>
</div>
@endif
<div class="container">
    @if(session()->has('success'))
    <div class="row">
       <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">&times;</button>
                <strong>Success:</strong>{{session()->get('success')}}
    </div>
    </div>
</div>
@endif

@yield('content')
<!-- finish the Row Container -->
   <footer>
    <!-- Footer -->


    <!--footer start from here-->
    <div class="container" id="footerconatiner">

        <!-- Row-->
        <div class="row">

            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                <div class="logo">
                    <img src="logo.png" alt="logo" width="70%">
                </div>
                      <!-- <p> </p> -->
                <p><i class="glyphicon  glyphicon-map-marker"></i> #54000 Lahore, Pakistan</p>
                <p><i class="glyphicon  glyphicon-phone"></i> Phone (Pakistan) : </p>
                <p><i class="glyphicon  glyphicon-envelope"></i> E-mail : cricketinn@gmail.com</p>

            </div>

            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                <h6 class="heading7">GENERAL LINKS</h6>
                <ul class="footer-ul">
                    <li><a href="{{url('/home')}}"> Home</a></li>
                    <li><a href="#"> Privacy Policy</a></li>
                    <li><a href="#"> Terms & Conditions</a></li>
                    <li><a href="#"> Contact us</a></li>
                    <li><a href="#">About</a></li>
                </ul>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <h6 class="heading7">Social Links</h6>
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook social-icon facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter social-icon twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></a></li>
                </ul>

            </div>

        </div>


    </div>
</footer>
<div class="copyright">

    <div class="container">
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            <p>© 2018 - All Rights reserved</p>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            <ul class="bottom_ul">
                <li><a href="#">About us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Faq's</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Site Map</a></li>
            </ul>
        </div>
    </div>
</div>
<script>


   function markasread(){
       $.get('markasread');
   }


     $(document).ready(function () {
         $('#MyCarousel'). carousel({ pause:"hover" , interval: 2000});
         //Main carousel
         $('#myCarousel').carousel({pause:"hover",interval:2000});
         $('.navbar-nav > li > a').animated('')
     });
    
    /* For dropdown menus on hover rather than click 
     /* ------------------------------------------------------------- */
    $(document).ready(function () {
        $('.nav li.dropdown').hover(function () {
            jQuery(this).addClass('open');
        }, function () {
            jQuery(this).removeClass('open');
        });
    });

  
    
</script>


</body>
</html>


