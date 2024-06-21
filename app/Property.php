<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public $primaryKey="property_id";
     public function getamenities()
    {
    	return $this->hasMany('App\Amenity','property_id','property_id');
    }
     public function propertyimages()
    {
    	return $this->hasMany('App\PropertyImages','property_id','property_id');
    }
}
