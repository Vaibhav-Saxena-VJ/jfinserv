@extends('layouts.app')

@section('content')

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
  .form-control {

    height: 50px;
}
.bg-light {
    background-color: #fff!important;
}
.form-control {
    background: #dddddd59;
}
.bg-light {
    background-color: #EAF4FF !important;
}
.header{
  display: none;
}
.footer{
  display: none;
}
.welcome{
  font-weight: 600 !important;
}
body{
  overflow-x: hidden;
}
.blue-text {
    color: #007AFF;
    text-decoration: underline;
    font-weight: 600;
    cursor: pointer;
}
.text-black{
  color: #000 !important;
  font-weight: 600;
}
.floating-form input {
    border: 0;
    border-bottom: 1px solid #CACED1;
    box-shadow: none;
    border-radius: 0;
    margin-bottom: 25px;
    font-size: 15px;
    height: 35px;
}
.floating-input:not([value=""]):valid ~ label{
    top: -18px;
    font-size: 13px;
    color: #606162;
}
.floating-form label {
    color: #606162;
    font-size: 14px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 5px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}
.footer-checkbox {
    display: inline-block;
    margin-top: 0px;
    margin-left: -10px;
}

.footer-checkbox-right {
    display: inline-block;
    float: right;
}
input.filled-in[type="checkbox"]+label {
    position: relative;
    padding-left: 15px;
    cursor: pointer;
    display: inline-block;
    height: 16px;
    line-height: 25px;
    width: 17px;
    font-size: 1 rem;
    -webkit-user-select: none;
    border: 2px solid #007AFF;
    float: left;
    margin-top: 2px;
    margin-right: 8px;
    min-height: 15px;
    border-radius: 2px;
}
input.filled-in[type="checkbox"] {
    display: none;
}
.footer-checkbox{
  color: #000 !important;
}
.login_leftbox {
        /*background: #e1f5f9;*/
    /*height: calc(100vh - 0px) !important;*/
    padding: 5% 3%;
    background-repeat: no-repeat;
    background-size: 100% auto;
    /*width: 50%;*/
}
.service-image{
  width: calc(60vh + 0px) !important;
  /*height: 400px;*/
}
.grc_login_box a {
    color: #007AFF !important;
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.login_options {
    padding: 0;
    text-align: center;
    position: relative;
    top: 50px;
}
.login_options li {
    display: inline-block;
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 12px;
    line-height: 14px;
    color: #007AFF;
    margin-right: 25px;
}
</style>

<section class="row no-gutters p-0 bg-light min-vh-100">
<!--  <div class="col-lg-6"style="background:url({{config('app.baseURL')}}/assets/img/blog/login.png) no-repeat fixed;">
    
  </div> -->
  <div class="login_leftbox col-lg-6 col-md-6 col-sm-12 col-12" style="background:url({{config('app.baseURL')}}/assets/img/banner/grc-bg-6b2fea043861dedae0e18db7c192ea80fdee6a660dce540c9919d32480891d14.svg) no-repeat fixed;">
      <!-- <div id="myCarousel" class="carousel slide pointer-event" data-ride="carousel">
        <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
        

       
        <div class="carousel-inner text-center">

          <div class="item">
            <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" class="service-image">
          </div>
          <div class="item">
            <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" class="service-image">
          </div>
          <div class="item">
            <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" class="service-image">
          </div>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
        <ul class="login_options">
          <li><a target="_blank" href="#">Terms of Service</a></li>
          <li><a target="_blank" href="#">Privacy Policy</a></li>
          <li><a target="_blank" href="#">Cookie Policy</a></li>
          <li><a target="_blank" href="#">Refund Policy</a></li>
        </ul>
      </div> -->
      <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" style="margin-left: 120px">
    </div>
    <div class="carousel-item">
      <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" style="margin-left: 120px">
    </div>
    <div class="carousel-item">
      <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" style="margin-left: 120px">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
   <!--  <span class="carousel-control-prev-icon"></span> -->
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
  <!--   <span class="carousel-control-next-icon"></span> -->
  </a>


<ul class="login_options">
          <li><a target="_blank" href="#">Terms of Service</a></li>
          <li><a target="_blank" href="#">Privacy Policy</a></li>
          <li><a target="_blank" href="#">Cookie Policy</a></li>
          <li><a target="_blank" href="#">Refund Policy</a></li>
        </ul>



</div>
    </div>  



<div class="col-lg-6" style="margin-top: 5%;">
    <section class="p-0 text-white">
      <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-2 py-md-5">
        <a href="index.html" class="fade-page">
          <!-- <img src="{{asset('assets\img\logo.png')}}" alt="logo"  class="bg-white" width="100"> -->
      </a>
      <div class="row justify-content-center my-1">
          <div class="col-lg-8">
           
            <div class="card card-body shadow text-left text-dark">
                <span class="text-center" style="color: #0050b2; font-size: 30px;">Jfinserv</span><br>
               <h1 class="h2 text-center mb-lg-5"> Login Your Account</h1>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group" style="margin:10px 0px;">
                   <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                   @error('email')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <div class="form-group" style="margin:10px 0px;">
              <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
                      <!-- <div class="text-right text-small mt-2">
                        <a href="account-forgot-password.html">Forgot Password?</a>
                    </div> -->
                </div><br>
                <!-- <div class="form-group">
                  <div class="custom-control custom-checkbox text-small">
                    <input class="form-check-input" class="form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="" for="sign-in-remember">Remember me next time</label>
                </div> -->
                <input type="checkbox"> By clicking Agree & Join, you agree to the Register User Agreement, Privacy Policy, and Cookie Policy.</label><br><br>
                 <button class="btn btn-primary btn-lg" type="submit" style="width: 100%;">Log In</button>

            
           
        </form>
        <div class="col-md-12 m-20 mt-2">
          <div class="row">
          <p class="psign">Not have an account?<a href="{{config('app.baseURL')}}/Auth/registeruser" style="color:blue"> Register</a></p>
          </div>
        </div>
        </div>
    </div>
               <!--  <div class="text-center text-small mt-3">
                  Don't have an account? <a class="text-white" href="account-sign-up-cover.html">Sign up here</a>
              </div> -->
          </div>
      </div>
      <div>
          <!-- <a href="{{config('app.baseURL')}}" class="btn btn-sm btn-light fade-page">Back to Home</a> -->
      </div>
  </div>
</section>
</div>
</section>

@endsection
