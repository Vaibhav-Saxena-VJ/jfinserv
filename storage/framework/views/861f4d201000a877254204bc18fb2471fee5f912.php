
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Commission Master</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Commission Master </a>
              </li>
              <li class="breadcrumb-item">
              Edit                                </li>
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
              <h4 class="card-title">Commission Master</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <p class="mt-1">Edit <code>Commission Master</code></p>



          <!-- Multiple Rule Validation end -->
          <form class="form-horizontal" role="form" method="POST" action="<?php echo e(config('app.baseURL')); ?>/admin/commission/<?php echo e($commissionmaster->commission_id); ?>" enctype="multipart/form-data" novalidate="">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                        
            <div class="contact-form">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 <?php echo e($errors->has('seo_title') ? ' has-error' : ''); ?>">
                  <div class="form-group">
                    <div class="controls">
                    
                    <input class="form-control" required="" data-validation-required-message="This field is required" type="text" name="commission_percent" value="<?php echo e($commissionmaster->commission_percent); ?>" placeholder="Comission Percent">
                    <?php if($errors->has('commission_percent')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('commission_percent')); ?></strong>
                    </span>
                    <?php endif; ?></div>
                  </div>
                </div>

                

                
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-submit mt-10 mb-30 text-center">

                   <button type="submit" class="btn btn-primary">Edit Commission Percentage</button>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/commission/edit.blade.php ENDPATH**/ ?>