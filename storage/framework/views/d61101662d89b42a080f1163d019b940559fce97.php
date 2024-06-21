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
                    <div class="col-md-3 text-center text-sm-start ms-0 ">
                        <div class="footer-widget wow fadeInLeft mb-30">
                            <div class="footer-text mb-20">
                                <p style="font-size: 16px;">JFINSERV is a Personal Finance Platform focused on empowering and serving millennials to take a well-informed decision while buying a financial product like -  Home Loan, Contract Loan, Business Loan, Loan Against Property etc.</p>
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

                    <div class="col-md-2 text-center text-sm-start me-0 ms-lg-5">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="f-widget-title">
                                <h5>Quick Links</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/about-us"> About Us</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/referral-program">Referral Program</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/properties"> Properties</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/services#HomeLoanCalculator">EMI Calculator</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/contact"> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 text-center text-sm-start me-0">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="f-widget-title">
                                <h5>Services</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/home-loan">Home Loan</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/contract-loan">Contract Loan</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/project-loan">Project Loan</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/overdraft-facility">Overdraft Facility</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/lease-rental-discounting">Lease Rental Discounting</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/msme-loan">MSME Loan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 text-center text-sm-start">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="f-widget-title">
                                <h5>My Account</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/apply-now"> Apply Now</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/myprofile"> Profile</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/myprofile">Track Application</a></li>
                                    <!-- <li><a href="#"> Jobs & Careers</a></li> -->
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 text-center text-sm-start me-0">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="f-widget-title">
                                <h5>Others</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>/referral-program#referFriend">Refer Your Friend</a></li>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>#banking-partners">Banking Partners</a></li>
                                   <!--  <li><a href="#">Our press releases</a></li>
                                    <li><a href="#">Our job offers</a></li>
                                    <li><a href="#">Our websites</a></li> -->
                                </ul>
                            </div>
                            <div class="f-widget-title mt-20">
                                <h5>Reach Us</h5>
                            </div>
                            <div class="footer-text">
                                <p style="font-size: 15px;">Office No. 423, Sterling Center M.G. Road, Camp Pune, MH 411001.<br><a href="tel:917385551623"><i class="fa-solid fa-phone-volume"></i> +91 73855 51623</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area -->
        <div class="copyright pt-2 pb-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="copyright-text text-center">
                            <p>Jfinserv Consultant India Private Limited &copy; 2024 All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="copyright-text">
                            <p><a class="ms-2" href="<?php echo e(config('app.baseURL')); ?>/privacy-policy">Privacy Policy</a> | <a class="ms-0" href="<?php echo e(config('app.baseURL')); ?>/terms-condition">Term of
                                    Service</a> | <a class="ms-0" href="<?php echo e(config('app.baseURL')); ?>/cookie-policy"> Cookie Policy</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center text-lg-end">
                        <div class="social-button">
                            <a href="https://www.linkedin.com/company/jfinserv-consultant-india-private-limited/" target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a>
                            <a href="https://twitter.com/jfinserv9668" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61558721093709" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/jfinserv_consultant/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=917385551623&text=Hello,%20I%27m%20looking%20for" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <!--<a href="#"><i class="fab fa-pinterest-p"></i></a>-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a><?php /**PATH /home/u838013575/domains/jfinserv.com/public_html/resources/views/layouts/footer.blade.php ENDPATH**/ ?>