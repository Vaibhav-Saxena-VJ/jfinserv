@extends('layouts.app')
@section('title', "Financial Services in Pune | Lowest Loan Interest in PCMC - Jfinserv")
@section('description', "Jfinserv provides financial services in Pune engaged in business, personal and MSME financing with lowest loan interest rates in Pune and PCMC and no hidden charges.")
@section('keywords', "financial services in pune, lowest loan interest in PCMC, business loan with low roi, financial consultants in Pune, Loan services in PCMC, Loan in Pune")

@section('content')

<link rel="stylesheet" href="{{config('app.baseURL')}}/newassets/css/magnific-popup.css">
<!-- Circle CSS-->
<link rel="stylesheet" href="{{config('app.baseURL')}}/newassets/css/circle.css">
<!-- Typography CSS -->
<link rel="stylesheet" href="{{config('app.baseURL')}}/newassets/css/typography.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/owlcarousel/assets/owl.theme.default.min.css">

<!-- javascript -->
<script src="..{{config('app.baseURL')}}/assets/vendors/jquery.min.js"></script>
<script src="..{{config('app.baseURL')}}/assets/owlcarousel/owl.carousel.js"></script>

<style type="text/css">
    body{
        overflow-x: hidden !important;
    }

    .heading-faq{
        font-size:20px !important;
    }

    h2.title{
        
        font-size:27px !important;
    }

    .img-new{
        width: 45px !important;
        padding-bottom:10px;
    }

    .dotCircle .itemDot {
        background: #d83733;
    }

    .title-box span {
        text-shadow: 0 10px 10px rgb(0 0 0 / 15%);
        font-weight: 800;
        color: #0050b2 !important;
    }
    
    .box{
        margin-bottom:50px !important;
    }
    
    .icons{
        height: 64px !important;
    }
    
    .mobile-desc{
            height: 380px !important;
    }
    
    .text-new{
        padding-bottom: 70px;
        padding-top: 70px;
    }
    
    .icon_box-checked{
        font-weight:800 !important;
        color: #000;
    }
    
    .pb-140 {
        padding-bottom: 40px;
    }
    
    .pt-125 {
        padding-top: 70px;
    }
    
    /*.faq-widget .single-widget-one {
        padding: 19px;
    }*/

    .faq-widget .faq-header h4 {
        font-size: 21px;
        line-height: 30px !important;
    }
    
    /*.header-menu.header-menu-2 .menu > .nav-item > .nav-link {
        color: #000;
    }*/
    
    .partners{
        background: transparent;
        margin-right: 5px;
        margin-bottom: 20px;
        border-radius: 8px 8px 8px 8px;
        padding: 0px;
        margin-left: 5px;
    }
    
    .bank_img {
        width: 85% !important;
        margin: 5px 10px;
    }
    
    @media screen and (min-width: 300px) and (max-width: 768px){
        .cta {
            padding: 15px 10px;
            /* top: 86px; */
        }
        .feature-area-2{
            padding-top: 50px! important;
        }
        .text-new {
            padding-bottom: 70px;
            padding-top: 0px;
        }
        
        .img-img {
            background-image: url(assets/img/Infographic2.png) !important;
        }
    }
    
/*Circle*/
    @media screen and (min-width: 300px) and (max-width: 599px){
        .round {
            position: absolute;
            left: 25px;
            top: 45px;
            width: 200px;
            height: 211px;
            border: 2px dotted #0050b2bf;
            border-radius: 100%;
            -webkit-animation: rotation 100s infinite linear;
        }
        
        .dotCircle {
            width: 80%;
            height: 100%;
            position: absolute;
            margin: 0px!important;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 100%;
            z-index: 20;
        }
        
        h2.title {
            font-size: 12px !important;
        }
        
        .contentCircle {
            width: 150px;
            border-radius: 100%;
            color: #222222;
            position: relative;
            top: 52px;
            left: 43%;
            transform: translate(-50%, -50%);
        }
        
        .title-box p {
            font-size: 12px;
            line-height: 2em;
            padding-top: 35px;
        }

        .dotCircle .itemDot {
            font-size: 40px;
        }
        
        .img-new {
            margin-top: -48px;
            width: 15px !important;
            padding-bottom: 10px;
        }
        
        .dotCircle .itemDot {
            display: block;
            width: 35px;
            height: 32px;
            position: absolute;
            color: #52C5B6;
            border-radius: 20px;
            text-align: center;
            line-height: 80px;
            font-size: 30px;
            z-index: 3;
            cursor: pointer;
            border: 2px solid #e6e6e6;
        }

        .title-box .title {
            font-weight: 600;
            letter-spacing: 2px;
            position: relative;
            z-index: -1;
            line-height: 20px;
            top: 30px;
        }
     
        .title-box span {
            text-shadow: 0 10px 10px rgb(0 0 0 / 15%);
            font-weight: 800;
            color: #0050b2 !important;
           
        }
       
        .text-new {
            padding-bottom: 0px;
            padding-top: 0px;
        }
     
        /*.dotCircle .itemDot .forActive {
            width: 0px!important;
            height: 0px!important;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: none;
        }
      
        .dotCircle  .itemDot .forActive::after { 
            content: ''; 
            width: 0px!important;
            height: 0px!important;
            border: 3px solid #0050b2bf ;
            bottom: -31px; 
            left: -14px; 
            filter: blur(1px); 
            position: absolute; 
            border-radius: 100%; 
        }
    
        .dotCircle  .itemDot .forActive::before { 
            content: ''; 
            width: 0px!important; 
            height: 0px!important; 
            filter: blur(5px); 
            top: -15px; 
            position: absolute; 
            transform: rotate(-45deg); 
            border: 6px solid #0050b2bf; 
            right: -39px; 
        }*/
    
        .dotCircle  .itemDot .forActive::after { 
            content: ''; 
            width: 2px!important; 
            height: 2px!important; 
            bottom: -21px; 
            left: -4px; 
        }
    
        .dotCircle  .itemDot .forActive::before { 
            content: ''; 
            width: 3px!important; 
            height: 3px!important; 
            top: -5px;  
            transform: rotate(-25deg); 
            right: -29px; }

        .row {
            --bs-gutter-x: 0px!important;
        }
    }
    
    .carousel-inner img{
        width: 100%; 
        height: 650px; 
        object-fit: cover; 
        object-position: center;
    }
    
    .feature-box {
        background-color: #fff;
        padding: 5% 10px;
        border-radius: 10px;
        box-shadow: 5px 8px 10px 5px rgba(51, 77, 114, 0.15);
    }
    
    .feature-box p i{
        color: #2F3188;
    }
    
    .img-img {
        background-image: url(assets/img/Infographic.png);
        width: 100%;
        height: 390px;
        background-position: center;
        background-size: cover;
    }
</style>

<main>
    <section class="banner-area-2 pt-5 pb-40" id="banner_animation" style="background-size: auto; background-position: top left;">
        <div id="myCarousel" class="carousel slide mb-5" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{config('app.baseURL')}}/images/about2.jpg" alt="happy family" class="banner-area-2 pt-95">
                </div>
            </div>
        </div>
        <div class="container pt-3">
            <div class="row align-items-center section-title">
                <div class="col-md-12 mx-auto mb-5">
                    <div class="banner-content">
                        <img data-parallax='{"x": 0, "y": 250, "rotateZ":0}' class="shape" src="assets/img/banner/shape-3.png" alt="shape">
                        <h1 class="wow fadeInUp mb-0"><span style="color: #4da9ea;" title="Jfinserv Financial Services in Pune">Jfinserv</span> Financial Services</h1>
                        <p class="wow fadeInUp mt-3" data-wow-delay="0.3s"><b>JFinserv Consultant India Private Limited</b> specializes in providing a comprehensive range of financial services in Pune. As a trusted channel partner with multiple banks, we assist clients in securing Home Loans, Project/Construction Loans, Contract Loans, Loans Against Property, Overdraft Facilities, Lease Rental Discounting, and MSME Loans. Our commitment to offering the lowest interest rates, minimal documentation, and flexible tenures ensures a smooth and efficient loan process tailored to meet your financial needs.</p>
                        <p class="wow fadeInUp mt-3" data-wow-delay="0.3s">As trusted financial consultants in Pune, we understand that navigating the complexities of the financial landscape can be daunting. That's why our team of experienced professionals is here to guide you every step of the way. With our comprehensive loan services in PCMC and Pune, you can trust us to help you secure the financing you need to achieve your dreams.</p>
                        <!--<a href="{{config('app.baseURL')}}/apply-now" data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-lg mt-50">Move in sooner. Apply today!<i class="material-icons">chevron_right</i></a>-->
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="/home-loan">
                        <div class="feature-box mb-4 text-center">
                            <p class="mb-3"><i class="fa-solid fa-house-chimney fa-3x"></i></p>
                            <h5>Home Loan</h5>
                            <p>Secure your dream home with our hassle-free home loan in Pune. Explore competitive rates and swift processing for your peace of mind.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/overdraft-facility">
                        <div class="feature-box mb-4 text-center">
                            <p class="mb-3"><i class="fa-brands fa-firstdraft fa-3x"></i></p>
                            <h5>Overdraft Facility</h5>
                            <p>Access extra funds when you need them with an Overdraft Facility - providing financial flexibility and peace of mind.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/project-loan">
                        <div class="feature-box mb-4 text-center">
                            <p class="mb-3"><i class="fa-solid fa-building-shield fa-3x"></i></p>
                            <h5>Project Loan</h5>
                            <p>Secure project financing in Pune with ease. Get tailored loan solutions for your ventures, ensuring swift processing and competitive rates.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/contract-loan">
                        <div class="feature-box mb-4 text-center">
                            <p class="mb-3"><i class="fa-solid fa-house-laptop fa-3x"></i></p>
                            <h5>Contract Loan</h5>
                            <p>Secure a contract loan in Pune quickly and hassle-free with our streamlined process and competitive rates. Get the funding you need with ease.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/lease-rental-discounting">
                        <div class="feature-box mb-4 text-center">
                            <p class="mb-3"><i class="fa-solid fa-tags fa-3x"></i></p>
                            <h5>Lease Rental Discounting</h5>
                            <p>Lease Rental Discounting: Unlock immediate capital by leveraging your rental income. Accelerate your financial growth with this strategic financing solution.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/msme-loan">
                        <div class="feature-box mb-4 text-center">
                            <p class="mb-3"><i class="fa-solid fa-business-time fa-3x"></i></p>
                            <h5>MSME/Business Loan</h5>
                            <p>Access the capital you need to fuel your business growth with our MSME/Business Loan solutions. Flexible terms, competitive rates, and quick approval process.</p>
                        </div>
                    </a>
                </div>
                <!--<div class=" col-md-6 col-lg-5 offset-lg-1">
                    <div class="banner-img">
                        <img class="main-img img-fluid wow fadeInRight" src="{{config('app.baseURL')}}/images\home.jpg" alt="banner-img">
                        <div class="shapes">
                            <img data-parallax='{"x": 0, "y": 130, "rotateZ":0}' class="shape-1" src="assets/img/banner/shape-1.png" alt="shape">
                            <img data-parallax='{"x": 0, "y": -130, "rotateZ":0}' class="shape-2" src="assets/img/banner/shape-2.png" alt="shape">
                            <img data-parallax='{"x": 250, "y":0, "rotateZ":0}' class="shape-3" src="assets/img/banner/shape-4.png" alt="shape">
                            <img data-parallax='{"x": -200, "y": 250, "rotateZ":0}' class="shape-4" src="assets/img/banner/shape-5.png" alt="shape">
                            <img class="shape-5" src="assets/img/banner/shape-6.png" alt="shape">
                            <img class="shape-6" src="assets/img/banner/shape-7.png" alt="shape">
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- banner section -->
        
    <section class="feature-area-2 pt-80 pb-80" id="feature">
        <div class="container">
            <div class="feature">
                <div class="row gy-lg-0 gy-4">
                    <h2 class="wow fadeInUp pb-4 text-center"><strong>Our Expertise in Financial Solutions</strong></h2>
                    <div class="col-lg-4">
                        <div class="feature-widget-2 align-items-center wow fadeInRight feature-1" data-wow-delay="0.1s">
                            <div class="shapes">
                                <img src="assets/img/feature/shape-6.png" alt="shape">
                                <img src="assets/img/feature/shape-10.png" alt="shape">
                                <img src="assets/img/feature/shape-4.png" alt="shape">
                                <img src="assets/img/feature/shape-3.png" alt="shape">
                                <img src="assets/img/feature/shape-12.png" alt="shape">
                                <img src="assets/img/feature/shape-12.png" alt="shape">
                            </div>
                            <div class="feature-img">
                                <img src="assets/img/feature/icon-5.png" alt="">
                            </div>
                            <div class="feature-content">
                                <p>UP TO ₹100Cr</p>
                                <h6>High Range Loan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-widget-2 align-items-center wow fadeInRight feature-2" data-wow-delay="0.3s">
                            <div class="shapes">
                                <img src="assets/img/feature/shape-13.png" alt="shape">
                                <img src="assets/img/feature/shape-14.png" alt="shape">
                                <img src="assets/img/feature/shape-15.png" alt="shape">
                                <img src="assets/img/feature/shape-11.png" alt="shape">
                                <img src="assets/img/feature/shape-12.png" alt="shape">
                                <img src="assets/img/feature/shape-5.png" alt="shape">
                            </div>
                            <div class="feature-img">
                                <img src="assets/img/feature/icon-6.png" alt="">
                            </div>
                            <div class="feature-content">
                                <p>FROM 6.40%</p>
                                <h6>Lowest Interest Rate</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-widget-2 align-items-center wow fadeInRight feature-3" data-wow-delay="0.5s">
                            <div class="shapes">
                                <img src="assets/img/feature/shape-1.png" alt="shape">
                                <img src="assets/img/feature/shape-2.png" alt="shape">
                                <img src="assets/img/feature/shape-6.png" alt="shape">
                                <img src="assets/img/feature/shape-9.png" alt="shape">
                                <img src="assets/img/feature/shape-11.png" alt="shape">
                            </div>
                            <div class="feature-img">
                                <img src="assets/img/feature/icon-7.png" alt="">
                            </div>
                            <div class="feature-content">
                                <p>7 DAYS PROCESS</p>
                                <h6>Fast & Easier Process</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fast-e-loan pt-90">
                <div class="row gy-xl-0 gy-4">
                    <!-- <div class="col-md-3">
                        <div class="apply-topics">
                            <ul>
                                <li><i class="fa-solid fa-square-check"></i><b>No Limit Of Loan Amount</b></li>
                                <li><i class="fa-solid fa-square-check"></i><b>Fastest Disbursal Procedure</b></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="section-title wow fadeInUp">
                            <h2 class="mb-3">Fastest, Secure & Easy Loan Process With<br/><span style="color: #0050b2;">Most Referral Benefits</span></h2>
                            <p>Experience the fastest, most secure, and easiest loan process with our streamlined services.<br>Enjoy unparalleled referral benefits while accessing the financial services in Pune you need.</p>
                            <p class="img-img"></p>
                            <a href="{{config('app.baseURL')}}/apply-now" class="theme-btn mt-20" target="_blank">Get funded fast. Apply now!</a>
                            <!-- <p>Need some fast cash? Bad cradit history? We dont mind about your past, just the future. Try loan start and feel secure in your future.</p> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-3 wow fadeInUp">
                        <div class="apply-topics">
                            <ul>
                                <li><i class="fa-solid fa-square-check"></i><b>Lowest Rate Of Interest</b></li>
                                <li><i class="fa-solid fa-square-check"></i><b>Endless Earnings via Referrals</b></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="o-hidden pt-80 pb-80">
        <div class="container" >
            <div class="row">
                <div class="col-xl-6 mb-5 mb-xl-0" data-aos="fade-right">
                    <div class="text-xl-left mb-lg-2 wow fadeInUp">
                       <!-- <span  class="tag-color">ABOUT US</span> -->
                        <div class="section-title text-start">
                            <h2 class="mb-3">Unique Reward and Earning Opportunity with <span style="color: #4da9ea;">Jfinserv</span></h2>
                            <!-- <p>Need some fast cash? Bad cradit history? We dont mind about your past, just the
                                    future. Try loan start and feel secure in your future.</p> -->
                        </div>
                        <div class="faq-widget">
                            <div class="accordion" id="accordionExample">
                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingOne">
                                            <h4 class="mb-0" style="color: #0050b2;" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                 Referral Program for Individuals <i class="material-icons">add</i> <i class="material-icons">remove</i>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>We have unique earning opportunity for individuals through referral program  which offers payout not only for your direct referrals but also pays for your friend's referral. We have option for weekly and monthly release of payouts with one of the highest payout structure in the market.</p>
                                            <a href="{{config('app.baseURL')}}/referral-program" class="wow fadeInUp theme-btn mt-5" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Learn More<i class="material-icons">chevron_right</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingFive">
                                            <h4 class="mb-0 collapsed" style="color: #0050b2;" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="true"
                                                aria-controls="collapseFive">
                                               Referral Program for Business Associates <i class="material-icons">add</i><i class="material-icons">remove</i>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Jfinserv Referral Program for Business Associates helps you to accelerate the growth of your business and earnings. Whether you are a Financial Expert in Pune & PCMC, Chartered Accountant, Tax Consultant, Insurance Agent, Loan Distribution Agency in Pune, Real Estate Broker or into some other businesses, let's work together for mutual benefit at zero investment.</p>
                                                <a href="{{config('app.baseURL')}}/contact" class="wow fadeInUp theme-btn mt-5" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Connect Now<i class="material-icons">chevron_right</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 col-sm-12 col-lg-6" data-aos="fade-left" data-aos-delay="250">
                    <div class="holderCircle">
                        <div class="round"></div>
                        <div class="dotCircle">
                            <span class="itemDot active itemDot1" data-tab="1">
                                <!-- <i class="fa fa-user"></i> -->
                                <img class="img-fluid top-img1 img-new" src="{{config('app.baseURL')}}/images\image1.png" alt="image">
                                <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot2" data-tab="2">
                                <!-- <i class="ion-ios-chatboxes-outline"></i> -->
                                <img class="img-fluid top-img1 img-new" src="{{config('app.baseURL')}}/images\image2.png" alt="image">
                                <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot3" data-tab="3">
                                <!-- <i class="ion-ios-person-outline"></i> -->
                                <img class="img-fluid top-img1 img-new" src="{{config('app.baseURL')}}/images\image3.png" alt="image">
                                <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot4" data-tab="4">
                                <!-- <i class="ion-ios-pricetags-outline"></i> -->
                                <img class="img-fluid top-img1 img-new" src="{{config('app.baseURL')}}/images\image4.png" alt="image">
                                <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot5" data-tab="5">
                                <!-- <i class="ion-ios-upload-outline"></i> -->
                                <img class="img-fluid top-img1 img-new" src="{{config('app.baseURL')}}/images\image5.png" alt="image">
                                <span class="forActive"></span>
                            </span>
                        </div>
                        <div class="contentCircle">
                            <div class="CirItem title-box active CirItem1">
                                <h2 class="title"><span>Unlimited Earning</span></h2>
                                <p>Guaranteed bonus on each referral</p>
                                <!-- <i class="ion-ios-timer-outline"></i> -->
                            </div>
                            <div class="CirItem title-box CirItem2">
                                <h2 class="title"><span>Direct Transfer to Account</span></h2>
                                <p>Transfer whole referral amount directly into your account through our dashboard</p>
                                <!-- <i class="ion-ios-chatboxes-outline"></i> -->
                            </div>
                            <div class="CirItem title-box CirItem3">
                                <h2 class="title"><span>Simple Process</span></h2>
                                <p>Ask your friend to use referral coupon during loan application</p>
                                <!-- <i class="ion-ios-person-outline"></i> -->
                            </div>
                            <div class="CirItem title-box CirItem4">
                                <h2 class="title"><span>100% Transparency</span></h2>
                                <p>Complete referral details can be viewed at your dashboard</p>
                                <!-- <i class="ion-ios-pricetags-outline"></i> -->
                            </div>
                            <div class="CirItem title-box CirItem5">
                                <h2 class="title"><span>Multilevel Reward Program</span></h2>
                                <p>Guaranteed reward amount for direct referral and their direct referral(upto a certain level)</p>
                                <!-- <i class="ion-ios-upload-outline"></i> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-12 col-sm-12 mt-50" data-aos="fade-left" data-aos-delay="250">
                    <div class="section-title pt-5 pb-5 imp_CTA bg_white">
                        <h3 title="Still Have A Question Regarding Lowest Interest Rate in Pune">Still Have A Question Regarding Lowest Interest Rate?</h3>
                        <a href="tel:+918329729190" class="theme-btn mt-20" style="background-color: #4da9ea;">Call us now @ +91 83297 29190</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="manage-c-finance pt-125 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title">
                        <h2 class="wow fadeInUp"><span style="color: #4da9ea;">Jfinserv</span> Features</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">Home loans from Jfinserv come packed with many features and benefits. Here is a quick look at some of these perks.</p>
                    </div>
                </div>
            </div>

            <div class="row pt-60 gy-4 gy-xl-0 Jfin_Feature">
                <div class="col-xl-4 col-md-8 box">
                    <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bg-1">
                            <img src="{{asset('images\one.png')}}" alt="icon" class="icons">
                        </div>
                        <h5>Attractive Interest Rate</h5>
                        <p>Repo rate-linked rates adjust borrowing costs based on central bank policy.</p>
                        <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-8 box">
                    <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bg-2">
                            <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                        </div>
                        <h5>Enjoy Low EMI</h5>
                        <p>Enjoy low EMIs with longer tenure for better monthly budgeting.</p>
                        <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-8 box">
                    <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bg-3">
                            <img src="{{asset('images\three.png')}}" alt="icon" class="icons">
                        </div>
                        <h5>Step-Up Loan Offer</h5>
                        <p>Young salaried professionals can avail higher eligibility on Home Loans.</p>
                        <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-8 box d-flex">
                    <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.9s" style="width:100%;">
                        <div class="icon-bg-4">
                            <img src="{{asset('images\four.png')}}" alt="icon" class="icons">
                        </div>
                        <h5>Digital Sanction</h5>
                        <p>Obtain online approval with just 5 simple steps for fast access to funds.</p>
                        <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-8 box">
                    <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="icon-bg-4">
                            <img src="{{asset('images\five.png')}}" alt="icon" class="icons">
                        </div>
                        <h5>PMAY</h5>
                        <p>Get subsidy benefits of up to Rs. 2.67* Lakhs under credit linked subsidy scheme from Govt. of India.</p>
                        <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-8 box">
                    <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="icon-bg-1">
                            <img src="{{asset('images\six.png')}}" alt="icon" class="icons">
                        </div>
                        <h5>Supported By Experts</h5>
                        <p>We can put you in touch with one of our expert in your area, who are ready to support you through your home loan journey.</p>
                        <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" pt-80 pb-80 bg_white" id="banking-partners">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title">
                        <h2 class="wow fadeInUp"><span style="color: #4da9ea;">Jfinserv</span> Work With Multiple Banks</h2>
                        <!--<p class="wow fadeInUp" data-wow-delay="0.3s">We </p>-->
                    </div>
                    <hr class="divider divider-sm bg-mantis">
                </div>
                <div class="col-md-12 mx-auto">
                    <div class="row">
                        <!-- <img src="https://www.iservefinancial.com/public/images/iservepartner/iserve-partners-new.png" style="width:100%;"> -->
                        <!-- @foreach($bank as $banks)
                            <div class="bank col-md-3 col-sm-3 partners">
                                <img src="{{config('app.baseURL')}}/storage/app/{{$banks->bank_image}}" alt="partners" class="bank_img">
                            </div>
                        @endforeach -->

                        <div class="large-12 columns">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/ab.jpg" alt="Aditya Birla" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/ar.jpg" alt="Anandrathi" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/arks.jpg" alt="ARKS Fincap" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/bom.jpg" alt="Bank of Maharashtra" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/cbi.jpg" alt="Central Bank of India" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/chola.jpg" alt="Chola" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/hdb.jpg" alt="HDB Financial Services" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/ib.jpg" alt="Indiabulls" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/indian.png" alt="Indian Bank" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/kotak.jpg" alt="Kotak" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/pnb.jpg" alt="PNB" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/rbl.jpg" alt="RBL" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/sc.jpg" alt="Standard Chartered" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/ujjivan.jpg" alt="Ujjivan Small Finance" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/union.jpg" alt="Union Bank" class="bank_img">
                                </div>
                                <div class="item">
                                  <img src="{{config('app.baseURL')}}/images/bnk_logos/yb.jpg" alt="Yes Bank" class="bank_img">
                                </div>
                            </div>
                          
                            <script>
                                $(document).ready(function() {
                                  $('.owl-carousel').owlCarousel({
                                    loop: true,
                                    margin: 10,
                                    autoplay: true,
                                    autoplayTimeout: 1800,
                                    autoplayHoverPause: true,
                                    smartSpeed: 5000,
                                    animateIn: 'linear',
                                    animateOut: 'linear',
                                    responsiveClass: true,
                                    responsive: {
                                      0: {
                                        items: 2
                                      },
                                      600: {
                                        items: 4
                                      },
                                      1000: {
                                        items: 6
                                      }
                                    }
                                  })
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  <section class="how-it-work pt-125 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="section-title">
                        <h2 class="wow fadeInUp mb-3">Here's how it works.</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">When you're ready, Cardinal Loans is ready too
                                - 24 hours a day, 7 days a week.</p>
                    </div>
                </div>
            </div>

            <div class="row pt-60 gy-lg-0 gy-4">
                <div class="col-lg-6 pe-lg-5">
                    <div class="single-widget apply-online wow fadeInUp" data-wow-delay="0.1s">
                        <div class="widget-header">
                            <div class="widget-img">
                                <img src="assets/img/how-works/icon-1.png" alt="icon">
                            </div>
                            <div class="widget-title">
                                <h4>Apply Online</h4>
                                <p>That is why we have a wide range of you can apply for a Personal Loan.</p>
                            </div>
                        </div>
                        <ul class="widget-content">
                            <li class="active"><span class="number">1</span> <span class="text">Apply Online</span></li>
                            <li><span class="number">2</span> <span class="text">Enter Your Informantion - 10 min</span></li>
                            <li><span class="number">3</span> <span class="text">Pre-qualify / Pre-Approve - 5 min</span></li>
                            <li> <span class="number">4</span> <span class="text">Help you prepare</span></li>
                            <li> <span class="number">5</span> <span class="text">We help your qualify - 15 days</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-0">
                    <div class="single-widget consultation wow fadeInUp" data-wow-delay="0.3s">
                        <div class="widget-header">
                            <div class="widget-img">
                                <img src="assets/img/how-works/icon-2.png" alt="icon">
                            </div>
                            <div class="widget-title">
                                <h4>Consultation</h4>
                                <p>Conis Guide on the supervisory approach to consolidation in the banking sector.</p>
                            </div>
                        </div>
                        <ul class="widget-content">
                            <li class="active"> <span class="number">1</span><span class="text">Schedule a Free Consulation</span></li>
                            <li> <span class="number">2</span> <span class="text">Discuss your Situation</span></li>
                            <li> <span class="number">3</span> <span class="text">We Review your condition</span></li>
                            <li> <span class="number">4</span> <span class="text">Help you prepare</span></li>
                            <li> <span class="number">5</span> <span class="text">We help your qualify</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="security-area" style="padding: 0;">
        <div class="security-priority pt-80 pb-80 text-center">
            <div class="shapes">
                <img src="assets/img/security-tips/shape-1.png" alt="shape">
                <img src="assets/img/security-tips/shape-2.png" alt="shape">
                <img src="assets/img/security-tips/shape-3.png" alt="shape">
                <img src="assets/img/security-tips/shape-4.png" alt="shape">
                <img src="assets/img/security-tips/shape-5.png" alt="shape">
                <img src="assets/img/security-tips/shape-6.png" alt="shape">
                <img src="assets/img/security-tips/shape-1.png" alt="shape">
                <img data-parallax='{"x": -60, "y": 150, "rotateZ":-15}' src="assets/img/security-tips/shape-7.png" alt="shape">
                <img data-parallax='{"x": 0, "y": -150, "rotateZ":0}' src="assets/img/security-tips/shape-8.png" alt="shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <img src="assets/img/security-tips/security-priority.png" alt="icon">
                        <h2 class="mt-4 mb-3">Your Security. Our Priority.</h2>
                        <p>We always have your security in mind. Rest easy knowing your data is protected with 128-bit encryption.<!-- <a href="#">Learn more.</a>--></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-area pt-80">
        <div class="container">
            <div class="section-title text-start">
                <h2 class="mb-0 wow fadeInUp">Frequently Asked Questions</h2>
            </div>
            <div class="row pt-30 align-items-end">
                <div class="col-lg-7 col-md-8">
                    <div class="faq-widget">
                        <div class="accordion" id="accordionExample">
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.1s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingOne">
                                        <h4 class="mb-0 heading-faq" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What all documents are required to apply for any Loan?<i class="material-icons">add</i><i class="material-icons">remove</i></h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>To apply for a home loan, Contract loan, loan against property etc you need to submit documents such as a proof of identity, a proof of address, a loan application form that has been duly filled and your financial documents.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.3s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingTwo">
                                        <h4 class="mb-0 heading-faq collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">How do you decide the eligibility for a loan against required amount? <i class="material-icons">add</i><i class="material-icons">remove</i></h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>We determine your eligibility after considering various factors, including your monthly income, your monthly financial obligations, your current age and your retirement age, among other things.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.5s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingThree">
                                        <h4 class="mb-0 heading-faq collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">How is the Equated Monthly Interest (EMI) calculated ?<i class="material-icons">add</i><i class="material-icons">remove</i></h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>The EMI is calculated on the basis of specific factors like the amount of the loan, its tenure and the rate of interest.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.7s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingFour">
                                        <h4 class="mb-0 heading-faq collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Is there any tax benefits available on EMI ?<i class="material-icons">add</i><i class="material-icons">remove</i></h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>Yes, you can claim the amount paid towards the repayment of the principal and the interest components as deductions in your income tax return. The limits on the amount deductible are governed by the applicable income tax laws.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.9s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingFive">
                                        <h4 class="mb-0 collapsed heading-faq" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Does Jfinserv charges any commission ?<i class="material-icons">add</i><i class="material-icons">remove</i></h4>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>No, We do not charge any commission from customer. Our services are free of cost for all users/customers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 offset-lg-1 mt-4 mt-md-0 ps-lg-5">
                    <div class="faq-img">
                        <img class="img-fluid" src="assets/img/faq/illustration.png" alt="faq-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Blog Posts start
    <section class="pb-120 bg-white" style="padding:50px 0px 100px 0px !important">
        <div class="container">
            <div class="section-title text-start">
                <h2 class="mb-10 wow fadeInUp" style="text-align: center; padding-bottom: 35px;">Latest Properties</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="blog-post-widget">
                        <div class="row gy-4 ">
                            @foreach($get_properties as $get_property)
                            <div class="col-md-4">
                                <div class="blog-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="height: 100%">
                                    <a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">
                                        <div class="blog-img">
                                            @if($get_property->propertyimages!='[]')
                                            @php
                                                $img=$get_property->propertyimages;
                                                $property_img=$img->first();
                                            @endphp
                                            <img src="{{config('app.baseURL')}}/storage/app/{{$property_img->property_image}}" alt="blog-img" style="height:200px;object-fit:cover;">
                                            @endif
                                            @if($get_property->property_type==1)
                                            <div class="catagory bg_primary">New Flat</div>
                                            @elseif($get_property->property_type==2)
                                            <div class="catagory bg_primary">Resale Flat</div>
                                            @elseif($get_property->property_type==3)
                                            <div class="catagory bg_primary">Lands</div>
                                            @else
                                            <div class="catagory bg_primary">Commercial}</div>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="blog-content">
                                        <h4  style="margin-bottom: 0px !important;"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">{{$get_property->property_name}}</a>
                                        </h4>
                                        <span style="margin-bottom: 10px;">by {{$get_property->builder_name}}</span>
                                        <h6 style="font-weight: 600;margin-top: 10px;"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">{{$get_property->property_size}}</a>
                                        </h6>
                                        <?php
                                            $string = strip_tags($get_property->property_description);
                                            if (strlen($string) > 50) {
                                                $stringCut = substr($string, 0, 50);
                                                $endPoint = strrpos($stringCut, ' ');
                                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                            }
                                        ?>
                                        @if (strlen($get_property->property_description) > 50)
                                          <p><?php echo $string ?>..</p>
                                        @else
                                          <p><?php echo $get_property->property_description ?></p>
                                        @endif
                                        <div class="post-info">
                                           ₹ {{$get_property->from_property_price}} - ₹ {{$get_property->to_property_price}}
                                        </div>
                                        <!--  <div class="row">
                                            <div class="col-md-6">
                                                <button><i class="fa fa-telephone"></i>{{$get_property->contact_number}}</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button><i class="fa fa-mail"></i>{{$get_property->contact_number}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="text-align: center;">
                    <a href="https://jfinserv.com/properties" data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-lg mt-50" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-top: 40px;">View More <i class="material-icons">chevron_right</i></a>
                </div>
            </div>
        </div>
    </section>-->

    <section class="cta-area pt-100 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 position-relative">
                    <div class="cta cta-bg-primary" style="background-color: #4da9ea;">
                        <div class="shapes">
                            <img src="assets/img/cta/icon-1.png" alt="shape">
                            <img data-parallax='{"x": 150, "y": 0, "rotateZ":-0}' src="assets/img/cta/icon-2.png" alt="shape">
                            <img src="assets/img/cta/icon-3.png" alt="shape">
                            <img src="assets/img/cta/icon-4.png" alt="shape">
                            <img src="assets/img/cta/icon-5.png" alt="shape">
                            <img data-parallax='{"x": 400, "y": 0, "rotateZ":0}' src="assets/img/cta/icon-6.png" alt="shape">
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <div class="cta-content wow fadeInRight">
                                    <h2>Are you ready to revolutionize your life?</h2>
                                    <h4 style="font-style: italic; color: #fff;">Secure a stress-free loan in only seven days!</h4>
                                    <!--<p>Do you have any questions, you want us to answer?</p>-->
                                </div>
                            </div>
                            <div class="col-md-3 text-center text-md-end">
                                <div class="cta-content   text-md-end mt-3 mt-md-0">
                                    <a href="{{config('app.baseURL')}}/contact" class="theme-btn theme-btn-alt wow fadeInLeft m-0">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    
<script src="{{config('app.baseURL')}}/newassets/js/owl.carousel.min.js"></script>
<script src="{{config('app.baseURL')}}/newassets/js/circle.js"></script>

<!-- vendors -->
<script src="{{config('app.baseURL')}}/assets/vendors/highlight.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/app.js"></script>
@endsection