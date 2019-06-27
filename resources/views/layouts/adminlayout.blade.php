<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <link href="{{asset('css/admincustom_style.css') }}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}"  rel="stylesheet">

    
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
                    <h3 class="animated bounce"> Hello </h3>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="picture2.jpg" class="img-responsive" alt="Second Slide" width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h3> Hey </h3>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="picture3.jpg"  class="img-responsive"alt="Third Slide"  width="100%">
            <div class="container">
                <div class="carousel-caption">

                    <h3> heyyyyy </h3>
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
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img src="logo.png" width="150px"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Booking</a></li>
                <li><a href="#">Fixture</a></li>
                <li><a href="{{url('Admin/news')}}">News</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
            <ul class=" nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
                @endif
            </ul>
        </div>
    </div>
</nav>



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
                <p></p>
                <p><i class="glyphicon  glyphicon-map-marker"></i> #54000, Samanbad, Lahore, Pakistan</p>
                <p><i class="glyphicon  glyphicon-phone"></i> Phone (Pakistan) : </p>
                <p><i class="glyphicon  glyphicon-envelope"></i>  </p>

            </div>

            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                <h6 class="heading7">GENERAL LINKS</h6>
                <ul class="footer-ul">
                    <li><a href="#"> Home</a></li>
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
            <p>© 2016 - All Rights with prabuuideveloper</p>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            <ul class="bottom_ul">
                <li><a href="#">prabuuideveloper.com</a></li>
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

</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>

