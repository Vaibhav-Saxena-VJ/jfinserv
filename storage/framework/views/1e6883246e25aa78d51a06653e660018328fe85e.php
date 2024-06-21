
<?php $__env->startSection('content'); ?>
<style type="text/css">
#footer-table_filter{
    float: right;
}
.footer-table-length{
    width: 60px;
}
.form-control{
    display: inline-block;
    width: 100px;
}
.previous{
    margin-left: 366px;
}
div.dataTables_wrapper div.dataTables_length select {
    width: auto;
    display: inline-block;
}
</style>
<main>
<!-- <section class="breadcrumb-area">
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

        <!--     <section class="cta-area-2 pt-80 pb-80" style="margin-top: 150px;">-->
        <!--    <div class="container">-->
        <!--        <div class="row align-items-center">-->
        <!--            <div class="col-md-6">-->
        <!--                <div class="cta-content text-black wow fadeInRight">-->
        <!--                    <h2>Apple for home loan?</h2>-->
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
        <section class="pb-130 bg_disable" style="margin-top:150px;">
            <div class="container">
                <div class="row">
                    <!-- left side bar -->
                       <?php echo $__env->make('layouts.user-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- Right bar -->
                    <div class="col-lg-9 mt-4">
                        <div class="content-wrapper">
                          <div class="content-header row">
                            <div class="content-header-left col-md-9 col-12 mb-2">
                              <div class="row breadcrumbs-top">
                                <div class="col-12">
                                  <h2 class="content-header-title float-left mb-0">Refer & Earn</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="<?php echo e(config('app.baseURL')); ?>"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="<?php echo e(config('app.baseURL')); ?>/myreferearn/<?php echo e($user_id); ?>"> Refer & Earn </a>
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
                            <div class="col-md-12">
      <div  class="form-section">


        <form>
         <div class="row">
          <div class="col-sm-6">
              <label style="margin-bottom:4px;"><b>My Referral Code</b></label>
           <div class="form-group">
             <input type="text" name="copy_link" class="form-control" value="<?php echo e($user->referal_code); ?>" id="copy_link" value="" readonly="" placeholder="" style="width: 100%;">
           </div>
         </div>
         <div class="col-sm-2">
          <button type="button" data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; height: 40px; line-height: 40px; float: right; margin-left: 0px !important; font-size: 16px !important;" id="copyText" class="site-button">Copy</button>
        </div>

      </div>
    </form>
  </div>
</div>
                          </div><br><br>

                          <div class="content-body">
                            <section id="basic-datatable">
                              <div class="row">
                                <div class="col-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h4 class="card-title">Refer & Earn </h4>
                                      <!-- <a href=""> <button type="submit" class="btn pull-right btn btn-primary panel-button"> Add </button></a> -->
                                    </div>
                                    <div class="card-content">
                                      <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                          <table id="footer-table" class="table zero-configuration">
                                            <thead>
                                              <tr>
                                              <th> ID</th>
                        <th>Referral User ID</th>
                        <th>Referral User Name</th>
                        <th>Referral User Mobile</th>
                        
                        <th>Loan Status</th>
                        <th>User Claim</th>
                        <th>Created At</th>
                                              </tr>
                                            </thead>
                                            <tfoot>
                                              <tr>
                                              <th> ID</th>
                        <th>Referral User ID</th>
                        <th>Referral User Name</th>
                        <th>Referral User Mobile</th>
                       
                        <th>Loan Status</th>
                        <th>User Claim</th>
                        <th>Created At</th>
                                              </tr>
                                            </tfoot>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                          </div>
                        </div>

                        <script>

  $(function(){
    $("#footer-table").DataTable({
      "processing": true,
      "serverSide": true,
      "responsive": true,
      
      "ajax": "<?php echo e(config('app.baseURL')); ?>/myreferearn/all/<?php echo e($user_id); ?>",

      "columns":[{
        "mData":"loan_id",
        "mRender": function(data, type, row){
          
          return row.loan_id;
          
          
        }
      },{
        "mData":"loan_user_id",
      },{
        "mData":"loan.full_name",
      },{
        
        "mData":"loan.mobile",
      },
     {  
        
        "mData": "loan.status",
        "mRender": function(data, type, row){
          if(row.loan.status==2){
            return "<span style='color:#28c76f;'>Approved</span>";
          }
          else{
           return "<span style='color:#ff9f43;'>Pending</span>";
         }

       }
     },
     {  
      
      "mData": "loan.status",
      "mRender": function(data, type, row){
        if(row.is_claim==1 && row.loan.status==2){
          return "<a href='<?php echo e(config('app.baseURL')); ?>/claim/"+row.loan_id+"'><button class='btn btn-primary'><span style='color:#fff;'>Claim Now</span></button></a>";
        }
        else if(row.is_claim==2){
         return "<span style='color:#ff9f43;'>Claimed</span>";
       }else if(row.is_claim==3){
         return "<span style='color:#ff9f43;'>Claimed & Received</span>";
       }else{
         return "<span style='color:#ff9f43;'>--</span>";
       }

     }
   },
   {
    "mData": "created_at"
  }]
});
  });


</script>
                         
<!-- datatable js -->

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

                         </div>    
                    </div>
                </div>
            
        </section>
       


       


    </main>
    <script type = "text/javascript">


  var text = document.getElementById("copy_link");

  /* return button to variable btn */
  var btn = document.getElementById("copyText");

  /* call function on button click */
  btn.onclick = function() {
    text.select();    
    document.execCommand("copy");
  }


</script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vshoppng/jfinserv_vshoppng_tech/resources/views/myaccount/myrefer_earn.blade.php ENDPATH**/ ?>