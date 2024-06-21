<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Blog;
use App\BlogType;
use Auth;
use App\Property;
use App\Amenity;
use App\PropertyImages;
class PropertyController extends Controller
{


	// Image Remove
    public function postDeleteImage(Request $request)
    {
        $property_image_id=$request->id;
        $image = PropertyImages::find($property_image_id);
        unlink("storage/app/".$image->property_image);
        $images=PropertyImages::where('property_image_id',$property_image_id)->delete();
        return redirect()->back();

    }

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

		if(Input::hasFile('property_pdf')){
			$blogImage = $request->property_pdf;
			$path = $blogImage->store('property_pdf');
			$blog->property_pdf=$path;
		}
		$blog->contact_number=$request->contact_number;
		$blog->email=$request->email;
		$blog->save();
		$property_id=$blog->property_id;
        
        if($request->property_image!='[]' && $request->property_image!=''){

		$img_count = count($request->property_image);

        for ($i=0; $i < $img_count; $i++) { 

            $image= new PropertyImages();
             
            $image->property_id=$property_id;
            
            if(Input::hasFile('property_image')){
                $eventImage = $request->property_image[$i];
                $path = $eventImage->store('property_image');
                $image->property_image=$path;
            }

            $image->save();

        }
        }


		$amenities_name = $request->amenities_name;
      	if($amenities_name!='[]' && $amenities_name!=''){
    		$img_count = count($amenities_name);    
        	for ($i=0; $i < $img_count; $i++) { 

            $amenities=new Amenity();
             
            $amenities->property_id=$property_id;            
            $amenities->amenities_name=$request->amenities_name[$i];

            $amenities->save();
        }
      }


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

	public function postDeleteAmenity(Request $request)
	{
		$amenities_id=$request->id;
        $amenities = Amenity::where('amenities_id',$amenities_id)->delete();
        
        return redirect()->back();
	}

	public function getEditProperty(Request $request){
		$property_id=$request->id;
		$property=Property::where('property_id',$property_id)->with('getamenities')->with('propertyimages')->first();
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

		if(Input::hasFile('property_pdf')){
			$blogImage = $request->property_pdf;
			$path = $blogImage->store('property_pdf');
			$blog->property_pdf=$path;
		}
		$blog->contact_number=$request->contact_number;
		$blog->email=$request->email;
		$blog->save();

		$property_image=$request->property_image;
		if($property_image!=''){

		$img_count = count($request->property_image);

            //$flagship_image=FlagshipImage::where('flagship_id', $flagship_id)->delete();

            for ($i=0; $i < $img_count; $i++) { 

                $image= new PropertyImages(); 
                $image->property_id=$blog_id;
                
                if(Input::hasFile('property_image')){
                    $eventImage = $request->property_image[$i];
                    $path = $eventImage->store('property_image');
                    $image->property_image=$path;
                }

                $image->save();

            }
        }

		$amenity=Amenity::where('property_id',$blog_id)->delete();
		$amenities_name = $request->amenities_name;
      		if($amenities_name!='[]' && $amenities_name!=''){
    		$img_count = count($amenities_name);    
        	for ($i=0; $i < $img_count; $i++) { 

            $amenities=new Amenity();
             
            $amenities->property_id=$blog_id;            
            $amenities->amenities_name=$request->amenities_name[$i];

            $amenities->save();
        }
      }

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
