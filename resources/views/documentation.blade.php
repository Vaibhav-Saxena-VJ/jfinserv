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
.check{
    height: 25px;
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
.p-md-3 {
    padding: 0rem!important;
}
.faq-widget .faq-header h4 {
font-size: 21px;
line-height: 8px !important;
}
</style>

<section class="banner-area-2 pt-145" style="background-image: url(http://localhost/finance/images/image3.jpg);">
            <div class="container">
                <div class="row align-items-center pt-130 pb-140">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-content py-5">
                            <div class="section-title text-start">
                                <span class="short-title wow fadeInUp" style="font-size: 20px;">Jkfinserve Referral Program</span>
                                <h1 class="wow fadeInUp mb-0" data-wow-delay='0.2s' style="color: white;">Invite friends.
Make money.</h1>
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


<section class="bg-light o-hidden">
  <div class="container">
    <div class="row section-title justify-content-center text-center">
      <div class="col-md-10 col-lg-9 col-xl-7">
        <h2 class="display-4 text-top">Documents Required for Home Loan</h2>
        <p>Getting a home loan from Jkfinserve is easy and quick. We keep the paperwork and other formalities to a minimum. Proof of your identity, address and income are some of the key documents that are required to be submitted for Jkfinserve home loan.</p></br>

 

<p>Moreover, if you are an existing customer of Jkfinserve, you can now enjoy the benefit of reduced documentation.</p>
<h1 style="color: #0050b2">Documents</h1>
      </div>
    </div>
    <div class="row align-items-center justify-content-around">
      <!-- <div class="col-md-9 col-lg-5" data-aos="fade-in">
        <img src="{{asset('images\refer-earn1.jpg')}}" alt="Image" class="img-fluid rounded shadow">
        <img src="{{asset('assets\img\rupee.png')}}" alt="Image" class="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top left shadow-lg mt-5 ml-n5 ml-lg-n3 ml-xl-n5 d-none d-md-block" data-jarallax-element="-20 0">
      </div> -->
      <div class="col-md-9 col-lg-6 col-xl-5 mt-4 mt-md-5 mt-lg-0">
        <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Application form with photograph duly signed.</h6>
                                </div>
                            </div>
                            <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Identity, residence and age proof.</h6>
                                </div>
                            </div>
                            <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Last 6 months bank statements/Last 3 months Salary-slips.</h6>
                                </div>
                            </div>
                            <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Processing fee cheque.</h6>
                                </div>
                            </div>
                            <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Form 16 / Income Tax Returns.</h6>
                                </div>
                            </div>
                            <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Education qualification certificate and Proof of business existence.</h6>
                                </div>
                            </div>
                            <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Business profile.</h6>
                                </div>
                            </div>
                            <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Last 3 years Income Tax Returns with computation of Income.</h6>
                                </div>
                            </div>
                            <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 rounded p-2 pr-3 p-md-3 pr-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-success-alt">
                                        <img src="{{asset('images\check.png')}}" alt="Binoculars icon" class="m-2 icon icon-xs check" data-inject-svg="">
                                    </div>
                                    <h6 class="mb-0 ml-3">Last 3 years CA Certified / Audited Balance Sheet and Profit & Loss Account.</h6>
                                </div>
                            </div>


      </div>
    </div>
  </div>
</section>



<section class="faq-area pt-125 pb-200">
            <div class="container">
                <div class="section-title text-start">
                    <h2 class="mb-0 wow fadeInUp">Frequently asked questions</h2>
                </div>

                <div class="row pt-30 align-items-end">
                    <div class="col-lg-7 col-md-8">
                        <div class="faq-widget">
                            <div class="accordion" id="accordionExample">
                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingOne">
                                            <h4 class="mb-0" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                 When can you apply for a loan?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>
You can put in your application for a Home Loan with Jkfinserve Housing Finance Ltd. no sooner you decide to buy a home. The loan amount would be sanctioned or approved, based on your repayment capability.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingTwo">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                How much can I Finance?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingThree">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                Do you offering refinancing ?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingFour">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseFour">
                                                Can I do all of my banking with you?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp" data-wow-delay="0.9s">
                                    <div class="w-100">
                                        <div class="faq-header" id="headingFive">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="true"
                                                aria-controls="collapseFive">
                                                When should i apply?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offset-lg-1 mt-4 mt-md-0 ps-lg-5">
                        <div class="faq-img">
                            <img class="img-fluid" src="assets/img/faq/illustration.png" alt="faq-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>





@endsection