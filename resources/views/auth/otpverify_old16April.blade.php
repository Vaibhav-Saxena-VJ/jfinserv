@extends('layouts.app')

@section('content')

<style type="text/css">
  
  .form-control {

    height: 50px;
}
.blue-text {
    color: #007AFF;
    text-decoration: underline;
    font-weight: 600;
    cursor: pointer;
    margin-top: 7px;
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
.text-muted {
    --bs-text-opacity: 1;
    color: #6c757d!important;
    padding-top: 50px;
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
    height: calc(100vh - 0px) !important;
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
p.res_message{
  font-style: normal;
font-weight: 600;
font-size: 18px;
line-height: 23px;
color: #0B5A5F;
opacity: 0.85;
margin-top: 21px;
margin-bottom: 206px;
margin-left: 28px;

}
</style>






<!-- Old Forgot password  -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<section class="row no-gutters p-0 bg-light min-vh-100" >
  <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="background:url({{config('app.baseURL')}}/assets/img/blog/login.png) no-repeat fixed;">
    
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


    <div class="col-lg-6" style="margin-top: 10%;border-radius: 15px;">

        <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-2 py-md-5">
        <a href="index.html" class="fade-page">

      </a>
      <div class="row justify-content-center my-1" >
          <div class="col-lg-8">
            <div class="card card-body shadow text-left text-dark">
      
<form method="POST" action="{{config('app.baseURL')}}/otpverify">
                @csrf

            <div class="login_rightbox grc_login_rightbox" data-parsley-validate="" novalidate="">
      <div class="welcome_content" style="padding-bottom: 40px;">
        <h3 class="welcome">OTP Verify!</h3>
        
      </div>
            

      <div class="floating-form" style="padding: 0px 50px 10px 50px;">
        <div class="floating-label">      
          <input class="form-control floating-input otp" name="otp" type="text" placeholder="Please Enter OTP" data-parsley-required="true" data-parsley-required-message="Please enter OTP" data-parsley-pattern-message="Invalid OTP" autofocus="" >
          <span class="highlight"></span>
          <!-- <label>Email ID</label> -->
        </div>
      </div>
     <div class="floating-form" style="padding: 0px 50px 10px 50px;">
        <div class="floating-label">      
          <input class="form-control floating-input otp" name="uid" type="hidden" id="uid" value="{{$id}}">
        
          <span class="highlight"></span>
          <!-- <label>Email ID</label> -->
        </div>
      </div>
     

    </div>
           
   
        <a href="{{config('app.baseURL')}}/login"><button type="button" class="btn btn-primary login_user btn-lg" style="margin-top: 10%;">Back </button></a>
        <!-- <a href="{{config('app.baseURL')}}/otpverify"> --><button type="submit" class="btn btn-primary login_user btn-lg" style="margin-top: 10%;">Verify </button> 
        <!-- </a> -->
        <!-- <a href="{{config('app.baseURL')}}/resendotp"><button type="button" class="btn btn-primary login_user btn-lg" id="resendbtn" style="margin-top: 10%;">Resend </button></a> -->
          </form> 
          <a href="{{config('app.baseURL')}}/resendotp" class="mt-2"><p class="blue-text" id="resendbtn">Resend OTP </p></a>
           <div class="message" id="msg_div">
          <!-- <p class="res_message" id="res_message" name="res_message"></p> -->
        </div>  
    </div>
  </div>
            
          </div>
      </div>
    
    </div>
</section>
</div>
</section>


<script type="text/javascript">
$(document).ready(function (e) {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#resendbtn').click(function(e) {


var id=$('#uid').val();
e.preventDefault();
var formData = new FormData();
 formData.append('id', id);
 formData.append('_token', '{{ csrf_token() }}');
// alert(id);

$.ajax({
type:'POST',
url: "{{ url('resendotp')}}",
data: formData,
cache:false,
contentType: false,
processData: false,
success: (data) => {
console.log(data);
$('#msg_div').append('<p class="res_message" id="res_message" name="res_message">'+data+' </p>');

},
error: function(data){
console.log(data);
}
});
});
});
</script>
@endsection
