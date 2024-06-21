<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\CommissionMaster;

use Auth;
class CommissionController extends Controller
{
    public function getAllCommission(Request $request)
    {
        return view('admin.commission.all');
    }
    public function getAllCommissionData(Request $request)
    {

        $commission=CommissionMaster::get();
        return DataTables::of($commission)->make(true);
    }
    public function getEditCommission(Request $request)
    {
        $commission_id=$request->id;
        $commissionmaster=CommissionMaster::find($commission_id);
        return view('admin.commission.edit')->with('commissionmaster',$commissionmaster);
    }
    public function postEditCommission(Request $request,$id){
        $commission_id=$id;
        $commission_percent=$request->commission_percent;
        $commissionmaster=CommissionMaster::find($commission_id);
        $commissionmaster->commission_percent=$commission_percent;
        $commissionmaster->save();
        $notification = array(
            'message' => 'Commission Updated Successfully!', 
            'alert-type' => 'success'
        );

        return redirect('admin/commission/all')->with($notification);

    }
}
