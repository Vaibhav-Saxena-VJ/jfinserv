@extends('layouts.app')
@section('content')
<style type="text/css">
  .display-3{
    text-align: left;
  }
  .field_wrapper {
    padding-bottom: 15px;
    width: 100%;
  }
  @media only screen and (min-width: 1024px){
    .radios.proposerGender {
      justify-content: flex-start;
    }
    .radios.proposerGender label {
      margin-right: 15px;
    }

    .radios label {
      width: 100px;
      height: 97px;
    }
  }
  @media only screen and (min-width: 1024px){
    .radios {
      flex-wrap: wrap;
    }
    .hideBig {
      display: none!important;
    }
  }
  .radios label input[type=radio] {
    opacity: 0;
    visibility: hidden;
    position: absolute;
    z-index: 1;
  }
  .radios.proposerGender label input[type=radio]+span {
    display: block;
    padding-top: 25px;
    text-align: center;
  }
  .radios label input[type=radio]:checked+span {
    border: 1px solid #077273;
    background: #077273;
    background: -moz-linear-gradient(top,#077273 0,#025152 100%);
    background: -webkit-gradient(left top,left bottom,color-stop(0,#077273),color-stop(100%,#025152));
    background: -webkit-linear-gradient(top,#077273 0,#025152 100%);
    background: -o-linear-gradient(top,#077273 0,#025152 100%);
    background: -ms-linear-gradient(top,#077273 0,#025152 100%);
    background: linear-gradient(to bottom,#077273 0,#025152 100%);
    color: #fff;
  }
  .radios label input[type=radio]+span {
    background: #fff;
    border-radius: 8px;
    box-shadow: none;
    display: block;
    position: absolute;
    z-index: 2;
    width: 100px;
    height: 100px;
    padding: 10px;
    display: flex;
    align-items: center;
    border: solid 1px #979797;
    transition: border .3s ease-in;
  }


  .radios.proposerGender label input[type=radio]+span .gender {
    margin: 0 auto;
  }
  .radios label input[type=radio]:checked+span .gender.male {
    background: url(../assets/img/man.png) no-repeat -4px 0px;
  }
  .radios label input[type=radio]:checked+span .gender.female {
    background: url(../assets/img/woman.png) no-repeat -4px 0px;
  }
  .radios label input[type=radio]+span .gender.male {
    background: url(../assets/img/man_b.png) no-repeat -4px 0px;
  }
  .radios label input[type=radio]+span .gender.female {
    background: url(../assets/img/woman_b.png) no-repeat -4px 0px;
  }
  .radios label input[type=radio]+span .gender {
    width: 28px;
    height: 30px;
    display: block;
    margin-right: 12px;
  }
  .radios label input[type=radio]:checked+span em {
    color: #fff;
  }
  .radios label input[type=radio]+span em {
    font-style: normal;
    font-size: 14px;
    color: #979797;
    line-height: 15px;
  }

  .radios {
    display: flex !important;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  .bg-secondary{
    background-color: #000 !important;
    color: #fff;
  }
  .lead{
    text-align: left;
  }
  .term-text-justify{
   text-align: justify;
   text-justify: inter-word;
 }
 .labels{
  font-size: 13px;
}
.range-slider-form{
  height: calc(1em + 1rem + 2px);
}
.form-control[readonly] {
  background-color: #eaf6f7d4;
}


@media only screen and (max-width: 767px){
  .container{
    overflow: hidden;
  }
  .proposerGender {
    display: inline-block !important;
     margin-bottom: 100px !important;
  }
  .hideBig{
    display: none !important;
  }
  .mobile-male{
    
     margin-right: 110px !important;
  }
  
}
.term-fluid{

  object-fit: cover;
  object-position: center;
}
.header-details{
  padding: 10px;
  background-color: #009b723d;
  margin-bottom: 10px;
}
.hidden{
  display: none;
}

</style>

<div class="bg-primary-3 o-hidden breadcum-header" data-overlay="">
  <section class="text-white pb-0 section-padding">
    <div class="container">
      <div class="row ">
        <div class="col-md-9 col-lg-8 col-xl-7">
          <h2 class="display-3">Health Insurance</h2>
          <h4 class="display-5">Ensure financial comfort of you and<br> 
            your family with our health insurance products. 
          </h4>
          <span class="show-case-text" style="font-size: 18px;" data-typed-text="" data-loop="true" data-type-speed="40" data-strings='["Low Rates. Great Benefits."]'></span>
          <div class="mt-4 mt-lg-5">
            <form method="post" action="{{config('app.baseURL')}}/apply-now" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="product_id" class="product_id" value="8">
              <div class="d-flex flex-column flex-sm-row form-group">
                <input class="form-control mr-sm-2 mb-2 mb-sm-0 h-100 header-input col-md-6" name="phone" placeholder="Phone Number" type="number" required="">
                <button class="btn btn-sm btn-primary flex-shrink-0 btn-loading header-button" type="submit" >

                  <span>Apply Now</span>
                </button>
              </div>


            </form>
            <!-- <div class="alert rounded-lg bg-secondary d-inline-flex align-items-center">
              <div class="badge badge-pill badge-success">Beta</div>
              <div class="mx-3">
                Launching v1.0 in
                <span class="font-weight-bold add-countdown-time" data-countdown-date="2019/10/05"></span>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
       <!--  <div class="position-absolute w-50 h-100 top left" data-jarallax-element="100 50">
          <div class="blob blob-4 bg-gradient w-100 h-100 top left"></div>
        </div> -->

      </section>
    </div>

    <section class="pb-0">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-in">
            <h2 class="h1">Health Insurance</h2>
            <p class="lead term-text-justify">Even the healthiest of individuals can fall sick without warning and require expensive medical treatments. In such a scenario, it is important to be financially prepared to tackle such medical costs. With health insurance plans, you can ensure the financial comfort of your family and you.</p>
            
            <a href="#healthcalculator" class="lead btn btn-sm btn-primary scroller-effect">Request A Quote</a>
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in">
            <img src="{{config('app.baseURL')}}/assets/img/health-insu.jpg" alt="Image" class="img-fluid term-fluid rounded shadow">

          </div>
        </div>
      </div>
    </section>

    <section class="pb-0">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">

          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-6 mb-lg-0 order-lg-1" data-aos="fade-right">
            <h2 class="h2">What are health insurance plans?</h2>
            <p class="lead term-text-justify">Health insurance plans reimburse insured customers for their medical expenses, including treatments, surgeries, hospitalization and the like which arise from injuries/illnesses, or directly pay out a certain pre-determined sum to the customer.</p>
            <p class="lead term-text-justify">This is an agreement between the insurance company and the customer where the former agrees to guarantee payment/compensation for medical costs in case the latter is injured/ill in the future, leading to hospitalization. 
            In most cases, insurance companies have tie-ups with a network of hospitals, thereby ensuring cashless treatment for patients there.</p>
            
            <!-- <a href="#calculator" class="lead">Calculator</a> -->
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-2" data-aos="fade-left">
            <img src="{{config('app.baseURL')}}/assets/img/health-insu1.jpg" alt="Image" class="img-fluid rounded shadow">
            
          </div>
        </div>
      </div>
    </section>


    <section class="pb-0">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">

          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-6 mb-lg-0 order-lg-2" data-aos="fade-right">
            <h2 class="h2">Here is why you need health insurance:</h2>
            <ul>
              <li class="lead term-text-justify">Pays for medical treatments <b>without depleting your savings or investments.</b></li>
              <li class="lead term-text-justify"><b>Affording medical care</b> is an absolute necessity especially during emergencies.</li>
              <li class="lead term-text-justify"><b>Cashless treatment</b> with large network hospitals while reimbursements are given by insurance companies in other cases.</li>
              <li class="lead term-text-justify">Keeps you and <b>your family worry free</b>; while paying <b>a low rate/premium</b>.</li>
              <li class="lead term-text-justify">In most cases, you get coverage for hospitalization costs, doctor consultations, medicines, tests and post-hospitalization expenses.</li> 

            </li>
          </ul>

          <!-- <a href="#calculator" class="lead">Calculator</a> -->
        </div>
        <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-left">
          <img src="{{config('app.baseURL')}}/assets/img/health-insu3.jpg" alt="Image" class="img-fluid rounded shadow">

        </div>
      </div>
    </div>
  </section>
  <section class="pt-20">
    <div class="container">
      <div class="row align-items-center justify-content-around text-center text-lg-left">

        <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-6 mb-lg-0 order-lg-1" data-aos="fade-right">
          <h2 class="h2">Key Benefits of Health Insurance Plans</h2>

          <ul>
            <li class="lead term-text-justify"><b>Coverage for pre and post hospitalization expenses-</b> Insurance policies usually offer coverage for expenses both pre and post hospitalization up to pre-specified durations/limits.</li>
            <li class="lead term-text-justify"><b>Cashless facility-</b> If you are getting treated at a network hospital, you can get hassle-free cashless treatment under your insurance plan.
            </li>
            <li class="lead term-text-justify"><b>No-Claim Bonuses-</b> These bonuses are earned by the person insured in case no claims are filed for treatments in a particular year.
            </li>
            <li class="lead term-text-justify"><b>Tax benefits-</b> You can get deduction up to Rs 25,000 from taxable income of health insurance premiums paid under Section 80D of the Income Tax Act. The maximum deduction limit for senior citizens is Rs 60,000**
            </li>

          </ul>

          <!-- <a href="#calculator" class="lead">Calculator</a> -->
        </div>
        <div class="col-md-9 col-lg-6 col-xl-5 order-lg-2" data-aos="fade-left">
          <img src="{{config('app.baseURL')}}/assets/img/health-insu4.jpeg" alt="Image" class="img-fluid rounded shadow">

        </div>
      </div>
    </div>
  </section>

  <section class="p-0 bg-light row no-gutters" id="healthcalculator">
    <div class="col-lg-5 col-xl-5" style="background-color: #025152;padding: 2.5rem 0rem 0rem 0rem;" >
      <div class="min-vh-30 h-100 w-100">
        <div class="map-marker">
          <div class="info-window" data-max-width="400">

            <div class="container">
              <div class="row justify-content-center">
                <div class="col col-md-11">
                  <h2 class="h3 text-white">Get Complete Health Cover on Finkompas

                  </h2>
                  <ul>
                   
                    <li class="text-white lead term-text-justify">Pre-hospitalization and Post hospitalization cover</li>
                    <li class="text-white lead term-text-justify">2,000+ hospitals for cashless treatment</li>
                    <li class="text-white lead term-text-justify">Instant Policy Purchase</li>
                     <li class="text-white lead term-text-justify">Option for restoration benefit</li>
                   
                    
                  </ul>

                </div>
                <img src="../assets/img/health-insurance.png" alt="Image" class="img-fluid" style="width: 400px !important;height: 400px !important;">
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="divider divider-side bg-light d-none d-lg-block"></div>
    </div>



    <div class="col-lg-7 col-xl-7">
      <section style="padding: 2.5rem 0;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col col-md-10">
              <h3 class="h2">Get Cashless Health Insurance Plan
              </h3>
              <p class="lead">
               Request A Quote 
             </p>
             <div class="row">
              <div class="card card-body shadow text-left text-dark" style="padding: 1.50rem;">
                <form method="post" action="{{config('app.baseURL')}}/insurance/health-insurance" enctype='multipart/form-data'>
                   <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <div class="field_wrapper"><div class="label hideSmall" style="margin-bottom: 5px;">Gender</div> <div class="radios proposerGender radio_steps"><div class="label_new hideBig">Gender</div> <label class="mobile-male"><input type="radio" name="gender" value="1"> <span><i class="gender male"></i> <em>Male</em></span></label> <label class="mobile-female"><input type="radio" name="gender" value="2"> <span><i class="gender female"></i> <em>Female</em></span></label></div> <!----></div>

                  <label for="customRange" class="finance-details">Age</label>
                  <div class="row finance-details">
                    <div class="col-lg-9 form-group">
                      <input type="range" class="custom-range" min="18" step="1" value="18" max="65" id="customRange"><span class="labels">18 Years</span><span class="labels" style="float: right;">65 Years</span></div> <div class="col-lg-3 form-group"><input type="text" name="current_age" class="insurance form-control range-slider-form" readonly="" required=""></div>
                    </div>


                    <label for="City" class="user-details">City</label>
                    <div class="form-group user-details ">
                      <input type="text" class="form-control" name="city" placeholder="Enter City" id="City" required="">
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                       <label for="UserEmail" class="user-details">Email</label>
                       <div class="form-group ">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" id="UserEmail" required="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="UserMobile" class="user-details">Mobile</label>
                      <div class="form-group ">
                        <input type="number" class="form-control" name="mobile" placeholder="Mobile" id="UserMobile" required="">
                      </div>
                    </div>
                  </div>


                  <div class="form-group terms-condition">
                    <div class="custom-control custom-checkbox text-small">
                      <input type="checkbox" class="custom-control-input" id="sign-up-agree" required="">
                      <label class="custom-control-label" for="sign-up-agree">I agree to the <a target="_blank" href="{{config('app.baseURL')}}/terms-condition">Terms &amp; Conditions</a>
                      </label>
                    </div>
                  </div>
                  <center>
                    <div class="col-lg-4">
                      <button class="btn btn-primary btn-block submit-button" type="submit">Submit</button>
                    </div>
                  </center>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
<!--     <section class="section-padding">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-11 col-lg-10 col-xl-9">
            <h3 class="h1">Frequently Asked Questions ( FAQ )</h3>
            <div class="lead text-center">Quickly find out if we've addressed your query</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-11 col-lg-10 col-xl-9">
            <div id="faq-accordion">
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Documents</h6>
                    <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
                  </div>
                </a>
                <div class="collapse" id="accordion-1" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                   Documents Answer

                  </div>
                </div>
              </div>
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Documents</h6>
                    <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
                  </div>
                </a>
                <div class="collapse" id="accordion-2" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                   Documents Answer

                  </div>
                </div>
              </div>
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-3" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Documents</h6>
                    <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
                  </div>
                </a>
                <div class="collapse" id="accordion-3" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                   Documents Answer

                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
        <div class="row justify-content-center mt-4 mt-md-5">
          <div class="col-auto">
            <div class="alert bg-light">Still have unanswered questions? <a href="#">Get in touch</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<script>
  $(document).ready(function(){

    $('#insurance').addClass('active-header');


    $(".insurance").val($("#customRange").val());

        // Read value on change
        $("#customRange").on("mousemove touchmove", function(e){

          $(".insurance").val($(this).val());
        });


      });   

  document.getElementById("customRange").oninput = function() {
    var newval=this.value;

    var minval=$(this).attr('min');
    var maxval=$(this).attr('max');

    var percentage= 100*(newval-minval)/(maxval-minval);

    this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
  };   

</script> 
@endsection