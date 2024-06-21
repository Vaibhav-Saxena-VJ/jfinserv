@extends('layouts.app')
@section('content')

<style type="text/css">
    

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
  

</style>



  <main>
        <!-- Banner start -->
        <section class="banner-area-2 pt-145" style="background-image: url(http://jfinserv.vshoppng.tech/images/image.jpg);">
            <div class="container">
                <div class="row align-items-center pt-130 pb-140">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-content py-5">
                            <div class="section-title text-start">
                                <span class="short-title wow fadeInUp" style="font-size: 50px;">ABOUT US</span>
                                <p class="wow fadeInUp mb-0" data-wow-delay='0.2s' style="color: white; font-size: 25px">Owning your own home or growing your property portfolio has never been easier.</p>
                            </div>
                            <!-- <a class="theme-btn-2 theme-btn-primary mt-45 wow fadeInUp" data-wow-delay="0.4s" href="#">
                                <span class="arrow">
                                    <span class="horizontal-line"></span>
                                </span>View our 2019 Annual Report
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner end -->

        <section class="bg_white pt-90 pb-160 ">
            <div class="container">
                <div class="description-widget">
                    <div class="row box">
                        <div class="col-md-4">
                            <div class="desc-title text-end bg_primary">
                                <h2>A journey that started with a belief to Bank Different</h2>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc-text pl-lg-10">
                                <p class="mt-35">Banca Bank’s journey started with a single belief to connect people,
                                    places and
                                    possibilities by doing things others said could not be done. Anchored on this
                                    belief,
                                    the Bank was founded in 2017 and we are, to date, headquartered in the Mauritius
                                    International Financial Centre with a representative office in United States.</p>
                                <p class="mt-20">Banca Bank's core banking and transactional capabilities are also
                                    complemented. Banca
                                    experienced team and its regional foundation are complemented by the belief and
                                    trust
                                    our clients have in our ability to connect them to a global banking network to
                                    seamlessly achieve their financial aspirations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>












        <section style="background: #fff;">
  <div class="container">
    <div class="row section-title justify-content-center text-center">
      <div class="col-md-9 col-lg-8 col-xl-7 box-height">
        <h3 class="display-8 text-top"><span style="color: #0050b2;">JFINSERV</span>
 can help with all your home lending needs</h3>
        <!--<span>Best Creative digital Agency</span>-->
        
      </div>
    </div>
    <div class="row box">
      
      <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
        <div class="card hover-box-shadow">
          <a href="{{config('app.baseURL')}}/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about1.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="{{config('app.baseURL')}}/">
              <h3 style="font-size: 20px !important">Calculate your purchasing power</h3>
              <p>Get a quick estimate on how much you may be able to borrow based on your current income and existing financial commitments.</p></br>
            </a>
            
          </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
        <div class="card hover-box-shadow">
          <a href="{{config('app.baseURL')}}/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about2.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="{{config('app.baseURL')}}/">
              <h3 style="font-size: 20px !important">Buy your home</h3>
              <p>Our Residential home loan helps many first home buyers and new home buyers get into your dream home sooner.</p></br>
            </a>
            
          </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
        <div class="card hover-box-shadow">
          <a href="{{config('app.baseURL')}}/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about3.jpeg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="{{config('app.baseURL')}}/">
              <h3 style="font-size: 20px !important">Renovate or upgrade your home</h3>
              <p>Wanting to expand or improve your home? We can help you fund your renovation using the equity you already have in your home.</p></br>
            </a>
            
          </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
        <div class="card hover-box-shadow">
          <a href="{{config('app.baseURL')}}/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about4.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="{{config('app.baseURL')}}/">
              <h3 style="font-size: 20px !important">Use the equity in your home for a personal investment</h3>
              <p>We know many things are important to you. Using the equity in your home can be a useful way to invest in other areas of your life.</p></br>
            </a>
            
          </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
        <div class="card hover-box-shadow">
          <a href="{{config('app.baseURL')}}/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about5.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="{{config('app.baseURL')}}/">
              <h3 style="font-size: 20px !important">Expand your property portfolio</h3>
              <p>Property investments can be an exciting way to grow your wealth but it can also be challenging. We are here to help you.</p></br>
            </a>
            
          </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
        <div class="card hover-box-shadow">
          <a href="{{config('app.baseURL')}}/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/about6.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="{{config('app.baseURL')}}/">
              <h3 style="font-size: 20px !important">Refinance your existing loan</h3>
              <p>Are you dissatisfied with your current home loan provider? Come and talk to us to about our refinancing package.</p></br>
            </a>
            
          </div>
          </div>
        </div>
        


      </div>
    </div>
  </section>





<section>
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4 display-new" style="color: #0050b2;">Future Ready</h3>
            <p style="margin-bottom: 60px;">Mission, Vision and Values</p>
           
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="100">
            <div class="mx-xl-4">
              <img src="{{asset('images\future1.png')}}" alt="Kyan logo" class="mb-4 benefits">
              <!-- <h5>Kyan Boards</h5> -->
              <h6>Our Vision</h6>
              <p>Our vision is to be the best Housing Finance Company in the country</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="mx-xl-4">
              <img src="{{asset('images\future2.png')}}" alt="Atica logo" class="mb-4 benefits">
              <!-- <h5>Atica</h5> -->
              <h6>Our Mission</h6>
              <p>Our vision is to be the best Housing Finance Company in the countryProvide secured housing finance at affordable cost, maximizing shareholders value with higher customer sensitivity</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="300">
            <div class="mx-xl-4">
              <img src="{{asset('images\future3.png')}}" alt="Treva logo" class="mb-4 benefits">
              <!-- <h5>Treva</h5> -->
              <h6>Our Values</h6>
              <p>Transformation to a Knowledge Organisation.</p>
<p>Higher Autonomy in Operations.</p>
<p>Instilling a sense of Ownership amongst Employees.</p>
            </div>
          </div>
           
         
          

        </div>
      </div>
    </section>






    <section class="bg-color" style="padding: 100px 0px;">
      <div class="container">
        <div class="row align-items-center justify-content-around  text-lg-left">
          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-in">
            <h2 class="h1">Emmergence and Commitment</h2>
            <p class="lead term-text-justify">Buying a house is a dream for many and involves a lot of financial planning.</p></br>
            <p class="lead term-text-justify">JFINSERV offers you home loans to either purchase/construct a new home or renovate an existing one.
We have tied up with top banks and home finance institutions making it simpler to realise the dream of a place called “Your Dream Home”.
</p></br>
<p class="lead term-text-justify">Our home loans are available at low rates with repayment tenure of up to 30 years, you are ensured of a comfortable EMI during the entire loan tenure.</p>
            
            <!-- <a href="#calculator" class="lead">Calculator</a> -->
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in">
            <img src="{{config('app.baseURL')}}/images/refer-earn.jpg" alt="Image" class="img-fluid term-fluid rounded shadow">

          </div>
        </div>
      </div>
    </section>




        <!-- Statistics start -->
       <!--  <section class="statistics-area pt-135 pb-140 bg_disable">
            <div class="container">
                <div class="row gy-lg-0 gy-4 ">
                    <div class="col-lg-7">
                        <div class="statistics-widget-2 wow fadeInUp">
                            <div class="row gx-0">
                                <div class="col-7">
                                    <div class="statistics-slider h-100">
                                        <div class="widget-content  widget-1">
                                            <h1 class="stat-counter">15,000</h1>
                                            <p>We employ 15,000 people around the world</p>
                                        </div>
                                        <div class="widget-content  widget-1">
                                            <h1 class="stat-counter">10,000</h1>
                                            <p>We employ 15,000 people around the world</p>
                                        </div>
                                        <div class="widget-content  widget-1">
                                            <h1 class="stat-counter">25,000</h1>
                                            <p>We employ 15,000 people around the world</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <img class="img-fluid" src="http://jfinserv.vshoppng.tech/assets/img/statistics/img-1.png" alt="img">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="statistics-widget-2  wow fadeInUp" data-wow-delay="0.2s">
                            <div class="widget-content widget-2">
                                <h1 class="stat-counter">125</h1>
                                <p>Our colleagues come from 125 different countries</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-30 pb-30 gy-4 gy-lg-0">
                    <div class="col-lg-7">
                        <div class="row gy-4 gy-lg-0">
                            <div class="col-lg-4 col-md-6">
                                <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="widget-content widget-3">
                                        <h1 class="stat-counter">75</h1>
                                        <p>More than 75 years in business</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="widget-content widget-4">
                                        <h1 class="stat-counter">450</h1>
                                        <p>450 branches worldwide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.5s">
                                    <div class="widget-content widget-5">
                                        <h1 class="stat-counter">25</h1>
                                        <p>We are present in 25 markets</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="statistics-widget-2 wow fadeInRight" data-wow-delay="0.7s">
                            <div class="widget-content widget-6"
                                style="background-image: url(http://jfinserv.vshoppng.tech/assets/img/statistics/img-2.png)">
                                <h2>Best Consumer Digital Bank</h2>
                                <p>Global Finance 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-5">
                        <div class="statistics-widget-2 wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="widget-content widget-7"
                                style="background-image: url(http://jfinserv.vshoppng.tech/assets/img/statistics/img-3.png);">
                                <h1 class="stat-counter">35</h1>
                                <p>Global Finance 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="statistics-widget-2 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="row gx-0">
                                <div class="col-5">
                                    <img class="img-fluid" src="http://jfinserv.vshoppng.tech/assets/img/statistics/img-6.png" alt="img">

                                </div>
                                <div class="col-7">
                                    <div class="widget-content widget-8"
                                        style="background-image: url(http://jfinserv.vshoppng.tech/assets/img/statistics/img-4.png);">
                                        <h1 class="stat-counter">2</h1>
                                        <p>We’re listed on two of Asia’s largest stock exchanges</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Statistics end -->

        <!-- Recgnition start -->
        <!-- <section class="recognition-area bg_white pt-135 pb-140">
            <div class="container">
                <div class="section-title text-start">
                    <span class="short-title mt-0 wow fadeInUp">
                        Recognition
                    </span>
                    <h2 class="mb-0 wow fadeInUp" data-wow-delay="0.2s">Milestones and Accolades</h2>
                </div>

                <div class="recognition-widget pt-70">
                    <div class="row gy-4 gy-lg-0">
                        <div class="col-lg-3 col-5">
                            <div class="widget-navigation wow fadeInUp pe-lg-4" data-wow-delay="0.1s">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="2020-tab" data-bs-toggle="tab" href="#twenty"
                                            role="tab" aria-controls="twenty" aria-selected="true">2020</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="2019-tab" data-bs-toggle="tab" href="#nineteen"
                                            role="tab" aria-controls="nineteen" aria-selected="false">2019</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="2018-tab" data-bs-toggle="tab" href="#eighteen"
                                            role="tab" aria-controls="eighteen" aria-selected="false">2018</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="2017-tab" data-bs-toggle="tab" href="#seventeen"
                                            role="tab" aria-controls="seventeen" aria-selected="false">2017</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link " id="2016-tab" data-bs-toggle="tab" href="#sixteen"
                                            role="tab" aria-controls="sixteen" aria-selected="false">2016</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link " id="2015-tab" data-bs-toggle="tab" href="#fifteen"
                                            role="tab" aria-controls="fifteen" aria-selected="false">2015</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link " id="2014-tab" data-bs-toggle="tab" href="#lessfifteen"
                                            role="tab" aria-controls="lessfifteen" aria-selected="false">2014 and
                                            before</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-7">
                            <div class="tab-content wow fadeInUp" data-wow-delay="0.3s" id="myTabContent">
                                <div class="tab-pane fade show active" id="twenty" role="tabpanel"
                                    aria-labelledby="2020-tab">
                                    <h3>2020</h3>
                                    <p>The First Mauritian Bank to join the GRI Community</p>
                                    <p>Instant account opening with a Customer On-boarding App</p>
                                </div>
                                <div class="tab-pane fade" id="nineteen" role="tabpanel" aria-labelledby="2019-tab">
                                    <h3>2019</h3>
                                    <p>The First Mauritian Bank to join the GRI Community</p>
                                    <p>Instant account opening with a Customer On-boarding App</p>
                                </div>
                                <div class="tab-pane fade" id="eighteen" role="tabpanel" aria-labelledby="2018-tab">
                                    <h3>2018</h3>
                                    <p>The First Mauritian Bank to join the GRI Community</p>
                                    <p>Instant account opening with a Customer On-boarding App</p>
                                </div>
                                <div class="tab-pane fade" id="seventeen" role="tabpanel" aria-labelledby="2017-tab">
                                    <h3>2017</h3>
                                    <p>The First Mauritian Bank to join the GRI Community</p>
                                    <p>Instant account opening with a Customer On-boarding App</p>
                                </div>
                                <div class="tab-pane fade" id="sixteen" role="tabpanel" aria-labelledby="2016-tab">
                                    <h3>2016</h3>
                                    <p>The First Mauritian Bank to join the GRI Community</p>
                                    <p>Instant account opening with a Customer On-boarding App</p>
                                </div>
                                <div class="tab-pane fade" id="fifteen" role="tabpanel" aria-labelledby="2015-tab">
                                    <h3>2015</h3>
                                    <p>The First Mauritian Bank to join the GRI Community</p>
                                    <p>Instant account opening with a Customer On-boarding App</p>
                                </div>
                                <div class="tab-pane fade" id="lessfifteen" role="tabpanel" aria-labelledby="2014-tab">
                                    <h3>2014 and before</h3>
                                    <p>The First Mauritian Bank to join the GRI Community</p>
                                    <p>Instant account opening with a Customer On-boarding App</p>
                                    <p>The First Mauritian Bank to join the GRI Community</p>
                                    <p>Instant account opening with a Customer On-boarding App</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-5 offset-xl-1 pr-lg-35 pl-lg-35">
                            <div class="accolades-widget wow fadeInUp" data-wow-delay="0.5s">
                                <div class="accolades-header d-flex justify-content-between align-items-end">
                                    <h2>Awards</h2>
                                    <img src="http://jfinserv.vshoppng.tech/assets/img/recognition/icon.svg" alt="icon">
                                </div>
                                <div class="accolades-content">
                                    <ul>
                                        <li class="">
                                            <p class="subtitle">CITI BANK</p>
                                            <p class="text">Straight-Through processing (STP) Excellence Award</p>
                                        </li>
                                        <li class="mt-3">
                                            <p class="subtitle">MARCOM AWARDS</p>
                                            <p class="text">Platinum Winner for ‘The Believers’ Campaign</p>
                                        </li>
                                        <li class="mt-3">
                                            <p class="subtitle">BURJ CEO AWARDS</p>
                                            <p class="text">Most Innovative Bank in Mauritius</p>
                                        </li>
                                        <li class="mt-3">
                                            <p class="subtitle">GLOBAL BRANDS MAGAZINE</p>
                                            <p class="text">Most Innovative Treasury Services</p>
                                            <p class="text">Best Banking Brand in Mauritius</p>
                                            <p class="text">Best Credit Card Rewards Program</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Recgnition end -->

        <!-- Leadership Team start -->
        <section class="leadership-area pb-140 bg_disable">
            <div class="container">
              <!--   <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="section-title text-start wow fadeInRight">
                            <span class="short-title mt-0">Leadership</span>
                            <h2 class="mb-0">Meet our leadership team</h2>
                        </div>
                    </div>
                  
                </div> -->
                 <div class="row section-title justify-content-center text-center">
      <div class="col-md-9 col-lg-8 col-xl-7 box-height">
        <!-- h3 class="display-8 text-top"><span style="color: #0050b2;">JFINSERV</span>
 Leadership</h3> -->
        <h2 class="mb-0" style="margin-top: 70px;">Meet our leadership team</h2>
        
      </div>
    </div>

                <div class="row pt-65 gy-md-0 gy-4">
                     <div class="col-lg-1">
                       <!--  <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.1s">
                            <a href="#">
                                <img src="http://jfinserv.vshoppng.tech/assets/img/leadership/img-1.png" alt="leader-1">
                                <div class="leader-info">
                                    <h5>Eldridge Robles</h5>
                                    <p>Co-Founder, Conis</p>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <div class="col-lg-3" style="margin-left: 5%;">
                        <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.1s">
                            <a href="#">
                                <img src="http://jfinserv.vshoppng.tech/assets/img/leadership/img-1.png" alt="leader-1">
                                <div class="leader-info">
                                    <h5>Eldridge Robles</h5>
                                    <p>Co-Founder, Conis</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.3s">
                            <a href="#">
                                <img src="http://jfinserv.vshoppng.tech/assets/img/leadership/img-2.png" alt="leader-2">
                                <div class="leader-info">
                                    <h5>Eldridge Robles</h5>
                                    <p>Co-Founder, Conis</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-leadership-widget wow fadeInUp " data-wow-delay="0.5s">
                            <a href="#">
                                <img src="http://jfinserv.vshoppng.tech/assets/img/leadership/img-3.png" alt="leader-3">
                                <div class="leader-info">
                                    <h5>Eldridge Robles</h5>
                                    <p>Co-Founder, Conis</p>
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
                    <div class="col-md-6">
                        <div class="cta-content text-black wow fadeInRight">
                            <h2>Want to know learn more about our services?</h2>
                            <!-- <p>Want to know more about our services </p> -->
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                            <a href="#" class="theme-btn wow fadeInLeft">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action end -->

        
    </main>
@endsection