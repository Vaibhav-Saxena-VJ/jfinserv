<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferalTools extends Model
{
     public $primaryKey="referal_tool_id ";
       public function refer_by(){
    return $this->belongsTo('App\User','referred_by','id');
   }
}
