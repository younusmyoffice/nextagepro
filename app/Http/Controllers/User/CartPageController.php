<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;


class CartPageController extends Controller
{
    
    public function MyCart(){
        if (Cart::total() > 0) {
    	    return view('frontend.wishlist.view_mycart');
        }else{

            $notification = array(
            'message' => 'Shop At list One Product',
            'alert-type' => 'error'
        );

        return redirect()->to('/')->with($notification);

        }
    }


    public function GetCartProduct(){
        $carts = Cart::content();
    	$cartQty = Cart::count();
    	$cartTotal = Cart::total() ;

    	return response()->json(array(
    		'carts' => $carts,
    		'cartQty' => $cartQty,
    		'cartTotal' => $cartTotal ,
            // 'cartTotal' => round($cartTotal),

    	));

    } //end method 



    public function RemoveCartProduct($rowId){
        Cart::remove($rowId); 

        if (Session::has('coupon')) {
           Session::forget('coupon');
        }

        return response()->json(['success' => 'Successfully Remove From Cart']);
    }


 // Cart Increment 
    public function CartIncrement($rowId){
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);

        if (Session::has('coupon')) {

            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name',$coupon_name)->first();
            $cartpricebr=Cart::priceTotal();
            $tax= Cart::tax();
            $delivery= Cart::count() * 60;

           Session::put('coupon',[
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round($cartpricebr * $coupon->coupon_discount/100), 
                // 'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100), 
                // 'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100)  ,
                'total_amount' =>round($cartpricebr + $tax+ $delivery )
            ]);
        }
 

        return response()->json('increment');

    } // end mehtod 


   // Cart Decrement  
    public function CartDecrement($rowId){

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);

        if (Session::has('coupon')) {

            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name',$coupon_name)->first();
            $cartpricebr=Cart::priceTotal();
            $tax= Cart::tax();
            $delivery= Cart::count() * 60;
           Session::put('coupon',[
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round($cartpricebr * $coupon->coupon_discount/100), 
                // 'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100), 
                // 'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100), 
                'total_amount' =>round($cartpricebr + $tax + $delivery  ) 
            ]);
        }

        return response()->json('Decrement');

    }// end mehtod 



} 


