<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use App\User;
use App\Loan;
use DataTables;
use ApplyNow;
use Auth;
use App\Http\Controllers\LoanController;
use App\LoanDocuments;
use App\ReferFriend;
use App\Branch;
use Validator;
class LoanController extends Controller
{
    
    public function postPersonalDetailMatchContactReferel(Request $request){
        $contact_number = $request->contact_number;
        
        $user = User::where('contact_number',$contact_number)->first();
        if($user!=""){
           $referal_code = $user->referal_code; 
        }else{
            $referal_code = "";
        }
        
        return $referal_code;
        
    }
    
    //Verify Referal Code
    public function verify_code(Request $request)
    {
        //echo dd($request->all());
        $user=Auth::user();
        $refered_by = $request->refered_by;

        $newuser=User::where('referal_code',$refered_by)->first();

        if ($newuser=="") {
           $arr = array('msg' => 'Referal Code Not Match', 'status' => false);
        }

        $referal=Branch::where('user_id',$user->id)->where('referred_by',$newuser->id)->first(); 



        
        if($referal!=""){ 
             $arr = array('msg' => 'Referal Code Already Used', 'status' => false);
            
        }

          $arr = array('msg' => 'Referal Code Matched', 'status' => true);
        // else{
        //     $arr = array('msg' => 'Referal Code Not Match', 'status' => false);
            
        // }
        return Response()->json($newuser);
        
    }

    public function postAddLoan(Request $request){

        $loandetails= new Loan();

        if (Auth::user()) {
            $user_id=Auth::user()->id;
            $loandetails->user_id=$user_id;
        }
        else{
            $session_id = Session::getId();
            $loandetails->user_id=$session_id;
        }
            // $refered_by=$request->refered_by;
            // if($refered_by!="")
            // {
            //    $user=User::where('referal_code',$refered_by)->first(); 
            //    $refered_by_id=$user->id;
            //    $loandetails->refered_by=$refered_by_id;

            // }

        $loandetails->loan_type=$request->select_loan_type;
        $loandetails->financing_type=$request->loandetails01;
        $loandetails->bank_service=$request->loandetails02;
        $loandetails->loan_amount=$request->loan_amount;
        $loandetails->loan_term=$request->inlineRadioOptions;
        $loandetails->status=-1;
        $loandetails->save();
        $id=$loandetails->loan_id;

            // //Level
            //     if($loandetails->refered_by!=""){
            //         $user=User::where('id',$loandetails->refered_by)->first();
            //         $loandetail=Loan::where('user_id',$user->id)->first();
            //         // echo $loandetail;
            //         $refered_by=$loandetail->refered_by;
            //         $status=$request->status;
            //         $level=$request->level;
            //         // echo $refered_by;die;
            //         if($refered_by=="" && $status==2 && $level!=9){
            //         $level=$user->level;
            //         $new_user_level=$level+1;
            //         $newuser=Auth::user();
            //         $newuser->level=$new_user_level;
            //         $newuser->save();
            //         }
            //         else
            //         {
            //             $refered_by=$loandetail->refered_by;
            //             $level=$user->level;
            //             $new_user_level=$level+1;
            //             $newuser=Auth::user();
            //             $newuser->level=$new_user_level;
            //             $newuser->save();
            //         }


                    //}





        $notification = array(
            'message' => 'Loan Details Added Successfully!', 
            'alert-type' => 'success'
        );
        return redirect('loan/personaldetail/'.$id)->with($notification);
    }

    public function getPersonalDetail(Request $request)
    {
        $loan_id=$request->id;
        $users = User::get();
        
         $user = Auth::user();
        return view('loan.personal-detail')->with('loan_id',$loan_id)->with('users',$users)->with('user',$user);
    }

    public function postAddPersonal(Request $request)
    {
        $loan_id=$request->id;
        $loan=Loan::find($loan_id);
        $refered_by=$request->refered_by;
        if($refered_by!="")
        {
           $user=User::where('referal_code',$refered_by)->first(); 
           if($user!=""){
           $refered_by_id=$user->id;

           $loan->refered_by=$refered_by_id;
           }

       }
       $profession_type=$request->profession_type;
       
       if($profession_type=="salaried")
       {
        // echo "salaried";die;
        $validated = $request->validate([
            'mone_nsalary' => 'required',
            'mone_gsalary' => 'required',
            'mtwo_nsalary' => 'required',
            'mtwo_gsalary' => 'required',
            'mthree_nsalary' => 'required',
            'mthree_gsalary' => 'required',
        
        ]);
         

       }
       else{
        // echo "self";die;
           $validated = $request->validate([
        'yone_nprofit' => 'required',
       'yone_depreciation' => 'required',
       'yone_interestloan' => 'required',
       'yone_grossprofit' => 'required',
       'yone_totalsales' => 'required',
       'ytwo_nprofit' => 'required',
       'ytwo_depreciation' => 'required',
       'ytwo_interestloan' => 'required',
       'ytwo_grossprofit' => 'required',
       'ytwo_totalsales' => 'required',
       'ythree_nprofit' => 'required',
       'ythree_depreciation' => 'required',
       'ythree_interestloan' => 'required',
       'ythree_grossprofit' => 'required',
       'ythree_totalsales' => 'required',
       ]);

       }
       
       $loan->profession_type=$request->profession_type;
       $loan->full_name=$request->fName;
       $loan->residence_address=$request->rAddress;
       $loan->office_address=$request->oAddress;
       $loan->firm_company_name=$request->fcname;
       $loan->work_experience=$request->experience;
       $loan->business_estabish_date=$request->bedate;
       $loan->nature_of_work=$request->nature_work;
       $loan->qualification=$request->qualification;
       $loan->month_one_net_salary=$request->mone_nsalary;
       $loan->month_one_grosssalary=$request->mone_gsalary;
       $loan->month_two_net_salary=$request->mtwo_nsalary;
       $loan->month_two_grosssalary=$request->mtwo_gsalary;
       $loan->month_three_net_salary=$request->mthree_nsalary;
       $loan->month_three_grosssalary=$request->mthree_gsalary;
       $loan->year_one_netprofit=$request->yone_nprofit;
       $loan->year_one_depreciation=$request->yone_depreciation;
       $loan->year_one_loaninterest=$request->yone_interestloan;
       $loan->year_one_grossprofit=$request->yone_grossprofit;
       $loan->year_one_sales=$request->yone_totalsales;
       $loan->year_two_netprofit=$request->ytwo_nprofit;
       $loan->year_two_depreciation=$request->ytwo_depreciation;
       $loan->year_two_loaninterest=$request->ytwo_interestloan;
       $loan->year_two_grossprofit=$request->ytwo_grossprofit;
       $loan->year_two_sales=$request->ytwo_totalsales;
       $loan->year_three_netprofit=$request->ythree_nprofit;
       $loan->year_three_depreciation=$request->ythree_depreciation;
       $loan->year_three_loaninterest=$request->ythree_interestloan;
       $loan->year_three_grossprofit=$request->ythree_grossprofit;
       $loan->year_three_sales=$request->ythree_totalsales;
    //   $dob_d=$request->dob_d;
    //   $dob_m=$request->dob_m;
    //   $dob_y=$request->dob_y;
    //   $loan->dob=$dob_y."/".$dob_m."/".$dob_d;
        $loan->dob=$request->date_of_birth;
       
       $loan->marital_status=$request->MaritalStatas;
       $loan->email=$request->emailName;
       $loan->mobile=$request->inputPhoneNumber;
       $loan->state=$request->stateName;
       $loan->city=$request->cityName;
       $loan->zip_code=$request->zipCode;
       $loan->exist_loan_type=$request->exist_loantype;
       $loan->exist_loan_amount=$request->exist_loanamount;
       $loan->exist_tenor_of_loan=$request->exist_tenorloan;
       $loan->exist_emi=$request->exist_emi;
       $loan->exist_sanction_dt=$request->exist_sanctiondate;
       $loan->exist_emi_bounce=$request->exist_emibounce;
       $loan->cibil_problem=$request->cibiproblem;
       $loan->loan_requirement=$loan->loan_amount;
       $loan->job_business_profile=$request->job_business_profile;
       $loan->purpose_of_loan=$request->loan_purpose;
       $loan->extra_income=$request->extra_income;
       $loan->note=$request->note;
        $loan->channel_partner_id=$request->channel_partner_id;
        // echo $loan;
       $loan->save();
       $id=$loan->loan_id;
        //Level
       if($loan->refered_by!=""){
        $user=User::where('id',$loan->refered_by)->first();
        $loandetail=Loan::where('user_id',$user->id)->first();
                    // echo $loandetail;
        $refered_by=$loan->refered_by;
        $status=$user->status;
        $level=$user->level;
                    // echo $refered_by;die;
        if($refered_by=="" && $status==2 && $level>=9){
            $level=$user->level;
            $new_user_level=$level;
            $newuser=Auth::user();
            $newuser->level=$new_user_level;
            $newuser->save();
        }
        else
        {
            $refered_by=$loan->refered_by;
            $level=$user->level;
            $new_user_level=$level+1;
            $newuser=Auth::user();
            $newuser->level=$new_user_level;
            $newuser->save();
        }
        $user=Auth::user();
        

        $refer_loan=new ReferFriend();
        $refer_loan->loan_id=$loan->loan_id;
        $refer_loan->loan_user_id=$user->id;
        $refer_loan->referred_by=$loan->refered_by;
        $refer_loan->save();

    }



    
    $notification = array(
        'message' => 'Personal Details Added Successfully!', 
        'alert-type' => 'success'
    );
    return redirect('loan/getdocuments/'.$id)->with($notification);
}

public function getDocuments(Request $request){
        // $user=Auth::user();
        // if ($user!="") {
        //     $role=$user->role;
        //     if ($role!=1) {
        //         return redirect('/');
        //     }
        // }
    $loan_id=$request->id;
     $loan=Loan::find($loan_id);
     $profession_type=$loan->profession_type;

    return view('loan.document')->with('loan_id',$loan_id)->with('profession_type',$profession_type);
}
// public function postLoanApplySuccess(Request $request){
//     $notification = array(
//         'message' => 'Loan apply Successfully!', 
//         'alert-type' => 'success'
//     );

//     $loan_id=$request->loan_id;

//     $loandocument=LoanDocuments::where('loan_id',$loan_id)->first();

//     if ($loandocument=="") {
//       $loandocument= new LoanDocuments();
//   }

// $loandocument->loan_id=$loan_id;
//   if(Input::hasFile('dully_filled')){
//     $dully_filled = $request->dully_filled;
//     $dully_filled_path = $dully_filled->store('dully_filled');
//     $loandocument->dully_filled=$dully_filled_path;
// }

// if(Input::hasFile('ageproof')){
//     $ageproof = $request->ageproof;
//     $ageproof_path = $ageproof->store('ageproof');
//     $loandocument->ageproof=$ageproof_path;
// }

// if(Input::hasFile('education')){
//     $education = $request->education;
//     $education_path = $education->store('education');
//     $loandocument->education=$education_path;
// }

// if(Input::hasFile('business_certificate')){
//     $business_certificate = $request->business_certificate;
//     $business_certificate_path = $business_certificate->store('business_certificate');
//     $loandocument->business_certificate=$business_certificate_path;
// }

// if(Input::hasFile('tax_return')){
//     $tax_return = $request->tax_return;
//     $tax_return_path = $tax_return->store('tax_return');
//     $loandocument->tax_return=$tax_return_path;
// }

// if(Input::hasFile('bank_statement')){
//     $bank_statement = $request->bank_statement;
//     $bank_statement_path = $bank_statement->store('bank_statement');
//     $loandocument->bank_statement=$bank_statement_path;
// }

// if(Input::hasFile('cheque')){
//     $cheque = $request->cheque;
//     $cheque_path = $cheque->store('cheque');
//     $loandocument->cheque=$cheque_path;
// }

// if(Input::hasFile('property_document')){
//     $property_document = $request->property_document;
//     $property_document_path = $property_document->store('property_document');
//     $loandocument->property_document=$property_document_path;
// }

// if(Input::hasFile('resident_proof')){
//     $resident_proof = $request->resident_proof;
//     $resident_proof_path = $resident_proof->store('resident_proof');
//     $loandocument->resident_proof=$resident_proof_path;
// }

// if(Input::hasFile('salary_slip')){
//     $salary_slip = $request->salary_slip;
//     $salary_slip_path = $salary_slip->store('salary_slip');
//     $loandocument->salary_slip=$salary_slip_path;
// }

// if(Input::hasFile('form_sixteen')){
//     $form_sixteen = $request->form_sixteen;
//     $form_sixteen_path = $form_sixteen->store('form_sixteen');
//     $loandocument->form_sixteen=$form_sixteen_path;
// }

// $loandocument->save();

// return redirect('myprofile')->with($notification);

// }
public function postLoanApplySuccess(Request $request){
    $notification = array(
        'message' => 'Loan apply Successfully!', 
        'alert-type' => 'success'
    );

    $loan_id=$request->loan_id;

    // $loandocument=LoanDocuments::where('loan_id',$loan_id)->first();
    // if ($loandocument=="") {
    //     $loandocument= new LoanDocuments();
    // }
    
    $status=0;


    $dully_filled = $request->dully_filled;
    
    $dully_form =$request->dully_form;
    if($dully_filled!=''){
    // print_r($dully_filled);
    $img_count = count($dully_filled);
    // echo $img_count;die;
    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$dully_form;
            
            if(Input::hasFile('dully_filled')){
                $eventImage = $request->dully_filled[$i];
                $path = $eventImage->store('dully_filled');
                $loandocument->documents=$path;
            }

            $loandocument->save();

        }
      }
      $ageproof = $request->ageproof;
      $identity = $request->identity;
      if($ageproof!=''){
    $img_count = count($ageproof);    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$identity;
            
            if(Input::hasFile('dully_filled')){
                $eventImage = $request->ageproof[$i];
                $path = $eventImage->store('ageproof');
                $loandocument->documents=$path;
            }

            $loandocument->save();
        }
      }else{
          $status=1;
      }

         $resident_proof = $request->resident_proof;
      $residence_proof = $request->residence_proof;
      if($resident_proof!=''){
    $img_count = count($resident_proof);    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$residence_proof;
            
            if(Input::hasFile('resident_proof')){
                $eventImage = $request->resident_proof[$i];
                $path = $eventImage->store('resident_proof');
                $loandocument->documents=$path;
            }

            $loandocument->save();
        }
      }else{
          $status=1;
      }

      $education = $request->education;
      $education_proof = $request->education_proof;
      if($education!=''){
    $img_count = count($education);    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$education_proof;
            
            if(Input::hasFile('education')){
                $eventImage = $request->education[$i];
                $path = $eventImage->store('education');
                $loandocument->documents=$path;
            }

            $loandocument->save();
        }
      }

      $salary_slip = $request->salary_slip;
      $income_proof = $request->income_proof;
      if($salary_slip!=''){
    $img_count = count($salary_slip);    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$income_proof;
            
            if(Input::hasFile('salary_slip')){
                $eventImage = $request->salary_slip[$i];
                $path = $eventImage->store('salary_slip');
                $loandocument->documents=$path;
            }

            $loandocument->save();
        }
      }

       $form_sixteen = $request->form_sixteen;
      $form_sixteendoc = $request->form_sixteendoc;
      if($form_sixteen!=''){
    $img_count = count($form_sixteen);    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$form_sixteendoc;
            
            if(Input::hasFile('form_sixteen')){
                $eventImage = $request->form_sixteen[$i];
                $path = $eventImage->store('form_sixteen');
                $loandocument->documents=$path;
            }

            $loandocument->save();
        }
      }

      $bank_statement = $request->bank_statement;
      $bankstatement_proof = $request->bankstatement_proof;
      if($bank_statement!=''){
    $img_count = count($bank_statement);    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$bankstatement_proof;
            
            if(Input::hasFile('bank_statement')){
                $eventImage = $request->bank_statement[$i];
                $path = $eventImage->store('bank_statement');
                $loandocument->documents=$path;
            }

            $loandocument->save();
        }
      }else{
          $status=1;
      }

      $business_certificate = $request->business_certificate;
      $business_certificateproof = $request->business_certificateproof;
      if($business_certificate!=''){
    $img_count = count($business_certificate);    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$business_certificateproof;
            
            if(Input::hasFile('business_certificate')){
                $eventImage = $request->business_certificate[$i];
                $path = $eventImage->store('business_certificate');
                $loandocument->documents=$path;
            }

            $loandocument->save();
        }
      }

      $tax_return = $request->tax_return;
      $tax_return_proof = $request->tax_return_proof;
      if($tax_return!=''){
    $img_count = count($tax_return);    
        for ($i=0; $i < $img_count; $i++) { 

            $loandocument= new LoanDocuments();
             
            $loandocument->loan_id=$loan_id;
            $loandocument->name=$tax_return_proof;
            
            if(Input::hasFile('tax_return')){
                $eventImage = $request->tax_return[$i];
                $path = $eventImage->store('tax_return');
                $loandocument->documents=$path;
            }

            $loandocument->save();
        }
      }
      
          $loandetails=Loan::where('loan_id',$loan_id)->first();
          $loandetails->status=$status;
          $loandetails->save();

      return redirect('myprofile')->with($notification);

}
public function postUploadDocument(Request $request){

    $image = $request->file('file');
    $loan_id= $request->id;

    $imagename = $image->getClientOriginalName();
    $doc_array=array();
    $imageUpoad= new LoanDocuments();
    $path = $image->store('loan_documents');
    $imageUpoad->document=$path;
    $imageUpoad->loan_id= $loan_id;
    echo $imageUpoad;
    $imageUpoad->save();       
}
public function destroy(Request $request)
{
    $filename= $request->get('filename');
    LoanDocuments::where('filename', $filename)->delete();
    $path = 'storage/app/images'.$filename;
    if(file_exists($path)){
        unlink($path);
    }
}
}
