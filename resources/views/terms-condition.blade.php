@extends('layouts.app')
@section('content')

<style type="text/css">
@media (min-width: 1312px){
  .visible-lg {
    display: block!important;
}

}
.jumbotron .jumbo-container {
    z-index: 2;
}
.jumbotron .jumbo-content {
    position: relative;
}
.jumbotron .jumbo-content-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
}
.jumbotron .jumbo-image {
    background-repeat: no-repeat;
    background-position: top;
    background-size: cover;
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
}
.jumbo-content-wrap {
    position: relative;
    z-index: 2;
}
.columns-wrapper {
    position: relative;
}
.columns-wrapper .bg-opacity {
    width: 100%;
    height: 100%;
    position: absolute;
    display: block;
}
.bg-default {
    background-color: transparent;
}
.column-container-component .container {
    position: relative;
}
.ad-graphic.container-fluid, .ad-graphic.row, .columns-wrapper.container-fluid, .columns-wrapper.row {
    background-repeat: no-repeat;
}
.columns-wrapper {
    position: relative;
}

  @media (min-width: 768px){


.jumbotron {
    background-position: top;
    background-size: cover;
    background-repeat: no-repeat;
}
.jumbotron .jumbo-container {
    background-image: none!important;
}
  }
  .jumbotron:after, .jumbotron:before {
    content: " ";
    display: table;
}
.jumbotron {
    color: inherit;
    overflow: hidden;
    position: relative;
}
.bg-brand-sales-light {
    background-color: #04e1cb;
}
    
    .navbar-expand-lg{
  background:#fff;
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link{
  color:#000;
}


.text-top{
    padding-top: 50px;
}
.img-img{
    height: 40vh !important;
    height: 30vh !important;
    object-fit: cover !important;
}
.card{
    height: 425px;
}
.box{
    margin-bottom: 40px;
}
.benefits{
    width: 75px;
  }
  .display-new{
    font-size: 30px;
    margin-top: 45px;
    
  }


    .bg-color{

      background-color: white !important;
}
  
 #banner:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(41, 66, 102, 0.50) !important;
}
#banner {
    position: relative;
   height: 600px;
    width:100%;
    overflow: hidden;
    padding-top: 0px !important;
  }
  #videobcg {
    position: absolute;
    top: 15%;
    left: 0;
    min-width: 100%;
    min-height: 100%;
    height:40vh;
    width:auto;
    z-index: -100;
  }
  .title-header{
    text-align: left !important;
  }
  p{

  }

</style>



  <main>


    <section class="banner-area-2 pt-100" style="background-image: url(http://jfinserv.com/images/image.jpg);">
    
            <div class="container">
                <div class="row align-items-center pt-130 pb-140">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-content py-5">
                            <div class="section-title text-start">
                               <!--  <span class="short-title wow fadeInUp" style="font-size: 20px;">JFINSERV Referral Program</span> -->
                                <h1 class="wow fadeInUp mb-0" data-wow-delay='0.2s' style="color: white;">Terms and Conditions</h1>
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

        <section class="pb-0" style="margin-bottom: 100px; margin-top: 100px;">
      <div class="container">
        <div class="row align-items-center justify-content-around text-lg-left">
          <div class="col-md-12" data-aos="fade-in">
          
            <p class="lead term-text-justify"><b>Jfinserv Consultant India Private Limited</b> operates website <span style="color: #0050b2;"><a href="https://Jfinserv.com" target="_blank"><b>https://Jfinserv.com</b></a></span> and app under brand names Jfinserv. Jfinserv aims to simplify your financial life by providing great financial products across insurance, loans & investments. We are committed to operating our website/app with proper internal controls and strong ethical standards.<br><br>
Please note that your use or visit to our website <span style="color: #0050b2;"><a href="https://Jfinserv.com" target="_blank"><b>https://Jfinserv.com</b></a></span> and app (together referred to as “Services”) are subject to the following terms; if you do not agree to all of the following, you may not access or use the Services in any manner.</p><br><br>
<h3 class="term-text-justify"><b>Terms for usage </b></h3><br>
<p class="lead term-text-justify">Please read on to learn the rules & restrictions that govern your use of our Services. If you have any questions or comments, regarding these terms or the Services, please contact us at<span style="color: #0050b2;"> <a href="contact@jfinserv.com
"><b>contact@jfinserv.com</b>
</a></span>
You must agree to and accept all of the Terms, or you don’t have the right to use the Services. Your using the Services in anyway means that you agree to all of these Terms, and these Terms will remain in effect while you use the Services.
</p><br><br>
<ol class="lead term-text-justify">
  <li class="term-text-justify">Other than for your own personal non-commercial use, you agree that you shall not sell, redistribute, publish, copy, reproduce, save in database, show, perform, change, transmit, license, create products from, transfer or in anyway exploit any part of any information, content, materials, services available from or through the application.</li><br>

<li class="term-text-justify">You agree that you will not use the website/app for any purpose that is unlawful or prohibited by these Terms. You also agree you will not use the website/app in any manner that could disable or damage the website/app or interfere with any other party’s use, legal rights..</li><br>

<li class="term-text-justify">You accept that not all the products and services offered on this website/app are available in all geographic areas and you may not be eligible for all the products or services offered by Jfinserv on the website/app. Jfinserv reserves the right to determine the eligibility & availability for any service or product offered on the website/app.</li><br>

<li class="term-text-justify">You accept that Jfinserv is not responsible for the availability of content or other services on third party sites linked from the website/application. You are aware that access of hyperlinks to other internet sites or websites are at your own risk and the content, accuracy, opinions expressed, and other links provided by these sites are not verified, monitored or endorsed by Jfinserv in anyway. Jfinserv does not make any warranties & expressly disclaims all warranties expressed or implied, including without limitation, those of merchantability and fitness for a particular purpose, title or non-infringement with respect to any information or products or services that are available or advertised or sold through these third-party platforms.</li><br>

<li class="term-text-justify">If performance is prevented, hindered or delayed by a Force Majeure incident (details below), Jfinserv shall not be liable for any failure to perform any of its obligations under these terms & conditions or those applicable to its services, & in such case its obligations shall be suspended for so long as the Force Majeure event continues.                                   “Force Majeure incident” means any event, due to any cause beyond the reasonable control of Jfinserv including without limitations, unavailability of any communication systems, breach, or virus in the digital processes or payment or delivery mechanism, computer hacking, unauthorised access to computer data and storage devices, computer crashes, malfunctioning in the computer terminal or the systems getting affected by any malicious, destructive or corrupting code or program, mechanical or technical errors/failures or power shut down, faults or failures in telecommunication, acts of God, civil commotion, sabotage, fire, flood, explosion, strikes / industrial action of any kind, riots, war, acts of government, lockdown, etc.</li><br>

<li class="term-text-justify">By using the services or products provided through this website/app, you shall be deemed to have accepted the Terms and Conditions (T&Cs) herein including the modified T&Cs published on the website/app from time to time.
You have read & understood the Privacy Policy published on the website/app of Jfinserv. The information you provide when you register for our services or products either for yourself or for referring a friend under referral program, is true & correct. </li><br>

<li class="term-text-justify">Jfinserv may contact you by and/or E-mail and/or mobile/landline and/or SMS and/or WhatsApp or any other form of electronic communication in connection with your application request, referral program or its services. You can always opt out of such communication and/or request for deletion of  user data by writing us on<span style="color: #0050b2;"> <a href="mailto:contact@jfinserv.com
"><b>contact@jfinserv.com
</b></a></span></li><br>
</ol>
<p class="lead term-text-justify"><b>Protection of Copyrights and Trademarks </b><br>
All the trademarks, logos and service marks, information and content provided on our website including its design structure and compilation are privately owned Intellectual Property Rights of Jfinserv Financial Consultants Private Limited. No information or content from the website/app may be copied, republished, reproduced, posted or distributed in anyway without formal written permission from Jfinserv. Your usage of the website/app, is subject to your agreement of these T&Cs.
</p>
<p class="lead term-text-justify"><b>Warranty, Liability, Indemnity limitation:</b></p><br>
<ol class="lead term-text-justify">
  <li class="term-text-justify">
    In no event shall Jfinserv be liable to you for any damage or loss that may cause or arise from or in relation to these terms and conditions or due to use of this website/application.</li><br>

<li class="term-text-justify">You agree to indemnify Jfinserv, its directors and employees for all the liabilities (including claims, damages, suits or legal expenses in defending itself in relation to the foregoing) arising due to non-observance of the duties & obligations and/or non-performance under these T&Cs or due to your acts and/or omissions.</li><br>

<li class="term-text-justify">You accept & warrant that all the information provided by you to Jfinserv while using this website/application shall be correct, accurate and correct.</li>

<li class="term-text-justify">Besides, any investment decision taken by you on the Services is your sole responsibility and Jfinserv in anyway shall not be liable for any damage or loss caused to you or other users of this website/app owing to such an investment decision.</li><br>

</ol>

<p class="lead term-text-justify"><b>How we stay free/No fees </b><br>


Jfinserv is and will always be free. The offers we provide via our platform help us remain free for you. When you take an offer through Jfinserv (insurance, loans, or investments), we generally make some money from one of our partners (banks/HFI/insurance firm/Asset Management Company).

We are always excited to help you make the most out of our platform and find great deals. 
</p>

            
            
          </div>
          
        </div>
      </div>
    </section>
  
       
        
    </main>
@endsection