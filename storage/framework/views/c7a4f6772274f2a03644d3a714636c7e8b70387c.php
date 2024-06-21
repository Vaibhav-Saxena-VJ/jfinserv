<!-- footer -->
<style>
    .pt-50{
        padding-top:50px;
    }
    .pb-50{
        padding-bottom:50px;
    }
        
    }
</style>
    <footer class="footer footer-3">
        <div class="footer-top pb-lg-115 pt-50 pb-50">
            <div class="container">
                <div class="row gx-0 pt-45 ">

                    <div class="col-lg-4 col-sm-6 text-center text-sm-start ms-0 ">
                        <div class="footer-widget wow fadeInLeft mb-30">
                            <div class="footer-text mb-20">
                                <p>JFINSERV is a Personal Finance Platform focused on empowering and serving millennials to take a well-informed decision while buying a financial product like -  Home Loan, Mortgage Loan, Business Loan, Loan Against Property etc.</p>
                            </div>

                            <!--<span class="overline">Number of customers</span>-->

                            <!--<div class="footer-bold">-->
                            <!--    <span class="counter"><span>978</span> +</span>-->
                               
                            <!--</div>-->
                            
                            <?php
                            $date=date("d-M-Y H:i:s");
                            ?>
                            <p class="time"><?php echo e($date); ?></p>
                        </div>
                    </div>


                    <div class="col-lg-2 col-sm-6 text-center text-sm-start ms-lg-5 ">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="f-widget-title">
                                <h5>My Account</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="https://jfinserv.com/apply-now"> Apply Now
                                        </a></li>
                                    <li><a href="https://jfinserv.com/myprofile"> Profile</a></li>
                                    <li><a href="https://jfinserv.com/myprofile">Track Application</a></li>
                                    <!-- <li><a href="#"> Jobs & Careers</a></li> -->
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2  col-sm-6 text-center text-sm-start ms-lg-5">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="f-widget-title">
                                <h5>Quick Links</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="https://jfinserv.com/about-us"> About Us</a></li>
                                    
                                    <li><a href="https://jfinserv.com/referral-program">Referral Program</a></li>
                                    <li><a href="https://jfinserv.com/properties"> Properties</a></li>
                                     <li><a href="https://jfinserv.com/services#HomeLoanCalculator">EMI Calculator</a></li>
                                    <li><a href="https://jfinserv.com/contact"> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-sm-6 text-center text-sm-start me-0 ms-lg-5">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="f-widget-title">
                                <h5>Others</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="https://jfinserv.com/referral-program#referFriend">Refer Your Friend</a></li>
                                    <li><a href="https://jfinserv.com#banking-partners">Banking Partners</a></li>
                                   <!--  <li><a href="#">Our press releases</a></li>
                                    <li><a href="#">Our job offers</a></li>
                                    <li><a href="#">Our websites</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area -->
        <div class="copyright pt-25 pb-25">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-center text-lg-start">
                        <a href="<?php echo e(config('app.baseURL')); ?>" class="p-0 m-0"><img src="<?php echo e(config('app.baseURL')); ?>/images/logo/logo.png" alt="logo" style="width:200px;"></a>
                    </div>
                     <div class="col-lg-5 text-center my-3 my-sm-0">
                        <div class="copyright-text">
                            <p>Copyright&copy; Jfinserv Consultant India Private Limited 2022. <br class="d-sm-none"> <a class="ms-2" href="<?php echo e(config('app.baseURL')); ?>/privacy-policy">Privacy Policy</a> |
                                <a class="ms-0" href="<?php echo e(config('app.baseURL')); ?>/terms-condition">Term of
                                    Services</a> |
                                <a class="ms-0" href="<?php echo e(config('app.baseURL')); ?>/cookie-policy"> Cookie Policy</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="social-button">
                            <a href="https://www.facebook.com/jfinserv" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/FinservJ" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a>
                            <!--<a href="#"><i class="fab fa-pinterest-p"></i></a>-->
                            <a href="https://www.linkedin.com/company/jfinserv" target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a><?php /**PATH /var/www/html/resources/views/layouts/user-footer.blade.php ENDPATH**/ ?>