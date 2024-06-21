@extends('layouts.app')
@section('title', "Financial Services Contact | Financial Consultant - Jfinserv")
@section('description', "Get a financial services contact and get connected with financial consultant. Finance Home Loan Pune offers tailored solutions to help in business growth. Apply today")
@section('keywords', "Financial Services Contact, Financial Consultant")

@section('content')


<style type="text/css">
    .faq-widget .single-widget-one {
    padding: 20px
}
.cta.cta-bg-primary {
    background-color: var(--primary-color);
    background-image: none;
    margin: 90px 0px !important;
}
.faq-widget .faq-header h4{
    font-size: 21px !important;
}
.banner-area-2 .banner-content h1 {
    color: white;
    font-family: "Poppins", sans-serif;
    font-weight: 700;
    line-height: 56px;
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link {
     color: #000; 
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link {
    color: #000;
}
@media (min-width: 992px){
.navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
    background-color: white;
}
}
.pt-50{
    padding-top:40px !important;
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
/*CSS for Mobile view*/
@media screen and (min-width: 300px) and (max-width: 400px){
.short-title{
    font-size: 17px!important;
}
.py-5 {
    padding-top: 2rem!important;
    padding-bottom: 3rem!important;
}
.banner-area-2 .banner-content h1 {
    font-size: 22px;
    line-height: 27px;
}
.banner-area-2{
    height: 376px;
}
.pt-140 {
    padding-top: 10px;
}
}
@media screen and (min-width: 401px) and (max-width: 800px){
.pt-140 {
    padding-top: 50px;
}
}
</style>

    <main>
        <!-- BreadCrumb start -->
        <section class="banner-area-2 pt-50" style="background-image: url({{config('app.baseURL')}}/images/contact.jpg);">
            <div class="container">
                <div class="row align-items-center pt-130 pb-140">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-content py-5">
                            <div class="section-title text-start">
                                <span class="short-title wow fadeInUp" style="font-size: 20px; color: #4DA9EA">CONTACT US</span>
                                <h1 class="wow fadeInUp mb-0" data-wow-delay='0.2s' >Contact Us For Loan Details, Assistance Or Any Queries.</h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb end -->

        <!-- Get In Touch start -->
        <section class="pt-140 pb-140 get-touch-area bg_white" style="margin-bottom:100px !important">
            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-lg-5">
                        <div class="section-title text-start">
                            <h2>Get In Touch With Us.</h2>
                            <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
                        </div>
                        <div class="row mt-55">
                            <div class="col-sm-6">
                                <div class="get-touch-box">
                                    <div class="icon">

                                        <img src="{{asset('images\call.png')}}" alt="call icon">
                                    </div>
                                    <div>
                                        <p>Call the helpline:</p>
                                        <span>+91 73855 51623</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="get-touch-box">
                                    <div class="icon">

                                        <img src="{{asset('images\mail.png')}}" alt="mail icon">
                                    </div>
                                    <div>
                                        <p>Email us:</p>
                                        <span>contact@jfinserv.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="get-touch-box mt-30">
                                    <div class="icon">

                                        <i class="icon_pin_alt "></i>
                                    </div>
                                    <div>
                                        <p>Location</p>
                                        <span>Office No. 423, Sterling Center M.G. Road, Camp Pune, MH 411001</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="get-touch-box mt-30">
                                    <div class="icon">

                                        <i class="icon_clock_alt "></i>
                                    </div>
                                    <div>
                                        <p>Work Hours</p>
                                        <span>Monday - Friday <br>10:00AM - 06:00PM
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="contact-form-widget">
                            <form action="{{config('app.baseURL')}}/contact" method="post">
                                 {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="f-name">Name</label>
                                        <input type="text" id="f-name" name="name" class="form-control"
                                            placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-md-6 mt-20 mt-md-0">
                                        <label for="email-address">Email</label>
                                        <input type="email" id='email-address' name="email" class="form-control"
                                            placeholder="yourname@example.com" required="">
                                    </div>
                                    <div class="col-md-12 mt-20">
                                        <label for="form-sub">Phone Number</label>
                                        <input type="tel" id="form-sub" name="phone" class="form-control"
                                            placeholder="Phone Number" required="">
                                    </div>
                                    <div class="col-md-12 mt-20">
                                        <label for="form-text">Messages</label>
                                        <textarea cols="30" rows="5" name="message" id="form-text"
                                            class="form-control pt-15" placeholder="Your Message....."
                                            required=""></textarea>
                                    </div>
                                    <!--<div class="col-12 mt-3">-->
                                    <!--    <p class="policy-text">-->
                                    <!--        By submitting this form you consent to us emailing you occasionally about-->
                                    <!--        our products and services. You can unsubscribe from emails at any time, and-->
                                    <!--        we will never pass your email onto third parties. Privacy Policy-->
                                    <!--    </p>-->
                                    <!--</div>-->
                                    <div class="col-12 mt-35">
                                        <button type="submit" class="theme-btn theme-btn-lg w-100">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Get In Touch end -->

        <!-- need more help start -->
        <!-- <section class="pt-125 pb-140 bg_disable">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 mx-auto">
                        <div class="section-title">
                            <h2 class="wow fadeInUp">Need more help?</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-60 gy-lg-0 gy-4">
                    <div class="col-lg-4">
                        <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.1s">
                            <img src="img/contact/help-icon-1.svg" alt="icon">
                            <h5 class="mt-4 mb-10">Articles & Guides</h5>
                            <p>100+ articles to get the information you need when you need it.</p>
                            <a href="#" class="theme-btn theme-btn-outlined mt-30">Visit Knowledge Base</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.3s">
                            <img src="img/contact/help-icon-2.svg" alt="icon">
                            <h5 class="mt-4 mb-10">Technical Support</h5>
                            <p>If you ever need help, you can chat directly with our support team!</p>
                            <a href="#" class="theme-btn theme-btn-outlined mt-30">Chat With Support</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.5s">
                            <img src="img/contact/help-icon-3.svg" alt="icon">
                            <h5 class="mt-4 mb-10">Social Media Support</h5>
                            <p>Doing customer support on social media requires a dedicated strategy. </p>
                            <div class="social-button mt-35 mb-10">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- need more help end -->


        <!-- Call To Action start -->
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
                                        <p>Hope All Your Query Has Been Resolved, </p>
                                        <h2 class="mb-10">Want To Apply For The Loan ?</h2>
                                    </div>
                                </div>

                                <div class="col-md-5 text-center text-md-end">
                                    <div class="cta-content   text-md-end mt-3 mt-md-0">
                                        <a href="{{config('app.baseURL')}}/Auth/registeruser"
                                            class="theme-btn theme-btn-alt wow fadeInLeft m-0">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action end -->
    </main>






@endsection