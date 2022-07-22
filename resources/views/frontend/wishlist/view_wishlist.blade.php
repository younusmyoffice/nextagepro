@extends('frontend.master')
@section('content')

@section('title')
 Wish List Page 
@endsection
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
<nav class="breadcrumb-nav">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="{{url('/')}} "><i class="d-icon-home"></i></a> </li>
			<li >Wishlist</li>
		</ul>
	</div>
</nav>
</div><br>
<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
	<h3 class="page-subtitle font-weight-bold"> </h3>
	<h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">WISHLIST  </h1>
	<p class="page-desc text-white mb-0"> Products in Wishlist</p>
</div>
<div class="page-content pt-10 pb-10 mb-2">
	<div class="container" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
		<table class="shop-table wishlist-table mt-2 mb-4 table">
			<thead>
				<tr>
					<th class="product-name"><span>Product</span></th>
					<th></th>
					<th class="product-price"><span>Price</span></th>
					<th class="product-stock-status"><span>Stock </span></th>
					<th class="product-add-to-cart">Status</th>
					<th class="product-remove">Remove</th>
				</tr>
			</thead>
			<tbody class="wishlist-items-wrapper"  id="wishlist">
				{{-- <tr>
					<td class="product-thumbnail">
						<a href="product-simple.html">
							<figure>
								<img src="images/products/product11.jpg" width="100" height="100"
									alt="product">
							</figure>
						</a>
					</td>
					<td class="product-name">
						<a href="product-simple.html">Beige knitted elastic runner shoes</a>
					</td>
					<td class="product-price">
						<span class="amount">$84.00</span>
					</td>
					<td class="product-stock-status">
						<span class="wishlist-in-stock">In Stock</span>
					</td>
					<td class="product-add-to-cart">
						<a href="product.html" class="btn-product btn-primary"><span>Select
								options</span></a>
					</td>
					<td class="product-remove">
						<div>
							<a href="#" class="remove" title="Remove this product"><i
									class="fas fa-times"></i></a>
						</div>
					</td>
				</tr> --}}

				
			</tbody>
		</table>
		<div class="social-links share-on">
			<h5 class="text-uppercase font-weight-bold mb-0 mr-4 ls-s">Share on:</h5>
			<a href="#" class="social-link social-icon social-facebook" title="Facebook"><i
					class="fab fa-facebook-f"></i></a>
			<a href="#" class="social-link social-icon social-twitter" title="Twitter"><i
					class="fab fa-twitter"></i></a>
			<a href="#" class="social-link social-icon social-pinterest" title="Pinterest"><i
					class="fab fa-pinterest-p"></i></a>
			<a href="#" class="social-link social-icon social-email" title="Email"><i
					class="far fa-envelope"></i></a>
			<a href="#" class="social-link social-icon social-whatsapp" title="Whatsapp"><i
					class="fab fa-whatsapp"></i></a>
		</div>
	</div>
</div>


{{--  --}}

{{-- 

<div class="body-content">
	<div class="container">
		<div class="my-wishlist-page">
			<div class="row">
				<div class="col-md-12 my-wishlist">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th colspan="4" class="heading-title">My Wishlist</th>
								</tr>
							</thead>
							<tbody id="wishlist">
								
								
							</tbody>
						</table>
					</div>
				</div>		
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->

 

						<br>
 			 @include('frontend.body.brands') 
	</div>
</div> --}}







@endsection
