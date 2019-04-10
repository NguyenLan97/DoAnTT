<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function getNews(){
    	return view('backend.list_news');
    }

    public function getAddNews(){
    	return view('backend.add_news');
    }

    public function getEditNews(){
    	return view('backend.edit_news');
    }
}
