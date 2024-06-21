<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;
use DataTables;
use App\MutualFundList;
use Auth;
use App\GetStarted;
use App\ReferFriend;
use App\TermInsurance;
use App\HealthInsurance;
use App\Loan;
use App\MutualFund;
use App\ApplyNow;
use App\User;
use App\CommissionMaster;
use App\Branch;
use App\WalletTransaction;
use App\Redeem;
use Hash;
use App\LoanDocuments;
use App\Contact;
use App\ReferalTools;
use App\PropertyLead;
use App\Comment;
use App\Status;

class AdminController extends Controller
{
    public function getALLPropertyLead(){
		return view('admin.property-lead');
	}

	public function getALLPropertyLeadData(Request $request){
		$lead =PropertyLead::with('properties')->orderBy('property_lead_id','desc')->get();
		return DataTables::of($lead)->make(true);
	}
    public function getALLReferalTool(){
		return view('admin.referal-tool');
	}

	public function getALLReferalToolData(Request $request){
		$referal_tool =ReferalTools::with('refer_by')->orderBy('referal_tool_id','desc');
		return DataTables::of($referal_tool)->make(true);
	}
	public function getDashboard(Request $request){
		$user=Auth::user();
     //    if ($user!="") {
     //        $role=$user->role_id;
		if ($user->role_id!=1 && $user->role_id!=4) {
            	// $users=User::where('email',$user->email)->first();
            	//$loan_details=Loan::where('user_id', $user->id)->first();
			return redirect('myprofile');
                // return view('myaccount.my_account_details')->with('loan_details', $loan_details);
		}
		else{
		    $pie=$request->pie;
		    $bar=$request->bar;
		    
		  //  $seven_days=date('Y-m-d', strtotime('- 7 days'));
		    
		  //  $thirty_days=date('Y-m-d', strtotime('- 30 days'));
		    
		    
		    
			$refer_earn_count =ReferFriend::count();

			$get_started_count =GetStarted::count();
			$apply_now_count =ApplyNow::count();
			$term_insurance_count =TermInsurance::count();
			$health_insurance_count =HealthInsurance::count();
			$loan_count =Loan::count();
			$mutual_fund_count =MutualFund::count();

			$loan_applied_for=Loan::whereIn('status',[2,3])->sum('loan_amount');
			$total_loan_applied_for=Loan::whereNotIn('status',[-1,4])->sum('loan_amount');
			$loan_approved=Loan::where('status',2)->sum('loan_amount');
			$loan_rejected=Loan::where('status',3)->sum('loan_amount');
			
			$loan_applied_for_count=Loan::whereIn('status',[2,3])->count();
			$total_loan_applied_for_count=Loan::whereNotIn('status',[-1,4])->count();
			$loan_approved_count=Loan::where('status',2)->count();
			$loan_rejected_count=Loan::where('status',3)->count();
			
			
			
			$loan_approved_percentage=($loan_approved_count/$total_loan_applied_for_count)*100;
			$loan_rejected_percentage=($loan_rejected_count/$total_loan_applied_for_count)*100;
			
			$loan_approved_percentage=round($loan_approved_percentage);
			$loan_rejected_percentage=round($loan_rejected_percentage);
			
			
			$amount_loan_approved_percentage=($loan_approved/$total_loan_applied_for)*100;
			$amount_loan_rejected_percentage=($loan_rejected/$total_loan_applied_for)*100;
			
			$amount_loan_approved_percentage=round($amount_loan_approved_percentage);
			$amount_loan_rejected_percentage=round($amount_loan_rejected_percentage);
			
			$user_count=User::where('role_id',2)->count();
			
			

			$lead_count=$get_started_count + $apply_now_count + $term_insurance_count + $health_insurance_count + $loan_count + $mutual_fund_count;

			return view('admin.dashboard')->with('amount_loan_approved_percentage',$amount_loan_approved_percentage)->with('amount_loan_rejected_percentage',$amount_loan_rejected_percentage)->with('user_count',$user_count)->with('lead_count',$lead_count)->with('refer_earn_count',$refer_earn_count)->with('loan_applied_for',$loan_applied_for)->with('total_loan_applied_for',$total_loan_applied_for)->with('loan_approved',$loan_approved)->with('loan_rejected',$loan_rejected)->with('loan_approved_percentage',$loan_approved_percentage)->with('loan_rejected_percentage',$loan_rejected_percentage)->with('loan_applied_for_count',$loan_applied_for_count)->with('total_loan_applied_for_count',$total_loan_applied_for_count)->with('loan_approved_count',$loan_approved_count)->with('loan_rejected_count',$loan_rejected_count);
		}
	}
	// public function getAccountInfo()
	// {
	// 	return view('myaccount.my_account_details');
	// }
	
	
	
	public function postAssignAssociate(Request $request){
	    $loan_id=$request->loan_id;
	    $assigned_to=$request->assigned_to;
	    
	    $loan=Loan::where('loan_id',$loan_id)->first();
	    $loan->assigned_to=$assigned_to;
	    $loan->save();
	    
	    	$notification = array(
			'message' => 'Associate Assigned Successfully!', 
			'alert-type' => 'success'
		);
		
		return redirect('admin/loanDetails/'.$loan_id)->with($notification);
	}

	public function getAddMutualFund(){
		
		return view('admin.mutual-fund.add');
	}


	public function postAddMutualFund (Request $request)
	{	


		
		$mutual_fund_type=$request->mutual_fund_type;
		
		$mutual_fund =new MutualFundList();
		$mutual_fund->mutual_fund_name=$request->mutual_fund_name;
		
		$mutual_fund->rating=$request->rating;
		$mutual_fund->aum_cr=$request->aum_cr;
		$mutual_fund->one_year=$request->one_year;
		$mutual_fund->three_year=$request->three_year;
		$mutual_fund->five_year=$request->five_year;

		if(Input::hasFile('logo')){
			$logo = $request->logo;
			$path = $logo->store('mutual_fund');
			$mutual_fund->logo=$path;
		}
		$mutual_fund->mutual_fund_type=$mutual_fund_type;
		$mutual_fund->save();

		$notification = array(
			'message' => 'Mutual Fund Data Added Successfully!', 
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
	}
	public function getALLGetStarted(){
		return view('admin.get-started');
	}

	public function getAllGetStartedData(Request $request){
		$get_started =GetStarted::orderBy('get_started_id','desc');
		return DataTables::of($get_started)->make(true);
	}

	public function getALLApplyNow(){
		return view('admin.apply-now');
	}

	public function getAllApplyNowData(Request $request){
		$apply_now =ApplyNow::with('mutual_fund_list')->orderBy('apply_now_id','desc');
		return DataTables::of($apply_now)->make(true);
	}

	public function getALLTermInsurance(){
		return view('admin.term-insurance');
	}

	public function getAllTermInsuranceData(Request $request){
		$term_insurance =TermInsurance::orderBy('term_insurance_id','desc');
		return DataTables::of($term_insurance)->make(true);
	}
	public function getALLHealthInsurance(){
		return view('admin.health-insurance');
	}

	public function getALLHealthInsuranceData(Request $request){
		$health_insurance =HealthInsurance::orderBy('health_insurance_id','desc');
		return DataTables::of($health_insurance)->make(true);
	}
	//Rejected Loan--------------------------------
	public function getRejectedLoanAll(){
		return view('admin.loan');
	}

	public function getRejectedLoanAllData(Request $request){
	    
			$user=Auth::user();
	    $role_id=$user->role_id;
	    
	    if($role_id==1){
				$loan =Loan::where('status',3)->with('associate')->orderBy('loan_id','desc')->get();
	    }else{
	        $loan=Loan::where('status',3)->with('associate')->where('assigned_to',$user->id)->get();
	    }
		return DataTables::of($loan)->make(true);
	}
	//Documents Pending------------------------------
	public function getDocPendinglLoanAll(Request $request)
	{
		return view('admin.docpendingloan');
	}
	public function getDocPendingLoanAllData(Request $request)
	{
	    $user=Auth::user();
	    $role_id=$user->role_id;
	    
	    if($role_id==1){
		$docpending=Loan::where('status', 1)->with('associate')->with('associate')->get();
	    }else{
	        $docpending=Loan::where('status', 1)->with('associate')->with('associate')->where('assigned_to',$user->id)->get();
	    }

		return DataTables::of($docpending)->make(true);
	}
	//Pending Loan------------------------------
	public function getPendinglLoanAll(Request $request)
	{
		$status=$request->status;

		return view('admin.pendingloan')->with('status',$status);
	}
	public function getPendingLoanAllData(Request $request)
	{
		
		$user=Auth::user();
	    $role_id=$user->role_id;
	    
	    $status=$request->status;

	    if($role_id==1){
			
			if($status!=""){
	    	$pendingloan=Loan::where('status', $status)->with('associate')->with('substatus')->get();
	  
	    	}	
	    	else{
	    		$pendingloan=Loan::where('status', 0)->orWhere('status', 1)->with('associate')->with('substatus')->get();
	    	}	
	    	//return DataTables::of($pendingloan)->make(true);	
	    }
	  	else{
	        
	        if($status!=""){
	    	$pendingloan=Loan::where('status', $status)->with('associate')->with('substatus')->get();
	    	}
	    	else{
	    		$pendingloan=Loan::where('status', 0)->orWhere('status', 1)->with('associate')->where('assigned_to',$user->id)->with('substatus')->get();
	    	}
	    	//return DataTables::of($pendingloan)->make(true);
	    }
		return DataTables::of($pendingloan)->make(true);
	}
	//Approved Loan-----------------------------
	public function getApprovedLoanAll(Request $request)
	{
		return view('admin.approvedloan');
	}
	public function getApprovedLoanAllData(Request $request)
	{
		
		
		$user=Auth::user();
	    $role_id=$user->role_id;
	    
	    if($role_id==1){
			$approvedloan=Loan::where('status', 2)->with('associate')->get();
	    }else{
	        $approvedloan=Loan::where('status', 2)->with('associate')->where('assigned_to',$user->id)->get();
	    }

		return DataTables::of($approvedloan)->make(true);
	}

	//Details Of loan
	public function getLoanDetails(Request $request)
	{
		$loan_id=$request->id;
		$loandetails=Loan::where('loan_id', $loan_id)->with('loandoc')->with('associate')->with('comments')->first();
		$associates=User::where('role_id',4)->get();
		$comment_name=Comment::where('loan_id', $loan_id)->with('username')->groupBy('commentname')->orderBy('comment_id','ASC')->get();
		$loanstatus=Status::get();
		return view('admin.loan_details')->with('loandetails',$loandetails)->with('loan_id',$loan_id)->with('associates',$associates)->with('comment_name',$comment_name)->with('loanstatus',$loanstatus);
		//return DataTables::of($loandetails)->make(true);

	}
    
    //Delete Comment
	public function postDeleteComment(Request $request)
	{
		$comment_id=$request->id;
	
		$cmt=Comment::where('comment_id',$comment_id)->delete();

		$notification = array(
				'message' => 'Comments Deleted Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);

	}
	public function postDeleteDocument(Request $request)
	{
		$loan_doc_id=$request->id;
		$doc=LoanDocuments::where('loan_doc_id',$loan_doc_id)->delete();
		$notification = array(
				'message' => 'Loan Document Deleted Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);
	}
	public function postDeleteUserDoc(Request $request)
	{
		$loan_doc_id=$request->id;
		$doc=LoanDocuments::where('loan_doc_id',$loan_doc_id)->delete();
		$notification = array(
				'message' => 'Loan Document Deleted Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);
	}
	//Status Update
	public function postStatusLoanInprocess(Request $request)
	{
		$loan_id=$request->id;
		$status_id=$request->status_id;
		$note=$request->note;
		$loandetail=Loan::find($loan_id);
		$loandetail->status=0;
		$loandetail->status_id=$status_id;
		$loandetail->note=$note;
		$loandetail->save();
		$loandetails=Loan::where('loan_id', $loan_id)->with('loandoc')->with('comments')->first();
		$notification = array(
				'message' => 'Loan Status Changes Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);
		// return view('admin.loan_details')->with('loandetails',$loandetails);
		
	}
	
	//send Comments
	public function postSendMessage(Request $request)
	{
		$user=Auth::user();
	    $message_user_id=$user->id;

	    $loan_id=$request->loan_id;
		
		$commentname=$request->commentname;
		$attachment=$request->attachment;

		if($attachment!='')
		{
			$img_count = count($attachment);
	        for ($i=0; $i < $img_count; $i++) 
	        { 

	            $sendcomment=new Comment();
	            $sendcomment->loan_id=$loan_id;	
				$sendcomment->message_user_id=$message_user_id;
	            $sendcomment->commentname=$commentname;
				$sendcomment->is_admin_read=1;
	            if(Input::hasFile('attachment')){
	                $eventImage = $request->attachment[$i];
	                $path = $eventImage->store('attachment');
	                $sendcomment->attachment=$path;
	            }
	            $sendcomment->save();
	        }
    	}
    	else{
    		$sendcomment=new Comment();
            $sendcomment->commentname=$commentname;
			$sendcomment->attachment=$attachment;
			$sendcomment->loan_id=$loan_id;	
			$sendcomment->message_user_id=$message_user_id;
			$sendcomment->is_admin_read=1;
            $sendcomment->save();

    	}
    	$notification = array(
				'message' => 'Comments Added Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);
	}
	public function postSendComment(Request $request)
	{
		$user=Auth::user();
	    $message_user_id=$user->id;

	    $loan_id=$request->loan_id;
		
		$commentname=$request->commentname;
		$attachment=$request->attachment;

		if($attachment!='')
		{
			$img_count = count($attachment);
	        for ($i=0; $i < $img_count; $i++) 
	        { 

	            $sendcomment=new Comment();
	            $sendcomment->loan_id=$loan_id;	
				$sendcomment->message_user_id=$message_user_id;
	            $sendcomment->commentname=$commentname;
				$sendcomment->is_user_read=1;
	            if(Input::hasFile('attachment')){
	                $eventImage = $request->attachment[$i];
	                $path = $eventImage->store('attachment');
	                $sendcomment->attachment=$path;
	            }
	            $sendcomment->save();
	        }
    	}
    	else{
    		$sendcomment=new Comment();
            $sendcomment->commentname=$commentname;
			$sendcomment->attachment=$attachment;
			$sendcomment->loan_id=$loan_id;	
			$sendcomment->message_user_id=$message_user_id;
			$sendcomment->is_user_read=1;
            $sendcomment->save();

    	}
    	$notification = array(
				'message' => 'Comments Added Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);
	}
	public function postStatusLoanDocPending(Request $request)
	{
		$loan_id=$request->id;
		$note=$request->note;

		$loandetail=Loan::where('loan_id',$loan_id)->first();
		$loandetail->status=1;
		$loandetail->note=$note;
		$loandetail->save();
		
		$email=$loandetail->email;
		$name=$loandetail->full_name;
	
		$data = array('name'=>$name,'email'=>$email,'note'=>$note);

		try{

			

		Mail::send('mail.userLoanPendingDocumentMail', $data, function($message) use ($email,$name){
			$message->to($email,$name)->subject('Pending Documents');
			$message->from('jfinservconsultant@gmail.com', 'JFinserv');
		});
		}catch (Exception $e) {
		
	}
		$loandetails=Loan::where('loan_id', $loan_id)->with('loandoc')->with('comments')->first();
		$notification = array(
				'message' => 'Loan Status Change Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);
		//return view('admin.loan_details')->with('loandetails',$loandetails);
	}
	public function postStatusLoanApproved(Request $request)
	{
		$loan_id=$request->id;
		$loandetail=Loan::find($loan_id);

		$loandetail->status=2;
		$loandetail->note="";
		$loandetail->save();
		$loandetails=Loan::where('loan_id', $loan_id)->with('loandoc')->with('comments')->first();
        //echo $loandetails;die;
		$old_branch=Branch::where('user_id',$loandetails->refered_by)->first();

		$user_id=$loandetails->user_id;
       
		if ($old_branch!="") {
			$level=$old_branch->level;
			$level_start_id=$old_branch->level_start_id;
			$new_level=$level+1;
			if ($new_level<10) {

				$branch=new Branch();
			
				$branch->user_id=$user_id;
				$branch->level=$new_level;
				$branch->referred_by=$loandetails->refered_by;
				$branch->level_start_id=$level_start_id;
				$branch->save();
			}
		}
		else{
            
            if($loandetails->refered_by!="")
            {
			$newbranch=new Branch();
			$newbranch->user_id=$loandetails->refered_by;
			$newbranch->level=1;
			$newbranch->referred_by=1;
			$newbranch->level_start_id=$loandetails->refered_by;

			$newbranch->save();

			$branch=new Branch();
			$branch->user_id=$user_id;
			$branch->level=2;
			$branch->referred_by=$loandetails->refered_by;
			$newbranch->level_start_id=$loandetails->refered_by;
			$branch->save();
            }

		}
		$notification = array(
				'message' => 'Loan Approved Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);
		//return view('admin.loan_details')->with('loandetails',$loandetails);
	}
	public function postStatusLoanRejected(Request $request)
	{
		$loan_id=$request->id;
		$loandetail=Loan::find($loan_id);
		$loandetail->status=3;
		$loandetail->save();
		$loandetails=Loan::where('loan_id', $loan_id)->with('loandoc')->first();
		$notification = array(
				'message' => 'Loan Rejected Successfully', 
				'alert-type' => 'success'
			);
		return redirect()->back()->with($notification);
		//return view('admin.loan_details')->with('loandetails',$loandetails);
	}
	

	public function getALLMutualFund(){
		return view('admin.mutual-fund');
	}

	public function getALLMutualFundData(Request $request){
		$mutual_fund =MutualFund::orderBy('mutual_fund_id','desc');
		return DataTables::of($mutual_fund)->make(true);
	}

	public function getALLReferEarn(){
		return view('admin.refer-earn');
	}

	public function getALLReferEarnData(Request $request){
		$refer_earn =ReferFriend::with('refer_by')->with('loan_user')->with('loan')->orderBy('refer_friend_id','desc');
		return DataTables::of($refer_earn)->make(true);
	}
    public function getALLPartner(Request $request)
	{
		return view('admin.partner');
	}
	public function getALLPartnerData(Request $request){
		$partners=User::where('role_id',3)->orderBy('id','desc')->get();
		return DataTables::of($partners)->make(true);
	}
	public function getALLUser(Request $request)
	{
		return view('admin.user');
	}
	public function getALLUserData(Request $request){
		$users=User::where('role_id',2)->orderBy('id','desc')->get();
		return DataTables::of($users)->make(true);
	}
	
	public function getAccountInfo(Request $request)
	{
		$user=Auth::user();
		$loan_details=Loan::where('user_id', $user->id)->first();
		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		
		return view('myaccount.myprofile')->with('loan_details',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('user',$user);
		
	}
	public function getEditMyprofile(Request $request)
	{
		$user=Auth::user();
		$loan_details=Loan::where('user_id', $user->id)->first();
		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		
		return view('myaccount.edit-my-profile')->with('loan_details',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('user',$user);
		
	}
	public function getReadAdminNotify(Request $request)
	{
		$loan_id=$request->id;
		$cmt=Comment::where('loan_id',$loan_id)->get();
		foreach($cmt as $cmts){
    		$cmts->is_admin_read=1;
			$cmts->save();
		}
		$loandetails=Loan::where('loan_id', $loan_id)->with('loandoc')->with('associate')->with('comments')->first();
		$comment_name=Comment::where('loan_id', $loan_id)->with('username')->groupBy('commentname')->orderBy('comment_id','ASC')->get();
		$associates=User::where('role_id',4)->get();
		//echo $associates;
		$loanstatus=Status::get();
		//echo $status;die;
		return view('admin.loan_details')->with('loandetails',$loandetails)->with('loan_id',$loan_id)->with('associates',$associates)->with('comment_name',$comment_name)->with('loanstatus',$loanstatus);
	}
	public function postReadUserNotification(Request $request)
	{
		$user=Auth::user();
		$loan_id=$request->id;
		$cmt=Comment::where('loan_id',$loan_id)->get();
		foreach($cmt as $cmts){
    		$cmts->is_user_read=1;
			$cmts->save();
		}

		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$loan_details=Loan::where('loan_id',$loan_id)->with('loandoc')->with('comments')->first();
		$loan_dully=LoanDocuments::get();
	
		$comment_name=Comment::where('loan_id',$loan_id)->with('username')->groupBy('commentname')->orderBy('comment_id','ASC')->get();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		return view('myaccount.account_loandetails')->with('loandetail',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('loan_dully',$loan_dully)->with('comment_name',$comment_name);
		
	
	}
	
		public function postAccountInfo(Request $request)
	{
		$user=Auth::user();
		$name=$request->name;
		$contact_number=$request->contact_number;
		$present_address=$request->present_address;
		$city=$request->city;
		$state=$request->state;
		$pincode=$request->pincode;
		$MaritalStatas=$request->MaritalStatas;
		$date_of_birth=$request->date_of_birth;
		$email=$request->email;
	
		
		
		
		$user->pincode=$pincode;
		$user->state=$state;
		$user->city=$city;
		$user->present_address=$present_address;
		$user->contact_number=$contact_number;
	    $user->name=$name;
	    $user->marital_status=$MaritalStatas;
	     $user->date_of_birth=$date_of_birth;
	      $user->email=$email;
	     
	     
		$user->save();
	
	
	    return redirect()->back();
	}
	
	public function getProfessionalDetail(Request $request)
	{
		$user=Auth::user();
		$loan_details=Loan::where('user_id', $user->id)->first();
		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		
		return view('myaccount.professional-detail')->with('loan_details',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('user',$user);
		
	}
	public function getNotificationDetail(Request $request)
	{
		$user=Auth::user();
		$loan_details=Loan::where('user_id', $user->id)->get();
		$loan_id=[];
		foreach ($loan_details as $loan_detail) {
			$loan_ids=$loan_detail->loan_id;
			array_push($loan_id, $loan_ids);
		}
		// print_r($loan_id);
		$user_comments=Comment::whereIn('loan_id',$loan_id)->where('is_user_read',0)->groupBy('loan_id')->get();
		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		return view('myaccount.mynotification')->with('user_comments',$user_comments)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('user',$user);
	}
	
	public function getAdminNotificationAll(Request $request)
	{
		$user=Auth::user();
		$loan_details=Loan::get();
		$loan_id=[];
		foreach ($loan_details as $loan_detail) {
			$loan_ids=$loan_detail->loan_id;
			array_push($loan_id, $loan_ids);
		}
		$user_comments=Comment::whereIn('loan_id',$loan_id)->where('is_admin_read',0)->groupBy('loan_id')->get();
		//echo $user_comments;die;
		return view('admin.notifications')->with('user_comments',$user_comments);
	}
	
		public function postProfessionalDetail(Request $request)
	{
		$user=Auth::user();
		$profession_type=$request->profession_type;
		$qualification=$request->qualification;
		$company_name=$request->company_name;
		$nature_of_work=$request->nature_of_work;
		$work_experience=$request->work_experience;
		$business_estabish_date=$request->business_estabish_date;
		$company_address=$request->company_address;
			$job_business_profile=$request->job_business_profile;
		
		
		$user->profession_type=$profession_type;
		$user->highest_qualification=$qualification;
		$user->company_name=$company_name;
		$user->nature_of_work=$nature_of_work;
		$user->work_exp=$work_experience;
	    $user->business_estabish_date=$business_estabish_date;
	    $user->company_address=$company_address;
	     $user->job_business_profile=$job_business_profile;
	    
		$user->save();
	
	
	    return redirect()->back();
	}
	
		public function getEditProfessionalDetail(Request $request)
	{
		$user=Auth::user();
		$loan_details=Loan::where('user_id', $user->id)->first();
		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		
		return view('myaccount.edit-professional-detail')->with('loan_details',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('user',$user);
		
	}
// 	public function postProfessionalDetail(Request $request)
// 	{
// 		$user=Auth::user();
// 		$loan_details=Loan::where('user_id', $user->id)->first();
// 		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
// 		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
// 		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
// 		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
// 		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		
// 		return view('myaccount.professional-detail')->with('loan_details',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('user',$user);
		
// 	}
	
	
	
	public function getMyLoanInfo(Request $request)
	{	
		$user=Auth::user();

		if ($user->role_id!=2 && $user->role_id!=3) {
			return redirect('/');
		}
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->first();
		
		$referearn=ReferFriend::where('referred_by',$user_id)->count();
		
		$doc_pending=Loan::where('user_id', $user_id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user_id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user_id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user_id)->where('status',3)->count();
		return view('myaccount.myloans')->with('user_id',$user_id)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('loan_details',$loan_details);
	}
	public function getAllMyLoanInfo(Request $request)
	{
		// $user=Auth::user();
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->where('status',1)->get();

		return DataTables::of($loan_details)->make(true);
	}
	public function getAccountLoanDetails(Request $request)
	{
		
// 		$user=Auth::user();
// 		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
// 		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
// 		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
// 		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
// 		$loan_id=$request->id;
// 		$loan_details=Loan::where('loan_id',$loan_id)->with('loandoc')->first();
// 		$referearn=ReferFriend::where('referred_by',$user->id)->count();
// 		return view('myaccount.account_loandetails')->with('loandetail',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn);
	$user=Auth::user();
		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$loan_id=$request->id;
		$loan_details=Loan::where('loan_id',$loan_id)->with('loandoc')->first();
		$loan_dully=LoanDocuments::get();
		// echo $loan_details;die;
		$comment_name=Comment::where('loan_id',$loan_id)->with('username')->groupBy('commentname')->orderBy('comment_id','ASC')->get();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		return view('myaccount.account_loandetails')->with('loandetail',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('loan_dully',$loan_dully)->with('comment_name',$comment_name);
	    
	}

	public function getMyLoanApprove(Request $request)
	{	
		$user=Auth::user();

		if ($user->role_id!=2 && $user->role_id!=3) {
			return redirect('/');
		}
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->first();
		
		$referearn=ReferFriend::where('referred_by',$user_id)->count();
		$doc_pending=Loan::where('user_id', $user_id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user_id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user_id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user_id)->where('status',3)->count();
		return view('myaccount.myapproved_loan')->with('user_id',$user_id)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('loan_details',$loan_details);
	}
	public function getAllMyLoanApprove(Request $request)
	{
		// $user=Auth::user();
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->where('status',2)->get();

		return DataTables::of($loan_details)->make(true);
	}
	public function getMyLoanInprocess(Request $request)
	{	
		$user=Auth::user();

		if ($user->role_id!=2 && $user->role_id!=3) {
			return redirect('/');
		}
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->first();
		
		$referearn=ReferFriend::where('referred_by',$user_id)->count();
		$doc_pending=Loan::where('user_id', $user_id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user_id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user_id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user_id)->where('status',3)->count();
		return view('myaccount.myinprocess_loan')->with('user_id',$user_id)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('loan_details',$loan_details);
	}
	public function getAllMyLoanDraft(Request $request)
	{
		// $user=Auth::user();
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->where('status',-1)->get();

		return DataTables::of($loan_details)->make(true);
	}
	
		public function getAllMyLoanInprocess(Request $request)
	{
		// $user=Auth::user();
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->with('substatus')->where('status',0)->get();

		return DataTables::of($loan_details)->make(true);
	}

	public function getMyLoanReject(Request $request)
	{	
		$user=Auth::user();

		if ($user->role_id!=2 && $user->role_id!=3) {
			return redirect('/');
		}
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->first();
		
		$referearn=ReferFriend::where('referred_by',$user_id)->count();
		$doc_pending=Loan::where('user_id', $user_id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user_id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user_id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user_id)->where('status',3)->count();
		return view('myaccount.myrejected_loan')->with('user_id',$user_id)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('loan_details',$loan_details);
	}
	public function getAllMyLoanReject(Request $request)
	{
		// $user=Auth::user();
		$user_id=$request->id;
		$loan_details=Loan::where('user_id', $user_id)->where('status',3)->get();

		return DataTables::of($loan_details)->make(true);
	}

	public function getMyReferearn(Request $request)
	{	
		$user=Auth::user();

		if ($user->role_id!=2 && $user->role_id!=3) {
			return redirect('/');
		}
		$user_id=$user->id;
		$loan_details=Loan::where('user_id', $user->id)->first();


		

		$referearn=ReferFriend::where('referred_by',$user_id)->count();
		
		$doc_pending=Loan::where('user_id', $user_id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user_id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user_id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user_id)->where('status',3)->count();
		return view('myaccount.myrefer_earn')->with('user',$user)->with('user_id',$user_id)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('loan_details',$loan_details);
	}
	public function getAllMyReferearn(Request $request)
	{
		$user=Auth::user();
		// $mobile=$request->phone;
			$user_id=$user->id;
		$refer_earn =ReferFriend::where('referred_by',$user_id)->with('refer_by')->with('loan_user')->with('loan')->orderBy('refer_friend_id','desc');
		return DataTables::of($refer_earn)->make(true);
	}

	public function myrefercode(Request $request)
	{

		$user=Auth::user();

		if ($user->role_id!=2 && $user->role_id!=3) {
			return redirect('/');
		}
		$user_id=$user->id;
		$loan_details=Loan::where('user_id', $user->id)->first();
		
		$referearn=ReferFriend::where('referred_by',$user_id)->count();
		$doc_pending=Loan::where('user_id', $user_id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user_id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user_id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user_id)->where('status',3)->count();

		return view('myaccount.share')->with('user',$user)->with('user_id',$user_id)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('loan_details',$loan_details);


	}

	public function getApproveWallet(Request $request)
	{

       $user=Auth::user();
		if ($user->role_id!=1) {
			return redirect('/');
		}

		$referred_id=$request->id;

		$refer_friend=ReferFriend::find($referred_id);

		$referred_by=$refer_friend->referred_by;

		$branch=Branch::where('referred_by',$referred_by)->first();
		if($branch!=""){
		$branch_count=Branch::where('level','<=',$branch->level)->where('level_start_id',$branch->level_start_id)->count();
       
		$branch_users=Branch::where('level','<=',$branch->level)->where('level_start_id',$branch->level_start_id)->orderBy('level','desc')->get();
		$loan=Loan::find($refer_friend->loan_id);

		$loan_amount=$loan->loan_amount;

		$refer_amount=0.04*$loan_amount;

         $i=0;
		foreach ($branch_users as $branch_user) {
			$i++;

	     $CommissionMaster=CommissionMaster::where('commission_id',$i)->first();

	     $commission_percentage=$CommissionMaster->commission_percent/100;

	     $amount=$refer_amount*$commission_percentage;

	     $wallet_transaction=new WalletTransaction();

	     $new_user=User::find($branch_user->referred_by);

	     $old_walltet=$new_user->wallet;
	     $new_wallet=$old_walltet+$amount;
	     $new_user->wallet=$new_wallet;
	     $new_user->save();

         $wallet_transaction->amount=$amount;
         $wallet_transaction->user_id=$branch_user->referred_by;
         $wallet_transaction->loan_id=$refer_friend->loan_id;
         $wallet_transaction->save();



			
		}

		$refer_friend->is_claim=3;
		$refer_friend->save();
		}

			return redirect('admin/refer_earn/all');

	}


	
	public function getAllWallet(){
		return view('admin.wallet');
	}

	public function getAllWalletData(Request $request){
		$refer_earn =WalletTransaction::with('loan')->with('user')->orderBy('wallet_transaction_id','desc');
		return DataTables::of($refer_earn)->make(true);
	}
	public function getAllRedeem(){
		return view('admin.walletredeem');
	}
	public function getAllRedeemData(Request $request){
		$redeem =Redeem::with('user')->orderBy('redeem_id','desc');
		return DataTables::of($redeem)->make(true);
	}
	public function getAllPartnerLoan(Request $request)
	{
		 $user_id=$request->id;
		 // $loan=Loan::where('channel_partner_id',$user_id)->get();
		 // echo $loan;die;
		 return view('admin.partnerloans')->with('user_id',$user_id);
		 

	}
	public function getAllPartnerLoanData(Request $request)
	{
		$user_id=$request->id;
		$loan=Loan::where('channel_partner_id',$user_id)->with('associate')->get();

		return DataTables::of($loan)->make(true);

	}

	public function getAllBranch(Request $request)
	{

        $user_id=$request->id;
        // $branchdetails=Branch::where('level_start_id',$user_id)->where('user_id','!=',$user_id)->orWhere('referred_by',$user_id)->with('userlevels')->get();
        // echo $branchdetails;die;

        return view('admin.userbranch')->with('user_id',$user_id);
	}
	public function getAllBranchData(Request $request)
	{
		$user_id=$request->id;

        $branchdetails=Branch::where('level_start_id',$user_id)->where('user_id','!=',$user_id)->orWhere('referred_by',$user_id)->with('userlevels')->get();
        return DataTables::of($branchdetails)->make(true);
	}
	

	public function getSanctionCalculator(){
		return view('admin.sanctioncalculator');
	}
	
	public function getAllContact(Request $request){
		$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1 && $role!=4) {
				return redirect('/');
			}
		}
		return view('admin.contact');
	}

	public function getAllContactData(Request $request){
		
		$contact=Contact::all();
		
		return DataTables::of($contact)->make(true);
	}


	public function getAddAdmin(){
		$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/');
			}
		}
		return view('admin.admin.add');
	}
	public function postAddAdmin(Request $request)
	{	


		$name=$request->name;
		$email=$request->email;

		$contact_number=$request->contact_number;

		$password=Hash::make($request->password);

		$user=User::where('contact_number',$contact_number)->orWhere('email',$email)->first();

		if ($user!="") {

			$notification = array(
				'message' => 'Admin Exist, Please Login', 
				'alert-type' => 'success'
			);
			return redirect('admin/admin/all')->with($notification);
		}else{

			$user=new User();
			$user->name=$name;
			$user->email=$email;
			$user->contact_number=$contact_number;
			
			$user->designation=$request->designation;
			$user->doj=$request->doj;
			$user->job_location=$request->job_location;
				$user->is_verify=1;
			
			
				$user->present_address=$request->present_address;
			$user->company_address=$request->c_address;
			$user->g_address=$request->g_address;
			
			
				$user->guardian_contact_number=$request->guardian_contact_number;

			
			
			$user->password=$password;
			$user->role_id=4;
			$user->save();

			$notification = array(
				'message' => 'Admin Successfully', 
				'alert-type' => 'success'
			);

			return redirect('admin/admin/all')->with($notification);
		}
	}

		public function getAllAdmin(){
			$user=Auth::user();
			if ($user!="") {
				$role=$user->role_id;
				if ($role!=1) {
					return redirect('/');
				}
			}
			return view('admin.admin.all');
		}

		public function getAllAdminData(Request $request){
			$admin=User::where('role_id',4)->get();
			return DataTables::of($admin)->make(true);
		}

		public function getEditAdmin(Request $request){
			$user=Auth::user();
			if ($user!="") {
				$role=$user->role_id;
				if ($role!=1) {
					return redirect('/');
				}
			}
			$admin_id=$request->id;
			$admin=User::find($admin_id);

			return view('admin.admin.edit')->with('admin',$admin);
		}

		public function postEditAdmin(Request $request,$id){



			$admin_id=$id;

			$name=$request->name;
			$email=$request->email;

			$contact_number=$request->contact_number;

			$password=Hash::make($request->password);

			$user=User::find($admin_id);
			$user->name=$name;
			$user->email=$email;
			$user->contact_number=$contact_number;
				$user->is_verify=1;
			
			if ($password!="") {
				$user->password=$password;
			}
			$user->role_id=4;
				$user->designation=$request->designation;
			$user->doj=$request->doj;
			$user->job_location=$request->job_location;
			
			
				$user->present_address=$request->present_address;
			$user->company_address=$request->c_address;
			$user->g_address=$request->g_address;
			
			
				$user->guardian_contact_number=$request->guardian_contact_number;

			$user->save();

			$notification = array(
				'message' => 'Admin Updated Successfully!', 
				'alert-type' => 'success'
			);

			return redirect('admin/admin/all')->with($notification);
		}

// 		public function getDeleteAdmin(Request $request){
// 			$admin_id=$request->id;
// 			$admin=User::find($admin_id);
// 			if($admin!=""){
// 				$admin->is_active=1;
// 			}
// 			$admin->save();
// 			return redirect('admin/admin/all');
// 		}

		public function getActiveAdmin(Request $request){
			$admin_id=$request->id;

			$admin=User::find($admin_id);
			if($admin!=""){
				$admin->is_active=0;
			}
			$admin->save();
			return redirect('admin/admin/all');
		}
		
		public function getDeleteAdmin(Request $request){
			$admin_id=$request->id;

			$admin=User::where('id',$admin_id)->delete();
			
			$notification = array(
			'message' => 'Admin Deleted Successfully!', 
			'alert-type' => 'success'
		);
			return redirect('admin/admin/all')->with($notification);
		}

}
