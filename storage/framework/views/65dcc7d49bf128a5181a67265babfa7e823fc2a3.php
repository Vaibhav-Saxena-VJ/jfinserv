
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
        <section class="pb-130 bg_disable" style="margin-top: 150px;">
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
                                  <h2 class="content-header-title float-left mb-0">Loan Application</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="<?php echo e(config('app.baseURL')); ?>"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="<?php echo e(config('app.baseURL')); ?>/myloaninprocess/<?php echo e($user_id); ?>"> Loan Application </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                      All                                </li>
                                    </ol> 
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 
                          
                          <div class="content-body" style="margin-bottom:20px;">
                            <section id="basic-datatable">
                              <div class="row">
                                <div class="col-12">
                                    
                                  <div class="card">
                                      
                                    <div class="card-header">
                                         <a href="<?php echo e(config('app.baseURL')); ?>/apply-now" data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px;
    line-height: 40px;float:right;"> Start Application
                            </a>
                                        <!--<a href="<?php echo e(config('app.baseURL')); ?>/apply-now" style="margin-top:10px;margin-right:10px"> <button type="button" class="btn pull-right btn btn-primary panel-button" style="float:right;"> Apply For New Loan </button></a>-->
                                        
                                      <h4 class="card-title">Apply for new loan? </h4>
                                        
                                    </div>
                                
                                  </div>
                                </div>
                              </div>
                            </section>
                          </div>
                         
                          

                          <div class="content-body" style="margin-top:20px;">
                            <section id="basic-datatable">
                              <div class="row">
                                <div class="col-12">
                                    
                                  <div class="card">
                                      
                                    <div class="card-header">
                                        
                                      <h4 class="card-title">Application Draft </h4>
                                        
                                    </div>
                                    <div class="card-content">
                                      <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                          <table id="footer-table-one" class="table zero-configuration">
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
                          
                          
                          <div class="content-body" style="margin-top:20px;">
                            <section id="basic-datatable">
                              <div class="row">
                                <div class="col-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h4 class="card-title">Documents Pending </h4>
                                      
                                    </div>
                                    <div class="card-content">
                                      <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                          <table id="footer-table-two" class="table zero-configuration">
                                            <thead>
                                              <tr>
                                                <th>Loan ID</th>
                                                <th>Name</th>
                                                <th>Loan Tenure (In Yrs)</th>
                                                <th>Loan Amount</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tfoot>
                                              <tr>
                                               <th>Loan ID</th>
                                                <th>Name</th>
                                               <th>Loan Tenure (In Yrs)</th>
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
                          
                          
                          <div class="content-body" style="margin-top:20px;">
                            <section id="basic-datatable">
                              <div class="row">
                                <div class="col-12">
                                    
                                  <div class="card">
                                      
                                    <div class="card-header">
                                        
                                      <h4 class="card-title">Application (Under Process) </h4>
                                        
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
                                                <th>Sub Status</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tfoot>
                                              <tr>
                                               <th>Loan ID</th>
                                                <th>Name</th>
                                                <th>Loan Tenure (In yrs)</th>
                                                <th>Loan Amount</th>
                                                <th>Sub Status</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
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
                            //   "stateSave": true,
                              "processing": true,
                              "serverSide": true,
                              "paging": true,
                              "order": [[ 6, "desc" ]],
                              "ajax": "<?php echo e(config('app.baseURL')); ?>/myloaninprocess/all/<?php echo e($user_id); ?>",

                              "columns":[{
                                "mData": "loan_id" 
                              },{
                                "mData": "full_name" 
                              },{
                                  "mData": "loan_type"    
                                },{
                                  "mData": "loan_amount"
                                },{
                                  "mData":"substatus.status_name",
                                      "mRender": function(data, type, row){
                                        
                                        if(row.substatus!=null){
                                             return row.substatus.status_name;
                                        }else{
                                             return "--";
                                        }
                                 },
                                },{
                                "mData": "created_at" 
                              },{
                                "mData": "updated_at" 
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
                              
                                                       $("#footer-table-one").DataTable({
                            //   "stateSave": true,
                              "processing": true,
                              "serverSide": true,
                              "paging": true,
                              "order": [[ 0, "desc" ]],
                              "ajax": "<?php echo e(config('app.baseURL')); ?>/myloandraft/all/<?php echo e($user_id); ?>",

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
                                     return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/accountLoanDetails/" + row.loan_id+"><span><button type='submit' class='btn btn-primary mr-1'>Details</button></span></a>&nbsp;&nbsp;<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/loandraft/delete/" + row.loan_id+" onclick='if (confirm('Are you sure you want to delete this draft?')){return true;}else{event.stopPropagation(); event.preventDefault();};'><span><button type='submit' class='btn btn-default mr-1' style='background:#ddd;'>Delete</button></span></a>";
                                  },
                              },
                                ]
                              });
                              
                               $("#footer-table-two").DataTable({
                            //   "stateSave": true,
                              "processing": true,
                              "serverSide": true,
                              "paging": true,
                              "order": [[ 0, "desc" ]],
                              "ajax": "<?php echo e(config('app.baseURL')); ?>/myloandetails/all/<?php echo e($user_id); ?>",

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

 <script src="<?php echo e(asset('js\scripts\datatables\datatable.js?id=6ff59147c9820a80f8ea')); ?>"></script>


        <script src="<?php echo e(asset('vendors\js\tables\datatable\datatables.min.js?id=97fd6a774fc6211e7619')); ?>"></script>
       
        <script src="<?php echo e(asset('vendors\js\tables\datatable\buttons.bootstrap.min.js?id=77c8d7c4b64bceb0251c')); ?>"></script>
        <script src="<?php echo e(asset('vendors\js\tables\datatable\datatables.bootstrap4.min.js?id=b63fdeeb4941fd4cab8a')); ?>"></script>

                         </div>    
                    </div>
                </div>
            
        </section>
       


       


    </main>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jfinserv.com/public_html/resources/views/myaccount/myinprocess_loan.blade.php ENDPATH**/ ?>