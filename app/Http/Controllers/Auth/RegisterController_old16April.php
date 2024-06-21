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

    protected function registerUser()
    {
        return view('auth/register');
    }
    public function newRegisterUser(Request $request)
    {
        $request->validate([
            'email' => 'unique:users,email',
            'username' => 'unique:users,username'
        ]);
        $name=$request->name;
        $email=$request->email;
        $confirm_password=$request->password_confirmation;
        $pass=$request->password;
        $password=Hash::make($request['password']);
        $otp = rand(1000,9999);
        $role_id=2;
        if($pass == $confirm_password){
            $user=new User();
            $user->name=$name;
            $user->email=$email;
            $user->password=$password;
            $user->role_id=$role_id;
            $user->level=1;
            $user->otp=$otp;
            $user->save();


            $data = array('name'=>$name,'email'=>$email,'otp'=>$otp);
            Mail::send('mail/userOtpMail',  $data, function($message) use ($email,$name){
            $message->to($email,$name)->subject('Welcome to JFinserv!');
            $message->from('jfinservconsultant@gmail.com', 'JFinserv');
        });

            $uname=$user->name;
            $name = strtok(trim($uname),  ' ');
            $id=$user->id;
            $referal=$name.$id;
            $user=User::where('id',$id)->first();

            $user->referal_code=$referal;
            $user->save();

            $id=$user->id;
    

            return view('auth/otpverify')->with('id',$id);
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

        // echo $id;
        // echo $otp;die;
        $user=User::where('id',$id)->first();
        $saveotp=$user->otp;
        // echo $saveotp;die;
        if($saveotp==$otp)
        {

            $user->is_verify=1;
            $user->save();
            $notification = array(
         'message' => 'OTP Match!!!....', 
         'alert-type' => 'success'
          );
            return redirect('login')->with('notification',$notification);
        
            
           }
           else{
            // $user->is_verify=0;
            // $user->save();
            $notification = array(
             'message' => 'OTP Not Match!!!....', 
             'alert-type' => 'success'
              );
             return view('auth.otpverify')->with('id',$id)->with('notification',$notification);
             
        }
        
    }
    public function  otpResend(Request $request)
    {
        $id = $request->id;
        $user=User::where('id',$id)->first();
        $name=$user->name;
        $email=$user->email;
        $otp = rand(1000,9999);

        $user->otp=$otp;
        $user->save();
        
        $data = array('name'=>$name,'email'=>$email,'otp'=>$otp);
        Mail::send('mail/userOtpMail',  $data, function($message) use ($email,$name){
            $message->to($email,$name)->subject('Welcome to JFinserv!');
            $message->from('jfinservconsultant@gmail.com', 'JFinserv');
        });
        // $notification = array(
        //      'message' => 'OTP Send on your register mail ID!!!....', 
        //      'alert-type' => 'success'
        //       );
        // return view('auth.otpverify')->with('id',$id)->with('notification',$notification);

        // $notification = array(
        //  'message' => 'OTP Send on your register mail ID!!!....', 
        //  'alert-type' => 'success'
        //   );
        $notification ="OTP Send on your register mail ID!!!....";
        return $notification;

    }
  
}
