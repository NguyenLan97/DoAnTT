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
        $callback = $request->get('callback') ? $request->get('callback') : '/';
        return view('frontend.login', compact('callback'));
    }
    
    /**
     * Hiển thị form login
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(Request $request){
        $callback = $request->get('callback') ? $request->get('callback') : '/';
    	return view('frontend.login', compact('callback'));
    }

    public function register(){
        return view('frontend.register');
    }




}
