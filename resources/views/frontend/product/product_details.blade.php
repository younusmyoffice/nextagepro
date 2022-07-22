@extends('frontend.master')
@section('content')

@section('title')
{{ $product->product_name_en }} Product Details
@endsection

<style>
	.checked {
  color: orange;
}

</style>
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
 
	<nav class="breadcrumb-nav">
	  <div class="container">
		<ul class="breadcrumb">
		 
		  <li><a href="{{url('/')}}"> <i class="d-icon-home"></i> </a> </li>
		  <li class='active'> Shop </li>
		  <li class='active'> {{ $product->product_name_en }} </li>
		</ul>
	  </div>
	</nav>
  </div><br>

<div class="page-content mb-10 pb-6">
	<div class="container">
		<div class="product product-single row mb-7">
			<div class="col-md-6 sticky-sidebar-wrapper">
				<div class="product-gallery pg-vertical sticky-sidebar"
					data-sticky-options="{'minWidth': 767}">
					<div
						class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
						@foreach($multiImag as $img)
						<figure class="product-image">
							
							<img src="{{ asset($img->photo_name ) }}"
								data-zoom-image="{{ asset($img->photo_name ) }}"
								alt="Modern Wireless Mouse" width="800" height="900">
							
						</figure>
						@endforeach
						
						{{-- <figure class="product-image">
							<img src="images/product/product-22-4-600x675.jpg"
								data-zoom-image="images/product/product-22-4.jpg"
								alt="Modern Wireless Mouse" width="800" height="900">
						</figure>  --}}
					</div>
					<div class="product-thumbs-wrap">
						<div class="product-thumbs">
							@foreach($multiImag as $img)
							<div class="product-thumb active" id="slide{{ $img->id }}">
								<img src="{{ asset($img->photo_name ) }}" alt="product thumbnail"
									width="150" height="169" />
							</div>
							@endforeach
              
							
							{{-- <div class="product-thumb">
								<a class="btn-play btn-video btn-iframe" href="video/memory-of-a-woman.mp4">
									<img src="images/product/product-22-4-150x169.jpg"
										alt="product thumbnail" width="150" height="169" />
								</a>
							</div> --}}
						</div>
						<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
						<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
					</div>
					@php
					$amount = $product->selling_price - $product->discount_price;
					$discount = ($amount/$product->selling_price) * 100;
					@endphp  
					<div class="product-label-group">
						@if ($product->discount_price == NULL)
						<label class="product-label label-new">new</label>
						@else
						<label class="product-label label-sale">{{ round($discount) }}% OFF</label>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-details">
					<div class="product-navigation">
						<ul class="breadcrumb breadcrumb-lg">
							<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
							<li><a href="#" class="active">Products</a></li>
							<li><a href="#">@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif</a></li>
						</ul>

						{{-- <ul class="product-nav">
							<li class="product-nav-prev">
								<a href="#">
									<i class="d-icon-arrow-left"></i> Prev
									<span class="product-nav-popup">
										<img src="images/product/product-thumb-prev.jpg"
											alt="product thumbnail" width="110" height="123">
										<span class="product-name">
										 
										</span>
									</span>
								</a>
							</li>
							<li class="product-nav-next">
								<a href="#">
									Next <i class="d-icon-arrow-right"></i>
									<span class="product-nav-popup">
										<img src="images/product/product-thumb-next.jpg"
											alt="product thumbnail" width="110" height="123">
										<span class="product-name">
											 
										</span>
									</span>
								</a>
							</li>
						</ul> --}}
					</div>

					<h1 class="product-name name" id="pname"> 
						@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
					</h1>
					<div class="product-meta">
						SKU: <span class="product-sku">{{ $product->product_code }}</span>
						BRAND: <span class="product-brand">{{ $product->brand_id }}</span>
					</div>
					@if ($product->discount_price == NULL)
						<div class="product-price ">
							<span class="price"> ₹ {{ $product->selling_price }}</span>
						</div>
					@else
						<div class="product-price">
							<span class="price"> ₹ {{ $product->discount_price }} </span>      <del class="old-price"> ₹ {{ $product->selling_price }}</del>
						</div>
							
					@endif
				

					{{-- @php 
					$reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();

					$avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');

					@endphp --}}
					<div class="ratings-container">
						<div class="ratings-full">
							<span class="ratings" style="width:80%"></span>
							<span class="tooltiptext tooltip-top"></span>
						</div>
						{{-- <a href="#product-tab-reviews" class="link-to-tab rating-reviews">( {{ count($reviewcount) }} Reviews )</a> --}}
					{{-- <a href="#product-tab-reviews" class="link-to-tab rating-reviews">( {{ count($reviewcount) }} Reviews )</a> --}}
					
					</div>
					{{-- <div class="product-form product-variations product-color">
						@if($product->product_color_en == null)

						@else
						<label>Weight:</label>
						<div class="">
							<h5>5kg</h5>
						</div>
						@endif
					</div> --}}
					{{-- <p class="product-short-desc">
						@if(session()->get('language') == 'hindi') {{ $product->short_descp_hin }} @else {{ $product->short_descp_en }} @endif.
					</p> --}}
					<div class="product-form product-variations product-color">
						@if($product->product_color_en == null)

						@else
						<label> Color / Flavour :  &nbsp;</label>
						<div class="select-box">
							<select name="color" id="color" class="form-control">
								<option value="" selected="" disabled=""> Choose an Option </option>
								@foreach($product_color_en as $color)
								<option value="{{ $color }}">  {{ ucwords($color) }} </option>
								@endforeach
							</select>
						</div>
						@endif
					</div>
					<div class="product-form product-variations product-size">
						
						@if($product->product_size_en == null)

						@else	
						<label>Size / Weight : &nbsp;</label>
						<div class="product-form-group">
							<div class="select-box">
								<select name="size" id="size" class="form-control">
									<option value="" selected="" disabled="">Choose an Option</option>
									@foreach($product_size_en as $size)
									<option value="{{ $size }}"> {{ ucwords($size) }} </option>
									@endforeach
								</select>
							</div>
							<a href="#" class="product-variation-clean" style="display: none;">Clean All</a>
						</div>
						@endif
					</div> 
					<div class="product-variation-price">
						{{-- <span></span> --}}
						
							{{-- @if ($product->discount_price == NULL)
								<div class="product-price">
									<span class="price"> ₹ {{ $product->selling_price }}</span>
								</div>
							@else
								<div class="product-price">
									<span class="price"> ₹ {{ $product->discount_price }} </span>     
								</div>
									
							@endif --}}
					</div>
					<div class="hurryup-bar mb-6">
						<p>Hurry Up! Only <b>10</b> left in stock.</p>
						<span class="bar">
							<span class="stock-bar" style="width: 50%;"></span>
						</span>
					</div>

					<hr class="product-divider">
					<div class="row">
						<a href="{{ route('wishlist') }}" class="btn-product btn-wishlist mr-6 " id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="d-icon-heart"></i>Add to
							wishlist</a>

					</div>

					<hr class="product-divider">

					<div class="product-form product-qty">
						<div class="product-form-group">
							<div class="input-group mr-2">
								<button class="quantity-minus d-icon-minus"></button>
								<input class="quantity form-control" type="text" min="1" id="qty" value="1" max="1000000">
								<button class="quantity-plus d-icon-plus"></button>
							</div>
							<input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
							<button type="submit" onclick="addToCart()"
								class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold"><i
									class="d-icon-bag"></i>Add to Cart</button>
								{{-- <button type="submit" onclick="addToCart()" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button> --}}

						</div>
					</div>

					<hr class="product-divider mb-3">

					<div class="product-footer">
						
						
							
						<div class="social-links mr-4">
							{{-- <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
							<a href="#" class="social-link social-twitter fab fa-twitter"></a>
							<a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a> --}}
							<!-- Go to www.addthis.com/dashboard to customize your tools --> 
							<a href="" class="addthis_inline_share_toolbox" ></a>				
													
						</div>
						<span class="divider d-lg-show"></span>
						

						

						
						{{-- <a href="#" class="btn-product btn-compare"><i class="d-icon-compare"></i>Add
							to
							compare</a> --}}
					</div>
				</div>
			</div>
		</div>

		<div class="tab tab-nav-simple product-tabs">
			<ul class="nav nav-tabs justify-content-center" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" href="#product-tab-description">Description</a>
				</li>
				{{-- <li class="nav-item">
					<a class="nav-link" href="#product-tab-additional">Additional information</a>
				</li> --}}
				{{-- <li class="nav-item">
					<a class="nav-link" href="#product-tab-size-guide">Size Guide</a>
				</li> --}}
				<li class="nav-item">
					@php
					$reviews = App\Models\Review::where('product_id',$product->id)->latest()->get();
					@endphp	
 
					<a class="nav-link" href="#product-tab-reviews">Reviews ({{ count($reviews) }})</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active in" id="product-tab-description">
					<div class="row mt-6">
						<div class="col-md-6">
							<h5 class="description-title mb-4 font-weight-semi-bold ls-m">Features</h5>
							<p class="mb-2">
								@if(session()->get('language') == 'hindi') 
								{{ $product->short_descp_hin }} 
								@else 
								{{ $product->short_descp_en }}
								 @endif.
							</p>
							<ul class="mb-8">
								@if(session()->get('language') == 'hindi') 
								<li>{!! $product->long_descp_hin !!} </li>
								@else 
								<li>{!! $product->long_descp_en !!} </li>
								@endif
								
							</ul>
							<h5 class="description-title mb-3 font-weight-semi-bold ls-m">Specifications
							</h5>
							<table class="table">
								<tbody>
									<tr>
										<th class="font-weight-semi-bold text-dark pl-0">Product Code</th>
										<td class="pl-4">{{ $product->product_code }}</td>
									</tr>
									<tr>
										<th class="font-weight-semi-bold text-dark pl-0">Brand Id</th>
										<td class="pl-4">{{ $product->brand_id }}</td>
									</tr>
									<tr>
										<th class="font-weight-semi-bold text-dark pl-0" id="pname"> Name
										</th>
										<td class="pl-4">@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif</td>
									</tr>
									<tr>
										<th class="font-weight-semi-bold text-dark border-no pl-0">
											Weight:</th>
										<td class="border-no pl-4">5kg</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6 pl-md-6 pt-4 pt-md-0">
							<h5 class="description-title font-weight-semi-bold ls-m mb-5">Video Description
							</h5>
							<figure class="p-relative d-inline-block mb-2">
								<img src="{{ asset('/frontend/video/prework.png') }}" width="459" height="270" style="align-content: center;"
									alt="Product" />
								<a class="btn-play btn-iframe" href="{{ asset('frontend/video/prework.mp4') }}"  width="100%" height="auto">
									<i class="d-icon-play-solid"></i>
								</a>
							</figure>
							<div class="icon-box-wrap d-flex flex-wrap">
								<div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4 mr-10">
									<div class="icon-box-icon">
										<i class="d-icon-lock"></i>
									</div>
									<div class="icon-box-content">
										<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">2 year
											warranty</h4>
										<p>Guarantee with no doubt</p>
									</div>
								</div>
								<div class="divider d-xl-show mr-10"></div>
								<div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4">
									<div class="icon-box-icon">
										<i class="d-icon-truck"></i>
									</div>
									<div class="icon-box-content">
										<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">Free shipping
										</h4>
										<p>On orders over $50.00</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{-- <div class="tab-pane" id="product-tab-additional">
					<ul class="list-none">
						<li><label>Brands:</label>
							<p>SkillStar, SLS</p>
						</li>
						<li><label>Color:</label>
							<p>Blue, Brown</p>
						</li>
						<li><label>Size:</label>
							<p>Large, Medium, Small</p>
						</li>
					</ul>
				</div> --}}
				{{-- <div class="tab-pane " id="product-tab-size-guide">
					<figure class="size-image mt-4 mb-4">
						<img src="images/product/size_guide.png" alt="Size Guide Image" width="217"
							height="398">
					</figure>
					<figure class="size-table mt-4 mb-4">
						<table>
							<thead>
								<tr>
									<th>SIZE</th>
									<th>CHEST(IN.)</th>
									<th>WEIST(IN.)</th>
									<th>HIPS(IN.)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>{{ $product->long_descp_hin }}</th>
								</tr>
							</tbody>
						</table>
					</figure>
				</div> --}}
				<div class="tab-pane" id="product-tab-reviews">
					<div class="row">
						<div class="col-lg-4 mb-6">
							<div class="avg-rating-container">
								<mark>5.0</mark>
								<div class="avg-rating">
									<span class="avg-rating-title">Average Rating</span>
									<div class="ratings-container mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:100%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										@php
										$reviews = App\Models\Review::where('product_id',$product->id)->latest()->get();
										@endphp	
	
										<span class="rating-reviews">({{ count($reviews) }} Reviews)</span>
									</div>
								</div>
							</div>
							<div class="ratings-list mb-2">
								<div class="ratings-item">
									<div class="ratings-container mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:100%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
									</div>
									<div class="rating-percent">
										<span style="width:100%;"></span>
									</div>
									<div class="progress-value">100%</div>
								</div>
								<div class="ratings-item">
									<div class="ratings-container mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:80%"></span>
											<span class="tooltiptext tooltip-top">4.00</span>
										</div>
									</div>
									<div class="rating-percent">
										<span style="width:0%;"></span>
									</div>
									<div class="progress-value">0%</div>
								</div>
								<div class="ratings-item">
									<div class="ratings-container mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:60%"></span>
											<span class="tooltiptext tooltip-top">4.00</span>
										</div>
									</div>
									<div class="rating-percent">
										<span style="width:0%;"></span>
									</div>
									<div class="progress-value">0%</div>
								</div>
								<div class="ratings-item">
									<div class="ratings-container mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:40%"></span>
											<span class="tooltiptext tooltip-top">4.00</span>
										</div>
									</div>
									<div class="rating-percent">
										<span style="width:0%;"></span>
									</div>
									<div class="progress-value">0%</div>
								</div>
								<div class="ratings-item">
									<div class="ratings-container mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:20%"></span>
											<span class="tooltiptext tooltip-top">4.00</span>
										</div>
									</div>
									<div class="rating-percent">
										<span style="width:0%;"></span>
									</div>
									<div class="progress-value">0%</div>
								</div>
							</div>
							{{-- post review --}}
							@guest
							<p> <b> To Add Product Review. You Need to Login First <a href="{{ route('login') }}">Login Here</a> </b> </p>
							
							@else 

							{{-- <form role="form" class="cnt-form" method="post" action="{{ route('review.store') }}">
								@csrf
								<input type="hidden" name="product_id" value="{{ $product->id }}"> --}}
									<div class="form-section">
										<div class="review-overlay"></div>
										<div class="review-form-wrapper">
											<div class="title-wrapper text-left">
												<h3 class="title title-simple text-left text-normal">Add a Review</h3>
												<p>Your email address will not be published. Required fields are marked *
												</p>
											</div>
											<div class="rating-form">
												<label for="rating" class="text-dark">Your rating * </label>
												<span class="rating-stars selected">
													<a class="star-1" value="1" name="quality" href="#">1</a>
													<a class="star-2" value="2" name="quality" href="#">2</a>
													<a class="star-3" value="3" name="quality" href="#">3</a>
													<a class="star-4 active"  value="4" name="quality" href="#">4</a>
													<a class="star-5" value="5" name="quality" href="#">5</a>
												</span>
				
												<select name="rating" id="rating" required="" style="display: none;">
													<option value="">Rate…</option>
													<option value="5">Perfect</option>
													<option value="4">Good</option>
													<option value="3">Average</option>
													<option value="2">Not that bad</option>
													<option value="1">Very poor</option>
												</select>
											</div>
											<form role="form" class="cnt-form" method="post" action="{{ route('review.store') }}">
												@csrf
												<input type="hidden" name="product_id" value="{{ $product->id }}">
													
												<input type="text"  name="summary" class="form-control txt" id="exampleInputSummary" placeholder="Summary *" /><br>
												<textarea  name="comment" id="exampleInputReview" cols="30" rows="6" class="form-control mb-4"
													placeholder="Comment *" required></textarea>
				
												{{-- <div class="review-medias">
													<div class="file-input form-control image-input"
														style="background-image: url(images/product/placeholder.png);">
														<div class="file-input-wrapper">
														</div>
														<label class="btn-action btn-upload" title="Upload Media">
															<input type="file" accept=".png, .jpg, .jpeg"
																name="riode_comment_medias_image_1">
														</label>
														<label class="btn-action btn-remove" title="Remove Media">
														</label>
													</div>
													<div class="file-input form-control image-input"
														style="background-image: url(images/product/placeholder.png);">
														<div class="file-input-wrapper">
														</div>
														<label class=" btn-action btn-upload" title="Upload Media">
															<input type="file" accept=".png, .jpg, .jpeg"
																name="riode_comment_medias_image_2">
														</label>
														<label class="btn-action btn-remove" title="Remove Media">
														</label>
													</div>
													<div class="file-input form-control video-input"
														style="background-image: url(images/product/placeholder.png);">
														<video class="file-input-wrapper" controls=""></video>
														<label class="btn-action btn-upload" title="Upload Media">
															<input type="file" accept=".avi, .mp4"
																name="riode_comment_medias_video_1">
														</label>
														<label class="btn-action btn-remove" title="Remove Media">
														</label>
													</div>
												</div>
												<p>Upload images and videos. Maximum count: 3, size: 2MB</p> --}}
												<button type="submit" class="btn btn-primary btn-rounded">Submit<i
														class="d-icon-arrow-right"></i></button>
											</form>
										</div>
									</div>
							{{-- </form> --}}
							@endguest



							{{-- review post --}}
							{{-- <a class="btn btn-dark btn-rounded submit-review-toggle" href="#">Submit
								Review</a> --}}
						</div>
						<div class="col-lg-8 comments pt-2 pb-10 border-no">
							<nav class="toolbox">
								<div class="toolbox-left">
									<div class="toolbox-item">
										<a href="#" class="btn btn-outline btn-rounded">All Reviews</a>
									</div>
									<div class="toolbox-item">
										<a href="#" class="btn btn-outline btn-rounded">With Images</a>
									</div>
									<div class="toolbox-item">
										<a href="#" class="btn btn-outline btn-rounded">With Videos</a>
									</div>
								</div>
								<div class="toolbox-right">
									<div class="toolbox-item toolbox-sort select-box text-dark">
										<label>Sort By :</label>
										<select name="orderby" class="form-control">
											<option value="">Default Order</option>
											<option value="newest" selected="selected">Newest Reviews
											</option>
											<option value="oldest">Oldest Reviews</option>
											<option value="high_rate">Highest Rating</option>
											<option value="low_rate">Lowest Rating</option>
											<option value="most_likely">Most Likely</option>
											<option value="most_unlikely">Most Unlikely</option>
										</select>
									</div>
								</div>
							</nav>
							<ul class="comments-list">
								@php
									$reviews = App\Models\Review::where('product_id',$product->id)->latest()->limit(5)->get();
									@endphp	

								@foreach($reviews as $item)
										@if($item->status == 0)
										@else
								<li>
										
									<div class="comment">

										<figure class="comment-media">
											<a href="#">
												<img src="{{ (!empty($item->user->profile_photo_path))? url('upload/user_images/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}"  alt="avatar">
											</a>
										</figure>
										<div class="comment-body">
											<div class="comment-rating ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
											</div>
											<div class="comment-user">
												<span class="comment-date">by <span
														class="font-weight-semi-bold text-uppercase text-dark">
														{{ $item->user->name }}</span> on
													<span class="font-weight-semi-bold text-dark">
														{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} 
														 </span></span>
											</div>

											<div class="comment-content mb-5">
												<h6>{{ $item->summary }}</h6>
												<p>{{ $item->comment }}</p>
											</div>
											<div class="file-input-wrappers">
												<img class="btn-play btn-img pwsp"
													src="images/products/product1.jpg" width="280"
													height="315" alt="product" />


												<img class="btn-play btn-img pwsp"
													src="images/products/product3.jpg" width="280"
													height="315" alt="product" />

												<a class="btn-play btn-iframe"
													style="background-image: url(images/product/product.jpg);background-size: cover;"
													href="video/memory-of-a-woman.mp4">
													<i class="d-icon-play-solid"></i>
												</a>
											</div>
											<div class="feeling mt-5">
												<button
													class="btn btn-link btn-icon-left btn-slide-up btn-infinite like mr-2">
													<i class="fa fa-thumbs-up"></i>
													Like (<span class="count">0</span>)
												</button>
												<button
													class="btn btn-link btn-icon-left btn-slide-down btn-infinite unlike">
													<i class="fa fa-thumbs-down"></i>
													Unlike (<span class="count">0</span>)
												</button>
											</div>
										</div>
										
									</div>
								</li>
								@endif
								@endforeach
							</ul>
							<nav class="toolbox toolbox-pagination justify-content-end">
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link page-link-prev" href="#" aria-label="Previous"
											tabindex="-1" aria-disabled="true">
											<i class="d-icon-arrow-left"></i>Prev
										</a>
									</li>
									<li class="page-item active" aria-current="page"><a class="page-link"
											href="#">1</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item page-item-dots"><a class="page-link" href="#">6</a>
									</li>
									<li class="page-item">
										<a class="page-link page-link-next" href="#" aria-label="Next">
											Next<i class="d-icon-arrow-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- End Comments -->
					<div class="review-form-section">
						<div class="review-overlay"></div>
						<div class="review-form-wrapper">
							<div class="title-wrapper text-left">
								<h3 class="title title-simple text-left text-normal">Add a Review</h3>
								<p>Your email address will not be published. Required fields are marked *
								</p>
							</div>
							<div class="rating-form">
								<label for="rating" class="text-dark">Your rating * </label>
								<span class="rating-stars selected">
									<a class="star-1" href="#">1</a>
									<a class="star-2" href="#">2</a>
									<a class="star-3" href="#">3</a>
									<a class="star-4 active" href="#">4</a>
									<a class="star-5" href="#">5</a>
								</span>

								<select name="rating" id="rating" required="" style="display: none;">
									<option value="">Rate…</option>
									<option value="5">Perfect</option>
									<option value="4">Good</option>
									<option value="3">Average</option>
									<option value="2">Not that bad</option>
									<option value="1">Very poor</option>
								</select>
							</div>
							<form action="#">
								<textarea id="reply-message" cols="30" rows="6" class="form-control mb-4"
									placeholder="Comment *" required></textarea>

								<div class="review-medias">
									<div class="file-input form-control image-input"
										style="background-image: url(images/product/placeholder.png);">
										<div class="file-input-wrapper">
										</div>
										<label class="btn-action btn-upload" title="Upload Media">
											<input type="file" accept=".png, .jpg, .jpeg"
												name="riode_comment_medias_image_1">
										</label>
										<label class="btn-action btn-remove" title="Remove Media">
										</label>
									</div>
									<div class="file-input form-control image-input"
										style="background-image: url(images/product/placeholder.png);">
										<div class="file-input-wrapper">
										</div>
										<label class=" btn-action btn-upload" title="Upload Media">
											<input type="file" accept=".png, .jpg, .jpeg"
												name="riode_comment_medias_image_2">
										</label>
										<label class="btn-action btn-remove" title="Remove Media">
										</label>
									</div>
									<div class="file-input form-control video-input"
										style="background-image: url(images/product/placeholder.png);">
										<video class="file-input-wrapper" controls=""></video>
										<label class="btn-action btn-upload" title="Upload Media">
											<input type="file" accept=".avi, .mp4"
												name="riode_comment_medias_video_1">
										</label>
										<label class="btn-action btn-remove" title="Remove Media">
										</label>
									</div>
								</div>
								<p>Upload images and videos. Maximum count: 3, size: 2MB</p>
								<button type="submit" class="btn btn-primary btn-rounded">Submit<i
										class="d-icon-arrow-right"></i></button>
							</form>
						</div>
					</div>
					<!-- End Reply -->
				</div>
			</div>
		</div>

		<section class="pt-3 mt-10">
			<h2 class="title justify-content-center">Related Products</h2>

			<div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
					data-owl-options="{
					'items': 5,
					'nav': false,
					'loop': false,
					'dots': true,
					'margin': 20,
					'responsive': {
						'0': {
							'items': 2
						},
						'768': {
							'items': 3
						},
						'992': {
							'items': 4,
							'dots': false,
							'nav': true
						}
					}
				}">
					@foreach($relatedProduct as $product)
									
						<div class="product text-center">
							<figure class="product-media">
								<a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
									<img src="{{ asset($product->product_thambnail) }}" alt="product" width="280" height="315">
								</a>
								@php
								$amount = $product->selling_price - $product->discount_price;
								$discount = ($amount/$product->selling_price) * 100;
								@endphp     
								<div class="product-label-group">
								@if ($product->discount_price == NULL)
								<label class="product-label label-new">new</label>
								@else
								<label class="product-label label-sale">{{ round($discount) }}% OFF</label>
								@endif
								</div>
								 <div class="product-action-vertical">
									<a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="btn-product-icon " data-toggle="modal"
									data-target="#addCartModal" title="Add to cart" id="{{ $product->id }}" onclick="productView(this.id)"><i
										class="d-icon-bag"></i></a>
										
									<a href="#" class="btn-product-icon btn-wishlist"
										title="Add to wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="d-icon-heart"></i></a>
								</div>
								<div class="product-action">
									<a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="btn-product btn-quickview" title="Quick View">Quick
										View</a>
								</div>


					
            
							</figure>


							<div class="product-details">
								<div class="product-cat">
									<a href=" {{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">Clothing</a>
								</div>
								<h3 class="product-name">
									<a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
										@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
									</a>
								</h3>

								@if ($product->discount_price == NULL)
									<div class="product-price">
										<span class="new-price"> ₹ {{ $product->selling_price }}</span>
									</div>
								@else
									<div class="product-price">
										<span class="new-price"> ₹ {{ $product->discount_price }} </span>      <del class="old-price"> ₹ {{ $product->selling_price }}</del>
									</div>
										
								@endif<!-- /.product-price -->


								
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:100%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
									<a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="rating-reviews">( <span class="review-count">12</span>
										reviews
										)</a>
								</div>
							</div>
						</div>
					@endforeach
			</div>
		</section>
	</div>
</div>


{{-- ---------- --}}


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4b85f98de5201f"></script>

 


   
@endsection

{{-- 

+ Options
id	
brand_id	
category_id	
subcategory_id	
subsubcategory_id	
product_name_en	
product_name_hin	
product_slug_en	
product_slug_hin	
product_code	
product_qty	
product_tags_en	
product_tags_hin	
product_size_en	
product_size_hin	
product_color_en	
product_color_hin	
selling_price	
discount_price	
short_descp_en	
short_descp_hin	
long_descp_en	
long_descp_hin	
product_thambnail	
hot_deals	
featured	
special_offer	
special_deals	
digital_file	
status	
created_at	
updated_at	
12
1
8
12
13
ADVANCED MASS GAINER
उन्नत मास गेनर
advanced-mass-gainer
उन्नत-मास-गेनर
MASS-M
906
Mass,Weight,gain,mango
Mass,weight,gain,mango
5
5
NULL
NULL
3999
2999
<p>♦&nbsp;Includes 380 kcal, 21g Protein.</p><p>♦&...
<p>♦ Includes 380 kcal, 21g Protein.</p><p>♦ Added...
<h2><strong>Benefits of Using Hardcore Mass Gainer...
<h2><strong>Benefits of Using Hardcore Mass Gainer...
upload/products/thambnail/1729841468175999.png
1
NULL
NULL
NULL
20220411192939.pdf
1
2022-06-03 15:42:16
2022-06-03 15:42:16
13
1
8
15
23
BCAA
उन्नत मास गेनर
bcaa
उन्नत-मास-गेनर
BCAA-O
126
bcaa
bcaa
NULL
NULL
NULL
NULL
2
1
hhjhj
hjhjh
<p>jhhhjjh</p>
<p>hjjhhj</p>
upload/products/thambnail/1729854903748768.png
1
NULL
NULL
NULL
20220411230312.pdf
1
2022-05-19 18:34:38
2022-05-25 17:06:3 --}}