<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewsRequest;
use App\Models\News;
use DB;

class NewsController extends Controller
{
    //
    public function getNews(){
    	$data['newslist'] = News::all();
    	return view('backend.list_news',$data);
    }

    public function getAddNews(){
    	return view('backend.add_news');
    }

    public function postAddNews(AddNewsRequest $request){
    	$filename = $request->img->getClientOriginalName();
    	$news = new News;
    	$news->news_title = $request->news_title;
    	$news->news_content = $request->news_content;
    	$news->news_image = $filename;
    	$news->save(); 
    	$request->img->storeAs('images',$filename);
    	return redirect()->intended('admin/news')->with('sucess','Bạn đã thêm tin tức thành công');
    }

    public function getEditNews($id){ 
    	$data['news'] = News::find($id);
    	return view('backend.edit_news',$data);
    }

    public function postEditNews(Request $request,$id){
    	$news =  new News;
    	$arr['news_title'] =  $request->news_title;
    	$arr['news_content'] =  $request->news_content;
       	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['news_image'] = $img;
    		$request->img->storeAs('images'.$img);
    	}
    	$news::where('news_id',$id)->update($arr);
    	return redirect('admin/news'); 
    }

    public function getDeleteNews($id){
    	News::destroy($id);
    	return back();
    }
}
