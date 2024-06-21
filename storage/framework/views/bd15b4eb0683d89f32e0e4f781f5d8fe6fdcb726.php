
<?php $__env->startSection('content'); ?>
<style type="text/css">
	.home_adv_srch_opt .nav-pills {
    border-bottom: none;
    margin: 0 auto;
    text-align: center;
    width: 100% !important;
}
body, h1, h2, h3, h4, h5, h6, p, span, b{
    font-family: "Roboto", sans-serif !important;
}
.footer-text{
    text-align:left;
}
.overline{
     text-align:left;
}
.time{
    text-align:left;
}
.f-widget-title{
        text-align:left;
}

.footer-link{
        text-align:left;
}
.why_chose_us .icon {
    background-color: #dde8f5 !important;
}
.home_adv_srch_opt .nav-pills li.nav-item a.nav-link{
	width: 125px !important;
}
    .navbar-expand-lg{
  background:#fff;
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link{
  color:#000;
}
.feat_property .thumb img {
    opacity: .6;
    object-fit: cover;
    height: 300px !important;
}

.text-top{
    padding-top: 50px;
}

@media (min-width: 992px){
.pb-lg-115 {
    padding-bottom: 90px;
}

.pt-200 {
    padding-top: 55px;
}
}
/*header*/
@media  screen and (min-width: 300px) and (max-width: 800px){
.img-fluid, .icon_mail_alt{
  margin-top: 0px!important;
}
.icon_clock_alt{
  margin-top: 3px!important;
}
}
@media  screen and (min-width: 801px) and (max-width: 2000px){

.icon_clock_alt{
  margin-top: 3px!important;
}
}
/*CSS for Mobile View*/

@media  screen and (min-width: 300px) and (max-width: 500px){
.home_content{
	margin-top: 158px;
}
#pills-home-tab{
	margin-bottom: 13px;
}
.search_option_button{
	margin-top: -29px;
}
.prop{
	margin-top: 0px;
} 
.blog-widget-title{
	margin-top: 226px;
}   
}
@media  screen and (min-width: 501px) and (max-width: 750px){
.home_content{
	margin-top: 21px;
}
#pills-home-tab{
	margin-bottom: 13px;
}
.search_option_button{
	margin-top: -29px;
}
.prop{
	margin-top: 0px;
}    
}
</style>
<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/property/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/property/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/property/css/responsive.css">
	<!-- Main Header Nav For Mobile -->


	<!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55" style="text-align: left;">Find Your Dream Home</h2>
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
                                    <?php echo csrf_field(); ?>
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
                                                            <?php $__currentLoopData = $get_builders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_builder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($get_builder); ?>"><?php echo e($get_builder); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
											    <div class="form-group">
											    	<input type="text" class="form-control" name="amount" id="exampleInputEmail" placeholder="Upto Price">
											    	<label for="exampleInputEmail"></label>
											    </div>
											</li>
							
											
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												    <a href="<?php echo e(config('app.baseURL')); ?>/properties" style="color:#0050b2">Clear Filter</a>
												</div>
											</li>
											
										</ul>
									</div>
								</form>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<form action="search" method="post">
                                    <?php echo csrf_field(); ?>
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
                                                            <?php $__currentLoopData = $get_builders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_builder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($get_builder); ?>"><?php echo e($get_builder); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
											    <div class="form-group">
											    	<input type="text" class="form-control" name="amount" id="exampleInputEmail" placeholder="Upto Price">
											    	<label for="exampleInputEmail"></label>
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
                                    <?php echo csrf_field(); ?>
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
                                                            <?php $__currentLoopData = $get_builders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_builder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($get_builder); ?>"><?php echo e($get_builder); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
											    <div class="form-group">
											    	<input type="text" class="form-control" name="amount" id="exampleInputEmail" placeholder="Upto Price">
											    	<label for="exampleInputEmail"></label>
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
                                    <?php echo csrf_field(); ?>
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
                                                            <?php $__currentLoopData = $get_builders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_builder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($get_builder); ?>"><?php echo e($get_builder); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
											    <div class="form-group">
											    	<input type="text" class="form-control" name="amount" id="exampleInputEmail" placeholder="Upto Price">
											    	<label for="exampleInputEmail"></label>
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
	<section>
	
		<div class="container">
			           <div class="related-post-widget pb-90">
			               <centre> <h4 class="blog-widget-title mb-45">All Properties</h4></centre>
                           
                            <div class="row gy-md-0 gy-4">
		
				<div class="col-lg-12 col-md-12 col-12 col-sm-12 row prop">
				

						<?php $__currentLoopData = $get_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						 <?php
                    $img=$get_property->propertyimages;
                    $property_img=$img->first();

                  ?>
                 
						<div class="col-md-6 col-lg-4 col-12 col-sm-12 d-flex mb-5">
						     <a href="<?php echo e(config('app.baseURL')); ?>/property/<?php echo e($get_property->property_id); ?>">
                                    <div class="blog-widget-2 wow fadeInUp" data-wow-delay="0.1s" style="width:100%;">
                                        <div class="blog-img">
                                            <?php if($property_img!=""): ?>
                                            <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($property_img->property_image); ?>" alt="blog-img" style="height:200px !important;object-fit:cover;">
                                             <?php endif; ?>
                                             <?php if($get_property->property_type==1): ?>
                                            <div class="catagory bg_primary">New Flat</div>
                                            <?php elseif($get_property->property_type==2): ?>
                                             <div class="catagory bg_primary">Resale Flat</div>
                                            <?php elseif($get_property->property_type==3): ?>
                                             <div class="catagory bg_primary">Lands</div>
                                            <?php else: ?>
                                                <div class="catagory bg_primary">Commercial</div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="blog-content">
                                            <h4><a href="<?php echo e(config('app.baseURL')); ?>/property/<?php echo e($get_property->property_id); ?>"><b><?php echo e($get_property->property_name); ?></b></a>
                                            </h4>
                                            <span>by <?php echo e($get_property->builder_name); ?></span>

                                            <h6 style="font-weight: 600;"><a href="<?php echo e(config('app.baseURL')); ?>/property/<?php echo e($get_property->property_id); ?>"><?php echo e($get_property->property_size); ?></a>
                                            </h6>
                                             <?php
                      $string = strip_tags($get_property->property_description);
                      if (strlen($string) > 50) {


                        $stringCut = substr($string, 0, 50);
                        $endPoint = strrpos($stringCut, ' ');


                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                      }
                      ?>
                      <?php if(strlen($get_property->property_description) > 50): ?>
                      <p>
                        <?php echo $string ?>..   
                      </p>
                      <?php else: ?>
                      <p>
                        <?php echo $get_property->property_description ?>   
                      </p>
                      <?php endif; ?>
                                            <div class="post-info">
                                               ₹ <?php echo e($get_property->from_property_price); ?> - ₹ <?php echo e($get_property->to_property_price); ?>

                                            </div>

                                           <!--  <div class="row">
                                                <div class="col-md-6">
                                                    <button><i class="fa fa-telephone"></i><?php echo e($get_property->contact_number); ?></button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button><i class="fa fa-mail"></i><?php echo e($get_property->contact_number); ?></button>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
							
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
						<h2>Property Assistance By <span style="color: #0050b2;">JFINSERV</span></h2>
						<p style='font-size: 18px;'>Advantage of buying properties with our associate partners.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4 d-flex">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Trusted Builders & Realtors</h4>
							<p>We have more than 50+ trusted builders and real estate agents as our trusted partners.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4 d-flex">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Wide Range Of Properties</h4>
							<p>From Residential to Commercial & Industrial, we offer diverse range of properties. JFinserv is aimed at property financing easier.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4 d-flex">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Easier Financing with JFINSERV</h4>
							<p>JFinserv offers most easier, quicker and instant home loans at your doorstep with our real estate partners.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



</div>
<!-- Wrapper End -->
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/jquery.mmenu.all.js"></script>
<!--<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/ace-responsive-menu.js"></script>-->
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/isotop.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/snackbar.min.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/simplebar.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/parallax.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/scrollto.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/wow.min.js"></script>
<!--<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/slider.js"></script>-->
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/pricing-slider.js"></script>
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/property/js/script.js"></script>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u540016792/domains/jfinserv.com/public_html/resources/views/propertynew.blade.php ENDPATH**/ ?>