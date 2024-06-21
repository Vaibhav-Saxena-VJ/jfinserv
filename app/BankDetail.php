<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    public $primaryKey="bank_detail_id";

   public function user(){
    return $this->belongsTo('App\User','user_id','id');
   }

}
