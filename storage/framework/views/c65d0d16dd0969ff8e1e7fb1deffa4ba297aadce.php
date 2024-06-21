
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Associate Access</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#"> Employee </a>
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
              <h4 class="card-title">Associate Access</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <p class="mt-1">Add <code>Employee</code></p>



                <!-- Multiple Rule Validation end -->
                <form class="form-horizontal" role="form" method="POST" action="add" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                        
                  <div class="contact-form">
                    <div class="row">

                      <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Full Name"  name="name" type="text" required="">
                            <?php if($errors->has('name')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                      
              
                      <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Email" name="email"  type="email" required="">
                            <?php if($errors->has('email')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Contact Number"  name="contact_number" type="number" required="">
                            <?php if($errors->has('contact_number')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('contact_number')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                      
                            <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('designation') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Designation"  name="designation" type="text" required="">
                            <?php if($errors->has('designation')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('designation')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('designation') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                            <label>DOJ</label>
                          <div class="controls">
                              
                            <input class="form-control" placeholder="Date of Joining"  name="doj" type="date" required="">
                            <?php if($errors->has('doj')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('doj')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('job_location') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Job Location"  name="job_location" type="text" required="">
                            <?php if($errors->has('job_location')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('job_location')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                      
                            <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('present_address') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Present Address"  name="present_address" type="text" required="">
                            <?php if($errors->has('present_address')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('present_address')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                      
                       <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('c_address') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Permanent Address"  name="c_address" type="text" required="">
                            <?php if($errors->has('c_address')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('c_address')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                      
                     
                       
                       <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('g_address') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Guardian Address"  name="g_address" type="text" required="">
                            <?php if($errors->has('c_address')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('c_address')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                      
                               <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('guardian_contact_number') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                            <input class="form-control" placeholder="Guardian Contact Number"  name="guardian_contact_number" type="number" required="">
                            <?php if($errors->has('guardian_contact_number')): ?>
                            <span class="help-block">
                              <strong><?php echo e($errors->first('guardian_contact_number')); ?></strong>
                            </span>
                          <?php endif; ?></div>
                        </div>
                      </div>
                      
                              
                      
                      <div class="col-lg-6 col-md-6 col-sm-6 <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <div class="form-group">
                          <div class="controls">

                           <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
                           <?php if($errors->has('password')): ?>
                           <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                          </span>
                        <?php endif; ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-submit mt-10 mb-30 text-center">

                       <button type="submit" class="btn btn-primary">Add Employee</button>
                     </div>
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
  $(".editor").on('keyup  mouseover',function(e) {
    var myEditor = document.querySelector('.editor')
    var html = myEditor.children[0].innerHTML;
    $('.new-editor').val(html);
  });

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
<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/admin/add.blade.php ENDPATH**/ ?>