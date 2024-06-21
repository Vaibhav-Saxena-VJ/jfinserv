<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>JFINSERV</title>
    <!-- <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> -->

    <!-- CSS here -->
     <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/assets/css/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/assets/css/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/assets/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/assets/css/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/assets/css/default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/assets/css/responsive.css" media="all" />
    <style type="text/css">
        .header-menu.header-menu-2 .menu > .nav-item > .nav-link {
    color: #fff;
}
.header-menu.navbar_fixed .menu > .nav-item > .nav-link {
    color: #000 !important;
}
.header .header-top .header-info-left {

    color: #fff !important;
  
}
.header .header-top .header-info-right ul li a {
    color: #fff;
    /*font-size: 14px;*/
}

    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <!-- <img src="img/logo/Logo-2.png" alt=""> -->
                    <h2>JFINSERV</h2>
                </div>
            </div>
            <!-- <h2 class="head">Did You Know?</h2> -->
            <!-- <p></p> -->
        </div>
    </div>

  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')



    <!-- JS here -->
   
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/preloader.js"></script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/jquery.smoothscroll.min.js"></script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/parallax.js"></script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/jquery.parallax-scroll.js"></script>
    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/wow.min.js"></script>

    <script type="text/javascript" src="{{config('app.baseURL')}}/assets/js/custom.js"></script>
</body>

</html>