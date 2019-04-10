<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CategoryController extends Controller
{
    //
    public function getCate(){
    	$data['catelist'] = Category::all();
    	return view('backend.cate_list',$data);
    }

    public function getAddCate(){
    	return view('backend.cate_add');
    }

    public function postAddCate(AddCateRequest $request){
    	$category = new Category;
    	$category->cate_name = $request->cate_name;
    	$category->cate_slug = str_slug($request->cate_name);
    	$category->save(); 
    	return redirect()->intended('admin/category')->with('sucess','Bạn đã thêm danh mục sản phẩm thành công');
    	
    }

    public function getEditCate($id){

    	$data['cate'] = Category::find($id);
    	return view('backend.cate_edit',$data);
    }

    public function possEditCate(EditCateRequest $request, $id){
    	$category = Category::find($id);
    	$category->cate_name = $request->cate_name;
    	$category->cate_slug = str_slug($request->cate_name);
    	$category->save(); 
    	return redirect()->intended('admin/category')->with('sucess','Bạn đã thêm danh mục sản phẩm thành công');
    }

    public function getDeleteCate($id){
    	Category::destroy($id);
    	return back();
    }
}
