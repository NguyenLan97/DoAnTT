<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
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
    	return view('frontend.news');
    }

    public function getMail(){
    	return view('frontend.mail');
    } 
}
