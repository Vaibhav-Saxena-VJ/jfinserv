@extends('layouts.app')
@section('content')
<style type="text/css">
	.home_adv_srch_opt .nav-pills {
    border-bottom: none;
    margin: 0 auto;
    text-align: center;
    width: 100% !important;
}
.why_chose_us .icon {
    background-color: #dde8f5 !important;
}
</style>
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/bootstrap.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/responsive.css">
	<!-- Main Header Nav For Mobile -->


	<!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55">Find Your Dream Home</h2>
							<!-- <p class="fz18 color-white">From as low as $10 per day with limited time offer discounts.</p> -->
						</div>
						<div class="home_adv_srch_opt">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New Flat</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Resale</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tabone" data-toggle="pill" href="#pills-profileone" role="tab" aria-controls="pills-profileone" aria-selected="false">Lands</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tabtwo" data-toggle="pill" href="#pills-profiletwo" role="tab" aria-controls="pills-profiletwo" aria-selected="false">Commercial</a>
								</li>
							</ul>
							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<form action="search" method="post">
                                    @csrf
                                    <input type="hidden" name="type" value="1">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="keyword" id="exampleInputName1" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick" name="builder">
															<option value="" selected="">Builder</option>
                                                            @foreach($get_builders as $get_builder)
															<option value="{{$get_builder}}">{{$get_builder}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="location" id="exampleInputEmail" placeholder="Location">
											    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<input type="text" class="amount" name="from_amount" placeholder="₹520000"> 
															<input type="text" class="amount2" name="to_amount" placeholder="₹1300000000">
															<div class="slider-range"></div>
													    	<!-- <span id="slider-range-value1"></span>
															<span id="slider-range-value2"></span>
														    <div id="slider"></div> -->
													    </div>
												  	</div>
												</div>
											</li>
											
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												    <a href="{{config('app.baseURL')}}/properties" style="color:#0050b2">Clear Filter</a>
												</div>
											</li>
											
										</ul>
									</div>
								</form>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<form action="search" method="post">
                                    @csrf
                                    <input type="hidden" name="type" value="2">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="keyword" id="exampleInputName1" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick" name="builder">
															<option value="" selected="">Builder</option>
                                                            @foreach($get_builders as $get_builder)
															<option value="{{$get_builder}}">{{$get_builder}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="location" id="exampleInputEmail" placeholder="Location">
											    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs2" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<input type="text" class="amount" name="from_amount" placeholder="₹520000"> 
															<input type="text" class="amount2" name="to_amount" placeholder="₹1300000000">
															<div class="slider-range"></div>
													    </div>
												  	</div>
												</div>
											</li>
											
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</form>
								</div>

								<div class="tab-pane fade" id="pills-profileone" role="tabpanel" aria-labelledby="pills-profile-tabone">
									<form action="search" method="post">
                                    @csrf
                                    <input type="hidden" name="type" value="3">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="keyword" id="exampleInputName1" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick" name="builder">
															<option value="" selected="">Builder</option>
                                                            @foreach($get_builders as $get_builder)
															<option value="{{$get_builder}}">{{$get_builder}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="location" id="exampleInputEmail" placeholder="Location">
											    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs3" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<input type="text" class="amount" name="from_amount" placeholder="₹520000"> 
                                                            <input type="text" class="amount2" name="to_amount" placeholder="₹1300000000">
															<div class="slider-range"></div>
													    </div>
												  	</div>
												</div>
											</li>
											
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</form>
								</div>

								<div class="tab-pane fade" id="pills-profiletwo" role="tabpanel" aria-labelledby="pills-profile-tabtwo">
									<form action="search" method="post">
                                    @csrf
                                    <input type="hidden" name="type" value="4">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="keyword" id="exampleInputName1" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick" name="builder">
															<option value="" selected="">Builder</option>
                                                            @foreach($get_builders as $get_builder)
															<option value="{{$get_builder}}">{{$get_builder}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="location" id="exampleInputEmail" placeholder="Location">
											    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs4" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<input type="text" class="amount" name="from_amount" placeholder="₹520000"> 
															<input type="text" class="amount2" name="to_amount" placeholder="₹1300000000">
															<div class="slider-range"></div>
													    </div>
												  	</div>
												</div>
											</li>
											
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#feature-property">
				    	<div class="mouse_scroll">
			        		<div class="icon">
					    		<h4>Scroll Down</h4>
					    		<p>to discover more</p>
			        		</div>
			        		<div class="thumb">
			        			<img src="{{config('app.baseURL')}}/property/images/resource/mouse.png" alt="mouse.png">
			        		</div>
				    	</div>
				    </a>
				</div>
			</div>
		</div>
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>All Properties</h2>
						<p>Handpicked properties by our team.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">

						@foreach($get_properties as $get_property)
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{config('app.baseURL')}}/storage/app/{{$get_property->property_image}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											@if($get_property->property_type==1)
                                            <!-- <div class="catagory bg_primary">New Flat</div> -->
                                            <li class="list-inline-item"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">Resale Flat</a></li>
                                            @elseif($get_property->property_type==2)
                                             <!-- <div class="catagory bg_primary">Resale Flat</div> -->
                                             <li class="list-inline-item"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">Resale Flat</a></li>
                                            @elseif($get_property->property_type==3)
                                             <!-- <div class="catagory bg_primary">Lands</div> -->
                                             <li class="list-inline-item"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">Lands</a></li>
                                            @else
                                                <!-- <div class="catagory bg_primary">Commercial}</div> -->
                                                <li class="list-inline-item"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">Commercial</a></li>
                                            @endif
											
											<!-- <li class="list-inline-item"><a href="#">Featured</a></li> -->
										</ul>
										<ul class="icon mb0">
											<!-- <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li> -->
										</ul>
										<a class="fp_price" href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}"> ₹ {{$get_property->from_property_price}} <small>Onwards</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">{{$get_property->builder_name}}</p>
										<h4>{{$get_property->property_name}}</h4>
										<p><span class="flaticon-placeholder"></span> {{$get_property->location}}</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">{{$get_property->property_size}}</a></li>
										<!-- 	<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li> -->
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}"><img src="{{config('app.baseURL')}}/property/images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">{{$get_property->builder_name}}</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
							</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Why Chose Us -->
	<section id="why-chose" class="whychose_us bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Why Choose Us</h2>
						<p>We provide full service at every step.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Trusted By Thousands</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Wide Range Of Properties</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Financing Made Easy With Jfinserv</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/popper.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/isotop.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/snackbar.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/simplebar.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/parallax.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/scrollto.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/wow.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/slider.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/pricing-slider.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/script.js"></script>

  @endsection