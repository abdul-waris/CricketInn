<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link href="{{asset('css/admin.css') }}" rel="stylesheet">
</head>

<div class="sidenav">
    <ul class="nav sidebar-nav">
   <li class="sidebar-brand">
       <a href="#">Dashboard</a>

   </li>
        <li>
            <a href="#">Home</a>
        </li>
    <li>
        <a href="#">Booking</a>
    </li>
        <li>
            <a href="#">Fixture</a>
        </li>
        <li>
            <a href="#">News</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>

   </ul>
</div>


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
   @yield('content')
</div>



<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>