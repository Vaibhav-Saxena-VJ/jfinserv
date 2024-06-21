<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public $primaryKey="branch_id";
     public function userlevels()
    {
    	return $this->hasOne('App\User','id','user_id');
    }
}
