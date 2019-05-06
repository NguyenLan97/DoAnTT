<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function getContact(){
    	$data['contactlist'] = Contact::all();
    	return view('backend.lienhe',$data);
    }

    public function getDeleteContact($id){
    	Contact::destroy($id);
    	return back();
    }
}
