<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Bill;
use App\Models\BillDetails;
use DB;

class BillController extends Controller
{
    //
    public function getBill(){
    	$data['billlist'] = Bill::all();
    	$data['detail_list'] = BillDetails::all();
    	//$data['detail_list'] = DB::table('bill_details')->join('product','bill_details.prod_id','=','product.prod_id')->get(); 
    	return view('backend.donhang', $data);
    }
    public function getDeleteBill($id){
    	Bill::destroy($id);
    	return back();
    }

    public function getStatus($id, Request $request){
    	$order = Bill::where('id',$id)->frist();
    	$order->bill_status = $request->input(key.'bill_status');
    	$order->update();
    }
}
