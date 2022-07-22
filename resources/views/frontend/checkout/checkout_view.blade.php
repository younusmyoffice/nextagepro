@extends('frontend.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
My Checkout
@endsection
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
	<nav class="breadcrumb-nav" >
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{url('/')}} "><i class="d-icon-home"></i></a></li>
				<li>MyCart</li>
			</ul>
		</div>
	</nav>
</div><br>
<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
	<h3 class="page-subtitle font-weight-bold"> </h3>
	<h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">CHECKOUT   </h1>
	<p class="page-desc text-white mb-0"> Checkout Cart </p>
</div>
<main class="main checkout">
	<div class="page-content pt-7 pb-10 mb-10">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-simple title-step  "><a href="{{ route('mycart') }}">1. Shopping Cart</a></h3>
			<h3 class="title title-simple title-step active"><a href="{{ route('checkout') }}">2. Checkout</a></h3>
			<h3 class="title title-simple title-step "><a href="{{ route('checkout') }}">3. Payment </a></h3>
			<h3 class="title title-simple title-step "><a href="">4. Order Complete</a></h3>
		</div>
		<div class="container mt-7" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
			{{-- <div class="card accordion">
				<div class="alert alert-light alert-primary alert-icon mb-4 card-header">
					<i class="fas fa-exclamation-circle"></i>
					<span class="text-body">Returning customer?</span>
					<a href="#alert-body1" class="text-primary collapse">Click here to login</a>
				</div>
				<div class="alert-body collapsed" id="alert-body1">
					<p>If you have shopped with us before, please enter your details below.
						If you are a new customer, please proceed to the Billing section.</p>
					<div class="row cols-md-2">
						<form class="mb-4 mb-md-0">
							<label for="username">Username Or Email *</label>
							<input type="text" class="input-text form-control mb-0" name="username"
								id="username" autocomplete="username">
						</form>
						<form class="mb-4 mb-md-0">
							<label for="password">Password *</label>
							<input class="input-text form-control mb-0" type="password" name="password"
								id="password" autocomplete="current-password">
						</form>
					</div>
					<div class="checkbox d-flex align-items-center justify-content-between">
						<div class="form-checkbox pt-0 mb-0">
							<input type="checkbox" class="custom-checkbox" id="signin-remember"
								name="signin-remember" />
							<label class="form-control-label" for="signin-remember">Remember
								Me</label>
						</div>
						<a href="#" class="lost-link">Lost your password?</a>
					</div>
					<div class="link-group">
						<a href="#" class="btn btn-dark btn-rounded mb-4">Login</a>
						<span class="d-inline-block text-body font-weight-semi-bold">or Login With</span>
						<div class="social-links mb-4">
							<a href="#" class="social-link social-google fab fa-google"></a>
							<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
							<a href="#" class="social-link social-twitter fab fa-twitter"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="card accordion">
				<div class="alert alert-light alert-primary alert-icon mb-4 card-header">
					<i class="fas fa-exclamation-circle"></i>
					<span class="text-body">Have a coupon?</span>
					<a href="#alert-body2" class="text-primary">Click here to enter your code</a>
				</div>
				<div class="alert-body collapsed" id="alert-body2">
					<p>If you have a coupon code, please apply it below.</p>
					<div class="check-coupon-box d-flex">
						<input type="text" name="coupon_code"
							class="input-text form-control text-grey ls-m mr-4 mb-4" id="coupon_code" value=""
							placeholder="Coupon code">
						<button type="submit" class="btn btn-dark btn-rounded btn-outline mb-4">Apply
							Coupon</button>
					</div>
				</div>
			</div> --}}
			
								
			<form class="form" action="{{ route('checkout.store') }}" method="POST">
				@csrf
				<div class="row">
					<div class="col-lg-7 mb-6 mb-lg-0 pr-lg-4">
						<h3 class="title title-simple text-left text-uppercase">Billing Details</h3>
						<div class="row">
							<div class="col-xs-6">
								<label>Shipping Name *</label>
								<input type="text" class="form-control" name="shipping_name" id="exampleInputEmail1" placeholder="Full Name" value="{{ Auth::user()->name }}"  required="" />
							</div>
							
							<div class="col-xs-6">
								<label>Phone *</label>
								<input type="number" class="form-control" name="shipping_phone" id="exampleInputEmail1" placeholder="Phone" value="{{ Auth::user()->phone }}" required="" />
							</div>
						</div>
						<label>Email Address *</label>
						<input type="email" class="form-control" name="shipping_email" id="exampleInputEmail1" placeholder="Email" value="{{ Auth::user()->email }}"required="" />
						{{-- <label>Company Name (Optional)</label>
						<input type="text" class="form-control" name="company-name" required="" /> --}}
						
						<label>Full Address *</label>
						<input type="text" class="form-control" name="shipping_address" required=""
							placeholder="House number and street name with full address" />
						{{-- <input type="text" class="form-control" name="address2" required=""
							placeholder="Apartment, suite, unit, etc. (optional)" /> --}}
						
						
						
						<label>Division / Region *</label>
						<div class="select-box ">
							<select name="division_id" class="form-control">
								<option value="" selected="" disabled="">Select Division</option>
								@foreach($divisions as $item)
									<option value="{{ $item->id }}">{{ $item->division_name }}</option>	
								@endforeach
								
							</select>
							@error('division_id') 
							<span class="text-danger">{{ $message }}</span>
							@enderror 
						</div>
						<label> State </label>
						<div class="select-box">
							<select name="district_id" class="form-control">
								<option value="" selected="" disabled="">Select District</option>
								 
								
							</select>
							@error('district_id') 
							<span class="text-danger">{{ $message }}</span>
							@enderror 
						</div>
						<label>District / City *</label>
						<div class="select-box">
							<select name="state_id" class="form-control">
								<option value="" selected="" disabled="">Select State</option>
								
							</select>
							@error('state_id') 
							<span class="text-danger">{{ $message }}</span>
							@enderror 
						</div>
						
						
						{{-- <div class="row">
							<div class="col-xs-6">
								<label>Town / City *</label>
								<input type="text" class="form-control" name="city" required="" />
							</div>
							<div class="col-xs-6">
								<label>State *</label>
								<input type="text" class="form-control" name="state" required="" />
							</div>
						</div> --}}
						<div class="row">
							<div class="col-xs-6">
								<label>ZIP *</label>
								<input type="text" class="form-control" name="post_code"   id="exampleInputEmail1" placeholder="Post Code"required="" />
							</div>
							
						</div>
						
						{{-- <div class="form-checkbox mb-0">
							<input type="checkbox" class="custom-checkbox" id="create-account"
								name="create-account">
							<label class="form-control-label ls-s" for="create-account">Create an
								account?</label>
						</div>
						<div class="form-checkbox mb-6">
							<input type="checkbox" class="custom-checkbox" id="different-address"
								name="different-address">
							<label class="form-control-label ls-s" for="different-address">Ship to a different
								address?</label>
						</div> --}}

						<h2 class="title title-simple text-uppercase text-left">Additional Information</h2>
						<label>Order Notes (Optional)</label>
						<textarea class="form-control pb-2 pt-2 mb-0" cols="30" rows="5"
							placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
					</div>
					<aside class="col-lg-5 sticky-sidebar-wrapper">
						<div class="sticky-sidebar mt-1" data-sticky-options="{'bottom': 50}">
							<div class="summary pt-5">
								<h3 class="title title-simple text-left text-uppercase">Your Order</h3>
								<table class="order-table">
									<thead>
										<tr>
											<th>Product</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										@foreach($carts as $item)
										<tr>
											<td class="product-name"><img src="{{ asset($item->options->image) }}" style="height: 50px; width: 50px;">
												&nbsp; &nbsp; &nbsp;	<span>{{ $item->name }} </span><span>{{ $item->options->color }} </span><span>{{ $item->options->size }} </span>
												{{-- <span class="product-quantity">×&nbsp;( {{ $item->qty }} )</span></td> --}}
											<td class="product-total text-body product-quantity" > ( {{ $item->qty}} pcs) × ₹ {{ $item->price }}.00 </td>
										</tr>
										@endforeach 


									@if(Session::has('coupon'))
										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Subtotal</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">₹ {{ $cartbeforedis }}
												<input type="hidden" class="form-control" name="cartbeforedis" value="{{$cartbeforedis}}" />
											</td>
										</tr>


										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Coupon </h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">{{ session()->get('coupon')['coupon_name'] }}
											( {{ session()->get('coupon')['coupon_discount'] }} % )
											<input type="hidden" class="form-control" name="coupon_discount" value="{{ session()->get('coupon')['coupon_name'] }}
											( {{ session()->get('coupon')['coupon_discount'] }} % )" />
											</td>
										</tr>

										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Coupon  Discount</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">( - ) ₹ {{ session()->get('coupon')['discount_amount'] }}.00
												<input type="hidden" class="form-control" name="discount_amount" value="{{ session()->get('coupon')['discount_amount'] }}"/>
											</td>
										</tr>

										{{-- <tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Grand Total :   </h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">${{ session()->get('coupon')['total_amount'] }} 
											</td>
										</tr> --}}
										{{-- <tr class="sumnary-shipping shipping-row-last">
											<td colspan="2">
												<h4 class="summary-subtitle">Calculate Shipping</h4>
												<ul>
													<li>
														<div class="custom-radio">
															<input type="radio" id="flat_rate" name="shipping"
																class="custom-control-input" checked>
															<label class="custom-control-label"
																for="flat_rate">Flat rate</label>
														</div>
													</li>

													<li>
														<div class="custom-radio">
															<input type="radio" id="free-shipping"
																name="shipping" class="custom-control-input">
															<label class="custom-control-label"
																for="free-shipping">Free
																shipping</label>
														</div>
													</li>

													<li>
														<div class="custom-radio">
															<input type="radio" id="local_pickup"
																name="shipping" class="custom-control-input">
															<label class="custom-control-label"
																for="local_pickup">Local pickup</label>
														</div>
													</li>
												</ul>
											</td>
										</tr> --}}

										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">GST/CGST (18%)</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">( + ) ₹ {{ $carttax }}.00
												<input type="hidden" class="form-control" name="carttax"  value="{{ $carttax }}"/>
											</td>
										</tr>
										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Shipping Charges</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">( + )  ₹ {{ $delivery }}.00
												<input type="hidden" class="form-control" name="delivery"  value="{{ $delivery }}"/>
											</td>
										</tr>

										<tr class="summary-total">
											<td class="pb-0">
												<h4 class="summary-subtitle">Grand Total</h4>
											</td>
											<td class=" pt-0 pb-0">
												<p class="summary-total-price ls-s text-primary">₹ {{ session()->get('coupon')['total_amount'] }}.00</p>
												<input type="hidden" class="form-control" name="total_amount"  value=" {{ session()->get('coupon')['total_amount'] }} "/>
											</td>
										</tr>

									@else

										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Sub total</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">₹ {{ $cartbeforedis }}
												<input type="hidden" class="form-control" name="cartbeforedis"  value=" {{ $cartbeforedis }} "/>
											
											</td>

										</tr>
										@php
					
											// $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
											//  dd($dealer->count());
											$dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id());
											
											// dd($dealer->dealer );
										@endphp 
										
											@if($dealer->dealer == 0)
											{{-- @if($dealer->count() == 0) --}}
											
											
											@elseif($dealer->dealer == 1)
											<tr class="summary-subtotal"> 
												<td>
													<h4 class="summary-subtitle">Trainer Discount</h4>
												</td>
												<td class="summary-subtotal-price pb-0 pt-0 text-primary"> 30 % OFF
												</td> 
											</tr>

											@elseif($dealer->dealer == 2)
											{{-- @else --}}
											
											<tr class="summary-subtotal"> 
												<td>
													<h4 class="summary-subtitle">Dealer Discount</h4>
												</td>
												<td class="summary-subtotal-price pb-0 pt-0 text-primary"> 50 % OFF
												</td> 
											</tr>
											@endif

										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">GST/CGST (18%)</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">( + ) ₹ {{ $carttax }}
												<input type="hidden" class="form-control" name="carttax"  value="{{ $carttax }}"/>
											</td>
										</tr>
										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Shipping Charges</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">( + ) ₹ {{ $delivery }}.00
												<input type="hidden" class="form-control" name="delivery"  value="{{ $delivery }}"/>
											</td>
										</tr>
										

										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Total</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">₹ {{ $cartTotal }}.00
												<input type="hidden" class="form-control" name="cartTotal"  value="{{ $cartTotal }}"/>
											</td>
										</tr>

										{{-- <tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Grand Total :   </h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0">${{ $cartTotal }}
											</td>
										</tr> --}}

										{{-- <tr class="sumnary-shipping shipping-row-last">
											<td colspan="2">
												<h4 class="summary-subtitle">Calculate Shipping</h4>
												<ul>
													<li>
														<div class="custom-radio">
															<input type="radio" id="flat_rate" name="shipping"
																class="custom-control-input" checked>
															<label class="custom-control-label"
																for="flat_rate">Flat rate</label>
														</div>
													</li>

													<li>
														<div class="custom-radio">
															<input type="radio" id="free-shipping"
																name="shipping" class="custom-control-input">
															<label class="custom-control-label"
																for="free-shipping">Free
																shipping</label>
														</div>
													</li>

													<li>
														<div class="custom-radio">
															<input type="radio" id="local_pickup"
																name="shipping" class="custom-control-input">
															<label class="custom-control-label"
																for="local_pickup">Local pickup</label>
														</div>
													</li>
												</ul>
											</td>
										</tr> --}}

										<tr class="summary-total">
											<td class="pb-0">
												<h4 class="summary-subtitle">Grand Total</h4>
											</td>
											<td class=" pt-0 pb-0">
												<p class="summary-total-price ls-s text-primary">₹ {{ $cartTotal }}.00</p>
												<input type="hidden" class="form-control" name="cartTotal"  value="{{ $cartTotal }}"/>
											</td>
										</tr>

									@endif 

									</tbody>
								</table>
								<div class="payment accordion radio-type">
									<h4 class="summary-subtitle ls-m pb-3">Payment Methods</h4>
									{{-- <div class="card">
										<div class="card-header">
											<a href="#collapse1" class="text-body text-normal ls-m collapse">Check payments
											</a>
										</div>
										<div id="collapse1" class="expanded" style="display: block;">
											<div class="card-body ls-m">
												<input type="radio" name="payment_method" value="stripe" style="height:35px; width:35px; vertical-align: middle;"> 
												<img src="{{ asset('frontend/images/payments/4.png') }}">
											</div>
										</div>
									</div> --}}
									<div class="form-checkbox mt-4 mb-5">
										<input type="checkbox" class="custom-checkbox" id="terms-condition"
											name="terms-condition" />
											{{-- <input  type="checkbox" class="custom-checkbox" id="terms-condition"name="payment_method" value="razorpay" >  --}}
										<label class="form-control-label" for="terms-condition">
											I have read and agree to the website <a href="#">terms and conditions
											</a>*
										</label>	
									</div>

									<div class="card">
										<div class="card-header">
											<a href="#collapse2" class="text-body text-normal ls-m collapse">Cash on delivery </a>
										</div>
										<div id="collapse2" class="expanded" style="display: block;">
											<div class="card-body ls-m" > 
												{{-- <input type="radio" name="payment_method" value="razorpay" >  --}}
												{{-- <input  type="checkbox" class="custom-checkbox"  name="payment_method" value="razorpay" >  --}}
												{{-- Razorpay --}}
												<img src="{{ asset('frontend/images/payments/cash.png') }}" width="50%" style="align-content: center;" style="align-items: center" style="text-align: center"><br>
												<button type="submit" name="payment_method" value="cash" class="btn btn-dark btn-rounded btn-order">Click for Cash on delivery </button>
											</div>
										</div>
									</div>
									
									<div class="card">
										<div class="card-header">
											<a href="#collapse1" class="text-body text-normal ls-m expand">Online payments</a>
										</div>
										<div id="collapse1" class="collapsed" style="display: none;">
											<div class="card-body ls-m"> 
												{{-- <input type="radio" name="payment_method" value="cash">  --}}
												{{-- <input  type="checkbox" class="custom-checkbox"  name="payment_method" value="cash" >  --}}
												<img src="{{ asset('frontend/images/payments/Razorpay.png') }}" width="50%"><br>
												<button type="submit" name="payment_method" value="razorpay" class="btn btn-dark btn-rounded btn-order">Click for Online pay </button>
											</div>
										</div>
									</div>
									
									
								</div>

								
								{{-- <div class="form-checkbox mt-4 mb-5">
									<input type="checkbox" class="custom-checkbox" id="terms-condition"
										name="terms-condition" />
										 <input  type="checkbox" class="custom-checkbox" id="terms-condition"name="payment_method" value="razorpay" >  
									<label class="form-control-label" for="terms-condition">
										I have read and agree to the website <a href="#">terms and conditions
										</a>*
									</label>	
								</div> --}}
								{{-- custom --}}
								<div class="row">
									{{-- <div class="col-md-4">
							   <label for="">Stripe</label> 		
						   <input type="radio" name="payment_method" value="stripe">
						   <img src="{{ asset('frontend/images/payments/4.png') }}">		    		
									</div> 
									<!-- end col md 4 -->
					
									<div class="col-md-4">
										<label for="">Card</label> 		
						   <input type="radio" name="payment_method" value="card">	
							<img src="{{ asset('frontend/images/payments/3.png') }}">    		
									</div> <!-- end col md 4 -->
					
									<div class="col-md-4">
										<label for="">Cash</label> 		
						   <input type="radio" name="payment_method" value="cash">	
							  <img src="{{ asset('frontend/images/payments/6.png') }}">  		
									</div> <!-- end col md 4 --> --}}
					
										 
								</div> <!-- // end row  --><br>
								{{-- custom --}}
								{{-- <button type="submit" class="btn btn-dark btn-rounded btn-order">Place
									Order</button> --}}
							</div>
						</div>
					</aside>
				</div>



 
			</form>
		</div>
	</div>

</main>












 
 <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: "{{  url('/district-get/ajax') }}/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	$('select[name="state_id"]').empty(); 
                       var d =$('select[name="district_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });



 $('select[name="district_id"]').on('change', function(){
            var district_id = $(this).val();
            if(district_id) {
                $.ajax({
                    url: "{{  url('/state-get/ajax') }}/"+district_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="state_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 

    });
    </script>




@endsection