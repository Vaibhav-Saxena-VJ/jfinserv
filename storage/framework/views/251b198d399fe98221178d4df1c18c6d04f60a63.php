
<?php $__env->startSection('content'); ?>


<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">All Notifications</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#"> All Notifications </a>
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
    <section id="basic-datatable">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">All Notifications</h4>
            </div> 
            <div class="card-content">
              <div class="card-body card-dashboard">
              	<div class="col-md-12">
              <div  class="form-section ">

              	<?php if($user_comments!='[]'): ?>
                  <?php $__currentLoopData = $user_comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usercmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                  <div class="row">
                    <div class="card col-md-12" style="margin-bottom:3px;border: 1px solid grey;">
                    <div class="" style="padding:10px;">
                      <div class="row">
                        <div class="col-md-9" style="margin-bottom:3px;">
                          <label><h6>New Message Received for Loan Id <?php echo e($usercmt->loan_id); ?></h6></label>
                        </div>
                        <div class="col-md-3" style="margin-bottom:3px;">
                         <a href="<?php echo e(config('app.baseURL')); ?>/admin/readnotify/<?php echo e($usercmt->loan_id); ?>"> <button type="button" class="form-control btn btn-primary"><span style="color: white;">Read</span></button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
               
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  <div class="row">
                    <div class="content-body card col-md-12" style="margin-bottom:3px;border: 1px solid grey;">
                    <div class="col-md-12" style="padding:10px;">
                      <div class="row">
                        <div class="col-md-9" style="margin-bottom:3px;">
                          <label><h6>No New Message found</h6></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  <?php endif; ?>
              </div>
          </div>
              </div>
          </div>
           </div>
         </div>
        </div>
       </section>
   </div> 
  </div> 









<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vshoppng/jfinserv_vshoppng_tech/resources/views/admin/notifications.blade.php ENDPATH**/ ?>