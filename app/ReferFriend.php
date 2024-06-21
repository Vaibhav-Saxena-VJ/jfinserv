<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferFriend extends Model
{
    public $primaryKey="refer_friend_id";

    public function refer_by(){
    return $this->belongsTo('App\User','referred_by','id');
   }

   public function loan_user(){
    return $this->belongsTo('App\User','lona_user_id','id');
   }

   public function loan(){
    return $this->belongsTo('App\Loan','loan_id','loan_id');
   }


}
