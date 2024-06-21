@extends('layouts.app',['title'=>$blog_detail->seo_title])
@section('keywords',$blog_detail->keywords)
@section('description',$blog_detail->description)
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
p{
    font-weight: 400;
}
.flex-fill{
    height:auto !important;
    vertical-align: middle !important;
    object-fit: contain !important;
}

</style>

    <section class="p-0 border-top border-bottom bg-light row no-gutters">
      <div class="col-lg-12 col-xl-12 order-lg-2">
        <!--<div class="divider divider-side transform-flip-y bg-light d-none d-lg-block"></div>-->
        <img class="flex-fill" src="{{config('app.baseURL')}}/storage/app/{{$blog_detail->image}}" alt="{{$blog_detail->blog_title}}" >
      </div>
      <!--<div class="col-lg-7 col-xl-6">-->
      <!--  <div class="container min-vh-lg-70 d-flex align-items-center">-->
      <!--    <div class="row justify-content-center">-->
      <!--      <div class="col col-md-10 col-xl-9 py-4 py-sm-5">-->
      <!--        <div class="my-4 my-md-5">-->
      <!--          <div class="d-flex align-items-center mb-3 mb-xl-4">-->
      <!--             <a href="#" style="margin-right: 5px;"><i class="badge badge-pill badge-primary"></i> {{$blog_detail->view_count}} Views</a>-->
      <!--            <a href="#" class="badge badge-pill badge-danger">{{$blog_detail->blog_type->blog_type_name}}</a>-->
      <!--            <div class="ml-3 text-small text-muted">{{$blog_detail->created_at->format('j')}}<span>{{$blog_detail->created_at->format('M Y')}}</div>-->
      <!--          </div>-->
      <!--          <h1 class="display-4">-->
      <!--       {{$blog_detail->blog_title}}-->
      <!--      </h1>-->
      <!--          <a href="#" class="d-flex align-items-center">-->
      <!--            <img src="{{asset('assets\img\user.png')}}" alt="user" class="avatar avatar-sm">-->
      <!--            <div class="h6 mb-0 ml-3">Team Finkompas</div>-->
      <!--          </a>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </section>

    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-12 col-lg-8 col-md-10">
            <article class="article">
              <!-- <h3 class="h2">{{$blog_detail->blog_title}}</h3> -->
              <p>
                 <?php echo $blog_detail->blog_description ?> </p>
            </article>
            <div class="mt-4 mt-sm-5 border-top pt-5 d-none d-sm-block">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#">{{$blog_detail->blog_title}}</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">{{$blog_detail->blog_type->blog_type_name}}</a>
                  </li>
                  <li class="breadcrumb-item">{{$blog_detail->created_at->format('j')}}<span>{{$blog_detail->created_at->format('M Y')}}</li>
                  <li class="breadcrumb-item"> {{$blog_detail->view_count}} Views</li>
                </ol>
              </nav>
            </div>
            <div class="my-4 my-sm-5 card card-body flex-sm-row justify-content-between align-items-center">
              <div class="h5 mb-sm-0">Share this article:</div>
              <div class="d-flex">
                <a href="#" class="btn btn-sm btn-primary rounded-circle mx-1">
                  <img src="{{asset('assets\img\icons\social\twitter.svg')}}" alt="Twitter" class="icon icons-m bg-white" data-inject-svg="">
                </a>
                <a href="#" class="btn btn-sm btn-primary rounded-circle mx-1">
                  <img src="{{asset('assets\img\icons\social\facebook.svg')}}" alt="Facebook" class="icon icons-m bg-white" data-inject-svg="">
                </a>
                <a href="#" class="btn btn-sm btn-primary rounded-circle mx-1">
                  <img src="{{asset('assets\img\icons\social\linkedin.svg')}}" alt="Linked In" class="icon icons-m bg-white" data-inject-svg="">
                </a>
              </div>
            </div>
            

          </div>
        </div>
      </div>
    </section>
    @php
  $length=count($get_blogs);
  @endphp
  @if($length>0)
    <section class="bg-light">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="h1">More great blogs</h3>

          </div>
        </div>
        <div class="row">
          @foreach($get_blogs as $get_blog)
      <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
        <div class="card h-100 hover-box-shadow">
          <a href="{{config('app.baseURL')}}/blog/{{$get_blog->url}}" class="d-block bg-gradient rounded-top">
            <img class="card-img-top hover-fade-out" src="{{config('app.baseURL')}}/storage/app/{{$get_blog->image}}" alt="{{$get_blog->blog_title}}">
          </a>
          <div class="card-body">
            <a href="{{config('app.baseURL')}}/blog/{{$get_blog->url}}">
              <h4>{{$get_blog->blog_title}}</h4>
            </a>
          
            <a href="{{config('app.baseURL')}}/blog/{{$get_blog->url}}">Read Story</a>
          </div>
          <div class="card-footer d-flex justify-content-between align-items-center">
             <a href="#"><i class="fa fa-user"></i> {{$get_blog->view_count}} Views</a>
            <a href="javascript:void(0);" class="badge badge-pill badge-info">{{$get_blog->blog_type->blog_type_name}}</a>
            <div class="text-small text-muted"> {{$get_blog->created_at->format('j')}}<span>{{$get_blog->created_at->format('M Y')}}</span></div>
          </div>
        </div>
      </div>
          @endforeach
        </div>
      </div>
    </section>
    @endif
@endsection