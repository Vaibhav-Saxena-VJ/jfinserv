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
                                        <h6 class="job-title"><a href="job-application.html">Loan Information</a> </h6>
                                        
                                    </div>
                                    <!-- <div class="timestamp">
                                        Jan 30, 2021
                                    </div> -->
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Loan Type :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->loan_type}} </div>
                                    </div>
                    
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Loan Amount :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->loan_amount}} </div>
                                    </div>
                    
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Financing Type :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->financing_type}} </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Bank Service:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->bank_service}} </div>
                                    </div>
                                </div>
                                 @if($loandetail->firm_company_name!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Firm / Company Name :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->firm_company_name}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->nature_of_work!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Nature Of Work :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->nature_of_work}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->office_address!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Office Address :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->office_address}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->work_experience!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Work/Business Experience :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->work_experience}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->business_estabish_date!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Business Establish Date :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->business_estabish_date}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_one_net_salary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Year 1:</h6>
                                            </div>
                                        </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Net Salary:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_one_net_salary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_one_grosssalary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Gross Salary:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_one_grosssalary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_two_net_salary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Month 2:</h6>
                                            </div>
                                        </div>
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Salary :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_two_net_salary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_two_grosssalary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Gross Salary :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_two_grosssalary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_three_net_salary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Month 3:</h6>
                                            </div>
                                        </div>
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Salary :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_three_net_salary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_three_grosssalary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Gross Salary :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_three_grosssalary}} </div>
                                    </div>
                                </div>
                                @endif
                               <!-- For Business  -->
                                @if($loandetail->year_one_netprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 1 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_netprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_one_depreciation!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_depreciation}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_one_loaninterest!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_loaninterest}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_one_grossprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_grossprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_one_sales!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_sales}} </div>
                                    </div>
                                </div>
                                @endif
                                <!-- Year 2 -->
                                @if($loandetail->year_two_netprofit!="")
                                <div class="post-content">

                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 2 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_netprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_two_depreciation!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_depreciation}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_two_loaninterest!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_loaninterest}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_two_grossprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_grossprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_two_sales!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_sales}} </div>
                                    </div>
                                </div>
                                @endif
                                <!-- Year 3 -->
                                @if($loandetail->year_three_netprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 3 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_netprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_three_depreciation!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_depreciation}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_three_loaninterest!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_loaninterest}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_three_grossprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_grossprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_three_sales!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_sales}} </div>
                                    </div>
                                </div>
                                @endif
                                <!-- Existing Loan Information -->
                                @if($loandetail->exist_loan_type!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Type:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_loan_type}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->exist_loan_amount!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Amoun :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_loan_amount}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->exist_tenor_of_loan!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Tenor :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_tenor_of_loan}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->exist_emi!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan EMI :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_emi}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->exist_sanction_dt!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Sanction Date :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_sanction_dt}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->exist_emi_bounce!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan EMI Bounce :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_emi_bounce}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->cibil_problem!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Cibil Problem :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->cibil_problem}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->loan_requirement!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Requirements :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->loan_requirement}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->job_business_profile="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Job/Business Profile :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->job_business_profile}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->purpose_of_loan!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Purpose Loan :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->purpose_of_loan}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->extra_income!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Extra Income :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->extra_income}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->note!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Documents Pending :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->note}} </div>
                                    </div>
                                </div>
                                @endif 
                            </div>
                            <!-- Uploaded Documents -->
                             @if($loandetail->loandoc!= '')
                             <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.3s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Uploaded Documents</a> </h6>
                                        
                                    </div>
                                </div>

                               @php
                                $loan_doc=$loandetail->loandoc;

                               @endphp
                                
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Duly filled Application Form with Photograph :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->dully_filled}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>

                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->ageproof}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>

                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Educational Qualification Proof - Latest Degree (for professionals) :</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->education}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>
                                  
                                  @if($loandetail->profession_type!="salaried")

                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Certificate & Proof of business existence along with Business Profile :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                            </div><br>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->business_certificate}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>


                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Last 3 years Income Tax returns with Profit & Loss Account & Balance Sheets duly certified/audited by a Chartered Accountant :</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->tax_return}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>
                                @endif

                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Last 12 months Bank Account Statements :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->bank_statement}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>

                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Processing Fee Cheque in favour of '……………………………' :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->cheque}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>

                                 <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Photocopy of Title Documents of the Property, Approved Plan etc. :</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->property_document}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>

                                @if($loandetail->profession_type!="salaried")

                                    <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->resident_proof}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>
                                @endif

                                 @if($loandetail->profession_type=="salaried")

                                  <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Latest Salary-slips for last 3 months :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->salary_slip}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>

                                  <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Form 16 for last 2 years :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->form_sixteen}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>
                                @endif


                                
                                
                               
                                
                            </div>
                            @endif
                            
                            

                            
                            
                            
                            

                     
                    </div>
                </div>
            </div>
        </section>
        <!-- Job posts end -->


    </main>

    @endsection