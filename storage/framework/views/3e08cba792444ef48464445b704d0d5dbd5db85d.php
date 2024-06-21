<?php
$user=Auth::user();
?>
<style type="text/css">
  .catagory-list-widget .catagory-list .catagory-item .catagory-link {

    padding: 9px 20px 9px 15px !important;
    justify-content: unset !important;
  
}
.catagory-list-widget .catagory-list .catagory-item .catagory-link .text{

  margin-left: 15px;

  }
    .dot {
  height: 25px;
  width: 25px;
  background-color: #eb2a2a;
  border-radius: 50%;
  display: inline-block;
}

</style>
<div class="col-lg-3  pr-lg-55">
                        <div class="left-sidebar-widget">
                            <div class="single-sidebar-widget mt-25 widget-border">
                                <div class="catagory-list-widget">
                                    <div class="widget-title">
                                      
                                       
                                        <h5 style="display: inline-flex;font-size: 22px;"> <img src="<?php echo e(asset('images\lock.png')); ?>" alt="icon" class="icons" style="width: 25px;"> &nbsp;My Accounts</h5>
                                    <?php
                                    $user=Auth::user();
                                    ?>
                                    <?php if($user!=""): ?>
                                   <p style="margin-left:15%;">Welcome <b><?php echo e($user->name); ?></b></p> 
                                    <?php endif; ?>
                                    </div>
                                    <div class="widget-content ">

                                        <ul class="catagory-list py-3">
                                        
                                          
                                          <li class="catagory-item" style="padding-left: 20px;"><h5>Referral</h5>

                                                    <p><span class="text" style="font-size: 18px;font-weight: 600;">Earnings</span>: ₹ <?php echo e($user->wallet); ?></p><br>
                                                     <?php if($user->wallet>=10000): ?>
                                                     <form action="<?php echo e(config('app.baseURL')); ?>/redeem" method="post">
                                                      <?php echo csrf_field(); ?>
                                                   <center>
                                                     <button type="submit" class="btn btn-primary" style="background-color: #0050b2;padding: 5px; border-radius: 5px;color: #fff;">Redeem Now</button>
                                                   </center>
                                                 </form>
                                                   <?php endif; ?>
 
                                            </li>
                                            <hr>
                                            <li class="catagory-item ">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/myprofile" class="catagory-link ">
                                                  <img src="<?php echo e(asset('images\resume.png')); ?>" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Personal Details</span>
                                                </a>
                                            </li>
                                             <li class="catagory-item ">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/professional-detail" class="catagory-link ">
                                                  <img src="<?php echo e(asset('images\resume.png')); ?>" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Professional Details</span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/mynotifications" class="catagory-link">
                                                  <img src="<?php echo e(asset('images\processing.png')); ?>" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Notifications</span>
                                                    <?php if($data['notification_count']==0): ?>
                                                    <span class="number">
                                                       (<?php echo e($data['notification_count']); ?>)
                                                 
                                                    </span>
                                                    <?php else: ?>
                                                    <span class="number dot" style="text-align: center;color: white;">
                                                       (<?php echo e($data['notification_count']); ?>)
                                                 
                                                    </span>
                                                    <?php endif; ?>
                                                    
                                                </a>
                                            </li>
                                            
                                            <li class="catagory-item">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/myloaninprocess/<?php echo e($user->id); ?>" class="catagory-link">
                                                  <img src="<?php echo e(asset('images\processing.png')); ?>" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Loan Application</span>
                                                    
                                                </a>
                                            </li>
                                            
                                            <!--<li class="catagory-item ">-->
                                            <!--    <a href="<?php echo e(config('app.baseURL')); ?>/myloandetails/<?php echo e($user->id); ?>" class="catagory-link">-->
                                            <!--      <img src="<?php echo e(asset('images\document.png')); ?>" alt="icon" class="icons" style="width: 30px; height: 30px;">-->
                                            <!--        <span class="text">Document Pending</span>-->
                                            <!--        <span class="number">-->
                                            <!--            <?php if($doc_pending!=""): ?>-->
                                            <!--           ( <?php echo e($doc_pending); ?> )-->
                                            <!--           <?php else: ?>-->
                                            <!--           (0)-->
                                            <!--           <?php endif; ?>-->
                                            <!--        </span>-->
                                            <!--    </a>-->
                                            <!--</li>-->

                                            <li class="catagory-item">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/myloanapproved/<?php echo e($user->id); ?>" class="catagory-link">
                                                  <img src="<?php echo e(asset('images\give-money.png')); ?>" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Approved Loan</span>
                                                    <span class="number">
                                                       <?php if($approved!=""): ?>
                                                       (<?php echo e($approved); ?>)
                                                       <?php else: ?>
                                                       (0)
                                                       <?php endif; ?>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/myloanreject/<?php echo e($user->id); ?>" class="catagory-link">
                                                  <img src="<?php echo e(asset('images\loan.png')); ?>" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Rejected Loan</span>
                                                    <span class="number">
                                                         <?php if($rejeted!=""): ?>
                                                       (<?php echo e($rejeted); ?>)
                                                       <?php else: ?>
                                                       (0)
                                                       <?php endif; ?>
                                                    </span>
                                                </a>
                                            </li>
                                           
                                            <li class="catagory-item">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/myreferearn/<?php echo e($user->id); ?>" class="catagory-link">
                                                  <img src="<?php echo e(asset('images\network.png')); ?>" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Referrals</span>
                                                    <span class="number">
                                                         <?php if($referearn!=""): ?>
                                                       (<?php echo e($referearn); ?>)
                                                       <?php else: ?>
                                                       (0)
                                                       <?php endif; ?>
                                                    </span>
                                                </a>
                                            </li>

                                            

                                            <!-- <li class="catagory-item">-->
                                            <!--    <a href="<?php echo e(config('app.baseURL')); ?>/myrefercode" class="catagory-link">-->
                                            <!--      <img src="<?php echo e(asset('images\reference.png')); ?>" alt="icon" class="icons" style="width: 30px;">-->
                                            <!--        <span class="text">Refer Code</span>-->
                                                  
                                            <!--    </a>-->
                                            <!--</li>-->
                                             <li class="catagory-item">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/bank-details" class="catagory-link">
                                                  <img src="<?php echo e(asset('images\text-file.png')); ?>" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">My Bank Details</span>
                                                  
                                                </a>
                                            </li>
                                             <li class="catagory-item">
                                                <a href="<?php echo e(config('app.baseURL')); ?>/change-password" class="catagory-link">
                                                  <img src="<?php echo e(asset('images\lock.png')); ?>" alt="icon" class="icons" style="width: 25px;">
                                                    <span class="text">Change Password</span>
                                                  
                                                </a>
                                            </li>
                                            
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><?php /**PATH /home/vshoppng/jfinserv_vshoppng_tech/resources/views/layouts/user-left.blade.php ENDPATH**/ ?>