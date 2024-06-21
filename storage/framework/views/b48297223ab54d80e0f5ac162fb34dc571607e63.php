
<?php $__env->startSection('keywords', 'loan, loans, home loan, personal loan, current loan rates india, loan calculator india, best loan rates, cheapest loans india, instant loans, apply for home loan, instant home loan, instant personal loan, apply for personal loan'); ?>
<?php $__env->startSection('description', 'Buying your dream home, vacation, higher education or any Emergency, get money when you it with our loan products.'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">

  #customRange{
    background:linear-gradient(to right, #077273 0%, #077273 66.7%, #fff 66.7%, white 100%)
  }
  #InterestRange{
    background:linear-gradient(to right, #077273 0%, #077273 42.108%, #fff 42.108%, white 100%)
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



@media  only screen and (min-width: 800px) and (max-width: 1700px){

 canvas#simple-doughnut-chart{
  height: 400px !important;
  width: 700px !important;
}

}

@media  only screen and (min-width: 800px){

  
  .bar-chart-padding{
    padding: 6rem 0rem 2rem 0rem;
  }

}
@media  only screen and (max-width: 767px){
  .container{
    overflow: hidden;
  }
  canvas#simple-doughnut-chart{
    height: 350px !important;
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
  <section class="text-white pb-0 section-padding pt-165">
    <div class="container">
      <div class="row ">
        <div class="col-md-9 col-lg-8 col-xl-7">
          <h2 class="display-3">Personal Loan</h2>
          <h4 class="display-5">Get money when you need it<br>with our personal loans. 
          </h4>
          <span class="show-case-text" style="font-size: 18px;" data-typed-text="" data-loop="true" data-type-speed="40" data-strings='["Low Rates. Great Offers."]'></span>
          <div class="mt-4 mt-lg-5">
            <form method="post" action="<?php echo e(config('app.baseURL')); ?>/apply-now" enctype='multipart/form-data'>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="product_id" class="product_id" value="5">
                <div class="d-flex flex-column flex-sm-row form-group">
                    <input class="form-control mr-sm-2 mb-2 mb-sm-0 h-100 header-input col-md-6" name="phone" placeholder="Phone Number" type="number" required="">
                    <button class="btn btn-sm btn-primary flex-shrink-0 btn-loading header-button" type="submit" ><span>Apply Now</span></button>
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
          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-in">
            <h2 class="h1">Personal Loan</h2>
            <p class="lead term-text-justify">Vacation, wedding, higher education or any emergency, irrespective of what your personal financial goals are, Finkompas is happy to help you avail Personal Loans for every need.</p>
            <p class="lead term-text-justify">A Personal Loan helps you meet your diverse financial needs; you can avail of loan up to Rs 25 lakh (depends on financing bank/institution) and meet the personal exigency that can crop up anytime in life.</p>
            <p class="lead term-text-justify">Finkompas has tied up with top banks and financial institutions to ensure you get a convenient experience. </p>
            
            <!-- <a href="#calculator" class="lead">Calculator</a> -->
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-in">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/personal-loan.jpg" alt="Image" class="img-fluid term-fluid rounded shadow">

          </div>
        </div>
      </div>
    </section>
        <section>
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="h1">A Personal Loan can be used for</h3>
            <div class="lead text-center">A Personal Loan is a smart way to borrow, no matter the occasion.</div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="100">
            <div class="mx-xl-4">
              <img src="<?php echo e(asset('assets\img\money.png')); ?>" alt="Debt Consolidation" class="mb-4">
              <h5>Debt Consolidation</h5>
             
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="mx-xl-4">
              <img src="<?php echo e(asset('assets\img\plane.png')); ?>" alt="Vacation or Trips" class="mb-4">
              <h5>Vacation or Trips</h5>
             
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="300">
            <div class="mx-xl-4">
              <img src="<?php echo e(asset('assets\img\home-repair.png')); ?>" alt="Home Improvements" class="mb-4">
              <h5>Home Improvements</h5>
             
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="400">
            <div class="mx-xl-4">
              <img src="<?php echo e(asset('assets\img\checked.png')); ?>" alt="Moving expenses" class="mb-4">
              <h5>Moving expenses</h5>
             
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="500">
            <div class="mx-xl-4">
              <img src="<?php echo e(asset('assets\img\heart.png')); ?>" alt="Unexpected Expenses" class="mb-4">
              <h5>Emergency Expenses</h5>
            
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="600">
            <div class="mx-xl-4">
              <img src="<?php echo e(asset('assets\img\wedding.png')); ?>" alt="Weddings" class="mb-4">
              <h5>Weddings</h5>
            
            </div>
          </div>
        </div>
      </div>
    </section>



<section class="p-0 bg-light row no-gutters" id="PersonalLoanCalculator">
  <div class="col-lg-6 col-xl-6" style="padding: 1.5rem;" >
    <div class="min-vh-30 h-100 w-100">
      <div class="map-marker">
        <div class="info-window" data-max-width="400">

          <div class="container">
            <div class="row justify-content-center">
              <div class="col col-md-10">
                <h3 class="h2">Personal Loan EMI Calculator
                </h3>
                <p class="lead">
                 Dreaming of a vacation, a perfect wedding, home renovation or a latest launched gadget, you need not wait to realize your dreams. <br>
                 <b>Finkompas</b>, goes extra mile to ensure our valued customers get super fast response and a convenient borrowing experience.

               </p>
               <div class="row">
                <div class="card card-body shadow text-left text-dark" style="padding: 1.50rem;">
                  <form method="post" action="<?php echo e(config('app.baseURL')); ?>/loans/loan-enquiry/4" enctype='multipart/form-data'>
                   <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">



                  <label for="LoanRange" class="finance-details">Loan Amount</label>
                  <div class="row finance-details">
                    <div class="col-lg-9 form-group">
                      <input type="range" class="custom-range" min="50000" step="1000" value="50000" max="2000000" id="LoanRange"><span class="labels">50 K</span><span class="labels" style="float: right;">20 L</span></div> <div class="col-lg-3 form-group"><input type="number" name="loan_amount" min="50000" max="2000000" onkeypress="return validateFloatKeyPress(this,event);" class="loan-amount form-control range-slider-form"></div>
                    </div>


                    <label for="InterestRange" class="finance-details">Interest Rate (p.a)</label>
                    <div class="row finance-details">
                      <div class="col-lg-9 form-group">
                        <input type="range" class="custom-range" min="1" step="1" value="9" max="20" id="InterestRange"><span class="labels">1%</span><span class="labels" style="float: right;">20%</span></div> <div class="col-lg-3 form-group"><input type="text" name="interest_rate" class="interest_rate form-control range-slider-form" readonly=""></div>
                      </div>

                      <label for="customRange" class="finance-details">Loan Term</label>
                      <div class="row finance-details">
                        <div class="col-lg-9 form-group">
                          <input type="range" class="custom-range" min="1" step="1" value="5" max="7" id="customRange"><span class="labels">1 Year</span><span class="labels" style="float: right;">7 Year</span></div> <div class="col-lg-3 form-group"><input type="text" name="loan_term" class="investment form-control range-slider-form" readonly=""></div>
                        </div>

                        <div class="col-lg-12  finance-details">
                          <p class="lead">Loan Amount <span class="value_loan_amount"><b>&#x20B9; 2.00 Cr</b></span></p>
                          <p class="lead">Monthly EMI <span class="value_of_emi"><b>&#x20B9; 2.00 Cr</b></span></p>
                          <input type="hidden" name="monthly_emi" class="monthly_emi" value="">
                          
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
                            <label class="custom-control-label" for="sign-up-agree">I agree to the <a target="_blank" href="<?php echo e(config('app.baseURL')); ?>/terms-condition">Terms &amp; Conditions</a>
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
                <canvas id="simple-doughnut-chart"></canvas>
              </div>


            </div>
          </div>
          <div class="row">
            <div class="col-lg-7" >
            </div>
            <div class="col-lg-5" >
              <div class="input-color">
                <p class="lead" style="font-size: 0.8rem;margin-left: 26px;margin-right: 1%;">Principal Amount: <span class="total_loan_amount"><b>&#x20B9; 2.00 Cr</b></span></p>
                <div class="color-box" style="background-color: #025152;"></div>
                <!-- Replace "#FF850A" to change the color -->
              </div>


              <div class="input-color" >
                <p class="lead" style="font-size: 0.8rem;margin-left: 26px;">Interest Payable <span class="total_interest_paid"><b>&#x20B9; 2.00 Cr</b></span></p>
                <div class="color-box" style="background-color: #FF9F43;"></div>
                <!-- Replace "#FF850A" to change the color -->
              </div>

              <p class="lead" style="font-size: 0.8rem;margin-right: 1%;">Total Payable Amount <span class="total_payable_amount"><b>&#x20B9; 2.00 Cr</b></span></p>
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
                    <img src="<?php echo e(config('app.baseURL')); ?>/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
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
                    <img src="<?php echo e(config('app.baseURL')); ?>/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
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
                    <img src="<?php echo e(config('app.baseURL')); ?>/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
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



          if (annual>2000000) {
            $.notify("Amount Should be less than 20 Lac");
            return false;
          }
          if (annual<50000) {
            // $.notify("Amount Should be greater than 50k");
            return false;
          }
          if (annual=="") {
            var annual=0;
            $.notify("Please Enter Loan Amount");
            return false;
          }
          if (annual==2000000) {
            var percentage= 100*(parseFloat(annual)-50000)/(2000000-50000);
          }else{
           var percentage= 100*(parseFloat(annual)-50000)/(2000000-50000)+0.5;
         }



         $("#LoanRange").css('background','linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)')


         $("#LoanRange").val(annual);

         /*Personal Loan Calculation*/

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




        $(".interest_rate").val($("#InterestRange").val());

        // Read value on change
        $("#InterestRange").on("mousemove touchmove", function(e){

         var interest_rate=$(this).val();

         var number_interest_rate=parseInt(interest_rate).toLocaleString(); 

         $(".interest_rate").val(number_interest_rate);
       });

        /*Personal Loan Calculation*/

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

$('#simple-doughnut-chart').remove(); 
  $('#graph-container').append('<canvas id="simple-doughnut-chart"><canvas>');
  canvas = document.querySelector('#simple-doughnut-chart');
  
  var a = ["#025152", "#FF9F43"],
  o = ($("#simple-doughnut-chart")),
  i = (new Chart(o, {
    type: "doughnut",
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

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
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

  this.style.background = 'linear-gradient(to right, #077273 0%, #077273 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("InterestRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*Personal Loan Calculation*/

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
<script src="<?php echo e(config('app.baseURL')); ?>\assets\js\charts\chart.min.js?id=b235b564de9c2c1d61d7"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<script src="<?php echo e(config('app.baseURL')); ?>\assets\js\charts\chart-chartjs.js?id=83b8bb730bf58afa9e23"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => 'Simplified Loans - Low Rates. Great Offers. Apply for Personal loan in 30 seconds'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u838013575/domains/jfinserv.com/public_html/resources/views/loan/personal-loan.blade.php ENDPATH**/ ?>