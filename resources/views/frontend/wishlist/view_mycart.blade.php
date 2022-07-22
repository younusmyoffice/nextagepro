@extends('frontend.master')
@section('content')

@section('title')
My Cart Page 
@endsection


<div style=" box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
<nav class="breadcrumb-nav">
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
	<h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">SHOPPING CART  </h1>
	<p class="page-desc text-white mb-0"> My Cart </p>
</div>
<main class="main cart">
	<div class="page-content pt-7 pb-10">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-simple title-step  active"><a href="{{ route('mycart') }}">1. Shopping Cart</a></h3>
			<h3 class="title title-simple title-step"><a href="{{ route('checkout') }}">2. Checkout</a></h3>
			<h3 class="title title-simple title-step "><a href="{{ route('checkout') }}">3. Payment </a></h3>
			<h3 class="title title-simple title-step "><a href="">4. Order Complete</a></h3>
		</div>
		<div class="container mt-7 mb-2" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
			<div class="row">
				<div class="col-lg-8 col-md-12 pr-lg-4" >
					<fieldset>
					<table class="shop-table cart-table">
						<thead>
							<tr>
								<th><span>Product</span></th>
								<th><span>Name</span></th>
								<th><span>Price</span></th>
								<th><span>Color</span></th>
								<th><span>Size</span></th> 
								<th><span>Quantity</span></th>
								<th><span>Subtotal</span></th>
								<th><span>Remove</span></th>
							</tr>
						</thead>
						<tbody id="cartPage">
						
							
						</tbody>
					</table>
				</fieldset>
					<div class="cart-actions mb-6 pt-4">
						<a href="shop.html" class="btn btn-dark btn-md btn-rounded btn-icon-left mr-4 mb-4"><i
								class="d-icon-arrow-left"></i>Continue Shopping</a>
						{{-- <button type="submit"
							class="btn btn-outline btn-dark btn-md btn-rounded btn-disabled">Update
							Cart</button> --}}
					</div>
					@php
					$dealer = DB::table('users')->where('id','=',Auth::id())->find(Auth::id()); 
					//  $dealer = DB::table('users')->where('dealer','=',1)->where('id','=',Auth::id())->get();
					//  $user = User::all('dealer');  
					//  dd($dealer);
 					@endphp 
     
					 {{-- @if($dealer == null)  --}}
					{{-- @if($dealer->count() == 0) --}}
					{{-- @if($dealer->dealer == 0) --}}
					
							{{-- @if(Session::has('coupon'))

							@else
								<div class="cart-coupon-box mb-8" id="couponField">
									
									<h4 class="title coupon-title text-uppercase ls-m">Coupon Discount</h4>
									<input type="text" 
										class="input-text form-control text-grey ls-m mb-4" value=""
										placeholder="Enter coupon code here..." id="coupon_name">
									<button type="submit" onclick="applyCoupon()" class="btn btn-md btn-dark btn-rounded btn-outline">Apply
										Coupon</button>
								</div>
							@endif --}}
					{{-- @elseif($dealer->dealer == 1) --}}

					{{-- @else --}}
				
							@if($dealer == null || $dealer->dealer == 0)
							
									@if(Session::has('coupon'))

									@else
										<div class="cart-coupon-box mb-8" id="couponField">
											
											<h4 class="title coupon-title text-uppercase ls-m">Coupon Discount</h4>
											<input type="text" 
												class="input-text form-control text-grey ls-m mb-4" value=""
												placeholder="Enter coupon code here..." id="coupon_name">
											<button type="submit" onclick="applyCoupon()" class="btn btn-md btn-dark btn-rounded btn-outline">Apply
												Coupon</button>
										</div>
									@endif
							@elseif($dealer->dealer == 1)
							@else
							@endif
						
					{{-- @endif  --}}
					
				</div>
				<aside class="col-lg-4 sticky-sidebar-wrapper">
					<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}" >
						<div class="summary mb-4">
							<h3 class="summary-title text-left">Cart Totals</h3>
							<table>
								{{-- @if($dealer == null)
								
								@else  --}}
									@if($dealer == null || $dealer->dealer == 0)
									
									
									@elseif($dealer->dealer == 1)
										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Trainer Discount </h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0 text-primary"> 30 % OFF
											</td> 
										</tr>

									@else 

										<tr class="summary-subtotal"> 
											<td>
												<h4 class="summary-subtitle">Dealer Discount</h4>
											</td>
											<td class="summary-subtotal-price pb-0 pt-0 text-primary"> 50 % OFF
											</td> 
										</tr>
									@endif
								{{-- @endif --}}
							</table>

							<div id="couponCalField">
								
							</div>

							{{-- <table class="shipping">
								<tr class="summary-subtotal">
									<td>
										<h4 class="summary-subtitle">Subtotal</h4>
									</td>
									<td>
										<p class="summary-subtotal-price">$426.99</p>
									</td>
								</tr>
								<tr class="sumnary-shipping shipping-row-last">
									<td colspan="2">
										<h4 class="summary-subtitle">Calculate Shipping</h4>
										<ul> 
											<li>
												<div class="custom-radio">
													<input type="radio" id="flat_rate" name="shipping"
														class="custom-control-input" checked>
													<label class="custom-control-label" for="flat_rate">Flat
														rate</label>
												</div>
											</li>
											<li>
												<div class="custom-radio">
													<input type="radio" id="free-shipping" name="shipping"
														class="custom-control-input">
													<label class="custom-control-label" for="free-shipping">Free
														shipping</label>
												</div>
											</li>

											<li>
												<div class="custom-radio">
													<input type="radio" id="local_pickup" name="shipping"
														class="custom-control-input">
													<label class="custom-control-label" for="local_pickup">Local
														pickup</label>
												</div>
											</li>
										</ul>
									</td>
								</tr>
							</table>
							<div class="shipping-address">
								<label>Shipping to <strong>CA.</strong></label>
								<div class="select-box">
									<select name="country" class="form-control">
										<option value="us" selected>United States (US)</option>
										<option value="uk"> United Kingdom</option>
										<option value="fr">France</option>
										<option value="aus">Austria</option>
									</select>
								</div>
								<div class="select-box">
									<select name="country" class="form-control">
										<option value="us" selected>California</option>
										<option value="uk">Alaska</option>
										<option value="fr">Delaware</option>
										<option value="aus">Hawaii</option>
									</select>
								</div>
								<input type="text" class="form-control" name="code" placeholder="Town / City" />
								<input type="text" class="form-control" name="code" placeholder="ZIP" />
								<a href="#" class="btn btn-md btn-dark btn-rounded btn-outline">Update
									totals</a>
							</div>
							<table class="total">
								<tr class="summary-subtotal">
									<td>
										<h4 class="summary-subtitle">Total</h4>
									</td>
									<td>
										<p class="summary-total-price ls-s">$426.99</p>
									</td>
								</tr>
							</table> --}}
							
							<a href="{{ route('checkout') }}" class="btn btn-dark btn-rounded btn-checkout" type="submit">Proceed to
								checkout</a>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>

</main>


@endsection
