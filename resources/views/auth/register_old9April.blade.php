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
</style>

<section class="row no-gutters p-0 bg-light min-vh-100" >
 <div class="col-lg-6"style="background:url({{config('app.baseURL')}}/assets/img/blog/login.png) no-repeat fixed;">
    
  </div>


<div class="col-lg-6" style="margin-top: 10%;border-radius: 15px;">
    <section class="p-0 text-white">
      <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-2 py-md-5">
        <a href="index.html" class="fade-page">
          <!-- <img src="{{asset('assets\img\logo.png')}}" alt="logo"  class="bg-white" width="100"> -->
      </a>
      <div class="row justify-content-center my-1" >
          <div class="col-lg-12">
  <form method="POST" action="{{config('app.baseURL')}}/newregister">
                        @csrf

            <div class="login_rightbox grc_login_rightbox" data-parsley-validate="" novalidate="">
      <div class="welcome_content" style="padding-bottom: 80px;">
        <h3 class="welcome">Welcome back!</h3>
        <p class="text-black">Already have an account?  <span class="blue-text"><a href="{{config('app.baseURL')}}/login">Login</a> </span><span class="arrow-span">&nbsp;<img src="{{config('app.baseURL')}}/images/rightarrow.svg" alt="arrow"></span></p>
      </div>
      <div class="floating-form" style="padding: 0px 50px 10px 50px;">
        <div class="floating-label">      
 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <span class="highlight"></span>
          <label>Email ID</label>
        </div>
      </div>
      

        <div class="floating-form" style="padding: 0px 50px 0px 50px;">
        <div class="floating-label" id="show_hide_password">      
           <input id="contact_number" type="number" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" placeholder="Contact Number">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <span class="highlight"></span>
          <label>Contact</label>
        </div>
      </div>

        <div class="floating-form" style="padding: 0px 50px 0px 50px;">
        <div class="floating-label" id="show_hide_password">      
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <span class="highlight"></span>
          <label>Email</label>
        </div>
      </div>

       <div class="floating-form" style="padding: 0px 50px 0px 50px;">
        <div class="floating-label" id="show_hide_password">      
           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <span class="highlight"></span>
          <label>Password</label>
        </div>
      </div>

        <div class="floating-form" style="padding: 0px 50px 0px 50px;">
        <div class="floating-label" id="show_hide_password">      
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <span class="highlight"></span>
          <label>Password</label>
        </div>
      </div>
   
      <button type="submit" class="btn btn-primary login_user btn-lg" style="margin-top: 1%;">Register <img src="{{config('app.baseURL')}}/images/right-arrorigharrow.svg" style="padding-left: 5px; height: 13px;"></button>
    </div>
           
           </form>
           <!--  <div class="text-left text-dark">
               <h1 class="h2 text-center mb-lg-5">Sign In</h1>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group" style="margin:10px 0px;">
                   <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                   @error('email')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group" style="margin:10px 0px;">
              <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
                     
                </div>
             
                 <button class="btn btn-primary" type="submit">Sign In</button>

            
           
        </form>
        <div class="col-md-12 m-20 mt-2">
          <div class="row">
          <p class="psign">Not Register?<a href="{{config('app.baseURL')}}/Auth/registeruser" style="color:blue">Sign Up</a></p>
          </div>
        </div>
        </div> -->
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
