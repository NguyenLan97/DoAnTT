<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;
use Cart;
use App\Models\Product;
use App\Models\Bill;
use App\Models\BillDetails;
use Mail;

class CartController extends Controller
{
    //
    public function getAddCart($id){
    	$product = Product::find($id);
   		Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price_promotion, 'options' => ['img' => $product->prod_img]]);
   		return redirect('cart/show');
    }

    public function getShowCart(){
    	$data['total'] = Cart::total();
    	$data['items'] = Cart::content();
    	return view('frontend.checkout',$data);
    }

    public function getDeleteCart($id){
    	if($id=='all'){
    		Cart::destroy();
    	}
    	else{
    		Cart::remove($id);
    	}
    	return back();
    }

    public function getUpdateCart(Request $request){
    	Cart::update($request->rowId,$request->qty);
    }

    public function postComplete(Request $request){
    	$data['info'] = $request->all();
    	$email = $request->email;
    	$data['total'] = Cart::total();
    	$data['cart'] = Cart::content();
    	Mail::send('frontend.email', $data, function($message) use ($email){
    		$message->from('www.nguyenlan220897@gmail.com','Nguyễn Lan');
    		$message->to($email, $email);
    		$message->cc('nguyenbau61197@gmail.com', 'Nguyễn Báu');
    		$message->subject('Xác nhận hóa đơn mua hàng Kitchen Art');
    	});
    	return redirect('complete');
    }


    /**
     * Validate thong tin cua nguoi nhan
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorCartInfo(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'add' => 'required|string|max:255',
        ]);
    }

    public function buyComplete(Request $request){

    	//validate input
		$this->validatorCartInfo($request->all())->validate();

    	$name = $request->get('name', '');
    	$phone = $request->get('phone', '');
    	$address = $request->get('add', '');
    
        DB::beginTransaction();
        
        try{
    	    $bill = new Bill();
            $bill->bill_userid = Auth::user()->id;
            $bill->bill_fullname = $name;
            $bill->bill_phone = $phone;
            $bill->bill_address = $address;
            $bill->bill_price = Cart::total(0, '', '');
            $bill->bill_status = 0;
            $bill->save();
    
            $billId = $bill->bill_id;
    
            $cartItems = Cart::content();
    
            foreach ($cartItems as $cartItem) {
                $billDetail = new BillDetails();
                $billDetail->bill_id = $billId;
                $billDetail->prod_id = (int) $cartItem->id;
                $billDetail->prod_price = $cartItem->price;
                $billDetail->prod_quantity = $cartItem->qty;
    
                $billDetail->save();
            }
            
            Cart::destroy();
            
            DB::commit();
            
            return redirect('complete');
        
        } catch (\Exception $ex){
    
            DB::rollBack();
            return redirect('notComplete');
        }

    	
    }

    public function getComplete(){
    	return view('frontend.complete');
    }

}
