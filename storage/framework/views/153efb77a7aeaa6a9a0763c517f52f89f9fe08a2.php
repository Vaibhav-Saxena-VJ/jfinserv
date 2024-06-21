

<?php $__env->startSection('content'); ?>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<style type="text/css">
.form-control {
    background: #dddddd59;
}
select{
     background: #dddddd59;
}
.show_hide_password{
    background: #dddddd59;
    border: 1px solid #ced4da !important;
}
.show_hide_password .form-control{
    background: none !important;
    border: none !important;
}

.show_hide_password-new{
    background: #dddddd59;
    border: 1px solid #ced4da !important;
}
.show_hide_password-new .form-control{
    background: none !important;
    border: none !important;
}

.show_hide_password .form-control{
    background: none !important;
    border: none !important;
}
.input-group-addon{
    align-self: center;
}

.form-control-password:focus {
    box-shadow: 0 0 0 0rem rgb(0 123 255 / 25%) !important;
}

.input-group-addon:focus {

    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
}

.text-left-new{
    text-align: left;
    margin-left:18% !important;
    color:#0050b2;
    margin:10px 0px;
}
.icon_box-checked{
    margin-right:6px !important;
    color:#000 !important;
}

.icon-bg-1{
    background-color: #fff!important;
}
  .form-control {

    height: 50px;
}
.bg-light {
    background-color: #fff!important;
}
.header{
  display: none;
}
.footer{
  display: none;
}
.bg-light {
    background-color: #EAF4FF !important;
}
.welcome{
  font-weight: 600 !important;
}
body{
  overflow-x: hidden;
}
.blue-text {
    color: #007AFF;
    text-decoration: underline;
    font-weight: 600;
    cursor: pointer;
}
.text-black{
  color: #000 !important;
  font-weight: 600;
}
.floating-form input {
    border: 0;
    border-bottom: 1px solid #CACED1;
    box-shadow: none;
    border-radius: 0;
    margin-bottom: 25px;
    font-size: 15px;
    height: 35px;
}
.floating-input:not([value=""]):valid ~ label{
    top: -18px;
    font-size: 13px;
    color: #606162;
}
.floating-form label {
    color: #606162;
    font-size: 14px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 5px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}
.footer-checkbox {
    display: inline-block;
    margin-top: 0px;
    margin-left: -10px;
}

.footer-checkbox-right {
    display: inline-block;
    float: right;
}
input.filled-in[type="checkbox"]+label {
    position: relative;
    padding-left: 15px;
    cursor: pointer;
    display: inline-block;
    height: 16px;
    line-height: 25px;
    width: 17px;
    font-size: 1 rem;
    -webkit-user-select: none;
    border: 2px solid #007AFF;
    float: left;
    margin-top: 2px;
    margin-right: 8px;
    min-height: 15px;
    border-radius: 2px;
}
input.filled-in[type="checkbox"] {
    display: none;
}
.footer-checkbox{
  color: #000 !important;
}
.login_leftbox {
        /*background: #e1f5f9;*/
    /*height: calc(100vh - 0px) !important;*/
    padding: 1.5% 3%;
    background-repeat: no-repeat;
    background-size: 100% auto;
    /*width: 50%;*/
}
.service-image{
  width: calc(60vh + 0px) !important;
  /*height: 400px;*/
}
.grc_login_box a {
    color: #007AFF !important;
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.login_options {
    padding: 0;
    text-align: center;
    position: relative;
    /*top: 100px;*/
}
.login_options li {
    display: inline-block;
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 12px;
    line-height: 14px;
    color: #007AFF;
    margin-right: 25px;
}
.icons{
        height: 90px !important;
    }
    @media  only screen and (max-width: 780px) {
  .mobile-view-top {
    display:none;
  }
}

 .carousel-indicators{
        margin-left:10% !important;
        margin-bottom: 6%;
    }
    
    
/*CSS for Mobile View*/
@media  screen and (min-width: 300px) and (max-width: 800px){
  .row {
    --bs-gutter-x: hidden!important;
  }
   .carousel-control-next{
  margin-right: 0px!important;
}
.carousel-control-next, .carousel-control-prev {
  
    width: 7%!important;
   
}
.form-group{
  margin-bottom: 10px;
}
.login_options{
  margin-top: 60px!important;
    margin-right: 0px!important;
    margin-bottom: 56px;
}

}
@media  screen and (min-width: 701px) and (max-width:800px){
.feature-card-widget-2{
   width: 295px!important;
    margin-left: 46px!important;
  }
   .carousel-indicators {
    margin-left: 10% !important;
    margin-bottom: 15%;
}
}
@media  screen and (min-width: 651px) and (max-width: 750px){
.feature-card-widget-2{
    width: 400px!important;
    margin-left: 159px!important;
  }
}
@media  screen and (min-width: 601px) and (max-width: 650px){
.feature-card-widget-2{
    width: 412px!important;
    margin-left: 122px!important;
  }
}
@media  screen and (min-width: 551px) and (max-width: 600px){
.feature-card-widget-2{
    width: 412px!important;
    margin-left: 97px!important;
  }
  .carousel-indicators {
    margin-left: 10% !important;
    margin-bottom: 8%;
}
 
}
@media  screen and (min-width: 501px) and (max-width: 550px){
.feature-card-widget-2{
    width: 400px!important;
    margin-left: 74px!important;
  }
 
}
@media  screen and (min-width: 451px) and (max-width: 500px){
.feature-card-widget-2{
    width: 380px!important;
    margin-left: 53px!important;
  }
  .carousel-indicators {
    margin-left: 10% !important;
    margin-bottom: 8%;
}
 
}
@media  screen and (min-width: 401px) and (max-width: 450px){

.feature-card-widget-2{
    width: 337px!important;
    margin-left: 39px!important;
  }
  .carousel-indicators {
    margin-left: 10% !important;
    margin-bottom: 19%;
}
 
}
@media  screen and (min-width: 351px) and (max-width: 400px){
.feature-card-widget-2{
    width: 290px!important;
    margin-left: 36px!important;
    /*display: block;*/
  }
  .carousel-indicators {
    margin-left: 10% !important;
    margin-bottom: 17%;
}
 
}
@media  screen and (min-width: 300px) and (max-width: 350px){
.feature-card-widget-2{
    width: 250px!important;
    margin-left: 35px!important;
}
.carousel-indicators {
    margin-left: 10% !important;
    margin-bottom: 19%;
}

}

</style>

<section class="row no-gutters p-0 bg-light min-vh-100">
<!--  <div class="col-lg-6"style="background:url(https://jfinserv.com/assets/img/banner/loginimg.png) no-repeat fixed;">
    
  </div> -->
   <div class="login_leftbox col-lg-6 col-md-6 col-sm-12 col-12" style="background:url(<?php echo e(config('app.baseURL')); ?>/assets/img/banner/grc-bg-6b2fea043861dedae0e18db7c192ea80fdee6a660dce540c9919d32480891d14.svg) no-repeat fixed;">
      <!-- <div id="myCarousel" class="carousel slide pointer-event" data-ride="carousel">
        <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
        

       
        <div class="carousel-inner text-center">

          <div class="item">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/banner/loginimg.png" alt="JFinserv" class="service-image">
          </div>
          <div class="item">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/banner/loginimg.png" alt="JFinserv" class="service-image">
          </div>
          <div class="item">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/banner/loginimg.png" alt="JFinserv" class="service-image">
          </div>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
        <ul class="login_options">
          <li><a target="_blank" href="#">Terms of Service</a></li>
          <li><a target="_blank" href="#">Privacy Policy</a></li>
          <li><a target="_blank" href="#">Cookie Policy</a></li>
          <li><a target="_blank" href="#">Refund Policy</a></li>
        </ul>
      </div> -->
      
      <div id="demo" class="carousel slide" data-ride="carousel">
<a class="navbar-brand" href="https://jfinserv.com">
                        <img src="<?php echo e(config('app.baseURL')); ?>/images/logo/logo.png" srcset="<?php echo e(config('app.baseURL')); ?>/images/logo/logo.png" alt="logo" style="width:200px;margin-left:20%;">
                        <!--<h2 style="margin-left: 50px;">JFINSERV</h2>-->
                    </a>
  <!-- Indicators -->
  <ul class="carousel-indicators" >
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.05s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="<?php echo e(asset('images\loginhome.png')); ?>" alt="icon" class="icons">
                            </div>
                            <h5>Home Loan</h5>
                             <ul>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Highest Amount Funding</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Lowest Interest Rate</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Fastest Disbursement Process</li>
                                    
                                </ul>
                            <!--<p style="font-size: 14px; text-align: left;">At JFINSERV, we understand you don’t really want a loan, but a new home or to save money on your repayments. We’re here to help with low rates, great features, and a seamless process to settlement.</p>-->
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.05s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="<?php echo e(asset('images\loginmortgae.png')); ?>" alt="icon" class="icons">
                            </div>
                            <h5>Mortgage Loan</h5>
                             <ul>
                                <li class="text-left-new"><i class="icon_box-checked"></i> Highest Amount Funding</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Lowest Interest Rate</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Fastest Disbursement Process</li>
                                </ul>
                            <!--<p style="font-size: 14px; text-align: left;">JFINSERV brings to you - Mortgage Loan - an innovative combination of a loan and overdraft facility with flexible repayment options against the security of your immovable property. Check out your loan against property eligibility and get exclusive add on benefits and tax benefits.</p>-->
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
        <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.05s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="<?php echo e(asset('images\loginproject.png')); ?>" alt="icon" class="icons">
                            </div>
                            <h5>Project Loan</h5>
                             <ul>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Highest Amount Funding</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Lowest Interest Rate</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Fastest Disbursement Process</li>
                                </ul>
                            <!--<p style="font-size: 14px; text-align: left;">We’ll help take the stress out of financing your building or renovations with our low rates and easy online application. From streamlined packages to fully-featured loans, you’ll find a low rate construction loan that’s perfect for you.</p>-->
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.05s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="<?php echo e(asset('images\loandraft.png')); ?>" alt="icon" class="icons">
                            </div>
                            <h5>Overdraft Facility</h5>
<!--                            <p style="font-size: 14px; text-align: left;">An overdraft facility allows you to withdraw funds from a fixed line of credit as and when you need to. Repayment is also easy and hassle-free, as you can repay what you borrow at your convenience. This makes an overdraft facility one of the most desired credit options. JFinserv offers these features through its unsecured Flexi personal loan.-->

<!--</p>-->
         <li class="text-left-new"><i class="icon_box-checked"></i> Highest Amount Funding</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Lowest Interest Rate</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Fastest Disbursement Process</li>
                                </ul>
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.05s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="<?php echo e(asset('images\loanlease.png')); ?>" alt="icon" class="icons">
                            </div>
                            <h5>Lease Rental Discounting (LDR)</h5>
                             <ul>
                                          <li class="text-left-new"><i class="icon_box-checked"></i> Highest Amount Funding</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Lowest Interest Rate</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Fastest Disbursement Process</li>
                                </ul>
                            <!--<p style="font-size: 14px; text-align: left;">Lease Rental Discounting is a term loan that is offered against rental receipts and is availed by tenants against leased contracts. So, if you want to avail of funding, against your rental receipts, this financing option enables you to do that.</p>-->
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.05s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="<?php echo e(asset('images\logincar.png')); ?>" alt="icon" class="icons">
                            </div>
                            <h5>Car Loan</h5>
<!--                            <p style="font-size: 14px; text-align: left;">Millions of Indians today are upwardly mobile, and on the move. Many are looking at having their own car to reach their destination in time and in comfort. Now, the years of waiting and saving are over. A Car Loan will bring that dream of owning a vehicle within your reach.-->

<!--</p>-->
            <ul>
                                           <li class="text-left-new"><i class="icon_box-checked"></i> Highest Amount Funding</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Lowest Interest Rate</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Fastest Disbursement Process</li>
                                </ul>             
                                
                                <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <div class="carousel-item">
      <div class="feature-card-widget-2 wow fadeInUp" data-wow-delay="0.05s" style="width: 400px; margin-left: 150px; margin-top: 50px; height: 370px;">
                            <div class="icon-bg-1">

                                <img src="<?php echo e(asset('images\loginrefer.png')); ?>" alt="icon" class="icons">
                            </div>
                            <h5>Referal Program</h5>
                             <ul>
                                   <li class="text-left-new"><i class="icon_box-checked"></i> Unlimited Earning Opportunity </li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Referral Program for Individuals & Associates</li>
                                    <li class="text-left-new"><i class="icon_box-checked"></i> Direct Account Transfer</li>
                                </ul>
                            <!--<p style="font-size: 14px; text-align: left;">We’ll help take the stress out of financing your building or renovations with our low rates and easy online application. From streamlined packages to fully-featured loans, you’ll find a low rate construction loan that’s perfect for you.</p>-->
                            <!-- <a href="#" class="theme-btn theme-btn-outlined mt-45">Find Out More</a> -->
                        </div>
                        
    </div>
    <!-- <div class="carousel-item">
      <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/banner/loginimg.png" alt="JFinserv" style="margin-left: 120px">
    </div>
    <div class="carousel-item">
      <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/banner/loginimg.png" alt="JFinserv" style="margin-left: 120px">
    </div> -->
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: 85px;">
    <span class="carousel-control-next-icon"></span>
  </a>


<ul class="login_options" style="margin-top: 90px; margin-right: 30px;">
          <li><a target="_blank" href="https://jfinserv.com/terms-condition">Terms of Services</a></li>
          <li><a target="_blank" href="https://jfinserv.com/privacy-policy">Privacy Policy</a></li>
          <li><a target="_blank" href="https://jfinserv.com/cookie-policy">Cookie Policy</a></li>
        </ul>



</div>
     
    </div> 
    <div class="col-lg-6 col-md-6">
    <section class="p-0 bg-gradient text-white">
      <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-2 py-md-5">
        <a href="index.html" class="fade-page">
          <!-- <img src="<?php echo e(asset('assets\img\logo.png')); ?>" alt="logo"  class="bg-white" width="100"> -->
      </a>
<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
          <div class="card card-body shadow text-left text-dark" style="border-radius: 10px;">
                <!--<span class="text-center" style="color: #0050b2; font-size: 30px;">JFINSERV</span><br>-->
            <h1 class="h2 text-left"><b>Register As Partner</b></h1>
              <div class="card-body">
                <form method="POST" action="<?php echo e(config('app.baseURL')); ?>/newpartnerregister">
                  <?php echo csrf_field(); ?>

                <div class="form-group row">
                            <!-- <label for="name" class="label1 col-md-5 col-form-label text-md-right">Name</label> -->

                  <div class="col-md-12 mb-2">
                    <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Name">

                    <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                      <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                      </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
                </div>

                        <!--<div class="form-group row">-->
                            <!-- <label for="email" class="label1 col-md-5 col-form-label text-md-right">E-Mail Address</label> -->

                        <!--    <div class="col-md-12 mb-2">-->
                        <!--        <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email">-->

                        <!--        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>-->
                        <!--            <span class="invalid-feedback" role="alert">-->
                        <!--                <strong><?php echo e($message); ?></strong>-->
                        <!--            </span>-->
                        <!--        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
              <div class="form-group row">
                            <!-- <label for="email" class="label1 col-md-5 col-form-label text-md-right">E-Mail Address</label> -->

                  <div class="col-md-12 mb-2">
                    <input id="contact_number" type="text" class="form-control <?php if ($errors->has('contact_number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contact_number'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="contact_number" value="<?php echo e(old('contact_number')); ?>" required autocomplete="contact_number" placeholder="Contact Number" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="return isNumberKey(event)">

                    <?php if ($errors->has('contact_number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contact_number'); ?>
                      <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                      </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
                </div>
                                
                 

        <div class="form-group row">
                            <!-- <label for="password" class="label1 col-md-5 col-form-label text-md-right">Password</label> -->

          <div class="col-md-6 mb-2">
            <div class="input-group show_hide_password" id="show_hide_password">
              <input id="password" type="password" class="form-control form-control-password <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password" placeholder="Password">
              <div class="input-group-addon">
                <a href="javascript:void(0);"><i class="fa fa-eye-slash" aria-hidden="true" style="padding-right:10px;"></i></a>
              </div>
              <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
                </span>
              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="input-group show_hide_password-new" id="show_hide_password-new">
              <input id="password-confirm" type="password" class="form-control form-control-password <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
              <div class="input-group-addon">
                <a href="javascript:void(0);"><i class="fa fa-eye-slash" aria-hidden="true" style="padding-right:10px;"></i></a>
              </div>
              <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?>
                <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
                </span>
              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
        </div>
      </div>
                        
                        

      <div style="display: inline-flex;margin-bottom: 10px;">
        <input type="checkbox" required="" checked="" style="margin-top: 8px;margin-right: 5px;"><label style="color: #000;text-align: left;">By clicking Agree & Join, you agree to the <a target="_blank" href="https://jfinserv.com/terms-condition">Terms Of Services</a>, <a target="_blank" href="https://jfinserv.com/privacy-policy">Privacy Policy</a>, and <a target="_blank" href="https://jfinserv.com/cookie-policy">Cookie Policy</a>.</label>
      </div>

      <br>

                        <!-- <div class="form-group row mb-0 mt-1">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div> -->
      <button class="btn btn-primary btn-lg" type="submit" style="width: 100%;"><?php echo e(__('Register')); ?></button>

    </form>
  </div>
  <p style="color:#000;margin-left: 20px;">Already registered as a partner? <a href="<?php echo e(config('app.baseURL')); ?>/login" style="color:blue;"> Login</a></p><br>
</div>
</div>
</div>
</div>
</section>
</div>
</section>
</div>
</section>
<script>
    
    $(document).ready(function() {
    $(".show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
    
        $(".show_hide_password-new a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password-new input').attr("type") == "text"){
            $('#show_hide_password-new input').attr('type', 'password');
            $('#show_hide_password-new i').addClass( "fa-eye-slash" );
            $('#show_hide_password-new i').removeClass( "fa-eye" );
        }else if($('#show_hide_password-new input').attr("type") == "password"){
            $('#show_hide_password-new input').attr('type', 'text');
            $('#show_hide_password-new i').removeClass( "fa-eye-slash" );
            $('#show_hide_password-new i').addClass( "fa-eye" );
        }
    });
    
    
});

</script>
<script type="text/javascript">
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<script>

  <?php if(Session::has('message')): ?>
  var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
  switch(type){
    case 'info':
    toastr.info("<?php echo e(Session::get('message')); ?>");
    break;

    case 'warning':
    toastr.warning("<?php echo e(Session::get('message')); ?>");
    break;
    case 'success':
    toastr.success("<?php echo e(Session::get('message')); ?>");
    break;
    case 'error':
    toastr.error("<?php echo e(Session::get('message')); ?>");
    break;
  }
  <?php endif; ?>

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jfinserv.com/public_html/resources/views/auth/partner-register.blade.php ENDPATH**/ ?>