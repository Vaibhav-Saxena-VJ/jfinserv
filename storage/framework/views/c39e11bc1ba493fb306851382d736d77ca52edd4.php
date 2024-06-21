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
      background-color: var(--primary-color);
  color: white;
  padding: 14px;
  font-size: 16px;
  border: none;
  font-family: "Roboto", sans-serif
}

.dropdown {
  position: relative;
  display: inline-block;
}

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

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {    background-color: var(--primary-color);;}
</style>
    <header class="header">
        <div class="header-top py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="header-info-left">

                          <!--   <div class="language-list">
                                <select id="select-lang">
                                    <option value="English">English</option>
                                    <option value="Bangla">Bangla</option>
                                    <option value="French">French</option>
                                    <option value="Hindi">Hindi</option>
                                </select>
                            </div> -->

                            <div class="timestamp ms-4"> <i class="icon_clock_alt"></i> Mon - Fri 10:00-18:00
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-info-right">
                            <ul>
                                <li>
                                    <img class="img-fluid" src="<?php echo e(config('app.baseURL')); ?>/assets/img/phone-outline-white.png" alt="phone"><a
                                        href="tel:+918329729190">+91 832 9729 190</a>
                                </li>

                                <li>
                                    <i class="icon_mail_alt"></i><a
                                        href="mailto:contact@jfinserv.com">contact@jfinserv.com</a>
                                </li>
                               
                                   <li>
                                <div class="dropdown">
                                  <button class="dropbtn">My Account</button>
                                  <div class="dropdown-content">
                                    <a href="<?php echo e(config('app.baseURL')); ?>/myprofile">My Profile</a>
                                    
                                    <a href="<?php echo e(config('app.baseURL')); ?>/logout">Logout</a>
                                  </div>
                                </div>
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

                  
                </div>
            </nav>
        </div>
    </header>
    <!-- Header end --><?php /**PATH /home/jfinserv.com/public_html/resources/views/layouts/user-header.blade.php ENDPATH**/ ?>