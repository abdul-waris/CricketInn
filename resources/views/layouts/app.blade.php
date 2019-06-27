<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stadium Booking</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}"  rel="stylesheet">


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top " style="background-color:transparent ">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}"> Stadium Booking
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                  <!--  <ul class="nav navbar-nav">
                        <li><a href="{{url('Admin/home')}}">HOME</a></li>
                        <li><a href="#">BOOKING</a></li>
                        <li><a href="#">FIXTURE</a></li>
                        <li><a href="{{url('Admin/news')}}">NEWS</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>-->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if(Auth::guest(''))
                            <li><a href="{{ url('/Admin') }}">Login</a></li>
                            <li><a href="{{url('Admin/register')}}">Register</a></li>
                        @else
                            <ul class="nav navbar-nav">
                                <li><a href="{{url('Admin/home')}}">HOME</a></li>
                                <!--<li><a href="{{url('Admin/groundbook')}}">BOOKING</a></li>-->
                                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                         BOOKING <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                               <a href="{{url('Admin/groundbook')}}">Ground Booking</a>
                            </li>
                            <li>
                               <a href="{{url('Admin/matchticket')}}">Ticket Booking</a>
                            </li>
                        </ul>
                    </li>
                                <li><a href="{{url('Admin/fixture')}}">FIXTURE</a></li>
    
                                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           TEAM  <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('Admin/team_registration')}}">Team Registration</a></li>
                            <li><a href="{{url('Admin/team')}}">Teams</a></li>
                        </ul>
                    </li>
                                <li><a href="{{url('Admin/livescore')}}">LIVE SCORE</a></li>
                                <li><a href="{{url('Admin/ground')}}">New Groundregister</a></li>
                                <li><a href="{{url('Admin/registeredground')}}">Registered Ground</a></li>
                                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             Matches Schedule <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                               <a href="{{url('Admin/schedulelastmatch')}}">Privious Matches</a>
                            </li>
                            <li>
                               <a href="{{url('Admin/schedulecurrentmatch')}}">Current Matches</a>
                            </li>
                            <li>
                               <a href="{{url('Admin/schedulenextmatch')}}">UpComming Matches</a>
                            </li>
                        </ul>
                    </li>
                                <li><a href="{{url('Admin/aboutus')}}">ABOUT</a></li>
                                <li><a href="{{url('Admin/contact')}}">CONTACT</a></li>
                            </ul>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                                        {{ Auth::user()->name }} <span class="caret"></span>
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
                           <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-bell"></span> Notifications <span class="badge">{{count(auth()->user()->unreadNotifications)}}</span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        @forelse(auth()->user()->Notifications as $notification)
                                            <a href=''>{{$notification->type}}</a>
                                        @empty
                                            <a href="">
                                                No Notification
                                            </a>
                                        @endforelse
                                    </li>
                                </ul>
                            </li>-->

                        @endif
                    </ul>
                </div>
            </div>
        </nav>

       <div class="container">
    @if(session()->has('error-mas'))
    <div class="row">
       <div class="alert alert-success" id="alert">
       <div class="alert alert-danger" >
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
       <div class="alert alert-success" id="alert">
            <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">&times;</button>
                <strong>Success:</strong>{{session()->get('success')}}
    </div>
    </div>
</div>
@endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<script>
/* For dropdown menus on hover rather than click 
     /* ------------------------------------------------------------- */
    $(document).ready(function () {
        $('.nav li.dropdown').hover(function () {
            jQuery(this).addClass('open');
        }, function () {
            jQuery(this).removeClass('open');
        });

        $("#alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#alert").slideUp(500);
});
    });

  
</script>

