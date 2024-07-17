@extends('layouts.app')
@section('content')

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
  .text-left-new{
    text-align: left;
    margin-left:18% !important;
    color:#0050b2;
    margin:10px 0px;
  }
  
  .show_hide_password{
    background: #fff;
    border: 1px solid #ced4da !important;
    border-radius: .25rem;
  }
  
  .show_hide_password .form-control{
    background: none !important;
    border: none !important;
  }

  .form-control-password:focus {
    box-shadow: 0 0 0 0rem rgb(0 123 255 / 25%) !important;
  }

  .input-group-addon:focus {
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
  }

  .input-group-addon{
    align-self: center;
  }

  .icon_box-checked{
    margin-right:6px !important;
    color:#000 !important;
  }

  .form-control {
    height: 50px;
  }

  .icon-bg-1{
    background-color: #fff!important;
  }

  .bg-light {
    background: url(images/login-bg-2.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .form-control {
    background: #fff;
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
    padding: 1.5% 3%;
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
    text-align: left;
    position: relative;
    top: 10pc;
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

  .login_options li a {
    color: #fff;
  }
  
  .icons{
    height: 90px !important;
  }
  
  .carousel-indicators{
    margin-left:10% !important;
  }
      
  /*CSS for Mobile View*/
  @media screen and (min-width: 300px) and (max-width: 800px){
    .row {
      --bs-gutter-x: hidden!important;
    }
    .carousel-control-next{
    margin-right: 0px!important;
  }
    .carousel-control-next, .carousel-control-prev {
      width: 7%!important; 
    }
    
    .form-group{
      margin-bottom: 10px;
    }
    
    .login_options{
      margin-top: 0px!important;
      margin-right: 0px!important;
      margin-bottom: 56px;
    }
  }
  
  @media screen and (min-width: 701px) and (max-width:800px){
  .feature-card-widget-2{
    width: 295px!important;
      margin-left: 46px!important;
    }
  }
  
  @media screen and (min-width: 651px) and (max-width: 750px){
  .feature-card-widget-2{
      width: 400px!important;
      margin-left: 159px!important;
    }
  }
  
  @media screen and (min-width: 601px) and (max-width: 650px){
  .feature-card-widget-2{
      width: 412px!important;
      margin-left: 122px!important;
    }
  }
  
  @media screen and (min-width: 551px) and (max-width: 600px){
    .feature-card-widget-2{
        width: 412px!important;
        margin-left: 97px!important;
      }
      .carousel-indicators {
        margin-left: 10% !important;
        margin-bottom: 0%;
    }
  }
  
  @media screen and (min-width: 501px) and (max-width: 550px){
    .feature-card-widget-2{
        width: 400px!important;
        margin-left: 74px!important;
      }
      .carousel-indicators {
        margin-left: 10% !important;
        margin-bottom: -2%;
    }
  }
  
  @media screen and (min-width: 451px) and (max-width: 500px){
  .feature-card-widget-2{
      width: 380px!important;
      margin-left: 53px!important;
    }
  }
  
  @media screen and (min-width: 401px) and (max-width: 450px){
  .feature-card-widget-2{
      width: 337px!important;
      margin-left: 39px!important;
    }
  }
  
  @media screen and (min-width: 351px) and (max-width: 400px){
    .feature-card-widget-2{
      width: 290px!important;
      margin-left: 36px!important;
      /*display: block;*/
    }
  }
  
  @media screen and (min-width: 300px) and (max-width: 350px){
    .feature-card-widget-2{
      width: 250px!important;
      margin-left: 35px!important;
    }
  }
</style>

<section class="bg-light min-vh-100">
    <div class="container pt-5">
        <div class="row" style="border: 2px solid #d7ccc8; border-radius: 5px;">
            <div class="login_leftbox col-lg-7 col-md-7 col-sm-12 mt-150">
                <div id="demo" class="carousel slide pointer-event text-center" data-ride="carousel">
                  <!-- <a class="navbar-brand" href="">
                    <img src="/images/logo/logo.png" srcset="/images/logo/logo.png" alt="logo" style="width:200px;margin-left:20%;">
                  </a> -->
                  <img src="/images/logo/logo.png" srcset="https://jfinserv.com/images/logo/logo.png" alt="logo" style="width: 250px;background: #fff;padding: 10px;">
                  <h1 class="text-center mt-5 text-white"><b>Welcome to Jfinserv Consultant</b></h1>
                  <ul class="login_options">
                    <li><a target="_blank" href="/terms-condition">Terms of Services</a></li>
                    <li><a target="_blank" href="/privacy-policy">Privacy Policy</a></li>
                    <li><a target="_blank" href="/cookie-policy">Cookie Policy</a></li>
                    <!--<li><a target="_blank" href="#">Refund Policy</a></li>-->
                  </ul>
                </div>
            </div>
    
            <div class="col-lg-5 col-md-5 mx-auto" style="background: radial-gradient(black, transparent);">
                <div class="text-center">
                    <a href="index.html" class="fade-page">
                        <!-- <img src="/assets/img/logo.png" alt="logo"  class="bg-white" width="100"> -->
                    </a>
                  
                    <div class="row justify-content-center my-5">
                        <div class="col-md-12 mx-auto my-5">
                            <div class="card-body shadow text-left text-dark" style="border-radius: 10px;"> 
                                <h2 class="h2 text-left mt-2 mb-3" style="color: #fff;"><b>Sign In</b></h2> 
                                <form method="POST" action="{{ route('login') }}" data-gtm-form-interact-id="0">
                                    @csrf
                                    <div class="form-group" >
                                        <input id="number" type="text" placeholder="Contact Number" class="form-control @error('contact_number') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="return isNumberKey(event)">
                                        
                                        @error('contact_number')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group" >
                                        <div class="input-group show_hide_password" id="show_hide_password">
                                            <input id="password" type="password" placeholder="Password" class="form-control form-control-password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            <div class="input-group-addon">
                                                <a href="javascript:void(0);"><i class="fa fa-eye-slash" aria-hidden="true" style="padding-right:10px;"></i></a>
                                            </div>
                                        </div>
                            
                                        @error('password')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div><br>
                                    <a href="{{config('app.baseURL')}}/forgot_password" class="text-white"><u>Forgot Password?</u></a><br><br>
                                    <button class="btn btn-primary btn-lg" type="submit" style="width: 100%;">Log In</button>
                                </form>
                
                                <div class="col-md-12 m-20 mt-2">
                                  <div class="row text-white">
                                    <p class="psign">Not have an account? <a href="{{config('app.baseURL')}}/Auth/registeruser" class="text-white"><u>Register</u></a></p>
                                    <p class="psign">Register As a Partner <a href="{{config('app.baseURL')}}/Auth/registerpartner" class="text-white"><u>Register</u></a></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    
    $(document).ready(function() {
    $(".show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});

</script>
<script type="text/javascript">
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<script>

  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
  }
  @endif

</script>

@endsection