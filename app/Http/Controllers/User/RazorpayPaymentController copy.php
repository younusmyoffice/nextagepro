<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use DB;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use Exception;
class RazorpayPaymentController extends Controller
{
    //
    private $razorpayId = "env('RAZORPAY_KEY')";
    private $razorpayKey = "env('RAZORPAY_SECRET')";

    public function Razorpaypage(Request $request){
       
        // custom total
        if (Session::has('coupon')) {
            $cartTotal = Session::get('coupon')['total_amount'];
        }else{
                    // $total_amount = round(Cart::total());
            
                    // $carttax =Cart::tax(); 
                // $delivery=  Cart::count()*60;
                // method can be used to get the total price of all items in the cart before applying discount and taxes.
            
                $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
            
                if($dealer->count() == 0){      
                        $cartbeforedis =Cart::priceTotal(); 
                        // $total_amount = Cart::total() + Cart::count()*60;
            
                        $cartTotal = round(Cart::priceTotal() + Cart::tax() + Cart::count()* 0.01  );
            
            
                    }else{ 
                        $cartbeforedis =Cart::priceTotal() * 0.5; 
                        // $total_amount = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::count()* 60  ;
            
                        $cartTotal = round(Cart::priceTotal() * 0.5 + Cart::tax()+ Cart::count()* 0.01)  ;
            
            
            
                    }
    
            
        }
        // custom total
		// $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
	
		// if($dealer->count() == 0){      
		// 		$cartbeforedis =Cart::priceTotal();
		// 		// $tax =Cart::tax(); 
		// 		// $delivery=  Cart::count()* 60;
		// 		// $cartTotal = Cart::total() + Cart::total()* 0.01 ;
		// 		// $cartTotal = Cart::total() + Cart::count()*60;
		// 		$cartTotal = round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  );

		// 	}else{ 
		// 		$cartbeforedis =Cart::priceTotal() * 0.5;
		// 		// $cartTotal = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::total()* 0.01  ;
		// 		// $cartTotal = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::count()* 60  ;
		// 		$cartTotal = round(Cart::priceTotal() * 0.5 + Cart::tax()+ Cart::count()* 60)  ;
				
		// 	}


    	// if ($request->payment_method == 'stripe') {
    	// 	return view('frontend.payment.stripe',compact('data','cartTotal'));
    	// }elseif ($request->payment_method == 'card') {
    	// 	return 'card';
		// }elseif ($request->payment_method == 'razorpay') {
    	// 	return view('frontend.payment.razorpay',compact('data','cartTotal'));
    	// }else{
            // return view('frontend.payment.razorpaypage',compact('data','cartTotal'));
    	// }
        // $order_number= 'NXORDER'.uniqid();
        // Session::put('amount', $cartTotal * 100);
        // Session::put('order_id', $order_number); 
        return view('frontend.payment.razorpay',compact('cartTotal'));
    
    }

public function RazorpayOrder(Request $request){
    

    $input = $request->all();
   
    // $input =[
    //     'user_id' => '1',
    //     'product_id' => $request->product_id,
    //     'razorpay_payment_id' => $request->payment_id,
    //     'amount' => $request->total_amount,
    //  ];
    //  dd($input);
  
    $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    $receiptId= Str::random(20);
    $payment = $api->payment->fetch($input['razorpay_payment_id']);
    $order =  $api->order->create(array(
        'receipt' => $receiptId, 
        'amount' =>  $request->all()['cartTotal']*100, 
        // 'amount' => $cartTotal*100, 
        'currency' => 'INR', 
        // 'notes'=> array('key1'=> 'value3','key2'=> 'value2')
    ));
    // dd($input);
    if(count($input)  && !empty($input['razorpay_payment_id'])) {
        try {
            $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

        } catch (Exception $e) {
            return  $e->getMessage();
            Session::put('error',$e->getMessage());
            return redirect()->back();
        }
        // general input fpr order start
        if (Session::has('coupon')) {
            $total_amount = round(Session::get('coupon')['total_amount']);
        }else{
            
        $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
    
        if($dealer->count() == 0){      
                $cartbeforedis =Cart::priceTotal(); 
                // $total_amount = Cart::total() + Cart::count()*60; 
                $total_amount = round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60 );
                 
            }else{ 
                $cartbeforedis =Cart::priceTotal() * 0.5;  
				$tax =Cart::tax(); 
		        $delivery=  Cart::count()* 60; 
                // $total_amount = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::count()* 60  ;
    
                 $total_amount = round(Cart::priceTotal() * 0.5 + Cart::tax()+ Cart::count()* 60)  ;
    
    
    
            }
    
            
        } 
    
    
                        // 2022
                        // Set your secret key. Remember to switch to your live secret key in production.
                        // See your keys here: https://dashboard.stripe.com/apikeys
                        // \Stripe\Stripe::setApiKey('sk_test_51JSIZdSAWaZvksqSY8BTP63bWgpRRkqglFSXdiQJjP6vPu1WfMkHK97EPsGKdXOvO9UhI0gBB0f5lx8sKeYveKJH00wWCVBjfv');
    
                        // Token is created using Checkout or Elements!
                        // Get the payment token ID submitted by the form:
                        // $token = $_POST['stripeToken'];
    
                        // $charge = \Stripe\Charge::create([
                        // 'amount' => $total_amount*100,
                        // 'currency' => 'inr',
                        // 'description' => 'Nextage Nutrition',
                        // 'source' => $token,
                        // 'metadata' => ['order_id' => uniqid()],
                        // ]);
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
                        // $order_no_prefix = 'NXORDER'. uniqid();
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
    
                            'payment_type' => 'Razorpay',
                            'payment_method' => 'Razorpay',
                            //  'payment_type' => $charge->payment_method,
                            'transaction_id' => $request->razorpay_payment_id,
                            'currency' => 'inr',
                            'amount' => $total_amount,
                            'order_number' =>  'NXORDER'.uniqid(),
                            // 'order_number' =>  Session::get('order_number');
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

                $response=[
                    'order_id' => $order_id, 
                    'razorpayId' => $this->razorpayId,
                    'amount' =>  $request->all()['cartTotal']*100, 
                    'name' => $request->all()['shipping_name'], 
                    'currency' => 'INR', 
                    'email' => $request->all()['shipping_email'], 
                    'phone'=> $request->all()['shipping_phone'], 
                    'address'=> $request->all()['shipping_address'],
                    'description' => 'testing ',


                ];
    
                    return redirect()->route('Thankyou.page')->with($notification);
                // general input fpr order end
    
    }
    // return view('frontend.payment.razorpay1',compact('response'));  
        Session::put('success', 'Payment successful');
        return redirect()->back();

    } // end method 


    public function Completepay(Request $request){
    // print_r($request->all());
    // exit();
        $signatureStatus = $this->Signatureverify(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentId'],
            $request->all()['rzp_orderId'],

        );
        if($signatureStatus == true)
        {
            return view('thankyou');
        }else{
            return view('paymentfailed');
        }


    }
    public function Signatureverify(  $_signature,$_paymentId,$_orderId){
        
        try{
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            
            $attributes  = array('razorpay_signature'  => '$_signature',  'razorpay_payment_id'  => '$_paymentId' ,  'razorpay_order_id' => '$_orderId');
            $order  = $api->utility->verifyPaymentSignature($attributes);
            return true;
            
            }
            catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();

            }
        }





}
