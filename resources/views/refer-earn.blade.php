@extends('layouts.app')
@section('title', "Refer for loan with low ROI | Financial Consultants in Pune - Jfinserv")
@section('description', "Explore the best Financial Consultants in Pune with refer for secure loans with low ROI. Apply now for the more financial benefits.")
@section('keywords', "Financial Consultants in Pune, Home finance in pune, Refer for loan with low ROI")
@section('content')

<style type="text/css">
  .display-3{
    text-align: left;
  }
  .bg-secondary{
    background-color: #000 !important;
    color: #fff;
  }
  @media (min-width: 576px){
    .p-sm-4 {
      padding: 1.1rem!important;
    }
    .number-font {
      font-size: 1.1rem!important;
    }

  }
  #myImage{
    width: 300px;
  }
  @media (min-width: 767px){
    .modal-dialog {
      max-width: 760px;
      margin: 1.75rem auto;
    }
  }


  @media (min-width: 900px){
    .modal-dialog {
      max-width: 900px !important;
      margin: 1.75rem auto;
    }
  }

  .refer-button{
   background-color: #fff!important;
   border-radius: 5px;
   color: #0050b2!important;
   border-color: #fff!important;
   padding: 8px;
 }
 .bg-refer{
  background-color: #0050b2!important;
}
.bg-success{
  background-color: #0050b2!important;
}
.lead{
  text-align: left;
}
.final-figure{
  color: #077273;
  font-size: 45px;
}
.term-text-justify{
 text-align: justify;
 text-justify: inter-word;
}
.labels{
  font-size: 13px;
}
.card-img-top{
  height: 235px;
  object-fit: cover;
}

@media only screen and (min-width: 800px){
  .header-button{
    margin-right: 15%;
    margin-left: -25%;
    border-radius: 0px !important;
  }
  .refer-button{
    font-size: 30px;
  }
  .referral{
    margin-left: 10%;
  }


}
@media only screen and (max-width: 767px){
  .container{
    overflow: hidden;
  }
}
.term-fluid{

  object-fit: cover;
  object-position: center;
}
.header-details{
  padding: 12px;
  background-color: #0251523d;
  margin-bottom: 10px;
  border-radius: 2px;
}
.hidden{
  display: none;
}
.bg-refferal-back{
  background-color: #DBD7DF !important;
}
.text-left{
  padding-left: 20px;
}
.text-top{
  margin-top: 50px;
}

.text, .d-inline-block{
  color: black !important;
}

.bg-color-1{
  background-color: #dde8f5 !important;
}
.icons{
  width: 90px !important;
  padding-top: 35px;
}

.d-inline-block{
  padding-top: 60px !important;
  font-size: 23px !important;
}
.tag-color{
  margin-top: 70px !important;
  margin-bottom: 60px !important;
}
.tag-botm{
  margin-bottom: 80px !important;
  height: 400px !important;
}
.text-new
{
    font-size: 45px;
    margin-top: 80px;
    margin-bottom: 30px;
}
.text-new1{
  margin-bottom: 80px;
}
.back-color{
  background-color: #fff !important;
}
.block-new{
  font-size: 20px !important;
  color: #0050b2 !important;
}


.form-control {
    
    padding: 0.775rem 0.75rem !important;
  }
  .btn-new{
    
    margin-top: 40px !important;
    margin-bottom: 20px !important;

  }
  .lablel-new{
    margin-top: 25px !important;
  }
  .font-new{
    font-size: 20px !important;
  }
.faq-widget .single-widget-one {
    
    padding: 20px !important;
    }
    .text-new2{
      font-size: 40px !important;
      margin-bottom: 40px !important;
     /* margin-top: 30px !important;*/
    }
    .img-new{
      height: 500px !important;
      width: 100% !important;
      object-fit: cover;

    }
    .dropdown-new{
    padding: 11px;
    width: 352px;
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


@media (min-width: 992px){
.pb-lg-115 {
    padding-bottom: 90px;
}

.pt-200 {
    padding-top: 55px;
}
}
.pt-100{
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
@media screen and (min-width: 300px) and (max-width: 450px){
.short-title{
    font-size: 17px!important;
}
.banner-area-2 .banner-content h1 {
    font-size: 22px;
    line-height: 27px;
}
.banner-area-2{
    height: 376px;
}
.dropdown-new {
    padding: 11px;
     width: 352px; 
}
}
@media screen and (min-width: 451px) and (max-width: 650px){
.short-title{
    font-size: 20px!important;
}
.banner-area-2 .banner-content h1 {
    font-size: 23px;
    line-height: 27px;
}
.banner-area-2{
    height: 420px;
}
  }
</style>

<section class="banner-area-2 pt-100" style="background-image: url(http://jfinserv.com/images/image22.jpg);">
    
            <div class="container">
                <div class="row align-items-center pt-130 pb-140">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-content py-5">
                            <div class="section-title text-start">
                                <span class="short-title wow fadeInUp" style="font-size: 20px; color: #4DA9EA;">JFINSERV Referral Program</span>
                                <h1 class="wow fadeInUp mb-0" data-wow-delay='0.2s' style="color: white;">Invite Friends & Help Them With Their Dream Home.</h1>
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
<!-- <section class="bg-primary-3 text-white bg-refer" style="padding: 3.5rem 0;">

  <div class="container">

    <div class="row">

      <div class="col-md-8 mb-5 mb-lg-0">
        <h3 class="display-5">You <span>can make up to Rs 10,000/-</span> for inviting

        friends & family to Finkompas.</h3>
        <p class="lead">As long as they use your unique referral link, you stand a chance to make some good money.</p>
      </div>
      <div class="col-md-4 mb-5 mb-lg-0">
        <div class="px-xl-4">
         <button class="btn btn-lg btn-primary refer-button" type="button"><b>Upto Rs 10,000</b></button>
       </div>
     </div>
   </div>
 </div>
</section> -->



    <section class="text-white pt-0 bg-color-1" id="refer-friend">
      <div class="transform-flip-x bg-light"></div>
      <div class="container" style="text-align: center !important;">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="font tag-color">Earn Cash Every Time Your Refer a Qualified Applicant</h3>
            <!-- <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0 tag-botm">
            <div class="card h-100 hover-box-shadow">
            <div class="card card-body bg-white h-100">
              <div class="icon"><img class="icons" alt="Digital products " src="{{asset('images\program1.png')}}"></div>
               <div class="text">
                                <h3 class="bottom15">
                                    <span class="d-inline-block">
Unlimited Earnings</span>
                                </h3>
                                <p>There is no limit to how much you can earn by referring our service.

</p>
                            </div>
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0 tag-botm">
            <div class="card h-100 hover-box-shadow">
            <div class="card card-body bg-white h-100">
              <div class="icon"><img class="icons" alt="Websites Design" src="{{asset('images\program2.png')}}"></div>
               <div class="text">
                                <h3 class="bottom15">
                                    <span class="d-inline-block">
Unlimited Rewards</span>
                                </h3>
                                <p>Earn income for each successful referral. We offer performance bonuses to unlock more earning potential.</p>
                            </div>
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0 tag-botm">
            <div class="card h-100 hover-box-shadow">
            <div class="card card-body bg-white h-100">
              <div class="icon"><img class="icons" alt="Enterprise software" src="{{asset('images\program3.png')}}"></div>
               <div class="text">
                                <h3 class="bottom15">
                                    <span class="d-inline-block">Quick Process</span>
                                </h3>
                                <p>Our Referral process is quick and easy to share with friends and colleagues. Share your code in less than a minute.</p>
                            </div>
            </div>
          </div>
          </div>

        </div>
      </div>
    </section>

<section class="bg-light o-hidden">
  <div class="container">
    <div class="row section-title justify-content-center text-center">
      <div class="col-md-9 col-lg-8 col-xl-7">
        <h2 class="display-4 text-top">How It Works</h2>

      </div>
    </div>
    <div class="row align-items-center justify-content-around">
      <div class="col-md-9 col-lg-5" data-aos="fade-in">
        <img src="{{asset('images\refer-earn1.jpg')}}" alt="Image" class="img-fluid rounded shadow">
        <!-- <img src="{{asset('assets\img\rupee.png')}}" alt="Image" class="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top left shadow-lg mt-5 ml-n5 ml-lg-n3 ml-xl-n5 d-none d-md-block" data-jarallax-element="-20 0"> -->
      </div>
      <div class="col-md-9 col-lg-6 col-xl-5 mt-4 mt-md-5 mt-lg-0">
        <ol class="list-unstyled p-0">
          <li class="d-flex align-items-start my-4 my-md-5">
            <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
              <div class="position-absolute text-white h5 mb-0 number-font">1</div>
            </div>
            <div class="ml-3 ml-md-4 text-left">
              <h5>Go to ‘Refer Your Friend’ section</h5>
            </div>
          </li>

          <li class="d-flex align-items-start my-4 my-md-5">
            <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
              <div class="position-absolute text-white h5 mb-0 number-font">2</div>
            </div>
            <div class="ml-3 ml-md-4 text-left">
              <h5>Share your and friend’s basic contact details</h5>

            </div>
          </li>
          <li class="d-flex align-items-start my-4 my-md-5">
            <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
              <div class="position-absolute text-white h5 mb-0 number-font">3</div>
            </div>
            <div class="ml-3 ml-md-4 text-left">
              <h5>Referee applies for the product via a unique link</h5>

            </div>
          </li>
          <li class="d-flex align-items-start my-4 my-md-5">
            <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
              <div class="position-absolute text-white h5 mb-0 number-font">4</div>
            </div>
            <div class="ml-3 ml-md-4 text-left">
              <h5>Friends application for any loans, gets approved</h5>

            </div>
          </li>
          <li class="d-flex align-items-start my-4 my-md-5">
            <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
              <div class="position-absolute text-white h5 mb-0 number-font">5</div>
            </div>
            <div class="ml-3 ml-md-4 text-left">
              <h5>We communicate to you for bank account details</h5>

            </div>
          </li>
          <li class="d-flex align-items-start my-4 my-md-5">
            <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
              <div class="position-absolute text-white h5 mb-0 number-font">6</div>
            </div>
            <div class="ml-3 ml-md-4 text-left">
              <h5>You get your Referral Bonus</h5>

            </div>
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- <section class="back-color">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4 text-new">
Referral Program Earning Tiers</h3>
<p class="text-new1">There are no limits to the number of employees you can refer. The more your refer, the more you earn.</p>
           
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="100">
            <div class="mx-xl-4">
              <img src="{{asset('images\benefits1.png')}}" alt="Kyan logo" class="mb-4 benefits">
             <h3 class="bottom15">
                                    <span class="block-new">Bronze</span>
                                </h3>
             <b> <p>1 to 5 referrals</p></b>
              <p>
                Earn $50 per qualified referral.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="mx-xl-4">
              <img src="{{asset('images\benefits2.png')}}" alt="Atica logo" class="mb-4 benefits">
           
              <h3 class="bottom15">
                                    <span class="block-new">Silver</span>
                                </h3>
             <b> <p>6 to 10 referrals</p></b>
              <p>
                Earn $75 per qualified referral.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="300">
            <div class="mx-xl-4">
              <img src="{{asset('images\benefits3.png')}}" alt="Treva logo" class="mb-4 benefits">
              
              <h3 class="bottom15">
                                    <span class="block-new">Gold</span>
                                </h3>
             <b> <p>11+ referrals</p></b>
              <p>
                Earn $100 per qualified referral.
              </p>
            </div>
          </div>
           
     
         
         

        </div>
      </div>
    </section> -->


<div class="bg-gradient p-0 o-hidden" data-overlay="" id="referFriend">
  <section style="padding: 5.5rem 0;  background-color: #e6f2f0 !important;">
    <div class="container">
      <div class="text-white">
        <div class="row section-title justify-content-center text-center">
          <div class="col-xl-8 col-lg-9 col-md-11">
            <!-- <img src="https://finkompas.com/assets/img/shout.png" class="img-fluid"> -->
            <h1 class="display-3 text-center text-new2">Refer Your Friend </h1>

          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-11">
          <form class="card card-body shadow" id="refer_your_friend_form" data-form-email="" novalidate="" action="{{config('app.baseURL')}}/refer-earn" method="post">
              {{csrf_field()}}
            <div class="form-row row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="referred-by" class="lablel-new">Your Phone</label>
                  <input type="text" name="referred_by" class="form-control" id="referred-by" required="" placeholder="+91" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="return isNumberKey(event)">
                  <div class="invalid-feedback">
                    Please type your number.
                  </div>
                </div>
              </div>       <div class="col-sm-6">
                <div class="form-group">
                  <label for="product-id" class="lablel-new">Select Services</label>
                  <div class="position-relative">
                    <select name="product_id" class="custom-select form-control" id="product-id" required="">
                    <option selected="" value="">Select an option</option>
                    <option value="1">Home Loan</option>
                    <option value="2">Mortgage Loan</option>
                    <option value="3">Project Loan</option>
                    <option value="4">Term Loan</option>
                    <option value="5">Working Capital</option>
                    <option value="6">Overdraft Facility</option>
                    <option value="7">Machinary Loan</option>
                    <option value="8">Business Loan</option>

                    </select>
                    <!-- <img src="https://finkompas.com/assets\img\icons\interface\icon-caret-down.svg" alt="Arrow Down" class="icon icon-sm"> -->
                    <div class="invalid-feedback">
                      Please select a Product.
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
               <div class="form-group">
                <label for="friend-name" class="lablel-new">Friend Name</label>
                <input type="text" name="name" class="form-control" id="friend-name" required="" placeholder="Friend Name">
                <div class="invalid-feedback">
                  Please type friend name.
                </div>
              </div>

            </div>
            <div class="col-sm-6">
             <div class="form-group">
              <label for="friend-email" class="lablel-new">Friend Email Address</label>
              <input type="email" name="email" class="form-control" id="friend-email" placeholder="friend@xyz.com" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please Provide Valid Email Address">
              <div class="invalid-feedback">
                Please provide friend email address.
              </div>
            </div>
          </div>
        </div>
        <div class="form-row row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="friend-phone" class="lablel-new">Friend Phone</label>
              <input type="tel" name="phone" class="form-control" id="friend-phone" required="" placeholder="+91" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="return isNumberKey(event)">
              <div class="invalid-feedback">
                Please provide friend phone number.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
              <label for="friend-email" class="lablel-new">Referal Code</label>
              <input type="text" name="referal_code" class="form-control" id="referal_code" placeholder="" required="">
              <div class="invalid-feedback">
                Please provide valid refer code.
              </div>
            </div>
          </div>

        </div>
        <div class="form-row row">
          <div class="col-sm-12">
        <div class="form-group">
          <div class="custom-control custom-checkbox text-small">
            <input type="checkbox" class="custom-control-input" id="sign-up-agree" required="">
<label class="custom-control-label" for="sign-up-agree">I agree to the <a target="_blank" href="#">Terms &amp; Conditions</a>, Official Rules and Terms &amp; Conditions for Referral Program.
            </label>
          </div>
        </div>
      </div>
    </div>

        <div class="d-flex flex-column flex-wrap justify-content-between align-items-center">




          <button class="btn btn-primary btn-md btn-new" type="submit" data-loading-text="Sending" id="refer_your_friend">

            <span>Refer Your Friend</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

</section>
</div>






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
                                            <h4 class="mb-0 font-new" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                 When I can expect the payout after referring to someone.<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>
Once the loan has been disbursed and confirmed by the bank/NBFC, your payout will be processed and the details can be seen through your dashboard. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingThree">
                                            <h4 class="mb-0 collapsed font-new" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                When my payout will be credited to my bank account. <i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>The payout will be credited to your bank account upon requesting from your dashboard. We have option for automatic weekly and monthly release of payouts. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingThree">
                                            <h4 class="mb-0 collapsed font-new" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                Is there any additional bonus or incentive apart from regular payouts? <i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Based on your performance, you can get Additional Bonus and Special Incentives and gift vouchers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingThree">
                                            <h4 class="mb-0 collapsed font-new" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                Whom do I connect if I have any concern related to payout?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>You can connect to our Relationship Manager at <a href="mailto:contact@jfinserv.com">contact@jfinserv.com</a> regarding any query related to any service/s from JFINSERV.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="faq-img">
                            <img class="img-new" src="{{asset('images\refer.jpg')}}" alt="faq-image" style="width:400px;object-fit:cover;">
                        </div>
                    </div>
                </div>
            </div>
        </section>












<script type = "text/javascript">

  function hide() {
    document.getElementById("myDiv").style.display="none";
    document.getElementById("loader-hide").style.display="block";
    document.getElementById("model-body-show").style.display="block";
    
  }

  var text = document.getElementById("copy_link");

  /* return button to variable btn */
  var btn = document.getElementById("copyText");

  /* call function on button click */
  btn.onclick = function() {
    text.select();    
    document.execCommand("copy");
  }


</script>
<!--<script type="text/javascript">

  $("#refer_your_friend").click( function( event ) {

    var referred_by= $('#referred-by').val();
    var name=$('#friend-name').val();
    var phone=$('#friend-phone').val();
    var email=$('#friend-email').val();
     var referal_code=$('#referal_code').val();
    var product_id=$('#product-id').val();
    var status_id=0;



    if (referred_by == "") {
     $.notify("Please Insert Your Phone Number");
     return false;
   }
   if (name == "") {
     $.notify("Please Insert Your Friend Name");
     return false;
   }
   if (phone == "") {
     $.notify("Please Insert Your Friend Phone Number");
     return false;
   }
   if (email == "") {
     $.notify("Please Insert Your Friend Email");
     return false;
   }
   if (product_id == "") {
     $.notify("Please Select Product");
     return false;
   }
   var str_referred_by = referred_by.slice(0, 3);
   var str_name = name.slice(0, 3);

   var ID = function () {

    return str_name + str_referred_by + 'fk' + Math.random().toString(36).substr(2, 9);
  };
  var privateName = ID();

  var referral_link=privateName;
  $('#copy_link').val("{{config('app.baseURL')}}/referral-program?referral_link="+referral_link);


  $("#refer_your_friend").attr("disabled", true);

  $("#refer_your_friend").css("pointer-events", "none");


  $.ajax({
    type: "post",

    url: "{{config('app.baseURL')}}/refer-earn",
    data: {'product_id':product_id,'name':name,'phone':phone,'email':email,'referred_by':referred_by,'referral_link':referral_link,'referal_code':referal_code,'status_id':status_id},
    dataType: 'json',
    cache: false,
    success: function (result) {

      $('#modal-a1').modal('show');
      document.getElementById("myDiv").style.display="block";
      document.getElementById("loader-hide").style.display="none";
      document.getElementById("model-body-show").style.display="none";
      setTimeout("hide()", 4200);  // 5 seconds

      document.getElementById("refer_your_friend_form").reset();


      // $.notify("product Activated Successfully");

    },
    error: function (error) {
      console.log(error);
    }
  });

  
  


});
</script>-->
<script type="text/javascript">
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>

@endsection