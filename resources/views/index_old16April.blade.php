@extends('layouts.app')
@section('content')



<style type="text/css">
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
line-height: 8px !important;
}
        .header-menu.header-menu-2 .menu > .nav-item > .nav-link {
    color: #000;
}
.partners{
   background: transparent;
    margin-right: 14px;
    margin-bottom: 20px;
    border-radius: 8px 8px 8px 8px;
    padding: 0px;
    margin-left: 19px;
}
.bank_img{
    width: 95%;
    height: 111px;
    margin: 10px;
}
</style>


<main>
        <section class="banner-area-2 pt-200 pb-95" id="banner_animation"
            style="background-size: auto; background-position: top left;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="banner-content">
                            <img data-parallax='{"x": 0, "y": 250, "rotateZ":0}' class="shape"
                                src="assets/img/banner/shape-3.png" alt="shape">
                            <h1 class="wow fadeInUp mb-0">If Home Ownership Is Your Aspiration, Make Us Part Of Your Solution.</h1>
                            <p class="wow fadeInUp mt-50" data-wow-delay="0.3s"><b>JFINSERV</b> not just values your home ownership, But also understands the financial challenges of yours. JFINSERV offers a unique referral program that helps you to <b>pay off  your 100% home loan amount</b>. It also helps individuals to accelerate their financial journey through our associate program. So reach out to us and start cashing in.


</p>
                            <a href="{{config('app.baseURL')}}/apply-now" data-wow-delay="0.5s"
                                class="wow fadeInUp theme-btn theme-btn-lg mt-50">Apply
                                now <i class="arrow_right"></i>
                            </a>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-5 offset-lg-1 pt-40">
                        <div class="banner-img">
                            <img class="main-img img-fluid wow fadeInRight" src="{{config('app.baseURL')}}/images\home.jpg"
                                alt="banner-img">
                            <div class="shapes">
                                <img data-parallax='{"x": 0, "y": 130, "rotateZ":0}' class="shape-1"
                                    src="assets/img/banner/shape-1.png" alt="shape">
                                <img data-parallax='{"x": 0, "y": -130, "rotateZ":0}' class="shape-2"
                                    src="assets/img/banner/shape-2.png" alt="shape">
                                <img data-parallax='{"x": 250, "y":0, "rotateZ":0}' class="shape-3"
                                    src="assets/img/banner/shape-4.png" alt="shape">
                                <img data-parallax='{"x": -200, "y": 250, "rotateZ":0}' class="shape-4"
                                    src="assets/img/banner/shape-5.png" alt="shape">
                                <img class="shape-5" src="assets/img/banner/shape-6.png" alt="shape">
                                <img class="shape-6" src="assets/img/banner/shape-7.png" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section -->
        

         <section class="feature-area-2 pt-140 pb-140" id="feature">
            <div class="container">
                <div class="feature">
                    <div class="row gy-lg-0 gy-4">
                        <div class="col-lg-4">
                            <div class="feature-widget-2 align-items-center wow fadeInRight feature-1"
                                data-wow-delay="0.1s">

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
                                    <h6>High Rang Loan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-widget-2 align-items-center wow fadeInRight feature-2"
                                data-wow-delay="0.3s">
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
                                    <h6>Offer Low Interest</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-widget-2 align-items-center wow fadeInRight feature-3"
                                data-wow-delay="0.5s">
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
                                    <h6>Fast & Easy Process</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fast-e-loan pt-130">
                    <div class="row gy-xl-0 gy-4">
                        <div class="col-xl-5 ">
                            <div class="section-title text-start">
                                <h2 class="mb-3">Fastest, Secure & Easy Loan Process With <span style="color: #0050b2;">Most Referral Benefits</span></h2>
                                <!-- <p>Need some fast cash? Bad cradit history? We dont mind about your past,
                                    just the
                                    future.
                                    Try loan start and feel secure in your future.</p> -->
                            </div>
                        </div>
                        
                        <div class="col-xl-1 ">
                            </div>

                        <div class="col-xl-3 col-md-6 offset-xl-1 ">
                            <div class="apply-topics">
                                <ul>
                                    <li><i class="icon_box-checked"></i><b>No Limit Of Loan Amount</b></li>
                                    <li><i class="icon_box-checked"></i><b>Fastest Disbursal Procedure</b></li>
                                    <li><i class="icon_box-checked"></i><b>Lowest Rate Of Interest</b></li>
                                    <li><i class="icon_box-checked"></i><b>Unlimited Earning Opportunity Through Referral</b></li>
                                </ul>
                                <a href="{{config('app.baseURL')}}/apply-now" class="theme-btn mt-20 w-100">Apply For Loan</a>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>

<section class="o-hidden">
    <div class="container" >
        <div class="row text-new">

            <div class="col-xl-6 mb-5 mb-xl-0" data-aos="fade-right">
                
                    <div class="text-xl-left mb-lg-2">
                       <!-- <span  class="tag-color">ABOUT US</span> -->
                        <h2 class="h1 showcase-title" style="font-size: 30px;">
                            Get Your Dream Start With <span style="color: #0050b2;">JFINSERV</span>
                        </h2>
                        <p class="text-justify">Are you ready to claim a place you can truly call your own? You’ve come to the right place.
We understand that as a first home buyer, you have unique concerns and considerations. This is why we offer a full suite of solutions to help you buy your very own slice of paradise, whether you’re self-employed, have a clean credit history, have a deposit of less than 10%, or your deposit includes money from a gift, inheritance, or a first home owner’s grant.</p>

                    </div>
                <div class="row" style="margin-top: 4%;">
                    <div class="col-md-12">

                        <p ><b>• Low Rate Home Loan –</b> for borrowers with a good credit history who can fully verify their income and demonstrate a history of saving for a deposit or making rental payments.<br><br>
<b>• Quickstart Home Loan –</b> for borrowers who need flexibility when it comes to their deposit.
<br><br><b>• Options Home Loan –</b> a loan typically for self-employed borrowers without a clear-cut financial position.</p>
                        
                    
                        </div>
                </div>
            </div>

                <div class="col" data-aos="fade-left" data-aos-delay="250">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home-9" role="tabpanel" aria-labelledby="tab-1">
                        <div class="row">
                            <div class="col-5 col-sm-6 col-lg-6 col-xl-6">
                                <img src="{{config('app.baseURL')}}/images\home2.jpg" alt="Stocks" class="mobile-desc">
                            </div>
                            
                        </div>
                    </div>
                    

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
                            <h2 class="wow fadeInUp"><span style="color: #0050b2;">JFINSERV</span> Features</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Home loans from JFINSERV come packed with many features and benefits. Here is a quick look at some of these perks.</p>
                        </div>
                    </div>
                </div>

                <div class="row pt-60 gy-4 gy-xl-0">
                    <div class="col-xl-4 col-md-8 box">
                        <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="icon-bg-1">

                                <img src="{{asset('images\one.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Attractive Interest Rate</h5>
                            <p>Repo rate linked interest rates.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-8 box">
                        <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="icon-bg-2">

                                <img src="{{asset('images\two.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Enjoy Low EMI</h5>
                            <p>Benefit from low EMIs with higher tenure.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-md-8 box">
                        <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-bg-3">

                                <img src="{{asset('images\three.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Step-Up Loan Offer</h5>
                            <p>Young salaried professionals can avail higher eligibility on Home Loans.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-8 box">
                        <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="icon-bg-4">

                                <img src="{{asset('images\four.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>Digital Sanction</h5>
                            <p>Online sanction in 5 simple steps.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-8 box">
                        <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="icon-bg-4">

                                <img src="{{asset('images\five.png')}}" alt="icon" class="icons">
                            </div>
                            <h5>PMAY</h5>
                            <p>Get subsidy benefits of up to Rs. 2.67* Lakhs under credit linked subsidy scheme from Govt. of India.</p>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-8 box">
                        <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.1s">
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

          <section class=" pt-125 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-title">
                            <h2 class="wow fadeInUp"><span style="color: #0050b2;">JFINSERV</span> Banking Partners</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">We Work With Multiple Banks</p>
                        </div>
                    </div>
                </div>

            <hr class="divider divider-sm bg-mantis">
<!-- <img src="https://www.iservefinancial.com/public/images/iservepartner/iserve-partners-new.png" style="width:100%;"> -->
            <div class="col-lg-12 ">
                <div class="row">
                    @foreach($bank as $banks)
                    <div class="bank col-lg-2 partners">
                        <img src="{{config('app.baseURL')}}/storage/app/{{$banks->bank_image}}" alt="partners" class="bank_img">
                    </div>
                    @endforeach
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
                                <li class="active"> <span class="number">1</span> <span class="text">Apply Online</span>
                                </li>
                                <li> <span class="number">2</span> <span class="text">Enter Your Informantion - 10
                                        min</span> </li>
                                <li> <span class="number">3</span> <span class="text">Pre-qualify / Pre-Approve - 5
                                        min</span> </li>
                                <li> <span class="number">4</span> <span class="text">Help you prepare</span> </li>
                                <li> <span class="number">5</span> <span class="text">We help your qualify - 15
                                        days</span></li>
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
                                    <p>Conis Guide on the supervisory approach to consolidation in the banking sector.
                                    </p>
                                </div>
                            </div>

                            <ul class="widget-content">
                                <li class="active"> <span class="number">1</span><span class="text">Schedule a Free
                                        Consulation</span></li>
                                <li> <span class="number">2</span> <span class="text">Discuss your Situation</span>
                                </li>
                                <li> <span class="number">3</span> <span class="text">We Review your condition </span>
                                </li>
                                <li> <span class="number">4</span> <span class="text">Help you prepare</span> </li>
                                <li> <span class="number">5</span> <span class="text">We help your qualify</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <section class="security-area">
            <div class="security-priority pt-90 pb-95 text-center">
                <div class="shapes">
                    <img src="assets/img/security-tips/shape-1.png" alt="shape">
                    <img src="assets/img/security-tips/shape-2.png" alt="shape">
                    <img src="assets/img/security-tips/shape-3.png" alt="shape">
                    <img src="assets/img/security-tips/shape-4.png" alt="shape">
                    <img src="assets/img/security-tips/shape-5.png" alt="shape">
                    <img src="assets/img/security-tips/shape-6.png" alt="shape">
                    <img src="assets/img/security-tips/shape-1.png" alt="shape">
                    <img data-parallax='{"x": -60, "y": 150, "rotateZ":-15}' src="assets/img/security-tips/shape-7.png"
                        alt="shape">
                    <img data-parallax='{"x": 0, "y": -150, "rotateZ":0}' src="assets/img/security-tips/shape-8.png"
                        alt="shape">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <img src="assets/img/security-tips/security-priority.png" alt="icon">
                            <h2 class="mt-4 mb-3">Your Security. Our Priority.</h2>
                            <p>We always have your security in mind. Rest easy knowing your data is protected with
                                128-bit encryption. <a href="#">Learn more.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="faq-area pt-125 pb-200">
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
                                            <h4 class="mb-0" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                 When can you apply for a loan?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>
You can put in your application for a Home Loan with JFINSERV Housing Finance Ltd. no sooner you decide to buy a home. The loan amount would be sanctioned or approved, based on your repayment capability.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingTwo">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                How much can I Finance?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingThree">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                Do you offering refinancing ?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingFour">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseFour">
                                                Can I do all of my banking with you?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.9s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingFive">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="true"
                                                aria-controls="collapseFive">
                                                When should i apply?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
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





                           <!-- Blog Posts start-->
        <section class="pb-120 bg_disable">
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
                                            <img src="{{config('app.baseURL')}}/storage/app/{{$get_property->property_image}}" alt="blog-img">
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

                                            <h6 style="font-weight: 600;margin-top: 10px;""><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">{{$get_property->property_size}}</a>
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
                      <p>
                        <?php echo $string ?>..   
                      </p>
                      @else
                      <p>
                        <?php echo $get_property->property_description ?>   
                      </p>
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
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                               

                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-12" style="text-align: center;">
                    <a href="{{config('app.baseURL')}}/properties"><button class="btn btn-primary" style="margin-top: 40px;">View More</button></a>
                    </div>
                
                </div>
            </div>
        </section>




        <section class="cta-area pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 position-relative">
                        <div class="cta cta-bg-primary">

                            <div class="shapes">
                                <img src="assets/img/cta/icon-1.png" alt="shape">
                                <img data-parallax='{"x": 150, "y": 0, "rotateZ":-0}' src="assets/img/cta/icon-2.png"
                                    alt="shape">
                                <img src="assets/img/cta/icon-3.png" alt="shape">
                                <img src="assets/img/cta/icon-4.png" alt="shape">
                                <img src="assets/img/cta/icon-5.png" alt="shape">
                                <img data-parallax='{"x": 400, "y": 0, "rotateZ":0}' src="assets/img/cta/icon-6.png"
                                    alt="shape">
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <div class="cta-content wow fadeInRight">
                                        <h2 class="mb-10">Have Any Question?</h2>
                                        <p>Ask us anythisg.Do you have a love question you want us to answer?</p>
                                    </div>
                                </div>

                                <div class="col-md-5 text-center text-md-end">
                                    <div class="cta-content   text-md-end mt-3 mt-md-0">
                                        <a href="{{config('app.baseURL')}}/contact"
                                            class="theme-btn theme-btn-alt wow fadeInLeft m-0">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection