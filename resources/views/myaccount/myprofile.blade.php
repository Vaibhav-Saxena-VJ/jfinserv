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
                    <div class="col-lg-9 mt-4">
                        <div class="content-wrapper">
                          <div class="content-header row">
                            <div class="content-header-left col-md-9 col-12 mb-2">
                              <div class="row breadcrumbs-top">
                                <div class="col-12">
                                  <h2 class="content-header-title float-left mb-0">My Profile</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}/myrefercode">My Profile </a>
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
      <div  class="form-section ">

        <form action="myprofile" method="post">
            @csrf
         <div class="row">
             
             <div class="col-sm-12" style="padding:10px;">
                 
                 <div class="row">
             
          <div class="col-sm-6" style="margin-bottom:20px;">
              <label>Name*</label>
           <div class="form-group">
             <input type="text" name="name" class="form-control" value="{{$user->name}}" id="copy_link" placeholder="Name" style="width: 100%;" required="">
           </div>
         </div><br>
         
          <div class="col-sm-6" style="margin-bottom:20px;">
              <label>Contact Number (Login Id)</label>
           <div class="form-group">
             <input type="number" name="contact_number" class="form-control" value="{{$user->contact_number}}" id="copy_link" placeholder="Contact Number" style="width: 100%;" readonly>
           </div>
         </div>
         
         @if($user->email!=$user->contact_number)
          <div class="col-sm-6" style="margin-bottom:10px;">
              <label>Email*</label>
           <div class="form-group">
              <input type="email" name="email" class="form-control" value="{{$user->email}}" id="copy_link" placeholder="Email" style="width: 100%;" required="">
           </div>
         </div>
         @else
         
          <div class="col-sm-6" style="margin-bottom:10px;">
              <label>Email*</label>
           <div class="form-group">
              <input type="email" name="email" class="form-control" value="" id="copy_link" placeholder="Email" style="width: 100%;" required="">
           </div>
         </div>
         
         @endif
         
         
         
         <div class="col-md-6" style="margin-bottom:10px;padding-top: 4%;">
                                        <label class="label mb-4">Marital Status*</label>

                                        <div class="form-check form-check-inline me-5">
                                            <input class="form-check-input" type="radio" name="MaritalStatas"
                                                id="single" value="single" >
                                            <label class="form-check-label" for="single">Single</label>
                                        </div>
                                        <div class="form-check form-check-inline me-5">
                                            <input class="form-check-input" type="radio" name="MaritalStatas"
                                                id="married" value="married">
                                            <label class="form-check-label" for="married">Married</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6"  style="margin-bottom:15px;">
                                        <label class="label" for="dob-d">Date of Birth*</label>
                                        <input type="date" name="date_of_birth" id="date_of_birth" value="{{$user->date_of_birth}}" class="form-control w-100" placeholder="Enter DOB" required>
                                    </div>
         
          <div class="col-sm-6" style="margin-bottom:15px;">
              <label>Residence Address*</label>
           <div class="form-group">
              <textarea type="text" name="present_address" required="" class="form-control" value="{{$user->present_address}}" id="copy_link" placeholder="Residential Address" style="width: 100%;">{{$user->present_address}}</textarea>
           </div>
         </div>
         
           <div class="col-sm-6" style="margin-bottom:20px;">
              <label>City*</label>
           <div class="form-group">
              <input type="text" name="city" required="" class="form-control" value="{{$user->city}}" id="copy_link" placeholder="City" style="width: 100%;">
           </div>
         </div>
           <div class="col-sm-6" style="margin-bottom:20px;">
              <label>State*</label>
           <div class="form-group">
              <input type="text" name="state" required="" class="form-control" value="{{$user->state}}" id="copy_link" placeholder="State" style="width: 100%;">
           </div>
         </div>
           <div class="col-sm-6" style="margin-bottom:15px;">
              <label>Pincode*</label>
           <div class="form-group">
              <input type="text" name="pincode" required="" class="form-control" value="{{$user->pincode}}" id="copy_link" placeholder="Pincode" style="width: 100%;">
           </div>
         </div>
         
         
         <br>
         
         <div class="col-sm-4"></div>
         <div class="col-sm-12" style="margin-top:10px;">
          <!--<button type="submit" class="btn btn-primary" id="copyText" class="site-button">Update</button>-->
          
          <button type="submit" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; height: 40px; line-height: 40px; float: left; margin-left: 0px !important; font-size: 16px !important;"> Update
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
$( document ).ready(function() {
 if ("{{$user->marital_status}}"=="single") {
     
    $('#single').prop('checked',true);
  }
  
  if ("{{$user->marital_status}}"=="married") {
    $('#married').prop('checked',true);
  }
});


</script>

    @endsection