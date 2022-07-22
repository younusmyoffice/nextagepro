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
use Illuminate\Support\Facades\DB;
use App\Mail\OrderMail;
// use Barryvdh\DomPDF\PDF;
use PDF;
class AllUserController extends Controller
{

    public function MyOrders(){

    	$orders = Order::where('user_id',Auth::id())->orderBy('id','DESC')->get();
    	// return view('frontend.user.order.order_view',compact('orders'));
        return view('frontend.user.order.order_view',compact('orders'));

    } // end mehtod 



    public function OrderDetails($order_id){

    	$order = Order::with('division','district','state','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
    	$orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
    	return view('frontend.user.order.order_details',compact('order','orderItem'));

    } // end mehtod 



    public function InvoiceDownload($order_id){
       $order = Order::with('division','district','state','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
    	$orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        $delivery=  Cart::count()* 60; 
        $tax =Cart::tax(); 
        // start
        // if (Session::has('coupon')) {
        //     $coupon = Coupon::where('coupon_name',$request->coupon_name)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first();
        //     $coupon_discount = round(Cart::priceTotal() * $coupon->coupon_discount/100) ;
        //         $cartbeforedis =Cart::priceTotal();
        //         $tax =Cart::tax(); 
		//         $delivery=  Cart::count()* 60; 
        //         $cartTotal = round(Session::get('coupon')['total_amount']);
        //         $pdf = PDF::loadView('frontend.user.order.order_invoice',compact('order','orderItem','cartTotal','cartbeforedis','tax','delivery','coupon_discount'))->setPaper('a4')->setOptions([
        //             'tempDir' => public_path(),
        //             'chroot' => public_path(),
        //     ]);
		//     return $pdf->download('invoice.pdf');
    	// }else{
		// 	$dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
	
		//     if($dealer->count() == 0){      
		// 		$cartbeforedis =Cart::priceTotal();
        //         $tax =Cart::tax(); 
		//         $delivery=  Cart::count()* 60; 
		// 		// $total_amount = Cart::total() + Cart::count()*60;
		// 		$cartTotal = round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  );
        //             $pdf = PDF::loadView('frontend.user.order.order_invoice',compact('order','orderItem','cartTotal','cartbeforedis','tax','delivery'))->setPaper('a4')->setOptions([
        //                 'tempDir' => public_path(),
        //                 'chroot' => public_path(),
        //         ]);
        //         return $pdf->download('invoice.pdf');
		// 	}else{ 
		// 		$cartbeforedis =Cart::priceTotal() * 0.5;
		// 		$tax =Cart::tax(); 
		//         $delivery=  Cart::count()* 60; 
		// 		// $total_amount = Cart::total() * 0.5 + Cart::tax() * 0.5 + Cart::count()* 60  ;
		// 		$cartTotal = round(Cart::priceTotal() * 0.5 + Cart::tax()+ Cart::count()* 60)  ;
        //             $pdf = PDF::loadView('frontend.user.order.order_invoice',compact('order','orderItem','cartTotal','cartbeforedis','tax','delivery'))->setPaper('a4')->setOptions([
        //                 'tempDir' => public_path(),
        //                 'chroot' => public_path(),
        //         ]);
        //         return $pdf->download('invoice.pdf');
		// 	}
    	// }
        // end
    	// return view('frontend.user.order.order_invoice',compact('order','orderItem'));
        
		$pdf = PDF::loadView('frontend.user.order.order_invoice',compact('order','orderItem','delivery','tax'))->setPaper('a4')->setOptions([
        // $pdf = PDF::loadView('frontend.user.order.order_invoice',compact('order','orderItem','delivery','tax'))->setPaper('a4')->setOptions([
				'tempDir' => public_path(),
				'chroot' => public_path(),
		]);
		return $pdf->download('NX-invoice.pdf');



    } // end mehtod 


    public function ReturnOrder(Request $request,$order_id){

        Order::findOrFail($order_id)->update([
            'return_date' => Carbon::now()->format('d F Y'),
            'return_reason' => $request->return_reason,
            'return_order' => 1,
        ]);


      $notification = array(
            'message' => 'Return Request Send Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('my.orders')->with($notification);

    } // end method 



    public function ReturnOrderList(){

        $orders = Order::where('user_id',Auth::id())->where('return_reason','!=',NULL)->orderBy('id','DESC')->get();
        return view('frontend.user.order.return_order_view',compact('orders'));

    } // end method 



    public function CancelOrders(){

        $orders = Order::where('user_id',Auth::id())->where('status','cancel')->orderBy('id','DESC')->get();
        return view('frontend.user.order.cancel_order_view',compact('orders'));

    } // end method 



    ///////////// Order Traking ///////
    

    public function OrderTraking(Request $request){

        $invoice = $request->code;

        $track = Order::where('invoice_no',$invoice)->first();

        if ($track) {
            
            // echo "<pre>";
            // print_r($track);

        return view('frontend.traking.track_order',compact('track'));

        }else{

            $notification = array(
            'message' => 'Invoice Code Is Invalid',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);

        }

    } // end mehtod 


    public function Thankyou(){

    	// $order = Order::with('division','district','state','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
    	// $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        // return view('frontend.payment.Thankyou',compact('order','orderItem'));
        return view('frontend.payment.Thankyou');


       

    } // end mehtod 


}
