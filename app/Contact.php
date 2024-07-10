<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $table = 'contacts';
    public $timestamps=false;
    
    public static $contactRules=[
        'email'=>'required|regex:/^.+@.+\..+$/i',
        'name'=>'required',
        'phone'=>'required|max:11|min:10',
        'message'=>'required'
       ];

       public static $ThanksRules=[
        'email'=>'required|regex:/^.+@.+\..+$/i',
        'name'=>'required',
        'phone'=>'required|max:11|min:10',
        'loantype'=>'required',
        'amount'=>'required',
        'place_loan'=>'required',
        'message'=>'required',
        'nature_earning'=>'required',
		'loan_requirement'=>'required',
		'area_jurisdiction'=>'required',
       ];
}
