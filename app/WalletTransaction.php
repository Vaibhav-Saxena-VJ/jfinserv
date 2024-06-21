<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    public $primaryKey="wallet_transaction_id";

   public function user(){
    return $this->belongsTo('App\User','user_id','id');
   }

   public function loan(){
    return $this->belongsTo('App\Loan','loan_id','loan_id');
   }


}
