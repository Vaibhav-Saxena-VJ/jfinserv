
<?php $__env->startSection('content'); ?>
<style type="text/css">

    .noUi-pips-horizontal {
    padding: 10px 0;
    height: 80px;
    top: -14px;
    left: 0;
    width: 100%;
}
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

.custom-range {
    width: 100%;
    height: calc(1rem + 0.1rem) !important;

    }

#InterestRange {
    background: linear-gradient(to right, #0049a3 0%, #0049a3 42.108%, #fff 42.108%, white 100%);
}

  #customRange{
    background:linear-gradient(to right, #0049a3 0%, #0049a3 14.2%, #fff 14.2%, white 100%)
  }
  #InterestRange{
    background:linear-gradient(to right, #0049a3 0%, #0049a3 42.108%, #fff 42.108%, white 100%)
  }

  .input-color {
    position: relative;
  }
  .input-color input {
    padding-left: 20px;
  }
  .input-color .color-box {
    width: 19px;
    height: 10px;
    display: inline-block;
    background-color: #fff;
    position: absolute;
    left: 0px;
    top: 5px;
  }
.custom-range {
    height: calc(1rem + 0.2rem);
    background: linear-gradient(to right, #0049a3 0%, #0049a3 0%, #fff 0%, #fff 100%);
    border: solid 1px #0049a3;
    border-radius: 8px;
    outline: none;
    transition: background 450ms ease-in;
    -webkit-appearance: none;
}
.custom-range {
    width: 100%;
    height: calc(1rem + 0.4rem);
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

  
@media  only screen and (min-width: 800px){

  .bar-chart-padding{
    padding: 6rem 0rem 2rem 0rem;
  }

}
@media  only screen and (max-width: 767px){
 
  canvas#simple-pie-chart{
    height: 350px !important;
  }
}

.card-img-top{
    height: 200px !important;
    object-fit: cover;
    /*border-radius: 10px;*/
}
.card{
    border-radius: 10px;
}
.noUi-pips {
    position: relative;
    color: #999;
    display: flex;
}
.margin-top-j{
    margin-top: 200px;
}
.noUi-pips, .noUi-pips * {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.noUi-connects {
    border-radius: 3px;
}
.noUi-connects {
    overflow: hidden;
    z-index: 0;
}
.noUi-base, .noUi-connects {
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1;
    margin-top: -2px;
    /*border:  1px solid #dbdbdb;*/
}
.noUi-target, .noUi-target * {
    -webkit-touch-callout: none;
    -webkit-tap-highlight-color: transparent;
    -webkit-user-select: none;
    -ms-touch-action: none;
    touch-action: none;
    -ms-user-select: none;
    -moz-user-select: none;
    user-select: none;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.noUi-value-horizontal {
    -webkit-transform: translate(-50%,50%);
    transform: translate(-50%,50%);
}
.noUi-value {
    position: absolute;
    white-space: nowrap;
    text-align: center;
    margin-top: 10px;
    font-size: 14px;
    font-family: Roboto,sans-serif;
    line-height: 22px;
}
.noUi-marker-horizontal.noUi-marker-large {
    height: 14px;
}
.noUi-marker-horizontal.noUi-marker {
      margin-left: 0px;
    width: 1px;
    height: 18px;
    margin-top: -9px;
}
.noUi-marker-large {
    background: #dcdee0;
}
.noUi-marker {
    position: absolute;
    background: #ccc;
}
.noUi-pips, .noUi-pips * {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.noUi-touch-area {
    height: 100%;
    width: 100%;
}
.noUi-connect {
    background: #0050b2;
}
.noUi-connect {
    height: 100%;
    width: 100%;
}
.noUi-connect, .noUi-origin {
    will-change: transform;
    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
    -ms-transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    -webkit-transform-style: preserve-3d;
    transform-origin: 0 0;
    transform-style: flat;
}
.noUi-target, .noUi-target * {
    -webkit-touch-callout: none;
    -webkit-tap-highlight-color: transparent;
    -webkit-user-select: none;
    -ms-touch-action: none;
    touch-action: none;
    -ms-user-select: none;
    -moz-user-select: none;
    user-select: none;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
#test5{
        width: 581px;
    height: 2px;
}
#test6{
        width: 581px;
    height: 2px;
}
#test7{
    width: 581px;
    height: 2px;
}
.calculator-widget .single-calculator-widget .single-range .nav-tabs .nav-item .nav-link.active {
    color: #fff;
    background: #0d6efd;
}
.calculator-widget .single-calculator-widget .single-range .nav-tabs .nav-item {
    border: none;
    background: lightgrey;
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



/*@media (min-width: 992px){*/
/*.pb-lg-115 {*/
/*    padding-bottom: 90px;*/
/*}*/

/*.pt-200 {*/
/*    padding-top: 55px;*/
/*}*/
/*}*/

/*header*/
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
  .g-5, .gx-5 {
    --bs-gutter-x: 0rem;
}

.section-title h1{
  font-size: 48px!important;
} 
.lead {
    font-size: 1.1rem;
    font-weight: 300;
}
.formemi{
      padding: 0.3rem!important;
}
#simple-pie-chart{
  display: block;
    height: 291px!important;
    width: 487px!important;
    margin-left: -58px!important;
}
.hover-box-shadow{
  margin-right: 1px;
}
}
</style>
<main>
        <!-- Banner start -->
        <section class="banner-area-2 loan-banner pt-20" style="background-image: url(http://jfinserv.com/assets/img/banner/loan-banner.png)">
            <div class="container">
                <div class="row align-items-center  pt-165 pb-200">
                    <div class="col-lg-7 mx-auto">
                        <div class="banner-content text-center">
                            <div class="section-title">
                                <h1 class="wow fadeInUp" style="font-size: 40px;">One Stop Solution For All Your Secure Lending Requirements</h1>
                            </div>
                            <!-- <a class="theme-btn theme-btn-lg theme-btn-alt mt-50 wow fadeInUp" data-wow-delay='0.2s' href="loan-details.html">
                                Get started <i class="arrow_right"></i>
                            </a> -->
                        </div>
                    </div>
                </div>

                <div class="row position-relative pt-40 d-lg-block">
                    <div class="col-md-12">
                       
                        <div class="floated-widget">
                             <center><h3><b><span style="color: #0050b2;">JFINSERV</span> Provides</b></h3></center>
                             <br>
                            <div class="row gy-4 gy-lg-0 gx-5">
                                <div class="col-lg-4 border-end">
                                    <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.1s">
                                        <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/steps/icon-1.png" alt="icon">
                                        <h4><a href="#">Secured Home Loans</a></h4>
                                        <p>Select your loan amount, answer a few questions and get instant loan amount
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4  border-end">
                                    <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.3s">
                                        <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/steps/icon-2.png" alt="icon">
                                        <h4><a href="#">Properties Assistance</a></h4>
                                        <p>Share required documents with our representative hassle-free
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.5s">
                                        <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/steps/icon-3.png" alt="icon">
                                        <h4><a href="#">Earning Oppurtunities</a></h4>
                                        <p>Choose the final sanctioned loan offer with the terms that work best for you
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <!-- Banner end -->
                <section class="backbg pt-200 pb-140" >
  <div class="container backbg">
    <div class="row section-title justify-content-center text-center">
      <div class="col-md-9 col-lg-8 col-xl-7 box-height">
        <h3 class="display-8 text-top" style="padding-bottom: 35px;"><span style="color: #0050b2;">JFINSERV</span>
 Can Help With All Your <br>Home Lending Needs</h3>
        <!--<span>Best Creative digital Agency</span>-->
       
        
      </div>
    </div>
    <div class="row box">
      
      <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
        <div class="card hover-box-shadow">
          <a href="<?php echo e(config('app.baseURL')); ?>/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="<?php echo e(config('app.baseURL')); ?>/images/house.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="<?php echo e(config('app.baseURL')); ?>/">
              <h3 style="font-size: 18px !important;font-weight: 700;">Home Loan</h3>
              <p style="font-size: 14px !important;">At JFINSERV, we understand you don’t really want a loan, but a new home or to save money on your repayments. We’re here to help with low rates, great features, and a seamless process to settlement.</p></br>
            </a>
            
          </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
        <div class="card hover-box-shadow">
          <a href="<?php echo e(config('app.baseURL')); ?>/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="<?php echo e(config('app.baseURL')); ?>/images/mortage.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="<?php echo e(config('app.baseURL')); ?>/">
              <h3 style="font-size: 18px !important;font-weight: 700;">Mortgage Loan</h3>
              <p style="font-size: 14px !important;">JFINSERV brings to you - Mortgage Loan - an innovative combination of a loan and overdraft facility with flexible repayment options against the security of your immovable property. Check out your loan against property eligibility and get exclusive add on benefits and tax benefits.</p></br>
            </a>
            
          </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
        <div class="card hover-box-shadow">
          <a href="<?php echo e(config('app.baseURL')); ?>/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="<?php echo e(config('app.baseURL')); ?>/images/project.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="<?php echo e(config('app.baseURL')); ?>/">
              <h3 style="font-size: 18px !important;font-weight: 700;">Project Loan</h3>
              <p style="font-size: 14px !important;">We’ll help take the stress out of financing your building or renovations with our low rates and easy online application.

From streamlined packages to fully-featured loans, you’ll find a low rate construction loan that’s perfect for you.</p></br>
            </a>
            
          </div>
          </div>
        </div>

        

        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
        <div class="card hover-box-shadow">
          <a href="<?php echo e(config('app.baseURL')); ?>/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="<?php echo e(config('app.baseURL')); ?>/images/property.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="<?php echo e(config('app.baseURL')); ?>/">
              <h3 style="font-size: 18px !important;font-weight: 700;">Overdraft Facility</h3>
              <p style="font-size: 14px !important;">An overdraft facility allows you to withdraw funds from a fixed line of credit as and when you need to. Repayment is also easy and hassle-free, as you can repay what you borrow at your convenience. This makes an overdraft facility one of the most desired credit options. JFinserv offers these features through its unsecured Flexi personal loan.</p></br>
            </a>
            
          </div>
          </div>
        </div>



        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
        <div class="card hover-box-shadow">
          <a href="<?php echo e(config('app.baseURL')); ?>/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="<?php echo e(config('app.baseURL')); ?>/images/capital.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="<?php echo e(config('app.baseURL')); ?>/">
              <h3 style="font-size: 18px !important;font-weight: 700;">Lease Rental Discounting (LDR)</h3>
              <p style="font-size: 14px !important;">Lease Rental Discounting is a term loan that is offered against rental receipts and is availed by tenants against leased contracts. So, if you want to avail of funding, against your rental receipts, this financing option enables you to do that.</p></br>
            </a>
            
          </div>
          </div>
        </div>




        <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
        <div class="card hover-box-shadow">
          <a href="<?php echo e(config('app.baseURL')); ?>/" class="d-block rounded-top">
            <img class="card-img-top hover-fade-out img-img" src="<?php echo e(config('app.baseURL')); ?>/images/car.jpg" alt="Edutech chatbot">
          </a>
          <div class="card-body">
            <a href="<?php echo e(config('app.baseURL')); ?>/">
              <h3 style="font-size: 18px !important;font-weight: 700;">Car Loan</h3>
              <p style="font-size: 14px !important;">Millions of Indians today are upwardly mobile, and on the move. Many are looking at having their own car to reach their destination in time and in comfort. Now, the years of waiting and saving are over. A Car Loan will bring that dream of owning a vehicle within your reach.</p></br>
            </a>
            
          </div>
          </div>
        </div>
        


      </div>
    </div>
  </section>

        <!-- Apply Loan start -->
        <section class="apply-loan-area bg_disable pb-140">
            <div class="container">
                <div class="row pt-3">
                    <div class="col-xl-6 mx-auto">
                        <div class="section-title">
                            <h2 class="wow fadeInUp">One Step Closer To Finding Your <span style="color: #0050b2;">Perfect Home!</span></h2>
                        </div>
                    </div>
                </div>
                <form action="<?php echo e(config('app.baseURL')); ?>/apply-now">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="row pt-35  gy-lg-0 gy-3">
                                <div class="col-lg-4">
                                    <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/icon-1.1.png" alt="icon-1">
                                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/icon-1.2.png" alt="icon-1.2">
                                        </div>
                                        <div class="apply-content">
                                            <span class="title">How much do you need?</span>
                                            <p class="d-flex">₹ <input name="loan_amount" class="w-100" type="text" value="2000000"> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="icon">
                                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/icon-2.1.png" alt="icon-2">
                                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/icon-2.2.png" alt="icon-2.2">
                                        </div>
                                        <div class="apply-content">
                                            <span class="title">Type of Loan</span>
                                            <select name="select_loan_type" id="select-loan-type">
                                                <option>Select your Loan</option>
                                                    <option id="Home_loan" value="Home Loan">Home Loan</option>
                                                <option id="Home_loan" value="Mortgage Loan" value="Mortgage Loan">Mortgage Loan</option>
                                                <option value="Project Loan">Project Loan</option>
                                                <option value="Working Capital">Working Capital</option>
                                                <option value="Overdraft Facility">Overdraft Facility</option>
                                                <option value="Machinary Loan">Machinary Loan</option>
                                                <option value="Business Loan">Business Loan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.5s">
                                        <div class="icon">
                                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/icon-3.1.png" alt="icon-3">
                                            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/icon-3.2.png" alt="icon-3.2">
                                        </div>
                                        <div class="apply-content">
                                            <span class="title">Where do you currently live?</span>
                                            <div class="select_location d-flex align-items-center" id="locationSlectParent">
                                                <select class="w-100 select-new" name="select-location" id="locationSelect">
                                                    <option value="" selected="">Select City</option>
                                                    
                                                </select>
                                                <!--<span class="close" id="readOnlyClose">-->
                                                <!--    <i class="icon_close"></i>-->
                                                <!--</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-15 d-flex wow fadeInLeft">
                                    <div class="icon">
                                        <img class="img=fluid" src="<?php echo e(config('app.baseURL')); ?>/assets/img/steps/sheild.png" alt="sheild">
                                    </div>
                                    <p class="security-info d-inline-block ms-2">
                                        Your information is 100% secure. We do not share your info with other
                                        parties.
                                    </p>
                                </div>

                                <div class="col-12 text-center mt-35">
                                    <button class="theme-btn theme-btn-lg wow fadeInUp" type="submit">
                                        Apply now <i class="arrow_right"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Apply Loan end -->
        
        <section class="p-0  row no-gutters bg-white" id="HomeLoanCalculator" style="padding-top: 51px !important;">
            <div class="container">
                       <div class="row ">
                    <div class="col-lg-6 mx-auto">
                        <div class="section-title">
                            <h2 class="wow fadeInUp">Calculator</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Get an approximate figure for the total
                                monthly instalment payments along with a complete
                                break-up of the home loan.</p>
                        </div>
                    </div>
                </div>
                  <div class="row">
  <div class="col-lg-6 col-xl-6 formemi" style="padding: 1.5rem;" >
    <div class="min-vh-30 h-100 w-100">
      <div class="map-marker">
        <div class="info-window" data-max-width="400">

   
         
        
               <div class="row calc">
                <div class="card card-body bg_disable text-left text-dark" style="padding: 1.50rem;">
                 <form method="post" action="<?php echo e(config('app.baseURL')); ?>/loans/loan-enquiry/3" enctype='multipart/form-data'>
                   <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">



                  <label for="LoanRange" class="finance-details">Loan Amount</label>
                  <div class="row finance-details">
                    <div class="col-lg-9 form-group">
                      <input type="range" class="custom-range" min="1000000" step="1000" value="1000000" max="500000000" id="LoanRange"><span class="labels">10 L</span><span class="labels" style="float: right;">50 Cr</span></div> <div class="col-lg-3 form-group"><input type="number" name="loan_amount" min="0" max="500000000" onkeypress="return validateFloatKeyPress(this,event);" class="loan-amount form-control range-slider-form"></div>
                    </div>


                    <label for="InterestRange" class="finance-details">Interest Rate (p.a)</label>
                    <div class="row finance-details">
                      <div class="col-lg-9 form-group">
                        <input type="range" class="custom-range" min="1" step="0.1" value="9" max="20" id="InterestRange"><span class="labels">1%</span><span class="labels" style="float: right;">20%</span></div> <div class="col-lg-3 form-group"><input type="text" name="interest_rate" onkeypress="return validateFloatKeyPress(this,event);" class="interest_rate form-control range-slider-form"></div>
                      </div>

                      <label for="customRange" class="finance-details">Loan Term</label>
                      <div class="row finance-details">
                        <div class="col-lg-9 form-group">
                          <input type="range" class="custom-range" min="1" step="1" value="5" max="30" id="customRange"><span class="labels">1 Year</span><span class="labels" style="float: right;">30 Year</span></div> <div class="col-lg-3 form-group"><input type="text" name="loan_term" class="investment form-control range-slider-form" readonly=""></div>
                        </div>

                        <div class="col-lg-12  finance-details">
                          <p class="lead">Loan Amount <span class="value_loan_amount"><b>&#x20B9; 2.00 Cr</b></span></p>
                          <p class="lead">Monthly EMI <span class="value_of_emi"><b>&#x20B9; 2.00 Cr</b></span></p>
                          <input type="hidden" name="monthly_emi" class="monthly_emi" value="">

                           <a href="<?php echo e(config('app.baseURL')); ?>/apply-now" class="theme-btn theme-btn-lg mt-40">Apply Now
                                            <i class="arrow_right"></i></a>
                          
                        </div>

                       
                      </form>
                    </div>
                  </div>
             
        

          </div>
        </div>
      </div>

    </div>



    <div class="col-lg-6 col-xl-6 emicalc" style="padding-bottom: 60px;">
   
       
          <div class="card-content">
            <div class="card-body pl-0">
              <div class="height-600" id="graph-container">
                <canvas id="simple-pie-chart"></canvas>
              </div>


            </div>
          </div>
        



    </div>
</div>
</div>
  </section>

        <!-- Emi Calculator start -->
        <!--<section class="pt-125 pb-140 bg_white" id="emi-calculator">-->
        <!--    <div class="container">-->
        <!--        <div class="row ">-->
        <!--            <div class="col-lg-6 mx-auto">-->
        <!--                <div class="section-title">-->
        <!--                    <h2 class="wow fadeInUp">Calculator</h2>-->
        <!--                    <p class="wow fadeInUp" data-wow-delay="0.3s">Get an approximate figure for the total-->
        <!--                        monthly instalment payments along with a complete-->
        <!--                        break-up of the home loan.</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="calculator-widget mt-50">-->
        <!--            <div class="row  gy-lg-0 gy-3">-->
        <!--                <div class="col-lg-7">-->
        <!--                    <div class="single-calculator-widget wow fadeInUp" data-wow-delay="0.1s">-->
        <!--                        <div class="single-range">-->
        <!--                            <div class="range-header d-flex justify-content-between align-items-center mb-25">-->
        <!--                                <h6>Loan Amount</h6>-->

        <!--                                <input type="text" id="loan" oninput="test5.value = loan.value" onchange="CalculateAmount()" value="5000">-->
        <!--                            </div>-->
        <!--                            <div id="RangeSlider">-->
        <!--                                <div id="RangeSlider" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">-->
        <!--                                    <div class="noUi-base">-->
        <!--                                        <div class="noUi-connects">-->
        <!--                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.241379, 1);"></div>-->
        <!--                                        </div>-->
        <!--                                        <div class="noUi-origin" style="transform: translate(-758.621%, 0px); z-index: 4;">-->
        <!--                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="5000.0" aria-valuemax="150000.0" aria-valuenow="40000.0" aria-valuetext="₹ 40,000">-->
        <!--                                                <div class="noUi-touch-area"></div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="noUi-pips noUi-pips-horizontal">-->
        <!--                                        <input type="range" id="test5" min="5000" max="150000" oninput="loan.value = test5.value" value="5000" onchange="CalculateAmount()"/>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="5000" style="left: 0%; cursor: pointer; margin-left: 8px;">₹5k</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 14.77%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="24999.999999999996" style="left: 14.77%; cursor: pointer;">₹25k</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 31.50%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="50000" style="left: 31.50%; cursor: pointer;">₹50k</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 48.30%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="75000" style="left: 48.30%; cursor: pointer;">₹75k</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 65.20%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="100000" style="left: 65.20%; cursor: pointer;">₹100k</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 82.13%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="125000" style="left: 82.13%; cursor: pointer;">₹125k</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 99.99%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="150000" style="left: 99.99%; cursor: pointer; margin-left: -15px;">₹150k</div>-->
                                        
        <!--                                </div>-->
        <!--                                </div>                                      -->
        <!--                              <div class="row">-->
        <!--                                <div class="col s10 offset-s1">-->
        <!--                                  <div id="slider"></div>-->
        <!--                                </div>-->
        <!--                              </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="single-range mt-30 mb-30">-->
        <!--                            <div class="range-header d-flex flex-wrap justify-content-between align-items-center mb-25">-->
        <!--                                <h6>Loan Duration</h6>-->


        <!--                                <ul class="nav nav-tabs" id="myTab" role="tablist">-->
        <!--                                    <li><span class="active_bar"></span></li>-->
        <!--                                    <li class="nav-item" role="presentation">-->
        <!--                                        <a class="nav-link active month-tab" id="monthTab" data-bs-toggle="tab" href="#monthTabId" role="tab" aria-controls="monthTabId" aria-selected="true">Month</a>-->
        <!--                                    </li>-->
        <!--                                    <li class="nav-item" role="presentation">-->
        <!--                                        <a class="nav-link year-tab" id="yearTab" data-bs-toggle="tab" href="#yearTabId" role="tab" aria-controls="yearTabId" aria-selected="false">Year</a>-->
        <!--                                    </li>-->

        <!--                                </ul>-->

        <!--                                <input type="text" id="month" name="month" onkeyup="duration();" onchange="CalculateAmount()" value="12">-->
        <!--                            </div>-->


        <!--                            <div class="tab-content">-->
        <!--                                <div class="tab-pane fade show active" id="monthTabId" role="tabpanel" aria-labelledby="monthTab">-->

        <!--                                    <div id="MonthRangeSlider">-->
        <!--                                        <div class="single-range">-->

        <!--                                <div id="RangeSlider" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">-->
                                                

        <!--                                    <div class="noUi-base">-->
        <!--                                        <div class="noUi-connects">-->
        <!--                                            <div class="noUi-connect"></div>-->
        <!--                                        </div>-->
        <!--                                        <div class="noUi-origin" style="transform: translate(-758.621%, 0px); z-index: 4;">-->
        <!--                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="5000.0" aria-valuemax="150000.0" aria-valuenow="40000.0" aria-valuetext="$ 40,000">-->
        <!--                                                <div class="noUi-touch-area"></div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="noUi-pips noUi-pips-horizontal">-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="12" style="left: 0%; cursor: pointer; margin-left: 8px;">12</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 17.50%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="18" style="left: 17.50%; cursor: pointer;">18</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 33.50%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="24" style="left: 33.50%; cursor: pointer;">24</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 49.90%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="30" style="left: 49.90%; cursor: pointer;">30</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 66.10%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="36" style="left: 66.10%; cursor: pointer;">36</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 82.30%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="42" style="left: 82.30%; cursor: pointer;">42</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 99.99%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="48" style="left: 99.99%; cursor: pointer; margin-left: -4px;">48</div>-->

        <!--                                         <input type="range" id="test6" min="12" max="48" oninput="month.value = test6.value" value="12" onchange="CalculateAmount()"/>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
                                        <!-- <output id="month" name="month"><span></span></output> -->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="tab-pane fade" id="yearTabId" role="tabpanel" aria-labelledby="yearTab">-->

        <!--                                    <div id="YearRangeSlider">-->
        <!--                                        <div class="tab-pane fade show active" id="monthTabId" role="tabpanel" aria-labelledby="monthTab">-->

        <!--                                    <div id="MonthRangeSlider">-->
        <!--                                        <div class="single-range">-->

        <!--                                <div id="RangeSlider" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">-->
                                                

        <!--                                    <div class="noUi-base">-->
        <!--                                        <div class="noUi-connects">-->
        <!--                                            <div class="noUi-connect"></div>-->
        <!--                                        </div>-->
        <!--                                        <div class="noUi-origin" style="transform: translate(-758.621%, 0px); z-index: 4;">-->
        <!--                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="5000.0" aria-valuemax="150000.0" aria-valuenow="40000.0" aria-valuetext="$ 40,000">-->
        <!--                                                <div class="noUi-touch-area"></div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="noUi-pips noUi-pips-horizontal">-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="12" style="left: 0%; cursor: pointer; margin-left: 8px;">2</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 17.50%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="18" style="left: 17.50%; cursor: pointer;">3</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 33.50%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="24" style="left: 33.50%; cursor: pointer;">4</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 49.90%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="30" style="left: 49.90%; cursor: pointer;">5</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 66.10%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="36" style="left: 66.10%; cursor: pointer;">6</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 82.30%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="42" style="left: 82.30%; cursor: pointer;">7</div>-->
        <!--                                        <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 99.99%;"></div>-->
        <!--                                        <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="48" style="left: 99.99%; cursor: pointer; margin-left: -4px;">8</div>-->

        <!--                                         <input type="range" id="test7" min="2" max="8" oninput="month.value = test7.value" value="2" onchange="CalculateAmount()"/>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
                                        <!-- <output id="year" name="year"><span></span></output> -->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->

        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        <div class="bg_disable px-4 py-2 mb-5 interestBox">-->
        <!--                            <p>Rate of Interest</p>-->
        <!--                            <span id="InterestAmount"></span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--                <div class="col-lg-5 pl-lg-35">-->
        <!--                    <div class="calculator-result-widget bg_disable wow fadeInUp" data-wow-delay="0.3s">-->

        <!--                        <div class="row align-items-center">-->
        <!--                            <div class="col-lg-7 col-md-8 col-sm-7">-->
        <!--                                <div class="emi-amount">-->
        <!--                                    <h6>EMI Amount</h6>-->
        <!--                                    <span>Principal + Interest</span>-->
        <!--                                    <p class="mt-10" id="TotalAmount">₹ 5,362*</p>-->
        <!--                                </div>-->
        <!--                                <div class="interest-payable mt-20">-->
        <!--                                    <h6>Interest Payable</h6>-->
        <!--                                    <p class="mt-10" id="InterestPayable">₹ 362*</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="col-lg-5 col-md-4 col-sm-5 col-7 mx-auto">-->
        <!--                                    <svg class="radial-progress" id="LoanGraph" viewBox="0 0 80 80">-->
        <!--                                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>-->
        <!--                                    <circle class="complete" cx="40" cy="40" r="30" style="stroke-dashoffset: 176.246px; opacity: 1;"></circle>-->
        <!--                                </svg>-->
                                            
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="row mt-lg-60 mt-25 text-center">-->
        <!--                            <div class="col-12">-->
        <!--                                <h4 class="mb-1">Your EMI Amount</h4>-->
        <!--                                <h1 class="m-0" id="emiAmount">₹ 447*</h1>-->

        <!--                                <a href="<?php echo e(config('app.baseURL')); ?>/apply-now" class="theme-btn theme-btn-lg mt-40">Apply Now-->
        <!--                                    <i class="arrow_right"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!-- Emi Calculator end -->

        <!-- Testimonial start -->
        <!--<section class="pt-140 pb-140 testimonial-area bg_disable">-->
        <!--    <div class="container-fluid px-0">-->
        <!--        <div class="testimonial-slider">-->
        <!--            <div class="single-slider container px-0">-->
        <!--                <div class="testimonial-widget">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-4">-->
        <!--                            <div class="author-img">-->
        <!--                                <img src="http://jfinserv.com/assets/img/testimonial/img-2.png" alt="image">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-8 d-flex align-items-center">-->
        <!--                            <div class="testimonial-content">-->
        <!--                                <div class="watch-button">-->
        <!--                                    <a data-fancybox="" href="../../watch.html?v=xcJtL7QggTI">-->
        <!--                                        <i class="fa fa-play"></i>-->
        <!--                                        watch the video-->
        <!--                                    </a>-->
        <!--                                </div>-->
        <!--                                <h2>Making dreams a reality!</h2>-->
        <!--                                <p class="pr-lg-60">We were looking for a home of happiness and peace. Thanks to-->
        <!--                                    the-->
        <!--                                    Grihashakti-->
        <!--                                    team, who helped us to realise this dream of ours. Our home has been-->
        <!--                                    very-->
        <!--                                    lucky for us – as we shifted to our new home, prosperity followed!-->
        <!--                                </p>-->
        <!--                                <div class="author-info">-->
        <!--                                    <h4>Maxwell Wood</h4>-->
        <!--                                    <span>New York, US</span>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="single-slider container px-0">-->
        <!--                <div class="testimonial-widget">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-4">-->
        <!--                            <div class="author-img">-->
        <!--                                <img src="http://jfinserv.com/assets/img/testimonial/img-1.png" alt="image">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-8 d-flex align-items-center">-->
        <!--                            <div class="testimonial-content">-->
        <!--                                <div class="watch-button">-->
        <!--                                    <a data-fancybox="" href="../../watch.html?v=xcJtL7QggTI">-->
        <!--                                        <i class="fa fa-play"></i>-->
        <!--                                        watch the video-->
        <!--                                    </a>-->
        <!--                                </div>-->
        <!--                                <h2>Making dreams a reality!</h2>-->
        <!--                                <p class="pr-lg-60">We were looking for a home of happiness and peace. Thanks to-->
        <!--                                    the-->
        <!--                                    Grihashakti-->
        <!--                                    team, who helped us to realise this dream of ours. Our home has been-->
        <!--                                    very-->
        <!--                                    lucky for us – as we shifted to our new home, prosperity followed!-->
        <!--                                </p>-->
        <!--                                <div class="author-info">-->
        <!--                                    <h4>Maxwell Wood</h4>-->
        <!--                                    <span>New York, US</span>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="single-slider container px-0">-->
        <!--                <div class="testimonial-widget">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-4">-->
        <!--                            <div class="author-img">-->
        <!--                                <img src="http://jfinserv.com/assets/img/testimonial/img-2.png" alt="image">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-8 d-flex align-items-center">-->
        <!--                            <div class="testimonial-content">-->
        <!--                                <div class="watch-button">-->
        <!--                                    <a data-fancybox="" href="../../watch.html?v=xcJtL7QggTI">-->
        <!--                                        <i class="fa fa-play"></i>-->
        <!--                                        watch the video-->
        <!--                                    </a>-->
        <!--                                </div>-->
        <!--                                <h2>Making dreams a reality!</h2>-->
        <!--                                <p class="pr-lg-60">We were looking for a home of happiness and peace. Thanks to-->
        <!--                                    the-->
        <!--                                    Grihashakti-->
        <!--                                    team, who helped us to realise this dream of ours. Our home has been-->
        <!--                                    very-->
        <!--                                    lucky for us – as we shifted to our new home, prosperity followed!-->
        <!--                                </p>-->
        <!--                                <div class="author-info">-->
        <!--                                    <h4>Maxwell Wood</h4>-->
        <!--                                    <span>New York, US</span>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="single-slider container px-0">-->
        <!--                <div class="testimonial-widget">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-4">-->
        <!--                            <div class="author-img">-->
        <!--                                <img src="http://jfinserv.com/assets/img/testimonial/img-1.png" alt="image">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-8 d-flex align-items-center">-->
        <!--                            <div class="testimonial-content">-->
        <!--                                <div class="watch-button">-->
        <!--                                    <a data-fancybox="" href="../../watch.html?v=xcJtL7QggTI">-->
        <!--                                        <i class="fa fa-play"></i>-->
        <!--                                        watch the video-->
        <!--                                    </a>-->
        <!--                                </div>-->
        <!--                                <h2>Making dreams a reality!</h2>-->
        <!--                                <p class="pr-lg-60">We were looking for a home of happiness and peace. Thanks to-->
        <!--                                    the-->
        <!--                                    Grihashakti-->
        <!--                                    team, who helped us to realise this dream of ours. Our home has been-->
        <!--                                    very-->
        <!--                                    lucky for us – as we shifted to our new home, prosperity followed!-->
        <!--                                </p>-->
        <!--                                <div class="author-info">-->
        <!--                                    <h4>Maxwell Wood</h4>-->
        <!--                                    <span>New York, US</span>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!-- Testimonial end -->
        
        
        
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


<script type="text/javascript">
    var allcity=["Delhi", "Pune", "Kolhapur", "Satara", "Pimpri", "Chinchwad", "Nashik", "Mumbai", "Thane", "Ahamednagar", "Sangamner","Chandrapur","Daulatabad","Dhule","Jalgaon","Kalyan","Karli","Mahabaleshwar","Malegaon","Matheran","Nagpur","Nanded","Nashik","Osmanabad","Pandharpur","Parbhani","Ratnagiri","Sangli","Sevagram","Solapur","Ulhasnagar","Vasai-Virar","Wardha","Yavatmal","Manipur"];
    $.each(allcity, function(i, p) {
        $('#locationSelect').append($('<option></option>').val(p).html(p));
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

   // For Slider control
    var slider = document.getElementById('test5');
    noUiSlider.create(slider, {
    start: [5000, 150000],
    connect: true,
   // step: 1,
    range: {
        'min': 5000,
        'max': 150000
    },
    format: wNumb({
        decimals: 0
    })
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    var slider = document.getElementById('test6');
    noUiSlider.create(slider, {
    start: [12, 48],
    connect: true,
    step: 1,
    range: {
        'min': 12,
        'max': 48
    },
    format: wNumb({
        decimals: 0
    })
    });
})

</script>
<script type="text/javascript">
    $(document).ready(function() {
    var slider = document.getElementById('test7');
    noUiSlider.create(slider, {
    start: [2, 8],
    connect: true,
    step: 2,
    range: {
        'min': 2,
        'max': 8
    },
    format: wNumb({
        decimals: 0
    })
    });
})
</script>

<script type="text/javascript">
    function duration(){
        var duration=document.getElementById('monthTab').className;
        if(duration="nav-link month-tab active monthTab"){
            var dmonth=document.getElementById('month').value;
            document.getElementById('test6').value=dmonth;
        }
        if(duration="nav-link month-tab"){
            var dyear=document.getElementById('month').value;
            document.getElementById('test7').value=dyear;
        }
    }
</script>
<script type="text/javascript">
    function CalculateAmount(){
  var period=document.getElementById('month').value;
  var amount=document.getElementById('loan').value;
  
  if (period!="") {
      var LoanTime = period;
      switch (true) {
        case LoanTime >= 48:
          RateOfInterestTime = 2.4;
          break;
        case LoanTime >= 42:
          RateOfInterestTime = 2.55;
          break;
        case LoanTime >= 32:
          RateOfInterestTime = 2.7;
          break;
        case LoanTime >= 25:
          RateOfInterestTime = 2.9;
          break;
        case LoanTime >= 20:
          RateOfInterestTime = 3;
          break;
        case LoanTime >= 12:
          RateOfInterestTime = 3.15;
          break;
        case LoanTime >= 8:
          RateOfInterestTime = 2;
          break;
        case LoanTime >= 7:
          RateOfInterestTime = 2.2;
          break;
        case LoanTime >= 6:
          RateOfInterestTime = 2.3;
          break;
        case LoanTime >= 5:
          RateOfInterestTime = 2.5;
          break;
        case LoanTime >= 4:
          RateOfInterestTime = 2.7;
          break;
        case LoanTime >= 3:
          RateOfInterestTime = 2.9;
          break;
        case LoanTime >= 2:
          RateOfInterestTime = 3.1;
          break;
        default:
          RateOfInterestTime = 0;
      }
      }
    if (amount!="") {
      var LoanAmount = amount;
      switch (true) {
        case LoanAmount >= 13e4:
          RateOfInterestAmount = 2.9;
          break;
        case LoanAmount >= 115e3:
          RateOfInterestAmount = 3.1;
          break;
        case LoanAmount >= 1e5:
          RateOfInterestAmount = 3.3;
          break;
        case LoanAmount >= 8e4:
          RateOfInterestAmount = 3.5;
          break;
        case LoanAmount >= 65e3:
          RateOfInterestAmount = 3.7;
          break;
        case LoanAmount >= 5e4:
          RateOfInterestAmount = 3.8;
          break;
        case LoanAmount >= 25e3:
          RateOfInterestAmount = 3.95;
          break;
        case LoanAmount >= 1e4:
          RateOfInterestAmount = 4;
          break;
        default:
          RateOfInterestAmount = 4.09;
      }
    }  
      
    var TotalRateOfInterest = (RateOfInterestAmount + RateOfInterestTime);
    document.getElementById('InterestAmount').innerHTML=parseFloat(TotalRateOfInterest).toFixed(2)+" %";
    var TotalInterest = amount * (TotalRateOfInterest)/100;
    var tinterest=Math.round(TotalInterest);
    var totali=tinterest.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var TI="₹ "+totali+ "*";
    document.getElementById('InterestPayable').innerHTML=TI;
    var InterestAndPrincipal = Number(TotalInterest) + Number(amount);
    var interest=Math.round(InterestAndPrincipal);
    var principal=interest.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var IP="₹ "+principal+"*";
    document.getElementById('TotalAmount').innerHTML=IP;
    var emiAmount=InterestAndPrincipal / period;
    var emi=Math.round(emiAmount);
    var EA="₹ "+emi.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"*";
    document.getElementById('emiAmount').innerHTML=EA;

    var percent, graphRadius, circumference, strokeDashOffset;
    var GraphEl = $("#LoanGraph");
    percent = (100 * TotalInterest) / InterestAndPrincipal;
    graphRadius = GraphEl.find($("circle.complete")).attr("r");
    circumference = 2 * Math.PI * graphRadius;
    strokeDashOffset = circumference - (percent * circumference) / 100;
    GraphEl.find($("circle.complete"))
      .css({ "stroke-dashoffset": "0", opacity: "0.1" })
      .animate({ "stroke-dashoffset": strokeDashOffset, opacity: "1" }, 1250);


}



</script>

<script type="text/javascript">
$(document).ready(function(){

      $('#loans').addClass('active-header');
      $(".continue-button").click(function(){

        $('.finance-details').addClass('hidden');
        $('.user-details').removeClass('hidden');
        $('.header-details').removeClass('hidden');
        $('.terms-condition').removeClass('hidden');
        $('.recalculate-button').removeClass('hidden');
        $('.submit-button').removeClass('hidden');
        $('.continue-button').addClass('hidden');


      });

      $(".recalculate-button").click(function(){

        $('.finance-details').removeClass('hidden');
        $('.user-details').addClass('hidden');
        $('.header-details').addClass('hidden');
        $('.terms-condition').addClass('hidden');
        $('.recalculate-button').addClass('hidden');
        $('.submit-button').addClass('hidden');
        $('.continue-button').removeClass('hidden');

      });



      $(".investment").val($("#customRange").val());

        // Read value on change
        $("#customRange").on("mousemove touchmove", function(e){

          $(".investment").val($(this).val());
        });


        $(".loan-amount").val($("#LoanRange").val());

        // Read value on change
        $("#LoanRange").on("mousemove touchmove", function(e){

          var annual=$(this).val();

          // var number_annual=parseInt(annual).toLocaleString(); 


          $(".loan-amount").val(annual);
        });

        $(".loan-amount").keyup(function() {

          var annual=$(this).val();



          if (annual>500000000) {
            $.notify("Amount Should be less than 5 Cr");
            return false;
          }
          if (annual<1000000) {
            // $.notify("Amount Should be greater than 1 Lac");
            return false;
          }
          if (annual=="") {
            var annual=0;
            $.notify("Please Enter Loan Amount");
            return false;
          }
          if (annual==500000000) {
            var percentage= 100*(parseFloat(annual)-1000000)/(500000000-100000);
          }else{
           var percentage= 100*(parseFloat(annual)-1000000)/(500000000-100000)+0.5;
         }



         $("#LoanRange").css('background','linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)')


         $("#LoanRange").val(annual);

         /*Home Loan Calculation*/

         var interest_rate=$("#InterestRange").val();
         var loan_amount=$(this).val();
         var number_of_years= $("#customRange").val();


         var number_of_payments=parseFloat(number_of_years)*12;

         value_loan_amount=parseFloat(loan_amount);



         var interest = parseFloat(interest_rate) / 100 / 12;


         var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

         var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
         var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
         function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }else if (val >= 1000) {
            val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
          }
          return val;
        }
        new_value_of_emi=numDifferentiation(value_of_emi);

        new_total_payable_amount=numDifferentiation(total_payable_amount);

        new_total_interest_paid=numDifferentiation(total_interest_paid);

        new_value_loan_amount=numDifferentiation(value_loan_amount);

        $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

        $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
        $(".monthly_emi").val(new_value_of_emi);
        
        $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
        $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

        $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

        function newnumDifferentiation(value) {
          var val = Math.abs(value)

          val = (val).toFixed(2);

          return val;
        }

        var graph_value=[];

        var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
        var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


        graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

        /*End Calculation*/
        showchart(graph_value);



      });
      
      
      $(".interest_rate").keyup(function() {

          var interest_rate=$(this).val();



          if (interest_rate>20) {
            $.notify("Interest Rate Should be less than 20");
            return false;
          }
          if (interest_rate<1) {
            // $.notify("Amount Should be greater than 1 Lac");
            return false;
          }
          if (interest_rate=="") {
            var interest_rate=0;
            $.notify("Please Enter Interest Rate");
            return false;
          }
         
           if (interest_rate==20) {
            var percentage= 100*(parseFloat(interest_rate)-1)/(20-1);
          }else{
           var percentage= 100*(parseFloat(interest_rate)-1)/(20-1)+0.5;
         }


         $("#InterestRange").css('background','linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)')


         $("#InterestRange").val(interest_rate);

         /*Home Loan Calculation*/

         var loan_amount=$("#LoanRange").val();
         var interest_rate=$(this).val();
         
         var number_of_years= $("#customRange").val();


         var number_of_payments=parseFloat(number_of_years)*12;

         value_loan_amount=parseFloat(loan_amount);



         var interest = parseFloat(interest_rate) / 100 / 12;


         var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

         var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
         var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
         function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }else if (val >= 1000) {
            val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
          }
          return val;
        }
        new_value_of_emi=numDifferentiation(value_of_emi);

        new_total_payable_amount=numDifferentiation(total_payable_amount);

        new_total_interest_paid=numDifferentiation(total_interest_paid);

        new_value_loan_amount=numDifferentiation(value_loan_amount);

        $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

        $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
        $(".monthly_emi").val(new_value_of_emi);
        
        $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
        $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

        $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

        function newnumDifferentiation(value) {
          var val = Math.abs(value)

          val = (val).toFixed(2);

          return val;
        }

        var graph_value=[];

        var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
        var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


        graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

        /*End Calculation*/
        showchart(graph_value);



      });




        $(".interest_rate").val($("#InterestRange").val());

        // Read value on change
        $("#InterestRange").on("mousemove touchmove", function(e){

         var interest_rate=$(this).val();

         var number_interest_rate=parseInt(interest_rate).toLocaleString(); 

         $(".interest_rate").val(number_interest_rate);
       });

        /*Home Loan Calculation*/

        var interest_rate=$("#InterestRange").val();
        var loan_amount=$("#LoanRange").val();
        var number_of_years= $("#customRange").val();


        var number_of_payments=parseFloat(number_of_years)*12;

        value_loan_amount=parseFloat(loan_amount);



        var interest = parseFloat(interest_rate) / 100 / 12;


        var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

        var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
        var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
        function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }else if (val >= 1000) {
            val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
          }
          return val;
        }
        new_value_of_emi=numDifferentiation(value_of_emi);

        new_total_payable_amount=numDifferentiation(total_payable_amount);

        new_total_interest_paid=numDifferentiation(total_interest_paid);

        new_value_loan_amount=numDifferentiation(value_loan_amount);

        $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

        $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
        $(".monthly_emi").val(new_value_of_emi);

        $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
        $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

        $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

        function newnumDifferentiation(value) {
          var val = Math.abs(value)

          val = (val).toFixed(2);

          return val;
        }

        var graph_value=[];

        var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
        var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


        graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

        /*End Calculation*/
        showchart(graph_value);


      });   



function myFunc(total, num) {
  return parseFloat(total) + parseFloat(num);
}

function showchart(graph_value){
 
  var value_range_new=graph_value;

  var total_sum=value_range_new.reduce(myFunc);

$('#simple-pie-chart').remove(); 
  $('#graph-container').append('<canvas id="simple-pie-chart"><canvas>');
  canvas = document.querySelector('#simple-pie-chart');

  var a = ["#a924fa", "#0050b2"],
  o = ($("#simple-pie-chart")),
  i = (new Chart(o, {
    type: "pie",
    options: {
      responsive: !0,
      maintainAspectRatio: !1,
      responsiveAnimationDuration: 500,
      title: {
        display: !0,
        text: "Breakup Of Total Payment"
      },
      plugins: {
        datalabels: {
          formatter: (value, o) => {

            let sum = total_sum;
            let percentage = (value * 100 / sum).toFixed(2) + "%";
            return percentage;


          },
          color: '#fff',
        },
      }
    },
    data: {
      labels: ["Principal Loan Amount", "Total Interest Payment"],
      datasets: [{
        label: "My First dataset",
        data: value_range_new,
        backgroundColor: a
      }]
    }
  }));

}



document.getElementById("customRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*SIP Calculation*/

  var interest_rate=$("#InterestRange").val();
  var loan_amount=$("#LoanRange").val();
  var number_of_years= this.value;

  var number_of_payments=parseFloat(number_of_years)*12;

  value_loan_amount=parseFloat(loan_amount);



  var interest = parseFloat(interest_rate) / 100 / 12;


  var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

  var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
  var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }else if (val >= 1000) {
      val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
    }
    return val;
  }
  new_value_of_emi=numDifferentiation(value_of_emi);

  new_total_payable_amount=numDifferentiation(total_payable_amount);

  new_total_interest_paid=numDifferentiation(total_interest_paid);

  new_value_loan_amount=numDifferentiation(value_loan_amount);

  $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

  $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
  $(".monthly_emi").val(new_value_of_emi);

  $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
  $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

  $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
  var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


  graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

  /*End Calculation*/
  showchart(graph_value);




  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("LoanRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*Loan Calculation*/

  var interest_rate=$("#InterestRange").val();
  var loan_amount=this.value;
  var number_of_years= $("#customRange").val();


  var number_of_payments=parseFloat(number_of_years)*12;

  value_loan_amount=parseFloat(loan_amount);



  var interest = parseFloat(interest_rate) / 100 / 12;


  var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

  var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
  var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }else if (val >= 1000) {
      val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
    }
    return val;
  }
  new_value_of_emi=numDifferentiation(value_of_emi);

  new_total_payable_amount=numDifferentiation(total_payable_amount);

  new_total_interest_paid=numDifferentiation(total_interest_paid);

  new_value_loan_amount=numDifferentiation(value_loan_amount);

  $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

  $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
  $(".monthly_emi").val(new_value_of_emi);

  $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
  $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

  $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
  var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


  graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

  /*End Calculation*/
  showchart(graph_value);


  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("InterestRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*Home Loan Calculation*/

  var interest_rate=this.value;
  var number_of_years= $("#customRange").val();
  var loan_amount=$("#LoanRange").val();

  var number_of_payments=parseFloat(number_of_years)*12;

  value_loan_amount=parseFloat(loan_amount);



  var interest = parseFloat(interest_rate) / 100 / 12;


  var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

  var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
  var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }else if (val >= 1000) {
      val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )';
    }
    return val;
  }
  new_value_of_emi=numDifferentiation(value_of_emi);

  new_total_payable_amount=numDifferentiation(total_payable_amount);

  new_total_interest_paid=numDifferentiation(total_interest_paid);

  new_value_loan_amount=numDifferentiation(value_loan_amount);

  $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

  $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
  $(".monthly_emi").val(new_value_of_emi);

  $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
  $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

  $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
  var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


  graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

  /*End Calculation*/
  showchart(graph_value);


  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

function validateFloatKeyPress(el, evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode;

  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }

  if (charCode == 46 && el.value.indexOf(".") !== -1) {
    return false;
  }

  if (charCode == 32){
    return false;
  }

  

  return true;
}

</script> 
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/loan/home-loan.blade.php ENDPATH**/ ?>