<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Mail;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function registerPartner()
    {
        return view('auth/partner-register');
    }
    public function newRegisterPartner(Request $request)
    {
        $request->validate([
            'contact_number' => 'unique:users,contact_number',
            'username' => 'unique:users,username',
            'password' => 'required|max:20|min:6',
            'password_confirmation' => 'required|max:20|same:password'
        ]);
        $name=$request->name;
        $email=$request->contact_number;
        $contact_number=$request->contact_number;
        $confirm_password=$request->password_confirmation;
        $pass=$request->password;
        
        $password=Hash::make($request['password']);
        $otp = rand(1000,9999);
        $role_id=3;
        if($pass == $confirm_password){
            $user=new User();
            $user->name=$name;
            $user->email=$email;
            $user->contact_number=$contact_number;
            $user->password=$password;
              
            $user->role_id=$role_id;
            $user->level=1;
            $user->otp=$otp;
            $user->save();
            
             try{
                $response=file_get_contents("https://2factor.in/API/V1/2c3e5202-bccc-11ec-9c12-0200cd936042/SMS/".$contact_number."/".$otp);
            }catch(Exception $e) {
                
            }
        


            // $data = array('name'=>$name,'email'=>$email,'otp'=>$otp);
            // Mail::send('mail/userOtpMail',  $data, function($message) use ($email,$name){
            // $message->to($email,$name)->subject('Welcome to JFinserv!');
            // $message->from('jfinservconsultant@gmail.com', 'JFinserv');
        // });

            $uname=$user->name;
            $name = strtok(trim($uname),  ' ');
            $id=$user->id;
            $referal=$name.$id;
            $user=User::where('id',$id)->first();

            $user->referal_code=$referal;
            $user->save();

            $id=$user->id;
    
            $notify="";
            $notification = array(
         'message' => 'Password Matched!!!....', 
         'alert-type' => 'success'
          );
            return view('auth/otpverify')->with('id',$id)->with('notify',$notify)->with($notification);
            // return redirect('login');
        }
        else{
            $notification = array(
         'message' => 'Password Not Matched!!!....', 
         'alert-type' => 'success'
          );
         return redirect()->back()->with($notification);
        
        }
    }

    protected function registerUser()
    {
        return view('auth/register');
    }
    public function newRegisterUser(Request $request)
    {
        $request->validate([
            'contact_number' => 'unique:users,contact_number',
            'username' => 'unique:users,username',
            'password' => 'required|max:20|min:6',
            'password_confirmation' => 'required|max:20|same:password'
        ]);
        $name=$request->name;
        $email=$request->contact_number;
        $contact_number=$request->contact_number;
        $confirm_password=$request->password_confirmation;
        $pass=$request->password;
        $purpose=$request->select_loan_type;
        $amount=$request->amount;
        $password=Hash::make($request['password']);
        $otp = rand(1000,9999);
        $role_id=2;
        if($pass == $confirm_password){
            $user=new User();
            $user->name=$name;
            $user->email=$email;
            $user->contact_number=$contact_number;
            $user->password=$password;
              $user->purpose=$purpose;
            $user->amount=$amount;
            $user->role_id=$role_id;
            $user->level=1;
            $user->otp=$otp;
            $user->save();
            
            try{
                $response=file_get_contents("https://2factor.in/API/V1/2c3e5202-bccc-11ec-9c12-0200cd936042/SMS/".$contact_number."/".$otp);
            }catch(Exception $e) {
                
            }
        


            // $data = array('name'=>$name,'email'=>$email,'otp'=>$otp);
            // Mail::send('mail/userOtpMail',  $data, function($message) use ($email,$name){
            // $message->to($email,$name)->subject('Welcome to JFinserv!');
            // $message->from('jfinservconsultant@gmail.com', 'JFinserv');
        // });

            $uname=$user->name;
            $name = strtok(trim($uname),  ' ');
            $id=$user->id;
            $referal=$name.$id;
            $user=User::where('id',$id)->first();

            $user->referal_code=$referal;
            $user->save();

            $id=$user->id;
    
            $notify="";
            return view('auth/otpverify')->with('id',$id)->with('notify',$notify);
            // return redirect('login');
        }
        else{
            $notification = array(
         'message' => 'Password Not Matched!!!....', 
         'alert-type' => 'success'
          );
         return redirect()->back()->with('notification',$notification);
        
        }
      
        
    }
    //OTP Verify
    protected function otpVerify(Request $request)
    {
        $id=$request->uid;
        $otp=$request->otp;

   
        // echo $otp;die;
        $user=User::where('id',$id)->first();
        $saveotp=$user->otp;
        // echo $saveotp;die;
        if($saveotp==$otp)
        {
            if($user->is_verify==1){
               
            $notification = array(
         'message' => 'OTP matched', 
         'alert-type' => 'success'
          );
          $user_id=$user->id;
            return view('auth/reset-password')->with('id',$user_id)->with($notification);
        
                
            }else{
                
                 $user->is_verify=1;
            $user->save();
            $notification = array(
         'message' => 'OTP matched and user verified, Thank you', 
         'alert-type' => 'success'
          );
            return redirect('login')->with($notification);
        
            }

           
            
           }
           else{
            // $user->is_verify=0;
            // $user->save();
            $notify ="Please enter valid otp";
            // $notification = array(
            //  'message' => 'OTP Not Match!!!....', 
            //  'alert-type' => 'success'
            //   );
            
            return view('auth.otpverify')->with('id',$id)->with('notify',$notify);
             
        }
        
    }
    public function  otpResend(Request $request)
    {
        $id = $request->id;
        $user=User::where('id',$id)->first();
        $name=$user->name;
        $contact_number=$user->contact_number;
        $otp = rand(1000,9999);

        $user->otp=$otp;
        $user->save();
        
         try{
                $response=file_get_contents("https://2factor.in/API/V1/2c3e5202-bccc-11ec-9c12-0200cd936042/SMS/".$contact_number."/".$otp);
            }catch(Exception $e) {
                
            }
        
        // $data = array('name'=>$name,'email'=>$email,'otp'=>$otp);
        // Mail::send('mail/userOtpMail',  $data, function($message) use ($email,$name){
        //     $message->to($email,$name)->subject('Welcome to JFinserv!');
        //     $message->from('jfinservconsultant@gmail.com', 'JFinserv');
        // });
        // $notification = array(
        //      'message' => 'OTP Send on your register mail ID!!!....', 
        //      'alert-type' => 'success'
        //       );
        // return view('auth.otpverify')->with('id',$id)->with('notification',$notification);

        // $notification = array(
        //  'message' => 'OTP Send on your register mail ID!!!....', 
        //  'alert-type' => 'success'
        //   );
        $notification ="OTP Send on your register mobile No!!!....";
        return $notification;

    }
  
}
