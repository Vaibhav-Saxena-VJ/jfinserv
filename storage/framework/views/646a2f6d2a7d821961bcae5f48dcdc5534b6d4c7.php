
<?php $__env->startSection('content'); ?>
<style type="text/css">
    body{
        overflow-x: hidden;
    }

    @media  only screen and (min-width: 800px) and (max-width: 1700px){
        canvas#simple-pie-chart{
          height: 380px !important;
          width: 590px !important;
        }

    }

    .bg-white{
        background-color: #fff;
    }

    
    .margin-top-j{
        margin-top: 200px;
    }
    
    .pt-20{
        padding-top: 50px !important;
    }

    .pt-40{
        margin-top:90px;
    }

    .select-new{
        border: none !important;
        font-size: 16px !important;
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
    
    @media  screen and (min-width: 300px) and (max-width: 768px){
        .img-fluid, .icon_mail_alt{
          margin-top: 0px!important;
        }
        
        .icon_clock_alt{
          margin-top: 3px!important;
        }
    }
    
    @media  screen and (min-width: 801px) and (max-width: 2000px){
        .icon_clock_alt{
          margin-top: 3px!important;
        }
    }
    
    /*CSS for mobile view*/
    @media  screen and (min-width: 300px) and (max-width: 400px){
        .d-lg-block{
            margin-top: 540px;
        }
        
        .header-menu .navbar {
            padding: 0 !important;
        }
        
        .border-end {
            border-right: 0px solid #dee2e6!important;
            border-bottom: 1px solid #dee2e6!important;
        }
        
        .row {
            --bs-gutter-x: hidden!important;
          }

        .section-title h1{
          font-size: 24px!important;
        } 
    }
   
    @media  screen and (min-width: 401px) and (max-width: 500px){
        .d-lg-block{
          margin-top: 450px;
        }
        
        .header-menu .navbar {
            padding: 0 !important;
        }
        
        .border-end {
            border-right: 0px solid #dee2e6!important;
            border-bottom: 1px solid #dee2e6!important;
        }
        
        .row {
            --bs-gutter-x: hidden!important;
          }

        .section-title h1{
          font-size: 28px!important;
        } 
    }

    @media  screen and (min-width: 501px) and (max-width: 700px){
        .d-lg-block{
            margin-top: 450px;
        }
            
        .header-menu .navbar {
            padding: 0 !important;
        }
            
        .border-end {
            border-right: 0px solid #dee2e6!important;
            border-bottom: 1px solid #dee2e6!important;
        }
            
        .row {
            --bs-gutter-x: hidden!important;
        }

        .section-title h1{
            font-size: 35px!important;
        } 
    }

    @media  screen and (min-width: 701px) and (max-width: 768px){
        .d-lg-block{
            margin-top: 450px;
        }
        
        .header-menu .navbar {
            padding: 0 !important;
        }
        
        .border-end {
            border-right: 0px solid #dee2e6!important;
            border-bottom: 1px solid #dee2e6!important;
        }
        
        .row {
            --bs-gutter-x: hidden!important;
        }

        .section-title h1{
          font-size: 48px!important;
        } 
        
        .hover-box-shadow{
          margin-right: 1px;
        }
    }
    
    .floated-widget {
        position: relative;
    }
    
    .bnr-description{
        font-size: 20px !important;
    }
</style>

<main>
    <!-- Banner start -->
    <section class="banner-area-2 pt-80">
        <div class="container">
            <div class="row align-items-center pt-90 pb-80">
                <div class="col-lg-9 mx-auto">
                    <div class="banner-content text-center">
                        <div class="section-title">
                            <img class="pb-3" src="https://jfinserv.com/images/thank-you.png" alt="Thank You For Choosing Us as Your Loan Provider" width="40%">
                            <p class="display-8 text-top wow fadeInUp mt-3 bnr-description">We have received your inquiry and will be in touch soon. We typically respond within 24 hours. If you wish to contact us sooner, feel free to contact us at:  <a href="tel:+918329729190">+91 83297 29190</a>.</p>
                        </div>
                        <a class="theme-btn theme-btn-lg mt-50 wow fadeInUp" data-wow-delay='0.2s' href="loan-details.html">Back to Home <i class="fa-solid fa-house-chimney"></i></a>
                    </div>
                </div>
            </div>

            <div class="row position-relative pt-20 d-lg-block">
                <div class="col-md-12">
                    <div class="floated-widget">
                        <center><h3><b><span style="color: #0050b2;">JFINSERV</span> Provides</b></h3></center>
                        <br/>
                        <div class="row gy-4 gy-lg-0 gx-5">
                            <div class="col-lg-4 border-end">
                                <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.1s">
                                    <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/steps/icon-1.png" alt="icon">
                                    <h4><a href="#">Secured Home Loans</a></h4>
                                    <p>Select your loan amount, answer a few questions and get instant loan amount</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-4  border-end">
                                <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/steps/icon-2.png" alt="icon">
                                    <h4><a href="#">Properties Assistance</a></h4>
                                    <p>Share required documents with our representative hassle-free</p>
                                </div>
                            </div>
                        
                            <div class="col-lg-4">
                                <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.5s">
                                    <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/steps/icon-3.png" alt="icon">
                                    <h4><a href="#">Earning Oppurtunities</a></h4>
                                    <p>Choose the final sanctioned loan offer with the terms that work best for you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner end -->
        
        
    <!-- Call To Action start -->
    <section class="cta-area-2 pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="cta-content text-black wow fadeInRight">
                        <h2>Unlimited Earning Opportunity Through Referral</h2>
                        <!-- <p>Want to know more about our services </p> -->
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                        <a href="https://jfinserv.com/referral-program" class="theme-btn wow fadeInLeft">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action end -->
</main>

<script src="<?php echo e(config('app.baseURL')); ?>\assets\js\chart.min.js?id=b235b564de9c2c1d61d7"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
   
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery.smoothscroll.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/nouislider.min.js"></script>
<script type="text/javascript" src="js/wNumb.js"></script>
<script type="text/javascript" src="js/jquery-editable-select.js"></script>
<link rel="stylesheet" type="text/css" href="css/nouislider.min.css">

<!-- Google tag (gtag.js) event -->
<script>
  gtag('event', 'conversion_event_submit_lead_form', {
    // <event_parameters>
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u838013575/domains/jfinserv.com/public_html/resources/views/thank-you.blade.php ENDPATH**/ ?>