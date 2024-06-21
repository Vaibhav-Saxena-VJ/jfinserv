
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

   

        <!-- Job posts start -->
        <section class=" pb-130 bg_disable"  style="margin-top: 150px;">
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
                                  <h2 class="content-header-title float-left mb-0">Approved Loan</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="<?php echo e(config('app.baseURL')); ?>"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="<?php echo e(config('app.baseURL')); ?>/myloanapproved/<?php echo e($user_id); ?>"> Approved Loan </a>
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
                                      <h4 class="card-title">Approved Loan </h4>
                                      <!-- <a href=""> <button type="submit" class="btn pull-right btn btn-primary panel-button"> Add </button></a> -->
                                    </div>
                                    <div class="card-content">
                                      <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                          <table id="footer-table" class="table zero-configuration">
                                            <thead>
                                              <tr>
                                                <th>Loan ID</th>
                                                <th>Name</th>
                                                <th>Loan Tenure (In yrs)</th>
                                                <th>Loan Amount</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tfoot>
                                              <tr>
                                               <th>Loan ID</th>
                                                <th>Name</th>
                                                <th>Loan Tenure (In yrs)</th>
                                                <th>Loan Amount</th>
                                                <th>Created At</th>
                                                <th>Action</th>
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
                              "stateSave": true,
                              "processing": true,
                              "serverSide": true,
                              "paging": true,
                              "order": [[ 1, "desc" ]],
                              "ajax": "<?php echo e(config('app.baseURL')); ?>/myloanapproved/all/<?php echo e($user_id); ?>",

                              "columns":[{
                                "mData": "loan_id" 
                              },{
                                "mData": "full_name" 
                              },{
                                  "mData": "loan_type"    
                                },{
                                  "mData": "loan_amount"
                                },{
                                "mData": "created_at" 
                              },{
                                "targets":-1,
                                  "mData": "Action",
                                  "bSortable": false,
                                  "ilter":false,
                                  "mRender": function(data, type, row){
                                     return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/accountLoanDetails/" + row.loan_id+"><span><button type='submit' class='btn btn-primary mr-1'>Details</button></span></a>";
                                  },
                              },
                                ]
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

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/myaccount/myapproved_loan.blade.php ENDPATH**/ ?>