


@extends('frontend.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
Cash On Delivery
@endsection

 
 
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
	<nav class="breadcrumb-nav">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{url('/')}} "><i class="d-icon-home"></i></a></li>
				<li>Cash On Delivery</li>
			</ul>
		</div>
	</nav>
</div><br>

<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
	<h3 class="page-subtitle font-weight-bold"> </h3>
	<h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">CASH PAYMENT  </h1>
	<p class="page-desc text-white mb-0"> Cash On Delivery   </p>
</div>



<main class="main cart">
	<div class="page-content pt-7 pb-10">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-simple title-step  "><a href="{{ route('mycart') }}">1. Shopping Cart</a></h3>
			<h3 class="title title-simple title-step"><a href="{{ route('checkout') }}">2. Checkout</a></h3>
			<h3 class="title title-simple title-step active"><a href="{{ route('checkout') }}">3. Payment </a></h3>
			<h3 class="title title-simple title-step "><a href="">4. Order Complete</a></h3>
		</div>
		<div class="container mt-7 mb-2" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
			<div class="row">
				<div class="col-lg-8 col-md-12 pr-lg-4">
					<table class="shop-table cart-table" >
						<thead>
							<tr>
								<th><span>Your Shopping Amount</span></th>
								<th></th>
							</tr>
						</thead>
						<tbody >
							 
							@if(Session::has('coupon'))
									<tr>
										<td><strong>SubTotal : </strong></td>
										{{-- <td>₹ {{ $cartTotal }}</td> --}}
										<td>₹ {{ $data['cartbeforedis'] }}</td>
									</tr>
									<tr>
					 					<td><strong>Coupon Name : </strong></td>
										<td> 
											{{-- {{ session()->get('coupon')['coupon_name'] }}
											( {{ session()->get('coupon')['coupon_discount'] }} % ) --}}
											{{ $data['coupon_discount']}}
										</td>
									</tr>
									<tr>
										<td><strong>Coupon Discount : </strong></td>
										<td>₹ 
											{{-- {{ session()->get('coupon')['discount_amount'] }}  --}}
											{{ $data['discount_amount']}}
										</td>
									</tr>
									<tr>
										<td><strong>CGST/ GST : </strong></td>
									   <td> 
										   {{-- {{ session()->get('coupon')['coupon_name'] }}
										   ( {{ session()->get('coupon')['coupon_discount'] }} % ) --}}
										   {{ $data['carttax']}}
									   </td>
								   </tr>
								   <tr>
										<td><strong>   delivery </strong></td>
										<td> 
										{{-- {{ session()->get('coupon')['coupon_name'] }}
										( {{ session()->get('coupon')['coupon_discount'] }} % ) --}}
										{{ $data['delivery']}}
										</td>
									</tr>
									<tr>
										<td><strong>Grand Total  : </strong></td>
										<td>₹ 
											{{-- {{ session()->get('coupon')['total_amount'] }}  --}}
											{{ $data['total_amount']}}
										</td>
									</tr>	
							@else 

							@php
							
							$dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
							//  dd($dealer->count());
						@endphp 
						
						@if($dealer->count() == 0)
						
						
						@else
						<tr class="summary-subtotal"> 
							<td>
								<h4 class="summary-subtitle">Dealer Discount</h4>
							</td>
							<td class="summary-subtotal-price pb-0 pt-0"> 50 % OFF
							</td> 
						</tr>
					@endif
						<tr>
							
							<td><strong>SubTotal : </strong></td>
							<td>₹ 
								{{-- {{ $cartTotal }} --}}
								{{ $data['cartbeforedis']}}
							</td>
						</tr>
						<tr>
							<td><strong>CGST/ GST : </strong></td>
							<td> ₹ 
								{{ $data['carttax']}}
							</td>
						</tr>
						<tr>
							<td><strong>   delivery </strong></td>
							<td> ₹ 
							{{ $data['delivery']}}
							</td>
						</tr>
						
						<tr>
							<td><strong>Grand Total  : </strong></td>
							<td>₹ 
								{{-- {{ $cartTotal }}  --}}
								{{ $data['cartTotal']}}
								
							</td>
						</tr>	
							
							@endif 

							
						</tbody>
					</table>
					<div class="cart-actions mb-6 pt-4">
						<a href="{{url('shop')}}" class="btn btn-dark btn-md btn-rounded btn-icon-left mr-4 mb-4"><i
								class="d-icon-arrow-left"></i>Continue Shopping</a>
						{{-- <button type="submit"
							class="btn btn-outline btn-dark btn-md btn-rounded btn-disabled">Update
							Cart</button> --}}
					</div>
					
				</div>
				<aside class="col-lg-4 sticky-sidebar-wrapper">
					<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}" >
						
						<form action="{{ route('cash.order') }}" method="post" id="payment-form">
							@csrf
						<div class="summary mb-4">
							<h3 class="summary-title text-left">Cash on Delivery</h3>
							<img src="{{ asset('frontend/images/payments/cash.png') }}">
								<label for="card-element">
           
								<input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
								<input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
								<input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
								<input type="hidden" name="shipping_address" value="{{ $data['shipping_address'] }}">
								<input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
								<input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
								<input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
								<input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
								<input type="hidden" name="notes" value="{{ $data['notes'] }}"> 
								<input type="hidden" name="cartbeforedis" value="{{ $data['cartbeforedis'] }}"> 
								<input type="hidden" name="coupon_discount" value="{{ $data['coupon_discount'] }}"> 
								<input type="hidden" name="discount_amount" value="{{ $data['discount_amount'] }}"> 
								<input type="hidden" name="carttax" value="{{ $data['carttax'] }}"> 
								<input type="hidden" name="delivery" value="{{ $data['delivery'] }}"> 
								<input type="hidden" name="total_amount" value="{{ $data['total_amount'] }}"> 
								<input type="hidden" name="cartTotal" value="{{ $data['cartTotal'] }}"> 

								</label>
									   
									<div id="card-element">
									  <!-- A Stripe Element will be inserted here. -->
									</div>
									  <!-- Used to display form errors. -->
									  <div id="card-errors" role="alert">
								  	</div>
								  <br>
								  <button class="btn btn-primary btn-rounded btn-md ml-2">Submit Payment</button>
						 
						</div>
						</form>
					</div>
				</aside>
			</div>
		</div>
	</div>

</main>






















 


@endsection