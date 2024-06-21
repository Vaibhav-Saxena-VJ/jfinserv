<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thanks extends Model
{
    //

    protected $table = 'contacts';
    public $timestamps=false;
    
    public static $ThanksRules=[
        'email'=>'required|regex:/^.+@.+\..+$/i',
        'name'=>'required',
        'phone'=>'required|max:11|min:10',
        'loantype'=>'required',
        'amount'=>'required',
        'message'=>'required'
       ];
}
