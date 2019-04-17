<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function getUser(){
    	return view('backend.list_user');
    }

    public function getAddUser(){
    	return view('backend.add_user');
    }

    public function getEditUser(){
    	return view('backend.edit_user');
    }
}
