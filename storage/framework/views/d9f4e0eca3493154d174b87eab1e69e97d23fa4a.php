<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>JFINSERV</title>
    <!-- <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> -->
    
    <link rel="icon" href="<?php echo e(config('app.baseURL')); ?>/images/logo/fav.png" type="image/x-icon">

    <!-- CSS here -->
     <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.baseURL')); ?>/assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.baseURL')); ?>/assets/css/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.baseURL')); ?>/assets/css/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.baseURL')); ?>/assets/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.baseURL')); ?>/assets/css/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.baseURL')); ?>/assets/css/default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.baseURL')); ?>/assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.baseURL')); ?>/assets/css/responsive.css" media="all" />
    <link rel="stylesheet" href="<?php echo e(asset('css/toaster.css')); ?>" rel="stylesheet" type="text/css" media="all">
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
    <script src="<?php echo e(config('app.baseURL')); ?>/js/direflowBundle_dsmatics.js"></script>
</head>

<body>
    <chatbot-component url="https://jfinbotapi.dsmatics.com"></chatbot-component>
    <!-- Preloader -->
    <!--<div id="preloader">-->
    <!--    <div id="ctn-preloader" class="ctn-preloader">-->
    <!--        <div class="round_spinner">-->
    <!--            <div class="spinner"></div>-->
    <!--            <div class="text">-->
               
    <!--                <h2>JFINSERV</h2>-->
    <!--            </div>-->
    <!--        </div>-->
            
    <!--    </div>-->
    <!--</div>-->

  <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>
  <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- JS here -->
   
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/preloader.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.smoothscroll.min.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/parallax.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.parallax-scroll.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/js/toaster.min.js"></script>

    <script type="text/javascript" src="<?php echo e(config('app.baseURL')); ?>/assets/js/custom.js"></script>
    <!--<script type="text/javascript" src="<?php echo e(asset('assets\js\toaster.min.js')); ?>"></script>-->

    <script src="<?php echo e(asset('assets/summernote/summernote-bs4.min.js')); ?>"></script>
     <script>
       <?php if(Session::has('message')): ?>
       var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
       switch(type){
        case 'info':
        toastr.info("<?php echo e(Session::get('message')); ?>");
        break;

        case 'warning':
        toastr.warning("<?php echo e(Session::get('message')); ?>");
        break;
        case 'success':
        toastr.success("<?php echo e(Session::get('message')); ?>");
        break;
        case 'error':
        toastr.error("<?php echo e(Session::get('message')); ?>");
        break;
      }
      <?php endif; ?>
    </script>
</body>

</html><?php /**PATH /home/jfinserv.com/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>