@extends('layouts.app', ['title' => 'Simplifying Your Financial Life. No Fees. Low Rates. Great Benefits. Apply for loan in 30 seconds. Get instant quote for Top Performing Equity Funds'])
@section('keywords', 'rate of interest hdfc bank, hdfc bank personal, interest rate icici bank, hdfc customer care home loan, sbi interest rates for car loan, personal loan interest in sbi, sbi home loans interest rates, axis mutual funds login, hdfc equity funds, axis long term equity growth fund, sip calculator')
@section('description', 'Simplified Loans & Investments. Get money when you need it with our loan products. Invest in Top Performing Equity Funds.')
@section('content')
<style type="text/css">
  .display-3{
    text-align: left;
  }
  .bg-secondary{
    background-color: #000 !important;
    color: #fff;
  }
  .form-control{
    border: 1px solid #b1b4b9;
  }
  .custom-select {
    border: 1px solid #b1b4b9;
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
  .contact-width{
    width: 800px;
  }

}
.contact-width{
  margin-bottom: 4%;
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
  <section class="text-white section-padding">
    <div class="container">
      <div class="row ">
        <div class="col-md-9 col-lg-8 col-xl-7">
          <h2 class="display-3">Get Started</h2>
          <h4 class="display-5">Finkompas is secure and private. 
          </h4>

          <span class="show-case-text" style="font-size: 18px;" data-typed-text="" data-loop="true" data-type-speed="40" data-strings='["Great Options. No Fees."]'></span>
        </div>
      </div>
    </div>
       <!--  <div class="position-absolute w-50 h-100 top left" data-jarallax-element="100 50">
          <div class="blob blob-4 bg-gradient w-100 h-100 top left"></div>
        </div> -->

      </section>
    </div>

    <section class="bg-light section-padding">
      <div class="container">
       <center><img src="{{asset('assets\img\very-happy.jpg')}}" alt="FinKompas" class="img-fluid contact-width"></center>
       <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card card-body shadow-sm h-100">
            <div class="display-4 text-primary mb-3" data-countup="" data-start="" data-end="96" data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="%" data-easing=""></div>
            <div>Average satisfaction rating received.</div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card card-body shadow-sm h-100">
            <div class="display-4 text-primary mb-3" data-countup="" data-start="20" data-end="24" data-duration="1" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="/7" data-easing="false"></div>
            <div>Our support experts are ready to assist anytime</div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card card-body shadow-sm h-100">
            <div class="display-4 text-primary mb-3" data-countup="" data-start="" data-end="100" data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="+" data-easing=""></div>
            <div>Our Happy Customers</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="pb-0 section-padding">
    <div class="container">
      <div class="row section-title justify-content-center text-center">
        <div class="col-md-10 col-lg-9 col-xl-8">
          <h3 class="display-4">Apply Now</h3>
          <div class="lead text-center"><b>S</b>tocks | &nbsp;<b>Mutual</b> Funds | &nbsp;<b>L</b>oans</div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-11 col-lg-10 col-xl-9">
          <form action="{{config('app.baseURL')}}/get-started" method="post">
            {{csrf_field()}}
            <div class="form-row">
              <div class="col-sm">
                <div class="form-group">
                  <label for="contact-name">Name</label>
                  <input type="text" name="name" class="form-control" id="contact-name" required="" placeholder="Name">
                  <div class="invalid-feedback">
                    Please type your name.
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="contact-email">Email Address</label>
                  <input type="email" name="email" class="form-control" id="contact-email" placeholder="you@xyz.com" required="">
                  <div class="invalid-feedback">
                    Please provide your email address.
                  </div>
                </div>
              </div>
            </div>

            <div class="form-row">

             <div class="col-sm">
              <div class="form-group">
                <label for="planner-industry">Select Products</label>
                <div class="position-relative">
                  <select name="product_id" class="custom-select" id="planner-industry" required="">
                    <option selected="" value="">Select an option</option>
                    <option value="1">Stocks</option>
                    <option value="2">Mutual Funds</option>
                    <option value="3">PMS</option>
                    <option value="4">Home Loan</option>
                    <option value="5">Personal Loan</option>
                    <option value="6">Business Loan</option>
                    <option value="7">Gold Loan</option>
                    <option value="8">Term Insurance</option>
                    <option value="9">Health Insurance</option>


                  </select>
                  <img src="{{asset('assets\img\icons\interface\icon-caret-down.svg')}}" alt="Arrow Down" class="icon icon-sm">
                  <div class="invalid-feedback">
                    Please select a Product.
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="contact-phone">Phone </label>
                <input type="tel" name="phone" class="form-control" id="contact-phone" required="" placeholder="Contact Number">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="contact-message">Message (optional)</label>
            <textarea id="contact-message" name="message" rows="5" class="form-control"  placeholder="Message (Optional)"></textarea>

          </div>
              <!-- <div class="form-row">
                <div class="col-12">
                  <div data-recaptcha="" data-sitekey="6Lfmz4gUAAAAAEau9IKfGA7leOKYAiRhv-3WA3gq"></div>
                </div>
              </div> -->
              <div class="form-row">
                <div class="col">

                  <div class="d-flex justify-content-center">
                    <button class="btn btn-md btn-primary btn-loading" type="submit" data-loading-text="Sending">
                      <!-- Icon for loading animation -->

                      <span>Apply</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-auto" data-aos="fade-up">
            <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
              <h5>Email us</h5>
              <a href="mailto:contact@finkompas.com" class="lead">contact@finkompas.com</a>
            </div>
          </div>
          <div class="col-md-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
              <h5>Our Address</h5>
              <address>
                <p>Hiranandani Gardens,</p>
                <p>Mumbai</p>
                <p>Maharashtra</p>

              </address>
              <a href="#">Get Directions</a>
            </div>
          </div>
          <div class="col-md-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
              <h5>Call any time</h5>
              <a href="tel:8451005808" class="lead">845 100 5808</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    @endsection