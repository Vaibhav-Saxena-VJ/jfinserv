@extends('layouts.app', ['title' => 'Simplified Investments - Great Options. No Fees. Invest Online in Top Performing Equity Funds'])
@section('keywords', 'top mutual funds, top 5 mutual funds, top mutual funds, top 10 Mutual Funds, SIP Calculator, Mutual Fund Calculator, Mutual Funds, Best Investment Plan, Best SIP Plans, SIP Calculator')
@section('description', 'Simplified Investments - Great Options. No Fees. Dream to make it big in life. Our Investment products can help you build a healthy wealth corpus when held over the long term.')
@section('content')
<style type="text/css">

  .equity_fund{
    width: 32px;
    margin-right: 10px;
  }

  #SIPRange{
    background:linear-gradient(to right, #077273 0%, #077273 1.8%, #fff 1.8%, white 100%)
  }
  #customRange{
    background:linear-gradient(to right, #077273 0%, #077273 38.775510%, #fff 38.775510%, white 100%)
  }
  #ReturnsRange{
    background:linear-gradient(to right, #077273 0%, #077273 48.275862%, #fff 48.275862%, white 100%)
  }
  .display-3{
    text-align: left;
  }
  .field_wrapper {
    padding-bottom: 15px;
    width: 100%;
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

@media only screen and (min-width: 800px){

  canvas#bar-chart{
    height: 500px !important;
    width: 600px !important;
  }
  .bar-chart-padding{
    padding: 6rem 0rem 2rem 0rem;
  }

}
@media only screen and (max-width: 767px){
  .container{
    overflow: hidden;
  }
  canvas#bar-chart{
    height: 500px !important;
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
          <h2 class="display-3">Mutual Funds</h2>
          <h4 class="display-5">Dream to make it big in life. Our investment solutions<br> 
            can help you build a good wealth corpus when held over long term. <br>
          </h4>
          <span class="show-case-text" style="font-size: 18px;" data-typed-text="" data-loop="true" data-type-speed="40" data-strings='["Great Options. No Fees."]'></span>
          <div class="mt-4 mt-lg-5">
            <form method="post" action="{{config('app.baseURL')}}/apply-now" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="product_id" class="product_id" value="2">
              <div class="d-flex flex-column flex-sm-row form-group">
                <input class="form-control mr-sm-2 mb-2 mb-sm-0 h-100 header-input col-md-6" name="phone" placeholder="Phone Number" type="number" required="">
                <button class="btn btn-sm btn-primary flex-shrink-0 btn-loading header-button" type="submit" >

                  <span>Apply Now</span>
                </button>
              </div>


            </form>
           
          </div>
        </div>
      </div>
    </div>
      
      </section>
    </div>

    <section class="pb-0">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-right">
            <h2 class="h1">What is a Mutual Fund?</h2>
            <p class="lead term-text-justify">To many people, Mutual Funds can seem complicated or intimidating. We are going to try and simplify it for you at its very basic level. Essentially, the money pooled in by a number of investors is what makes up a Mutual Fund. This fund is managed by a <b>professional fund manager.</b></p>
            <p class="lead term-text-justify">It is a trust that collects money from a number of investors who share a common investment objective. Then, it invests the money in equities, bonds, money market instruments and/or other securities.</p>
            <p class="lead term-text-justify">Each investor owns units, which represent a portion of the holdings of the fund. The income/gains generated from this collective investment is distributed proportionately amongst the investors after deducting certain expenses, by calculating a scheme’s <b>“Net Asset Value or NAV”</b>. </p>
            
            <!-- <a href="#calculator" class="lead">Calculator</a> -->
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-left">
            <img src="{{config('app.baseURL')}}/assets/img/mutual-funds.jpg" alt="Image" class="img-fluid term-fluid rounded shadow">

          </div>
        </div>
      </div>
    </section>


        <section class="bg-primary-3 text-white jarallax pt-20" data-jarallax="" data-speed="0.2" style="margin-top: 7rem;">
      <img src="{{asset('assets\img\mutual-banner.jpg')}}" alt="Image" class="jarallax-img opacity-50">
      <div class="container pb-5">
        <div class="row">
          <div class="col-xl-5 col-lg-6 col-md-7">
            <blockquote class="blockquote p-0 border-0 text-white">
                    &ldquo;Mutual Fund is one of the most viable investment options for an investor as it offers an opportunity to invest in a diversified, professionally managed basket of securities at a relatively low cost.&rdquo;
                </blockquote>
          
            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
              <h6 class="mb-0 mr-2">Great Options | No Fees</h6>
              <!-- <span>Software Engineer</span> -->
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="divider divider-bottom bg-white"></div> -->
    </section>
    <section class="pt-20 o-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
        
        <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
          <div data-aos="fade-in" data-aos-offset="250">
            <h2 class="h2">What are the benefits of investing in Mutual Funds?</h2>
           
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Invested in a Diversified Portfolio</h6>
              </div>
            </div>
          </div>

          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Any amount as low as 500 per month can be invested</h6>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Expert Fund Management</h6>
              </div>
            </div>
          </div>
         
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Convenience of purchase – a hassle-free experience</h6>
              </div>
            </div>
          </div>


        </div>
 <div class="col-md-9 col-lg-6 col-xl-5" data-aos="fade-in" data-aos-offset="250">
          <img src="{{config('app.baseURL')}}/assets/img/mutual.jpg" alt="Image" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section>

    <section class="bg-primary-3 pt-5 text-white">
     
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <h3 class="display-4">Equity Funds</h3>
            <div class="lead" style="text-align: center;">Invests in Top stocks</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-12 col-lg-12">
            <div class="row justify-content-center">
              <div class="col-md-3 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="10">
                <div class="card card-body bg-white min-vh-md-15 hover-box-shadow">
                  <div class="flex-fill">
                    <h4 class="h4"><img src="{{config('app.baseURL')}}/assets/img/urban.png" class="equity_fund">Large Cap</h4>
                    
                  </div>
                  <a href="{{config('app.baseURL')}}/investment/equity-funds/large-cap" class="stretched-link">Invest</a>
                </div>
              </div>
              <div class="col-md-3 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="20">
                <div class="card card-body bg-white min-vh-md-15 hover-box-shadow">
                  <div class="flex-fill">
                    <h4 class="h4"><img src="{{config('app.baseURL')}}/assets/img/company.png" class="equity_fund">Mid Cap</h4>
                    
                  </div>
                  <a href="{{config('app.baseURL')}}/investment/equity-funds/mid-cap" class="stretched-link">Invest</a>
                </div>
              </div>
              <div class="col-md-3 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="30">
                <div class="card card-body bg-white min-vh-md-15 hover-box-shadow">
                  <div class="flex-fill">
                    <h4 class="h4"><img src="{{config('app.baseURL')}}/assets/img/target.png" class="equity_fund">Focused</h4>
                    
                  </div>
                  <a href="{{config('app.baseURL')}}/investment/equity-funds/focused" class="stretched-link">Invest</a>
                </div>
              </div>
              <div class="col-md-3 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="40">
                <div class="card card-body bg-white min-vh-md-15 hover-box-shadow">
                  <div class="flex-fill">
                    <h4 class="h4"><img src="{{config('app.baseURL')}}/assets/img/money_grow.png" class="equity_fund">ELSS</h4>
                   
                  </div>
                  <a href="{{config('app.baseURL')}}/investment/equity-funds/elss" class="stretched-link">Invest</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



<section class="p-0 bg-light row no-gutters" id="Mutualcalculator">
  <div class="col-lg-6 col-xl-6" style="padding: 1.5rem;" >
    <div class="min-vh-30 h-100 w-100">
      <div class="map-marker">
        <div class="info-window" data-max-width="400">

          <div class="container">
            <div class="row justify-content-center">
              <div class="col col-md-10">
                <h3 class="h2">SIP Calculator
                </h3>
                <p class="lead">
                 Find the future value of your monthly SIP investment
               </p>
               <div class="row">
                <div class="card card-body shadow text-left text-dark" style="padding: 1.50rem;">
                 <form method="post" action="{{config('app.baseURL')}}/investment/mutual-funds" enctype='multipart/form-data'>
                   <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <label for="SIPRange" class="finance-details">SIP Monthly Amount</label>
                  <div class="row finance-details">
                    <div class="col-lg-9 form-group">
                      <input type="range" class="custom-range" min="0" step="500" value="5000" max="500000" id="SIPRange"><span class="labels">0</span><span class="labels" style="float: right;">5 L</span></div> <div class="col-lg-3 form-group"><input type="number" name="sip_amount" min="0" max="500000" onkeypress="return validateFloatKeyPress(this,event);" class="sip-amount form-control range-slider-form"></div>
                    </div>


                    <label for="ReturnsRange" class="finance-details">Expected Rate Of Return (p.a)</label>
                    <div class="row finance-details">
                      <div class="col-lg-9 form-group">
                        <input type="range" class="custom-range" min="1" step="1" value="15" max="30" id="ReturnsRange"><span class="labels">1%</span><span class="labels" style="float: right;">30%</span></div> <div class="col-lg-3 form-group"><input type="text" name="expected_returns" class="expected_returns form-control range-slider-form" readonly=""></div>
                      </div>

                      <label for="customRange" class="finance-details">Investment Duration</label>
                      <div class="row finance-details">
                        <div class="col-lg-9 form-group">
                          <input type="range" class="custom-range" min="1" step="1" value="20" max="50" id="customRange"><span class="labels">1 Year</span><span class="labels" style="float: right;">50 Year</span></div> <div class="col-lg-3 form-group"><input type="text" name="investment_duration" class="investment form-control range-slider-form" readonly=""></div>
                        </div>

                        <div class="col-lg-12  finance-details">
                          <p class="lead">Your Investments <span class="value_invested"><b>&#x20B9; 2.00 Cr</b></span></p>
                          <p class="lead">The future value of your SIP investment is <span class="value_of_investment"><b>&#x20B9; 2.00 Cr</b></span></p>
                          <input type="hidden" name="value_of_investment" class="input_value_of_investment" value="">
                        </div>

                        <h5 class="user-details hidden">Your Contact Details</h5>
                        <!-- <p class="user-details hidden">The Calculation will be sent to contact details specified under.</p> -->
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
                          <div class="col-lg-5">
                            <button class="btn btn-primary btn-block submit-button hidden" type="submit">Submit</button>
                            <button class="btn btn-primary btn-block continue-button" type="button">Continue</button>
                            <button class="btn btn-default btn-block recalculate-button hidden" type="button" style="color: #025152;cursor: pointer;text-decoration: underline;">Recalculate</button>
                          </div>

                        </center>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>



    <div class="col-lg-6 col-xl-6">
      <section class="bar-chart-padding">
        <div class="container">
          <div class="card-content">
            <div class="card-body pl-0">
              <div class="height-600" id="graph-container">
                <canvas id="bar-chart"></canvas>
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

      $('#investment').addClass('active-header');
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


        $(".sip-amount").val($("#SIPRange").val());

        // Read value on change
        $("#SIPRange").on("mousemove touchmove", function(e){

          var annual=$(this).val();

          // var number_annual=parseInt(annual).toLocaleString(); 


          $(".sip-amount").val(annual);
        });

        $(".sip-amount").keyup(function() {

          var annual=$(this).val();



          if (annual>500000) {
            $.notify("Amount Should be less than 5 Lac");
            return false;
          }
          if (annual=="") {
            var annual=0;
            $.notify("Please Enter SIP Monthly Amount");
            return false;
          }
          if (annual==500000) {
            var percentage= 100*(parseFloat(annual))/(500000);
          }else{
           var percentage= 100*(parseFloat(annual))/(500000)+0.5;
         }



         $("#SIPRange").css('background','linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)')


         $("#SIPRange").val(annual);

         /*SIP Calculation*/

         var return_rate=$("#ReturnsRange").val();
         var sip_amount=$(this).val();
         var number_of_years= $("#customRange").val();


         var number_of_payments=parseFloat(number_of_years)*12;

         value_invested=parseFloat(sip_amount)*parseFloat(number_of_payments);



         var interest = parseFloat(return_rate) / 100 / 12;


         var value_of_investment=parseFloat(sip_amount)*((Math.pow(1+parseFloat(interest), parseFloat(number_of_payments))-1)/parseFloat(interest)) * (1 + parseFloat(interest));
         function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }
          return val;
        }
        new_value_of_investment=numDifferentiation(value_of_investment);

        new_value_invested=numDifferentiation(value_invested);

        $(".value_invested").html("<b>&#x20B9; " +new_value_invested+"</b>");

        $(".value_of_investment").html("<b>&#x20B9; " +new_value_of_investment+"</b>");
        $(".input_value_of_investment").val(new_value_of_investment);

        function newnumDifferentiation(value) {
          var val = Math.abs(value)

          val = (val / 10000000).toFixed(2);

          return val;
        }

        var graph_value=[];

        var graph_value_of_investment=newnumDifferentiation(value_of_investment);
        var graph_value_invested=newnumDifferentiation(value_invested);

        var start=0;
        var Mid=0;
        var End=0;
        var Last=0;

        graph_value.push(start,graph_value_invested,Mid,graph_value_of_investment,End,Last);

        /*End Calculation*/
        showchart(graph_value);



      });




        $(".expected_returns").val($("#ReturnsRange").val());

        // Read value on change
        $("#ReturnsRange").on("mousemove touchmove", function(e){

         var expected_returns=$(this).val();

         var number_expected_returns=parseInt(expected_returns).toLocaleString(); 

         $(".expected_returns").val(number_expected_returns);
       });

        /*SIP Calculation*/

        var return_rate=$("#ReturnsRange").val();
        var sip_amount=$("#SIPRange").val();
        var number_of_years= $("#customRange").val();

        var number_of_payments=parseFloat(number_of_years)*12;

        value_invested=parseFloat(sip_amount)*parseFloat(number_of_payments);



        var interest = parseFloat(return_rate) / 100 / 12;


        var value_of_investment=parseFloat(sip_amount)*((Math.pow(1+parseFloat(interest), parseFloat(number_of_payments))-1)/parseFloat(interest)) * (1 + parseFloat(interest));
        function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }
          return val;
        }
        new_value_of_investment=numDifferentiation(value_of_investment);

        new_value_invested=numDifferentiation(value_invested);

        $(".value_invested").html("<b>&#x20B9; " +new_value_invested+"</b>");

        $(".value_of_investment").html("<b>&#x20B9; " +new_value_of_investment+"</b>");
        $(".input_value_of_investment").val(new_value_of_investment);

        function newnumDifferentiation(value) {
          var val = Math.abs(value)
          
          val = (val / 10000000).toFixed(2);
          
          return val;
        }

        var graph_value=[];

        var graph_value_of_investment=newnumDifferentiation(value_of_investment);
        var graph_value_invested=newnumDifferentiation(value_invested);

        var start=0;
        var Mid=0;
        var End=0;
        var Last=0;

        graph_value.push(start,graph_value_invested,Mid,graph_value_of_investment,End,Last);



        /*End Calculation*/

        showchart(graph_value);


      });   

function showchart(graph_value){
  var value_range_new=graph_value;

  $('#bar-chart').remove(); 
  $('#graph-container').append('<canvas id="bar-chart"><canvas>');
  canvas = document.querySelector('#bar-chart');
  var a = ["#EA5455", "#FF9F43", "#7367F0", "#025152", "#1E1E1E"],
  o = ($("#bar-chart")),
  i = (new Chart(o, {
    type: "bar",
    options: {

      elements: {
        rectangle: {
          borderWidth: 1,
          borderSkipped: "left",
        }
      },
      responsive: !0,
      maintainAspectRatio: !1,
      responsiveAnimationDuration: 500,
      legend: {
        display: !1
      },
      scales: {
        xAxes: [{
          display: !0,
          gridLines: {
            color: "#dae1e7"
          },
          scaleLabel: {
            display: !0
          },
          ticks: {
            fontColor: '#000',
            fontSize: 14,
          }
        }],
        yAxes: [{
          display: !0,
          gridLines: {
            color: "#dae1e7"
          },
          scaleLabel: {
            display: false,
            fontSize: 17,
            fontColor: '#000',
            labelString: '*In Cr'
          },
          ticks: {
            stepSize: 0,
            fontSize: 14,
            fontColor: '#000',
            callback: function(value, index, values) {
              return '₹ ' +value+' Cr ';
            }
          }
        }]
      },
      title: {
        display: !0,
        text: ""
      }
    },
    data: {

      labels: ["","Total Investments", "","Value Investments",""],
      datasets: [{
        label: "Investments",
        data: value_range_new,
        backgroundColor: a,
        borderColor: "transparent"
      }]
    }
  }));
}



document.getElementById("customRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*SIP Calculation*/

  var return_rate=$("#ReturnsRange").val();
  var sip_amount=$("#SIPRange").val();
  var number_of_years= this.value;

  var number_of_payments=parseFloat(number_of_years)*12;

  value_invested=parseFloat(sip_amount)*parseFloat(number_of_payments);



  var interest = parseFloat(return_rate) / 100 / 12;


  var value_of_investment=parseFloat(sip_amount)*((Math.pow(1+parseFloat(interest), parseFloat(number_of_payments))-1)/parseFloat(interest)) * (1 + parseFloat(interest));
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }
    return val;
  }
  new_value_of_investment=numDifferentiation(value_of_investment);

  new_value_invested=numDifferentiation(value_invested);

  $(".value_invested").html("<b>&#x20B9; " +new_value_invested+"</b>");

  $(".value_of_investment").html("<b>&#x20B9; " +new_value_of_investment+"</b>");
  $(".input_value_of_investment").val(new_value_of_investment);

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val / 10000000).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_value_of_investment=newnumDifferentiation(value_of_investment);
  var graph_value_invested=newnumDifferentiation(value_invested);

  var start=0;
  var Mid=0;
  var End=0;
  var Last=0;

  graph_value.push(start,graph_value_invested,Mid,graph_value_of_investment,End,Last);

  /*End Calculation*/
  showchart(graph_value);




  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("SIPRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*SIP Calculation*/

  var return_rate=$("#ReturnsRange").val();
  var sip_amount=this.value;
  var number_of_years= $("#customRange").val();


  var number_of_payments=parseFloat(number_of_years)*12;

  value_invested=parseFloat(sip_amount)*parseFloat(number_of_payments);



  var interest = parseFloat(return_rate) / 100 / 12;


  var value_of_investment=parseFloat(sip_amount)*((Math.pow(1+parseFloat(interest), parseFloat(number_of_payments))-1)/parseFloat(interest)) * (1 + parseFloat(interest));
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }
    return val;
  }
  new_value_of_investment=numDifferentiation(value_of_investment);

  new_value_invested=numDifferentiation(value_invested);

  $(".value_invested").html("<b>&#x20B9; " +new_value_invested+"</b>");

  $(".value_of_investment").html("<b>&#x20B9; " +new_value_of_investment+"</b>");
  $(".input_value_of_investment").val(new_value_of_investment);

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val / 10000000).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_value_of_investment=newnumDifferentiation(value_of_investment);
  var graph_value_invested=newnumDifferentiation(value_invested);

  var start=0;
  var Mid=0;
  var End=0;
  var Last=0;

  graph_value.push(start,graph_value_invested,Mid,graph_value_of_investment,End,Last);

  /*End Calculation*/
  showchart(graph_value);


  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("ReturnsRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*SIP Calculation*/

  var return_rate=this.value;
  var number_of_years= $("#customRange").val();
  var sip_amount=$("#SIPRange").val();

  var number_of_payments=parseFloat(number_of_years)*12;

  value_invested=parseFloat(sip_amount)*parseFloat(number_of_payments);



  var interest = parseFloat(return_rate) / 100 / 12;


  var value_of_investment=parseFloat(sip_amount)*((Math.pow(1+parseFloat(interest), parseFloat(number_of_payments))-1)/parseFloat(interest)) * (1 + parseFloat(interest));
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }
    return val;
  }
  new_value_of_investment=numDifferentiation(value_of_investment);

  new_value_invested=numDifferentiation(value_invested);

  $(".value_invested").html("<b>&#x20B9; " +new_value_invested+"</b>");

  $(".value_of_investment").html("<b>&#x20B9; " +new_value_of_investment+"</b>");
  $(".input_value_of_investment").val(new_value_of_investment);

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val / 10000000).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_value_of_investment=newnumDifferentiation(value_of_investment);
  var graph_value_invested=newnumDifferentiation(value_invested);

  var start=0;
  var Mid=0;
  var End=0;
  var Last=0;
  graph_value.push(start,graph_value_invested,Mid,graph_value_of_investment,End,Last);


  /*End Calculation*/
  showchart(graph_value);


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
<script src="{{config('app.baseURL')}}\assets\js\charts\chart.min.js?id=b235b564de9c2c1d61d7"></script>
<!-- <script src="{{config('app.baseURL')}}\assets\js\charts\chart-chartjs.js?id=83b8bb730bf58afa9e23"></script> -->
@endsection