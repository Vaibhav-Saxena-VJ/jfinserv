<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Bank;
use Auth;

class BankController extends Controller
{
    public function getInactiveBank(Request $request){
		$bank_id=$request->id;
		$bank=Bank::find($bank_id);
		if($bank!=""){
			$bank->is_active=1;
		}
		$bank->save();
		return redirect('admin/bank/all');
	}

	public function getActiveBank(Request $request){
		$bank_id=$request->id;
		$bank=Bank::find($bank_id);
		if($bank!=""){
			$bank->is_active=1;
		}
		$bank->save();
		return redirect('admin/bank/all');
	}
    public function getAllBank(){
    	// $bank=Bank::get();
    	// echo $bank;die();
		return view('admin.bank.all');
	}

	public function getAllBankData(Request $request){
		$bank=Bank::where('is_active',0)->get();
		return DataTables::of($bank)->make(true);
	}

	public function getAddBank(){
		return view('admin.bank.add');
	}
	public function postAddBank (Request $request)
	{	

		$bank =new Bank();
		$bank->bank_name=$request->bank_name;
		$bank->is_active=0;
		$bank_image=$request->bank_image;

		if(Input::hasFile('bank_image')){
			$bankImage = $request->bank_image;
			$path = $bankImage->store('bank');
			$bank->bank_image=$path;
		}

		$bank->save();

		$notification = array(
			'message' => 'Bank Added Successfully!', 
			'alert-type' => 'success'
		);

		return redirect('admin/bank/all')->with($notification);
	}

	public function getEditBank(Request $request){
		$bank_id=$request->id;
		$bank=Bank::find($bank_id);
		return view('admin.bank.edit')->with('bank',$bank);
	}

	public function postEditBank(Request $request,$id){


		$bank_id=$id;
		$bank=Bank::find($bank_id);
		$bank->bank_name=$request->bank_name;
		
		if(Input::hasFile('bank_image')){
			$bankImage = $request->bank_image;
			$path = $bankImage->store('bank');
			$bank->bank_image=$path;
		}
		
		$bank->save();

		$notification = array(
			'message' => 'Bank Updated Successfully!', 
			'alert-type' => 'success'
		);

		return redirect('admin/bank/all')->with($notification);
	}

}
