<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
// use Auth;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StripeController extends Controller
{

    public function StripeOrder(Request $request){

		// $input = $request->all();
    
		//  dd($input);

    	if (Session::has('coupon')) {
    		$total_amount = round(Session::get('coupon')['total_amount']);
    	}else{
    		// $total_amount = round(Cart::total());

			$carttax =Cart::tax(); 
			$delivery=  Cart::count() * 60;
		// method can be used to get the total price of all items in the cart before applying discount and taxes.
	
				$dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
			
				if($dealer->count() == 0){      
						$cartbeforedis =Cart::priceTotal(); 
						// $total_amount = Cart::total() + Cart::count()*60;

						$total_amount = round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  );


					}else{ 
						$cartbeforedis =Cart::priceTotal() * 0.5; 
						// $total_amount = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::count()* 60  ;
						$tax =Cart::tax(); 
						$delivery=  Cart::count()* 60; 
						$total_amount = round(Cart::priceTotal() * 0.5 + Cart::tax()+ Cart::count()* 60)  ;



			}


    	}
 

// 2022
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('sk_test_51JSIZdSAWaZvksqSY8BTP63bWgpRRkqglFSXdiQJjP6vPu1WfMkHK97EPsGKdXOvO9UhI0gBB0f5lx8sKeYveKJH00wWCVBjfv');

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

$charge = \Stripe\Charge::create([
//   'amount' => $total_amount*100,
'amount' => $total_amount,
  'currency' => 'inr',
  'description' => 'Nextage Nutrition',
  'source' => $token,
  'metadata' => ['order_id' => uniqid()],
]);
// 2022






	// \Stripe\Stripe::setApiKey('sk_test_51JSIZdSAWaZvksqSY8BTP63bWgpRRkqglFSXdiQJjP6vPu1WfMkHK97EPsGKdXOvO9UhI0gBB0f5lx8sKeYveKJH00wWCVBjfv');

	 
	// $token = $_POST['stripeToken'];
	// $charge = \Stripe\Charge::create([
	//   'amount' => $total_amount*100,
	//   'currency' => 'usd',
	//   'description' => 'Nextage Nutrition',
	//   'source' => $token,
	//   'metadata' => ['order_id' => uniqid()],
	// ]);

	//   dd($charge);

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

     	'payment_type' => 'Stripe',
     	'payment_method' => 'Stripe',
     	'payment_type' => $charge->payment_method,
     	'transaction_id' => $charge->balance_transaction,
     	'currency' => $charge->currency,
     	'amount' => $charge->amount,
		//  'amount' => $total_amount,
     	'order_number' => $charge->metadata->order_id,

     	'invoice_no' => 'NX'.mt_rand(10000000,99999999),
     	'order_date' => Carbon::now()->format('d F Y'),
     	'order_month' => Carbon::now()->format('F'),
     	'order_year' => Carbon::now()->format('Y'),
     	'status' => 'pending',
     	'created_at' => Carbon::now(),	 

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
			'message' => 'Your Order Place Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('Thankyou.page')->with($notification);
 

    } // end method 




 

}
