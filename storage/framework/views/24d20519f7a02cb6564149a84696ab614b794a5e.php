 <!-- Header  -->
 <style>
 /*.loginbtn {
      background-color: var(--primary-color);
  color: white;
  padding: 14px;
  font-size: 16px;
  border: none;
  font-family: "Roboto", sans-serif
}*/
.dropbtn {
      /*background-color: var(--primary-color);*/
  color: white;
  /*padding: 14px;*/
  font-size: 16px;
  border: none;
  font-family: "Roboto", sans-serif
}
/*
.dropdown {
  position: relative;
  display: inline-block;
}
*/
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #d5d4d4;
  min-width: 109px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.header-menu .menu > .nav-item + .nav-item {
    margin-left: 20px;
}

@media  screen and (min-width: 400px) and (max-width: 768px){
.dropdown , .loginbtn{
    z-index: 2;
    line-height: 13px;
}
.timestamp{
  margin-left: 0rem!important;
}
header .header-top .header-info-right ul li a {
    color: #bbc0c4;
    font-size: 13px;
}
.img-fluid, .icon_mail_alt{
  margin-top: 7px;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #d5d4d4;
    min-width: 100px!important;
    box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
    z-index: 1;
    margin-top: 6px;
}

}
@media  screen and (min-width: 768px) and (max-width: 850px){
header .header-top .header-info-right ul li a {
    color: #bbc0c4;
    font-size: 12px;
}
}
@media  screen and (min-width: 300px) and (max-width: 399px){
.dropdown , .loginbtn{
    z-index: 2;
    line-height: 13px;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #d5d4d4;
    min-width: 89px!important;
    box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
    z-index: 1;
    margin-left: -5px;
}
.timestamp{
  margin-left: 0rem!important;
}
header .header-top .header-info-right ul li a {
    color: #bbc0c4;
    font-size: 12px;
}
.img-fluid, .icon_mail_alt{
  margin-top: 7px;
}
header .header-top .header-info-right ul li img {
     margin-right: 0px; 
}
}
/*Dropdown*/
@media  screen and (min-width: 300px) and (max-width: 499px){
#navbarSupportedContent{
  margin-left: 100px;
}
}
@media  screen and (min-width: 500px) and (max-width: 650px){
#navbarSupportedContent{
  margin-left: 250px;
}
}
@media  screen and (min-width: 651px) and (max-width: 750px){
#navbarSupportedContent{
  margin-left: 350px;
}
}
@media  screen and (min-width: 751px) and (max-width: 800px){
#navbarSupportedContent{
  margin-left: 350px;
}
}


/*.dropdown-content a:hover {background-color: #ddd;}*/

.dropdown:hover .dropdown-content {display: block;}

/*.dropdown:hover .dropbtn {    background-color: var(--primary-color);;}*/
</style>
    <header class="header">
        <div class="header-top py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="header-info-left">

                          <!--   <div class="language-list">
                                <select id="select-lang">
                                    <option value="English">English</option>
                                    <option value="Bangla">Bangla</option>
                                    <option value="French">French</option>
                                    <option value="Hindi">Hindi</option>
                                </select>
                            </div> -->

                            <div class="timestamp ms-4"> <i class="icon_clock_alt" style="margin-top: 9px;"></i> Mon - Fri 10:00-18:00
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="header-info-right">
                            <ul>
                                <li>
                                    <img class="img-fluid" src="<?php echo e(config('app.baseURL')); ?>/assets/img/phone-outline-white.png" alt="phone"><a
                                        href="tel:+918329729190">+918329729190</a>
                                </li>

                                <li>
                                    <i class="icon_mail_alt"></i><a
                                        href="mailto:contact@jfinserv.com">contact@jfinserv.com</a>
                                </li>
                               
                            <li>
                              <?php if(auth()->guard()->check()): ?>
                              <div class="dropdown" style="z-index: 2;">
                                  <a class="loginbtn dropbtn">Logged In as (<?php echo Auth::user()->name; ?>)</a>
                                  <div class="dropdown-content">
                                      <?php
                                       $user=Auth::user();
                                       $role_id=$user->role_id;
                                      ?>
                                      
                                      <?php if($role_id==1 || $role_id==4): ?>
                                      <a href="<?php echo e(config('app.baseURL')); ?>/admin/dashboard">Dashboard</a>
                                      <?php else: ?>
                                      <a href="<?php echo e(config('app.baseURL')); ?>/myprofile">My Profile</a>
                                      
                                      <?php endif; ?>
                                    
                                    
                                    <a href="<?php echo e(config('app.baseURL')); ?>/logout">Logout</a>
                                  </div>
                              </div>
                              <?php else: ?>
                                <a class="loginbtn" href="<?php echo e(config('app.baseURL')); ?>/login">Login / Register</a>
                              <?php endif; ?> 
                            </li> 

                       
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu header-menu-2" id="sticky">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(config('app.baseURL')); ?>">
                         <img src="<?php echo e(config('app.baseURL')); ?>/images/logo/logo.png" srcset="<?php echo e(config('app.baseURL')); ?>/images/logo/logo.png" alt="logo" style="width:200px;"> 
                        <!--<h2>JFINSERV</h2>-->
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu ms-auto">
                            <li class="nav-item ">
                                <a href="<?php echo e(config('app.baseURL')); ?>" class="nav-link dropdown-toggle" role="button"
                                    >Home</a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                    data-bs-toggle="dropdown"></i>
                               
                            </li>

                             <li class="nav-item ">
                                <a href="<?php echo e(config('app.baseURL')); ?>/about-us" class="nav-link dropdown-toggle" role="button"
                                    >About Us</a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                    data-bs-toggle="dropdown"></i>
                               
                            </li>

                            <li class="nav-item ">
                                <a href="<?php echo e(config('app.baseURL')); ?>/services" class="nav-link dropdown-toggle" role="button"
                                    >Services</a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                    data-bs-toggle="dropdown"></i>
                               
                            </li>


                            
                            <li class="nav-item ">
                                <a href="<?php echo e(config('app.baseURL')); ?>/referral-program" class="nav-link dropdown-toggle" role="button">Referral Program</a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                    data-bs-toggle="dropdown"></i>
                               
                            </li>
                            <li class="nav-item ">
                                <a href="<?php echo e(config('app.baseURL')); ?>/properties" class="nav-link dropdown-toggle" role="button"
                                    >Properties</a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                    data-bs-toggle="dropdown"></i>
                               
                            </li>
                            <li class="nav-item ">
                                <a href="<?php echo e(config('app.baseURL')); ?>/contact" class="nav-link dropdown-toggle" role="button"
                                    >Contact Us</a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                    data-bs-toggle="dropdown"></i>
                               
                            </li>
                            
                            <?php
                            $user=Auth::user();
                            if($user!=""){
                            $user_id=$user->id;
                            }else{
                             $user_id="";
                            }
                           
                            ?>
                            
                             <li class="nav-item ">
                                 <?php if($user_id==""): ?>
                                 <a href="https://jfinserv.com/myprofile" data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px;
    line-height: 40px;">Track
                                Application 
                            </a>
                                 <?php else: ?>
                                 <a href="https://jfinserv.com/myloaninprocess/<?php echo e($user_id); ?>" data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px;
    line-height: 40px;">Track
                                Application 
                            </a>
                                 <?php endif; ?>
                               
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                    data-bs-toggle="dropdown"></i>
                               
                            </li>
                            
                                             
                            
                        </ul>
                        <!-- <a class="theme-btn" href="loans/home-loan">Get loan</a> -->
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header end --><?php /**PATH /home/u540016792/domains/jfinserv.com/public_html/resources/views/layouts/header.blade.php ENDPATH**/ ?>