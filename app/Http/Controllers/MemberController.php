<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class MemberController extends Controller
{
    /**
     * Hiển thị member Dashbroad
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function member(Request $request){
        
        if(Auth::check()){
            return view('member.mypage');
        }
        
        return view('frontend.login');
    }
    
    /**
     * Hiển thị form login
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(){
    	return view('frontend.login');
    }
    
    public function register(){
        return view('frontend.register');
    }
    
    


}
