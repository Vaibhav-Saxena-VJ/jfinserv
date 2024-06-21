@extends('layouts.app')
@section('content')
<style type="text/css">

	.title-header{
		color: #fff;
	}
	.showcase-title{
		color: #fff;
	}
	.show-case-text{
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

	/*#114b5f*/
</style>

<section class="bg-light o-hidden pt-5 pb-0" style="background-color: #025152!important;">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-6 d-flex flex-column text-center text-lg-left mb-5 mb-lg-0" data-aos="fade-right">
				<div class="pr-xl-5">
					<h1 class="display-3 title-header">Take Charge of Your Money</h1>
					<p class="lead title-header">We help you to make your dream a reality
					</p>
					<div class="mt-4 mt-lg-5">
						<form data-form-email="" novalidate="" action="#">
							<div class="d-flex flex-column flex-sm-row form-group">
								<input class="form-control form-control-lg mr-sm-2 mb-2 mb-sm-0 h-100" name="email" placeholder="Email Address" type="email" required="">
								<button class="btn btn-lg btn-primary flex-shrink-0 btn-loading" type="button" data-loading-text="Sending">
									<!-- Icon for loading animation -->
									<svg class="icon bg-white" width="24px" height="24px" viewbox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<title>Icon For Loading</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g>
												<polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
											</g>
											<path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
										</g>
									</svg>
									<span>Notify Me</span>
								</button>
							</div>
							<div data-recaptcha="" data-sitekey="6Lemz4gUAAAAAElq4ZHFBzI7j8QUiYMn9I0mzQWG" data-size="invisible" data-badge="bottomleft"></div>
							<div class="d-none alert alert-success w-100" role="alert" data-success-message="">
								Thanks, a member of our team will be in touch shortly.
							</div>
							<div class="d-none alert alert-danger w-100" role="alert" data-error-message="">
								Please fill all fields correctly.
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
			<div class="col">
				<div class="row justify-content-center" data-jarallax-element="-50">
					<div class="col-10 col-sm-8 col-md-7 col-lg-9 col-xl-7" data-aos="zoom-in" data-aos-delay="250">
						<img class="img-fluid" src="assets\img\mobile-app\mobile-app-1.png" alt="Screenshot">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="w-50 h-50 bottom right position-absolute" data-aos="zoom-in" data-aos-delay="800">
		<div class="blob h-100 w-100 bottom right bg-warning opacity-90"></div>
	</div>
	<div class="divider divider-bottom bg-primary-3 mt-5"></div>
</section>

<section class="bg-primary-3 text-white">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-4 mb-5 mb-lg-0">
				<img src="assets\img\logos\brand\kyan.svg" alt="Kyan company logo" class="bg-white opacity-50 my-4" data-inject-svg="">
				<div class="px-xl-4">
					&ldquo;Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.&rdquo;
				</div>
			</div>
			<div class="col-md-4 mb-5 mb-lg-0">
				<img src="assets\img\logos\brand\goldline.svg" alt="Goldline company logo" class="bg-white opacity-50 my-4" data-inject-svg="">
				<div class="px-xl-4">
					&ldquo;Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.&rdquo;
				</div>
			</div>
			<div class="col-md-4 mb-5 mb-lg-0">
				<img src="assets\img\logos\brand\aven.svg" alt="Aven company logo" class="bg-white opacity-50 my-4" data-inject-svg="">
				<div class="px-xl-4">
					&ldquo;Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.&rdquo;
				</div>
			</div>
		</div>
	</div>
</section>

<section class="o-hidden">
	<div class="container" >
		<div class="row">
			<div class="col-xl-5 mb-5 mb-xl-0 showcase-background" data-aos="fade-right">

				<div class="text-center text-xl-left mb-lg-5">

					<h2 class="h1 showcase-title" style="font-size: 30px;">
						Simplified <span style="font-size: 70px;">Insurance</span>
					</h2>
					<p class="show-case-text" style="font-size: 20px;"> Low rates. Great benefits.</p>
				</div>
				<ul class="nav nav-pills justify-content-center flex-xl-column pr-xl-5" role="tablist">
					<li class="nav-item">
						<a class="btn btn-lg btn-primary active w-100 button-background" id="tab-1" data-toggle="tab" href="#home-6" role="tab" aria-controls="tab-1" aria-selected="true">
							<div class="d-flex align-items-center">
								<img src="assets\img\term.png" alt="Icon" class="icon bg-primary" data-inject-svg="">
								<span>Term Insurance</span>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-lg btn-primary w-100 button-background" id="tab-2" data-toggle="tab" href="#profile-6" role="tab" aria-controls="tab-2" aria-selected="false">
							<div class="d-flex align-items-center">
								<img src="assets\img\shield.png" alt="Icon" class="icon bg-primary" data-inject-svg="">
								<span>Health Insurance</span>
							</div>
						</a>
					</li>
					
				</ul>
               
			</div>

			<div class="col-xl-1">
			</div>
			<div class="col" data-aos="fade-left" data-aos-delay="250">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="home-6" role="tabpanel" aria-labelledby="tab-1">
						<div class="row justify-content-around align-items-center">
							<div class="col-4 col-sm-6 col-lg-6 col-xl-6">
								<img src="assets\img\mobile-app\mobile-app-2.png" alt="Screenshot" class="img-fluid">
							</div>
							
						</div>
					</div>
					<div class="tab-pane fade" id="profile-6" role="tabpanel" aria-labelledby="tab-2">
						<div class="row justify-content-around align-items-center">
							<div class="col-5 col-sm-6 col-lg-6 col-xl-6">
								<img src="assets\img\mobile-app\mobile-app-3.png" alt="Screenshot" class="img-fluid">
							</div>
							
						</div>
					</div>
					<div class="tab-pane fade" id="contact-6" role="tabpanel" aria-labelledby="tab-3">
						<div class="row justify-content-around align-items-center">
							<div class="col-5 col-sm-6 col-lg-6 col-xl-6">
								<img src="assets\img\mobile-app\mobile-app-4.png" alt="Screenshot" class="img-fluid">
							</div>
							
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

<div class="container" >
	<div class="row">
	 <button class="btn btn-lg btn-primary active  col-xl-5" style="padding: 9px;margin-top: 4px;border-radius: 5px;padding-left: 20px;">Get Started</button>
	</div>
</div>
</section>
<section class="p-0 bg-primary row no-gutters o-hidden">
	<div class="col-lg-5 col-xl-6 d-flex align-items-center justify-content-center">
		<a data-fancybox="" href="https://vimeo.com/166034462#t=32s" class="btn btn-lg btn-light rounded-circle position-absolute" data-aos="zoom-in" data-aos-delay="400">
			<img src="assets\img\icons\interface\icon-media-play.svg" alt="Media Play Icon" class="icon icon-lg bg-dark pl-1" data-inject-svg="">
		</a>
		<img src="assets\img\heros\hero-2.jpg" alt="Image" class="w-100 h-100">
		<div class="divider divider-side bg-primary d-none d-lg-block"></div>
	</div>
	<div class="col-lg-7 col-xl-6">
		<section>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col col-md-10 col-xl-9">
						<div class="text-white text-center text-lg-left">
							<h3 class="h1">Wealthmaqers advertisement video here</h3>
							<p class="lead">
								Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.
							</p>
						</div>
						<div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 mt-md-5">
							<div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-success-alt">
										<img src="assets\img\icons\interface\icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
									</div>
									<h6 class="mb-0 ml-3">Investements</h6>
								</div>
							</div>
							<div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-success-alt">
										<img src="assets\img\icons\interface\icon-check.svg" alt="Layouts icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
									</div>
									<h6 class="mb-0 ml-3">Investements</h6>
								</div>
							</div>
							<div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-success-alt">
										<img src="assets\img\icons\interface\icon-check.svg" alt="Box icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
									</div>
									<h6 class="mb-0 ml-3">Investements</h6>
								</div>
							</div>
							<div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-success-alt">
										<img src="assets\img\icons\interface\icon-check.svg" alt="Lightning icon" class="m-2 icon icon-xs bg-success" data-inject-svg="">
									</div>
									<h6 class="mb-0 ml-3">Investements</h6>
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
					<h2 class="h1 text-center text-lg-left">Here's how we do things differently</h2>
					<div class="d-flex flex-wrap justify-content-center justify-content-lg-start">
						<div class="my-4" data-aos="fade-left" data-aos-delay="100">
							<div class="d-flex">
								<div class="mr-3 mr-md-4">
									<img src="assets\img\icons\theme\general\bookmark.svg" alt="Bookmark icon" class="icon bg-primary" data-inject-svg="">
								</div>
								<div>
									<h5>Well Documented</h5>
									<div>
										Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.
									</div>
								</div>
							</div>
						</div>
						<div class="my-4" data-aos="fade-left" data-aos-delay="200">
							<div class="d-flex">
								<div class="mr-3 mr-md-4">
									<img src="assets\img\icons\theme\design\select.svg" alt="Selection interface icon" class="icon bg-primary" data-inject-svg="">
								</div>
								<div>
									<h5>Highly Customizable</h5>
									<div>
										Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.
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
						<img class="img-fluid position-relative" src="assets\img\mobile-app\mobile-app-3.png" alt="Screenshot">
						<div class="h-75 w-75 position-absolute bottom right d-none d-lg-block" data-jarallax-element="-50">
							<div class="blob blob-4 w-100 h-100 bg-success opacity-90"></div>
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
				<img src="assets\img\avatars\female-4.jpg" alt="Shelley McNabb avatar image" class="avatar avatar-lg mb-3 mb-md-4">
				<blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
					&ldquo;<mark data-aos="highlight-text" data-aos-delay="200">WealthMaqers</mark> has a unique platform and is an excellent tool to help me organize mine and my family’s investments.&rdquo;
				</blockquote>
				<div class="d-flex flex-column align-items-center">
					<h6 class="mb-1">Rahul Singh</h6>
					<span>Founder</span>
				</div>
			</div>
			<div class="col-md-4 text-center mb-4 mb-md-0">
				<img src="assets\img\avatars\female-3.jpg" alt="Mary Goddard avatar image" class="avatar avatar-lg mb-3 mb-md-4">
				<blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
					&ldquo;Very Happy with Wealthmaqers platform.&rdquo;
				</blockquote>
				<div class="d-flex flex-column align-items-center">
					<h6 class="mb-1">Namarata Singh</h6>
					<span>Founder</span>
				</div>
			</div>
			<div class="col-md-4 text-center mb-4 mb-md-0">
				<img src="assets\img\avatars\male-2.jpg" alt="Bradley Singleton avatar image" class="avatar avatar-lg mb-3 mb-md-4">
				<blockquote class="blockquote p-0 border-0 text-body pr-xl-4">
				WealthMaqers</mark> has a unique platform and is an excellent tool to help me organize mine and my family’s investments.&rdquo;
			</blockquote>
			<div class="d-flex flex-column align-items-center">
				<h6 class="mb-1">Richa Singh</h6>
				<span>Founder</span>
			</div>
		</div>
	</div>
</div>
<div class="divider divider-bottom bg-white"></div>
</section>
<section class="o-hidden">
	<div class="container">
		<div class="row align-items-center justify-content-around text-center text-lg-left">
			<div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-lg-0 pr-lg-5 pr-xl-0 order-lg-2">
				<div>
					<h2 class="display-4">You can grab Investment Ideas right now</h2>
					<p class="lead">Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.</p>
					<div class="d-flex flex-column flex-sm-row mt-4 mt-md-5 justify-content-center justify-content-lg-start">
						<a href="#" class="mr-2">
							<img alt="App Store" src="assets\img\mobile-app\apple.svg">
						</a>
						<a href="#" class="mr-2">
							<img alt="App Store" src="assets\img\mobile-app\google-play.svg">
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg order-lg-1">
				<div class="row justify-content-center" data-jarallax-element="-50">
					<div class="col-10 col-sm-8 col-md-6 col-lg-8 col-xl-6">
						<img class="img-fluid position-relative" src="assets\img\mobile-app\mobile-app-4.png" alt="Screenshot">
						<div class="h-50 w-50 position-absolute bottom left d-none d-lg-block" data-jarallax-element="-50">
							<div class="blob blob-2 w-100 h-100 bg-primary-2 opacity-90 top right"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-primary-3 text-white">
	<div class="container">
		<div class="row section-title justify-content-center text-center">
			<div class="col-md-9 col-lg-8 col-xl-7">
				<h3 class="display-4">Info</h3>
				<div class="lead">Info</div>
			</div>
		</div>
	</div>
      <!-- <div class="o-hidden">
        <div class="highlight-selected" data-flickity='{ "imagesLoaded": true, "wrapAround":true }'>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets\img\blog\thumb-3.jpg" alt="blog.3.image">
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets\img\blog\thumb-4.jpg" alt="blog.4.image">
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets\img\blog\thumb-5.jpg" alt="blog.5.image">
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets\img\blog\thumb-8.jpg" alt="blog.6.image">
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets\img\blog\thumb-6.jpg" alt="blog.7.image">
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets\img\blog\thumb-7.jpg" alt="blog.8.image">
          </div>
        </div>
    </div> -->
</section>
<section>
	<div class="container">
		<div class="row section-title justify-content-center text-center">
			<div class="col-md-9 col-lg-8 col-xl-7">
				<h3 class="display-4">Blogs</h3>
				<div class="lead">Real time hyper-personalized advisory on all your money, markets, investments, loans, expenses and financial future.</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-md-4">
				<div class="card h-100 hover-box-shadow">
					<a href="#" class="d-block bg-gradient rounded-top">
						<img class="card-img-top hover-fade-out" src="assets\img\blog\thumb-4.jpg" alt="blog.4.image">
					</a>
					<div class="card-body">
						<a href="#">
							<h3>Blog Title</h3>
						</a>
						<p>
							Blog Desc
						</p>
						<a href="#">Read Story</a>
					</div>
					<div class="card-footer d-flex justify-content-between align-items-center">
						<a href="#" class="badge badge-pill badge-primary">Category</a>
						<div class="text-small text-muted">Date</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-md-4">
				<div class="card h-100 hover-box-shadow">
					<a href="#" class="d-block bg-gradient rounded-top">
						<img class="card-img-top hover-fade-out" src="assets\img\blog\thumb-4.jpg" alt="blog.4.image">
					</a>
					<div class="card-body">
						<a href="#">
							<h3>Blog Title</h3>
						</a>
						<p>
							Blog Desc
						</p>
						<a href="#">Read Story</a>
					</div>
					<div class="card-footer d-flex justify-content-between align-items-center">
						<a href="#" class="badge badge-pill badge-primary">Category</a>
						<div class="text-small text-muted">Date</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-md-4">
				<div class="card h-100 hover-box-shadow">
					<a href="#" class="d-block bg-gradient rounded-top">
						<img class="card-img-top hover-fade-out" src="assets\img\blog\thumb-4.jpg" alt="blog.4.image">
					</a>
					<div class="card-body">
						<a href="#">
							<h3>Blog Title</h3>
						</a>
						<p>
							Blog Desc
						</p>
						<a href="#">Read Story</a>
					</div>
					<div class="card-footer d-flex justify-content-between align-items-center">
						<a href="#" class="badge badge-pill badge-primary">Category</a>
						<div class="text-small text-muted">Date</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$( document ).ready(function() {
		$('#home').addClass('active-header');
	});
</script>

@endsection