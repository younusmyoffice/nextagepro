<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use Exception;
class RazorpayPaymentController extends Controller
{
    //
    private $razorpayId = "rzp_test_chhdVd1xQcvbUt";
    private $razorpayKey = "Z2iNlwXzxrgtlBWyvvWKaKHf";

    // RAZORPAY_KEY=rzp_test_chhdVd1xQcvbUt
    // RAZORPAY_SECRET=Z2iNlwXzxrgtlBWyvvWKaKHf
    

public function RazorpayOrder(Request $request){
    
// dd($request->all());
    // $input = $request->all();
    // if (Session::has('coupon')) {
    //         $total_amount = round(Session::get('coupon')['total_amount']);
    //     }else{
            
    //     $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
    
    //     if($dealer->count() == 0){      
    //             $cartbeforedis =Cart::priceTotal(); 
    //             // $total_amount = Cart::total() + Cart::count()*60; 
    //             $total_amount = round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60 );
                 
    //         }else{ 
    //             $cartbeforedis =Cart::priceTotal() * 0.5;  
	// 			$tax =Cart::tax(); 
	// 	        $delivery=  Cart::count()* 60; 
    //             // $total_amount = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::count()* 60  ;
    
    //              $total_amount = round(Cart::priceTotal() * 0.5 + Cart::tax()+ Cart::count()* 60)  ;
    
    
    
    //         }
    
            
    //     } 
    $total_amount = round( $request->total_amount ?? $request->cartTotal)  ;
  
    $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    // $payment = $api->payment->fetch($request->input('razorpay_payment_id'));
    // dd($payment);
    // dd( $api );
    $receiptId= 'NXR'.Str::random(20);
    // $payment = $api->payment->fetch($input['razorpay_payment_id']);
    $order = $api->order->create(array(
        'receipt' => $receiptId, 
        'amount' =>  $total_amount * 100, 
        // 'payment_capture' =>1,
        // 'amount' => '100', 
        'currency' => 'INR', 
        // 'notes'=> array('key1'=> 'value3','key2'=> 'value2')
    ));
    // dd($order);
    // if(count($input)  && !empty($input['razorpay_payment_id'])) {
    //     try {
    //         $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

    //     } catch (Exception $e) {
    //         return  $e->getMessage();
    //         Session::put('error',$e->getMessage());
    //         return redirect()->back();
    //     }
        // general input fpr order start
        //

     
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
                            // 'transaction_id' => $request->razorpay_payment_id,
                            'transaction_id' => ' ',
                            'sign_id' =>  '', 
                            'payment_status' => 'Not Paid', 
                            'currency' => 'INR',
                            'amount_before'=> $request->cartbeforedis,
                            'coupon_discount'=> $request->discount_amount,
                            'tax'=> $request->carttax,
                            'delivery'=> $request->delivery,
                            'amount' => $total_amount,
                            'order_number' => $order['id'],// razorpay order id
                            // 'order_number' =>  'NXORDER'.uniqid(),
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
    
    
                // if (Session::has('coupon')) {
                //     Session::forget('coupon');
                // }
    
                // Cart::destroy();
    
              

                $response=[
                    // 'order_id' => $order['id'], 
                    // 'razorpayId' => $this->razorpayId,
                    // 'razorpayKd' => $this->razorpayKey,
                    // 'amount' =>  $request->all()['cartTotal']*100, 
                    // 'amount' =>  '100', 
                    // 'name' => 'nn', 
                    // 'currency' => 'INR', 
                    // 'email' => 'ee', 
                    // 'phone'=> 'rr', 
                    // 'address'=> 'sdf',
                    // 'description' => 'testing ',
                    'order_id' =>  $order['id'], 
                    'razorpayId' => $this->razorpayId,
                    'amount' =>  $total_amount *100, 
                    'name' => $request->shipping_name, 
                    'currency' => 'INR', 
                    'email' => $request->shipping_email, 
                    'phone'=> $request->shipping_phone, 
                    'address'=> $request->shipping_address,
                    'description' => 'testing ',
                    // 'ord_id' => $order_id,



                ];
                
                // dd($response);
    
                    // return redirect()->route('Thankyou.page')->with($notification);
                // general input fpr order end
                $notification = array(
                    'message' => 'Your Order Place Successfully',
                    'alert-type' => 'success'
                );
    // }
    return view('frontend.payment.razorpay1',compact('response'))->with($notification);  
        // Session::put('success', 'Payment successful');
        // return redirect()->back();

    } // end method 


    public function RazorpayComplete(Request $request){
    print_r($request->all());
    // exit();
    $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    $payment = $api->payment->fetch($request->input('rzp_paymentId'));
    // dd($payment->acquirer_data->upi_transaction_id);
    // $p = $payment
    $sign_id =  $request->all()['rzp_signature'];
    $pay_id = $request->all()['rzp_paymentId'];
    $ord_id = $request->all()['rzp_orderId'];
    // dd($request->all());
    // dd($payment);
        $signatureStatus = $this->Signatureverify(
            // $request->all()['rzp_signature'],
            // $request->all()['rzp_paymentId'],
            // $request->all()['rzp_orderId'],
            $sign_id,
            $pay_id,
            $ord_id,

        );
        if($payment->captured != 1 && $payment->status != 1 ){
            $status = 'payment failed';
        }else{
            $status = 'payment success';
        }
        // $exists = Order::where('user_id',Auth::id())->where('order_number', $ord_id)->latest()->get();
                // dd($signatureStatus);
        if($signatureStatus != true  && $payment->captured != 1 )
        {

            Order::where('order_number', $ord_id)->update([
                'payment_id' => $payment->id,
                'transaction_id' => $payment->acquirer_data->upi_transaction_id ?? $payment->acquirer_data->bank_transaction_id ?? $payment->acquirer_data->auth_code ?? '',
                'payment_method' => $payment->method,
                'sign_id' =>  $sign_id, 
                'payment_status' => $status, 
                'payment_captured'=> $payment->captured,
                // 'refund_status' => $payment->refund_status,
                // 'refund_amount' => $payment->amount_refunded,
                'vpa'=>$payment->vpa,
                'rrn_no'=> $payment->acquirer_data->rrn ?? '',
                'card_id' => $payment->card_id ,
                'token_id' => $payment->token_id ?? '',
                'bank' => $payment->bank,
                'wallet'=>$payment->wallet, 
                'updated_at' => Carbon::now(), 
            ]);
            $notification = array(
                'message' => 'Payment Failed  ',
                'alert-type' => 'danger'
            );
            return view('frontend.payment.failed')->with($notification);
       
            
        }else{

            if (Auth::check() && $payment->captured == 1) {
                // dd($request->all()['rzp_orderId']);
                $exists = Order::where('user_id',Auth::id())->where('order_number', $ord_id)->latest()->get();
                if ($exists) {
                //     $order_no = $request->all()['rzp_orderId'];
                //    dd($sign_id);
                //     dd($pay_id);
                    // dd($ord_id);
                    if($pay_id = $payment->id && $ord_id = $payment->order_id ){
                        Order::where('order_number', $ord_id)->update([
                            'payment_id' => $payment->id,
                            'transaction_id' => $payment->acquirer_data->upi_transaction_id ?? $payment->acquirer_data->bank_transaction_id ?? $payment->acquirer_data->auth_code ??'',
                            'payment_method' => $payment->method,
                            'sign_id' =>  $sign_id, 
                            'payment_status' => $status, 
                            'payment_captured'=> $payment->captured,
                             // 'refund_status' => $payment->refund_status,
                              // 'refund_amount' => $payment->amount_refunded,
                            'vpa'=>$payment->vpa,
                            'rrn_no'=> $payment->acquirer_data->rrn ?? '',
                            'card_id' => $payment->card_id ,
                            'token_id' => $payment->token_id ?? '',
                            'bank' => $payment->bank,
                            'wallet'=>$payment->wallet, 
                            'updated_at' => Carbon::now(), 
                        ]);
                       
                        $notification = array(
                            'message' => 'Payment Done Successfully',
                            'alert-type' => 'success'
                        );
                        if (Session::has('coupon')) {
                            Session::forget('coupon');
                        }
            
                        Cart::destroy();
            
                        return view('frontend.payment.Thankyou')->with($notification) ;
                    }
                       
    
                   
                 }
                //  dd($exists);
                
            }  
         }


    }
    public function Signatureverify(  $_signature,$_paymentId,$_orderId){
        
        try{
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            
            $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
            $order  = $api->utility->verifyPaymentSignature($attributes);
            dd( $order);
            return true;
            
            }
            catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();

            }
        }





}
