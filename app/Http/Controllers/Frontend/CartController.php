<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ShipDivision;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Wishlist;
use Carbon\Carbon;

use App\Models\Coupon;

class CartController extends Controller
{
    
    
    public function AddToCart(Request $request, $id){

        if (Session::has('coupon')) {
          Session::forget('coupon');
       }
         
       $product = Product::findOrFail($id);

       if ($product->discount_price == NULL) {
           Cart::add([
               'id' => $id, 
               'name' => $request->product_name, 
               'qty' => $request->quantity, 
               'price' => $product->selling_price,
               'weight' => 1, 
               'options' => [
                   'image' => $product->product_thambnail,
                   'color' => $request->color,
                   'size' => $request->size,
               ], 
           ]);

           return response()->json(['success' => 'Successfully Added on Your Cart']);
            
       }else{

           Cart::add([
               'id' => $id, 
               'name' => $request->product_name, 
               'qty' => $request->quantity, 
               'price' => $product->discount_price,
               'weight' => 1, 
               'options' => [
                   'image' => $product->product_thambnail,
                   'color' => $request->color,
                   'size' => $request->size,
               ],
           ]);
           return response()->json(['success' => 'Successfully Added on Your Cart']);
       }

   } // end mehtod 


   // Mini Cart Section
   public function AddMiniCart(){

    //    $carts = Cart::content();
    //    $cartQty = Cart::count();
    //    $cartTotal = Cart::total();
    //    customstart
                $dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id());
                // dd($dealer->dealer);
                if($dealer == null || $dealer->dealer== 0){  
                        if (Session::has('coupon')) {
                            return response()->json(array(
                                'carts' => Cart::content(),
                                // 'tax'=> Cart::tax(),
                                'cartQty'=> Cart::count(),
                                // 'subtotal' => Cart::total(),
                                // 'coupon_name' => session()->get('coupon')['coupon_name'],
                                // 'coupon_discount' => session()->get('coupon')['coupon_discount'],
                                // 'discount_amount' => session()->get('coupon')['discount_amount'],
                                'cartTotal' => round(session()->get('coupon')['total_amount']),
                            ));
                        }
                        else{
                             return response()->json(array(
                                //    'total' => Cart::total() ,
                                'carts' => Cart::content(),
                                    // 'ptotal' => Cart::priceTotal(),
                                    // 'tax'=> Cart::tax(),
                                    'cartQty'=> Cart::count(),
                                    // 'subtotal' => Cart::total(),
                                    'cartTotal' =>  round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60   ) , 
                                    // 'cartTotal' => round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  ) , 
                
                                ));   

                        }
                    // }elseif($dealer->dealer== 0){ 
                    //     return response()->json(array(
                    //         'ptotal' => Cart::priceTotal(),
                    //         'tax'=> Cart::tax(),
                    //         'delivery'=> Cart::count() * 60,
                    //        'subtotal' => Cart::total(),
                    //        'coupon_name' => session()->get('coupon')['coupon_name'],
                    //        'coupon_discount' => session()->get('coupon')['coupon_discount'],
                    //        'discount_amount' => session()->get('coupon')['discount_amount'],
                    //        'total_amount' => round(session()->get('coupon')['total_amount']),
                    //    ));
                }elseif($dealer->dealer== 1){
                        if (Session::has('coupon')) {
                            Session::forget('coupon');}
                            return response()->json(array(
                                //    'total' => Cart::total() ,
                                'carts' => Cart::content(),
                                // 'subtotal' => Cart::priceTotal(),
                                // 'ptotal' => Cart::priceTotal() * 0.5,
                                // 'tax'=> Cart::tax(),
                                'cartQty'=> Cart::count(),
                                'cartTotal' =>  round(Cart::priceTotal() * 0.7 + Cart::tax() + Cart::count()* 60   ) , 
                                // 'cartTotal' => round(Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60  ) , 
            
                            ));
                        // }

                }else{
                        if (Session::has('coupon')) {
                            Session::forget('coupon');}
                            return response()->json(array(
                                //    'total' => Cart::total() ,
                                    'carts' => Cart::content(),
                                    // 'subtotal' => Cart::priceTotal(),
                                    // 'ptotal' => Cart::priceTotal() * 0.5,
                                    // 'tax'=> Cart::tax(),
                                    'cartQty'=> Cart::count(),
                                    'cartTotal' =>  round(Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60   ) , 
                                    // 'cartTotal' => round(Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60  ) , 
                
                    
                                ));  
                        // }

                    }





                // if (Session::has('coupon')) {
                //     return response()->json(array(
                //         'carts' => Cart::content(),
                //         // 'tax'=> Cart::tax(),
                //         'cartQty'=> Cart::count(),
                //         // 'subtotal' => Cart::total(),
                //         // 'coupon_name' => session()->get('coupon')['coupon_name'],
                //         // 'coupon_discount' => session()->get('coupon')['coupon_discount'],
                //         // 'discount_amount' => session()->get('coupon')['discount_amount'],
                //         'cartTotal' => round(session()->get('coupon')['total_amount']),
                //     ));
                // }else{
                  
                //     // $dealer = User::where('dealer')->where('id','=',Auth::id())->get();
                //         // $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
                        
                //         $dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id());
                //             if($dealer== null){
                //                 return response()->json(array(
                //                     //    'total' => Cart::total() ,
                //                     'carts' => Cart::content(),
                //                         // 'ptotal' => Cart::priceTotal(),
                //                         // 'tax'=> Cart::tax(),
                //                         'cartQty'=> Cart::count(),
                //                         // 'subtotal' => Cart::total(),
                //                         'cartTotal' =>  round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  ) , 
                //                         // 'cartTotal' => round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  ) , 
                    
                //                     ));  
                            
                            
                            
                //             }else{

                //                         if($dealer->dealer== 0){     
                //                             return response()->json(array(
                //                                 //    'total' => Cart::total() ,
                //                                 'carts' => Cart::content(),
                //                                     // 'ptotal' => Cart::priceTotal(),
                //                                     // 'tax'=> Cart::tax(),
                //                                     'cartQty'=> Cart::count(),
                //                                     // 'subtotal' => Cart::total(),
                //                                     'cartTotal' =>  (Cart::priceTotal() + Cart::tax() + Cart::count()* 60  ) , 
                //                                     // 'cartTotal' => round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  ) , 
                                
                //                                 ));  
                                
                //                         }elseif($dealer->dealer== 1){     
                //                             return response()->json(array(
                //                                 //    'total' => Cart::total() ,
                //                                 'carts' => Cart::content(),
                //                                 // 'subtotal' => Cart::priceTotal(),
                //                                 // 'ptotal' => Cart::priceTotal() * 0.5,
                //                                 // 'tax'=> Cart::tax(),
                //                                 'cartQty'=> Cart::count(),
                //                                 'cartTotal' =>  (Cart::priceTotal() * 0.7 + Cart::tax() + Cart::count()* 60  ) , 
                //                                 // 'cartTotal' => round(Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60  ) , 
                            
                //                             ));
                                
                //                         }else{ 
                //                             return response()->json(array(
                //                                 //    'total' => Cart::total() ,
                //                                     'carts' => Cart::content(),
                //                                     // 'subtotal' => Cart::priceTotal(),
                //                                     // 'ptotal' => Cart::priceTotal() * 0.5,
                //                                     // 'tax'=> Cart::tax(),
                //                                     'cartQty'=> Cart::count(),
                //                                     'cartTotal' =>  (Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60  ) , 
                //                                     // 'cartTotal' => round(Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60  ) , 
                                
                                    
                //                                 )); 
                                                
                //                         }
                                   

                //                     }

                // }


    // customend

    //    return response()->json(array(
    //        'carts' => $carts,
    //        'cartQty' => $cartQty,
    //        'cartTotal' => $cartTotal,
    //     //    'cartTotal' => round($cartTotal),

    //    ));
   } // end method 


/// remove mini cart 
   public function RemoveMiniCart($rowId){
       Cart::remove($rowId);
       return response()->json(['success' => 'Product Remove from Cart']);

   } // end mehtod 


   // add to wishlist mehtod 

   public function AddToWishlist(Request $request, $product_id){

       if (Auth::check()) {

           $exists = Wishlist::where('user_id',Auth::id())->where('product_id',$product_id)->first();
       
           if (!$exists) {
              Wishlist::insert([
               'user_id' => Auth::id(), 
               'product_id' => $product_id, 
               'created_at' => Carbon::now(), 
           ]);
            return response()->json(['success' => 'Successfully Added On Your Wishlist']);

           }else{
               return response()->json(['error' => 'This Product is Already on Your Wishlist']);
           }            
           
       }else{
           return response()->json(['error' => ' First Login to Your Account']);
       }

   } // end method 




   public function CouponApply(Request $request){
    // $dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id());
    //     if($dealer == null){  
            $coupon = Coupon::where('coupon_name',$request->coupon_name)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first();
        // }elseif($dealer->dealer== 0){ 
        //     $coupon = Coupon::where('coupon_name',$request->coupon_name)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first(); 
        // }elseif($dealer->dealer== 1){
        //     if (Session::has('coupon')) {
        //         Session::forget('coupon');
        //      }

        // }else{
        //     if (Session::has('coupon')) {
        //         Session::forget('coupon');
        //      }

        // }
   //    $cartTotal = Cart::total();
    //    to remove special charcater in integer
    //    $cartTotal = floatval(preg_replace('/[^\d.]/', '', $cartTotal));
       if ($coupon) {
            // custom dealer discount
            // if(dealer ==! 0){
            //     Session::put('coupon',[
            //    'coupon_name' => "NXDEALER50",
            //    'coupon_discount' => 50,
           
            //        'discount_amount' => round(Cart::total() * coupon_discount/100), 
            //        'total_amount' => round(Cart::total() - Cart::total() * coupon_discount/100)  
            //    ]);

            // }else{

            //     Session::put('coupon',[
            //         'coupon_name' => $coupon->coupon_name,
            //         'coupon_discount' => $coupon->coupon_discount,
                
            //             'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100), 
            //             'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100)  
            //         ]);     

            // }
           
        //   end custom dealer discount 
            Session::put('coupon',[
               'coupon_name' => $coupon->coupon_name,
               'coupon_discount' => $coupon->coupon_discount,
            //    'discount_amount' =>  $cartTotal  *  $coupon->coupon_discount/100, 
            //    'total_amount' =>   $cartTotal -  $cartTotal *  $coupon->coupon_discount/100,
            //    'discount_amount' => round(floatval(preg_replace('/[^\d.]/', '', Cart::total())) * $coupon->coupon_discount/100), 
            //    'total_amount' => round(floatval(preg_replace('/[^\d.]/', '', Cart::total())) - floatval(preg_replace('/[^\d.]/', '', Cart::total())) * $coupon->coupon_discount/100)  ,
            //    'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100), 
               'discount_amount' => round(Cart::priceTotal() * $coupon->coupon_discount/100), 
            //    + Cart::tax() tax already added  automatically to Cart::total() by packaage
            // 'total_amount' => round(Cart::total() - (Cart::total() * $coupon->coupon_discount/100 ) ),
               'total_amount' => round(Cart::priceTotal() - (Cart::priceTotal() * $coupon->coupon_discount/100 ) + Cart::tax() + Cart::count()* 60   )  ,

            //    seprate product discount
            // 'discount_amount_p' => round(Cart::priceTotal() * $coupon->coupon_discount/100), 
           ]);

           return response()->json(array(
               'validity' => true,
               'success' => 'Coupon Applied Successfully'
           ));
           
       }else{
           return response()->json(['error' => 'Invalid Coupon']);
       }

   } // end method 


   public function CouponCalculation(){
  
    // if (Auth::check()) {
        
                    //    if (Session::has('coupon')) {
                        // 
                        $dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id());
                        // dd($dealer->dealer);
                        if($dealer == null || $dealer->dealer== 0){  
                                if (Session::has('coupon')) {
                                        return response()->json(array(
                                            'ptotal' => Cart::priceTotal(),
                                            'tax'=> Cart::tax(),
                                            'delivery'=> Cart::count() * 60,
                                        'subtotal' => Cart::total(),
                                        'coupon_name' => session()->get('coupon')['coupon_name'],
                                        'coupon_discount' => session()->get('coupon')['coupon_discount'],
                                        'discount_amount' => session()->get('coupon')['discount_amount'],
                                        'total_amount' => round(session()->get('coupon')['total_amount']),
                                    ));
                                }
                                else{
                                        return response()->json(array(
                                        //    'total' => Cart::total() ,
                                        'subtotal' => Cart::priceTotal(),
                                            'ptotal' => Cart::priceTotal(),
                                            'tax'=> Cart::tax(),
                                            'delivery'=> Cart::count() * 60,
                                            // 'subtotal' => Cart::total(),
                                            'total' => round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60   ) , 
                                            // 'total' => round('ptotal'+ 'tax' + 'delivery'  ) , 
                                        ));  

                                }
                            // }elseif($dealer->dealer== 0){ 
                            //     return response()->json(array(
                            //         'ptotal' => Cart::priceTotal(),
                            //         'tax'=> Cart::tax(),
                            //         'delivery'=> Cart::count() * 60,
                            //        'subtotal' => Cart::total(),
                            //        'coupon_name' => session()->get('coupon')['coupon_name'],
                            //        'coupon_discount' => session()->get('coupon')['coupon_discount'],
                            //        'discount_amount' => session()->get('coupon')['discount_amount'],
                            //        'total_amount' => round(session()->get('coupon')['total_amount']),
                            //    ));
                        }elseif($dealer->dealer== 1){
                                if (Session::has('coupon')) {
                                    Session::forget('coupon');}
                                    return response()->json(array(
                                        //    'total' => Cart::total() ,
                                            'subtotal' => Cart::priceTotal(),
                                            'ptotal' => Cart::priceTotal() * 0.7,
                                            'tax'=> Cart::tax(),
                                            'delivery'=> Cart::count() * 60,
                                            'total' => round(Cart::priceTotal() * 0.7+ Cart::tax() + Cart::count()* 60  ) , 
                                            //  'total' => round('ptotal'+ 'tax' + 'delivery'  ) ,  
                                        ));  
                                // }

                        }else{
                                if (Session::has('coupon')) {
                                    Session::forget('coupon');}
                                    return response()->json(array(
                                        //    'total' => Cart::total() ,
                                            'subtotal' => Cart::priceTotal(),
                                            'ptotal' => Cart::priceTotal() * 0.5,
                                            'tax'=> Cart::tax(),
                                            'delivery'=> Cart::count() * 60,
                                            'total' => round(Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60   ) , 
                                            // 'total' => round('ptotal'+ 'tax' + 'delivery'  ) , 
                                        )); 
                                // }

                            }
                            
                    //   }else{
                        
                    //         // $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
                    //         // $dealer = User::where('dealer')->where('id','=',Auth::id())->get();
                    //         // dd($dealer);
                    //         $dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id());
                    //             // $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
                    //                 // dd($dealer); 
                    //                         if($dealer== null || $dealer->dealer== 0){     
                    //                         // if($dealer->count() == 0){     
                    //                             return response()->json(array(
                    //                                 //    'total' => Cart::total() ,
                    //                                 'subtotal' => Cart::priceTotal(),
                    //                                     'ptotal' => Cart::priceTotal(),
                    //                                     'tax'=> Cart::tax(),
                    //                                     'delivery'=> Cart::count() * 60,
                    //                                     // 'subtotal' => Cart::total(),
                    //                                     'total' => round(Cart::priceTotal() + Cart::tax() + Cart::count()* 60  ) , 
                    //                                     // 'total' => round('ptotal'+ 'tax' + 'delivery'  ) , 
                    //                                 ));  
                                            
                    //                         }elseif($dealer->dealer == 1){ 
                    //                             // if (Session::has('coupon')) {
                    //                             //     Session::forget('coupon');
                                                            
                    //                                     // if($dealer->count() == 0){     
                    //                                         return response()->json(array(
                    //                                             //    'total' => Cart::total() ,
                    //                                                 'subtotal' => Cart::priceTotal(),
                    //                                                 'ptotal' => Cart::priceTotal() * 0.7,
                    //                                                 'tax'=> Cart::tax(),
                    //                                                 'delivery'=> Cart::count() * 60,
                    //                                                 'total' => round(Cart::priceTotal() * 0.7+ Cart::tax() + Cart::count()* 60 ) , 
                    //                                                 //  'total' => round('ptotal'+ 'tax' + 'delivery'  ) , 
                                                    
                    //                                             ));  
                                                        
                    //                             // }
                    //                         }else{ 
                    //                             // if (Session::has('coupon')) {
                    //                             //     Session::forget('coupon');

                    //                                         return response()->json(array(
                    //                                         //    'total' => Cart::total() ,
                    //                                             'subtotal' => Cart::priceTotal(),
                    //                                             'ptotal' => Cart::priceTotal() * 0.5,
                    //                                             'tax'=> Cart::tax(),
                    //                                             'delivery'=> Cart::count() * 60,
                    //                                             'total' => round(Cart::priceTotal() * 0.5 + Cart::tax() + Cart::count()* 60  ) , 
                    //                                             // 'total' => round('ptotal'+ 'tax' + 'delivery'  ) , 
                    //                                         )); 
                    //                             // }
                    //                         }
                                    

                                        
                    

                    //    }


              

   } // end method 


// Remove Coupon 
   public function CouponRemove(){
       Session::forget('coupon');
       return response()->json(['success' => 'Coupon Remove Successfully']);
   }


 // Checkout Method 
 public function CheckoutCreate(){

    if (Auth::check()) {
        if (Cart::total() > 0) {
            $carttotalold = Cart::total();
            $carts = Cart::content();
            $cartQty = Cart::count();
            $carttax =Cart::tax();
            // $delivery=Cart::discount();
            $delivery=  Cart::count() * 60;
            // method can be used to get the total price of all items in the cart before applying discount and taxes.
            // $cartbeforedis =Cart::initial();
            // $dealer = User::where('dealer')->where('id','=',Auth::id())->get();
            // $dealer = User::where('id',Auth::id())->get('dealer');
            //  DB::select('select * from users where dealer = ?, id = ?',[1],[4]);
            // $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
            $dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id());
            
            // dd($dealer->count()); 
            // print_r($dealer); 
            // if($dealer->count()== 0){  
                if($dealer->dealer == 0){    
                    $cartbeforedis =Cart::priceTotal();
                    $cartTotal = round( $carttotalold  + $delivery  );
                    // $cartTotal = round(Cart::total() + Cart::count()*60);
                }elseif($dealer->dealer == 1){      
                    $cartbeforedis =Cart::priceTotal() * 0.7;
                    //  $cartTotal = round(Cart::priceTotal() * 0.7 + Cart::tax() + Cart::count() * 60);
                    $cartTotal = round($cartbeforedis + $carttax +  $delivery  );
                }else{ 
                    $cartbeforedis =Cart::priceTotal() * 0.5;
                    $cartTotal = round($cartbeforedis + $carttax + $delivery );

                }

                    $divisions = ShipDivision::orderBy('division_name','ASC')->get();
                    return view('frontend.checkout.checkout_view',compact('carts','cartQty','cartTotal','divisions','carttax','cartbeforedis','delivery'));
                            
        }else{

                $notification = array(
                'message' => 'Shop At list One Product',
                'alert-type' => 'error'
            );

            return redirect()->to('/')->with($notification);

        }

        
    }else{

         $notification = array(
        'message' => 'You Need to Login First',
        'alert-type' => 'error'
    );

    return redirect()->route('login')->with($notification);

    }

} // end method 






}
