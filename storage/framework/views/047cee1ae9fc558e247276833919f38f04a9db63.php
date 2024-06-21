    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>


    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow ">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">

                </div>
                <ul class="nav navbar-nav float-right">
                    
                     <?php if(auth()->guard()->check()): ?>
 
 <?php
 $user=Auth::user();
 $name=$user->name;
 $role=$user->role_id;
 ?>


<?php else: ?>
  <?php

 $name="";

 ?>
 <?php endif; ?>

                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>

                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo e($name); ?></span><span class="user-status">Available</span></div><span><img class="round" src="<?php echo e(asset('images\user.png')); ?>" alt="avatar" height="40" width="40"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo e(config('app.baseURL')); ?>/logout"><i class="feather icon-power"></i> Logout</a>
                        <form id="logout-form" action="login" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="GdyPYOKZAR3FMLesHiRNpzvZDkKB9Th0na5rBXoI">                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


                                                <!-- END: Header--><?php /**PATH /home/u838013575/domains/jfinserv.com/public_html/resources/views/layouts/admin-header.blade.php ENDPATH**/ ?>