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
.icons{
        height: 64px !important;
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
<a class="navbar-brand" href="https://jfinserv.com">
                        <!-- <img src="assets/img/logo/Logo-2.png" srcset="assets/img/logo/Logo-2@2x.png 2x" alt="logo"> -->
                        <h2 style="margin-left: 50px;">JFINSERV</h2>
                    </a>
  <!-- Indicators -->
  <ul class="carousel-indicators" style="margin-right: 230px;">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Home Loan</h5>
                            <p style="font-size: 14px; text-align: left;">At JFINSERV, we understand you don’t really want a loan, but a new home or to save money on your repayments. We’re here to help with low rates, great features, and a seamless process to settlement.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Mortgage Loan</h5>
                            <p style="font-size: 14px; text-align: left;">JFINSERV brings to you - Mortgage Loan - an innovative combination of a loan and overdraft facility with flexible repayment options against the security of your immovable property. Check out your loan against property eligibility and get exclusive add on benefits and tax benefits.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
        <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Project Loan</h5>
                            <p style="font-size: 14px; text-align: left;">We’ll help take the stress out of financing your building or renovations with our low rates and easy online application. From streamlined packages to fully-featured loans, you’ll find a low rate construction loan that’s perfect for you.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Overdraft Facility</h5>
                            <p style="font-size: 14px; text-align: left;">An overdraft facility allows you to withdraw funds from a fixed line of credit as and when you need to. Repayment is also easy and hassle-free, as you can repay what you borrow at your convenience. This makes an overdraft facility one of the most desired credit options. JFinserv offers these features through its unsecured Flexi personal loan.

</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Lease Rental Discounting (LDR)</h5>
                            <p style="font-size: 14px; text-align: left;">Lease Rental Discounting is a term loan that is offered against rental receipts and is availed by tenants against leased contracts. So, if you want to avail of funding, against your rental receipts, this financing option enables you to do that.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Car Loan</h5>
                            <p style="font-size: 14px; text-align: left;">Millions of Indians today are upwardly mobile, and on the move. Many are looking at having their own car to reach their destination in time and in comfort. Now, the years of waiting and saving are over. A Car Loan will bring that dream of owning a vehicle within your reach.

</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Referal Program</h5>
                            <p style="font-size: 14px; text-align: left;">We’ll help take the stress out of financing your building or renovations with our low rates and easy online application. From streamlined packages to fully-featured loans, you’ll find a low rate construction loan that’s perfect for you.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <!-- <div class="carousel-item">
      <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" style="margin-left: 120px">
    </div>
    <div class="carousel-item">
      <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" style="margin-left: 120px">
    </div> -->
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: 85px;">
    <span class="carousel-control-next-icon"></span>
  </a>


<ul class="login_options" style="margin-top: 120px; margin-right: 75px;">
          <li><a target="_blank" href="https://jfinserv.com/terms-condition">Terms of Services</a></li>
          <li><a target="_blank" href="https://jfinserv.com/privacy-policy">Privacy Policy</a></li>
          <li><a target="_blank" href="https://jfinserv.com/cookie-policy">Cookie Policy</a></li>
        </ul>



</div>
    </div>  
 


<div class="col-lg-6" style="margin-top: 10%;border-radius: 15px;">

    <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-2 py-md-5">
    <a href="index.html" class="fade-page"></a>
    <div class="row justify-content-center my-1" >
    <div class="col-lg-12">
           
        <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
            <div class="login_rightbox grc_login_rightbox" data-parsley-validate="" novalidate="">
            <div class="welcome_content" style="padding-bottom: 40px;">
            <h3 class="welcome">Reset Password!</h3>
            <p class="text-black">Remember Password ? <span class="blue-text"><a href="{{config('app.baseURL')}}/login">Login</a> </span><span class="arrow-span">&nbsp;<img src="{{config('app.baseURL')}}/images/rightarrow.svg" alt="arrow"></span></p>
                

          <div class="floating-form" style="padding: 0px 50px 10px 50px;">
            <div class="floating-label">      
              <input class="form-control floating-input email @error('email') is-invalid @enderror" name="email" type="text" placeholder="Email" data-parsley-required="true" data-parsley-pattern="^(([^<>()\[\]\\.,;:\s@/&quot;]+(\.[^<>()\[\]\\.,;:\s@/&quot;]+)*)|(/&quot;.+/&quot;))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$" data-parsley-required-message="Please enter the email id" data-parsley-pattern-message="Invalid email" autofocus="" required value="{{ $email ?? old('email') }}">
              <span class="highlight"></span>
              <!-- <label>Email ID</label> -->
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          <div class="floating-form" style="padding: 0px 50px 0px 50px;">
            <div class="floating-label" id="show_hide_password">      
              <input class="form-control floating-input password @error('password') is-invalid @enderror" name="password" type="password" id="password" placeholder="Password" data-parsley-required="true" data-parsley-required-message="This field is required" onkeypress="enterFunction('.login_user')" autocomplete="new-password">
              <span class="show-eye" id="show_eye" style="display: none;" onclick="passwordShowHide()"><i class="fa fa-eye-slash" aria-hidden="true" style="color: #606162; font-size: 16px; padding-right: 10px;"></i></span>
              <span class="highlight"></span>
              <!-- <label>New Password</label> -->
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          <div class="floating-form" style="padding: 0px 50px 0px 50px;">
            <div class="floating-label" id="show_hide_password">      
              <input class="form-control floating-input password" id="password-confirm" name="password_confirmation" type="password" placeholder="Confirm Password" data-parsley-required="true" data-parsley-required-message="This field is required" onkeypress="enterFunction('.login_user')" autocomplete="new-password">
              <span class="show-eye" id="show_eye" style="display: none;" onclick="passwordShowHide()"><i class="fa fa-eye-slash" aria-hidden="true" style="color: #606162; font-size: 16px; padding-right: 10px;"></i></span>
              <span class="highlight"></span>
              <!-- <label>Confirm Password</label> -->
            </div>
          </div>
     
     
            <button type="submit" class="btn btn-primary login_user btn-lg" style="margin-top: 10%;">Reset Password <img src="{{config('app.baseURL')}}/images/right-arrorigharrow.svg" style="padding-left: 5px; height: 13px;"></button>
        </div>
        </form>
          
    </div>
               
    </div>
    </div>
    
</div>
</section>
</div>
</section>
@endsection
