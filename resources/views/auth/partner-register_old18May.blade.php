@extends('layouts.app')

@section('content')
<style type="text/css">
    .label1{
        color: black;
    }
      .form-control {

    height: 50px;
}
body{
  overflow-x: hidden;
}
</style>
<section class="row no-gutters p-0 bg-light min-vh-100">
 <div class="col-lg-6"style="background:url({{config('app.baseURL')}}/images/partner-register.png) no-repeat fixed;">
    
  </div>
<div class="col-lg-6" style="margin-top: 10%;border-radius: 15px;">
    <section class="p-0 bg-gradient text-white">
      <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-2 py-md-5">
        <a href="index.html" class="fade-page">
          <!-- <img src="{{asset('assets\img\logo.png')}}" alt="logo"  class="bg-white" width="100"> -->
      </a>
<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Partner Register</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{config('app.baseURL')}}/partner/register">
                        @csrf

                        <div class="form-group row">
                            <!-- <label for="name" class="label1 col-md-5 col-form-label text-md-right">Name</label> -->

                            <div class="col-md-12 mb-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">

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
                                <input id="contact_number" type="number" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" placeholder="Contact Number">

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
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
                     <div class="col-md-12 m-20 mt-2">
          <div class="row">
          <p class="psign" style="color: #000;">Already registered as a partner? <a href="{{config('app.baseURL')}}/partner/login" style="color:blue">LogIn</a></p>
          </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</section>

@endsection
