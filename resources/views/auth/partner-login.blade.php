@extends('layouts.app')

@section('content')
<style type="text/css">
  .form-control {

    height: 50px;
}
body{
  overflow-x: hidden;
}
</style>

<section class="row no-gutters p-0 bg-light min-vh-100" >
 <div class="col-lg-6"style="background:url({{config('app.baseURL')}}/images/partner-register.png) no-repeat fixed;">
    
  </div>


<div class="col-lg-6" style="margin-top: 10%;border-radius: 15px;">
    <section class="p-0 text-white">
      <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-2 py-md-5">
        <a href="index.html" class="fade-page">
          <!-- <img src="{{asset('assets\img\logo.png')}}" alt="logo"  class="bg-white" width="100"> -->
      </a>
      <div class="row justify-content-center my-1" >
          <div class="col-lg-8">
           
            <div class="card card-body shadow text-left text-dark">
               <h1 class="h2 text-center mb-lg-5">Partern Login</h1>
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
                      <!-- <div class="text-right text-small mt-2">
                        <a href="account-forgot-password.html">Forgot Password?</a>
                    </div> -->
                </div>
                <!-- <div class="form-group">
                  <div class="custom-control custom-checkbox text-small">
                    <input class="form-check-input" class="form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="" for="sign-in-remember">Remember me next time</label>
                </div> -->
                 <button class="btn btn-primary" type="submit">Sign In</button>

            
           
        </form>
        <div class="col-md-12 m-20 mt-2">
          <div class="row">
          <p class="psign">Not Register?<a href="{{config('app.baseURL')}}/partner/register" style="color:blue">Sign Up as a Partner</a></p>
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
