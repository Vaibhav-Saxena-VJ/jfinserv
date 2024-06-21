
<?php $__env->startSection('content'); ?>
<style type="text/css">
    .up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}
.arrow {
    border: solid #ddd;
    border-width: 0 6px 6px 0;
    display: inline-block;
    padding: 3px;
    margin-left: 25px;
    margin-top: -9px;
}
</style>
<main>

        <!-- BreadCrumb start -->
       <!--  <section class="breadcrumb-area">
            <div class="breadcrumb-widget  pt-145 pb-125" style="background-image: url(http://localhost/finance/assets/img/banner/loan-banner.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content pt-170">
                                <h1>My Account</h1>
                                <ul>
                                    <li><a href="<?php echo e(config('app.baseURL')); ?>">home</a></li>
                                    <li>My Account</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->
        <!-- BreadCrumb end -->

        <!--     <section class="cta-area-2 pt-80 pb-80">-->
        <!--    <div class="container">-->
        <!--        <div class="row align-items-center">-->
        <!--            <div class="col-md-6">-->
        <!--                <div class="cta-content text-black wow fadeInRight">-->
        <!--                    <h2>Apply for home loan?</h2>-->
                            <!-- <p>Want to know more about our services </p> -->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 ">-->
        <!--                <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">-->
        <!--                    <a href="<?php echo e(config('app.baseURL')); ?>/apply-now" class="theme-btn wow fadeInLeft" target="_blank">Apply Now</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

        <!-- Job posts start -->
        <section class="pb-130 bg_disable" style="margin-top: 150px;">
            <div class="container">
                <div class="row">
                    <!-- left side bar -->
                         <?php echo $__env->make('layouts.user-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- Right bar -->
                    <div class="col-lg-9">
                        <div class="job-post-widget">

                            <div class="single-job-post me-1 wow fadeInUp mt-25">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Loan Information</a> </h6>
                                        
                                    </div>
                                    <!-- <div class="timestamp">
                                        Jan 30, 2021
                                    </div> -->
                                           <?php if($loandetail->status==1): ?>    
                    <div class="col-md-8 mt-2">
                        <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                            <a href="<?php echo e(config('app.baseURL')); ?>/loan/getdocuments/<?php echo e($loandetail->loan_id); ?>" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px;
    line-height: 40px;float:right;" target="_blank">Upload Documents</a>
                        </div>
                    </div>
                    <?php elseif($loandetail->status==-1): ?>    
                     <div class="col-md-8 mt-2">
                        <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                            <a href="<?php echo e(config('app.baseURL')); ?>/loan/personaldetail/<?php echo e($loandetail->loan_id); ?>" class="theme-btn wow fadeInLeft" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px;
    line-height: 40px;float:right;" target="_blank">Complete Form</a>
                        </div>
                    </div>
                    <?php endif; ?>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Loan Tenure (In Yr) :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->loan_type); ?> </div>
                                    </div>
                    
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Loan Amount :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->loan_amount); ?> </div>
                                    </div>
                    
                                </div>
                                <!--<div class="post-content">-->
                                <!--    <div class="d-flex flex-wrap">-->
                                <!--            <div class="job-location me-lg-3 me-2"><h6> Financing Type :</h6>-->
                                <!--            </div>-->
                                <!--            <div class="job-catagory"><?php echo e($loandetail->financing_type); ?> </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="post-content">-->
                                <!--    <div class="d-flex flex-wrap">-->
                                <!--            <div class="job-location me-lg-3 me-2"><h6> Bank Service:</h6>-->
                                <!--            </div>-->
                                <!--            <div class="job-catagory"><?php echo e($loandetail->bank_service); ?> </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                 <?php if($loandetail->firm_company_name!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Firm / Company Name :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->firm_company_name); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->nature_of_work!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Nature Of Work :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->nature_of_work); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->office_address!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Office Address :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->office_address); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->work_experience!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Work/Business Experience :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->work_experience); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->business_estabish_date!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Business Establish Date :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->business_estabish_date); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->month_one_net_salary!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Year 1:</h6>
                                            </div>
                                        </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Net Salary:</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->month_one_net_salary); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->month_one_grosssalary!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Gross Salary:</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->month_one_grosssalary); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->month_two_net_salary!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Month 2:</h6>
                                            </div>
                                        </div>
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Salary :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->month_two_net_salary); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->month_two_grosssalary!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Gross Salary :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->month_two_grosssalary); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->month_three_net_salary!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Month 3:</h6>
                                            </div>
                                        </div>
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Salary :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->month_three_net_salary); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->month_three_grosssalary!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Gross Salary :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->month_three_grosssalary); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                               <!-- For Business  -->
                                <?php if($loandetail->year_one_netprofit!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 1 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_one_netprofit); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_one_depreciation!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_one_depreciation); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_one_loaninterest!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_one_loaninterest); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_one_grossprofit!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_one_grossprofit); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_one_sales!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_one_sales); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <!-- Year 2 -->
                                <?php if($loandetail->year_two_netprofit!=""): ?>
                                <div class="post-content">

                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 2 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_two_netprofit); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_two_depreciation!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_two_depreciation); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_two_loaninterest!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_two_loaninterest); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_two_grossprofit!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_two_grossprofit); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_two_sales!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_two_sales); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <!-- Year 3 -->
                                <?php if($loandetail->year_three_netprofit!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 3 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_three_netprofit); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_three_depreciation!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_three_depreciation); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_three_loaninterest!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_three_loaninterest); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_three_grossprofit!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_three_grossprofit); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->year_three_sales!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->year_three_sales); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <!-- Existing Loan Information -->
                                <?php if($loandetail->exist_loan_type!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Type:</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->exist_loan_type); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->exist_loan_amount!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Amoun :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->exist_loan_amount); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->exist_tenor_of_loan!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Tenor :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->exist_tenor_of_loan); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                 <?php if($loandetail->exist_emi!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan EMI :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->exist_emi); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                 <?php if($loandetail->exist_sanction_dt!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Sanction Date :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->exist_sanction_dt); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                 <?php if($loandetail->exist_emi_bounce!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan EMI Bounce :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->exist_emi_bounce); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                 <?php if($loandetail->cibil_problem!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Cibil Problem :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->cibil_problem); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                 <?php if($loandetail->loan_requirement!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Requirements :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->loan_requirement); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->job_business_profile=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Job/Business Profile :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->job_business_profile); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->purpose_of_loan!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Purpose Loan :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->purpose_of_loan); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                 <?php if($loandetail->extra_income!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Extra Income :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->extra_income); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($loandetail->note!=""): ?>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Documents Pending :</h6>
                                            </div>
                                            <div class="job-catagory"><?php echo e($loandetail->note); ?> </div>
                                    </div>
                                </div>
                                <?php endif; ?> 
                            </div>
                            <!-- Uploaded Documents -->
                             <?php if($loandetail->loandoc!= '[]'): ?>
                             <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.3s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Uploaded Documents</a> </h6>
                                        
                                    </div>
                                </div>
                                <?php 
                                    $count=0;
                                ?>
                                <?php $__currentLoopData = $loandetail->loandoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan_doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $count++;
                               
                                    $loan_dully=$loan_doc->where('name','dully_form')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                            
                             <?php if($count==1): ?>
                             <?php if($loan_dully!="[]"): ?>
                                <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2 col-lg-12"><h6>Duly filled Application Form with Photograph :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                           
                                            </div>
                                           <div class="col-lg-12 col-md-12">
                                            <?php $__currentLoopData = $loan_dully; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_dully): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           
                                        <div class="row">
                                           <div class="col-md-9">
                                              <!--  <p>Name</p> -->
                                              <p><?php echo substr($loans_dully->documents,13); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_dully->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_dully->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_dully->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>

                                

                             <?php if($loandetail->profession_type!="salaried"): ?>
                                <?php 
                                    $loan_identity=$loan_doc->where('name','identity')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_identity!="[]"): ?>
                               <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                             <div class="col-lg-12 col-md-12">
                                             <?php $__currentLoopData = $loan_identity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_identity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <!--  <iframe class="mr-2 mb-1 mt-1" src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_identity->documents); ?>" id="pdf_display_frame" width="48%" height="400px"></iframe> -->
                                       <div class="row">
                                           <div class="col-md-9">
                                            <!--    <p>Name</p> -->
                                            <p><?php echo substr($loans_identity->documents,9); ?></p>
                                           </div>
                                            <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_identity->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_identity->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_identity->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div> 
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php 
                                    $loan_edu=$loan_doc->where('name','education')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_edu!="[]"): ?>
                                <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Educational Qualification Proof - Latest Degree (for professionals) :</h6><br>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                            <?php $__currentLoopData = $loan_edu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_edu->documents,10); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_edu->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_edu->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_edu->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div> 
                                  <?php endif; ?>
                                <?php endif; ?>

                                <?php if($loandetail->profession_type!="salaried"): ?>
                                  <?php 
                                    $loan_business=$loan_doc->where('name','business_certificateproof')->where('loan_id',$loan_doc->loan_id)->get();
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_business!="[]"): ?>
                                 <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Certificate & Proof of business existence along with Business Profile :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                            </div><br>
                                            <div class="col-lg-12 col-md-12">
                                            <?php $__currentLoopData = $loan_business; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_business->documents,21); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_business->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_business->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_business->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php 
                                    $loan_tax=$loan_doc->where('name','tax_return_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_tax!="[]"): ?>
                                 <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Last 3 years Income Tax returns with Profit & Loss Account & Balance Sheets duly certified/audited by a Chartered Accountant :</h6><br>
                                            </div>
                                             <div class="col-lg-12 col-md-12">                                            
                                            <?php $__currentLoopData = $loan_tax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_tax->documents,11); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_tax->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_tax->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_tax->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                        
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php endif; ?> 

                                 <?php 
                                    $loan_bank=$loan_doc->where('name','bankstatement_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_bank!="[]"): ?>
                                <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2 col-lg-12"><h6>Last 12 months Bank Account Statements :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                            <?php $__currentLoopData = $loan_bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row">
                                           <div class="col-md-9">
                                              <!--  <p>Name</p> -->
                                              <p><?php echo substr($loans_bank->documents,15); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_bank->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_bank->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_bank->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div> 
                                <?php endif; ?>
                                <?php endif; ?>

                                 <!-- <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Processing Fee Cheque in favour of '……………………………' :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loan_doc->cheque); ?>" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div> -->

                                 <!-- <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Photocopy of Title Documents of the Property, Approved Plan etc. :</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loan_doc->property_document); ?>" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div> -->

                               <?php if($loandetail->profession_type=="salaried"): ?>

                                <?php 
                                    $loan_identity=$loan_doc->where('name','identity')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_identity!="[]"): ?>
                               <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                             <?php $__currentLoopData = $loan_identity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_identity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                                <p><?php echo substr($loans_identity->documents,9); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_identity->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_identity->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_identity->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                  
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div> 
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php 
                                    $loan_residence=$loan_doc->where('name','residence')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_residence!="[]"): ?>
                                    <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                            <?php $__currentLoopData = $loan_residence; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_residence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_residence->documents,15); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_residence->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_residence->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_residence->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                               
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>
                                
                                 
                                <?php 
                                    $loan_salary=$loan_doc->where('name','income_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_salary!="[]"): ?>
                                  <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Latest Salary-slips for last 3 months :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                            <?php $__currentLoopData = $loan_salary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_salary->documents,12); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_salary->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_salary->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_salary->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                  
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php 
                                    $loan_formsix=$loan_doc->where('name','form_sixteendoc')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_formsix!="[]"): ?>
                                  <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Form 16 for last 2 years :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                            <?php $__currentLoopData = $loan_formsix; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_formsix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-9">
                                              <!--  <p>Name</p> -->
                                              <p><?php echo substr($loans_formsix->documents,13); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_formsix->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_formsix->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/delete_userdocument/<?php echo e($loans_formsix->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                   
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </div>
                                    </div>
                                </div>
                                <?php endif; ?> 
                                <?php endif; ?>
                                <?php endif; ?>


                                
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>

                            <?php endif; ?>


                            <!-- Display Comments -->
                            <?php if($loandetail->comments!='[]'): ?>
                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.3s">
                                <div class="job-location me-lg-3 me-2"><h6>Comments </h6>
                                  <div class="row">

                           
                                    <?php
                                      $chat_cnt=0;
                                      $name=[];
                                    ?>
                                    <?php $__currentLoopData = $comment_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment_names): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    
                                    <?php 
                                    $names=$comment_names->commentname;
                                  array_push($name, $names);
                                  ?>
                               
                                    <?php $__currentLoopData = $loandetail->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                      $cmt=$cmt->whereIn('commentname', $name)->get();
                                  
                                    ?>
                                  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-job-post me-1 wow fadeInUp mt-25">
                                    <div class="row">
                                      <div class="col-md-12">
                                    <p>Message From <?php echo e($comment_names->username->name); ?></p>
                                  </div>
                                  <span><i class="arrow up"></i></span>
                                  <div class="card" style="margin-left:15px;padding:10px;border:2px solid #ddd;width:95%;margin-top: -14px;">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <p><?php echo e($comment_names->commentname); ?></p> 
                                           
                                    </div>
                                    
                                    <?php $__currentLoopData = $cmt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                   <?php if($comment_names->commentname == $cmts->commentname): ?>
                                   <?php if($cmts->attachment!=''): ?>
                                   
                                    <div class="col-md-6">
                                        <p><?php echo substr($cmts->attachment,11); ?></p>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-2">
                                      <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($cmts->attachment); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-2">
                                      <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($cmts->attachment); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                    </div>
                                   <!--  <div class="col-md-1 col-sm-1 col-2">
                                      <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($cmts->attachment); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                    </div> -->
                                  
                                    <?php endif; ?>
                                    <?php endif; ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                      </div>
                                    </div>
                                  </div>
                                  </div>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    
                                    <!-- <div class="col-md-1 col-sm-1 col-2">
                                       
                                    </div> -->
                                    
                                  </div><br>
                                </div>

                            </div>
                            <?php endif; ?>
                            
                            <!-- Add Comments -->
                    <br>
                <div  class="form-section single-job-post">
                    <form action="<?php echo e(config('app.baseURL')); ?>/sendmessage" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="loan_id" value="<?php echo e($loandetail->loan_id); ?>">
                    <div class="col-md-12" style="margin-bottom:20px;">
                      <label>Comment</label>
                       <div class="form-group">
                         <input type="text" name="commentname" class="form-control" id="commentname" placeholder="comment" style="width: 100%;" required="">
                       </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <label>Attachment</label>
                            <div class="form-group">
                                <input multiple="" type="file" name="attachment[]" id="attachment">
                            </div>
                    </div>
                
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                    </form>
                </div>
                
              </div>
                            
                            
                            
                            

                     
                    </div>
                </div>
            </div>
        </div>
    </div>

        </section>
        <!-- Job posts end -->


    </main>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u540016792/domains/jfinserv.com/public_html/resources/views/myaccount/account_loandetails.blade.php ENDPATH**/ ?>