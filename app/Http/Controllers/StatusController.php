<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Status;
use Auth;


class StatusController extends Controller
{
     public function getAllStatus(){
		return view('admin.status.all');
	}

	public function getAllStatusData(Request $request){
		$status=Status::get();
		return DataTables::of($status)->make(true);
	}
	public function getAddStatus(){
		return view('admin.status.add');
	}
	public function postAddStatus (Request $request)
	{	

		$status =new Status();
		$status->status_name=$request->status_name;
		
		$status->save();

		$notification = array(
			'message' => 'Status Added Successfully!', 
			'alert-type' => 'success'
		);

		return redirect('admin/status/all')->with($notification);
	}
	public function getEditStatus(Request $request){
		$status_id=$request->id;
		$status=Status::find($status_id);
		return view('admin.status.edit')->with('status',$status);
	}

	public function postEditStatus(Request $request,$id){


		$status_id=$id;
		$status=Status::find($status_id);
		$status->status_name=$request->status_name;
		
		$status->save();

		$notification = array(
			'message' => 'Status Updated Successfully!', 
			'alert-type' => 'success'
		);

		return redirect('admin/status/all')->with($notification);
	}
}
