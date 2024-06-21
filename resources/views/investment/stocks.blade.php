@extends('layouts.app', ['title' => 'Finkompas - offers the lowest, cheapest brokerage rates for equity and mutual funds'])
@section('keywords', 'share market, stock market, share market live, stock market live, indian stock market, indian share market, share market live chart, stock market live india, online share market, online stock market, Angel Broking')
@section('description', 'Invest in Stocks and Mutual Funds - Great Options, Great Returns. Visit now!')
@section('content')
<style type="text/css">

  iframe{
    height: 500px !important;
  }
  .header-input-pms{
      border:1px solid #111;
  }

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
          
          <h2 class="display-3">Stocks</h2>
         
          <h4 class="display-5">Investing in equity helps to beat the inflation by delivering a higher rate of return
          </h4>
          <span class="show-case-text" style="font-size: 18px;" data-typed-text="" data-loop="true" data-type-speed="40" data-strings='["Great Options. Great Returns."]'></span>
          
          <div class="mt-4 mt-lg-5">
            <form method="post" action="{{config('app.baseURL')}}/apply-now" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="product_id" class="product_id" value="1">
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


<!-- <iframe id="moneywiz_widget" name="moneywiz_widget" src="//money.rediff.com/widget/moneywizwidget" scrolling="yes" frameborder="0" marginHeight="0" marginWidth="0" style="width:100%; height:100%;"></iframe> -->

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_bedd0"></div>
  <!-- <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span class="blue-text">SENSEX Chart</span></a> by FINKOMPAS</div> -->
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
 "autosize": true,
  "symbol": "BSE:SENSEX",
  "interval": "W",
  "timezone": "Asia/Kolkata",
  "theme": "dark",
  "style": "3",
  "locale": "in",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "details": true,
  "container_id": "tradingview_bedd0"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->


  </div>
</section>

 <section class="pb-0">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
          <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 order-lg-2" data-aos="fade-right">
            <h2 class="h1">Stocks</h2>
            <p class="lead term-text-justify">Equity Investment have an edge over simply saving money in your bank account. Investing in equity markets helps to beat the inflationary pressure by delivering a higher rate of return and increasing the value of principal amount invested. Capital Gains and periodic dividend income is the revenue source from equity investments.</p>
            <ul>
              <li class="lead term-text-justify">Create wealth over time</li>
              <li class="lead term-text-justify">Protects against inflation</li>
              <li class="lead term-text-justify">Any time liquidity</li>

              <li class="lead term-text-justify">Trade across exchanges</li>
              <li class="lead term-text-justify">Dividends and capital appreciation</li>
              <li class="lead term-text-justify">Track equity investments in real-time</li>
            </ul>

            <div class="mt-4 mt-lg-5">
            <form method="post" action="{{config('app.baseURL')}}/apply-now" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="product_id" class="product_id" value="1">
              <div class="d-flex flex-column flex-sm-row form-group">
                <input class="form-control mr-sm-2 mb-2 mb-sm-0 h-100 header-input col-md-6" name="phone" placeholder="Phone Number" type="number" required="">
                <button class="btn btn-sm btn-primary flex-shrink-0 btn-loading header-button" type="submit" >

                  <span>Invest Now</span>
                </button>
              </div>


            </form>

          </div>
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1" data-aos="fade-left">
            <img src="{{config('app.baseURL')}}/assets/img/stocks.jpg" alt="Image" class="img-fluid term-fluid rounded shadow" style="height: 500px;">

          </div>
        </div>
      </div>
    </section>

    <section class="pt-20 o-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
        
        <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
          <div data-aos="fade-in" data-aos-offset="250">
            <h2 class="h2">Why choose us for stock/equity investments?</h2>
           
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Research based equity investment plans</h6>
              </div>
            </div>
          </div>

          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Leverage products</h6>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Leverage products</h6>
              </div>
            </div>
          </div>
         
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Profile based equity trading platform</h6>
              </div>
            </div>
          </div>


        </div>
 <div class="col-md-9 col-lg-6 col-xl-5" data-aos="fade-in" data-aos-offset="250">
          <img src="{{config('app.baseURL')}}/assets/img/stock-market.jpg" alt="Image" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section>

    <section class="pb-0">
    <div class="container">
      <div class="row section-title justify-content-center text-center">
        <div class="col-md-11 col-lg-11 col-xl-11">
            <h2 class="h1">Portfolio Management Services (PMS)</h2>
          <p class="lead term-text-justify">Portfolio Management Service offers high quality professional portfolio management of your PMS investments with an aim to deliver consistent better returns. PMS relieves you from all monitoring hassles with benefits like regular reviews, strong risk management flexibility, and makes it an ideal PMS investment avenue for high net worth investors.</p>
           <ul>
              <li class="lead term-text-justify">Highly experienced fund managers</li>
              <li class="lead term-text-justify">Strong risk management</li>
              <li class="lead term-text-justify">Diversified portfolio to lower risk</li>
              <li class="lead term-text-justify">Quality stocks</li>
            </ul>
      </div>
    </div>

    <div class="row justify-content-center mt-4 mt-md-5">
      <div class="col-auto">
        <div class="mt-4 mt-lg-5">
            <form method="post" action="{{config('app.baseURL')}}/apply-now" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="product_id" class="product_id" value="3">
              <div class="d-flex flex-column flex-sm-row form-group">
                <input class="form-control mr-sm-2 mb-2 mb-sm-0 h-100 header-input header-input-pms col-md-10" name="phone" placeholder="Phone Number" type="number" required="">
                <button class="btn btn-sm btn-primary flex-shrink-0 btn-loading header-button" type="submit" >

                  <span>Invest In PMS</span>
                </button>
              </div>


            </form>

          </div>
      </div>
    </div>
  </div>
</section>



        <section class="pt-20 o-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-around text-center text-lg-left">
        
        <div class="col-md-9 col-lg-6 col-xl-6 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
          <div data-aos="fade-in" data-aos-offset="250">
            <h2 class="h2">Why choose us for Portfolio Management Services (PMS)?</h2>
           
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Multiple product offerings</h6>
              </div>
            </div>
          </div>

          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Switch strategy</h6>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Monthly performance report</h6>
              </div>
            </div>
          </div>
         
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
            <div class="mb-3 mr-4 ml-lg-0 mr-lg-5" data-aos="fade-left" data-aos-delay="100">
              <div class="d-flex align-items-center">
                <div class="rounded-circle bg-success-alt">
                  <img src="{{config('app.baseURL')}}/assets/img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
                </div>
                <h6 class="mb-0 ml-3">Local client servicing across India</h6>
              </div>
            </div>
          </div>


        </div>
 <div class="col-md-9 col-lg-6 col-xl-5" data-aos="fade-in" data-aos-offset="250">
          <img src="{{config('app.baseURL')}}/assets/img/pms.jpg" alt="Image" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section>


  <section class="section-padding">
  <div class="container">
    <div class="row section-title justify-content-center">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <h3 class="h1">EQUITY TRADING FAQs</h3>
        <!-- <div class="lead text-center">Quickly find out if we've addressed your query</div> -->
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div id="faq-accordion">
          <div class="card mb-2 mb-md-3">
            <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">What is Equity?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-1" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
               Equity is a stock or a share of a company. When an investor buys a company’s share, or equity shares, they gain ownership rights of that company.



              </div>
            </div>
          </div>
          <div class="card mb-2 mb-md-3">
            <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">How can i start equity trading/investing?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-2" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
               To start equity trading or investing in the stock market, you will need a bank account, trading account, demat account and a stock broking account. Once you have these in place, you will need to brush up your research skills.


             </div>
           </div>
         </div>

          <div class="card mb-2 mb-md-3">
            <a href="#accordion-3" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">What are the benefits of stock/equity investing?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-3" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
              One of the major benefits of investing in the equity market is the chance to grow your money. There are many other benefits of investing money in equity market like diversification, liquidity, best way to stay ahead of inflation to name a few.


             </div>
           </div>
         </div>

          <div class="card mb-2 mb-md-3">
            <a href="#accordion-4" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">Can I trade/invest using phone?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-4" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
              As a retail broking customer you can trade/invest in Equity Markets, Mutual Funds, IPOs, Bonds, and Insurance through us. Trade on BSE, NSE through the Web, Mobile, Desktop or Call-n-trade


             </div>
           </div>
         </div>

         <div class="card mb-2 mb-md-3">
            <a href="#accordion-5" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">How do I place my orders?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-5" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
              When an investor places an order to buy or sell a stock, there are two fundamental execution options: place the order "at market" or "at limit." Market orders are transactions meant to execute as quickly as possible at the present or market price. Conversely, a limit order sets the maximum or minimum price at which you are willing to buy or sell.


             </div>
           </div>
         </div>


       </div>

     </div>
   </div>

 </div>
</section>

  <section class="section-padding">
  <div class="container">
    <div class="row section-title justify-content-center">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <h3 class="h1">PORTFOLIO MANAGEMENT SERVICES FAQs</h3>
        <!-- <div class="lead text-center">Quickly find out if we've addressed your query</div> -->
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div id="faq-accordion">
          <div class="card mb-2 mb-md-3">
            <a href="#accordion-6" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">How reliable are Financial Portfolio Management Services?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-6" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
               Financial Portfolio Management Services is very transparent as live portfolio is made available on the website along with regular performance and holding statements. On basis of stock selection, fund managers are able to cherry pick and hold on to good quality stocks as they generally get away from the unwanted market buzz and tips.



              </div>
            </div>
          </div>
          <div class="card mb-2 mb-md-3">
            <a href="#accordion-7" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">What is PMS Equity?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-7" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
              Portfolios that invest only in equity.

             </div>
           </div>
         </div>

          <div class="card mb-2 mb-md-3">
            <a href="#accordion-8" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">Who are the ideal investors for such products?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-8" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
             HNI investors aiming for capital appreciation and generating wealth with a 3-5 years horizon should go for the financial portfolio management services. You can also go for mini PMS wherein lower funds can be invested.


             </div>
           </div>
         </div>

          <div class="card mb-2 mb-md-3">
            <a href="#accordion-9" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">Can I trade/invest using phone?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-9" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
              As a retail broking customer you can trade/invest in Equity Markets, Mutual Funds, IPOs, Bonds, and Insurance through us. Trade on BSE, NSE through the Web, Mobile, Desktop or Call-n-trade


             </div>
           </div>
         </div>

         <div class="card mb-2 mb-md-3">
            <a href="#accordion-10" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">Types of PMS?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-10" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
             Discretionary and non-discretionary.
             </div>
           </div>
         </div>

          <div class="card mb-2 mb-md-3">
            <a href="#accordion-11" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
              <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0 mr-2">What’s the key difference between two types?</h6>
                <img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-caret-right.svg" alt="Caret Right" class="icon icon-sm" data-inject-svg="">
              </div>
            </a>
            <div class="collapse" id="accordion-11" data-parent="#faq-accordion">
              <div class="px-3 px-md-4 pb-3 pb-md-4">
            In discretionary portfolio management service, the Portfolio Manager individually and independently manages the funds and securities of each client in accordance with the needs of the client. <br>
Under the non-discretionary portfolio management service, the Portfolio Manager manages the funds in accordance with the directions of the client. 

             </div>
           </div>
         </div>


       </div>

     </div>
   </div>

 </div>
</section>

<script>
  $(document).ready(function(){

  });

</script>
@endsection