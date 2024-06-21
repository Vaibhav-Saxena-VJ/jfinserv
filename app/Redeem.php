<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeem extends Model
{
    public $primaryKey="redeem_id";

   public function user(){
    return $this->belongsTo('App\User','user_id','id');
   }

}
