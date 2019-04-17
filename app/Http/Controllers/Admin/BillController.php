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
    	$data['billlist'] = Bill::all();
    	return view('backend.donhang', $data);
    }
}
