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
                                    <li><a href="index.html">home</a></li>
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
                    <div class="col-lg-4  pr-lg-55">
                        <div class="left-sidebar-widget">
                            <div class="single-sidebar-widget mt-25 widget-border">
                                <div class="catagory-list-widget">
                                    <div class="widget-title">
                                        <h5></h5>
                                    </div>
                                    <div class="widget-content ">

                                        <ul class="catagory-list py-3">
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myprofile" class="catagory-link ">
                                                    <span class="text">Personal Details</span>
                                                </a>
                                            </li>
                                            
                                            <li class="catagory-item ">
                                                <a href="{{config('app.baseURL')}}/myloandetails" class="catagory-link active">
                                                    <span class="text">Document Pending</span>
                                                    <span class="number">
                                                        @if($doc_pending!="")
                                                       ( {{$doc_pending}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="#" class="catagory-link">
                                                    <span class="text">Loan In Process</span>
                                                    <span class="number">
                                                        @if($inprocess!="")
                                                       ( {{$inprocess}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="#" class="catagory-link">
                                                    <span class="text">Approved Loan</span>
                                                    <span class="number">
                                                       @if($approved!="")
                                                       ( {{$approved}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="#" class="catagory-link">
                                                    <span class="text">Rejected Loan</span>
                                                    <span class="number">
                                                        @if($rejeted!="")
                                                       ( {{$rejeted}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="#" class="catagory-link">
                                                    <span class="text">Refer & Earn</span>
                                                    <span class="number">(10)</span>
                                                </a>
                                            </li>
                                            
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right bar -->
                    <div class="col-lg-8">
                        <div class="job-post-widget">

                            <div class="single-job-post me-1 wow fadeInUp mt-25">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Loan Information</a> </h6>
                                        
                                    </div>
                                    <!-- <div class="timestamp">
                                        Jan 30, 2021
                                    </div> -->
                                </div>
                                @foreach($loan_details as $loans)
                                <div class="post-content">
                                    <h6 class="job-title"><a href="job-application.html">Loan</a> </h6>
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Loan Type :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loans->loan_type}} </div>
                                    </div>
                    
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Loan Amount:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loans->loan_amount}} </div>
                                    </div>
                    
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Financing Type:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loans->financing_type}} </div>
                                    </div>
                    
                                </div>
                                @endforeach
                                
                            </div>
                            

                         </div>
                         </div>   
                            
                            
                            

                     
                    </div>
                </div>
            
        </section>
        <!-- Job posts end -->


    </main>

    @endsection