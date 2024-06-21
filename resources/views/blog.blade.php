@extends('layouts.app')
@section('content')
<style type="text/css">
  .display-3{
    text-align: left;
  }
  .bg-secondary{
    background-color: #000 !important;
    color: #fff;
  }
  .lead{
    text-align: left;
  }
  .final-figure{
    color: #077273;
    font-size: 45px;
  }
  .term-text-justify{
   text-align: justify;
   text-justify: inter-word;
 }
 .labels{
  font-size: 13px;
}
.card-img-top{
  height: 235px;
  object-fit: cover;
}

@media only screen and (min-width: 800px){
  .header-button{
    margin-right: 15%;
    margin-left: -25%;
    border-radius: 0px !important;
  }

}
@media only screen and (max-width: 767px){
  .container{
    overflow: hidden;
  }
}
.term-fluid{

  object-fit: cover;
  object-position: center;
}
.header-details{
  padding: 12px;
  background-color: #0251523d;
  margin-bottom: 10px;
  border-radius: 2px;
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
          <h2 class="display-3">Blog</h2>
          <h4 class="display-5">Explore more with our blogs. 
          </h4>
         
          
        </div>
      </div>
    </div>
       <!--  <div class="position-absolute w-50 h-100 top left" data-jarallax-element="100 50">
          <div class="blob blob-4 bg-gradient w-100 h-100 top left"></div>
        </div> -->

      </section>
    </div>

<section>
  <div class="container">
    <div class="row">
      @foreach($blogs as $blog)
      <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
        <div class="card h-100 hover-box-shadow">
          <a href="{{config('app.baseURL')}}/blog/{{$blog->url}}" class="d-block bg-gradient rounded-top">
            <img class="card-img-top hover-fade-out" src="{{config('app.baseURL')}}/storage/app/{{$blog->image}}" alt="{{$blog->blog_title}}">
          </a>
          <div class="card-body">
            <a href="{{config('app.baseURL')}}/blog/{{$blog->url}}">
              <h4>{{$blog->blog_title}}</h4>
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
             <a href="#"><i class="fa fa-user"></i> {{$blog->view_count}} Views</a>
            <a href="javascript:void(0);" class="badge badge-pill badge-info">{{$blog->blog_type->blog_type_name}}</a>
            <div class="text-small text-muted"> {{$blog->created_at->format('j')}}<span>{{$blog->created_at->format('M Y')}}</span></div>
          </div>
        </div>
      </div>
     @endforeach
    </div>
    <div class="row justify-content-center mt-4">
      <div class="col-auto">
        <nav>
          <ul class="pagination">
           {{ $blogs->links() }}
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
@endsection