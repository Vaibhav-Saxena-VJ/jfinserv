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
        <section class="pb-130 bg_disable" style="margin-top: 150px;">
            <div class="container">
                <div class="row">
                    <!-- left side bar -->
                         @include('layouts.user-left')

                    <!-- Right bar -->
                    <div class="col-lg-9">
                        <div class="job-post-widget">

                            <div class="single-job-post me-1 wow fadeInUp mt-25">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="#">Personal Information</a> &nbsp;&nbsp;<a href="{{config('app.baseURL')}}/edit-myprofile"><i class="icon_pencil-edit_alt"></i></a></h6>
                                        
                                    </div>
                                    <!-- <div class="timestamp">
                                        Jan 30, 2021
                                    </div> -->
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Name :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->name}} </div>
                                    </div>
                    
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Contact Number :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->contact_number}} </div>
                                    </div>
                    
                                </div>

                             
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Residence Address:</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->present_address}} </div>
                                    </div>
                                </div>
                                
                                     <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> City:</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->city}} </div>
                                    </div>
                                </div>
                                   <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> State:</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->state}} </div>
                                    </div>
                                </div>
                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Pincode:</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->pincode}} </div>
                                    </div>
                                </div>
                               
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Date Of Birth :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->date_of_birth}} </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Marital Status :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->marital_status}} </div>
                                    </div>
                                </div>
                            </div>
                            

                                
                            </div>
                            
                            
                  

                     
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Job posts end -->


    </main>

    @endsection