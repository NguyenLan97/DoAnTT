<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\News;
use App\Models\Contact;
use DB;

class FrontendController extends Controller
{
    //
    public function getHome(){
    	$data['featured'] = Product::where('prod_featured',1)->orderBy('prod_id','desc')->take(6)->get();
    	return view('frontend.index',$data);
    }

    public function getDetail($id){
    	$data['productlist'] = DB::table('product')->join('category','product.prod_cate','=','category.cate_id')->orderBy('prod_id','desc')->get();
    	$data['item'] = Product::find($id);
    	return view('frontend.single',$data);
    }

    public function getCategory($id){
    	$data['items'] = Product::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(8);
    	$data['new'] = Product::where('prod_new',1)->orderBy('prod_id','desc')->take(6)->get();
    	return view('frontend.products',$data);
    }

    public function getSearch(Request $request){
    	$result = $request->result;
    	$data['keyword'] = $result;
    	$result = str_replace(' ', '%', $result);
    	$data['items'] = Product::where('prod_name','like','%'.$result.'%')->get();  
    	return view('frontend.search',$data);
    }

    public function getAbout(){
    	return view('frontend.about');
    }

    public function getNews(){
    	$data['news'] = News::orderBy('news_id','desc')->take(6)->get();
    	return view('frontend.news',$data);
    }

    public function getMail(){
    	return view('frontend.mail');
    } 

    public function postMail(Request $request){
    	$contact = new Contact;
    	$contact->contact_name = $request->contact_name;
    	$contact->contact_email = $request->contact_email;
    	$contact->contact_subject = $request->contact_subject;
    	$contact->contact_message = $request->contact_message;
    	$contact->save();
    	return back();
    }
}
