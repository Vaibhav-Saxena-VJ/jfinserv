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
                                  <h2 class="content-header-title float-left mb-0">Bank Detail</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}/myrefercode"> Bank Details </a>
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

        @php
          if($bank_detail==""){

          $gpay="";
          $phone_pay="";
          $upi_id="";
          $account="";
          $ifsc="";
          $holder="";

          }else{
            $gpay=$bank_detail->gpay_number;
         
          $phone_pay=$bank_detail->phone_pay_number;
          $upi_id=$bank_detail->upi_id;
          $account=$bank_detail->bank_account_number;
          $ifsc=$bank_detail->ifsc_code;
          $holder=$bank_detail->holder_name;

           }
        @endphp

        <form action="{{config('app.baseURL')}}/bank-details" method="post">
          @csrf
         <div class="row">
          <div class="col-sm-6" style="margin-top: 20px;">
            <label>UPI ID</label>
           <div class="form-group">
             <input type="text" name="upi_id" class="form-control" value="{{$upi_id}}" value="" placeholder="abc@oksbi" style="width: 100%;">
           </div>
         </div>
          <div class="col-sm-6" style="margin-top: 20px;">
            <label>Gpay Number</label>
           <div class="form-group">
             <input type="text" name="gpay_number" class="form-control" value="{{$gpay}}" value="" placeholder="999XXXXXXXX" style="width: 100%;">
           </div>
         </div>
          <div class="col-sm-6" style="margin-top: 20px;">
            <label>PhonePe Number</label>
           <div class="form-group">
             <input type="text" name="phone_pay_number" class="form-control" value="{{$phone_pay}}" value="" placeholder="999XXXXXXXX" style="width: 100%;">
           </div>
         </div>
          <div class="col-sm-6" style="margin-top: 20px;">
            <label>Account Number</label>
           <div class="form-group">
             <input type="text" name="bank_account_number" class="form-control" value="{{$account}}" value="" placeholder="6243XXXXXX" style="width: 100%;">
           </div>
         </div>
          <div class="col-sm-6" style="margin-top: 20px;">
             <label>IFSC Code</label>
           <div class="form-group">
             <input type="text" name="ifsc_code" class="form-control" value="{{$ifsc}}" value="" placeholder="SBIXXXXX" style="width: 100%;">
           </div>
         </div>
          <div class="col-sm-6" style="margin-top: 20px;">
             <label>Account Holder Name</label>
           <div class="form-group">
             <input type="text" name="holder_name" class="form-control" value="{{$holder}}" value="" placeholder="Rahul XXXXX" style="width: 100%;">
           </div>
         </div>
      <br>
         <div class="col-sm-12" style="margin-top: 15px;">
          <button type="submit" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; height: 40px; line-height: 40px; float: left; margin-left: 0px !important; font-size: 16px !important;"> Update
                            </button>
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


    @endsection