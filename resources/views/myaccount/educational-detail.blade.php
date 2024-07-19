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
.hidden{
    display:none;
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
                                    <li><a href="{{config('app.baseURL')}}">home</a></li>
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
        <!--                    <a href="{{config('app.baseURL')}}/apply-now" class="theme-btn wow fadeInLeft" target="_blank">Apply Now</a>-->
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
                         @include('layouts.user-left')

                    <!-- Right bar -->
                    <div class="col-lg-9 mt-4">
                        
                        
                        <div class="content-wrapper">
                          <div class="content-header row">
                            <div class="content-header-left col-md-9 col-12 mb-2">
                              <div class="row breadcrumbs-top">
                                <div class="col-12">
                                  <h2 class="content-header-title float-left mb-0">Educational Detail</h2>
                                  <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">

                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}"> Home </a>
                                      </li>
                                      <li class="breadcrumb-item">
                                        <a href="{{config('app.baseURL')}}/"> Educational Detail </a>
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
                                
                             
                                
                                   <div class="col-md-12">
                                  
      <div  class="form-section">

        <form action="educational-detail" method="post">
            @csrf
         <div class="row">
             
               
             
             <div class="col-sm-12" style="padding:10px;">
                 
                 <div class="row">
                          
          <div class="col-sm-6" style="margin-bottom:20px;">
              <label>Highest Qualification*</label>
           <div class="form-group">
             <input type="text" name="qualification" required="" class="form-control" value="{{$user->highest_qualification}}" id="copy_link" placeholder="eg. BCA/MBA" style="width: 100%;">
           </div>
         </div><br>
            <div class="col-sm-6" style="margin-bottom:20px;">
              
              <label>Institute / College Name*</label>
           <div class="form-group">
             <input type="text" name="college_name" required="" class="form-control" value="{{$user->college_name}}" id="copy_link" placeholder="College Name" style="width: 100%;">
           </div>
         </div><br>
        
         
          <div class="col-sm-6" style="margin-bottom:20px;">
              <label>Passing Year*</label>
           <div class="form-group">
             <input type="text" name="passing_year" required="" class="form-control" value="{{$user->passing_year}}" id="copy_link" placeholder="Year of Passing" style="width: 100%;">
           </div>
         </div><br>
         
          <div class="col-sm-6" style="margin-bottom:20px;">
              <label>Location*</label>
           <div class="form-group">
              <input type="text" name="college_address" required="" class="form-control" value="{{$user->college_address}}" id="copy_link" placeholder=" Address" style="width: 100%;">
           </div>
         </div>  
         </div>
         
         
         
         <br>
         
         <div class="col-sm-4"></div>
         <div class="col-sm-12" style="margin-top:10px;">
          <button type="submit"  data-wow-delay="0.5s" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; height: 40px; line-height: 40px; margin-left: 0px !important; font-size: 16px !important;" id="copyText" class="site-button">Update</button>
          
   
        </div>
        
        </div>
        </div>

      </div>
    </form>
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
    
      
      $( ".profession_type" ).change(function() {
  var value=$(this).val();
    // alert(value);
  if(value=="salaried"){
   
      $('.business_date').addClass('hidden');
      
  }else{
         
         
         $('.business_date').removeClass('hidden');
  }
});


</script>

 <script type = "text/javascript">
$( document ).ready(function() {
    
 if ("{{$user->profession_type}}"=="self") {
     
    $('#selfTab').prop('checked',true);
    $('.business_date').removeClass('hidden');
  }
  
  if ("{{$user->profession_type}}"=="salaried") {
     
    $('#salariedTab').prop('checked',true);
    $('.business_date').addClass('hidden');
  }
});


</script>

    @endsection