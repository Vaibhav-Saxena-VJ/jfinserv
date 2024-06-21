
<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.min.js"></script>
<!-- Jquery -->
<script type="text/javascript" src="<?php echo e(asset('assets\js\jquery.min.js')); ?>"></script>

<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">MIS</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#"> MIS </a>
              </li>
              <li class="breadcrumb-item">
              Add                                </li>
            </ol> 
          </div>
        </div>
      </div>
    </div>

  </div>                    
  <div class="content-body">

    <!-- Simple Validation start -->
    <section class="simple-validation">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">MIS</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <p class="mt-1">Add <code> Mis</code></p>
            
          <form class="form-horizontal" role="form" method="POST" action="addMis" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                        
            <div class="contact-form">
              <div class="row">
               
                <div class="col-sm-3 <?php echo e($errors->has('customer_name') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="customer_name" value="<?php echo e(old('customer_name')); ?>" placeholder="Customer Name">
                      <?php if($errors->has('customer_name')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('customer_name')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('customer_residence') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <textarea name="customer_residence" class="form-control summernote-editor" rows="1" value="<?php echo e(old('customer_residence')); ?>" placeholder="Enter Residence Address"><?php echo e(old('customer_residence')); ?></textarea>
                      <?php if($errors->has('customer_residence')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('customer_residence')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('office_shop_add') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <textarea name="office_shop_add" class="form-control summernote-editor" rows="1" value="<?php echo e(old('office_shop_add')); ?>" placeholder="Enter Office/Shop Address"><?php echo e(old('office_shop_add')); ?></textarea>
                      <?php if($errors->has('office_shop_add')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('office_shop_add')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('contact_no') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="contact_no" value="<?php echo e(old('contact_no')); ?>" placeholder="Contact Number">
                      <?php if($errors->has('contact_no')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('contact_no')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
                      <?php if($errors->has('email')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('required_loan') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="required_loan" value="<?php echo e(old('required_loan')); ?>" placeholder="Required Loan">
                      <?php if($errors->has('required_loan')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('required_loan')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('product') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="product" value="<?php echo e(old('product')); ?>" placeholder="Product">
                      <?php if($errors->has('product')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('product')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('bank_nbfc_name') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="bank_nbfc_name" value="<?php echo e(old('bank_nbfc_name')); ?>" placeholder="Bank/NBFC Name">
                      <?php if($errors->has('product')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('bank_nbfc_name')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('property_details') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <textarea name="property_details" class="form-control summernote-editor" rows="1" value="<?php echo e(old('property_details')); ?>" placeholder="Enter Property Details"><?php echo e(old('property_details')); ?></textarea>
                      <?php if($errors->has('property_details')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('property_details')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="city" value="<?php echo e(old('city')); ?>" placeholder="City">
                      <?php if($errors->has('city')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('city')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                 <div class="col-sm-3 <?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="state" value="<?php echo e(old('state')); ?>" placeholder="State">
                      <?php if($errors->has('state')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('state')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div> 
                <div class="col-sm-3 <?php echo e($errors->has('pincode') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="pincode" value="<?php echo e(old('pincode')); ?>" placeholder="Pin Code">
                      <?php if($errors->has('pincode')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('pincode')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                <div class="col-sm-3 <?php echo e($errors->has('remarks') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                      
                      <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="remarks" value="<?php echo e(old('remarks')); ?>" placeholder="Remarks">
                      <?php if($errors->has('remarks')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('remarks')); ?></strong>
                      </span>
                    <?php endif; ?></div>
                  </div>
                </div>
                
            

             
       
           </div> 
                  <div class="row">
                <div class="col-lg-12">
                  <div class="form-submit mt-10 mb-30">

                   <button type="submit" class="btn btn-success">Save</button>
                    <a href="<?php echo e(config('app.baseURL')); ?>/admin/mis"><button type="button" class="btn btn-danger">Cancel
   </button></a>
                 </div>
               </div>
             </div>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
</section>
</div>
</div>

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vshoppng/jfinserv_vshoppng_tech/resources/views/admin/mis/add.blade.php ENDPATH**/ ?>