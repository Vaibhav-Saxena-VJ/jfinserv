<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\LoanController;
class Loan extends Model
{
    public $primaryKey="loan_id";

    // public function loandoc()
    // {
    //     return $this->belongsTo('App\LoanDocuments','loan_id','loan_id');
    // }
    public function loandoc()
    {
        return $this->hasMany('App\LoanDocuments','loan_id','loan_id');
    }

     public function refer_by()
    {
        return $this->belongsTo('App\User','refered_by','id');
    }
    
     public function associate()
    {
        return $this->belongsTo('App\User','assigned_to','id');
    }
     public function comments()
    {
        return $this->hasMany('App\Comment','loan_id','loan_id');
    }
    public function substatus()
    {
        return $this->belongsTo('App\Status','status_id','status_id');
    }
}
