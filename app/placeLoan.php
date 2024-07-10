<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class placeLoan extends Model
{
    use HasFactory;
    protected $table = 'place_loan';
    public $timestamps=false;
}
