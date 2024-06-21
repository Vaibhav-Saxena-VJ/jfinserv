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
        <section class="pb-130 bg_disable" style="margin-top:150px;">
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
                                  <h2 class="content-header-title float-left mb-0">Professional Detail</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}/"> Professional Detail </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                      All                                </li>
                                    </ol> 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 

                          <div class="content-body">
                            <div class="col-md-12">
      <div  class="form-section">

        <form action="professional-detail" method="post">
            @csrf
         <div class="row">
             
             <div class="col-sm-8 card" style="padding:10px;">
                 
                 <div class="row">
                      <div class="col-md-12">
                          
                         @php
                         if($user->profession_type=="self"){
                         $check="checked";
                         }else{
                          $check="";
                         }
                         @endphp
                                    <div class="form-check form-check-inline me-5  selfTab">
                                        <input class="form-check-input" type="radio" name="profession_type" {{$check}} id="selfTab" value="self">
                                        <label class="form-check-label" for="self">Self Employed/ Business Professionals</label>
                                    </div>
                                    @php
                         if($user->profession_type=="salaried"){
                         $check="checked";
                         }else{
                          $check="";
                         }
                         @endphp
                                    <div class="form-check form-check-inline active me-5">
                                        <input class="form-check-input" type="radio" name="profession_type" id="salariedTab" {{$check}} value="salaried">
                                        <label class="form-check-label" for="married">Salaried Employees </label>
                                    </div>
                                </div>
                      <div class="col-sm-12" style="margin-bottom:10px;">
              <label>Firm / Company Name</label>
           <div class="form-group">
             <input type="text" name="company_name" class="form-control" value="{{$user->company_name}}" id="copy_link" placeholder="Company Name" style="width: 100%;">
           </div>
         </div><br>
             
          <div class="col-sm-12" style="margin-bottom:10px;">
              <label>Qualification</label>
           <div class="form-group">
             <input type="text" name="qualification" class="form-control" value="{{$user->qualification}}" id="copy_link" placeholder="Qualification" style="width: 100%;">
           </div>
         </div><br>
         
          <div class="col-sm-12" style="margin-bottom:10px;">
              <label>Nature Of Work</label>
           <div class="form-group">
             <input type="text" name="nature_of_work" class="form-control" value="{{$user->nature_of_work}}" id="copy_link" placeholder="Nature Of Work" style="width: 100%;">
           </div>
         </div><br>
         
          <div class="col-sm-12" style="margin-bottom:10px;">
              <label>Company Address</label>
           <div class="form-group">
              <input type="text" name="company_address" class="form-control" value="{{$user->company_address}}" id="copy_link" placeholder="Company Address" style="width: 100%;">
           </div>
         </div>
         
           <div class="col-sm-12" style="margin-bottom:10px;">
              <label>Work Experience</label>
           <div class="form-group">
              <input type="text" name="work_experience" class="form-control" value="{{$user->work_experience}}" id="copy_link" placeholder="Work Experience" style="width: 100%;">
           </div>
         </div>
         @if($profession_type=="salaried)
           <div class="col-sm-12" style="margin-bottom:10px;">
              <label>Business Establish Date</label>
           <div class="form-group">
              <input type="text" name="business_estabish_date" class="form-control" value="{{$user->business_estabish_date}}" id="business_estabish_date" placeholder="Business Establish Date" style="width: 100%;">
           </div>
         </div>
         @endif
         
         
         <br>
         
         <div class="col-sm-4"></div>
         <div class="col-sm-2" style="margin-top:10px;">
          <button type="submit" class="btn btn-primary" id="copyText" class="site-button">Update</button>
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