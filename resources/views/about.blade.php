@extends('layouts.app')
@section('title', "Financial Services Companies in Pune | Financial Companies in Pune - Jfinserv")
@section('description', "Discover top financial services companies in Pune. Explore a comprehensive list of Pune Housing Finance leading financial companies in Pune.")
@section('keywords', "financial services companies in pune, financial companies in pune, pune housing finance, Financial services in PCMC, Financial consutants in Pune")

@section('content')

<style type="text/css">
@media (min-width: 1312px){
  .visible-lg {
        display: block!important;
    }
}
.single-leadership-widget a .leader-info {
   visibility: visible !important;
   opacity: 1 !important;
}
.team-img{
    height:300px !important;
    object-fit:cover;
}
.jumbotron .jumbo-container {
    z-index: 2;
}
.jumbotron .jumbo-content {
    position: relative;
}
.jumbotron .jumbo-content-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
}
.jumbotron .jumbo-image {
    background-repeat: no-repeat;
    background-position: top;
    background-size: cover;
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
}
.jumbo-content-wrap {
    position: relative;
    z-index: 2;
}
.columns-wrapper {
    position: relative;
}
.columns-wrapper .bg-opacity {
    width: 100%;
    height: 100%;
    position: absolute;
    display: block;
}
.bg-default {
    background-color: transparent;
}
.column-container-component .container {
    position: relative;
}
.ad-graphic.container-fluid, .ad-graphic.row, .columns-wrapper.container-fluid, .columns-wrapper.row {
    background-repeat: no-repeat;
}
.columns-wrapper {
    position: relative;
}

@media (min-width: 768px){
    .jumbotron {
        background-position: top;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .jumbotron .jumbo-container {
        background-image: none!important;
    }
}
.jumbotron:after, .jumbotron:before {
    content: " ";
    display: table;
}
.jumbotron {
    color: inherit;
    overflow: hidden;
    position: relative;
}
.bg-brand-sales-light {
    background-color: #04e1cb;
}
    
    .navbar-expand-lg{
  background:#fff;
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link{
  color:#000;
}


.text-top{
    padding-top: 50px;
}
.img-img{
    height: 40vh !important;
    height: 30vh !important;
    object-fit: cover !important;
}
.card{
    height: 425px;
}
.box{
    margin-bottom: 40px;
}
.benefits{
    width: 75px;
  }
.display-new{
    font-size: 30px;
    margin-top: 45px;
    
}

.bg-color{
    background-color: white !important;
}
  
#banner:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(41, 66, 102, 0.50) !important;
}
#banner {
    position: relative;
    height: 600px;
    width:100%;
    overflow: hidden;
    padding-top: 0px !important;
}
#videobcg {
    position: absolute;
    top: 15%;
    left: 0;
    min-width: 100%;
    min-height: 100%;
    height:40vh;
    width:auto;
    z-index: -100;
}
.title-header{
    text-align: left !important;
}


@media (min-width: 992px){
.pb-lg-115 {
        padding-bottom: 90px;
    }

.pt-200 {
        padding-top: 55px;
    }
}

/*header*/
@media screen and (min-width: 300px) and (max-width: 768px){
.img-fluid, .icon_mail_alt{
  margin-top: 0px!important;
}
.icon_clock_alt{
  margin-top: 3px!important;
}
}
@media screen and (min-width: 801px) and (max-width: 2000px){

.icon_clock_alt{
  margin-top: 3px!important;
}
}
/*vedio*/
@media screen and (min-width: 300px) and (max-width: 349px){
.row {
    --bs-gutter-x: hidden!important;
  }
  #banner {
    position: relative;
    height: 309px;
    width: 100%;
    overflow: hidden;
    margin-top: 25% !important;
}
#videobcg {
    position: absolute;
    top: 15%;
    left: 0;
    min-width: 0%;
    min-height: 0%;
    height: 40vh;
    width: 56vh;
    z-index: -100;
}
.section-title h1 {
    font-size: 20px;
    line-height: 31px;
}
#banner:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(41, 66, 102, 0.50) !important;
}
}
@media screen and (min-width: 350px) and (max-width: 500px){
.row {
    --bs-gutter-x: hidden!important;
  }
  #banner {
    position: relative;
    height: 316px;
    width: 100%;
    overflow: hidden;
    margin-top: 25% !important;
}
#videobcg {
    position: absolute;
    top: 15%;
    left: 0;
    min-width: 0%;
    min-height: 0%;
    height: 40vh;
    width: 56vh;
    z-index: -100;
}
.section-title h1 {
    font-size: 29px;
    line-height: 31px;
}
#banner:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(41, 66, 102, 0.50) !important;
}
}
@media screen and (min-width: 501px) and (max-width: 550px){
.row {
    --bs-gutter-x: hidden!important;
  }
  #banner {
    position: relative;
    height: 365px;
    width: 100%;
    overflow: hidden;
    margin-top: 25% !important;
}
#videobcg {
    position: absolute;
    top: 15%;
    left: 0;
    min-width: 0%;
    min-height: 0%;
    height: 43vh;
    width: 79vh;
    z-index: -100;
}
.section-title h1 {
    font-size: 29px;
    line-height: 31px;
}
#banner:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(41, 66, 102, 0.50) !important;
}
}
@media screen and (min-width: 551px) and (max-width: 750px){
.row {
    --bs-gutter-x: hidden!important;
  }
  #banner {
    position: relative;
    height: 435px;
    width: 100%;
    overflow: hidden;
    margin-top: 25% !important;
}
#videobcg {
    position: absolute;
    top: 15%;
    left: 0;
    min-width: 0%;
    min-height: 0%;
    height: 36vh;
    width: 70vh;
    z-index: -100;
}
.section-title h1 {
    font-size: 29px;
    line-height: 31px;
}
#banner:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(41, 66, 102, 0.50) !important;
}
}
@media screen and (min-width: 700px) and (max-width: 750px){
.card {
    height: 488px;
}
}
@media screen and (min-width: 751px) and (max-width: 799px){
.card {
    height: 505px;
}
}
@media screen and (min-width: 800px) and (max-width: 900px){
.card {
    height: 586px;
}
}
@media screen and (min-width: 300px) and (max-width: 900px){
.single{
   margin-left: 0%!important;
}
}
</style>

<main>
    <section class="pb-0 " id="banner">
        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" style="object-fit:cover">
            <source src="https://jfinserv.com/images/homeloan.mp4" type="video/mp4">
        </video>

        <div class="container min-vh-lg-90">
            <div class="row align-items-center">
                <div class="col-lg-7 d-flex flex-column text-center text-lg-left mb-5 mb-lg-0" data-aos="fade-right" style="padding-top: 20% !important;z-index: 1;">
                    <div class="banner-content py-5">
                        <div class="section-title text-start">
                            <span class="short-title wow fadeInUp" style="font-size: 20px; color: #4DA9EA;">ABOUT US</span>
                            <h1 class="wow fadeInUp mb-0" data-wow-delay='0.2s' style="color: white;">Owning Your Own Home Has Never Been Easier.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg_white pt-80 pb-20 ">
        <div class="container">
            <div class="description-widget">
                <div class="row box">
                    <div class="col-md-4" style="margin-top: 3%;">
                        <div class="desc-title text-center bg_primary">
                            <h2>We Promise To Deliver The Best</h2>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="desc-text pl-lg-10">
                            <p class="mt-35"><b>Jfinserv Consultant India Private Limited</b> with many finance partners strives to get you the best loan deals and offers online in just a few clicks. You can compare various loan products online with latest interest rates from Nationalized/Government banks and NBFCs in India including Indian Bank, BOM, PNB, RBL, UBI, BOB, Kotak, Axis, ICICI Bank, Aditya Birla Capital and other partners. Our team of financial experts works hard to find and get you the best deal. <a href="https://jfinserv.com/assets/certificate-of-incorporation.pdf" target="_blank" style="text-transform: uppercase; text-decoration: underline; color: #D83733; font-style: italic;">Incorporation Certificate <i class="fa-solid fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-80">
        <div class="container">
            <div class="row section-title justify-content-center text-center pb-3">
                <div class="col-md-9 col-lg-8 col-xl-7 box-height">
                    <h3 class="display-8 text-top"><span style="color: #0050b2;">Jfinserv</span> Can Help With All Your Home Lending Needs</h3>
                    <!--<span>Best Creative digital Agency</span>-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about1.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 20px !important">Calculate Your Purchasing Power</h3>
                            <p>Get a quick estimate on how much you may be able to borrow based on your current income and existing financial commitments.<br/></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about2.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 20px !important">Buy Your Home</h3>
                            <p>Our Residential home loan helps many first home buyers and new home buyers get into your dream home sooner.<br/></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about3.jpeg" alt="Edutech chatbot">

                        <div class="card-body">
                            <h3 style="font-size: 20px !important">Renovate Or Upgrade Your Home</h3>
                            <p>Wanting to expand or improve your home? We can help you fund your renovation using the equity you already have in your home.<br/></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about4.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 20px !important">Use the Equity In Your Home For A Personal Investment</h3>
                            <p>We know many things are important to you. Using the equity in your home can be a useful way to invest in other areas of your life.<br/></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about5.jpg" alt="Edutech chatbot">

                        <div class="card-body">
                            <h3 style="font-size: 20px !important">Expand Your Property Portfolio</h3>
                            <p>Property investments can be an exciting way to grow your wealth but it can also be challenging. We are here to help you.<br/></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about6.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 20px !important">Refinance Your Existing Loan</h3>
                            <p>Are you dissatisfied with your current home loan provider? Come and talk to us to about our refinancing package.<br/></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-40 pt-40">
        <div class="container">
            <div class="row section-title justify-content-center text-center pb-5">
              <div class="col-md-9 col-lg-8 col-xl-7">
                <h3 class="display-4 display-new" style="color: #0050b2;">Future Ready</h3>
                <p><b>Mission, Vision and Values</b></p>
               
              </div>
            </div>
            
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="mx-xl-4">
                        <img src="{{asset('images\future1.png')}}" alt="Kyan logo" class="mb-4 benefits">
                        <!-- <h5>Kyan Boards</h5> -->
                        <h6><b>Our Vision</b></h6>
                        <p>Our vision is to be the best Housing Finance Company in the country</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="mx-xl-4">
                        <img src="{{asset('images\future2.png')}}" alt="Atica logo" class="mb-4 benefits">
                        <!-- <h5>Atica</h5> -->
                        <h6><b>Our Mission</b></h6>
                        <p>Our vision is to be the best Housing Finance Company in the countryProvide secured housing finance at affordable cost, maximizing shareholders value with higher customer sensitivity</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="mx-xl-4">
                        <img src="{{asset('images\future3.png')}}" alt="Treva logo" class="mb-4 benefits">
                        <!-- <h5>Treva</h5> -->
                        <h6><b>Our Values</b></h6>
                        <p>Transformation to a Knowledge Organisation.</p>
                        <p>Higher Autonomy in Operations.</p>
                        <p>Instilling a sense of Ownership amongst Employees.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-color pt-90 pb-90">
        <div class="container">
            <div class="row align-items-center justify-content-around  text-lg-left">
                <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-in">
                    <h2 class="h1">Emmergence And Commitment</h2>
                    <p class="lead term-text-justify">Buying a house is a dream for many and involves a lot of financial planning. Jfinserv offers you home loans to either purchase/ construct a new home or renovate an existing one. We have tied up with top banks and home finance institutions making it simpler to realise the dream of a place called “Your Dream Home”. Our home loans are available at low rates with repayment tenure of up to 30 years, you are ensured of a comfortable EMI during the entire loan tenure.</p>
                </div>
                <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in">
                    <!--<img src="{{config('app.baseURL')}}/images/refer-earn.jpg" alt="Image" class="img-fluid term-fluid rounded shadow">-->
                    <img src="{{config('app.baseURL')}}/images/homeold.jpg" alt="Image" class="img-fluid term-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team start -->
    <section class="leadership-area pt-80 pb-90 bg_disable">
        <div class="container">
            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7 box-height">
                    <!-- h3 class="display-8 text-top"><span style="color: #0050b2;">Jfinserv</span> Leadership</h3> -->
                    <h2 class="mb-0">Meet Our Leadership Team</h2>
                </div>
            </div>

            <div class="row pt-65 gy-md-0 gy-4">
                <div class="col-lg-3 mb-5">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.1s">
                        <a>
                            <img class="team-img" src="/images/team/Dilip.png" alt="director">
                            <div class="leader-info">
                                <h5>Dilip Kumar Yadav</h5>
                                <p>Managing Director</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.3s">
                        <a>
                            <img class="team-img" src="/images/team/taniya.png" alt="leader-2">
                            <div class="leader-info">
                                <h5>Taniya Dixit</h5>
                                <p>Director</p>
                            </div>
                        </a>
                    </div>
                </div>
                   
                <!--<div class="col-lg-3 mb-5">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                        <a>
                            <img class="team-img" src="/images/icon3.png" alt="leader-3">
                            <div class="leader-info">
                                <h5>Sanket Kothari</h5>
                                <p>Properties Advisor</p>
                            </div>
                        </a>
                    </div>
                </div>-->
                <div class="col-lg-3 mb-5">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                        <a>
                            <img class="team-img" src="/images/team/Sandeep.png" alt="Sandeep Pawar">
                            <div class="leader-info">
                                <h5>Sandeep Pawar</h5>
                                <p>Marketing Head</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                        <a>
                            <img class="team-img" src="/images/team/Anusha.png" alt="HR Anusha Patil">
                            <div class="leader-info">
                                <h5>Anusha Patil</h5>
                                <p>HR-Operations</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                        <a>
                            <img class="team-img" src="/images/team/iqbal.png" alt="leader-5">
                            <div class="leader-info">
                                <h5>Iqbal Maldar</h5>
                                <p>Business Head</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                        <a>
                            <img class="team-img" src="/images/team/Parag.png" alt="Parag Bhosale">
                            <div class="leader-info">
                                <h5>Parag Bhosale</h5>
                                <p>Sales Manager</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                        <a>
                            <img class="team-img" src="/images/team/Sakshi.png" alt="Sakshi Gawali">
                            <div class="leader-info">
                                <h5>Sakshi Gawali</h5>
                                <p>Sales Co-ordinator</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                        <a>
                            <img class="team-img" src="/images/team/Nadir.png" alt="Nadir Ahmed">
                            <div class="leader-info">
                                <h5>Nadir Ahmed</h5>
                                <p>Sales Manager</p></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                        <a>
                            <img class="team-img" src="/images/team/Sunil.png" alt="leader-5">
                            <div class="leader-info">
                                <h5>Sunil Sukhwani</h5>
                                <p>Business Development</p></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Leadership Team end -->

    <!-- Call To Action start -->
    <section class="cta-area-2 pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12">
                    <div class="cta-content text-black wow fadeInRight">
                        <h2>Want To Know Learn More About Our Services?</h2>
                         <!--<p>Want to know more about our services </p> -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                        <a href="/services" class="theme-btn wow fadeInLeft">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection