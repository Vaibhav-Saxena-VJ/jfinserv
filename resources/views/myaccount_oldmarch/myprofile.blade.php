@extends('layouts.app')
@section('content')
<main>

        <!-- BreadCrumb start -->
        <section class="breadcrumb-area">
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

        </section>
        <!-- BreadCrumb end -->

        <!-- Job posts start -->
        <section class="pt-110 pb-130 bg_disable">
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
                                        <h6 class="job-title"><a href="job-application.html">Personal Information</a> </h6>
                                        
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
                                            <div class="job-location me-lg-3 me-2"><h6> Email ID :</h6>
                                            </div>
                                            <div class="job-catagory">{{$user->email}} </div>
                                    </div>
                    
                                </div>
                                @if($loan_details!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Mobile Number :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->mobile}} </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Residence Address:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->residence_address}} </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Qualification :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->qualification}} </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Date Of Birth :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->dob}} </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Marital Status :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->marital_status}} </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.3s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Job / Business Profile</a> </h6>
                                        
                                    </div>
                                </div>

                                @if($loan_details->firm_company_name!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Firm / Company Name :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->firm_company_name}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loan_details->nature_of_work)
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Nature Of Work :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->nature_of_work}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loan_details->office_address)
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Office Address :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->office_address}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loan_details->work_experience)
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Work/Business Experience :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->work_experience}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loan_details->business_estabish_date)
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Business Establish Date :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loan_details->business_estabish_date}} </div>
                                    </div>
                                </div>
                                @endif
                                
                            </div>
                            
                            
                            @endif

                     
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Job posts end -->


    </main>

    @endsection