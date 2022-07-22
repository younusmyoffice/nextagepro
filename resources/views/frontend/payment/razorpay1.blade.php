@extends('frontend.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

@section('title')
Razor  Payment Page 
@endsection


	<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
		<nav class="breadcrumb-nav">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="{{url('/')}} "><i class="d-icon-home"></i></a></li>
					<li>Razorpay</li>
				</ul>
			</div>
		</nav>
	</div><br>

	<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
		<h3 class="page-subtitle font-weight-bold"> </h3>
		<h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">ONLINE PAYMENT  </h1>
		<p class="page-desc text-white mb-0"> Razorpay   </p>
	</div>




	<main class="main cart" > 
		<div class="page-content pt-7 pb-10" >
			<div class="step-by pr-4 pl-4">
				<h3 class="title title-simple title-step  "><a href="{{ route('mycart') }}">1. Shopping Cart</a></h3>
				<h3 class="title title-simple title-step"><a href="{{ route('checkout') }}">2. Checkout</a></h3>
				<h3 class="title title-simple title-step active"><a href="{{ route('checkout') }}">3. Payment </a></h3>
				<h3 class="title title-simple title-step "><a href="">4. Order Complete</a></h3>
			</div>
			<div class="container mt-7 mb-2">
				<div class="row">
					<div 
					{{-- class="col-lg-8 col-md-12 pr-lg-4"  --}}
					style="align-content: center;align-items: center;text-align: center">
					<img src="{{ asset('frontend/images/payments/Razorpay.png') }}" width='30%' height="auto">
					</div>
					{{-- <button type="submit">Submit Payment</button> --}}
					<h3 class="summary-title text-center">Online Razor Payment</h3>
					
						<button id="rzp-button1" class="btn btn-primary  btn-rounded btn-md ml-2 btn-center" >Pay</button>
						<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
						<script>
						var options = {    
						"key": "{{ $response ['razorpayId'] }}", // Enter the Key ID generated from the Dashboard    
						"amount": "{{ $response['amount'] ?? ''}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise    
						// "currency": "{{ $response['currency'] ?? ''}}",  
						"currency": "INR",    
						"name": "{{ $response['name'] ?? ''}}",    
						"description": "{{ $response['description'] ?? ''}}  ",    
						"image": "http://127.0.0.1:8000/frontend/images/logo.png",   
						"order_id": "{{ $response['order_id'] }}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1   
						"handler": function (response){ 
							alert(response.razorpay_payment_id);       
							alert(response.razorpay_order_id);      
							alert(response.razorpay_signature);
							
							document.getElementById('rzp_paymentId').value = response.razorpay_payment_id; 

							document.getElementById('rzp_orderId').value = response.razorpay_order_id;      
							document.getElementById('rzp_signature').value = response.razorpay_signature ;
							document.getElementById('rzp_paymentresponse').click();
							
							},    
						"prefill": {        
							"name": "{{ $response['name'] ?? ''}} ",        
							"email": "{{ $response['email'] ?? ''}}",        
							"contact": "{{ $response['phone'] ?? ''}}"    
							},   
						"notes": {       
							"address": "{{ $response['address'] ?? ''}}"    
							},   
							"theme": {        
								"color": "#3399cc"    
							}
						};

						// var rzp1 = new Razorpay(options);
						
						var rzp1 = new Razorpay(options);
						window.onload = function(){
							document.getElementById('rzp-button1').click();
							
						};
						rzp1.on('payment.failed', function (response){        
							alert(response.error.code);        
							alert(response.error.description);        
							alert(response.error.source);        
							alert(response.error.step);        
							alert(response.error.reason);        
							alert(response.error.metadata.order_id);        
							alert(response.error.metadata.payment_id);
						});
						document.getElementById('rzp-button1').onclick = function(e){ 
							rzp1.open();
							e.preventDefault();
						}

						</script>
						{{-- Session::put('paymentid', rzp_paymentId); --}}


						<form action="{{ url('user/payment-complete') }}" method="POST" hidden>

						<input type="hidden" name="_token" value="{{csrf_token() }}">
						<input type="text" name="rzp_paymentId" id="rzp_paymentId" >
						<input type="text" name="rzp_orderId"   id="rzp_orderId"   >
						<input type="text" name="rzp_signature" id="rzp_signature" >
						{{-- <input type="hidden" name="rzp_generated_signature" value="" id="rzp_generated_signature"> --}}
						<button type="submit" id="rzp_paymentresponse">submit</button>
						</form>			




					 
				</div>
			</div>
		</div>

	</main>

@endsection