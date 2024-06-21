
<?php $__env->startSection('content'); ?>
<style type="text/css">
    span.res_message{
    font-style: normal;
font-weight: 600;
font-size: 16px;
line-height: 23px;
color: #818e8f;
opacity: 0.85;
}
/*#msg_div{
    margin-top: 12px;
}*/
.hidden{
    display: none;
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link {
     color: #000; 
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link {
    color: #000;
}
@media (min-width: 992px){
.navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
    background-color: white;
}
}

</style>

<style>
                                    .hidden{
                                        display:none;
                                    }
                                </style>
 <main>
        <!-- BreadCrumb start -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-widget  pt-200 pb-100" style="background-image: url(https://jfinserv.com/assets/img/breadcrumb/bg-1.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content pt-95">
                                <h1>Personal Details</h1>
                                <ul>
                                    <li><a href="#">home</a></li>
                                    
                                    <li>loan</li>
                                    <li>personal details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb end -->

        <!-- Persinal Details start -->
        <section class="loan-deatils-area bg_disable pt-130 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="stepper-widget mt-sm-5 px-3 px-sm-0">
                            <ul>
                                <li class=" complete  mt-0"><a href="javascript:void(0);">
                                        <div class="number"><i class="icon_check"></i> <span>1</span></div> Loan
                                        Details
                                    </a>
                                </li>
                                <li class="active"><a href="javascript:void(0);">
                                        <div class="number"><i class="icon_check"></i> <span>2</span></div>
                                        Personal
                                        Details
                                    </a>
                                </li>
                                <li><a href="javascript:void(0);">
                                        <div class="number"><i class="icon_check"></i> <span>3</span></div>
                                        Documents
                                        Upload
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="loan-details-widget bg_white">
                            <form method="POST" action="<?php echo e(config('app.baseURL')); ?>/loan/postAddPersonalDetail">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($loan_id); ?>">
                                <div class="row gy-4">
                                     <div class="col-md-12">
                                    <div class="form-check form-check-inline me-5  selfTab">
                                        <input class="form-check-input" type="radio" name="profession_type" id="selfTab" value="self" onclick="show1();">
                                        <label class="form-check-label" for="self">Self Employed/ Business Professionals</label>
                                    </div>
                                    <div class="form-check form-check-inline active me-5">
                                        <input class="form-check-input" type="radio" name="profession_type" id="salariedTab" checked="" value="salaried" onclick="show2();">
                                        <label class="form-check-label" for="married">Salaried Employees </label>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <label class="label" for="fName">Full Name*</label>
                                        <input id='fName' name="fName" value="<?php echo e($user->name); ?>" class="form-control" type="text" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="label" for="rAddress">Residence Address*</label>
                                        <input id="rAddress" class="form-control" value="<?php echo e($user->present_address); ?>" type="text" name="rAddress" required>
                                    </div>

                                    <div class="col-md-12 business hidden">
                                        <label class="label" for="oAddress">Office Address*</label>
                                        <input id="oAddress" class="form-control" value="<?php echo e($user->company_address); ?>" type="text" name="oAddress">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="fcname">Firm/Company Name*</label>
                                        <input id="fcname" class="form-control" value="<?php echo e($user->company_name); ?>" type="text" name="fcname" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="experience">Total Work Experience*</label>
                                        <input id="experience" class="form-control" value="<?php echo e($user->work_exp); ?>" type="text" name="experience" required>
                                    </div>

                                    <div class="col-md-6 business hidden">
                                        <label class="label" for="bedate">Business Establishment Date*</label>
                                        <input id="bedate" class="form-control" value="<?php echo e($user->business_establishment_date); ?>" type="date" name="bedate">
                                    </div>


                                    <div class="col-md-6">
                                        <label class="label" for="nature_work">Nature of business / work*</label>
                                        <input id='nature_work' name="nature_work" value="<?php echo e($user->nature_of_work); ?>" class="form-control" type="text" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="qualification">Highest Qualification*</label>
                                        <input id='qualification' name="qualification" value="<?php echo e($user->highest_qualification); ?>" class="form-control" type="text" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="inputPhoneNumber">Mobile Number*</label>
                                        <input id="inputPhoneNumber" class="form-control w-100" value="<?php echo e($user->contact_number); ?>" type="text" name="inputPhoneNumber" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="return isNumberKey(event)" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="label" for="FinanceDetails">Financial Details*</label>
                                    </div>

                                     

                                    <div class="col-md-12 working">
                                        <label class="label" for="">For Working ( latest 3 month take home and gross 
                                        salary details)</label>
                                    </div>
                                    <div class="col-md-12 working">
                                        <div class="row">
                                        <div class="col-md-2">
                                            <label class="label" for="Month One">Month 1 :</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label" for="mone_nsalary">Net Salary</label>
                                        </div>
                                        <div class="col-md-3">
                                        <input id="mone_nsalary" class="form-control w-100 <?php $__errorArgs = ['mone_nsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="mone_nsalary" >
                                        <?php $__errorArgs = ['mone_nsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                          <span class="invalid-feedback" role="alert">
                                            <strong>This Field is required</strong>
                                          </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label" for="mone_gsalary">Gross Salary</label>
                                        </div>
                                        <div class="col-md-3">
                                        <input id="mone_gsalary" class="form-control w-100 <?php $__errorArgs = ['mone_gsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="mone_gsalary" >
                                        <?php $__errorArgs = ['mone_gsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                          <span class="invalid-feedback" role="alert">
                                            <strong>This Field is required</strong>
                                          </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 working">
                                        <div class="row">
                                        <div class="col-md-2">
                                            <label class="label" for="salary">Month 2 :</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label" for="mtwo_nsalary">Net Salary</label>
                                        </div>
                                        <div class="col-md-3">
                                        <input id="mtwo_nsalary" class="form-control w-100 <?php $__errorArgs = ['mtwo_nsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="mtwo_nsalary" >
                                        <?php $__errorArgs = ['mtwo_nsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                          <span class="invalid-feedback" role="alert">
                                            <strong>This Field is required</strong>
                                          </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label" for="mtwo_gsalary">Gross Salary</label>
                                        </div>
                                        <div class="col-md-3">
                                        <input id="mtwo_gsalary" class="form-control w-100 <?php $__errorArgs = ['mtwo_gsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="mtwo_gsalary" >
                                        <?php $__errorArgs = ['mtwo_gsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                          <span class="invalid-feedback" role="alert">
                                            <strong>This Field is required</strong>
                                          </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 working">
                                        <div class="row">
                                        <div class="col-md-2">
                                            <label class="label" for="salary">Month 3 :</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label" for="mthree_nsalary">Net Salary</label>
                                        </div>
                                        <div class="col-md-3">
                                        <input id="mthree_nsalary" class="form-control w-100 <?php $__errorArgs = ['mthree_nsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="mthree_nsalary" >
                                        <?php $__errorArgs = ['mthree_nsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                          <span class="invalid-feedback" role="alert">
                                            <strong>This Field is required</strong>
                                          </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label" for="mthree_gsalary">Gross Salary</label>
                                        </div>
                                        <div class="col-md-3">
                                        <input id="mthree_gsalary" class="form-control w-100 <?php $__errorArgs = ['mthree_gsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="mthree_gsalary" >
                                        <?php $__errorArgs = ['mthree_gsalary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                          <span class="invalid-feedback" role="alert">
                                            <strong>This Field is required</strong>
                                          </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 business hidden">
                                        <label class="label" for="inputPhoneNumber">For Business ( Latest 3 Years Business Income as per 
                                        ITR)</label>
                                    </div>
                                    
                                    <div class="col-md-12 business hidden">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="label" for="year">Year 1 :</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="yone_nprofit">Net Profit</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="yone_nprofit" class="form-control w-100 <?php $__errorArgs = ['yone_nprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="yone_nprofit">
                                            <?php $__errorArgs = ['yone_nprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="yone_depreciation">Depreciation</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="yone_depreciation" class="form-control w-100 <?php $__errorArgs = ['yone_depreciation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="yone_depreciation">
                                            <?php $__errorArgs = ['yone_depreciation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-2">
                                                <label class="label" for="yone_interestloan">Interest of Loan</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="yone_interestloan" class="form-control w-100 <?php $__errorArgs = ['yone_interestloan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="yone_interestloan">
                                            <?php $__errorArgs = ['yone_interestloan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="yone_grossprofit">Gross Profit</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="yone_grossprofit" class="form-control w-100 <?php $__errorArgs = ['yone_grossprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="yone_grossprofit">
                                            <?php $__errorArgs = ['yone_grossprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-2">
                                                
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="yone_totalsales">Total Sales / Receipts</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="yone_totalsales" class="form-control w-100 <?php $__errorArgs = ['yone_totalsales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="yone_totalsales" >
                                            <?php $__errorArgs = ['yone_totalsales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 business hidden">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="label" for="year">Year 2 :</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="ytwo_nprofit">Net Profit</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ytwo_nprofit" class="form-control w-100 <?php $__errorArgs = ['ytwo_nprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="ytwo_nprofit" >
                                            <?php $__errorArgs = ['ytwo_nprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <label class="label" for="ytwo_depreciation">Depreciation</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ytwo_depreciation" class="form-control w-100 <?php $__errorArgs = ['ytwo_depreciation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="ytwo_depreciation" >
                                            <?php $__errorArgs = ['ytwo_depreciation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-2">
                                                <label class="label" for="ytwo_interestloan">Interest of Loan</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ytwo_interestloan" class="form-control w-100 <?php $__errorArgs = ['ytwo_interestloan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="ytwo_interestloan" >
                                            <?php $__errorArgs = ['ytwo_interestloan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="yone_grossprofit">Gross Profit</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ytwo_grossprofit" class="form-control w-100 <?php $__errorArgs = ['ytwo_grossprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="ytwo_grossprofit" >
                                            <?php $__errorArgs = ['ytwo_grossprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-2">
                                                
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="ytwo_totalsales">Total Sales / Receipts</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ytwo_totalsales" class="form-control w-100 <?php $__errorArgs = ['ytwo_totalsales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="ytwo_totalsales" >
                                            <?php $__errorArgs = ['ytwo_totalsales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 business hidden">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="label" for="year">Year 3 :</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="ythree_nprofit">Net Profit</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ythree_nprofit" class="form-control w-100 <?php $__errorArgs = ['ythree_nprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="ythree_nprofit" >
                                            <?php $__errorArgs = ['ythree_nprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="ythree_depreciation">Depreciation</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ythree_depreciation" class="form-control w-100 <?php $__errorArgs = ['ythree_depreciation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="ythree_depreciation" >
                                            <?php $__errorArgs = ['ythree_depreciation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-2">
                                                <label class="label" for="ythree_interestloan">Interest of Loan</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ythree_interestloan" class="form-control w-100 <?php $__errorArgs = ['ythree_interestloan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="ythree_interestloan">
                                            <?php $__errorArgs = ['ythree_interestloan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="ythree_grossprofit">Gross Profit</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ythree_grossprofit" class="form-control w-100 <?php $__errorArgs = ['ythree_grossprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="ythree_grossprofit" >
                                            <?php $__errorArgs = ['ythree_grossprofit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-2">
                                                
                                            </div>
                                            <div class="col-md-2">
                                                <label class="label" for="ythree_totalsales">Total Sales / Receipts</label>
                                            </div>
                                            <div class="col-md-3">
                                            <input id="ythree_totalsales" class="form-control w-100 <?php $__errorArgs = ['ythree_totalsales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="ythree_totalsales" >
                                            <?php $__errorArgs = ['ythree_totalsales'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                              <span class="invalid-feedback" role="alert">
                                                <strong>This Field is required</strong>
                                              </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="dob-d">Date of Birth*</label>
                                        <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo e($user->date_of_birth); ?>" class="form-control w-100" placeholder="Enter DOB" required>
                                        <!--
                                        <div class="dob d-flex">
                                            <select id="dob-d" name="dob_d" required>
                                                <option value="">Day</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>

                                            <select id="dob-m" name="dob_m" required>
                                                <option value="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>

                                            <select class="me-0" id="dob-y" name="dob_y" required>
                                                <option value="">Year</option>

                                                <option value="1970">1970</option>
                                                <option value="1971">1971</option>
                                                <option value="1972">1972</option>
                                                <option value="1973">1973</option>
                                                <option value="1974">1974</option>
                                                <option value="1975">1975</option>
                                                <option value="1976">1976</option>
                                                <option value="1977">1977</option>
                                                <option value="1978">1978</option>
                                                <option value="1979">1979</option>
                                                <option value="1980">1980</option>
                                                <option value="1981">1981</option>
                                                <option value="1982">1982</option>
                                                <option value="1983">1983</option>
                                                <option value="1984">1984</option>
                                                <option value="1985">1985</option>
                                                <option value="1986">1986</option>
                                                <option value="1987">1987</option>
                                                <option value="1988">1988</option>
                                                <option value="1989">1989</option>
                                                <option value="1990">1990</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select>
                                        </div>-->
                                        
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label mb-4">Marital Status*</label>

                                        <div class="form-check form-check-inline me-5">
                                            <input class="form-check-input" type="radio" name="MaritalStatas"
                                                id="single" value="single" >
                                            <label class="form-check-label" for="single">Single</label>
                                        </div>
                                        <div class="form-check form-check-inline me-5">
                                            <input class="form-check-input" type="radio" name="MaritalStatas"
                                                id="married" value="married">
                                            <label class="form-check-label" for="married">Married</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label" for="emailName">Email</label>
                                        <input class="form-control" type="email" id='emailName' value="<?php echo e($user->email); ?>" name="emailName"                         placeholder="examplename@example.com" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="stateName">State*</label>
                                        <input id="stateName" class="form-control" type="text" value="<?php echo e($user->state); ?>" name="stateName" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="cityName">City*</label>
                                        <input id="cityName" class="form-control" type="text" value="<?php echo e($user->city); ?>" name="cityName" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="zipCode">Postal / Zip Code*</label>
                                        <input id="zipCode" class="form-control" type="number" value="<?php echo e($user->pincode); ?>" name="zipCode" required>
                                    </div>
                                    <!-- Existing loan details -->
                                    <div class="col-md-12">
                                        <label class="label" for="existing"><input type="checkbox" value="1" class="existing_loan_check" name="existing_loan_check" checked=""> &nbsp;Do you have any existing Loan? </label>
                                    </div>

                                    <div class="col-md-6 existing_loan">
                                        <label class="label" for="exist_loantype">Type of Loan </label>
                                        <input id="exist_loantype" class="form-control" type="text" name="exist_loantype">
                                    </div>
                                    <div class="col-md-6 existing_loan">
                                        <label class="label" for="exist_loantype">Loan Amount</label>
                                        <input id="exist_loanamount" class="form-control" type="number" name="exist_loanamount">
                                    </div>
                                    <div class="col-md-6 existing_loan">
                                        <label class="label" for="exist_tenorloan">Tenure of Loan</label>
                                        <input id="exist_tenorloan" class="form-control" type="number" name="exist_tenorloan">
                                    </div>
                                    <div class="col-md-6 existing_loan">
                                        <label class="label" for="exist_emi">EMI</label>
                                        <input id="exist_emi" class="form-control" type="number" name="exist_emi">
                                    </div>
                                    <div class="col-md-6 existing_loan">
                                        <label class="label" for="exist_sanctiondate">Sanction Date</label>
                                        <input id="exist_sanctiondate" class="form-control" type="date" name="exist_sanctiondate">
                                    </div>
                                    <div class="col-md-6 existing_loan">
                                        <label class="label" for="exist_emibounce">How much EMI Bounce till date</label>
                                        <input id="exist_emibounce" class="form-control" type="number" name="exist_emibounce">
                                    </div>
                                    <!-- End of existing Loan Information -->
                                    <div class="col-md-12">
                                        <label class="label" for="cibiproblem">Any Cibil Problem</label>
                                        <input id="cibiproblem" class="form-control" type="text" name="cibiproblem">
                                    </div>
                                    <div class="col-md-6 hidden">
                                        <label class="label" for="loanrequirement">What is your Loan Requirement</label>
                                        <input id="loanrequirement" class="form-control" type="number" name="loanrequirement" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label" for="job_business_profile">Job or Business Profile</label>
                                        <input id="job_business_profile" value="<?php echo e($user->job_business_profile); ?>" class="form-control" type="text" name="job_business_profile">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label" for="loan_purpose">Purpose of Loan</label>
                                        <input id="loan_purpose" class="form-control" type="text" name="loan_purpose">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label" for="extra_income">Other Extra Income with family</label>
                                        <input id="extra_income" class="form-control" type="text" name="extra_income">
                                    </div>
                                    <?php if(auth()->guard()->check()): ?>
                                    <?php
                                        $user=Auth::user();
                                        $role_id=$user->role_id;
                                        $user_id=$user->id;
                                    ?>
                                    <?php if($role_id==2): ?>
                                    <div class="col-md-12">
                                       
                                        <label class="label" for="loandetails01"> <input type="checkbox" id="loan_referal_code_checkbox" name="loan_referal_code_checkbox" value="">&nbsp;&nbsp;Do You Have Any Referal Code?</label>
                                        <!-- <span class="" id="" name="">If you have any referal code please provide and verify it.If not leave as blank.</span> -->
                                        <div class="row col-md-12 hidden referal_code_div">
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" id="contact_for_referel_code" name="contact_number_search" list="search_contacts" class="form-control">
                                                    <datalist id="search_contacts">
                                                        <?php if($users!="[]"): ?>
                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($newuser->contact_number); ?>">
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </datalist><br>
                                                    <input type="text" id="refered_by" name="refered_by" class="form-control">
                                                </div>                                        
                                            </div>
                                            <div class="col-md-7" id="referaldiv">
                                                
                                                <button class="theme-btn-primary_alt theme-btn referal-btn" type="button" id="referal" style="margin-top:68px;">Apply</button>
                                            </div>
                                            <div class="message col-md-7" id="msg_div">

                                            </div>
                                            
                                        </div>
                                    </div>
                                    <?php else: ?>

                                    
                                    <input type="hidden" name="channel_partner_id" value="<?php echo e($user_id); ?>">
                                    <input type="hidden" name="assigned_to" value="<?php echo e($user_id); ?>">
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                
                                
                                
                                <script type="text/javascript">
						
                                    $(document).ready(function(){
                                            $('#loan_referal_code_checkbox').on('click',function(){
                                                if($(this).is(':checked')){
                                                    $('div.referal_code_div').removeClass('hidden');
                                                }else{
                                                    $('div.referal_code_div').addClass('hidden');
                                                }
                                            });
                                    });
                                    
                                    $(document).ready(function(){
    $('#contact_for_referel_code').on('keyup',function(){
                var contact_number = $(this).val();
                $.ajax({
                    url:"<?php echo e(config('app.baseURL')); ?>/loan/personal-detail/matched-contact/referal",
                    type:'POST',
                    data:{'contact_number':contact_number, _token:'<?php echo e(csrf_token()); ?>'},
                    success:function(data){
                        if(data!=""){
                            $('#refered_by').val(data);
                        }
                },
                error: function (xhr, textStatus, errorThrown){
                  
                }
                });
                
                });
                });
                                    
                                    
                                </script>
                                <div class="row mt-60">
                                    <div class="col-md-12">
                                        <div class="nav-btn d-flex flex-wrap justify-content-between">
                                            <a href="<?php echo e(config('app.baseURL')); ?>/apply-now?loan_id=<?php echo e($loan_id); ?>"
                                                class="prev-btn theme-btn-primary_alt theme-btn"><i
                                                    class="arrow_left"></i>previous
                                            </a>
                                            
                                            <button type="submit" class="next-btn theme-btn-primary_alt theme-btn" id="nextbtn">Save & Next <i
                                                    class="arrow_right"></i></button>

                                                    <!-- <script type="text/javascript">
                                                        $(document).ready(function(){
                                                            $('#nextbtn').on('click',function(){
                                                                alert('dkf');
                                                            });
                                                        });
                                                    </script> -->
                                               
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Persinal Details end -->
    </main>

    <script type="text/javascript">



        $('.existing_loan_check').change(function(){

    if($(this).is(':checked')){
       $('.existing_loan').removeClass('hidden');
    }
    else
    {
        $('.existing_loan').addClass('hidden');
    }    

});

        
       
              
            function show1() {
                var radioButton = document.getElementById("salariedTab");
                radioButton.checked = false;

                     $('.working').addClass('hidden');
                $('.business').removeClass('hidden');

                // $('#job_business_profile').val("Business");
               
            }
            function show2() {
           

                $('.business').addClass('hidden');
                $('.working').removeClass('hidden');
                var radioButton = document.getElementById("selfTab");
                radioButton.checked = false;

                // $('#job_business_profile').val("Salaried");

                
               
            }
    </script>       

<script type="text/javascript">
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>

<script type="text/javascript">
    $(document).ready(function (e) {

        $('.input-field').on('mouseout', '#contact_for_referel_code',function(e){ 
            
            var refered_by=$('#refered_by').val();
            
            if(refered_by!="") {
                $('#msg_div').html('<span class="res_message" id="res_message" name="res_message">Please Verify Referal code first.</span>');
                // $(".referal").focus();
                // document.getElementById('nextbtn').disabled = true;
                // $("#nextbtn").attr("disabled","true");
                $( "#nextbtn" ).prop( "disabled", true );

            }
            else{
                //alert("cds");
                document.getElementById('res_message').innerHTML="";
                document.getElementById('nextbtn').disabled = false;
                   // $("#nextbtn").attr("disabled","false");
                //$( "#nextbtn" ).prop( "disabled", false );

            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function (e) {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#referal').click(function(e){ 
e.preventDefault();
var formData = new FormData();
var refered_by=$('#refered_by').val();
 formData.append('refered_by', refered_by);
 formData.append('_token', '<?php echo e(csrf_token()); ?>');
$.ajax({
type:'POST',
url: "<?php echo e(url('verifycode')); ?>",
data: formData,
cache:false,
contentType: false,
processData: false,
 error: function (request, error) {
        console.log(arguments);
        alert(" Can't do because: " + error);
    },
    success: function (data) {
        if (data) {
            $( "#nextbtn" ).prop( "disabled", false );
            // document.getElementById('nextbtn').disabled = false;
            document.getElementById('referal').style.visibility='hidden';
            
            $('#msg_div').html('<span class="res_message" id="res_message" name="res_message">Referal code Match.</span>');
            
        }
        
    },


error: function(data){
     $( "#nextbtn" ).prop( "disabled", false );
    document.getElementById('nextbtn').disabled = false;
    document.getElementById('refered_by').value="";
    //document.getElementById('contact_for_referel_code').value="";
    $("#contact_for_referel_code").prop("value","");
    $('#msg_div').html('<span class="res_message" id="res_message" name="res_message">Referal code Not Match, Please Provide Valid Referal Code.</span>');


}
});
});
});

$( document ).ready(function() {
    
 if ("<?php echo e($user->marital_status); ?>"=="single") {
     
    $('#single').prop('checked',true);
  }
  
  if ("<?php echo e($user->marital_status); ?>"=="married") {
    $('#married').prop('checked',true);
  }
  
  if ("<?php echo e($user->profession_type); ?>"=="self") {
     
    $('#selfTab').prop('checked',true);
     $('.working').addClass('hidden');
     $('.business').removeClass('hidden');
  }
  
  if ("<?php echo e($user->profession_type); ?>"=="salaried") {
    $('#salariedTab').prop('checked',true);
    
     $('.working').removeClass('hidden');
     $('.business').addClass('hidden');
  }
});


</script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u540016792/domains/jfinserv.com/public_html/resources/views/loan/personal-detail.blade.php ENDPATH**/ ?>