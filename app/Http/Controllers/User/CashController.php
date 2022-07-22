<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Str;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; 

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

use Illuminate\Support\Facades\DB;

class CashController extends Controller
{
      
     public function CashOrder(Request $request){
		$total_amount = round( $request->total_amount ?? $request->cartTotal)  ;

    	// if (Session::has('coupon')) {
    	// 	$total_amount = round(Session::get('coupon')['total_amount']);
    	// }else{
		// 	$dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
			 
	
		// if($dealer->count() == 0){      
		// 		$cartbeforedis =Cart::priceTotal();
			
		// 		// $total_amount = Cart::total() + Cart::count()*60;
		// 		$total_amount = round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  );

		// 	}else{ 
		// 		$cartbeforedis =Cart::priceTotal() * 0.5;
		// 		$tax =Cart::tax(); 
		// $delivery=  Cart::count()* 60; 
		// 		// $total_amount = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::count()* 60  ;
		// 		$total_amount = round(Cart::priceTotal() * 0.5 + Cart::tax()+ Cart::count()* 60)  ;
		// 	}
    	// }
 
	 

	  // dd($charge);

     $order_id = Order::insertGetId([
     	'user_id' => Auth::id(),
     	'division_id' => $request->division_id,
     	'district_id' => $request->district_id,
     	'state_id' => $request->state_id,
     	'name' => $request->name,
     	'email' => $request->email,
     	'phone' => $request->phone,
		'shipping_address' =>$request->shipping_address,
     	'post_code' => $request->post_code,
     	'notes' => $request->notes,

     	'payment_type' => 'COD',
     	'payment_method' => 'COD',
		 'transaction_id' => ' ',
		 'sign_id' =>  '', 
        'payment_status' => 'Not Paid', 
     	'currency' =>  '₹',
     	'amount' => $total_amount,
     	 
		 'amount_before'=> $request->cartbeforedis,
		 'coupon_discount'=> $request->discount_amount,
		 'tax'=> $request->carttax,
		 'delivery'=> $request->delivery,
		 'amount' => $total_amount,
		//  'order_number' => NXCASH.Str::random(20),
		  'order_number' =>  'NXORDERCASH'.uniqid(),
     	'invoice_no' => 'NX'.mt_rand(10000000,99999999),
     	'order_date' => Carbon::now()->format('d F Y'),
     	'order_month' => Carbon::now()->format('F'),
     	'order_year' => Carbon::now()->format('Y'),
     	'status' => 'pending',
     	'created_at' => Carbon::now(),	
		 'payment_id' => '',
        'transaction_id' =>  '',
		 
		'sign_id' =>  '', 
		  
		'payment_captured'=> '',
		'vpa'=>'',
		'rrn_no'=>  '',
		'card_id' => '' ,
		'token_id' =>  '',
		'bank' => '',
		'wallet'=>'', 
                // 'updated_at' => Carbon::now(), 
		 
		  
    
                          

     ]);

     // Start Send Email 
     $invoice = Order::findOrFail($order_id);
     	$data = [
     		'invoice_no' => $invoice->invoice_no,
     		'amount' => $total_amount,
     		'name' => $invoice->name,
     	    'email' => $invoice->email,
     	    
     	];

     	Mail::to($request->email)->send(new OrderMail($data));

     // End Send Email 


     $carts = Cart::content();

	//  $dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id());
	//  // dd($dealer->dealer);
	//  if($dealer == null || $dealer->dealer== 0){  
	// 		 if (Session::has('coupon')) {
	// 				 return response()->json(array(
	// 					 'ptotal' => Cart::priceTotal(),
	// 					 'tax'=> Cart::tax(),
	// 					 'delivery'=> Cart::count() * 60,
	// 				 'subtotal' => Cart::total(),
	// 				 'coupon_name' => session()->get('coupon')['coupon_name'],
	// 				 'coupon_discount' => session()->get('coupon')['coupon_discount'],
	// 				 'discount_amount' => session()->get('coupon')['discount_amount'],
	// 				 'total_amount' => round(session()->get('coupon')['total_amount']),
	// 			 ));
	// 			 foreach ($carts as $cart) {
		
	// 				OrderItem::insert([
	// 					'order_id' => $order_id, 
	// 					'product_id' => $cart->id,
	// 					'color' => $cart->options->color,
	// 					'size' => $cart->options->size,
	// 					'qty' => $cart->qty,
	// 					'price' => $cart->price,
	// 					'price' => $cart->price,
	// 					'created_at' => Carbon::now(),
		   
	// 				]);
	// 		 }
	// 		 else{
	// 				 return response()->json(array(
	// 				 //    'total' => Cart::total() ,
	// 				 'subtotal' => Cart::priceTotal(),
	// 					 'ptotal' => Cart::priceTotal(),
	// 					 'tax'=> Cart::tax(),
	// 					 'delivery'=> Cart::count() * 60,
	// 					 // 'subtotal' => Cart::total(),
	// 					 'total' => round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60   ) , 
	// 					 // 'total' => round('ptotal'+ 'tax' + 'delivery'  ) , 
	// 				 ));  

	// 		 }
	// 	 // }elseif($dealer->dealer== 0){ 
	// 	 //     return response()->json(array(
	// 	 //         'ptotal' => Cart::priceTotal(),
	// 	 //         'tax'=> Cart::tax(),
	// 	 //         'delivery'=> Cart::count() * 60,
	// 	 //        'subtotal' => Cart::total(),
	// 	 //        'coupon_name' => session()->get('coupon')['coupon_name'],
	// 	 //        'coupon_discount' => session()->get('coupon')['coupon_discount'],
	// 	 //        'discount_amount' => session()->get('coupon')['discount_amount'],
	// 	 //        'total_amount' => round(session()->get('coupon')['total_amount']),
	// 	 //    ));
	//  }elseif($dealer->dealer== 1){
	// 		 if (Session::has('coupon')) {
	// 			 Session::forget('coupon');}
	// 			 return response()->json(array(
	// 				 //    'total' => Cart::total() ,
	// 					 'subtotal' => Cart::priceTotal(),
	// 					 'ptotal' => Cart::priceTotal() * 0.7,
	// 					 'tax'=> Cart::tax(),
	// 					 'delivery'=> Cart::count() * 60,
	// 					 'total' => round(Cart::priceTotal() * 0.7+ Cart::tax() + Cart::count()* 60  ) , 
	// 					 //  'total' => round('ptotal'+ 'tax' + 'delivery'  ) ,  
	// 				 ));  
	// 		 // }

	//  }else{
	// 		 if (Session::has('coupon')) {
	// 			 Session::forget('coupon');}
	// 			 return response()->json(array(
	// 				 //    'total' => Cart::total() ,
	// 					 'subtotal' => Cart::priceTotal(),
	// 					 'ptotal' => Cart::priceTotal() * 0.5,
	// 					 'tax'=> Cart::tax(),
	// 					 'delivery'=> Cart::count() * 60,
	// 					 'total' => round(Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60   ) , 
	// 					 // 'total' => round('ptotal'+ 'tax' + 'delivery'  ) , 
	// 				 )); 
	// 		 // }

	// 	 }

		 
     foreach ($carts as $cart) {
		
     	OrderItem::insert([
     		'order_id' => $order_id, 
     		'product_id' => $cart->id,
     		'color' => $cart->options->color,
     		'size' => $cart->options->size,
     		'qty' => $cart->qty,
     		'price' => $cart->price,
     		'created_at' => Carbon::now(),

     	]);
     }


     if (Session::has('coupon')) {
     	Session::forget('coupon');
     }

     Cart::destroy();

     $notification = array(
			'message' => ' Order Placed Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('Thankyou.page')->with($notification);
 

    } // end method 





}
 