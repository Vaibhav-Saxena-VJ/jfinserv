@extends('layouts.app', ['title' => 'Simplifying Your Financial Life. No Fees. Low Rates. Great Benefits. Apply for loan in 30 seconds. Invest Online in Top Performing Equity Funds'])
@section('keywords', 'share market live chart, stock market live india, online share market, online stock market, Angel Broking, top mutual funds, top 5 mutual funds, top 10 Mutual Funds, SIP Calculator, Mutual Funds, loan, home loan, personal loan, current loan rates india, loan calculator india, best loan rates, cheapest loans india')
@section('description', 'Simplifying your financial life - No Fees. Low Rates. Great Benefits. Our mission is to simplify your financial life by providing great financial products - Stocks, mutual funds and loans.')
@section('content')
<style type="text/css">


	.top-title{
		text-align: center;
		margin-bottom: 3%;
	}
	.title-header{
		color: #fff;
	}
	.card-img-top{
		height: 235px;
		object-fit: cover;
	}
	
	.showcase-title{
		color: #fff;
	}
	
	.bg-warning {
		background-color:#077273!important;
	}
	.showcase-background{
		background-color: #025152!important;
		border-radius: 5px !important;
		padding: 10px;
		padding-left: 20px;
		padding-top: 30px;
		padding-bottom: 12%;
		
	}

	
	.button-background.active{

		background-color: #000 !important;
		border-radius: 5px !important;
		border-color: #000 !important;
		margin-top: 5px;
	}
	.button-background{
		border-radius: 0px !important;
		margin-top: 5px;
		border-color: #025152!important;
		color: #fff !important;
	}
	.button-background:not(:disabled):not(.disabled).active:focus{
		box-shadow: 0 0 0 0rem rgba(0, 0, 0, 0) !important;
	}
	.button-background:focus {
		outline: 0;
		box-shadow: 0 0 0 0rem rgba(0, 0, 0, 0) !important;
	}
	#banner {
		position: relative;
		height:100%;
		width:100%;
		overflow: hidden;
		padding-top: 0px !important;
	}
	#videobcg {
		position: absolute;
		top: 0;
		left: 0;
		min-width: 100%;
		min-height: 100%;
		height:auto;
		width:auto;
		z-index: -100;
	}
	#banner:before {
		content: '';
		position: absolute;
		height: 100%;
		width: 100%;
		background: #025152b5;
	}
	@media (min-width: 992px){
		.min-vh-lg-90 {
			min-height: 90vh;
		}
		.data-encryption{
			justify-content: flex-start;
		}
		.customer-support{
			justify-content: flex-start;
		}
		
	}
	@media (min-width: 768px){

		p.title-header{
			font-size: 22px;
		}
		.desktop-hidden{
			display: none;
		}
	}
	@media (min-width: 1025px){

		.mobile-desc{
			width: 350px !important;
			height: auto;
		}


	}

	@media (min-width: 992px)
	{
		section {
			padding: 4.5rem 0;
		}
	}

	@media only screen and (max-width: 1024px) and (min-width: 768px){


		.mobile-desc{
			max-width: 180px !important;
			height: auto;
		}

	}

	@media (max-width: 767px){

		#videobcg {
			height: 30vh !important;

		}
		.mobile-hidden{
			display: none;
		}

		#banner {

			height: 40vh !important;
		}
		.display-3{
			font-size: 2rem !important;
		}
		.col-5{
			max-width: 100% !important;
		}

		.mobile-desc{
			width: 300px !important;
			height: auto;
		}

		.mobile-justify{

			justify-content: end !important;

		}


	}
	

	/*#114b5f*/
	/*style="background-color: #025152!important;"*/
</style>


<section class="pb-0 " id="banner">
	<video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" style="object-fit:cover">
		<source src="{{config('app.baseURL')}}/assets/img/banner.mp4" type="video/mp4"></video>

			<div class="container min-vh-lg-90">

				<div class="row align-items-center justify-content-between">

					<div class="col-lg-8 d-flex flex-column text-center text-lg-left mb-5 mb-lg-0" data-aos="fade-right" style="padding-top: 20% !important">
						<div class="pr-xl-5">
							<h1 class="display-3 title-header">Simplifying your financial life</h1>
							<p class="lead title-header"><b>S</b>tocks | &nbsp;<b>M</b>utual Funds | &nbsp;<b>L</b>oans
							</p>
							<div class="mt-4 mt-lg-5">

								<div class="d-flex flex-column flex-sm-row form-group">
									
									<a href="{{config('app.baseURL')}}/get-started" class="btn btn-lg btn-primary flex-shrink-0 btn-loading" type="button">
										
										<span>Apply Now</span>
									</a>
								</div>

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
			<!-- <div class="col" style="padding-top: 7.5rem !important">
				<div class="row justify-content-center" data-jarallax-element="-50">
					<div class="col-10 col-sm-8 col-md-7 col-lg-9 col-xl-7" data-aos="zoom-in" data-aos-delay="250">
						
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- <div class="w-50 h-50 bottom right position-absolute" data-aos="zoom-in" data-aos-delay="800">
		<div class="blob h-100 w-100 bottom right bg-warning opacity-90"></div>
	</div> -->
	<!-- <div class="divider divider-bottom bg-primary-3 mt-5"></div> -->
</section>

<section class="bg-primary-3 text-white" style="padding: 3.5rem 0;">
	<h2 class="top-title">Customers love finkompas as we provide</h2>
	<div class="container">

		<div class="row text-center">

			<div class="col-md-4 mb-5 mb-lg-0">
				<h3>No Fees</h3>
				<div class="px-xl-4">
					&ldquo;No hidden fees. We are and 
					will always be free
					&rdquo;
				</div>
			</div>
			<div class="col-md-4 mb-5 mb-lg-0">
				<h3>Low Rates</h3>
				<div class="px-xl-4">
					&ldquo;We provide you great products 
					at affordable rates
					&rdquo;
				</div>
			</div>
			<div class="col-md-4 mb-5 mb-lg-0">
				<h3>Great Benefits</h3>
				<div class="px-xl-4">
					&ldquo;Get curated deals, prepared exclusively to suit your requirement&rdquo;
				</div>
			</div>
		</div>
	</div>
</section>

<section class="o-hidden">
	<div class="container" >
		<div class="row">
			<div class="col-xl-5 mb-5 mb-xl-0" data-aos="fade-right">
				<div class="showcase-background">
					<div class="text-center text-xl-left mb-lg-5">

						<h2 class="h1 showcase-title" style="font-size: 35px;">
							Simplified <span style="font-size: 55px;">Investments</span>
						</h2>
						<span class="show-case-text" style="font-size: 25px;" data-typed-text="" data-loop="true" data-type-speed="90" data-strings='["Great Options. Great Returns."]'></span>

					</div>
					<ul class="nav nav-pills justify-content-center flex-xl-column pr-xl-5" role="tablist">
												<li class="nav-item">
							<a class="btn btn-lg btn-primary active w-100 button-background" id="tab-1" data-toggle="tab" href="#home-9" role="tab" aria-controls="tab-1" aria-selected="true">
								<div class="d-flex align-items-center">
									<img src="{{config('app.baseURL')}}/assets\img\stockicon.png" alt="Icon" class="icon bg-primary" data-inject-svg="">
									<span>Stocks</span>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-lg btn-primary w-100 button-background" id="tab-1" data-toggle="tab" href="#home-6" role="tab" aria-controls="tab-2" aria-selected="true">
								<div class="d-flex align-items-center">
									<img src="{{config('app.baseURL')}}/assets\img\growth.png" alt="Icon" class="icon bg-primary" data-inject-svg="">
									<span>Mutual Funds</span>
								</div>
							</a>
						</li>



					</ul>
				</div>
				<a href="{{config('app.baseURL')}}/get-started" target="_blank"><button class="btn btn-lg btn-primary active  col-xl-12" style="padding: 9px;margin-top: 4px;border-radius: 5px;padding-left: 20px;">Get Started</button></a>
			</div>

			<div class="col-xl-1 mobile-hidden">
			</div>
			<div class="col" data-aos="fade-left" data-aos-delay="250">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="home-9" role="tabpanel" aria-labelledby="tab-1">
						<div class="row justify-content-around align-items-center">
							<div class="col-5 col-sm-6 col-lg-6 col-xl-6">
								<img src="{{config('app.baseURL')}}/assets\img\stock-mobile.png" alt="Stocks" class="mobile-desc">
							</div>
							
						</div>
					</div>
					<div class="tab-pane fade" id="home-6" role="tabpanel" aria-labelledby="tab-2">
						<div class="row justify-content-around align-items-center">
							<div class="col-5 col-sm-6 col-lg-6 col-xl-6">
								<img src="{{config('app.baseURL')}}/assets\img\mutual-funds.png" alt="Mutual Funds" class="mobile-desc">
							</div>
							
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>

<section class="o-hidden mobile-hidden">
	<div class="container" >
		<div class="row">
			<div class="col" data-aos="fade-left" data-aos-delay="250">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="home-7" role="tabpanel" aria-labelledby="tab-1">
						<div class="row justify-content-around align-items-center">
							<div class="col-5 col-sm-6 col-lg-6 col-xl-6">
								<img src="{{config('app.baseURL')}}/assets\img\home-loans.png" alt="Home Loan" class="mobile-desc">
							</div>
							
						</div>
					</div>
					<div class="tab-pane fade" id="contact-6" role="tabpanel" aria-labelledby="tab-2">
						<div class="row justify-content-around align-items-center">
							<div class="col-5 col-sm-6 col-lg-6 col-xl-6">
								<img src="{{config('app.baseURL')}}/assets\img\personal-loans.png" alt="Personal Loan" class="mobile-desc">
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-xl-1">
			</div>
			<div class="col-xl-5 mb-5 mb-xl-0 " data-aos="fade-right">
				<div class="showcase-background">
					<div class="text-center text-xl-left mb-lg-5">

						<h2 class="h1 showcase-title" style="font-size: 35px;">
							Simplified <span style="font-size: 55px;">Loans</span>
						</h2>
						<span class="show-case-text" style="font-size: 25px;" data-typed-text="" data-loop="true" data-type-speed="90" data-strings='["Low Rates. Great Offers."]'></span>

					</div>
					<ul class="nav nav-pills justify-content-center flex-xl-column pr-xl-5" role="tablist">
						<li class="nav-item">
							<a class="btn btn-lg btn-primary active w-100 button-background" id="tab-1" data-toggle="tab" href="#home-7" role="tab" aria-controls="tab-1" aria-selected="true">
								<div class="d-flex align-items-center">
									<img src="{{config('app.baseURL')}}/assets\img\real-estate.png" alt="Icon" class="icon bg-primary" data-inject-svg="">
									<span>Home Loan</span>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-lg btn-primary w-100 button-background" id="tab-2" data-toggle="tab" href="#contact-6" role="tab" aria-controls="tab-2" aria-selected="false">
								<div class="d-flex align-items-center">
									<img src="{{config('app.baseURL')}}/assets\img\loan.png" alt="Icon" class="icon bg-primary" data-inject-svg="">
									<span>Personal Loan</span>
								</div>
							</a>
						</li>

					</ul>
				</div>
				<a href="{{config('app.baseURL')}}/get-started" target="_blank"> <button class="btn btn-lg btn-primary active  col-xl-12" style="padding: 9px;margin-top: 4px;border-radius: 5px;padding-left: 20px;">Get Started</button></a>
			</div>

			


		</div>
	</div>

</section>


<section class="o-hidden desktop-hidden">
	<div class="container" >
		<div class="row">
			
			
			<div class="col-xl-5 mb-5 mb-xl-0 " data-aos="fade-right">
				<div class="showcase-background">
					<div class="text-center text-xl-left mb-lg-5">

						<h2 class="h1 showcase-title" style="font-size: 35px;">
							Simplified <span style="font-size: 55px;">Loans</span>
						</h2>
						<span class="show-case-text" style="font-size: 25px;" data-typed-text="" data-loop="true" data-type-speed="90" data-strings='["Low Rates. Great Offers."]'></span>

					</div>
					<ul class="nav nav-pills justify-content-center flex-xl-column pr-xl-5" role="tablist">
						<li class="nav-item">
							<a class="btn btn-lg btn-primary active w-100 button-background" id="tab-1" data-toggle="tab" href="#home-8" role="tab" aria-controls="tab-1" aria-selected="true">
								<div class="d-flex align-items-center">
									<img src="{{config('app.baseURL')}}/assets\img\real-estate.png" alt="Icon" class="icon bg-primary" data-inject-svg="">
									<span>Home Loan</span>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-lg btn-primary w-100 button-background" id="tab-2" data-toggle="tab" href="#contact-7" role="tab" aria-controls="tab-2" aria-selected="false">
								<div class="d-flex align-items-center">
									<img src="{{config('app.baseURL')}}/assets\img\loan.png" alt="Icon" class="icon bg-primary" data-inject-svg="">
									<span>Personal Loan</span>
								</div>
							</a>
						</li>

					</ul>
				</div>
				<a href="{{config('app.baseURL')}}/get-started" target="_blank"> <button class="btn btn-lg btn-primary active  col-xl-12" style="padding: 9px;margin-top: 4px;border-radius: 5px;padding-left: 20px;">Get Started</button></a>
			</div>

			<div class="col" data-aos="fade-left" data-aos-delay="250">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="home-8" role="tabpanel" aria-labelledby="tab-1">
						<div class="row justify-content-around align-items-center">
							<div class="col-5 col-sm-6 col-lg-6 col-xl-6">
								<img src="{{config('app.baseURL')}}/assets\img\home-loans.png" alt="Home Loan" class="mobile-desc">
							</div>
							
						</div>
					</div>
					<div class="tab-pane fade" id="contact-7" role="tabpanel" aria-labelledby="tab-2">
						<div class="row justify-content-around align-items-center">
							<div class="col-5 col-sm-6 col-lg-6 col-xl-6">
								<img src="{{config('app.baseURL')}}/assets\img\personal-loans.png" alt="Personal Loan" class="mobile-desc">
							</div>
							
						</div>
					</div>
					
				</div>
			</div>

			


		</div>
	</div>

</section>


<section class="p-0 bg-primary row no-gutters o-hidden">
	<div class="col-lg-5 col-xl-6 d-flex align-items-center justify-content-center">
		<!-- <a data-fancybox="" href="https://vimeo.com/166034462#t=32s" class="btn btn-lg btn-light rounded-circle position-absolute" data-aos="zoom-in" data-aos-delay="400">
			<img src="{{config('app.baseURL')}}/assets\img\icons\interface\icon-media-play.svg" alt="Media Play Icon" class="icon icon-lg bg-dark pl-1" data-inject-svg="">
		</a> -->
		<img src="{{config('app.baseURL')}}/assets\img\simple2.jpg" alt="Image" class="w-100 h-100">
		<div class="divider divider-side bg-primary d-none d-lg-block"></div>
	</div>
	<div class="col-lg-7 col-xl-6">
		<section>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col col-md-10 col-xl-9">
						<div class="text-white text-center text-lg-left">
							<h3 class="h1">Finkompas is simple!</h3>
							<!-- <p class="lead">
								Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.
							</p> -->
						</div>
						<div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 mt-md-5">
							<div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-success-alt">
										<img src="{{asset('assets\img\icons\interface\icon-check.svg')}}" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
									</div>
									<h6 class="mb-0 ml-3">Apply in 30 secs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
								</div>
							</div>
							<div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-success-alt">
										<img src="{{asset('assets\img\icons\interface\icon-check.svg')}}" alt="Layouts icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
									</div>
									<h6 class="mb-0 ml-3">Super Convenient</h6>
								</div>
							</div>
							<div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-success-alt">
										<img src="{{asset('assets\img\icons\interface\icon-check.svg')}}" alt="Box icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
									</div>
									<h6 class="mb-0 ml-3">Transparent  process</h6>
								</div>
							</div>
							<div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-success-alt">
										<img src="{{asset('assets\img\icons\interface\icon-check.svg')}}" alt="Lightning icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
									</div>
									<h6 class="mb-0 ml-3">Your best buddy&nbsp;&nbsp;&nbsp;&nbsp;</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>
<section class="o-hidden">
	<div class="container">
		<div class="row align-items-center justify-content-around flex-lg-row-reverse">
			<div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-lg-0 pl-lg-5 pl-xl-0">
				<div data-aos="fade-in" data-aos-offset="250">
					<h2 class="h1 text-center text-lg-left">We are different!</h2>
					<div class="d-flex flex-wrap justify-content-center justify-content-lg-start mobile-justify">
						<div class="my-4" data-aos="fade-left" data-aos-delay="100">
							<div class="d-flex">
								<div class="mr-3 mr-md-4">
									<img src="{{asset('assets\img\icons\theme\design\select.svg')}}" alt="Bookmark icon" class="icon bg-primary" data-inject-svg="">
								</div>
								<div>
									<h5>Convenient</h5>
									<div>
										Go to our website, select a service. We will take care of the rest. 

									</div>
								</div>
							</div>
						</div>
						<div class="my-4" data-aos="fade-left" data-aos-delay="200">
							<div class="d-flex">
								<div class="mr-3 mr-md-4">
									<img src="{{asset('assets\img\icons\theme\design\select.svg')}}" alt="Selection interface icon" class="icon bg-primary" data-inject-svg="">
								</div>
								<div>
									<h5>Personal touch</h5>
									<div>
										Talk to real people when you need to 
									</div>
								</div>
							</div>
						</div>
						<div class="my-4" data-aos="fade-left" data-aos-delay="200">
							<div class="d-flex">
								<div class="mr-3 mr-md-4">
									<img src="{{asset('assets\img\icons\theme\design\select.svg')}}" alt="Selection interface icon" class="icon bg-primary" data-inject-svg="">
								</div>
								<div>
									<h5>Fast Response</h5>
									<div>
										Get quick offers on your request
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg col-xl-6">
				<div class="row justify-content-center" data-jarallax-element="-50">
					<div class="col-10 col-sm-8 col-md-6 col-lg-8 col-xl-6" data-aos="zoom-in" data-aos-delay="250">
						<img class="img-fluid position-relative" src="{{asset('assets\img\front-img.jpeg')}}" alt="finkompas" style="border-radius: 8px;border: 1px solid #ddd;">
						<div class="h-75 w-75 position-absolute bottom right d-none d-lg-block" data-jarallax-element="-50">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-light pb-0">
	<div class="container">
		<div class="row section-title justify-content-center text-center">
			<div class="col-md-9 col-lg-8 col-xl-7">
				<h3 class="display-4">What our customers say?</h3>
				<div class="lead"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center mb-4 mb-md-0">
				<img src="{{config('app.baseURL')}}/assets\img\user.png" alt="Shelley McNabb avatar image" class="avatar avatar-lg mb-3 mb-md-4">
				<blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
					&ldquo;It's fast and easy to apply! You guys are truly simplifying our lives.&rdquo;
				</blockquote>
				<div class="d-flex flex-column align-items-center">
					<h6 class="mb-1">Laxmikant</h6>
					<span>Finance Professional</span>
				</div>
			</div>
			<div class="col-md-4 text-center mb-4 mb-md-0">
				<img src="{{config('app.baseURL')}}/assets\img\user.png" alt="Mary Goddard avatar image" class="avatar avatar-lg mb-3 mb-md-4">
				<blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
					&ldquo;Great experience. Complete process was convenient with superb service.&rdquo;
				</blockquote>
				<div class="d-flex flex-column align-items-center">
					<h6 class="mb-1">Deepak Sharma</h6>
					<span>DGM Sales</span>
				</div>
			</div>
			<div class="col-md-4 text-center mb-4 mb-md-0">
				<img src="{{config('app.baseURL')}}/assets\img\user.png" alt="Bradley Singleton avatar image" class="avatar avatar-lg mb-3 mb-md-4">
				<blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
					&ldquo;finkompas is there when you need them, awesome team, great service&rdquo;
				</blockquote>
				<div class="d-flex flex-column align-items-center">
					<h6 class="mb-1">Ashok Baijal</h6>
					<span>Senior VP Operations</span>
				</div>
			</div>
		</div>
	</div>
	<div class="divider divider-bottom bg-white"></div>
</section>

<section class="bg-primary-3 text-white">
	<div class="container">
		<div class="row section-title justify-content-center text-center">
			<div class="col-md-9 col-lg-8 col-xl-7">
				<center><img src="https://finkompas.com/assets/img/shield_img.png" class="img-fluid" style="width: 120px;margin-bottom: 10px;"></center>
				<h3 class="display-5">Account Protection</h3>
				<h3 class="display-4">Secure and Encrypted</h3>
				<div class="lead">Your sensitive personal information is fully encrypted and securely stored.</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="d-flex flex-wrap  data-encryption">
					<div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
						<div class="d-flex align-items-center">
							<div class="rounded-circle bg-success-alt">
								<img src="{{asset('assets/img/icons/interface/icon-check.svg')}}" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
							</div>
							<h6 class="mb-0 ml-3">256-bit encryption</h6>
						</div>
					</div>
				</div>
				<div class="d-flex flex-wrap  data-encryption">
					<div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="200">
						<div class="d-flex align-items-center">
							<div class="rounded-circle bg-success-alt">
								<img src="{{asset('assets/img/icons/interface/icon-check.svg')}}" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
							</div>
							<h6 class="mb-0 ml-3">Data is encrypted + SSL secured</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-4">

				<div class="d-flex flex-wrap  customer-support">
					<div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="300">
						<div class="d-flex align-items-center">
							<div class="rounded-circle bg-success-alt">
								<img src="{{asset('assets/img/icons/interface/icon-check.svg')}}" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
							</div>
							<h6 class="mb-0 ml-3">Strong privacy policy</h6>
						</div>
					</div>
				</div>
				<div class="d-flex flex-wrap  customer-support">
					<div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="400">
						<div class="d-flex align-items-center">
							<div class="rounded-circle bg-success-alt">
								<img src="{{asset('assets/img/icons/interface/icon-check.svg')}}" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
							</div>
							<h6 class="mb-0 ml-3">24x7 customer support</h6>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row section-title justify-content-center text-center">
			<div class="col-md-9 col-lg-8 col-xl-7">
				<h3 class="display-4">Blogs</h3>
				
			</div>
		</div>
		<div class="row">
			@foreach($get_blogs as $blog)
			<div class="col-md-6 col-lg-4 mb-3 mb-md-4">
				<div class="card h-100 hover-box-shadow">
					<a href="{{config('app.baseURL')}}/blog/{{$blog->url}}" class="d-block bg-gradient rounded-top">
						<img class="card-img-top hover-fade-out" src="{{config('app.baseURL')}}/storage/app/{{$blog->image}}" alt="{{$blog->blog_title}}">
					</a>
					<div class="card-body">
						<a href="{{config('app.baseURL')}}/blog/{{$blog->url}}">
							<h3>{{$blog->blog_title}}</h3>
						</a>
						<?php
						$string = strip_tags($blog->blog_description);
						if (strlen($string) > 50) {


							$stringCut = substr($string, 0, 50);
							$endPoint = strrpos($stringCut, ' ');


							$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
						}
						?>
						@if (strlen($blog->blog_description) > 50)
						<p>
							<?php echo $string ?>..   
						</p>
						@else
						<p>
							<?php echo $blog->blog_description ?>   
						</p>
						@endif
						<a href="{{config('app.baseURL')}}/blog/{{$blog->url}}">Read Story</a>
					</div>
					<div class="card-footer d-flex justify-content-between align-items-center">
						<a href="#" class="badge badge-pill badge-primary">{{$blog->blog_type->blog_type_name}}</a>
						<div class="text-small text-muted">{{$blog->created_at->format('j')}}<span>{{$blog->created_at->format('M Y')}}</div>
						</div>
					</div>
				</div>
				@endforeach


			</div>
		</div>
	</section>
	<div class="modal fade model-lg" id="modal-a1" tabindex="-1" role="dialog" aria-labelledby="modal-a1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">

				<div class="modal-header" id="loader-hide">
					<!-- <h4 class="modal-title"  style="text-align: center;color:#000;">Congratulations !!</h4> -->
					<p style="padding: 10px;color:#000;">Hi <b>{{$refer_friend_name}}</b>,<br><br>
						We thank you for using your friend's unique referral link.<br> Our product team shall get in touch shortly to understand your requirement on {{$product_name}} in detail..<br><br>
					Thank you once again for selecting Finkompas!</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #000;">×</span>
					</button>
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript">
		$( document ).ready(function() {
			$('#home').addClass('active-header');
			var refer_friend_name="{{$refer_friend_name}}";
			if (refer_friend_name!="") {
				$('#modal-a1').modal('show');
			}
		});
	</script>

	@endsection