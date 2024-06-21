<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanDocuments extends Model
{
     public $primaryKey="loan_doc_id";
     protected $table ='loan_documents'; 
}
