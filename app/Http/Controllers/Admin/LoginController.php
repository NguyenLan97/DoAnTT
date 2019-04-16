<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('backend.login');
    }

    public function postLogin(Request $request){
    	if($request->remember = "Remember Me"){
    		$remember = true;
    	}else{
    		$remember = false;
    	}
        $userRequest = [
            'email'=>$request->email,
            'password'=> $request->password,
            'is_admin' => 1
        ];

    	if(Auth::attempt($userRequest, $remember)){
    		return redirect()->intended('admin/home');
    	}else{
    		return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng');
    	}

    }
}
