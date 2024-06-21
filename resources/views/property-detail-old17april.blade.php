@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/bootstrap.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/responsive.css">
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
.home_adv_srch_opt .nav-pills li.nav-item a.nav-link{
  width: 125px !important;
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
body, h1, h2, h3, h4, h5, h6, p, span, b{
    font-family: "Roboto", sans-serif !important;
}
.spss ul li {
    border-radius: 8px;
    background-color: #0050b2 !important;
}
</style>


<div class="single_page_listing_tab">

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="slider_tabs" role="tabpanel" aria-labelledby="slider-tab">
          <!-- 10th Home Slider -->
        <div class="home10-mainslider">
          <div class="container-fluid p0">
            <div class="row">
                
              <div class="col-lg-12">
                <div class="main-banner-wrapper home10">
                    <div class="banner-style-one owl-theme owl-carousel">
                        
                       
                       
                      @foreach($getpropert_images as $getproperty_img)
                        <div class="slide slide-one" style="background-image: url({{config('app.baseURL')}}/storage/app/{{$getproperty_img->property_image}});height: 700px;"></div>
                        <!-- <div class="slide slide-one" style="background-image: url(https://jfinserv.com/images/propertydetail.jpg);height: 700px;"></div>
                        <div class="slide slide-one" style="background-image: url(https://jfinserv.com/images/propertydetail.jpg);height: 790px;"></div> -->
                        @endforeach
                    </div>
                    <div class="carousel-btn-block banner-carousel-btn">
                        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>
                        <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                    </div><!-- /.carousel-btn-block banner-carousel-btn -->
                </div><!-- /.main-banner-wrapper -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Agent Single Grid View -->
  <section class="our-agent-single bgc-f7 pb30-991">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-xl-8">
          <div class="single_property_title mt30-767 mb30-767">
          
            <h2>{{$property_new->property_name}}</h2>
            <p>{{$property_new->address}}</p>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="single_property_social_share">
            <div class="price float-left fn-400">
              <h2>₹ {{$property_new->from_property_price}} - ₹ {{$property_new->to_property_price}}</h2>
            </div>
            <!--<div class="spss mt20 text-right tal-400">-->
            <!--  <ul class="mb0">-->
            <!--    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>-->
            <!--    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>-->
            <!--    <li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>-->
            <!--    <li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>-->
            <!--  </ul>-->
            <!--</div>-->
          </div>
        </div>
        <div class="col-md-12 col-lg-12 mt50">
          <div class="row">
            <div class="col-lg-12">
              <div class="listing_single_description">
                <div class="lsd_list">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#">Apartment</a></li>
                    <!-- <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                    <li class="list-inline-item"><a href="#">Baths: 2</a></li> -->
                    <li class="list-inline-item"><a href="#">Type: {{$property_new->property_size}}</a></li>
                  </ul>
                </div>
                <h4 class="mb30">Description</h4>
                  <span class="mb25"><?php echo substr("$property_new->property_description", 0,200);?>
                      
                  </span>
                   <!-- <span class="gpara second_para white_goverlay mt10 mb10"><?php //echo substr("$property_new->property_description", 150,1000);?></span> -->
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                      <span class="mb-25"><?php echo substr("$property_new->property_description", 200,10000);?></span>
                      <!-- <span class="mt10 mb10"><?php //echo $property_new->property_description; ?></span> -->
                    </div>
                </div>
                <span class="overlay_close">
                  <a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                     Show More <span class="flaticon-download-1 fz12"></span>
                    </a>
                </span>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="additional_details">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb15">Property Details</h4>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-6">
                    <ul class="list-inline-item">
                      <li><p>Property ID :</p></li>
                      <li><p>Property Price Range:</p></li>
                      <li><p>Property Size :</p></li>
                      <li><p>Year Built :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>{{$property_new->property_id}}</span></p></li>
                      <li><p><span>₹ {{$property_new->from_property_price}} - ₹ {{$property_new->to_property_price}}</span></p></li>
                      <li><p><span>{{$property_new->property_size}}</span></p></li>
                      <li><p><span>2016-01-09</span></p></li>
                    </ul>
                  </div>
                  <!-- <div class="col-md-6 col-lg-6 col-xl-6">
                    <ul class="list-inline-item">
                      <li><p>Bedrooms :</p></li>
                      <li><p>Bathrooms :</p></li>
                      <li><p>Garage :</p></li>
                      <li><p>Garage Size :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>8</span></p></li>
                      <li><p><span>4</span></p></li>
                      <li><p><span>2</span></p></li>
                      <li><p><span>200 SqFt</span></p></li>
                    </ul>
                  </div> -->
                  <div class="col-md-6 col-lg-6 col-xl-6">
                    <ul class="list-inline-item">
                      <li><p>Property Type :</p></li>
                      <!-- <li><p>Property Status :</p></li> -->
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>
                          @if($property_new->property_type==1)
                            New Flat
                            @elseif($property_new->property_type==2)
                            Resale Flat
                            @elseif($property_new->property_type==3)
                            Lands
                            @else
                            Commercial
                            @endif
                      </span></p></li>
                      <!-- <li><p><span>For Sale</span></p></li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @if($property_new->getamenities!='[]')
            <div class="col-lg-12">
              <div class="additional_details">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb15">Amenities</h4>
                  </div>
                  @foreach($property_new->getamenities as $amenities)
                  <div class="col-md-6 col-lg-4">
                    <!-- <ul class="list-inline-item">
                      <li><p>Deposit :</p></li>
                      <li><p>Pool Size :</p></li>
                      <li><p>Additional Rooms :</p></li>
                    </ul> -->
                    
                    <ul class="list-inline-item">
                      
                      <li><p><span>{{$amenities->amenities_name}}</span></p></li>
                      </ul>
                   
                      <!-- <li><p><span>300 Sqft</span></p></li>
                      <li><p><span>Guest Bath</span></p></li> -->
                    
                  </div>
                     @endforeach
                  <!-- <div class="col-md-6 col-lg-6">
                    <ul class="list-inline-item">
                      <li><p>Last remodel year :</p></li>
                      <li><p>Amenities :</p></li>
                      <li><p>Equipment :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>1987</span></p></li>
                      <li><p><span>Clubhouse</span></p></li>
                      <li><p><span>Grill - Gas</span></p></li>
                    </ul>
                  </div> -->
                </div>
              </div>
            </div>
            @endif
            <!-- <div class="col-lg-12">
              <div class="property_attachment_area">
                <h4 class="mb30">Property Attachments</h4>
                <div class="iba_container style2">
                  <div class="icon_box_area style2">
                    <div class="score"><span class="flaticon-document text-thm fz30"></span></div>
                    <div class="details">
                      <h5><span class="flaticon-download text-thm pr10"></span> Demo Word Document</h5>
                    </div>
                  </div>
                  <div class="icon_box_area style2">
                    <div class="score"><span class="flaticon-pdf text-thm fz30"></span></div>
                    <div class="details">
                      <h5><span class="flaticon-download text-thm pr10"></span> Demo pdf Document</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-lg-12">
              <div class="property_attachment_area">
                <h4 class="mb30">Facilities</h4>
                <div class="iba_container style2">
                  <div class="icon_box_area1 style2">
                    <!-- <div class="score"><span class="flaticon-document text-thm fz30"></span></div> -->
                    <div class="details">
                      <h5>{{$property_new->facilities}}</h5>
                    </div>
                  </div>
                  <!-- <div class="icon_box_area style2">
                    <div class="score"><span class="flaticon-pdf text-thm fz30"></span></div>
                    <div class="details">
                      <h5><span class="flaticon-download text-thm pr10"></span> Demo pdf Document</h5>
                    </div>
                  </div> -->
                </div>
                <br>
                <a href="{{config('app.baseURL')}}/apply-now" class="btn btn-primary"> Apply Now</a>
              </div>
            </div>
           <!--  <div class="col-lg-12">
              <div class="application_statics mt30">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb10">Features</h4>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <ul class="order_list list-inline-item">
                      <li><a href="#"><span class="flaticon-tick"></span>Air Conditioning</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Barbeque</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Dryer</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Gym</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Laundry</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <ul class="order_list list-inline-item">
                      <li><a href="#"><span class="flaticon-tick"></span>Lawn</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Microwave</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Outdoor Shower</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Refrigerator</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Sauna</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <ul class="order_list list-inline-item">
                      <li><a href="#"><span class="flaticon-tick"></span>Swimming Pool</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>TV Cable</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Washer</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>WiFi</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Window Coverings</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
            <!--<div class="col-lg-12">-->
            <!--  <div class="application_statics mt30">-->
            <!--    <h4 class="mb30">Location <small class="float-right">{{$property_new->location}}</small></h4>-->
            <!--    <div class="property_video p0">-->
            <!--      <div class="thumb">-->
            <!--        <div class="h400" id="map-canvas2"></div>-->
            <!--        <div class="overlay_icon">-->
            <!--          <a href="{{$property_new->location}}"><img class="map_img_icon" src="images/header-logo.png" alt="header-logo.png"></a>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
           
            
            
            
           <!--  <div class="col-lg-12">
              <div class="application_statics">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="chart_circle_doughnut mt30">
                      <h4>Payment Calculator</h4>
                      <canvas class="mt50 mb50" id="myChart"></canvas>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                      <select class="selectpicker" data-live-search="true" data-width="100%">
                        <option data-tokens="Terms">Terms</option>
                        <option data-tokens="Terms2">Terms2</option>
                        <option data-tokens="Terms3">Terms3</option>
                        <option data-tokens="Terms4">Terms4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <input type="text" class="form-control" id="formGroupExampleWebsite" placeholder="Interest">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <input type="text" class="form-control" id="formGroupExampleFaceBook" placeholder="Home Price">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <input type="text" class="form-control" id="formGroupExampleTwitter" placeholder="Down Payment">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-2">
                    <div class="my_profile_setting_input form-group">
                        <input type="text" class="form-control" id="formGroupExampleLinkedin" placeholder="10%">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="application_statics shop_single_tab_content style3 mt30">
                <ul class="nav nav-tabs float-right fn-414" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="hourly-tab" data-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                  <div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
                    <h4 class="mt10-414">Property Views</h4>
                    <canvas id="myChartweave" width="100%" height="50"></canvas>
                  </div>
                  <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                    <h4 class="mt10-414">Property Views</h4>
                    <div class="c_container w100"></div>
                  </div>
                  <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                    <h4 class="mt10-414">Property Views</h4>
                    <canvas class="ls_barchart" id="chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="product_single_content">
                <div class="mbp_pagination_comments mt30">
                  <ul class="total_reivew_view">
                    <li class="list-inline-item sub_titles">896 Reviews</li>
                    <li class="list-inline-item">
                      <ul class="star_list">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </li>
                    <li class="list-inline-item avrg_review">( 4.5 out of 5 )</li>
                    <li class="list-inline-item write_review">Write a Review</li>
                  </ul>
                  <div class="mbp_first media">
                    <img src="images/testimonial/1.png" class="mr-3" alt="1.png">
                    <div class="media-body">
                        <h4 class="sub_title mt-0">Diana Cooper
                        <div class="sspd_review dif">
                          <ul class="ml10">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"></li>
                          </ul>
                        </div>
                        </h4>
                        <a class="sspd_postdate fz14" href="#">December 28, 2020</a>
                        <p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
                    </div>
                  </div>
                  <div class="custom_hr"></div>
                  <div class="mbp_first media">
                    <img src="images/testimonial/2.png" class="mr-3" alt="2.png">
                    <div class="media-body">
                        <h4 class="sub_title mt-0">Ali Tufan
                        <div class="sspd_review dif">
                          <ul class="ml10">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"></li>
                          </ul>
                        </div>
                        </h4>
                        <a class="sspd_postdate fz14" href="#">December 28, 2020</a>
                        <p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="product_single_content">
                <div class="mbp_pagination_comments mt30">
                  <div class="mbp_comment_form style2">
                    <h4>Write a Review</h4>
                    <ul class="sspd_review">
                      <li class="list-inline-item">
                        <ul class="mb0">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                      </li>
                      <li class="list-inline-item review_rating_para">Your Rating & Review</li>
                    </ul>
                    <form class="comments_form">
                      <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" placeholder="Your Review"></textarea>
                      </div>
                      <button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-lg-12">
              <h4 class="mt30 mb30">Similar Properties</h4>
            </div>
           @foreach($get_properties as $get_property)
            <div class="col-lg-4">
              <div class="feat_property">
                <div class="thumb">
                  <a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">
                  @php
                    $img=$get_property->propertyimages;
                    $property_img=$img->first();

                  @endphp
                  <img src="{{config('app.baseURL')}}/storage/app/{{$property_img->property_image}}" alt="blog-img" style="height:300px;object-fit:cover;width:400px;">
                </a>
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">
                      @if($get_property->property_type==1)
                                            <li class="list-inline-item" style="width: 100px;color:#fff;">New Flat</li>
                                            @elseif($get_property->property_type==2)
                                             <li class="list-inline-item" style="width: 100px;color:#fff;">Resale Flat</li>
                                            @elseif($get_property->property_type==3)
                                             <li class="list-inline-item" style="width: 80px;color:#fff;">Lands</li>
                                            @else
                                                <li class="list-inline-item" style="width: 100px;color:#fff;">Commercial}</li>
                                            @endif
                      <!-- <li class="list-inline-item"><a href="#">For Rent</a></li>
                      <li class="list-inline-item"><a href="#">Featured</a></li> -->
                    </a>
                    </ul>
                    <!--<ul class="icon mb0">-->
                    <!--  <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>-->
                    <!--  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>-->
                    <!--</ul>-->
<!--                     <a class="fp_price" href="#">$13,000<small>/mo</small></a> -->
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">{{$get_property->property_name}}</p>
                    <!-- <h4>Renovated Apartment</h4> -->
                    <p><span class="flaticon-placeholder"></span> {{$get_property->address}}</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="">₹ {{$get_property->from_property_price}} - ₹ {{$get_property->to_property_price}}</a></li>
                      <!-- <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li> -->
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><img src="{{config('app.baseURL')}}/images/builder.png" alt="Builder" style="height: 40px !important"></a></li>
                      <li class="list-inline-item"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">{{$get_property->property_name}}</a></li>
                    </ul>
                    <div class="fp_pdate float-right">4 years ago</div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-6">
              <div class="feat_property">
                <div class="thumb">
                  <img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Rent</a></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Renovated Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                      <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                    </ul>
                    <div class="fp_pdate float-right">4 years ago</div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-6">
              <div class="feat_property">
                <div class="thumb">
                  <img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Sale</a></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Renovated Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                      <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                    </ul>
                    <div class="fp_pdate float-right">4 years ago</div>
                  </div>
                </div>
              </div>
            </div> -->
           <!--  <div class="col-lg-6">
              <div class="feat_property">
                <div class="thumb">
                  <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Rent</a></li>
                      <li class="list-inline-item"><a href="#">Featured</a></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Renovated Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                      <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                    </ul>
                    <div class="fp_pdate float-right">4 years ago</div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        
      </div>
    </div>
  </section>

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