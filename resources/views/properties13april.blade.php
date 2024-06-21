@extends('layouts.app')
@section('content')

<style type="text/css">
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #ffffff;
    border-bottom-left-radius: 1px solid #000;
    border-bottom: 2px solid #0050b2 !important;
    border-radius: 0px !important;
}
.blog-widget-2 .blog-content .post-info {
    display: flex;
    justify-content: space-between;
    margin-top: 5px !important;
}
</style>

    <main>
        <!-- BreadCrumb start-->
        <section class="breadcrumb-area" >
            <div cclass="breadcrumb-widget  pt-145 pb-200"
                style="background-image: url({{config('app.baseURL')}}/assets/img/breadcrumb/bg-3.jpg); padding-top: 100px;">

               <div class="container">
                    <div class="row pb-100 pb-sm-0">
                        <div class="col-md-12">
                            <div class="breadcrumb-content pt-140 pb-15">
                                <h1>Properties</h1>
                                <ul>
                                    <li><a href="{{config('app.baseURL')}}">home</a></li>
                                    <li><a href="#">properties</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <div class="floated-widget search-job ">
                            <div class="d-flex justify-content-between flex-wrap">
                                <h4 class="mb-0">Search for Properties</h4>
                                <p>25 properties available</p>
                            </div>


                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="justify-content: center;">
  <li class="nav-item" role="presentation">
    <button class="nav-link active text-secondary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#popular-home" type="button" role="tab" aria-controls="popular-home" aria-selected="true"><h6 class="filter-link"><b>New Flat</b></h6></button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link text-secondary" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#popular-home2" type="button" role="tab" aria-controls="popular-home2" aria-selected="false"><h6 class="filter-link"><b>Resale Flat</b></h6></button>
  </li>

  <li class="nav-item " role="presentation">
    <button class="nav-link text-secondary" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#popular-home3" type="button" role="tab" aria-controls="popular-home3" aria-selected="false"><h6 class="filter-link"><b>Lands</b></h6></button>
  </li>

  <li class="nav-item " role="presentation">
    <button class="nav-link text-secondary" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#popular-home4" type="button" role="tab" aria-controls="popular-home4" aria-selected="false"><h6 class="filter-link"><b>Commercial</b></h6></button>
  </li>

</ul>

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade active show" id="popular-home" role="tabpanel" aria-labelledby="pills-home-tab">  

                   <div class="px-3">
                    <form action="search" method="post">
                                    @csrf
                                <div class="row search-box align-items-center py-2 mt-30 gy-md-0 gy-3">
                                    <input type="hidden" name="type" value="1">
                                    <div class="col-lg-6 col-md-5 border-end">
                                        <div class="input-field">
                                            
                                            <input class="form-control" name="keyword" type="text"
                                                placeholder="Location, builder">
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="input-field">
                                            
                                            <input class="form-control" name="budget" type="text" placeholder="Budget">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 text-md-end text-center pe-2">


                                        <button class="btn btn-primary" type="submit">Search</button>
                                       <!--   <div class="calculator-slider pt-40 pb-5 ps-md-4 pe-md-5 px-1">
                                <label>Budget</label>
                                <div class="d-flex align-items-center">
                                    <div class="range-slider" id="SliderAmount"></div>
                                    <input class="range-input" type="text" id="SetSliderAmount">
                                </div>
                                <span class="range">Min ₹5,00000 - Max ₹550,00000</span>
                            </div> -->
                                    </div>
                                </div>
                            </form>
                            </div>

</div>

<!-- filter 1 end -->

  <div class="tab-pane fade" id="popular-home2" role="tabpanel" aria-labelledby="pills-profile-tab">                  <div class="px-3">

                                 <form action="search" method="post">
                                    @csrf
                                    <input type="hidden" name="type" value="2">
                                <div class="row search-box align-items-center py-2 mt-30 gy-md-0 gy-3">
                                    <div class="col-lg-6 col-md-5 border-end">
                                        <div class="input-field">
                                            
                                           <input class="form-control" type="text" name="keyword" 
                                                placeholder="property name, builder name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="input-field">
                                            
                                            <input class="form-control" name="budget" type="text" placeholder="Budget">
                                        </div>
                                    </div>
                                   <div class="col-lg-2 col-md-3 text-md-end text-center pe-2">


                                        <button class="btn btn-primary" type="submit">Search</button>
                                       <!--   <div class="calculator-slider pt-40 pb-5 ps-md-4 pe-md-5 px-1">
                                <label>Budget</label>
                                <div class="d-flex align-items-center">
                                    <div class="range-slider" id="SliderAmount"></div>
                                    <input class="range-input" type="text" id="SetSliderAmount">
                                </div>
                                <span class="range">Min ₹5,00000 - Max ₹550,00000</span>
                            </div> -->
                                    </div>
                                </div>
                                </form>
                            </div>
</div>

<!-- filter 2 end -->

  <div class="tab-pane fade" id="popular-home3" role="tabpanel" aria-labelledby="pills-contact-tab">
                     <div class="px-3">
                        <form action="search" method="post">
                                    @csrf
                                <div class="row search-box align-items-center py-2 mt-30 gy-md-0 gy-3">
                                     <input type="hidden" name="type" value="3">
                                    <div class="col-lg-6 col-md-5 border-end">
                                        <div class="input-field">
                                            
                                            <input class="form-control" type="text" name="keyword" 
                                                placeholder="property name, builder name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="input-field">
                                            
                                            <input class="form-control" name="budget" type="text" placeholder="Budget">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 text-md-end text-center pe-2">


                                        <button class="btn btn-primary" type="submit">Search</button>
                                       <!--   <div class="calculator-slider pt-40 pb-5 ps-md-4 pe-md-5 px-1">
                                <label>Budget</label>
                                <div class="d-flex align-items-center">
                                    <div class="range-slider" id="SliderAmount"></div>
                                    <input class="range-input" type="text" id="SetSliderAmount">
                                </div>
                                <span class="range">Min ₹5,00000 - Max ₹550,00000</span>
                            </div> -->
                                    </div>
                                </div>
                            </form>
                            </div>
</div>
 <div class="tab-pane fade" id="popular-home4" role="tabpanel" aria-labelledby="pills-contact-tab">
                     <div class="px-3">
                        <form action="search" method="post">
                                    @csrf
                                <div class="row search-box align-items-center py-2 mt-30 gy-md-0 gy-3">
                                     <input type="hidden" name="type" value="4">
                                    <div class="col-lg-6 col-md-5 border-end">
                                        <div class="input-field">
                                            
                                           <input class="form-control" type="text" name="keyword" 
                                                placeholder="property name, builder name">
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="input-field">
                                            
                                            <input class="form-control"  name="budget" type="text" placeholder="Budget">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 text-md-end text-center pe-2">


                                        <button class="btn btn-primary" type="submit">Search</button>
                                       <!--   <div class="calculator-slider pt-40 pb-5 ps-md-4 pe-md-5 px-1">
                                <label>Budget</label>
                                <div class="d-flex align-items-center">
                                    <div class="range-slider" id="SliderAmount"></div>
                                    <input class="range-input" type="text" id="SetSliderAmount">
                                </div>
                                <span class="range">Min ₹5,00000 - Max ₹550,00000</span>
                            </div> -->
                                    </div>
                                </div>
                            </form>
                            </div>
</div>
            </div>
           
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- BreadCrumb end-->


        <!-- Blog Posts start-->
        <section class="pt-200 pb-145 bg_disable">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="blog-post-widget">
                            <div class="row gy-4 ">

                                @foreach($get_properties as $get_property)
                               
                                <div class="col-md-4">
                                    <a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">
                                        </a>
                                    <a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">
                                    <div class="blog-widget-2 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="blog-img">
                                            <a href="{{config('app.baseURL')}}/property/{{$get_property->property_id}}">
                                            <img src="{{config('app.baseURL')}}/storage/app/{{$get_property->property_image}}"  alt="blog-img"></a>
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
                                </a>
                                </div>
                          
                                @endforeach
                                
                               

                            </div>
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Blog Posts end-->
    </main>

@endsection