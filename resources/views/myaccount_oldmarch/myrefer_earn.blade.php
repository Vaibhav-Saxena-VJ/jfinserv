@extends('layouts.app')
@section('content')
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
<section class="breadcrumb-area">
            <div class="breadcrumb-widget  pt-145 pb-125" style="background-image: url(http://localhost/finance/assets/img/banner/loan-banner.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content pt-170">
                                <h1>My Account</h1>
                                <ul>
                                    <li><a href="{{config('app.baseURL')}}">home</a></li>
                                    <li>My Account</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- BreadCrumb end -->

        <!-- Job posts start -->
        <section class="pt-110 pb-130 bg_disable">
            <div class="container">
                <div class="row">
                    <!-- left side bar -->
                       @include('layouts.user-left')

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
                                        <a href="{{config('app.baseURL')}}"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}/myreferearn/{{$loan_details->mobile}}"> Refer & Earn </a>
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
                                      <h4 class="card-title">Rejected Loan </h4>
                                      <!-- <a href=""> <button type="submit" class="btn pull-right btn btn-primary panel-button"> Add </button></a> -->
                                    </div>
                                    <div class="card-content">
                                      <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                          <table id="footer-table" class="table zero-configuration">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Products</th>
                                                <th>Status</th>
                                                <th>Created At</th>
                                              </tr>
                                            </thead>
                                            <tfoot>
                                              <tr>
                                               <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Products</th>
                                                <th>Status</th>
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
                              "stateSave": true,
                              "processing": true,
                              "serverSide": true,
                              "paging": true,
                              "order": [[ 1, "desc" ]],
                              "ajax": "{{config('app.baseURL')}}/myreferearn/all/{{$loan_details->mobile}}",

                              "columns":[{
                                "mData": "name" 
                              },{
                                "mData":"phone",
                                "mRender": function(data, type, row){
                                 return "<span><a href='tel:"+row.phone+"'>"+row.phone+"</a></span>";
                                },
                              },{
                                  "mData":"email",
                                    "mRender": function(data, type, row){

                                      return "<span><a href='mailto:"+row.email+"'>"+row.email+"</a></span>";
                                    },  
                                },{
                                  
                                "mData": "product_id",
                                "mRender": function(data, type, row){
                                  if(row.product_id==1){
                                    return "<span>Term Insurance</span>";
                                  }else if(row.product_id==2){
                                                 
                                                 return "<span>Health Insurance</span>";
                                  }else if(row.product_id==3){
                                                 
                                                 return "<span>Home Loan</span>";
                                  }else if(row.product_id==4){
                                                 
                                                 return "<span>Personal Loan</span>";
                                  }
                                  else if(row.product_id==5){
                                   return "<span>Mutual Fund</span>";
                                  }else{
                                     return "<span>--</span>";
                                  }

                                },
                                },{  
        
                            "mData": "status_id",
                            "mRender": function(data, type, row){
                              if(row.status_id==1){
                                return "<span>Confirmed</span>";
                              }
                              else{
                               return "<span>Pending Confirmation</span>";
                              }

                            },
                            },{
                                "mData": "created_at" 
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

    @endsection