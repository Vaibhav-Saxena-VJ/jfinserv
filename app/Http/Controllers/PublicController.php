<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Config;
use GuzzleHttp\Client;
use Auth;
use App\Blog;
use App\GetStarted;
use App\MutualFundList;
use App\ReferFriend;
use App\TermInsurance;
use App\HealthInsurance;
use App\Loan;
use App\MutualFund;
use App\ApplyNow;
use App\Property;
use App\BankDetail;
use App\Redeem;
use App\Bank;
use App\PropertyImages;
use App\User;
use Hash;
use App\Contact;
use App\Thanks;
use App\ReferalTools;
use App\PropertyLead;

class PublicController extends Controller
{
    public function addPropertyEnquiry(Request $request)
	{
	$property_id=$request->property_id;
	$name=$request->name;
	$phone=$request->phone;
	$email=$request->email;
	$budget=$request->budget;

	$property=Property::where('property_id',$property_id)->first();
	$property_name=$property->property_name;
	$lead=new PropertyLead();
	$lead->property_id=$property_id;
	$lead->name=$name;
	$lead->phone=$phone;
	$lead->email=$email;
	$lead->budget=$budget;
	$lead->save();


	$data = array('property_id'=>$property_id,'property_name'=>$property_name,'name'=>$name,'phone'=>$phone,'email'=>$email,'budget'=>$budget);

	Mail::send('mail/getPropertyEnquiryMail',  $data, function($message) use ($email,$name){
			$message->to('jfinservconsultant@gmail.com', 'JFinserv')->subject('Property Enquiry');
			$message->from('jfinservconsultant@gmail.com', 'Admin');
		});
	// return $lead;
	$notification = array(
			'message' => 'Thanks for Enquiry. We will be in touch shortly!', 
			'alert-type' => 'success'
		);
	return redirect()->back()->with($notification);
	
}

    public function getchangepassword(Request $request){

		$user=Auth::user();
		$loan_details=Loan::where('user_id', $user->id)->first();
		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();
		
		return view('myaccount.change-password')->with('loan_details',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('user',$user);

	}
	
	public function getdeleteDraft(Request $request){
	    
	    $id=$request->id;
	    
	    $loan=Loan::find($id);
	    $loan->status=4;
	    $loan->save();
	    return redirect()->back();

	}
	
	
	
	public function postchangepassword(Request $request){

		$user=Auth::user();

	   $password=$request->password;
	   $old_password=$request->old_password;
	   $confirm_password=$request->confirm_password;
	   
	   $this->validate($request,User::$passwordRule);
	   
	   if (!Hash::check($password, $old_password)) {
	        return redirect('myprofile');
	   }
	   if($password==$confirm_password){
	       
	       $user->password=Hash::make($password);
	       $user->save();
	         $notification = array(
         'message' => 'Password Changes Successfully', 
         'alert-type' => 'success'
          );
	       return redirect('myprofile')->with($notification);
	   }
     return redirect('myprofile');
	}

	public function getClaim(Request $request){

		$loan_id=$request->id;

		$refer_friend=ReferFriend::where('loan_id',$loan_id)->first();

		$refer_friend->is_claim=2;
		$refer_friend->save();

		return redirect()->back();

	}
	
	public function passwordreset(Request $request){

		$contact_number=$request->contact_number;

		$user=User::where('contact_number',$contact_number)->orWhere('email',$contact_number)->where('is_verify',1)->first();
		
		if($user){
		    
		    $user_id=$user->id;
		    
		    $otp=rand(1111,9999);
		    
		    $user->otp=$otp;
		    $user->save();
		    
		    
		     try{
                $response=file_get_contents("https://2factor.in/API/V1/2c3e5202-bccc-11ec-9c12-0200cd936042/SMS/".$contact_number."/".$otp);
            }catch(Exception $e) {
                
            }
             $notify="";
            return view('auth/otpverify')->with('id',$user_id)->with('notify',$notify);
       
		}else{
		   
		   $notification = array(
         'message' => 'User Not Found, Please Register', 
         'alert-type' => 'success'
          );
         return redirect()->back()->with($notification); 
		    
		}

		return redirect()->back();

	}
	
		public function changeforgotpassword(Request $request){
		    
		    $id=$request->id;
		    $password=$request->password;
		    $password_confirmation=$request->password_confirmation;
		    
		    $user=User::find($id);
		    
		    if($user){
		         if($password==$password_confirmation){
		        
		        $user->password=Hash::make($password);
		        $user->save();
		        
		        $notification = array(
         'message' => 'Password changed successfully', 
         'alert-type' => 'success'
          );
         return redirect('login')->with($notification); 
		    }else{
		        
		        $notification = array(
         'message' => 'Password and Confirm password not matched', 
         'alert-type' => 'success'
          );
         return redirect()->back()->with($notification); 
		    }
		        
		    }else{
		        
		         
		        $notification = array(
         'message' => 'User not matched', 
         'alert-type' => 'success'
          );
         return redirect()->back()->with($notification); 
		    }
		}
	
	
	public function getBankDetails(Request $request){

		$user=Auth::user();
		$user_id=$user->id;


		$bank_detail=BankDetail::where('user_id',$user_id)->first();
		$loan_details=Loan::where('user_id', $user->id)->first();
		$doc_pending=Loan::where('user_id', $user->id)->where('status',1)->count();
		$inprocess=Loan::where('user_id', $user->id)->where('status',0)->count();
		$approved=Loan::where('user_id', $user->id)->where('status',2)->count();
		$rejeted=Loan::where('user_id', $user->id)->where('status',3)->count();
		$referearn=ReferFriend::where('referred_by',$user->id)->count();

		return view('myaccount.bankdetail')->with('bank_detail',$bank_detail)->with('loan_details',$loan_details)->with('doc_pending',$doc_pending)->with('inprocess',$inprocess)->with('approved',$approved)->with('rejeted',$rejeted)->with('referearn',$referearn)->with('user',$user);


	}

	public function postRedeem(Request $request){

		$user=Auth::user();
		$user_id=$user->id;

		$wallet=$user->wallet;
		$redeem=new Redeem();
		$redeem->redeem_amount=$wallet;
		$redeem->user_id=$user_id;
		$redeem->save();
		$user->wallet=0;
		$user->save();
		$notification = array(
			'message' => 'Redeem Request Sent Successfully', 
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
	}


	public function postBankDetails(Request $request){

		$user=Auth::user();

		$user_id=$user->id;

		$bank_detail=BankDetail::where('user_id',$user_id)->first();

		if ($bank_detail=="") {
			$bank_detail=new BankDetail();
		}
		$bank_detail->user_id=$user_id;
		$bank_detail->upi_id=$request->upi_id;
		$bank_detail->gpay_number=$request->gpay_number;
		$bank_detail->phone_pay_number=$request->phone_pay_number;
		$bank_detail->bank_account_number=$request->bank_account_number;
		$bank_detail->ifsc_code=$request->ifsc_code;
		$bank_detail->holder_name=$request->holder_name;
		$bank_detail->save();


		return redirect()->back();
	}


	
	public function getHome(){

    $refer_friend_name="";
		$product_name="";

		
		$get_properties = Property::where('is_deleted','0')->with('propertyimages')->take(6)->orderBy('property_id','desc')->get();
		$bank=Bank::where('is_active',0)->get();

		return view('index')->with('get_properties',$get_properties)->with('refer_friend_name',$refer_friend_name)->with('product_name',$product_name)->with('bank',$bank);
	}

	public function getProperties(){


		$get_properties = Property::where('is_deleted','0')->with('propertyimages')->take(20)->orderBy('property_id','desc')->get();

		$get_builders = Property::where('is_deleted','0')->distinct('builder_name')->pluck('builder_name');

		return view('propertynew')->with('get_properties',$get_properties)->with('get_builders',$get_builders);
	}


	public function getPropertyDetail(Request $request){

		$id=$request->id;
		$property_new = Property::where('property_id',$id)->with('getamenities')->with('propertyimages')->first();
		
		$getpropert_images=PropertyImages::where('property_id',$id)->get();
		
		

		$property_type=$property_new->property_type;

		$get_properties = Property::where('is_deleted','0')->where('property_type',$property_type)->with('propertyimages')->take(6)->orderBy('property_id','desc')->get();

		return view('property-detail')->with('property_new',$property_new)->with('get_properties',$get_properties)->with('getpropert_images',$getpropert_images);

	}

	public function search(Request $request){

		$keyword=$request->keyword;
		$budget=$request->budget;
		$type=$request->type;
// 		$from_amount=$request->from_amount;
		$to_amount=$request->amount;
	
		$location=$request->location;
		$builder=$request->builder;

		$get_properties = Property::where('is_deleted','0');

		if ($keyword!="") {
			$get_properties=$get_properties->where('property_name','like','%'.$keyword.'%')->orWhere('builder_name','like','%'.$keyword.'%');
		}

		if ($to_amount!="") {

			$get_properties=$get_properties->where('from_property_price','<=',$to_amount);
			
			
		}

		if ($location!="") {

			$get_properties=$get_properties->where('location','like','%'.$location.'%');
		}

		if ($builder!="") {

			$get_properties=$get_properties->where('builder_name','like','%'.$builder.'%');
		}


		$get_builders = Property::where('is_deleted','0')->distinct('builder_name')->pluck('builder_name');
		$get_properties=$get_properties->where('property_type',$type)->take(20)->orderBy('property_id','desc')->get();



		return view('propertynew')->with('get_properties',$get_properties)->with('get_builders',$get_builders);

	}



	public function refferalFriend(Request $request){

		
		$refer_friend_name=$request->refer_friend_name;
		$product_name=$request->product;
		

		$get_blogs = Blog::where('is_deleted','0')->with('blog_type')->take(3)->orderBy('blog_id','desc')->get();

		return view('index')->with('get_blogs',$get_blogs)->with('refer_friend_name',$refer_friend_name)->with('product_name',$product_name);
	}

	

	public function getAboutUs(){

		return view('about');
	}
	
	public function getContact(){

		return view('contact');
	}
	
	public function getHomeLoans(){

		return view('home-loans');
	}
	
	public function getMortgageLoan(){

		return view('mortgage-loan');
	}
	
	public function getProjectLoan(){

		return view('project-loan');
	}
	
	public function getOverdraftFacility(){

		return view('overdraft-facility');
	}
	
	public function getLeaseRentalDiscounting(){

		return view('lease-rental-discounting');
	}
	
	public function getMSMELoan(){

		return view('msme-loan');
	}
	
	public function getThankYou(){

		return view('thank-you');
	}
	
	public function postContact(Request $request){
	    
    	$this->validate($request,Contact::$contactRules);

		$name=$request->name;
		$email=$request->email;
		$phone=$request->phone;
		$message1=$request->message;
		
		$user_contact=new Contact();
		$user_contact->name=$name;
		$user_contact->email=$email;
		$user_contact->phone=$phone;
		$user_contact->message=$message1;
		$user_contact->save();

		$data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'message1'=>$message1);

		try{
		    Mail::send('mail/contactMail', $data, function($message) use ($email,$name){
		        $message->to('jfinserv90@gmail.com','JFinserv')->subject('Hey, New user Contacted');
		        $message->from($email,$name);
            });

		    Mail::send('mail/userContactMail', $data, function($message) use ($email,$name){
			    $message->to($email,$name)->subject('Thank you for contacting us!');
			    $message->from('jfinserv90@gmail.com','JFinserv');
		    });
	    }
	    catch (Exception $e){}
	
		$notification = array(
			'message' => 'Thanks for contacting us. We will be in touch shortly!', 
			'alert-type' => 'success'
		);
        
        return redirect('thankyou')->with($notification);
	}
	
	public function postThanks(Request $request){
	    
    	$this->validate($request,Thanks::$ThanksRules);

		$name=$request->name;
		$email=$request->email;
		$phone=$request->phone;
		$loantype=$request->loantype;
		$amount=$request->amount;
		$message2=$request->message;
		
		$user_contact=new Contact();
		$user_contact->name=$name;
		$user_contact->email=$email;
		$user_contact->phone=$phone;
		$user_contact->loantype=$loantype;
		$user_contact->amount=$amount;
		$user_contact->message=$message2;
		$user_contact->save();

		$data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'loantype'=>$loantype,'amount'=>$amount,'message2'=>$message2);

		try{
		    Mail::send('mail/thanksMail', $data, function($message) use ($email,$name){
		        $message->to('jfinserv90@gmail.com','JFinserv Consultant')->subject('Hey, '.$name.' Raised a Query Regarding Loan');
		        $message->from($email,$name);
            });

		    Mail::send('mail/userThanksMail', $data, function($message) use ($email,$name){
			    $message->to($email,$name)->subject('Thank You '.$name.' for Choosing Us!');
			    $message->from('jfinserv90@gmail.com','JFinserv Consultant');
		    });
	    }
	    catch (Exception $e){}
	
		$notification = array(
			'message' => 'Thank You for Choosing Us as Your Lending Partner!', 
			'alert-type' => 'success'
		);
        
        return redirect('thankyou')->with($notification);
	}

	public function getDocumentation(){

		return view('documentation');
	}

	public function getStarted(){

		return view('get-started');
	}

	/*For submission start*/

	public function postGetStarted(Request $request){

		$name=$request->name;
		$email=$request->email;
		$phone=$request->phone;
		$product_id=$request->product_id;
		$message1=$request->message;
		
		$get_started=new GetStarted();
		$get_started->name=$name;
		$get_started->email=$email;
		$get_started->phone=$phone;
		$get_started->product_id=$product_id;
		$get_started->message=$message1;
		$get_started->save();

		$city="";

		$data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'product_id'=>$product_id,'message1'=>$message1,'city'=>$city);

		Mail::send('mail/getStartedMail', $data, function($message) use ($email,$name){
			$message->to('contact@finkompas.com', 'Finkompas')->subject('New user Contacted');
			$message->from('infofinkompas@gmail.com', 'Admin');
		});

		Mail::send('mail/userGetStartedMail', $data, function($message) use ($email,$name){
			$message->to($email,$name)->subject('Thank you  for contacting us.');
			$message->from('contact@finkompas.com', 'Finkompas');
		});


		$notification = array(
			'message' => 'Thanks for contacting us. We will be in touch shortly!', 
			'alert-type' => 'success'
		);


		return redirect()->back()->with($notification);
	}

	public function getApplyNow(Request $request){

		$loan_type=$request->select_loan_type;
		$location=$request->select_location;
		$loan_amount=$request->loan_amount;
		$loan_new_type="";
		
		$user=Auth::user();
		
		$loan_id=$request->loan_id;
		
		if($loan_id){
		    $loan=Loan::find($loan_id);
		    $loan_amount=$loan->loan_amount;
		    $loan_new_type=$loan->loan_type;
		}

		return view('loan.apply-now')->with('loan_type',$loan_type)->with('loan_new_type',$loan_new_type)->with('location',$location)->with('loan_amount',$loan_amount)->with('user',$user);

	}

	public function getpersonal(Request $request){

		return view('loan.personal-detail');

	}

	public function getdocument(Request $request){

		return view('loan.document');

	}


	



	public function getPersonaldetail(Request $request){

		return view('loan.personal-detail');

	}
	public function getdocumentupload(Request $request){

		return view('loan.document');

	}

	public function postApplyNow(Request $request){

		$product_id=$request->product_id;

		$phone=$request->phone;
		$mutual_fund_list_id=$request->mutual_fund_list_id;

		if ($mutual_fund_list_id!="") {
			$product_id=5;
		}
		$email=$request->email;


		$apply_now=new ApplyNow();
		$apply_now->mutual_fund_list_id=$mutual_fund_list_id;
		$apply_now->product_id=$product_id;
		$apply_now->phone=$phone;
		$apply_now->email=$email;

		$apply_now->save();

		$city="";
		$name="";
		$email="";
		$message1="";

		$data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'product_id'=>$product_id,'message1'=>$message1,'city'=>$city);

// 		Mail::send('mail/getStartedMail', $data, function($message) use ($email,$name){
// 			$message->to('contact@finkompas.com', 'Finkompas')->subject('New user Contacted');
// 			$message->from('infofinkompas@gmail.com', 'Admin');
// 		});

		$notification = array(
			'message' => 'Thanks for contacting us. We will be in touch shortly!', 
			'alert-type' => 'success'
		);


		return redirect()->back()->with($notification);
	}

	public function postTermInsurance(Request $request){

		$current_age=$request->current_age;
		$email=$request->email;
		$mobile=$request->mobile;
		$annual_income=$request->annual_income;
		$annual_increment=$request->annual_increment;
		$savings=$request->savings;
		$loan=$request->loan;
		$required_cover=$request->required_cover;
		
		$term_insurance=new TermInsurance();
		$term_insurance->current_age=$current_age;
		$term_insurance->email=$email;
		$term_insurance->mobile=$mobile;
		$term_insurance->annual_income=$annual_income;
		$term_insurance->annual_increment=$annual_increment;
		$term_insurance->savings=$savings;
		$term_insurance->loan=$loan;
		$term_insurance->required_cover=$required_cover;
		$term_insurance->save();

		$name="";
		$message1="";
		$city="";

		$data = array('city'=>$city,'email'=>$email,'phone'=>$mobile,'product_id'=>1,'name'=>$name,'message1'=>$message1,);

		Mail::send('mail/getStartedMail', $data, function($message) use ($email,$name){
			$message->to('contact@finkompas.com', 'Finkompas')->subject('New user Contacted');
			$message->from('infofinkompas@gmail.com', 'Admin');
		});

		Mail::send('mail/userGetStartedMail', $data, function($message) use ($email,$name){
			$message->to($email,$name)->subject('Welcome to Finkompas!');
			$message->from('contact@finkompas.com', 'Finkompas');
		});

		$notification = array(
			'message' => 'Thanks for contacting us. We will be in touch shortly!', 
			'alert-type' => 'success'
		);


		return redirect()->back()->with($notification);
	}

	public function postHealthInsurance(Request $request){

		$current_age=$request->current_age;
		$gender=$request->gender;
		$city=$request->city;
		$email=$request->email;
		$mobile=$request->mobile;

		if ($gender=="") {
			$gender=1;
		}
		
		$health_insurance=new HealthInsurance();
		$health_insurance->current_age=$current_age;
		$health_insurance->gender=$gender;
		$health_insurance->city=$city;
		$health_insurance->email=$email;
		$health_insurance->mobile=$mobile;
		$health_insurance->save();

		$name="";
		$message1="";

		$data = array('city'=>$city,'email'=>$email,'phone'=>$mobile,'product_id'=>2,'name'=>$name,'message1'=>$message1,);

		Mail::send('mail/getStartedMail', $data, function($message) use ($email,$name){
			$message->to('contact@finkompas.com', 'Finkompas')->subject('New user Contacted');
			$message->from('infofinkompas@gmail.com', 'Admin');
		});

		Mail::send('mail/userGetStartedMail', $data, function($message) use ($email,$name){
			$message->to($email,$name)->subject('Welcome to Finkompas!');
			$message->from('contact@finkompas.com', 'Finkompas');
		});


		$notification = array(
			'message' => 'Thanks for contacting us. We will be in touch shortly!', 
			'alert-type' => 'success'
		);


		return redirect()->back()->with($notification);
	}

	public function postMutualFunds(Request $request){

		$sip_amount=$request->sip_amount;
		$email=$request->email;
		$mobile=$request->mobile;
		$expected_returns=$request->expected_returns;
		$investment_duration=$request->investment_duration;
		$value_of_investment=$request->value_of_investment;
		
		$mutual_fund=new MutualFund();
		$mutual_fund->sip_amount=$sip_amount;
		$mutual_fund->email=$email;
		$mutual_fund->mobile=$mobile;
		$mutual_fund->expected_returns=$expected_returns;
		$mutual_fund->investment_duration=$investment_duration;
		$mutual_fund->value_of_investment=$value_of_investment;
		$mutual_fund->save();

		$name="";
		$message1="";
		$city="";

		$data = array('city'=>$city,'email'=>$email,'phone'=>$mobile,'product_id'=>5,'name'=>$name,'message1'=>$message1,);

		Mail::send('mail/getStartedMail', $data, function($message) use ($email,$name){
			$message->to('contact@finkompas.com', 'Finkompas')->subject('New user Contacted');
			$message->from('infofinkompas@gmail.com', 'Admin');
		});

		Mail::send('mail/userGetStartedMail', $data, function($message) use ($email,$name){
			$message->to($email,$name)->subject('Welcome to Finkompas!');
			$message->from('contact@finkompas.com', 'Finkompas');
		});

		$notification = array(
			'message' => 'Thanks for contacting us. We will be in touch shortly!', 
			'alert-type' => 'success'
		);


		return redirect()->back()->with($notification);
	}

	public function postLoan(Request $request){

		$product_id=$request->id;
		$loan_amount=$request->loan_amount;
		$email=$request->email;
		$mobile=$request->mobile;
		$interest_rate=$request->interest_rate;
		$loan_term=$request->loan_term;
		$monthly_emi=$request->monthly_emi;

		if ($product_id==3) {
			$loan_type="Personal Loan";
		}else{
			$loan_type="Home Loan";
		}
		
		$loan=new Loan();
		$loan->loan_amount=$loan_amount;
		$loan->email=$email;
		$loan->mobile=$mobile;
		$loan->interest_rate=$interest_rate;
		$loan->loan_term=$loan_term;
		$loan->monthly_emi=$monthly_emi;
		$loan->loan_type=$loan_type;
		$loan->save();

		$name="";
		$message1="";
		$city="";


		$data = array('city'=>$city,'email'=>$email,'phone'=>$mobile,'product_id'=>$product_id,'name'=>$name,'message1'=>$message1,);

// 		Mail::send('mail/getStartedMail', $data, function($message) use ($email,$name){
// 			$message->to('contact@finkompas.com', 'Finkompas')->subject('New user Contacted');
// 			$message->from('infofinkompas@gmail.com', 'Admin');
// 		});

// 		Mail::send('mail/userGetStartedMail', $data, function($message) use ($email,$name){
// 			$message->to($email,$name)->subject('Welcome to Finkompas!');
// 			$message->from('contact@finkompas.com', 'Finkompas');
// 		});



		$notification = array(
			'message' => 'Thanks for contacting us. We will be in touch shortly!', 
			'alert-type' => 'success'
		);


		return redirect()->back()->with($notification);
	}

	public function postReferEarn(Request $request){

		$name=$request->name;
		$email=$request->email;
		$phone=$request->phone;
		$product_id=$request->product_id;
		$referred_by=$request->referred_by;
		$referal_code=$request->referal_code;
		$status_id=0;
		
		$user=User::where('referal_code',$referal_code)->first();
		if($user!="")
		{
			$refer_friend=new ReferalTools();
			$refer_friend->name=$name;
			$refer_friend->email=$email;
			$refer_friend->phone=$phone;
			$refer_friend->product_id=$product_id;
			$refer_friend->referred_by=$user->id;
			$refer_friend->referal_code=$referal_code;
			$refer_friend->status_id=$status_id;
			$refer_friend->save();
		}
		
// 		$refer_friend=new ReferFriend();
// 		$refer_friend->name=$name;
// 		$refer_friend->email=$email;
// 		$refer_friend->phone=$phone;
// 		$refer_friend->product_id=$product_id;
// 		$refer_friend->referred_by=$referred_by;
// 		$refer_friend->referral_link=$referral_link;
// 		$refer_friend->status_id=$status_id;
// 		$refer_friend->save();

		$data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'product_id'=>$product_id,'referal_code'=>$referal_code,'referred_by'=>$referred_by);

		
// 		Mail::send('mail/getReferredFriendMail',  $data, function($message) use ($email,$name){
// 			$message->to('contact@finkompas.com', 'Finkompas')->subject('New user reffered to a friend');
// 			$message->from('infofinkompas@gmail.com', 'Admin');
// 		});

// 		Mail::send('mail/userReferredFriendMail',  $data, function($message) use ($email,$name){
// 			$message->to($email,$name)->subject('Welcome to Finkompas!');
// 			$message->from('contact@finkompas.com', 'Finkompas');
// 		});
        Mail::send('mail/getReferredFriendMail',  $data, function($message) use ($email,$name){
			$message->to('jfinservconsultant@gmail.com', 'JFinserv')->subject('New user reffered to a friend');
			$message->from('jfinservconsultant@gmail.com', 'Admin');
		});

		Mail::send('mail/userReferredFriendMail',  $data, function($message) use ($email,$name){
			$message->to($email,$name)->subject('Welcome to JFinserv!');
			$message->from('jfinservconsultant@gmail.com', 'JFinserv');
		});

		$notification = array(
			'message' => 'Thanks for Referring. We will be in touch shortly!', 
			'alert-type' => 'success'
		);


		return redirect()->back()->with($notification);



		//return $refer_friend;



		
	}



	

	

	/*End Form Submission*/



	public function getReferEarn(){

		return view('refer-earn');
	}

	public function getBlogs(Request $request){
		
		$five_blogs = Blog::where('is_deleted','0')->orderBy('blog_id','desc')->take(5)->get();
		
		$blogs = Blog::where('is_deleted','0')->with('blog_type')->orderBy('blog_id','desc')->paginate(10);


		return view('blog')->with('blogs',$blogs)->with('five_blogs',$five_blogs);
	}
	public function getBlogDetails(Request $request){
		$blog_url=$request->url;
		
		$blog_detail=Blog::where('is_deleted','0')->with('blog_type')->where('url',$blog_url)->first();

		$get_blogs = Blog::where('is_deleted','0')->with('blog_type')->where('blog_id','!=',$blog_detail->blog_id)->where('blog_type_id',$blog_detail->blog_id)->take(5)->orderBy('blog_id','desc')->get();



		
		if ($blog_detail!="") {
			$blog_detail->view_count=$blog_detail->view_count+1;
			$blog_detail->save();
		}
		return view('blog-details')->with('blog_detail',$blog_detail)->with('get_blogs',$get_blogs);
	}
	public function getTermInsurance(Request $request){

		return view('insurance.term-insurance');
	}

	public function getHealthInsurance(Request $request){

		return view('insurance.health-insurance');
	}

	public function getMutualFunds(Request $request){

		return view('investment.mutual-funds');
	}

	public function getEquityFunds(Request $request){

		$name=$request->name;

		$mutual_fund_lists=MutualFundList::where('mutual_fund_type',$name)->get();

		return view('investment.equity-funds')->with('name',$name)->with('mutual_fund_lists',$mutual_fund_lists);
	}


	public function getHomeLoan(Request $request){

		return view('loan.home-loan');
	}

	public function getPersonalLoan(){

		return view('personal-loan');
	}

	public function getTermsCondition(){

		return view('terms-condition');
	}
	public function getPrivacyPolicy(){

		return view('privacy-policy');
	}
	
	
	public function getCookiePolicy(){

		return view('cookie-policy');
	}
	

	public function getLogout(Request $request){

		Auth::logout();
		return redirect('login');
	}


	public function getStocks(Request $request){

		return view('investment.stocks');
	}

	
	

}
