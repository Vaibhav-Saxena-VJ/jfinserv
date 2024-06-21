@extends('layouts.user-app')
@section('content')

<style type="text/css">
@media (min-width: 992px){
.pb-lg-115 {
    padding-bottom: 90px;
}

.pt-200 {
    padding-top: 55px;
}
}

</style>



<main>

        <!-- BreadCrumb start -->
      
     <!--<section class="cta-area-2 pt-80 pb-80" style="margin-top: 150px;">-->
     <!--       <div class="container">-->
     <!--           <div class="row align-items-center">-->
     <!--               <div class="col-md-6">-->
     <!--                   <div class="cta-content text-black wow fadeInRight">-->
     <!--                       <h2>Apply for home loan?</h2>-->
                            <!-- <p>Want to know more about our services </p> -->
     <!--                   </div>-->
     <!--               </div>-->
     <!--               <div class="col-md-6 ">-->
     <!--                   <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">-->
     <!--                       <a href="{{config('app.baseURL')}}/apply-now" class="theme-btn wow fadeInLeft" target="_blank">Apply Now</a>-->
     <!--                   </div>-->
     <!--               </div>-->
     <!--           </div>-->
     <!--       </div>-->
     <!--   </section>-->
     
        <!-- BreadCrumb end -->

        <!-- Job posts start -->
        <section class="pb-130 bg_disable" style="margin-top:150px !important;">
            <div class="container">
                <div class="row">
                    <!-- left side bar -->
                         @include('layouts.user-left')

                    <!-- Right bar -->
                    <div class="col-lg-9">
                        <div class="job-post-widget">

                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.3s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="#">Job / Business Profile</a> &nbsp;&nbsp;<a href="{{config('app.baseURL')}}/edit-professional-detail"><i class="icon_pencil-edit_alt"></i></a></h6>
                                        
                                    </div>
                                </div>
                                
                                
                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Profession Type :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->profession_type}} </div>
                                    </div>
                                </div>
                                
                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Qualification :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->qualification}} </div>
                                    </div>
                                </div>

                                @if($user->company_name!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Firm / Company Name :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->company_name}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($user->nature_of_work)
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Nature Of Work :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->nature_of_work}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($user->company_address)
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Office Address :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->company_address}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($user->work_experience)
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Work/Business Experience :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->work_experience}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($user->business_estabish_date)
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Business Establish Date :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->business_estabish_date}} </div>
                                    </div>
                                </div>
                                @endif
                                
                            </div>
                            
                            
                     

                     
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Job posts end -->


    </main>

    @endsection