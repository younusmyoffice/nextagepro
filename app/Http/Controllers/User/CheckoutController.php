<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Illuminate\Support\Facades\Session;

use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    //

    public function DistrictGetAjax($division_id){

    	$ship = ShipDistrict::where('division_id',$division_id)->orderBy('district_name','ASC')->get();
    	return json_encode($ship);

    } // end method 


     public function StateGetAjax($district_id){

    	$ship = ShipState::where('district_id',$district_id)->orderBy('state_name','ASC')->get();
    	return json_encode($ship);

    } // end method 


    public function CheckoutStore(Request $request){
    	// dd($request->all());
    	$data = array();
    	$data['shipping_name'] = $request->shipping_name;
    	$data['shipping_email'] = $request->shipping_email;
    	$data['shipping_phone'] = $request->shipping_phone;
		$data['shipping_address'] = $request->shipping_address; 
    	$data['post_code'] = $request->post_code;
    	$data['division_id'] = $request->division_id;
    	$data['district_id'] = $request->district_id;
    	$data['state_id'] = $request->state_id;
    	$data['notes'] = $request->notes; 
		$data['cartbeforedis'] = $request->cartbeforedis; 
		$data['coupon_discount'] = $request->coupon_discount; 
		$data['discount_amount'] = $request->discount_amount; 
		$data['carttax'] = $request->carttax; 
		$data['delivery'] = $request->delivery; 
		$data['total_amount'] = $request->total_amount; 
		$data['cartTotal'] = $request->cartTotal; 
		
		// $tax =Cart::tax(); 
		// $delivery=  Cart::count()*60;
		// method can be used to get the total price of all items in the cart before applying discount and taxes.
	

		// if (Session::has('coupon')) {
    	// 	$cartTotal = round(Session::get('coupon')['total_amount']);
    	// }else{
		// 	$dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
	
		// if($dealer->count() == 0){      
		// 		$cartbeforedis =Cart::priceTotal();
			
		// 		// $total_amount = Cart::total() + Cart::count()*60;
		// 		$cartTotal = round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  );

		// 	}else{ 
		// 		$cartbeforedis =Cart::priceTotal() * 0.5;
		// 		$tax =Cart::tax(); 
		// $delivery=  Cart::count()* 60; 
		// 		// $total_amount = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::count()* 60  ;
		// 		$cartTotal = round(Cart::priceTotal() * 0.5 + Cart::tax()+ Cart::count()* 60)  ;
		// 	}
    	// }
 
			// $order_number= 'NXORDER'.uniqid();
			// Session::put('amount', $cartTotal * 100);
			// Session::put('order_id', $order_number); 
			 
			
    	if ($request->payment_method == 'stripe') {
    		return view('frontend.payment.stripe',compact('data'));
			// return view('frontend.payment.stripe',compact('data','carttotal'));
    	// }elseif ($request->payment_method == 'card') {
    	// 	return 'card';
		}elseif ($request->payment_method == 'razorpay') {
    		return view('frontend.payment.razorpay',compact('data'));
			// return view('frontend.payment.razorpay',compact('data','carttotal'));
    	}else{
            return view('frontend.payment.cash',compact('data'));
			// return view('frontend.payment.cash',compact('data','carttotal'));
    	}
    	 

    }// end mehtod. 

}
