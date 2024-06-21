@extends('layouts.user-app')
@section('content')
<main>

        <!-- BreadCrumb start -->
       <!--  <section class="breadcrumb-area">
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

             <section class="cta-area-2 pt-80 pb-80" style="margin-top: 150px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="cta-content text-black wow fadeInRight">
                            <h2>Apple for home loan?</h2>
                            <!-- <p>Want to know more about our services </p> -->
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                            <a href="{{config('app.baseURL')}}/apply-now" class="theme-btn wow fadeInLeft" target="_blank">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Job posts start -->
        <section class="pb-130 bg_disable">
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
                                        <h6 class="job-title"><a href="job-application.html">Manager- Products &
                                                Marketing</a> </h6>
                                        <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>NY,
                                                United
                                                States
                                            </div>
                                            <div class="job-catagory"> <span>Branch Banking</span> | Full-time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timestamp">
                                        Jan 30, 2021
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>As a Teller at Capital you are the face of the credit union. It's more than just
                                        processing financial transactions. It's building lasting relationships and
                                        helping others to ...</p>
                                </div>
                            </div>
                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.1s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Officer Admin and Finance
                                                (LRS Position)</a>
                                        </h6>
                                        <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>NY,
                                                United
                                                States
                                            </div>
                                            <div class="job-catagory"> <span>Administration</span> | Full-time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timestamp">
                                        Jan 30, 2021
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>As a Teller at Capital you are the face of the credit union. It's more than just
                                        processing financial transactions. It's building lasting relationships and
                                        helping others to ...</p>
                                </div>
                            </div>

                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.3s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Head of Information and
                                                Technology</a> </h6>
                                        <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>NY,
                                                United
                                                States
                                            </div>
                                            <div class="job-catagory"> <span>Technology</span> | Full-time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timestamp">
                                        Jan 30, 2021
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>As a Teller at Capital you are the face of the credit union. It's more than just
                                        processing financial transactions. It's building lasting relationships and
                                        helping others to ...</p>
                                </div>
                            </div>
                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.5s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Assistant Accounts
                                                Officer</a> </h6>
                                        <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>NY,
                                                United
                                                States
                                            </div>
                                            <div class="job-catagory"> <span>Accounts Officer</span> | Full-time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timestamp">
                                        Jan 30, 2021
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>As a Teller at Capital you are the face of the credit union. It's more than just
                                        processing financial transactions. It's building lasting relationships and
                                        helping others to ...</p>
                                </div>
                            </div>
                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.6s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Manager- Products &
                                                Marketing, Retail
                                                Business</a> </h6>
                                        <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>NY,
                                                United
                                                States
                                            </div>
                                            <div class="job-catagory"> <span>Administration</span> | Full-time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timestamp">
                                        Jan 30, 2021
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>As a Teller at Capital you are the face of the credit union. It's more than just
                                        processing financial transactions. It's building lasting relationships and
                                        helping others to ...</p>
                                </div>
                            </div>
                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.7s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Assistant Branch Manager II
                                                (Senior)</a> </h6>
                                        <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>NY,
                                                United
                                                States
                                            </div>
                                            <div class="job-catagory"> <span>Branch Banking</span> | Full-time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timestamp">
                                        Jan 30, 2021
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>As a Teller at Capital you are the face of the credit union. It's more than just
                                        processing financial transactions. It's building lasting relationships and
                                        helping others to ...</p>
                                </div>
                            </div>
                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.8s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Manager- Products &
                                                Marketing, Retail
                                                Business</a> </h6>
                                        <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>NY,
                                                United
                                                States
                                            </div>
                                            <div class="job-catagory"> <span>Branch Banking</span> | Full-time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timestamp">
                                        Jan 30, 2021
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>As a Teller at Capital you are the face of the credit union. It's more than just
                                        processing financial transactions. It's building lasting relationships and
                                        helping others to ...</p>
                                </div>
                            </div>
                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.9s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Accounts Payable/Receivable
                                                Manager</a> </h6>
                                        <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"> <i class="icon_pin_alt"></i>NY,
                                                United
                                                States
                                            </div>
                                            <div class="job-catagory"> <span>Accounts Officer</span> | Full-time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timestamp">
                                        Jan 30, 2021
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>As a Teller at Capital you are the face of the credit union. It's more than just
                                        processing financial transactions. It's building lasting relationships and
                                        helping others to ...</p>
                                </div>
                            </div>

                            <div class="text-center mt-70 wow fadeInUp"> <a href="#"
                                    class="theme-btn theme-btn-outlined">More
                                    jobs</a>
                            </div>
                        </div>

                        <div class="email-alert-widget bg_white mt-100 wow fadeInUp">
                            <h4>Get email alerts for the latest Jobs in Bangladesh</h4>
                            <p>You can cancel email alerts at any time.</p>


                            <div class="input-group mt-40">
                                <input type="text" class="form-control" placeholder="Type in your email...">
                                <div class="input-group-append">
                                    <a href="#" class="theme-btn theme-btn-lg">Set Up Alert</a>
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