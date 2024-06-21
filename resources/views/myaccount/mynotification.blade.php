@extends('layouts.user-app')
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


        <!-- Job posts start -->
        <section class="pb-130 bg_disable" style="margin-top: 150px;">
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
                                  <h2 class="content-header-title float-left mb-0">My Notification</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}/myrefercode">My Notification </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                      All                                </li>
                                    </ol> 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 

          <div class="content-body card" style="padding:25px;">
            <div class="col-md-12">
              <div  class="form-section ">

                
                  <!-- <div class="row content-body card" style="background: #dcdee0">
                    <div class="col-sm-12" style="padding:10px;">
                      <div class="row">
                        <div class="col-sm-2" style="margin-bottom:3px;">
                          <label><h6>ID</h6></label>
                        </div>
                        <div class="col-sm-3" style="margin-bottom:3px;">
                          <label><h6>New Message</h6></label>
                        </div>
                        <div class="col-sm-3" style="margin-bottom:3px;">
                          <label><h6>Loan ID</h6></label>
                        </div>
                        <div class="col-sm-3" style="margin-bottom:3px;">
                          <label><h6>Action</h6></label>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  @if($user_comments!='[]')
                  @foreach($user_comments as $usercmt)
                 
                  <div class="row">
                    <div class="content-body card" style="margin-bottom:3px;">
                    <div class="col-sm-12" style="padding:10px;">
                      <div class="row">
                        <div class="col-sm-9" style="margin-bottom:3px;">
                          <label><h6>New Message Received for Loan Id {{$usercmt->loan_id}}</h6></label>
                        </div>
                        <div class="col-sm-3" style="margin-bottom:3px;">
                         <a href="{{config('app.baseURL')}}/readnotification/{{$usercmt->loan_id}}"> <button type="button" class="form-control btn btn-primary"><span style="color: white">Read</span></button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
               
                  @endforeach
                  @else
                  <div class="row">
                    <div class="content-body card" style="margin-bottom:3px;">
                    <div class="col-sm-12" style="padding:10px;">
                      <div class="row">
                        <div class="col-sm-9" style="margin-bottom:3px;">
                          <label><h6>No New Message found</h6></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  @endif
               
              </div>
            </div>
          </div>
      </div>

                      
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
$( document ).ready(function() {
 if ("{{$user->marital_status}}"=="single") {
     
    $('#single').prop('checked',true);
  }
  
  if ("{{$user->marital_status}}"=="married") {
    $('#married').prop('checked',true);
  }
});


</script>

    @endsection