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
  font-size: 14px;
  border: none;
  font-family: "Roboto", sans-serif;
}

.dropdown {
  position: relative;
  display: inline-block;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  color:#000;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 190px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
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
.header-menu.header-menu-2 .menu > .nav-item > .nav-link {
    color: #000; 
}
@media screen and (min-width: 400px) and (max-width: 768px){
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
@media screen and (min-width: 768px) and (max-width: 850px){
header .header-top .header-info-right ul li a {
    color: #bbc0c4;
    font-size: 12px;
}
}
@media screen and (min-width: 300px) and (max-width: 399px){
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
@media screen and (min-width: 300px) and (max-width: 499px){
#navbarSupportedContent{
  margin-left: 100px;
}
}
@media screen and (min-width: 500px) and (max-width: 650px){
#navbarSupportedContent{
  margin-left: 250px;
}
}
@media screen and (min-width: 651px) and (max-width: 750px){
#navbarSupportedContent{
  margin-left: 350px;
}
}
@media screen and (min-width: 751px) and (max-width: 800px){
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
                        <!-- <div class="language-list">
                            <select id="select-lang">
                                <option value="English">English</option>
                                <option value="Bangla">Bangla</option>
                                <option value="French">French</option>
                                <option value="Hindi">Hindi</option>
                            </select>
                        </div> -->
                        <div class="timestamp ms-4">
                            <p><i class="fa-regular fa-clock"></i> Mon - Fri 10:00-18:00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="header-info-right">
                        <ul>
                            <li><a href="tel:918329729190"><i class="fa-solid fa-phone-volume"></i> +91 83297 29190</a></li>
                            <li><a href="mailto:contact@jfinserv.com"><i class="fa-regular fa-envelope"></i> contact@jfinserv.com</a></li>
                            <li>
                                @auth
                                <div class="dropdown" style="z-index: 2;">
                                    <a class="loginbtn dropbtn">Logged In as (<?php echo Auth::user()->name; ?>)</a>
                                    <div class="dropdown-content">
                                        @php
                                            $user=Auth::user();
                                            $role_id=$user->role_id;
                                        @endphp
                                          
                                        @if($role_id==1 || $role_id==4)
                                            <a href="{{config('app.baseURL')}}/admin/dashboard">Dashboard</a>
                                        @else
                                            <a href="{{config('app.baseURL')}}/myprofile">My Profile</a>
                                        @endif
                                        <a href="{{config('app.baseURL')}}/logout">Logout</a>
                                    </div>
                                </div>
                                @else                        
                                    <a class="loginbtn" href="{{config('app.baseURL')}}/login">Login / Register</a>
                                @endauth 
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
                <a class="navbar-brand" href="{{config('app.baseURL')}}">
                    <img src="{{config('app.baseURL')}}/images/logo/logo.png" srcset="{{config('app.baseURL')}}/images/logo/logo.png" alt="logo" style="width:200px;"> 
                        <!--<h2>JFINSERV</h2>-->
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <!--<li class="nav-item ">
                            <a href="{{config('app.baseURL')}}" class="nav-link dropdown-toggle" role="button">Home</a> <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i>
                        </li>-->
                        <li class="nav-item">
                        <div class="dropdown">
                            <a href="{{config('app.baseURL')}}/services" class="nav-link dropdown-toggle" role="button">SERIVICE</a><i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i>
                            <div class="dropdown-content">
                            <a href="{{config('app.baseURL')}}/home-loan" class="nav-link" role="button">Home Loan</a>
                            <a href="{{config('app.baseURL')}}/contract-loan" class="nav-link" role="button">Contract Loan</a>
                            <a href="{{config('app.baseURL')}}/project-loan" class="nav-link" role="button">Project Loan</a>
                            <!-- <a href="{{config('app.baseURL')}}/personal-loan" class="nav-link" role="button">Personal Loan</a> -->
                            <a href="{{config('app.baseURL')}}/overdraft-facility" class="nav-link" role="button">Overdraft Facility</a>
                            <a href="{{config('app.baseURL')}}/lease-rental-discounting" class="nav-link" role="button">Lease Rental Discounting</a>
                            <a href="{{config('app.baseURL')}}/msme-loan" class="nav-link" role="button">MSME Loan</a>
                        </div>
                        </div>
                            <!--<ul class="menu-content">
                                <li class="nav-item ">
                                    <a href="{{config('app.baseURL')}}/home-loan" class="nav-link" role="button">Home Loan</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{config('app.baseURL')}}/mortgage-loan" class="nav-link" role="button">Mortgage Loan</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{config('app.baseURL')}}/project-loan" class="nav-link" role="button">Project Loan</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{config('app.baseURL')}}/overdraft-facility" class="nav-link" role="button">Overdraft Facility</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{config('app.baseURL')}}/lease-rental-discounting" class="nav-link" role="button">Lease Rental Discounting</a>
                                </li>
                            </ul>-->
                        </li>
                        <li class="nav-item ">
                            <a href="{{config('app.baseURL')}}/referral-program" class="nav-link dropdown-toggle" role="button">Referral Program</a> <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i>
                        </li>
                        <li class="nav-item ">
                            <a href="{{config('app.baseURL')}}/properties" class="nav-link dropdown-toggle" role="button">Properties</a> <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i>
                        </li>
                        <li class="nav-item ">
                            <a href="{{config('app.baseURL')}}/about-us" class="nav-link dropdown-toggle" role="button">About Us</a> <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i>
                        </li>
                        <li class="nav-item ">
                            <a href="{{config('app.baseURL')}}/blog" class="nav-link dropdown-toggle" role="button">Blogs</a> <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i>
                        </li>
                        <li class="nav-item ">
                            <a href="{{config('app.baseURL')}}/contact" class="nav-link dropdown-toggle" role="button">Contact Us</a> <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i>
                        </li>
                        @php
                            $user=Auth::user();
                            if($user!=""){
                            $user_id=$user->id;
                            }else{
                             $user_id="";
                            }
                        @endphp
                        <li class="nav-item ">
                            @if($user_id=="")
                            <a href="https://jfinserv.com/myprofile" data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px; line-height: 40px;">Track Application</a>
                                 @else
                            <a href="https://jfinserv.com/myloaninprocess/{{$user_id}}" data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px; line-height: 40px;">Track Application</a>
                                 @endif
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-bs-toggle="dropdown"></i>
                        </li>
                    </ul>
                    <!--<a class="theme-btn" href="{{config('app.baseURL')}}/personal-loan">Get loan</a>-->
                </div>
            </div>
        </nav>
    </div>
</header>
    <!-- Header end -->