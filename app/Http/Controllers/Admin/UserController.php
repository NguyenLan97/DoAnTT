<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\AddUserRequest;

class UserController extends Controller
{
    //
    public function getUser(){
    	$data['userlist'] = User::all();
    	return view('backend.list_user',$data);
    }

    public function getAddUser(){
    	return view('backend.add_user');
    }

    public function postAddUser(AddUserRequest $request){
    	$user = new User;
    	$user->email = $request->email;
    	$user->full_name = $request->full_name;
    	$user->address = $request->address;
    	$user->phone = $request->phone;
    	$user->is_admin = $request->is_admin;
    	$user->save(); 
    	return redirect()->intended('admin/user')->with('sucess','Bạn đã thêm thành công');
    }

    public function getEditUser(){
    	return view('backend.edit_user');
    }

    public function getDeleteUser($id){
    	User::destroy($id);
    	return back();
    }
}
