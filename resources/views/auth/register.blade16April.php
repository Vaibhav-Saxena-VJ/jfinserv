@extends('layouts.app')

@section('content')
<style type="text/css">
  .form-control {

    height: 50px;
}
.bg-light {
    background-color: #fff!important;
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
    /*top: 100px;*/
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
<!--  <div class="col-lg-6"style="background:url(https://jfinserv.com/assets/img/banner/loginimg.png) no-repeat fixed;">
    
  </div> -->
  <div class="login_leftbox col-lg-6 col-md-6 col-sm-12 col-12" style="background:url({{config('app.baseURL')}}/assets/img/banner/grc-bg-6b2fea043861dedae0e18db7c192ea80fdee6a660dce540c9919d32480891d14.svg) no-repeat fixed;">
      <div id="myCarousel" class="carousel slide pointer-event" data-ride="carousel">
        
        

       
        <div class="carousel-inner text-center">

          <div class="item">
            <img src="{{config('app.baseURL')}}/assets/img/banner/loginimg.png" alt="JFinserv" class="service-image">
            <div class="carousel-content">
              <h3></h3>
              <p> <br>  <br> <br> <br> <br><br> </p>
            </div>
          </div>

        </div>
        <ul class="login_options">
          <li><a target="_blank" href="#">Terms of Service</a></li>
          <li><a target="_blank" href="#">Privacy Policy</a></li>
          <li><a target="_blank" href="#">Cookie Policy</a></li>
          <li><a target="_blank" href="#">Refund Policy</a></li>
        </ul>
      </div>
    </div>  
    <div class="col-lg-6" style="margin-top: 10%;">
    <section class="p-0 bg-gradient text-white">
      <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-2 py-md-5">
        <a href="index.html" class="fade-page">
          <!-- <img src="{{asset('assets\img\logo.png')}}" alt="logo"  class="bg-white" width="100"> -->
      </a>
<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Register</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{config('app.baseURL')}}/newregister">
                        @csrf

                        <div class="form-group row">
                            <!-- <label for="name" class="label1 col-md-5 col-form-label text-md-right">Name</label> -->

                            <div class="col-md-12 mb-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="email" class="label1 col-md-5 col-form-label text-md-right">E-Mail Address</label> -->

                            <div class="col-md-12 mb-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <!-- <label for="email" class="label1 col-md-5 col-form-label text-md-right">E-Mail Address</label> -->

                            <div class="col-md-12 mb-2">
                                <input id="contact_number" type="number" class="form-control @error('email') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" placeholder="Contact Number">

                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                         <div class="form-group row">
                                    <div class="col-md-12 mb-2">
                                       
                                        <div class="apply-content">
                                            
                                            <select name="select_loan_type" class="select-box" style="padding: 10px;width: 100%;border-color: #dcdee0;
    color: #57575b;" required>
                                                <option selected disabled>Purpose</option>
                                                    <option id="Home_loan" value="Home Loan">Home Loan</option>
                                                <option id="Home_loan" value="Mortgage Loan" value="Mortgage Loan">Mortgage Loan</option>
                                                <option value="Project Loan">Project Loan</option>
                                                <option value="Working Capital">Working Capital</option>
                                                <option value="Overdraft Facility">Overdraft Facility</option>
                                                <option value="Machinary Loan">Machinary Loan</option>
                                                <option value="Business Loan">Business Loan</option>
                                                <option value="Real Estate">New Flat Purchase</option>
                                                <option value="Resale">Resale Flat Purchase</option>
                                                <option value="Lands">Land Purchase</option>
                                                <option value="Shop/Office Purchase">Shop/Office Purchase</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                        <div class="form-group row">
                            <!-- <label for="name" class="label1 col-md-5 col-form-label text-md-right">Name</label> -->

                            <div class="col-md-12 mb-2">
                                <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus placeholder="Amount">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="label1 col-md-5 col-form-label text-md-right">Password</label> -->

                            <div class="col-md-12 mb-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="label1 col-md-5 col-form-label text-md-right">Confirm Password</label> -->

                            <div class="col-md-12 mb-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-1">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <p style="color:#000;">Already have an account? <a href="{{config('app.baseURL')}}/login" style="color:blue;"> Login</a></p><br>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</section>
</div>
</section>

@endsection
