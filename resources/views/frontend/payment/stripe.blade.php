@extends('frontend.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
Stripe Payment Page 
@endsection


<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;
  height: 40px;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
</style>


 
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
<nav class="breadcrumb-nav">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="{{url('/')}} "><i class="d-icon-home"></i></a></li>
			<li>Stripe</li>
		</ul>
	</div>
</nav>
</div><br>

<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
	<h3 class="page-subtitle font-weight-bold"> </h3>
	<h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">ONLINE PAYMENT  </h1>
	<p class="page-desc text-white mb-0"> Stripe   </p>
</div>




<main class="main cart">
	<div class="page-content pt-7 pb-10">
		<div class="step-by pr-4 pl-4">
			<h3 class="title title-simple title-step  "><a href="{{ route('mycart') }}">1. Shopping Cart</a></h3>
			<h3 class="title title-simple title-step"><a href="{{ route('checkout') }}">2. Checkout</a></h3>
			<h3 class="title title-simple title-step active"><a href="{{ route('checkout') }}">3. Payment </a></h3>
			<h3 class="title title-simple title-step "><a href="">4. Order Complete</a></h3>
		</div>
		<div class="container mt-7 mb-2">
			<div class="row">
				<div class="col-lg-8 col-md-12 pr-lg-4">
					<table class="shop-table cart-table">
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
								<td>₹ {{ $cartTotal }}</td>
							</tr>
							<tr>
								<td><strong>Coupon Name : </strong></td>
								<td> {{ session()->get('coupon')['coupon_name'] }}
									( {{ session()->get('coupon')['coupon_discount'] }} % )
								</td>
							</tr>
							<tr>
								<td><strong>Coupon Discount : </strong></td>
								<td>₹ {{ session()->get('coupon')['discount_amount'] }} 
								</td>
							</tr>
							<tr>
								<td><strong>Grand Total  : </strong></td>
								<td>₹ {{ session()->get('coupon')['total_amount'] }} 
									
								</td>
							</tr>	
							@else 

							<tr>
								<td><strong>SubTotal : </strong></td>
								<td>₹ {{ $cartTotal }}</td>
							</tr>
							
							<tr>
								<td><strong>Grand Total  : </strong></td>
								<td>₹ {{ $cartTotal }} 
									
								</td>
							</tr>	
							
							@endif 

							
						</tbody>
					</table>
					<div class="cart-actions mb-6 pt-4">
						<a href="shop.html" class="btn btn-dark btn-md btn-rounded btn-icon-left mr-4 mb-4"><i
								class="d-icon-arrow-left"></i>Continue Shopping</a>
						{{-- <button type="submit"
							class="btn btn-outline btn-dark btn-md btn-rounded btn-disabled">Update
							Cart</button> --}}
					</div>
					
				</div>





        <aside class="col-lg-4 sticky-sidebar-wrapper">
					<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}" >
						
						<form action="{{ route('stripe.order') }}" method="post" id="payment-form">
							@csrf
						<div class="summary mb-4">
							<h3 class="summary-title text-left">Online Stripe Payment</h3>
							<img src="{{ asset('frontend/assets/images/payments/cash.png') }}">
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






  

 <script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_51JSIZdSAWaZvksqSnnzgkStDD1A7ahxkHBNgKdhTsbaZO7M3OfnWZsxadalW7L4ZP61FXJ08mpVxQSz2lRYU5tSV00vCtyxH1z');
// Create an instance of Elements.
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}
</script>




@endsection