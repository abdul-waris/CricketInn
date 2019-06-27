@extends('layouts.layout')
@section('content')
<style>
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}
.team{
    padding:75px 0;
}
h6.description{
	font-weight: bold;
	letter-spacing: 2px;
	color: #999;
	border-bottom: 1px solid rgba(0, 0, 0,0.1);
	padding-bottom: 5px;
}
.profile{
	margin-top: 25px;
}
.profile h1{
	font-weight: normal;
	font-size: 20px;
	margin:10px 0 0 0;
}
.profile h2{
	font-size: 14px;
	font-weight: lighter;
	margin-top: 5px;
}
.profile .img-box{
	opacity: 1;
	display: block;
	position: relative;
}
.profile .img-box:after{
	content:"";
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.75);
	position: absolute;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
}
.img-box ul{
	position: absolute;
	z-index: 2;
	bottom: 50px;
	text-align: center;
	width: 100%;
	padding-left: 0px;
	height: 0px;
	margin:0px;
	opacity: 0;
}
.profile .img-box:after, .img-box ul, .img-box ul li{
	-webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.img-box ul i{
	font-size: 20px;
	letter-spacing: 10px;
}
.img-box ul li{
	width: 30px;
    height: 30px;
    text-align: center;
    border: 1px solid #88C425;
    margin: 2px;
    padding: 5px;
	display: inline-block;
}
.img-box a{
	color:#fff;
}
.img-box:hover:after{
	opacity: 1;
}
.img-box:hover ul{
	opacity: 1;
}
.img-box ul a{
	-webkit-transition: all 0.3s ease-in-out 0s;
	-moz-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}
.img-box a:hover li{
	border-color: #fff;
	color: #88C425;
}
a{
    color:#88C425;
}
a:hover{
    text-decoration:none;
    color:#519548;
}
i.red{
    color:#BC0213;
}
</style>
   
      <section class="team">
  <div class="container" style="background-color:white;">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <h6 class="description">OUR TEAM</h6>
          <div class="row pt-md">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="" class="img-responsive">
                <ul class="text-center">
                  <a href="#" title=""><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#" title=""><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#" title=""><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1></h1><span><small>(Group leader)</small></span>
              <h2>Web Developer</h2>
              <p> <strong><a href="#" title=""></a></strong></p>
            <p> <strong></strong></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="" class="img-responsive" width="400px">
                <ul class="text-center">
                  <a href="#" title=" "><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#" title=" "><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#" title=" "><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1></h1>
              <h2>Web Developer</h2>
              <p> <strong><a href="#" title=""></a></strong></p>
            <p>Phone #: <strong></strong></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="" class="img-responsive" width="400px">
                <ul class="text-center">
                  <a href="#" title=""><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#" title=""><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#" title=""><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1></h1>
              <h2>Web Developer</h2>
              <p> <strong><a href="#" title=""></a></strong></p>
            <p>Phone #: <strong></strong></p>
            </div>
            </section>

@endsection