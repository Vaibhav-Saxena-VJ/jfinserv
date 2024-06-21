@extends('layouts.user-app')
@section('content')
<style type="text/css">
#footer-table_filter{
    float: right;
}
.footer-table-length{
    width: 60px;
}
.form-control{
    display: inline-block;
    width: 100px;
}
.previous{
    margin-left: 366px;
}
div.dataTables_wrapper div.dataTables_length select {
    width: auto;
    display: inline-block;
}
</style>
<main>
<!-- <section class="breadcrumb-area">
            <div class="breadcrumb-widget  pt-145 pb-125" style="background-image: url(http://localhost/finance/assets/img/banner/loan-banner.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content pt-170">
                                <h1>My Account</h1>
                                <ul>
                                    <li><a href="{{config('app.baseURL')}}">home</a></li>
                                    <li>My Account</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->
        <!-- BreadCrumb end -->

        <!--     <section class="cta-area-2 pt-80 pb-80" style="margin-top: 150px;">-->
        <!--    <div class="container">-->
        <!--        <div class="row align-items-center">-->
        <!--            <div class="col-md-6">-->
        <!--                <div class="cta-content text-black wow fadeInRight">-->
        <!--                    <h2>Apple for home loan?</h2>-->
                            <!-- <p>Want to know more about our services </p> -->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 ">-->
        <!--                <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">-->
        <!--                    <a href="{{config('app.baseURL')}}/apply-now" class="theme-btn wow fadeInLeft" target="_blank">Apply Now</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

        <!-- Job posts start -->
        <section class="pb-130 bg_disable" style="margin-top: 150px;">
            <div class="container">
                <div class="row">
                    <!-- left side bar -->
                         @include('layouts.user-left')

                    <!-- Right bar -->
                    <div class="col-lg-6 mt-4">
                        <div class="content-wrapper">
                          <div class="content-header row">
                            <div class="content-header-left col-md-9 col-12 mb-2">
                              <div class="row breadcrumbs-top">
                                <div class="col-12">
                                  <h2 class="content-header-title float-left mb-0">Change Password</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}/myrefercode"> Change Password </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                      All                                </li>
                                    </ol> 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 

                          <div class="content-body card" style="padding:25px;">
                            <div class="col-md-12">
      <div  class="form-section">

        <form action="change-password" method="post">
            @csrf
         <div class="row">
             
             <div class="col-sm-12" style="padding:10px;">
                 
                 <div class="row">
             
          <div class="col-sm-12" style="margin-bottom:20px;">
               <label>Old Password*</label>
           <div class="form-group">
             <input type="text" name="old_password" class="form-control" value="" id="copy_link" value=""  placeholder="Old Password" style="width: 100%;" required="">
           </div>
         </div><br>
         
          <div class="col-sm-12" style="margin-bottom:20px;">
              <label>Password*</label>
           <div class="form-group">
             <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="" id="copy_link" value=""  placeholder="Password" style="width: 100%;" required="">
           </div>
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
         </div><br>
         
          <div class="col-sm-12" style="margin-bottom:20px;">
               <label>Confirm Password*</label>
           <div class="form-group">
             <input type="text" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" value="" id="copy_link" value=""  placeholder="Confirm Password" style="width: 100%;" required="">
           </div>
            @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
         </div><br>
         
         <div class="col-sm-4"></div>
         <div class="col-sm-12" style="margin-top:10px;">
          <button type="submit" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; height: 40px; line-height: 40px; float: left; margin-left: 0px !important; font-size: 16px !important;"> Change
                            </button>
        </div>
        
        </div>
        </div>

      </div>
    </form>
  </div>
</div>
                          </div>
                        </div>

                      
<!-- datatable js -->

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

                         </div>    
                    </div>
                </div>
            
        </section>
       


       


    </main>
    <script type = "text/javascript">



</script>

    @endsection