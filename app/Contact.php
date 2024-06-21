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
}
