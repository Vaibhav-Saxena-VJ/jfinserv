<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Blog;
use App\BlogType;
use Auth;
use App\Property;
class PropertyController extends Controller
{
	public function getAddProperty(){
		$blog_types = BlogType::all();
		return view('admin.property.add')->with('blog_types',$blog_types);
	}
	public function postAddProperty (Request $request)
	{	


		
		$property_type=$request->property_type;
	
		$blog =new Property();
		$blog->property_type=$request->property_type;
		$blog->property_name=$request->property_name;
		$blog->builder_name=$request->builder_name;
		$blog->property_size=$request->property_size;
		$blog->property_description=$request->property_description;
		$blog->city=$request->city;
		$blog->location=$request->location;
		
		$blog->address=$request->address;
		$blog->localities=$request->localities;
		$blog->facilities=$request->facilities;
		$blog->from_property_price=$request->from_property_price;
		$blog->to_property_price=$request->to_property_price;

		if(Input::hasFile('property_image')){
			$blogImage = $request->property_image;
			$path = $blogImage->store('property_image');
			$blog->property_image=$path;
		}
		$blog->contact_number=$request->contact_number;
		$blog->email=$request->email;
		$blog->save();

		$notification = array(
			'message' => 'Property Added Successfully!', 
			'alert-type' => 'success'
		);

		return redirect('admin/property/all')->with($notification);
	}

	public function getAllProperty(){
		return view('admin.property.all');
	}

	public function getAllPropertyData(Request $request){
		$blog =Property::all();
		return DataTables::of($blog)->make(true);
	}

	public function getEditProperty(Request $request){
		$property_id=$request->id;
		$property=Property::find($property_id);
		return view('admin.property.edit')->with('property',$property);
	}

	public function postEditProperty(Request $request,$id){

		$blog_id=$id;
	
		$blog=Property::find($blog_id);
		$blog->property_type=$request->property_type;
		$blog->property_name=$request->property_name;
		$blog->builder_name=$request->builder_name;
		$blog->property_size=$request->property_size;
		$blog->property_description=$request->property_description;
		$blog->city=$request->city;
		$blog->location=$request->location;

		$blog->address=$request->address;
		$blog->localities=$request->localities;
		$blog->facilities=$request->facilities;
		$blog->from_property_price=$request->from_property_price;
		$blog->to_property_price=$request->to_property_price;

		if(Input::hasFile('property_image')){
			$blogImage = $request->property_image;
			$path = $blogImage->store('property_image');
			$blog->property_image=$path;
		}
		$blog->contact_number=$request->contact_number;
		$blog->email=$request->email;
		$blog->save();

		$notification = array(
			'message' => 'Property Updated Successfully!', 
			'alert-type' => 'success'
		);

		return redirect('admin/property/all')->with($notification);
	}

	public function getDeleteProperty(Request $request){
		$blog_id=$request->id;
		$blog=Property::find($blog_id);
		if($blog!=""){
			$blog->is_deleted=1;
		}
		$blog->save();
		return redirect('admin/property/all');
	}

	public function getActiveProperty(Request $request){
		$blog_id=$request->id;
		$blog=Property::find($blog_id);
		if($blog!=""){
			$blog->is_deleted=0;
		}
		$blog->save();
		return redirect('admin/property/all');
	}
}
