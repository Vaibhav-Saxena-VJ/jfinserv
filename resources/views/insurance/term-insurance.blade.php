@extends('layouts.app')
@section('content')
<style type="text/css">
  .display-3{
    text-align: left;
  }
  .bg-secondary{
    background-color: #000 !important;
    color: #fff;
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


</style>

<div class="bg-primary-3 o-hidden breadcum-header" data-overlay="">
  <section class="text-white pb-0 section-padding">
    <div class="container">
      <div class="row ">
        <div class="col-md-9 col-lg-8 col-xl-7">
          <h2 class="display-3">Term Insurance</h2>
          <h4 class="display-5">Your family depends on you.<br> 
            Secure their future with our term insurance products. 
          </h4>
          <span class="show-case-text" style="font-size: 18px;" data-typed-text="" data-loop="true" data-type-speed="40" data-strings='["Low Rates. Great Benefits."]'></span>
          <div class="mt-4 mt-lg-5">
           <form method="post" action="{{config('app.baseURL')}}/apply-now" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="product_id" class="product_id" value="9">
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
          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-right">
            <h2 class="h1">What is Term Life Insurance?</h2>
            <p class="lead term-text-justify">Term Life insurance is the purest and most cost effective form of life insurance. Such term insurance provides financial protection to the nominee in case policyholder dies during policy term. Term Insurance policies provide great life cover benefits at low rates. E. g: Premium for Rs 1 Cr Term Insurance cover could be bought for as low as Rs 499* p.m. These fixed premiums can be paid at once or at regular intervals for the entire policy term or for a limited period of time. Premium amount varies basis the type of the premium payment method opted by the buyer.</p>
            <p class="lead term-text-justify" style="font-size: 10px;">* This is an assumed premium amount for an 18-year-old healthy male life with the monthly mode of payment and premiums paid regularly for the policy term of 18 years with an income payout option with Life Cover of ₹ 1 crore. GST tax and/or applicable cesses (if any) as per applicable rates will be charged extra.</p>
            
            <!-- <a href="#calculator" class="lead">Calculator</a> -->
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-left">
            <img src="{{config('app.baseURL')}}/assets/img/term.jpg" alt="Image" class="img-fluid term-fluid rounded shadow">

          </div>
        </div>
      </div>
    </section>

    <section class="pb-0">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">

          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-6 mb-lg-0 order-lg-1" data-aos="fade-right">
            <h2 class="h2">Why do you need Term Insurance?</h2>
            <ul>
              <li class="lead term-text-justify"><b>Your family depends on you:</b> The term insurance payout can be used to meet your family’s monthly expenses and other important goals such as your child’s education, wedding, etc.
              </li>
              <li class="lead term-text-justify"><b>To protect your assets:</b> You may take loans for assets like a home. However, if anything happens to you, your dear ones might have to bear the burden of unplanned loan EMIs. In such a situation, the term insurance payout can be utilized by your family for paying off outstanding loan amount.</li>
              <li class="lead term-text-justify"><b>Risks of lifestyle ailments:</b> Modern day lifestyle problems can lead to a host of ailments. Our term insurance plans, which besides protecting your family after death, also give you the option to choose add on critical illness protection during the lifetime. This feature pays out on the diagnosis of certain critical ailments like heart attack or cancer. This payout can provide financial support to your family during such tough times.
              </li>
            </ul>
            
            <!-- <a href="#calculator" class="lead">Calculator</a> -->
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-2" data-aos="fade-left">
            <img src="{{config('app.baseURL')}}/assets/img/term1.jpg" alt="Image" class="img-fluid rounded shadow">
            
          </div>
        </div>
      </div>
    </section>

    <section class="pt-20 o-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left ">
         <div class="col-md-9 col-lg-6 col-xl-5" data-aos="fade-in" data-aos-offset="250">
          <img src="{{config('app.baseURL')}}/assets/img/term3.jpg" alt="Image" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
          <div data-aos="fade-in" data-aos-offset="250">
            <h2 class="h2">Reasons to Buy Term Insurance Online:</h2>
            <!-- <p class="lead">Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p> -->
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Low rates</h6>
              </div>
            </div>
          </div>

          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Convenient</h6>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Great benefits and add-ons</h6>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Option for customisation</h6>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Zero/Less paper work</h6>
              </div>
            </div>
          </div>






        </div>

      </div>
    </div>
  </section>
  <section class="pb-0">
    <div class="container">
      <div class="row section-title justify-content-center text-center">
        <div class="col-md-11 col-lg-11 col-xl-11">
          <h3 class="display-4">Who should buy a <mark data-aos="highlight-text" data-aos-delay="250">Term Insurance Policy?</mark></h3>
          <div  class="lead term-text-justify"><b>Anyone with financial dependents should buy a term insurance policy</b>. This can include young working professionals, married couples, parents, self-employed & businessmen, mutual fund investors. <br><br>
          Life Insurance premiums paid are deductible from taxable income under Section 80C and hence carry a</b> double benefit for taxpayers – protection and tax-saving. <br><br>

          Term insurance also has among the lowest premiums among the different types of insurance policies.
          The three key benefits are – life protection, tax saving and affordable premiums.

        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-4 mt-md-5">
      <div class="col-auto">
        <div class="alert bg-secondary" style="color: #077273;">Find the right cover for you. <a  href="#calculatenow" class="calculator scroller-effect" style="font-size: 24px;color: #fff;">&nbsp;Calculate Now</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row align-items-center justify-content-around text-center text-lg-left">

      <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-6 mb-lg-0 order-lg-1" data-aos="fade-right">
        <h2 class="h2">Term Insurance – Benefits</h2>
        <ul>
          <li class="lead term-text-justify"><b>Large Life Insurance cover at low rates with great benefits
          </b></li>
          <li class="lead term-text-justify">Option For <b>Cover Against Critical Illnesses</b> like a heart attack, cancer, kidney failure etc (payout on first diagnosis)
          </li>
          <li class="lead term-text-justify"><b>Support In Case Of Disability:</b> In new-age Term plans, the insurance company pays your future premiums in case of total and permanent disability
          </li>
          <li class="lead term-text-justify"><b>Accidental death benefit</b> can be also be added
          </li>
          <li class="lead term-text-justify">
            <b>Tax benefits on premiums</b> paid under Section 80C.

          </li>
        </ul>

        <!-- <a href="#calculator" class="lead">Calculator</a> -->
      </div>
      <div class="col-md-9 col-lg-6 col-xl-5 order-lg-2" data-aos="fade-left">
        <img src="{{config('app.baseURL')}}/assets/img/term7.png" alt="Image" class="img-fluid rounded shadow">

      </div>
    </div>
  </div>
</section>
<!-- <section class="pt-20">
  <div class="container">
    <div class="row align-items-center justify-content-around text-center text-lg-left">

      <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-6 mb-lg-0 order-lg-2" data-aos="fade-in">
        <h2 class="h2">How to choose Best Term Insurance Plan?</h2>
        <p>Here are some parameters which may help you choose the Best Term Plan for yourself:</p>
        <ul>
          <li class="lead term-text-justify"><b>Claim Settlement Ratio:</b> This ratio tells you how many claims for life insurance have been paid out as a proportion of claims made. The higher this ratio is, the better. </li>
          <li class="lead term-text-justify"><b>Solvency Ratio:</b> Solvency ratio tells you whether the insurer you choose will be financially capable of settling your claim if the need arises. IRDAI mandates that every life insurer should maintain a solvency ratio of at least 1.5. </li>
          <li class="lead term-text-justify"><b>Option to add Critical Illness Benefit:</b> A critical illness like cancer or brain surgery can cost a lot of money and cripple the family’s finances. Critical illness protects your family from this risk. It pays out immediately on diagnosis and only medical documents confirming diagnosis are to be submitted. </li>
          <li class="lead term-text-justify"><b>Option to add Accidental Death Benefit:</b>  If you have opted for Accidental Death cover, your family will get additional pay out in case of death due to an accident, subject to maximum of Rs 2 crore (subject to offering of the insurance company).</li>
          <li class="lead term-text-justify"><b>Waiver of Premium on Terminal Illness:</b> In case the person covered by the policy gets affected by terminal illness, his/her future premiums will not need to be paid (subject to T&Cs of the insurance company).</li>

        </li>
      </ul>

    </div>
    <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in">
      <img src="{{config('app.baseURL')}}/assets/img/term9.jpg" alt="Image" class="img-fluid rounded shadow">

    </div>
  </div>
</div>
</section> -->

<section class="p-0 bg-light row no-gutters" id="calculatenow" >
  <div class="col-lg-5 col-xl-5" style="background-image: url(../assets/img/term5.jpg);background-repeat: no-repeat;background-position: center;">
   <section style="padding: 2.5rem 0;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md-11">
          <h2 class="h2 text-white">How Much Term Insurance Cover do you need?
          </h2>
          <p class="text-white lead term-text-justify">Before we find the right term insurance cover for you, let’s us first understand the concept of <b>Human Life Value (HLV)</b>.
</p>
          <p class="text-white lead term-text-justify">Human Life Value (HLV) is a number that tells the present value of future income expenses, liabilities and investments. The HLV number is taken usually to understand how much money would be required to secure the lives of your dependents, in case you are no longer around.</p>
        </div>
      </div>
    </div>
  </section>
</div>



<div class="col-lg-7 col-xl-7">
  <section style="padding: 2.5rem 0;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md-10">
          <h3 class="h1">Human Life Value (HLV) Calculator
          </h3>
          <p class="lead">
            Find the right cover amount for you 
          </p>
          <div class="row">
            <div class="card card-body shadow text-left text-dark">
              <form method="post" action="{{config('app.baseURL')}}/insurance/term-insurance" enctype='multipart/form-data'>
                   <input type="hidden" name="_token" value="{{csrf_token()}}">

                <label for="customRange" class="finance-details">Current Age</label>
                <div class="row finance-details">
                  <div class="col-lg-9 form-group">
                    <input type="range" class="custom-range" min="18" step="1" value="18" max="60" id="customRange"><span class="labels">18 Years</span><span class="labels" style="float: right;">60 Years</span></div> <div class="col-lg-3 form-group"><input type="text" name="current_age" class="insurance form-control range-slider-form" readonly=""></div>
                  </div>

                  <label for="AnnualRange" class="finance-details">Annual Income</label>
                  <div class="row finance-details">
                    <div class="col-lg-9 form-group">
                      <input type="range" class="custom-range" min="100000" step="500" value="100000" max="10000000" id="AnnualRange"><span class="labels">1 L</span><span class="labels" style="float: right;">1 Cr</span></div> <div class="col-lg-3 form-group"><input type="number" onkeypress="return validateFloatKeyPress(this,event);" name="annual_income" class="annual-income form-control range-slider-form" ></div>
                    </div>

                    <label for="AnnualIncrement" class="finance-details">Annual Increment ( p.a )</label>
                    <div class="row finance-details">
                      <div class="col-lg-9 form-group">
                        <input type="range" class="custom-range" min="1" step="1" value="1" max="20" id="AnnualIncrement"><span class="labels">1 %</span><span class="labels" style="float: right;">20 %</span></div> <div class="col-lg-3 form-group"><input type="text" name="annual_increment" class="annual-increment form-control range-slider-form" readonly=""></div>
                      </div>


                      <label for="SavingsRange" class="finance-details">Savings</label>
                      <div class="row finance-details">
                        <div class="col-lg-9 form-group">
                          <input type="range" class="custom-range" min="0" step="500" value="0" max="20000000" id="SavingsRange"><span class="labels">0</span><span class="labels" style="float: right;">2 Cr</span></div> <div class="col-lg-3 form-group"><input type="number" onkeypress="return validateFloatKeyPress(this,event);" name="savings" class="saving form-control range-slider-form"></div>
                        </div>

                        <label for="LoanRange" class="finance-details">Loan</label>
                        <div class="row finance-details">
                          <div class="col-lg-9 form-group">
                            <input type="range" class="custom-range" min="0" step="500" value="0" max="20000000" id="LoanRange"><span class="labels">0</span><span class="labels" style="float: right;">2 Cr</span></div> <div class="col-lg-3 form-group"><input type="number" onkeypress="return validateFloatKeyPress(this,event);" name="loan" class="loan form-control range-slider-form"></div>
                          </div>

                          <div class="col-lg-12 user-details hidden header-details">
                            <h3>Your require life cover to secure your loved ones is<br> <span class="value_of_cover"><b>&#x20B9; 2.00 Crores</b></span></h3>
                            <input type="hidden" name="required_cover" class="required_cover" value="">
                            <button class="col-lg-4 btn btn-primary btn-block recalculate-button hidden" type="button">Recalculate</button>
                          </div>

                          <h5 class="user-details hidden">Your Contact Details</h5>
                          <p class="user-details hidden">The Calculation will be sent to contact details specified under.</p>
                          <label for="UserEmail" class="user-details hidden">Email</label>
                          <div class="form-group user-details hidden">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="UserEmail" required="">
                          </div>

                          <label for="UserMobile" class="user-details hidden">Mobile</label>
                          <div class="form-group user-details hidden">
                            <input type="number" class="form-control" name="mobile" placeholder="Mobile" id="UserMobile" required="">
                          </div>



                          <div class="form-group terms-condition hidden">
                            <div class="custom-control custom-checkbox text-small">
                              <input type="checkbox" class="custom-control-input" id="sign-up-agree" required="">
                              <label class="custom-control-label" for="sign-up-agree">I agree to the <a target="_blank" href="{{config('app.baseURL')}}/terms-condition">Terms &amp; Conditions</a>
                              </label>
                            </div>
                          </div>
                          <center>
                            <div class="col-lg-4">
                              <button class="btn btn-primary btn-block submit-button hidden" type="submit">Submit</button>
                              <button class="btn btn-primary btn-block continue-button" type="button">Continue</button>
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
    <!-- <section class="section-padding">
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



            $(".insurance").val($("#customRange").val());

        // Read value on change
        $("#customRange").on("mousemove touchmove", function(e){

          $(".insurance").val($(this).val());
        });


        $(".annual-income").val($("#AnnualRange").val());

        // Read value on change
        $("#AnnualRange").on("mousemove touchmove", function(e){

          var annual=$(this).val();

          // var number_annual=parseInt(annual).toLocaleString(); 


          $(".annual-income").val(annual);
        });

        $(".annual-income").keyup(function() {

          /*HIV Calculation*/

          var annual_range=$(this).val();

          var annual_increment=$("#AnnualIncrement").val();
          var saving= $("#SavingsRange").val();
          var loan= $("#LoanRange").val();

          if (annual_range>10000000) {
            $.notify("Amount Should be less than 1 Cr");
            return false;
          }
          if (annual_range<100000) {
            // $.notify("Amount Should be greater than 1 Lac");
            return false;
          }


          if (annual_range==2000000) {
            var percentage= 100*(parseFloat(annual_range)-100000)/(10000000-100000);
          }else{
           var percentage= 100*(parseFloat(annual_range)-100000)/(10000000-100000)+0.5;
         }



         $("#AnnualRange").css('background','linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)')

         $("#AnnualRange").val(annual_range);

         var interest = parseFloat(annual_increment) / 100 ;


         var value_of_cover=parseFloat(annual_range)*((Math.pow(1+parseFloat(interest), 10)-1)/parseFloat(interest))-parseFloat(saving)+parseFloat(loan);

         function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }
          return val;
        }
        new_value_of_cover=numDifferentiation(value_of_cover);



        $(".value_of_cover").html("<b><mark class='final-figure' data-aos='highlight-text' data-aos-delay='250'>&#x20B9; " +new_value_of_cover+"</mark></b>");
        $(".required_cover").val(new_value_of_cover);

        /*End Calculation*/


      });

        $(".annual-increment").val($("#AnnualIncrement").val());

        // Read value on change
        $("#AnnualIncrement").on("mousemove touchmove", function(e){

          var annual_increment=$(this).val();

          // var number_annual_increment=parseInt(annual_increment).toLocaleString(); 

          $(".annual-increment").val(annual_increment);
        });


        $(".saving").val($("#SavingsRange").val());

        // Read value on change
        $("#SavingsRange").on("mousemove touchmove", function(e){

         var saving=$(this).val();

         // var number_saving=parseInt(saving).toLocaleString(); 

         $(".saving").val(saving);
       });

        $(".saving").keyup(function() {

          /*HIV Calculation*/

          var annual_range=$("#AnnualRange").val();
          var annual_increment=$("#AnnualIncrement").val();
          var saving= $(this).val();
          var loan= $("#LoanRange").val();

          if (saving>20000000) {
            $.notify("Amount Should be less than 2 Cr");
            return false;
          }
          if (saving=="") {
            // $.notify("Amount Should be greater than 1 Lac");
            return false;
          }

          if (saving==20000000) {
            var percentage= 100*(parseFloat(saving))/(20000000);
          }else{
           var percentage= 100*(parseFloat(saving))/(20000000)+0.5;
         }



         $("#SavingsRange").css('background','linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)')

         $("#SavingsRange").val(saving);



         var interest = parseFloat(annual_increment) / 100 ;


         var value_of_cover=parseFloat(annual_range)*((Math.pow(1+parseFloat(interest), 10)-1)/parseFloat(interest))-parseFloat(saving)+parseFloat(loan);

         function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }
          return val;
        }
        new_value_of_cover=numDifferentiation(value_of_cover);



        $(".value_of_cover").html("<b><mark class='final-figure' data-aos='highlight-text' data-aos-delay='250'>&#x20B9; " +new_value_of_cover+"</mark></b>");
        $(".required_cover").val(new_value_of_cover);

        /*End Calculation*/
      });

        $(".loan").val($("#LoanRange").val());

        // Read value on change
        $("#LoanRange").on("mousemove touchmove", function(e){

          var loan=$(this).val();

          // var number_loan=parseInt(loan).toLocaleString(); 

          $(".loan").val(loan);
        });

        $(".loan").keyup(function() {

          /*HIV Calculation*/

          var annual_range=$("#AnnualRange").val();
          var annual_increment=$("#AnnualIncrement").val();
          var saving= $("#SavingsRange").val();
          var loan= $(this).val();

          if (loan>20000000) {
            $.notify("Amount Should be less than 1 Cr");
            return false;
          }
          if (loan=="") {
            // $.notify("Amount Should be greater than 1 Lac");
            return false;
          }
          if (loan==20000000) {
            var percentage= 100*(parseFloat(loan))/(20000000);
          }else{
           var percentage= 100*(parseFloat(loan))/(20000000)+0.5;
         }



         $("#LoanRange").css('background','linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)')

         $("#LoanRange").val(loan);


         var interest = parseFloat(annual_increment) / 100 ;


         var value_of_cover=parseFloat(annual_range)*((Math.pow(1+parseFloat(interest), 10)-1)/parseFloat(interest))-parseFloat(saving)+parseFloat(loan);

         function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }
          return val;
        }
        new_value_of_cover=numDifferentiation(value_of_cover);



        $(".value_of_cover").html("<b><mark class='final-figure' data-aos='highlight-text' data-aos-delay='250'>&#x20B9; " +new_value_of_cover+"</mark></b>");
        $(".required_cover").val(new_value_of_cover);

        /*End Calculation*/
      });




        /*HIV Calculation*/

        var annual_range=$("#AnnualRange").val();
        var annual_increment=$("#AnnualIncrement").val();
        var saving= $("#SavingsRange").val();
        var loan= $("#LoanRange").val();



        var interest = parseFloat(annual_increment) / 100 ;


        var value_of_cover=parseFloat(annual_range)*((Math.pow(1+parseFloat(interest), 10)-1)/parseFloat(interest))-parseFloat(saving)+parseFloat(loan);

        function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }
          return val;
        }
        new_value_of_cover=numDifferentiation(value_of_cover);



        $(".value_of_cover").html("<b><mark class='final-figure' data-aos='highlight-text' data-aos-delay='250'>&#x20B9; " +new_value_of_cover+"</mark></b>");
        $(".required_cover").val(new_value_of_cover);

        /*End Calculation*/



      });   



document.getElementById("customRange").oninput = function() {
  var newval=this.value;



  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("AnnualRange").oninput = function() {
  var newval=this.value;

  /*HIV Calculation*/

  var annual_range=this.value;
  var annual_increment=$("#AnnualIncrement").val();
  var saving= $("#SavingsRange").val();
  var loan= $("#LoanRange").val();



  var interest = parseFloat(annual_increment) / 100 ;


  var value_of_cover=parseFloat(annual_range)*((Math.pow(1+parseFloat(interest), 10)-1)/parseFloat(interest))-parseFloat(saving)+parseFloat(loan);

  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }
    return val;
  }
  new_value_of_cover=numDifferentiation(value_of_cover);



  $(".value_of_cover").html("<b><mark class='final-figure' data-aos='highlight-text' data-aos-delay='250'>&#x20B9; " +new_value_of_cover+"</mark></b>");
  $(".required_cover").val(new_value_of_cover);

  /*End Calculation*/

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("SavingsRange").oninput = function() {
  var newval=this.value;

  /*HIV Calculation*/

  var annual_range=$("#AnnualRange").val();
  var annual_increment=$("#AnnualIncrement").val();
  var saving= this.value;
  var loan= $("#LoanRange").val();



  var interest = parseFloat(annual_increment) / 100 ;


  var value_of_cover=parseFloat(annual_range)*((Math.pow(1+parseFloat(interest), 10)-1)/parseFloat(interest))-parseFloat(saving)+parseFloat(loan);

  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }
    return val;
  }
  new_value_of_cover=numDifferentiation(value_of_cover);



  $(".value_of_cover").html("<b><mark class='final-figure' data-aos='highlight-text' data-aos-delay='250'>&#x20B9; " +new_value_of_cover+"</mark></b>");
  $(".required_cover").val(new_value_of_cover);

  /*End Calculation*/

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("LoanRange").oninput = function() {
  var newval=this.value;

  /*HIV Calculation*/

  var annual_range=$("#AnnualRange").val();
  var annual_increment=$("#AnnualIncrement").val();
  var saving= $("#SavingsRange").val();
  var loan= this.value;



  var interest = parseFloat(annual_increment) / 100 ;


  var value_of_cover=parseFloat(annual_range)*((Math.pow(1+parseFloat(interest), 10)-1)/parseFloat(interest))-parseFloat(saving)+parseFloat(loan);

  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }
    return val;
  }
  new_value_of_cover=numDifferentiation(value_of_cover);



  $(".value_of_cover").html("<b><mark class='final-figure' data-aos='highlight-text' data-aos-delay='250'>&#x20B9; " +new_value_of_cover+"</mark></b>");
  $(".required_cover").val(new_value_of_cover);

  /*End Calculation*/

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};     
document.getElementById("AnnualIncrement").oninput = function() {
  var newval=this.value;

  /*HIV Calculation*/

  var annual_range=$("#AnnualRange").val();
  var annual_increment=this.value;
  var saving= $("#SavingsRange").val();
  var loan= $("#LoanRange").val();



  var interest = parseFloat(annual_increment) / 100 ;


  var value_of_cover=parseFloat(annual_range)*((Math.pow(1+parseFloat(interest), 10)-1)/parseFloat(interest))-parseFloat(saving)+parseFloat(loan);

  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }
    return val;
  }
  new_value_of_cover=numDifferentiation(value_of_cover);



  $(".value_of_cover").html("<b><mark class='final-figure' data-aos='highlight-text' data-aos-delay='250'>&#x20B9; " +new_value_of_cover+"</mark></b>");
  $(".required_cover").val(new_value_of_cover);

  /*End Calculation*/

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
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
@endsection