@php
$user=Auth::user();
@endphp

<div class="col-lg-3  pr-lg-55">
                        <div class="left-sidebar-widget">
                            <div class="single-sidebar-widget mt-25 widget-border">
                                <div class="catagory-list-widget">
                                    <div class="widget-title">
                                        
                                        <h5>My Accounts</h5>
                                    </div>
                                    <div class="widget-content ">

                                        <ul class="catagory-list py-3">

                                          <li class="catagory-item" style="padding-left: 20px;"><h5>Redeem</h5>
                                            
                                                    
                                                    <p><span class="text" style="font-size: 18px;font-weight: 600;">Wallet</span>: ₹ {{$user->wallet}}</p><br>
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
                                                   
                                                    <span class="text">Personal Details</span>
                                                </a>
                                            </li>
                                            
                                            <li class="catagory-item ">
                                                <a href="{{config('app.baseURL')}}/myloandetails/{{$user->id}}" class="catagory-link">
                                                   
                                                    <span class="text">Document Pending</span>
                                                    <span class="number">
                                                        @if($doc_pending!="")
                                                       ( {{$doc_pending}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myloaninprocess/{{$user->id}}" class="catagory-link">
                                                    <span class="text">Loan In Process</span>
                                                    <span class="number">
                                                       @if($inprocess!="")
                                                       ( {{$inprocess}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myloanapproved/{{$user->id}}" class="catagory-link">
                                                    <span class="text">Approved Loan</span>
                                                    <span class="number">
                                                       @if($approved!="")
                                                       ( {{$approved}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myloanreject/{{$user->id}}" class="catagory-link">
                                                    <span class="text">Rejected Loan</span>
                                                    <span class="number">
                                                         @if($rejeted!="")
                                                       ( {{$rejeted}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>
                                           
                                            <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myreferearn/{{$user->id}}" class="catagory-link">
                                                    <span class="text">Referred Loans</span>
                                                    <span class="number">
                                                         @if($referearn!="")
                                                       ( {{$referearn}} )
                                                       @else
                                                       (0)
                                                       @endif
                                                    </span>
                                                </a>
                                            </li>

                                             <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/bank-details" class="catagory-link">
                                                    <span class="text">My Bank Details</span>
                                                  
                                                </a>
                                            </li>

                                             <li class="catagory-item">
                                                <a href="{{config('app.baseURL')}}/myrefercode" class="catagory-link">
                                                    <span class="text">Refer Code</span>
                                                  
                                                </a>
                                            </li>
                                            
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>