<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amount extends Model
{
    use HasFactory;
    protected $table = 'amount';
    public $timestamps=false;
}
