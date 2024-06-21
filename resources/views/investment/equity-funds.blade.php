@extends('layouts.app', ['title' => 'Simplified Investments - Great Options. No Fees. Invest Online in Top Performing Equity Funds'])
@section('keywords', 'top mutual funds, top 5 mutual funds, top mutual funds, top 10 Mutual Funds, SIP Calculator, Mutual Fund Calculator, Mutual Funds, Best Investment Plan, Best SIP Plans, SIP Calculator')
@section('description', 'Simplified Investments - Great Options. No Fees. Dream to make it big in life. Our Investment products can help you build a healthy wealth corpus when held over the long term.')
@section('content')
<style type="text/css">

  .equity_fund{
    width: 30px;
    margin-right: 10px;
  }
  @media (min-width: 768px){
.avatar.avatar-sm {
    width: 3.5rem;
    height: 3.5rem;
}
}
 @media (max-width: 767px){
.mutual-d-flex{
  display: inline-block !important;
}

}
  .plan{
    font-size: 12px;
    font-weight: 500;
  }
   .return{
    font-size: 12px;
    font-weight: 500;
    color: #077273 !important;
  }

  h4.h4{
    color: #000 !important;
  }
  .invest-button{
    color: #077273;
   border: 1px solid #077273 !important;
   border-radius: 0px !important;
  }
  a:hover  .invest-button{

     color: #fff;
     background-color: #077273 !important;
   border: 1px solid #077273 !important;

  }
  .mutual-card-body{
    border: 1px solid #ddd !important;
    padding: 1.25rem !important;
  }

  .active-card{
      border: 1px solid #077273 !important;
  }
  .rating-num.rating-5 {
    background-color: #077273;
}
.rating-num {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    font-size: 12px;
    line-height: 14px;
    font-weight: 600;
    padding: 2px 20px 2px 8px;
    color: #fff;
    background: #ecde03 url(../../assets/img/star.png) no-repeat 80% center;
    background-size: 16px auto;
    margin-top: 2px;
    vertical-align: text-top;
    margin-left: 3px;
    float: right;
    width: 36px;
}

  
  .display-3{
    text-align: left;
    font-size: 34px !important;
    
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
          @if($name=="large-cap")
          <h2 class="display-3">Large Cap Fund</h2>
          <p>These mutual funds select stocks for investment from the largest 100 stocks listed in the Indian markets (highest market capitalization)
          </p>
          @elseif($name=="mid-cap")
          <h2 class="display-3">Mid Cap Fund</h2>
          <p>These are equity funds that invest in the mid-sized companies of India (top 100-250 by size Market Capitalisation)
          </p>
          @elseif($name=="focused")
          <h2 class="display-3">Focused Fund</h2>
          <p>These are equity funds that invest in stocks while keeping portfolio size to maximum 30
          </p>
          @else
          <h2 class="display-3">ELSS Fund</h2>
          <p>These are equity funds that invest in stocks but with the lock-in of 3 years. Tax benefit under Income tax sec 80C
          </p>
          @endif
         
          <div class="mt-4 mt-lg-5">
            <form method="post" action="{{config('app.baseURL')}}/apply-now" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="product_id" class="product_id" value="5">
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





<section class="pt-5 pb-0 text-white">

  <div class="container">

    <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-12">
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="10">
            <div class="card card-body mutual-card-body bg-white min-vh-md-10 hover-box-shadow" id="large-cap">
              <div class="flex-fill">
                <h4 class="h4"><img src="{{config('app.baseURL')}}/assets/img/urban.png" class="equity_fund">Large Cap</h4>

              </div>
              <a href="{{config('app.baseURL')}}/investment/equity-funds/large-cap" class="stretched-link"></a>
            </div>
          </div>
          <div class="col-md-3 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="20">
            <div class="card card-body mutual-card-body bg-white min-vh-md-10 hover-box-shadow" id="mid-cap">
              <div class="flex-fill">
                <h4 class="h4"><img src="{{config('app.baseURL')}}/assets/img/company.png" class="equity_fund">Mid Cap</h4>

              </div>
              <a href="{{config('app.baseURL')}}/investment/equity-funds/mid-cap" class="stretched-link"></a>
            </div>
          </div>
          <div class="col-md-3 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="30">
            <div class="card card-body mutual-card-body bg-white min-vh-md-10 hover-box-shadow" id="focused">
              <div class="flex-fill">
                <h4 class="h4"><img src="{{config('app.baseURL')}}/assets/img/target.png" class="equity_fund">Focused</h4>

              </div>
              <a href="{{config('app.baseURL')}}/investment/equity-funds/focused" class="stretched-link"></a>
            </div>
          </div>
          <div class="col-md-3 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="40">
            <div class="card card-body mutual-card-body bg-white min-vh-md-10 hover-box-shadow" id="elss">
              <div class="flex-fill">
                <h4 class="h4"><img src="{{config('app.baseURL')}}/assets/img/money_grow.png" class="equity_fund">ELSS</h4>

              </div>
              <a href="{{config('app.baseURL')}}/investment/equity-funds/elss" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-light" style="padding: 3.5rem 0;">
  <div class="container">
    <div class="row justify-content-between align-items-start">
      <div class="col-lg-8">

      
       @if($name=="large-cap")
           <div class="lead"><b>Suitable For :</b> Investment horizon should be at least 3-5 years, potential for higher returns with possibility of low/moderate losses.</div>
          </h4>
          @elseif($name=="mid-cap")
           <div class="lead"><b>Suitable For :</b> Investment horizon should be at least 3-5 years, potential for higher returns with possibility of moderate losses.</div>
          @elseif($name=="focused")
          <div class="lead"><b>Suitable For :</b> Investment horizon should be at least 3-5 years, potential for higher returns with possibility of moderate losses.</div>
          @else
          <div class="lead"><b>Suitable For :</b> Investment horizon should be at least 3 years, potential for higher returns with tax benefits but also possibility of moderate losses & 3 year lock-in.</div>
          @endif
       <hr class="my-md-4 my-lg-5">
       
       @foreach($mutual_fund_lists as $mutual_fund_list)
       <div class="mb-3 mb-sm-4">
        <a href="{{$mutual_fund_list->mutual_fund_name}}" data-toggle="modal" data-target="#modal-a2" class="card card-body mutual-card-body hover-box-shadow mutual_fund_list" id="mutual_fund_list" tabindex="{{$mutual_fund_list->mutual_fund_list_id}}" >
        
          
         <!--  <p>Maecenas vestibulum sed erat eget blandit.</p> -->
          <div class="align-items-center">
             <span class="rating-num rating-5" style="float: right;">{{$mutual_fund_list->rating}}</span>
             <h6>{{$mutual_fund_list->mutual_fund_name}}</h6>
              <div class="d-flex mutual-d-flex">
            <img src="{{config('app.baseURL')}}/storage/app/{{$mutual_fund_list->logo}}" alt="" class="avatar avatar-sm">
            <div class="text-small ml-5">
             
              <div>
                <p>Plan <br><span class="plan">Regular</span>
                </p>
                
              </div>
             
            </div>
            <div class="text-small ml-5">
            
              <div>
                <p>AUM ( Cr )<br><span class="plan">{{$mutual_fund_list->aum_cr}} </span></p>
              </div>
             
            </div>
            <div class="text-small ml-5">
            
              <div>
                <p>Return ( 1 Yr )<br><span class="return"> {{$mutual_fund_list->one_year}}%</span></p>
              </div>
             
            </div>
            <div class="text-small ml-5">
            
              <div>
                <p>Return ( 3 Yr )<br><span class="return"> {{$mutual_fund_list->three_year}}%</span></p>
              </div>
             
            </div>
             <div class="text-small ml-5">
           
              <div>
                <p>Return ( 5 Yr )<br><span class="return"> {{$mutual_fund_list->five_year}}%</span></p>
              </div>
             
            </div>
          </div>

           <button class="btn btn-sm btn-default invest-button" type="button" style="float: right;">

                  <span>Invest</span>
                </button>
           
          </div>

        </a>
      </div>
      @endforeach
     
     
    </div>
    <div class="col sticky-lg-top">
      <div class="pl-xl-4">
        <ul class="list-group">
          <li class="list-group-item">
            <h6 class="mb-2">Email Us</h6>
            <a href="mailto:contact@finkompas.com">contact@finkompas.com</a>
          </li>
          <li class="list-group-item">
            <h6 class="mb-2">Call Us</h6>
            <a href="tel:8451005808">845 100 5808</a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</div>
</section>


<div class="modal fade" id="modal-a2" tabindex="-1" role="dialog" aria-labelledby="modal-a1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title equity_funds"  style="text-align: center;color:#000;" id="equity_funds">Equity Fund</h5>
               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #000;">×</span>
                </button>
            </div>
            <div class="modal-body" style="background: #fff;">
              <p style="color:#555555; font-weight:400;font-size: 14px;">Please share your contact details to get an offer</p>
                <div  class="form-section">

                    <form class="contact-form"  method="post" action="{{config('app.baseURL')}}/apply-now" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="mutual_fund_list_id" class="mutual_fund_list_id" value="">
                         <input class="form-control product-form" type="number" name="phone" style="margin-bottom: 5px;" placeholder="Phone" required="" />
                        <input class="form-control product-form" type="email" name="email" style="margin-bottom: 5px;" placeholder="Email (Optional)"  />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" value="submit" class="site-button">Request An Offer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function(){

    var name="{{$name}}";
    
    if (name=="large-cap") {
    $('#large-cap').addClass('active-card');
  }else if (name=="mid-cap") {
    $('#mid-cap').addClass('active-card');
  }else if (name=="focused") {
    $('#focused').addClass('active-card');
  }else{
      $('#elss').addClass('active-card');
  }

  });

  $(".mutual_fund_list").click( function( event ) {
   
   var mutual_fund_list = $(this).attr('tabindex');

   var mutual_fund_name = $(this).attr('href');
  
  $('.mutual_fund_list_id').val(mutual_fund_list);
  $('.equity_funds').html(mutual_fund_name);

  });

</script>
@endsection