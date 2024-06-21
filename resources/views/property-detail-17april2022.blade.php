@extends('layouts.app')
@section('content')

<main>

        <!-- BreadCrumb start-->
        <section class="breadcrumb-area" id="banner_animation2">
            <div class="breadcrumb-widget breadcrumb-widget-2  pt-200 pb-145"
                style="background-image: url({{config('app.baseURL')}}/assets/img/breadcrumb/bg-3.jpg);">

                <div class="shapes">
                    <div class="one-shape shape-3" data-parallax='{"x": -100, "y": 0, "rotateZ":0}'>
                        <img src="{{config('app.baseURL')}}/{{config('app.baseURL')}}/assets/img/breadcrumb/Polygon-3.png" alt="shape">
                    </div>
                    <div class="one-shape shape-4" data-parallax='{"x": -200, "y": 0, "rotateZ":0}'>
                        <img src="{{config('app.baseURL')}}/{{config('app.baseURL')}}/assets/img/breadcrumb/Polygon-4.png" alt="shape">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="breadcrumb-content pt-50">
                                <h1>{{$property->property_name}}</h1>
                                <div class="post-info mt-5">
                                    <div class="autor mr-20">
                                        <img src="{{config('app.baseURL')}}/assets/img/blog/user-profile.png" alt="icon">
                                        <span>{{$property->builder_name}}</span>
                                    </div>
                                    <div class="date">
                                        <img src="{{config('app.baseURL')}}/assets/img/blog/calendar-outline.png" alt="icon">
                                        <span>{{$property->created_at}}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BreadCrumb end-->


        <!-- Blog Details start-->
        <section class="pt-120 pb-120 bg_disable">
            <div class="container">
                <div class="row gy-lg-0 gy-4">
             
                    <div class="col-lg-12">

                        <div class="post-details-widget pb-70 border-bottom position-relative">
                            <img class="post-img w-100" src="{{config('app.baseURL')}}/storage/app/{{$property->property_image}}" alt="post image">

                            <p class="post-text mt-35">Price Range: <b>₹ {{$property->from_property_price}} - ₹ {{$property->to_property_price}}</b>
                            </p>
                            <p class="post-text mt-35">Property Size: <b>{{$property->property_size}}</b>
                            </p>

                            <p class="post-text mt-35">{{$property->property_description}}
                            </p>
                          
                           <a href="tel:{{$property->contact_number}}"><button class="btn btn-primary">Contact Now</button></a>
                        </div>
                        <div class="author-media-widget mt-90 mb-90">
                            <div class="author-img">
                                <img class="rounded-circle" src="{{config('app.baseURL')}}/assets/img/blog/author-1.png" alt="author">
                            </div>
                            <div class="author-info">
                                <h6>by {{$property->builder_name}}</h6>
                             
                            </div>
                        </div>
                        <div class="related-post-widget pb-90">
                            <h4 class="blog-widget-title mb-45">Related Properties</h4>
                            <div class="row gy-md-0 gy-4">

                                                                @foreach($get_properties as $get_property)
                                <div class="col-md-4">
                                    <div class="blog-widget-2 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="blog-img">
                                            <img src="{{config('app.baseURL')}}/storage/app/{{$get_property->property_image}}" alt="blog-img">
                                             @if($get_property->property_type==1)
                                            <div class="catagory bg_primary">New Flat</div>
                                            @elseif($get_property->property_type==2)
                                             <div class="catagory bg_primary">Resale Flat</div>
                                            @elseif($get_property->property_type==3)
                                             <div class="catagory bg_primary">Lands</div>
                                            @else
                                                <div class="catagory bg_primary">Commercial}</div>
                                            @endif
                                        </div>
                                        <div class="blog-content">
                                            <h4><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">{{$get_property->property_name}}</a>
                                            </h4>
                                            <span>by {{$get_property->builder_name}}</span>

                                            <h6 style="font-weight: 600;"><a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">{{$get_property->property_size}}</a>
                                            </h6>
                                             <?php
                      $string = strip_tags($get_property->property_description);
                      if (strlen($string) > 50) {


                        $stringCut = substr($string, 0, 50);
                        $endPoint = strrpos($stringCut, ' ');


                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                      }
                      ?>
                      @if (strlen($get_property->property_description) > 50)
                      <p>
                        <?php echo $string ?>..   
                      </p>
                      @else
                      <p>
                        <?php echo $get_property->property_description ?>   
                      </p>
                      @endif
                                            <div class="post-info">
                                               ₹ {{$get_property->from_property_price}} - ₹ {{$get_property->to_property_price}}
                                            </div>

                                           <!--  <div class="row">
                                                <div class="col-md-6">
                                                    <button><i class="fa fa-telephone"></i>{{$get_property->contact_number}}</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button><i class="fa fa-mail"></i>{{$get_property->contact_number}}</button>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>

                        

                        
                    </div>

                    
                </div>
            </div>
        </section>

        <!-- Blog Details end-->
    </main>
@endsection