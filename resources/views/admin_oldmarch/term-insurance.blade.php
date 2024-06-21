@extends('layouts.admin-app')
@section('content')

<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Term Insurance</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#"> Term Insurance </a>
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
              <h4 class="card-title">All Term Insurances</h4>
            </div>
            <div class="card-content">
              <div class="card-body card-dashboard">

                <div class="table-responsive">
                  <table id="footer-table" class="table zero-configuration">
                    <thead>
                      <tr>

                        <th>Phone</th>
                        <th>Email</th>
                        <th>Current Age</th>
                        <th>Annual Income</th>
                        <th>Annual Increment</th>
                        <th>Savings</th>
                        <th>Loan</th>
                        <th>Required Cover</th>
                        <th>Created At</th>

                      </tr>
                    </thead>

                    <tfoot>
                      <tr>
                       <th>Phone</th>
                        <th>Email</th>
                        <th>Current Age</th>
                        <th>Annual Income</th>
                        <th>Annual Increment</th>
                        <th>Savings</th>
                        <th>Loan</th>
                        <th>Required Cover</th>
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

      "ajax": "{{config('app.baseURL')}}/admin/term_insurance/allData",

      "columns":[
      {
        "mData":"mobile",
        "mRender": function(data, type, row){

          return "<span><a href='tel:"+row.mobile+"'>"+row.mobile+"</a></span>";
          

        }
      },{
        "mData":"email",
        "mRender": function(data, type, row){

          return "<span><a href='mailto:"+row.email+"'>"+row.email+"</a></span>";
          

        }
      },{
        "mData":"current_age",
      },{
        "mData":"annual_income",
      },{
        "mData":"annual_increment",
      },{
        "mData":"savings",
      },{
        "mData":"loan",
      },{
        "mData":"required_cover",
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
@endsection

