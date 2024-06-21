<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Mis;
use Auth;

class MisController extends Controller
{
    public function getAllMis(Request $request){
		
		return view('admin.mis.all');
	}
	public function getAllMisData(Request $request){
		
		$mis=Mis::all();
		return DataTables::of($mis)->make(true);
	}
	public function getAddMis(Request $request)
	{
		return view('admin.mis.add');
	}
	public function postAddMis(Request $request)
	{ 
		$mis =new Mis();
		$mis->customer_name=$request->customer_name;
		$mis->customer_residence=$request->customer_residence;
		$mis->office_shop_add=$request->office_shop_add;
		$mis->contact_no=$request->contact_no;
		$mis->email=$request->email;
		$mis->required_loan=$request->required_loan;
		$mis->product=$request->product;
		$mis->bank_nbfc_name=$request->bank_nbfc_name;
		$mis->property_details=$request->property_details;
		$mis->city=$request->city;
		$mis->state=$request->state;
		$mis->pincode=$request->pincode;
		$mis->remarks=$request->remarks;
		$mis->save();

		$notification = array(
			'message' => 'MIS Data Added Successfully!', 
			'alert-type' => 'success'
		);

		return view('admin.mis.all')->with($notification);
	}
	public function getEditMis(Request $request){
		$sr_id=$request->id;
		$mis=Mis::find($sr_id);
		return view('admin.mis.edit')->with('mis',$mis)->with('sr_id',$sr_id);
	}
	public function postEditMis(Request $request,$id){


		$sr_id=$id;
		$mis=Mis::find($sr_id);
		$mis->customer_name=$request->customer_name;
		$mis->customer_residence=$request->customer_residence;
		$mis->office_shop_add=$request->office_shop_add;
		$mis->contact_no=$request->contact_no;
		$mis->email=$request->email;
		$mis->required_loan=$request->required_loan;
		$mis->product=$request->product;
		$mis->bank_nbfc_name=$request->bank_nbfc_name;
		$mis->property_details=$request->property_details;
		$mis->city=$request->city;
		$mis->state=$request->state;
		$mis->pincode=$request->pincode;
		$mis->remarks=$request->remarks;
		$mis->save();

		$notification = array(
			'message' => 'Mis Updated Successfully!', 
			'alert-type' => 'success'
		);

		return view('admin.mis.all')->with($notification);
	}

}
