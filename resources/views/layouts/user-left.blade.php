@php
$user=Auth::user();
@endphp
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
                                      
                                       
                                        <h5 style="display: inline-flex;font-size: 22px;"> <img src="{{asset('images\lock.png')}}" alt="icon" class="icons" style="width: 25px;"> &nbsp;My Accounts</h5>
                                    @php
                                    $user=Auth::user();
                                    @endphp
                                    @if($user!="")
                                   <p style="margin-left:15%;">Welcome <b>{{$user->name}}</b></p> 
                                    @endif
                                    </div>
                                    <div class="widget-content ">

                                        <ul class="catagory-list py-3">
                                        
                                          
                                          <li class="catagory-item" style="padding-left: 20px;"><h5>Referral</h5>

                                                    <p><span class="text" style="font-size: 18px;font-weight: 600;">Earnings</span>: ₹ {{$user->wallet}}</p><br>
                                                     @if($user->wallet>=10000)
                                                     <form action="{{config('app.baseURL')}}/redeem" method="post">
                                                      @csrf
                                                   <center>
                                                     <button type="submit" class="btn btn-primary" style="background-color: #0050b2;padding: 5px; border-radius: 5px;color: #fff;">Redeem Now</button>
                                                   </center>
                                                 </form>
                                                   @endif
 
                                            </li>
                                            <hr>
                                            <li class="catagory-item ">
                                                <a href="{{config('app.baseURL')}}/myprofile" class="catagory-link ">
                                                  <img src="{{asset('images\resume.png')}}" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Personal Details</span>
                                                </a>
                                            </li>
                                             <li class="catagory-item ">
                                                <a href="{{config('app.baseURL')}}/professional-detail" class="catagory-link ">
                                                  <img src="{{asset('images\resume.png')}}" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Professional Details</span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/mynotifications" class="catagory-link">
                                                  <img src="{{asset('images\processing.png')}}" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Notifications</span>
                                                    @if($data['notification_count']==0)
                                                    <span class="number">
                                                       ({{$data['notification_count']}})
                                                 
                                                    </span>
                                                    @else
                                                    <span class="number dot" style="text-align: center;color: white;">
                                                       ({{$data['notification_count']}})
                                                 
                                                    </span>
                                                    @endif
                                                    
                                                </a>
                                            </li>
                                            
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myloaninprocess/{{$user->id}}" class="catagory-link">
                                                  <img src="{{asset('images\processing.png')}}" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Loan Application</span>
                                                    
                                                </a>
                                            </li>
                                            
                                            <!--<li class="catagory-item ">-->
                                            <!--    <a href="{{config('app.baseURL')}}/myloandetails/{{$user->id}}" class="catagory-link">-->
                                            <!--      <img src="{{asset('images\document.png')}}" alt="icon" class="icons" style="width: 30px; height: 30px;">-->
                                            <!--        <span class="text">Document Pending</span>-->
                                            <!--        <span class="number">-->
                                            <!--            @if($doc_pending!="")-->
                                            <!--           ( {{$doc_pending}} )-->
                                            <!--           @else-->
                                            <!--           (0)-->
                                            <!--           @endif-->
                                            <!--        </span>-->
                                            <!--    </a>-->
                                            <!--</li>-->

                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myloanapproved/{{$user->id}}" class="catagory-link">
                                                  <img src="{{asset('images\give-money.png')}}" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Approved Loan</span>
                                                    <span class="number">
                                                       @if($approved!="")
                                                       ({{$approved}})
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myloanreject/{{$user->id}}" class="catagory-link">
                                                  <img src="{{asset('images\loan.png')}}" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Rejected Loan</span>
                                                    <span class="number">
                                                         @if($rejeted!="")
                                                       ({{$rejeted}})
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                           
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myreferearn/{{$user->id}}" class="catagory-link">
                                                  <img src="{{asset('images\network.png')}}" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">Referrals</span>
                                                    <span class="number">
                                                         @if($referearn!="")
                                                       ({{$referearn}})
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>

                                            

                                            <!-- <li class="catagory-item">-->
                                            <!--    <a href="{{config('app.baseURL')}}/myrefercode" class="catagory-link">-->
                                            <!--      <img src="{{asset('images\reference.png')}}" alt="icon" class="icons" style="width: 30px;">-->
                                            <!--        <span class="text">Refer Code</span>-->
                                                  
                                            <!--    </a>-->
                                            <!--</li>-->
                                             <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/bank-details" class="catagory-link">
                                                  <img src="{{asset('images\text-file.png')}}" alt="icon" class="icons" style="width: 30px;">
                                                    <span class="text">My Bank Details</span>
                                                  
                                                </a>
                                            </li>
                                             <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/change-password" class="catagory-link">
                                                  <img src="{{asset('images\lock.png')}}" alt="icon" class="icons" style="width: 25px;">
                                                    <span class="text">Change Password</span>
                                                  
                                                </a>
                                            </li>
                                            
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>