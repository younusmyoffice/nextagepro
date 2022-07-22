<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: green; font-size: 26px;"><strong> Nextage Nutrition 
            {{-- <img src="{{asset('frontend/images/logo.png') }}"> --}}
          </strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
               Nextage Nutrition
               Email:support@nextagenutrition.com <br>
               Mob: 1245454545 <br>
               Dhaka 1207,Mysore:#4 <br>
              
            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Name:</strong> {{ $order->name }}<br>
           <strong>Email:</strong> {{ $order->email }} <br>
           <strong>Phone:</strong> {{ $order->phone }} <br>

           @php
            $div = $order->division->division_name ?? ' ';
            $dis = $order->district->district_name ?? ' ';
            $state = $order->state->state_name ?? ' ';
           @endphp
           
           <strong>Address:</strong> {{ $order->shipping_address ?? ' '}}, {{ $div ?? ' '}},{{ $dis ?? ' '}}.{{ $state ?? ' ' }} <br>
           <strong>Post Code:</strong> {{ $order->post_code }}
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: rgb(236, 2, 2);">Invoice:</span> #{{ $order->invoice_no}}</h3>
            Order Date: {{ $order->order_date }} <br>
             Delivery Date: {{ $order->delivered_date }} <br>
            Payment Type : {{ $order->payment_type }}<br>
            Payment Method : {{ $order->payment_method }} </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Products</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
        <th>Image</th>
        <th>Product Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Code</th>
        <th>Quantity</th>
        <th>Unit Price </th>
        <th>Total </th>
      </tr>
    </thead>
    <tbody>

     @foreach($orderItem as $item)
      <tr class="font">
        <td  style="align-content: center" >
            <img src="{{ public_path($item->product->product_thambnail) ?? ' ' }}" height="60px;" width="60px;" alt="">
        </td>
        <td  style="align-content: center" > {{ $item->product->product_name_en }}</td>
        <td  style="align-content: center" >

          @if($item->size == NULL)
           ----
          @else
            {{ $item->size }}
          @endif
            
        </td>
        <td  style="align-content: center" >{{ $item->color }}</td>
        <td  style="align-content: center" >{{ $item->product->product_code }}</td>
        <td  style="align-content: center" >{{ $item->qty }}</td>
        <td  style="align-content: center" >₹{{ $item->price }}</td>
        <td  style="align-content: center" >₹{{ $item->price * $item->qty }} </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
          <h2><span style="color: green;">Coupon discount:</span>₹{{ $order->coupon ?? '-'}}</h2>
          {{-- <h2><span style="color: green;">tax:</span>₹{{ $tax }}</h2>
          <h2><span style="color: green;">delivery:</span>₹{{ $delivery }}</h2> --}}
            <h2><span style="color: green;">Subtotal:</span>₹{{ $order->amount }}</h2>
            <h2><span style="color: green;">Total:</span> ₹{{ $order->amount }}</h2>
            {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
    

{{--  --}}

                {{-- @if(Session::has('coupon'))
												<h2 class="summary-subtitle">Subtotal</h2> <span>₹ {{ $cartbeforedis }} </span>
                     
												<h4 class="summary-subtitle">Coupon </h4> <span>{{ session()->get('coupon')['coupon_name'] }}
											( {{ session()->get('coupon')['coupon_discount'] }} % )</span>
											
												<h4 class="summary-subtitle">Coupon  Discount</h4> <span>( - ) ₹ {{ session()->get('coupon')['discount_amount'] }}</span>
 
												<h4 class="summary-subtitle">GST/CGST</h4> <span>( + ) ₹ {{ $tax }}</span>
											
                        <h4 class="summary-subtitle">Shipping Charges</h4> <span>( + )  ₹ {{ $delivery }} </span>
												<h4 class="summary-subtitle">Grand Total</h4> <span>₹ {{ session()->get('coupon')['total_amount'] }} </span>

									@else
												<h4 class="summary-subtitle"> total</h4> 	<span>	 ₹ {{ $cartbeforedis }} </span>
                      @php
            
                        $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
                        //  dd($dealer->count());
                      @endphp 
										
                        @if($dealer->count() == 0)
                        
                        
                        @else
                        
                            <h4 class="summary-subtitle">Dealer Discount</h4> <span> 50 % OFF <span>
                        @endif

                      
												<h4 class="summary-subtitle">GST/CGST</h4> <span>( + ) ₹ {{ $tax }} </span>
												<h4 class="summary-subtitle">Shipping Charges</h4> <span>( + ) ₹ {{ $delivery }} </span>
												<h4 class="summary-subtitle">SubTotal</h4> <span>₹ {{ $cartTotal }} </span> 
                        
												<h4 class="summary-subtitle">Total</h4> <span>₹ {{ $cartTotal }}</p> </span>

									@endif  --}}
{{--  --}}
  </td>
</tr>

  </table>
  <div class="thanks mt-3">
    <p>Thanks For Purchasing Products..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html>