


@extends('frontend.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
Order Complete
@endsection

 
 
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
	<nav class="breadcrumb-nav">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{url('/')}} "><i class="d-icon-home"></i></a></li>
				<li>Order Complete   </li>
			</ul>
		</div>
	</nav>
</div><br>

<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
	<h3 class="page-subtitle font-weight-bold"> </h3>
	<h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">Order Complete  </h1>
	<p class="page-desc text-white mb-0"> Thak you for choosing us   </p>
</div>



<main class="main order">
	<div class="page-content pt-7 pb-10">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-simple title-step  "><a href="{{ route('mycart') }}">1. Shopping Cart</a></h3>
			<h3 class="title title-simple title-step"><a href="{{ route('checkout') }}">2. Checkout</a></h3>
			<h3 class="title title-simple title-step "><a href="{{ route('checkout') }}">3. Payment </a></h3>
			<h3 class="title title-simple title-step active"><a href="">4. Order Complete</a></h3>
		</div>
		<div class="container mt-8">
			<div class="order-message mr-auto ml-auto">
				<div class="icon-box d-inline-flex align-items-center">
					<div class="icon-box-icon mb-0">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
							enable-background="new 0 0 50 50" xml:space="preserve">
							<g>
								<path fill="none" stroke-width="3" stroke-linecap="round"
									stroke-linejoin="bevel" stroke-miterlimit="10" d="
									M33.3,3.9c-2.7-1.1-5.6-1.8-8.7-1.8c-12.3,0-22.4,10-22.4,22.4c0,12.3,10,22.4,22.4,22.4c12.3,0,22.4-10,22.4-22.4
									c0-0.7,0-1.4-0.1-2.1"></path>
								<polyline fill="none" stroke-width="4" stroke-linecap="round"
									stroke-linejoin="bevel" stroke-miterlimit="10" points="
									48,6.9 24.4,29.8 17.2,22.3 	"></polyline>
							</g>
						</svg>
					</div>
					<div class="icon-box-content text-left">
						<h5 class="icon-box-title font-weight-bold lh-1 mb-1">Thank You!</h5>
						<p class="lh-1 ls-m">Your order has been received</p>
					</div>
				</div>
			</div>


			{{--<div class="order-results">
				<div class="overview-item">
					<span>Order number:</span>
					<strong> {{ $order->invoice_no }}</strong>
				</div>
				<div class="overview-item">
					<span>Status:</span>
					<strong>{{ $order->status }}</strong>
				</div>
				<div class="overview-item">
					<span>Date:</span>
					<strong>{{ $order->order_date }}</strong>
				</div>
				<div class="overview-item">
					<span>Email:</span>
					<strong>{{ $order->email }}</strong>
				</div>
				<div class="overview-item">
					<span>Total:</span>
					<strong> ₹  {{ $order->amount }}</strong>
				</div>
				<div class="overview-item">
					<span>Payment method:</span>
					<strong>{{ $order->payment_method }}</strong>
				</div>
			</div>

			 <h2 class="title title-simple text-left pt-4 font-weight-bold text-uppercase">Order Details</h2>
			<div class="order-details">
				<table class="order-details-table">
					<thead>
						<tr class="summary-subtotal">
							<td>
								<h3 class="summary-subtitle">Product</h3>
							</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach ($orderItem as $item) 
						<tr>
							<td class="product-name"> <img src="{{ asset($item->product->product_thambnail) }}" height="100px;" width="100px;">  {{ $item->product->product_name_en }} <span> <i class="fas fa-times"></i>
								{{ $item->qty }}</span></td>
							<td class="product-price"> ${{ $item->price }}  ( $ {{ $item->price * $item->qty}} ) </td>
						</tr>
						@endforeach
					
						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Subtotal:</h4>
							</td>
							<td class="summary-subtotal-price">$312.00</td>
						</tr>
						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Shipping:</h4>
							</td>
							<td class="summary-subtotal-price">Free shipping</td>
						</tr>
						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Payment method:</h4>
							</td>
							<td class="summary-subtotal-price">{{ $order->payment_method }}</td>
						</tr>
						<tr class="summary-subtotal">
							<td>
								<h4 class="summary-subtitle">Total:</h4>
							</td>
							<td>
								<p class="summary-total-price">$312.00</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<h2 class="title title-simple text-left pt-10 mb-2">Billing Address</h2>
			<div class="address-info pb-8 mb-6">
				<p class="address-detail pb-2">
					{{ $order->name }}<br>
					{{ $order->phone }}<br>
					{{ $order->division->division_name ?? 'None'}},
					{{ $order->shipping_address ?? 'None' }},
					{{ $order->district->district_name ?? 'None'}},
					{{ $order->state->state_name ?? 'None'}}, 
					 {{ $order->post_code }}
				</p>
				<p class="email">{{ $order->email }}</p>
			</div> --}}

			<a href="{{route('dashboard')}}" class="btn btn-icon-left btn-dark btn-back btn-rounded btn-md mb-4"><i
					class="d-icon-arrow-left"></i> Go to My Account</a>
		</div>
	</div>

</main>

 



















 


@endsection