<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Bill;

class BillController extends Controller
{
    //
    public function getBill(){
    	return view('backend.donhang');
    }

    public function postBill(Request $request){
    	$users = new Users;
    	$users->address = $request->add;
    	$users->phone = $request->phone;

    	$bill = new Bill;
    	$bill->bill_userid = $users->id;
    	$bill
    }
}
