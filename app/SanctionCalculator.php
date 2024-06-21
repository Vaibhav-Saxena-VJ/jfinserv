<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanctionCalculator extends Model
{
    public $primaryKey="sanction_calc_id";
    protected $table="sanction_calculator";
}
