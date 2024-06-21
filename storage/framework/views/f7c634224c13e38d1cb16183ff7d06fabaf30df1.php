
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .modal-header .close {
    padding: 1rem;
    margin: 0rem 0rem 0rem auto;
}
@media  print{ 
.no-print{
  display: none !important;
}
}
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
<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Loans</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#"> Loans </a>
              </li>
              <li class="breadcrumb-item">
              All                                </li>
            </ol> 
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="content-body">
    <section class="simple-validation">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Loan <?php if($loandetails->associate!=""): ?> Assigned to: <b><?php echo e($loandetails->associate->name); ?></b>   <?php endif; ?></h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <p class="mt-1">All <code>Loan</code></p>
              <!-- <form class="form-horizontal" role="form"> -->
              <?php
              $user=Auth::user();
              $role_id=$user->role_id;
              
              ?>
              <?php if($role_id==1): ?>
              <form method="post" action="<?php echo e(config('app.baseURL')); ?>/postAssignAssociate">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="loan_id" value="<?php echo e($loan_id); ?>" />
                      <label><b>Assign Associate</b></label>
                      <div class="row">
                       <div class="col-lg-6 <?php echo e($errors->has('assigned_to') ? ' has-error' : ''); ?>">
                      <select class="form-control" name="assigned_to" required>
                      
                      <?php $__currentLoopData = $associates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $associate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($associate->id); ?>"><?php echo e($associate->name); ?> - <?php echo e($associate->contact_number); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                     </select>
                     </div>
                     <div class="col-lg-4 <?php echo e($errors->has('assigned_to') ? ' has-error' : ''); ?>">
                      <button type="submit" class="btn btn-primary">Assign</button>
                     </div>
                     </div>
                      
                      
                  </form> 
                  
                   <hr>
                   <?php endif; ?>
                
               
              <div class="row col-md-12">
                  
                 

                <?php
                 $status = $loandetails->status;
                ?>
                <?php if($status==0): ?>
                <!-- Loan In Process -->
                <a id="myAnchor"><button type="button" class="btn btn-success mr-1 mt-1 mb-1" data-toggle="modal" data-target="#exampleModalInprocess">In process</button></a>
                <a id="myAnchord"><button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#exampleModal">Documents Pending</button></a>
                <a href="" id="myAnchora" onClick="approved()"><button type="button" class="btn btn-primary m-1">Loan Approved</button></a>
                <a href="" id="myAnchorr" onClick="reject()"><button type="button" class="btn btn-primary m-1">Loan Rejected</button></a>

                <?php elseif($status==1): ?>
                <!-- Documents Pending -->
                <a id="myAnchor"><button type="button" class="btn btn-primary mr-1 mt-1 mb-1" data-toggle="modal" data-target="#exampleModalInprocess">In process</button></a>
                <a id="myAnchord" onClick="docpending()"><button type="button" class="btn btn-success m-1" data-toggle="modal" data-target="#exampleModal">Documents Pending</button></a>
                <a href="" id="myAnchora" onClick="approved()"><button type="button" class="btn btn-primary m-1">Loan Approved</button></a>
                <a href="" id="myAnchorr" onClick="reject()"><button type="button" class="btn btn-primary m-1">Loan Rejected</button></a>
                
                <?php elseif($status==2): ?>

                <!-- Loan Approved -->
                <a id="myAnchor"><button type="button" class="btn btn-primary mr-1 mt-1 mb-1" data-toggle="modal" data-target="#exampleModalInprocess">In process</button></a>
                <a id="myAnchord" onClick="docpending()"><button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#exampleModal">Documents Pending</button></a>
                <a href="" id="myAnchora" onClick="approved()"><button type="button" class="btn btn-success m-1">Loan Approved</button></a>
                <a href="" id="myAnchorr" onClick="reject()"><button type="button" class="btn btn-primary m-1">Loan Rejected</button></a>

                <?php elseif($status==3): ?>
                <!-- Loan Rejected -->
                <a id="myAnchor"><button type="button" class="btn btn-primary mr-1 mt-1 mb-1" data-toggle="modal" data-target="#exampleModalInprocess">In process</button></a>
                <a id="myAnchord" onClick="docpending()"><button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#exampleModal">Documents Pending</button></a>
                <a href="" id="myAnchora" onClick="approved()"><button type="button" class="btn btn-primary m-1">Loan Approved</button></a>
                <a href="" id="myAnchorr" onClick="reject()"><button type="button" class="btn btn-success m-1">Loan Rejected</button></a>
                <?php endif; ?>
              </div>
            <!-- </form> -->

          <!-- Multiple Rule Validation end -->
          <!-- <form class="form-horizontal" role="form" method="" action="" enctype="multipart/form-data" novalidate=""> -->
            <!-- <input type="hidden" name="_token" value="<?php //echo csrf_token(); ?>"> 
                                    -->
            <div class="contact-form">
              <div class="row">
                  
                 
                <div class="col-md-4 <?php echo e($errors->has('loan_type') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Loan Term (In Yrs)</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="loan_type" value="<?php echo e($loandetails->loan_type); ?>" >
                    <?php if($errors->has('loan_type')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('loan_type')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('loan_amount') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Loan Amount</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="loan_amount" value="<?php echo e($loandetails->loan_amount); ?>" >
                    <?php if($errors->has('loan_amount')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('loan_amount')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                
                <div class="col-md-4 <?php echo e($errors->has('full_name') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Name</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="full_name" value="<?php echo e($loandetails->full_name); ?>" >
                    <?php if($errors->has('full_name')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('full_name')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-6 <?php echo e($errors->has('residence_address') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Residence Address</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="residence_address" value="<?php echo e($loandetails->residence_address); ?>" >
                    <?php if($errors->has('residence_address')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('residence_address')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-6 <?php echo e($errors->has('office_address') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Office Address</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="office_address" value="<?php echo e($loandetails->office_address); ?>" >
                    <?php if($errors->has('office_address')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('office_address')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('firm_company_name') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Firm/Company Name</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="firm_company_name" value="<?php echo e($loandetails->firm_company_name); ?>" >
                    <?php if($errors->has('firm_company_name')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('firm_company_name')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('work_experience') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Work Experience</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="work_experience" value="<?php echo e($loandetails->work_experience); ?>" >
                    <?php if($errors->has('work_experience')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('work_experience')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('nature_of_work') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Nature Of Work</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="nature_of_work" value="<?php echo e($loandetails->nature_of_work); ?>" >
                    <?php if($errors->has('nature_of_work')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('nature_of_work')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('business_estabish_date') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Business Estabish Date</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="business_estabish_date" value="<?php echo e($loandetails->business_estabish_date); ?>" >
                    <?php if($errors->has('business_estabish_date')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('business_estabish_date')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('qualification') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Qualification</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="qualification" value="<?php echo e($loandetails->qualification); ?>" >
                    <?php if($errors->has('qualification')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('qualification')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Email</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="email" value="<?php echo e($loandetails->email); ?>" >
                    <?php if($errors->has('email')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>
               
               <div class="col-md-4 <?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Mobile</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="mobile" value="<?php echo e($loandetails->mobile); ?>" >
                    <?php if($errors->has('mobile')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('mobile')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

            <!--     <div class="col-md-4 <?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Mobile</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="mobile" value="<?php echo e($loandetails->mobile); ?>" >
                    <?php if($errors->has('mobile')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('mobile')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div> -->

                <?php if($loandetails->year_one_netprofit!=""): ?>
                <div class="row col-md-12">
                  <div class="col-lg-2 col-md-2 col-sm-2 ">
                    <label class="margin-label">Year</label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 ">
                    <label class="margin-label">Net Profit</label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 ">
                    <label class="margin-label">depreciation</label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <label class="margin-label">Loan Interest</label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 ">
                    <label class="margin-label">Gross Profit</label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <label class="margin-label">Sales</label>
                  </div>
                  
                </div>
                <div class="row col-md-12">
                  <div class="col-lg-2 col-md-2 col-sm-2">
                         <div class="form-group">
                          <div class="controls">
                        <label class="margin-label">Year 1</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_one_netprofit') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_one_netprofit" value="<?php echo e($loandetails->year_one_netprofit); ?>" >
                      <?php if($errors->has('year_one_netprofit')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_one_netprofit')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_one_depreciation') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_one_depreciation" value="<?php echo e($loandetails->year_one_depreciation); ?>" >
                      <?php if($errors->has('year_one_depreciation')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_one_depreciation')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_one_loaninterest') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_one_loaninterest" value="<?php echo e($loandetails->year_one_loaninterest); ?>" >
                      <?php if($errors->has('year_one_loaninterest')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_one_loaninterest')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_one_grossprofit') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_one_grossprofit" value="<?php echo e($loandetails->year_one_grossprofit); ?>" >
                      <?php if($errors->has('year_one_grossprofit')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_one_grossprofit')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('  year_one_sales') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="  year_one_sales" value="<?php echo e($loandetails->  year_one_sales); ?>" >
                      <?php if($errors->has(' year_one_sales')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first(' year_one_sales')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                
              </div>
              <!-- year2 -->
              <div class="row col-md-12">
                  <div class="col-lg-2 col-md-2 col-sm-2">
                     <div class="form-group">
                      <div class="controls">
                    <label>Year 2</label>
                  </div>
                </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_two_netprofit') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_two_netprofit" value="<?php echo e($loandetails->year_two_netprofit); ?>" >
                      <?php if($errors->has('year_two_netprofit')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_two_netprofit')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_two_depreciation') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_two_depreciation" value="<?php echo e($loandetails->year_two_depreciation); ?>" >
                      <?php if($errors->has('year_two_depreciation')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_two_depreciation')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_two_loaninterest') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_two_loaninterest" value="<?php echo e($loandetails->year_two_loaninterest); ?>" >
                      <?php if($errors->has('year_two_loaninterest')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_two_loaninterest')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_two_grossprofit') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_two_grossprofit" value="<?php echo e($loandetails->year_two_grossprofit); ?>" >
                      <?php if($errors->has('year_two_grossprofit')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_two_grossprofit')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_two_sales') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_two_sales" value="<?php echo e($loandetails->  year_two_sales); ?>" >
                      <?php if($errors->has('year_two_sales')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_two_sales')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                
              </div>
              <!-- year3 -->
              <div class="row col-md-12">
                  <div class="col-lg-2 col-md-2 col-sm-2">
                     <div class="form-group">
                      <div class="controls">
                    <label>Year 3</label>
                  </div>
                </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_three_netprofit') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_three_netprofit" value="<?php echo e($loandetails->year_three_netprofit); ?>" >
                      <?php if($errors->has('year_three_netprofit')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_three_netprofit')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_three_depreciation') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_three_depreciation" value="<?php echo e($loandetails->year_three_depreciation); ?>" >
                      <?php if($errors->has('year_three_depreciation')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_three_depreciation')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_three_loaninterest') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_three_loaninterest" value="<?php echo e($loandetails->year_three_loaninterest); ?>" >
                      <?php if($errors->has('year_three_loaninterest')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_three_loaninterest')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_three_grossprofit') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="year_three_grossprofit" value="<?php echo e($loandetails->year_three_grossprofit); ?>" >
                      <?php if($errors->has('year_three_grossprofit')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('year_three_grossprofit')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 <?php echo e($errors->has('year_three_sales') ? ' has-error' : ''); ?>">
                    <div class="form-group">
                      <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="  year_three_sales" value="<?php echo e($loandetails->  year_three_sales); ?>" >
                      <?php if($errors->has(' year_three_sales')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first(' year_three_sales')); ?></strong>
                      </span>
                      <?php endif; ?></div>
                    </div>
                  </div>
                
              </div>
                <?php endif; ?>
                <!-- salaried -->
                <?php if($loandetails->month_one_net_salary!=""): ?>
                <div class="row col-md-12">
                  <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_one_net_salary') ? ' has-error' : ''); ?>">
                    <label class="margin-label">Month</label>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_one_net_salary') ? ' has-error' : ''); ?>">
                    <label class="margin-label">Net Salary</label>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_one_net_salary') ? ' has-error' : ''); ?>">
                    <label class="margin-label">Gross Salary</label>
                  </div>
                </div>
                <div class="row col-md-12">

                <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_one_net_salary') ? ' has-error' : ''); ?>">
                   <label class="margin-label">Month 1</label>
                </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_one_net_salary') ? ' has-error' : ''); ?>">
                  <!-- <label class="margin-label">Net Salary</label> -->
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="month_one_net_salary" value="<?php echo e($loandetails->month_one_net_salary); ?>" >
                    <?php if($errors->has('month_one_net_salary')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('month_one_net_salary')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_two_net_salary') ? ' has-error' : ''); ?>">
                  <!-- <label class="margin-label">Gross Salary</label> -->
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="month_one_grosssalary" value="<?php echo e($loandetails->month_one_grosssalary); ?>" >
                    <?php if($errors->has('month_one_grosssalary')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('month_one_grosssalary')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>
              </div>
                <div class="row col-md-12">
                  <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_two_net_salary') ? ' has-error' : ''); ?>">
                   <label class="margin-label">Month 2</label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_two_net_salary') ? ' has-error' : ''); ?>">
                  <!-- <label class="margin-label">Net Salary Month 3</label> -->
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="month_two_net_salary" value="<?php echo e($loandetails->month_two_net_salary); ?>" >
                    <?php if($errors->has('month_two_net_salary')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('month_two_net_salary')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_two_grosssalary') ? ' has-error' : ''); ?>">
                  <!-- <label class="margin-label">Net Salary Month 3</label> -->
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="month_two_grosssalary" value="<?php echo e($loandetails->month_two_grosssalary); ?>" >
                    <?php if($errors->has('month_two_grosssalary')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('month_two_grosssalary')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>
              </div>

              <div class="row col-md-12">
                  <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_three_net_salary') ? ' has-error' : ''); ?>">
                   <label class="margin-label">Month 3</label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_three_net_salary') ? ' has-error' : ''); ?>">
                  <!-- <label class="margin-label">Net Salary Month 3</label> -->
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="month_three_net_salary" value="<?php echo e($loandetails->month_three_net_salary); ?>" >
                    <?php if($errors->has('month_three_net_salary')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('month_three_net_salary')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 <?php echo e($errors->has('month_three_grosssalary') ? ' has-error' : ''); ?>">
                  <!-- <label class="margin-label">Net Salary Month 3</label> -->
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="month_three_grosssalary" value="<?php echo e($loandetails->month_three_grosssalary); ?>" >
                    <?php if($errors->has('month_three_grosssalary')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('month_three_grosssalary')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>
              </div>
                <?php endif; ?>

                <!-- Existing Loan -->
                <?php if($loandetails->exist_loan_type!=""): ?>
                <div class="col-md-12">
                  <label>Existing loan Information</label>
                </div>
                  <div class="col-md-4 <?php echo e($errors->has('exist_loan_type') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Exist Loan Type</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="exist_loan_type" value="<?php echo e($loandetails->exist_loan_type); ?>" >
                    <?php if($errors->has('exist_loan_type')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('exist_loan_type')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('exist_loan_amount') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Loan Amount</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="exist_loan_amount" value="<?php echo e($loandetails->exist_loan_amount); ?>" >
                    <?php if($errors->has('exist_loan_amount')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('exist_loan_amount')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('exist_tenor_of_loan') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Tenor Of Loan</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="exist_tenor_of_loan" value="<?php echo e($loandetails->exist_tenor_of_loan); ?>" >
                    <?php if($errors->has('exist_tenor_of_loan')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('exist_tenor_of_loan')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('exist_emi') ? ' has-error' : ''); ?>">
                  <label class="margin-label">EMI</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="exist_emi" value="<?php echo e($loandetails->exist_emi); ?>" >
                    <?php if($errors->has('exist_emi')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('exist_emi')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('exist_sanction_dt') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Sanction Date</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="exist_sanction_dt" value="<?php echo e($loandetails->exist_sanction_dt); ?>" >
                    <?php if($errors->has('exist_sanction_dt')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('exist_sanction_dt')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                <div class="col-md-4 <?php echo e($errors->has('exist_emi_bounce') ? ' has-error' : ''); ?>">
                  <label class="margin-label">EMI Bounce</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="exist_emi_bounce" value="<?php echo e($loandetails->exist_emi_bounce); ?>" >
                    <?php if($errors->has('exist_emi_bounce')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('exist_emi_bounce')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <?php endif; ?>

                <div class="col-md-4 <?php echo e($errors->has('extra_income') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Extra Income</label>
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="extra_income" value="<?php echo e($loandetails->extra_income); ?>" >
                    <?php if($errors->has('extra_income')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('extra_income')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                            <?php if($loandetails->loandoc!= ''): ?>
                             <div class="single-job-post me-1 wow fadeInUp mt-25 col-lg-12" data-wow-delay="0.3s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="javascript:void(0);">Uploaded Documents</a> </h6>
                                        
                                    </div>
                                </div>

                               <?php
                                $count=0;

                               ?>

                                <?php $__currentLoopData = $loandetails->loandoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan_doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php 
                                $count++;
                                    $loan_dully=$loan_doc->where('name','dully_form')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                            
                             <?php if($count==1): ?>
                             <?php if($loan_dully!="[]"): ?>
                                <div class="post-content">
                                    <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Dully filled Application Form with Photograph :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                            </div>
                                            <?php $__currentLoopData = $loan_dully; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_dully): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      
                                           <div class="row">
                                           <div class="col-md-6">
                                              <!--  <p>Name</p> -->
                                              <p><?php echo substr($loans_dully->documents,13); ?></p>
                                           </div>
                                           <!-- <div class="col-md-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_dully->documents); ?>" class="btn btn-primary" download>Download</a>&nbsp;&nbsp;
                                           </div> -->
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_dully->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_dully->documents); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_dully->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       
                                        <!--<iframe class="mr-2 mb-1 mt-1" src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loans_dully->documents); ?>" id="pdf_display_frame" width="48%" height="400px"></iframe>-->
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       </div>
                                    </div>
                                    
                                <?php endif; ?>
                                <?php endif; ?>

                                   <?php if($loandetails->profession_type!="salaried"): ?>
                                 <?php 
                               
                                    $loan_identity=$loan_doc->where('name','identity')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_identity!="[]"): ?>
                                 <div class="post-content">
                                     <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                            <?php $__currentLoopData = $loan_identity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_identity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_identity->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                   <!--  -->
                                </div><br>
                                 <?php endif; ?>
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php 
                                  $loan_edu=$loan_doc->where('name','education')->where('loan_id',$loan_doc->loan_id)->get();
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_edu!="[]"): ?>
                                <div class="post-content">
                                    <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                      <div class="job-location me-lg-3 me-2"><h6>Educational Qualification Proof - Latest Degree (for professionals) :</h6><br>
                                            </div>
                                        <?php $__currentLoopData = $loan_edu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_edu->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                   
                                </div><br>
                                 <?php endif; ?>
                                <?php endif; ?>
                                  
                                <?php if($loandetails->profession_type!="salaried"): ?>
                                  <?php 
                                    $loan_business=$loan_doc->where('name','business_certificateproof')->where('loan_id',$loan_doc->loan_id)->get();
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_business!="[]"): ?>
                                 <div class="post-content">
                                   <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Certificate & Proof of business existence along with Business Profile :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                            </div><br>
                                            <?php $__currentLoopData = $loan_business; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_business->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    
                                </div><br>
                                 <?php endif; ?>
                                <?php endif; ?>

                                  <?php 
                                    $loan_tax=$loan_doc->where('name','tax_return_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_tax!="[]"): ?>
                                 <div class="post-content">
                                    <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Last 3 years Income Tax returns with Profit & Loss Account & Balance Sheets duly certified/audited by a Chartered Accountant :</h6><br>
                                            </div>
                                            <?php $__currentLoopData = $loan_tax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_tax->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    
                                </div><br>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php endif; ?> 
 

                                 <?php 
                                    $loan_bank=$loan_doc->where('name','bankstatement_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_bank!="[]"): ?>
                                 <div class="post-content">
                                    <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Last 12 months Bank Account Statements :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                             <?php $__currentLoopData = $loan_bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_bank->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                   
                                </div><br>
                                <?php endif; ?>
                                <?php endif; ?>

                               <!--  <div class="post-content">
                                    <div class="">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Processing Fee Cheque in favour of '……………………………' :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loan_doc->cheque); ?>" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div>

                                 <div class="post-content">
                                    <div class="">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Photocopy of Title Documents of the Property, Approved Plan etc. :</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($loan_doc->property_document); ?>" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div> -->

                                <?php if($loandetails->profession_type=="salaried"): ?>

                                 <?php 
                               
                                    $loan_identity=$loan_doc->where('name','identity')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_identity!="[]"): ?>
                                 <div class="post-content">
                                    <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                            <?php $__currentLoopData = $loan_identity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_identity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_identity->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                  
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    
                                </div><br>
                                 <?php endif; ?>
                                <?php endif; ?>

                                <?php 
                                    $loan_residence=$loan_doc->where('name','residence')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_residence!=""): ?>
                                    <div class="post-content">
                                    <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                            <?php $__currentLoopData = $loan_residence; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_residence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_residence->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                               
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    
                                </div><br>
                                <?php endif; ?>
                                <?php endif; ?>
                               
                                <?php 
                                    $loan_salary=$loan_doc->where('name','income_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_salary!=""): ?>
                                  <div class="post-content">
                                    <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Latest Salary-slips for last 3 months :</h6><br>
                                            </div>
                                            <?php $__currentLoopData = $loan_salary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_salary->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                  
                                </div><br>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    
                                </div><br>
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php 
                                    $loan_formsix=$loan_doc->where('name','form_sixteendoc')->where('loan_id',$loan_doc->loan_id)->get();
                                ?>
                                <?php if($count==1): ?>
                                <?php if($loan_formsix!=""): ?>
                                <div class="post-content">
                                   <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Form 16 for last 2 years </h6>
                                            <?php $__currentLoopData = $loan_formsix; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loans_formsix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                           <div class="col-md-6">
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
                                               <a href="<?php echo e(config('app.baseURL')); ?>/admin/delete_document/<?php echo e($loans_formsix->loan_doc_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
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
                            <?php endif; ?>

                            <?php if($loandetails->comments!="[]"): ?>
                         
                            <div class="post-content">
                              <div class="card" style="padding:10px;border:1px solid #ddd;width:70%;">
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
                               
                                    <?php $__currentLoopData = $loandetails->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                      $cmt=$cmt->whereIn('commentname', $name)->get();
                                  
                                    ?>
                                  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card" style="margin-left:10px;width:97%;">
                                    <div class="row">
                                      <div class="col-md-12">
                                    <p>Message From <?php echo e($comment_names->username->name); ?></p>
                                  </div>
                                  <i class="arrow up"></i>
                                  <div class="card" style="margin-left:15px;padding:10px;border:2px solid #ddd;width:95%;margin-top: -7px;">
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
                                    <div class="col-md-1 col-sm-1 col-2">
                                      <a href="<?php echo e(config('app.baseURL')); ?>/admin/deletecomment/<?php echo e($cmts->comment_id); ?>"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                    </div>
                                  
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
                            </div>
                            <?php endif; ?>
                <!-- Comments -->
                <div>
                  <form action="<?php echo e(config('app.baseURL')); ?>/admin/sendcomment" method="POST" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                   <input type="hidden" name="loan_id" value="<?php echo e($loandetails->loan_id); ?>">
                  <div class="<?php echo e($errors->has('comment') ? ' has-error' : ''); ?>">
                    <label class="margin-label">Comments</label>
                    <div class="form-group">
                      <div class="controls">
                        <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">           
                            <input class="form-control" data-validation-required-message="This field is required" type="text" name="commentname" value="" required="">            
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="<?php echo e($errors->has('attachment') ? ' has-error' : ''); ?>">
                    <label class="margin-label">Attachment</label>
                    <div class="form-group">
                      <div class="controls">
                        <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0"> 
                            <input multiple="" type="file" name="attachment[]" id="attachment">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="form-group">
                      <div class="controls">
                        <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0"> 
                            <button type="submit" class="btn btn-primary mt-1">Send</button>
                        </div>
                      </div>
                    </div>
                  </div>
                 </form>
              </div>

                <?php if($loandetails->note!= ''): ?>
                <div class="<?php echo e($errors->has('note') ? ' has-error' : ''); ?>">
                  <label class="margin-label">Pending Documents</label>
                  <div class="form-group">
                    <div class="controls">
                      <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                        <textarea class="form-control" cols="5" rows="8"><?php echo e($loandetails->note); ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endif; ?>

              </div>
           </div> 
         <!-- </form> -->
       </div>
     </div>
   </div>
 </div>
</div>
<!-- Model for Inprocess Document -->
<div class="modal fade" id="exampleModalInprocess" tabindex="-1" role="dialog" aria-labelledby="exampleModalInprocessLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalInprocessLabel">Please Select loan Status Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(config('app.baseURL')); ?>/admin/loaninprocess/<?php echo e($loandetails->loan_id); ?>" method="POST" id="userForm">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="loan_id" value="<?php echo e($loandetails->loan_id); ?>">
          <label>Sub Status</label>
          <select class="form-control" name="status_id" required>
            <?php $__currentLoopData = $loanstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loansstatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($loansstatus->status_id); ?>"><?php echo e($loansstatus->status_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <label>Comment</label>
        <textarea class="form-control" name="note" rows="6"></textarea>
  
        <button type="button" class="btn btn-secondary mt-1" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary mt-1">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
      
    </div>
  </div>
</div>
<!-- Modal For Document Pending -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Mention ending Documents Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(config('app.baseURL')); ?>/admin/loandocpending/<?php echo e($loandetails->loan_id); ?>" method="POST" id="userForm">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="loan_id" value="<?php echo e($loandetails->loan_id); ?>">
        <textarea class="form-control" name="note" rows="10"></textarea>
        <button type="button" class="btn btn-secondary mt-1" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary mt-1">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
      
    </div>
  </div>
</div>
<button type="button" onclick="window.print();" class="btn btn-success waves-effect waves-light m-r-20 no-print">Print
      </button>
</section>
  </div>
</div>

<script type="text/javascript">
  // function inprocess() {
  //   // alert("Do you want to change the status?");
  //   var retVal = confirm("Do you want to change the status?");
  //   if(retVal == true){
  //     document.getElementById("myAnchor").href = "<?php echo e(config('app.baseURL')); ?>/admin/loaninprocess/<?php echo e($loandetails->loan_id); ?>";
  //   }
  //   else{
  //     document.getElementById("myAnchor").href = "";
  //   }
    
  // }
  function approved() {
    // alert("Do you want to change the status?");
    var retVal = confirm("Do you want to change the status?");
    if(retVal == true){
      document.getElementById("myAnchora").href = "<?php echo e(config('app.baseURL')); ?>/admin/loanapproved/<?php echo e($loandetails->loan_id); ?>";
    }
    else{
      document.getElementById("myAnchora").href = "";
    }
    
  }
function reject() {
    // alert("Do you want to change the status?");
    var retVal = confirm("Do you want to change the status?");
    if(retVal == true){
      document.getElementById("myAnchorr").href = "<?php echo e(config('app.baseURL')); ?>/admin/loanrejected/<?php echo e($loandetails->loan_id); ?>";
    }
    else{
      document.getElementById("myAnchorr").href = "";
    }
    
  }
  // function docpending() {

  //    var retVal = confirm("Do you want to change the status?");
  //   if(retVal == true){

  //     document.getElementById("myAnchord").href = "<?php echo e(config('app.baseURL')); ?>/admin/loandocpending/<?php echo e($loandetails->loan_id); ?>";
  //   }
  //   else{
  //     document.getElementById("myAnchord").href = "";
  //   }
  // }

  
</script>

<!-- <script type="text/javascript">       
  function docpending() {
   var person = prompt("Please mention pending documents");
    var retVal = confirm("Do you want to change the status?");
      if(retVal == true){
      document.getElementById("myAnchord").href = "<?php echo e(config('app.baseURL')); ?>/admin/loandocpending/<?php echo e($loandetails->loan_id); ?>/"+person;
    }
    else{
       document.getElementById("myAnchord").href = "";
    }   
}
            
</script> -->
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u540016792/domains/jfinserv.com/public_html/resources/views/admin/loan_details.blade.php ENDPATH**/ ?>