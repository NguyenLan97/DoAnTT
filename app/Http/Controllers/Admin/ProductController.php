<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Category;
use DB;

class ProductController extends Controller
{
    //
    public function getProduct(){
    	$data['productlist'] = DB::table('product')->join('category','product.prod_cate','=','category.cate_id')->orderBy('prod_id','desc')->get();
    	return view('backend.list_product',$data);
    }

    public function getAddProduct(){
    	$data['catelist'] = Category::all();
    	return view('backend.add_product',$data);
    }

    public function postAddProduct( AddProductRequest $request){
    	$filename = $request->img->getClientOriginalName();
    	$product = new Product;
    	$product->prod_name = $request->prod_name;
    	$product->prod_slug = str_slug($request->prod_name);
    	$product->prod_img = $filename;
    	$product->prod_price = $request->prod_price;
    	$product->prod_price_promotion = $request->prod_price_promotion;
    	$product->prod_warranty = $request->prod_warranty;
    	$product->prod_material = $request->prod_material;
    	$product->prod_capacity = $request->prod_capacity;
    	$product->prod_producer = $request->prod_producer;
    	$product->prod_cap_type = $request->prod_cap_type;
    	$product->prod_pot_type = $request->prod_pot_type;
    	$product->prod_status = $request->prod_status;
    	$product->prod_description = $request->prod_description;
    	$product->prod_cate = $request->prod_cate;
    	$product->prod_featured = $request->prod_featured;
    	$product->prod_new = $request->prod_new;
    	$product->save();
    	$request->img->storeAs('images',$filename);
    	return redirect()->intended('admin/product')->with('sucess','Bạn đã thêm danh mục sản phẩm thành công');
    }


    public function getEditProduct($id){
    	$data['product'] = Product::find($id);
    	$data['listcate'] = Category::all();
    	return view('backend.edit_product',$data);
    }

    public function possEditProduct(Request $request, $id){
    	$product = new Product;
    	$arr['prod_name'] = $request->prod_name;
    	$arr['prod_slug'] = str_slug($request->prod_name);
    	$arr['prod_price'] =  $request->prod_price;
    	$arr['prod_price_promotion'] =  $request->prod_price_promotion;
    	$arr['prod_warranty'] = $request->prod_warranty;
    	$arr['prod_material'] = $request->prod_material;
    	$arr['prod_capacity'] = $request->prod_capacity;
    	$arr['prod_producer'] = $request->prod_producer;
    	$arr['prod_cap_type'] = $request->prod_cap_type;
    	$arr['prod_pot_type'] = $request->prod_pot_type;
    	$arr['prod_status'] = $request->prod_status;
    	$arr['prod_description'] = $request->prod_description;
    	$arr['prod_cate'] = $request->prod_cate;
    	$arr['prod_featured'] = $request->prod_featured;
    	$arr['prod_new'] = $request->prod_new;
    	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['prod_img'] = $img;
    		$request->img->storeAs('images'.$img);
    	}
    	$product::where('prod_id',$id)->update($arr);
    	return redirect('admin/product');

    }

    public function getDeleteProduct($id){
    	Product::destroy($id);
    	return back();
    }
}
