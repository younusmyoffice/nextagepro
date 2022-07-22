@extends('frontend.master')
@section('content')
 
@section('title')
{{ $blogpost->post_title_en }}
@endsection

<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
 
<nav class="breadcrumb-nav">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
			<li><a href="#" class="active">Blog</a></li>
			<li>  {{ $blogpost->post_title_en }}</li>
		</ul>
	</div>
</nav>
</div><br>
<div class="page-content with-sidebar">
	<div class="container">
		<div class="row gutter-lg">
			<div class="col-lg-9">
				<article class="post-single">
					<figure class="post-media">
						<a href="#">
							<img src="{{ asset($blogpost->post_image) }}" width="880" height="450" alt="post" />
						</a>
					</figure>
					<div class="post-details">
						<div class="post-meta">
							by <a href="#" class="post-author">John Doe</a>
							on <a href="#" class="post-date">{{ Carbon\Carbon::parse($blogpost->created_at)->diffForHumans()  }}</a>
							| <a href="#" class="post-comment"><span>2</span> Comments</a>
						</div>
						<h4 class="post-title"><a href="#">   >@if(session()->get('language') == 'hindi') {{ $blogpost->post_title_hin }} @else {{ $blogpost->post_title_en }} @endif 
								2022</a></h4>
						<div class="post-body mb-7">
							<p class="mb-6"> 		@if(session()->get('language') == 'hindi') {!!  $blogpost->post_details_hin  !!} @else {!!  $blogpost->post_details_en  !!} @endif	</p>


							<div class="with-img row align-items-center">
								<div class="col-md-6 mb-6">
									{{-- gallery --}}
											<div class="product product-single row mb-8">
												{{-- <div class="col-md-6"> --}}
													<div class="product-gallery">
														<div
															class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
															@foreach($multiImag as $img)
															<figure class="product-image">
																<img src="{{ asset($img->photo_name ) }}"
																	data-zoom-image="{{ asset($img->photo_name ) }}"
																	alt="Women's Brown Leather Backpacks" width="800" height="900">
															</figure>
															@endforeach
			
														</div>
														<div class="product-thumbs-wrap">
															<div class="product-thumbs">
																@foreach($multiImag as $img)
																<div class="product-thumb active" id="slide{{ $img->id }}">
																	<img src="{{ asset($img->photo_name ) }}" alt="product thumbnail"
																		width="109" height="122">
																</div>
																@endforeach
																
															</div>
															<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
															<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
														</div>
													</div>
												{{-- </div> --}}
												
											</div>
											{{-- galley --}}
									{{-- <figure>
										<img src="images/blog/single/2.jpg" alt="image" width="336"
											height="415" class="float-left">
										<figcaption class="text-left mt-1">
											Designe by <a href="#">Casper Dalin</a>
										</figcaption>
									</figure> --}}
								</div>

								<div class="col-md-6 mb-6">
									<h4 class="font-weight-semi-bold ls-s">Quisque volutpat mattiseros.
									</h4>
									<p class="mb-8 col-lg-11">Sed pretium, ligula sollicitudin laoreet
										viverra, tortor libero sodales leo,
										eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.
										Suspendisse potenti. </p>
									<h4 class="font-weight-semi-bold ls-s">More Details</h4>
									<ul class="list list-type-check mb-6">
										<li>Praesent id enim sit amet.</li>
										<li>Tdio vulputate eleifend in in tortor. ellus massa.</li>
										<li>Massa ristique sit amet condim vel</li>
										<li>Dilisis Facilisis quis sapien. Praesent id enim sit amet</li>
										<li>Praesent id enim sit amet.</li>
										<li>Tdio vulputate eleifend in in tortor. ellus massa.</li>
									</ul>
								</div>
							</div>

							<blockquote class="mt-1 mb-6 p-relative">
								<p class="font-weight-semi-bold ls-m">
									“ Morbi purus libero, faucibus adipiscing,
									commodo quis, gravida id, est. Sed lectus.
									Praesent elementum hendrerit tortor. ”
								</p>
							</blockquote>

							<p>{!!  $blogpost->post_details_hin  !!}  </p>
						</div>
						{{-- <div class="product product-single mb-4">
							<div class="product-gallery product-extended mb-6">
								<div
									class="product-gallery-carousel owl-carousel owl-nav-full owl-theme row cols-1 cols-md-2 cols-lg-3">
									@foreach($multiImag as $img)
									<figure class="product-image">
										<img src="{{ asset($img->photo_name ) }}"
											data-zoom-image="{{ asset($img->photo_name ) }}"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
										<a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a>
									</figure>
									@endforeach
									 
								</div>
							</div>
							<div class="product-details row">
								 
							</div>
						</div> --}}

						{{-- <div class="page-content mb-10 pb-6">
							<div class="container">
								<div class="product product-single row mb-8">
									<div class="col-md-6">
										<div class="product-gallery">
											<div
												class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
												@foreach($multiImag as $img)
												<figure class="product-image">
													<img src="{{ asset($img->photo_name ) }}"
														data-zoom-image="{{ asset($img->photo_name ) }}"
														alt="Women's Brown Leather Backpacks" width="800" height="900">
												</figure>
												@endforeach
 
											</div>
											<div class="product-thumbs-wrap">
												<div class="product-thumbs">
													@foreach($multiImag as $img)
													<div class="product-thumb active" id="slide{{ $img->id }}">
														<img src="{{ asset($img->photo_name ) }}" alt="product thumbnail"
															width="109" height="122">
													</div>
													@endforeach
													
												</div>
												<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
												<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
											</div>
										</div>
									</div>
									
								</div>
			
							</div>
						</div> --}}

						<div class="post-author-detail">
							<figure class="author-media">
								<a href="#">
									<img src="images/blog/comments/1.jpg" alt="avatar" width="50"
										height="50">
								</a>
							</figure>
							<div class="author-body">
								<div
									class="author-header d-flex justify-content-between align-items-center">
									<div>
										<span class="author-title">AUTHOR</span>
										<h4 class="author-name font-weight-bold mb-0">John Doe</h4>
									</div>
									<div>
										<a href="#" class="author-link font-weight-semi-bold">View all posts
											by John Doe <i class="d-icon-arrow-right"></i></a>
									</div>
								</div>
								<div class="author-content">
									<p class="mb-0">Praesent dapibus, neque id cursus faucibus, tortor neque
										egestas auguae, eu vulputate magna eros euerat. Aliquam erat
										volutpat.</p>
								</div>
							</div>
						</div>
						<!-- End Author Detail -->
						<div class="post-footer mt-7 mb-3">
							<div class="post-tags">
								<a href="#" class="tag">classic</a>
								<a href="#" class="tag">converse</a>
							</div>
							<div class="social-icons">
								<a href="#" class="social-icon social-facebook" title="Facebook"><i
										class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-icon social-twitter" title="Twitter"><i
										class="fab fa-twitter"></i></a>
								<a href="#" class="social-icon social-pinterest" title="Pinterest"><i
										class="fab fa-pinterest-p"></i></a>
							</div>
							<a href="" class="addthis_inline_share_toolbox" ></a>	
						</div>
					</div>
				</article>
				<nav class="page-nav">
					<a class="pager-link pager-link-prev" href="#">
						Previous Post
						<span class="pager-link-title">Cras iaculis ultricies nulla</span>
					</a>
					<a class="pager-link pager-link-next" href="#">
						Go To Post
						<span class="pager-link-title">Praesent placerat risus</span>
					</a>
				</nav>
				<!-- End Page Navigation -->
				<div class="related-posts">
					<h3 class="title title-simple text-left text-normal font-weight-bold ls-normal">Related
						Posts</h3>
					<div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2" data-owl-options="{
						'items': 1,
						'margin': 20,
						'loop': false,
						'responsive': {
							'576': {
								'items': 2
							},
							'768': {
								'items': 3
							}
						}
					}">
					@foreach($blogposts as $blog)
						<div class="post">
							<figure class="post-media">
								<a href="{{ route('post.details',$blog->id) }}">
									<img src="{{ asset($blog->post_image) }}" width="380" height="250"
										alt="post" />
								</a>
								<div class="post-calendar">
									<span class="post-day">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()  }}</span>
									<span class="post-month">JAN</span>
								</div>
							</figure>
							<div class="post-details">
								<h4 class="post-title">
									<a href="{{ route('post.details',$blog->id) }} "> @if(session()->get('language') == 'hindi') {{ $blog->post_title_hin }} @else {{ $blog->post_title_en }} @endif</a>
								
								</h4>
								<p class="post-content">
									@if(session()->get('language') == 'hindi') {!! Str::limit($blog->post_details_hin, 200 )  !!} @else {!! Str::limit($blog->post_details_en, 200 )   !!} @endif
								</p>
								<a href="{{ route('post.details',$blog->id) }}"
									class="btn btn-link btn-underline btn-primary">Read more<i
										class="d-icon-arrow-right"></i></a>
							</div>
						</div>
					@endforeach
						 
					</div>
				</div>
				{{-- <div class="comments">
					<h3 class="title title-simple text-left text-normal font-weight-bold">3 Comments</h3>
					<ul>
						<li>
							<div class="comment">
								<figure class="comment-media">
									<a href="#">
										<img src="images/blog/comments/1.jpg" alt="avatar">
									</a>
								</figure>
								<div class="comment-body">
									<div class="comment-user">
										<span class="comment-date">November 9, 2018 at 2:19 pm</span>
										<h4><a href="#">Jimmy Pearson</a></h4>
									</div>

									<div class="comment-content mb-2">
										<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero
											sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
											justo. Suspendisse potenti. </p>
									</div>
									<a href="#" class="btn btn-link btn-reveal-right">REPLY<i
											class="d-icon-arrow-right"></i></a>
								</div>
							</div>
							<ul>
								<li>
									<div class="comment">
										<figure class="comment-media">
											<a href="#">
												<img src="images/blog/comments/2.jpg" alt="avatar">
											</a>
										</figure>

										<div class="comment-body">
											<div class="comment-user">
												<span class="comment-date">November 9, 2018 at 2:19
													pm</span>
												<h4><a href="#">Lena Knight</a></h4>
											</div>

											<div class="comment-content mb-2">
												<p>Morbi interdum mollis sapien. Sed ac risus.</p>
											</div>
											<a href="#" class="btn btn-link btn-reveal-right">REPLY<i
													class="d-icon-arrow-right"></i></a>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<div class="comment">
								<figure class="comment-media">
									<a href="#">
										<img src="images/blog/comments/1.jpg" alt="avatar">
									</a>
								</figure>

								<div class="comment-body">
									<div class="comment-user">
										<span class="comment-date">November 9, 2018 at 2:19 pm</span>
										<h4><a href="#">Johnathan Castillo</a></h4>
									</div>

									<div class="comment-content mb-2">
										<p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod
											dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu,
											dapibus eu, fermentum et, dapibus sed, urna.</p>
									</div>
									<a href="#" class="btn btn-link btn-reveal-right">REPLY<i
											class="d-icon-arrow-right"></i></a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- End Comments -->
				<div class="reply">
					<div class="title-wrapper text-left">
						<h3 class="title title-simple text-left text-normal">Leave A Reply</h3>
						<p>Your email address will not be published. Required fields are marked *</p>
					</div>
					<form action="#">
						<textarea id="reply-message" cols="30" rows="6" class="form-control mb-4"
							placeholder="Comment *" required></textarea>
						<div class="row">
							<div class="col-md-6 mb-5">
								<input type="text" class="form-control" id="reply-name" name="reply-name"
									placeholder="Name *" required />
							</div>
							<div class="col-md-6 mb-5">
								<input type="email" class="form-control" id="reply-email" name="reply-email"
									placeholder="Email *" required />
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-rounded">POST COMMENT<i
								class="d-icon-arrow-right"></i></button>
					</form>
				</div> --}}
				<!-- End Reply -->
			</div>
			<aside class="col-lg-3 right-sidebar sidebar-fixed sticky-sidebar-wrapper">
				<div class="sidebar-overlay">
				</div>
				<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
				<a href="#" class="sidebar-toggle"><i class="fas fa-chevron-left"></i></a>
				<div class="sidebar-content">
					<div class="sticky-sidebar" data-sticky-options="{'top': 89, 'bottom': 70}">
						<div class="widget widget-search border-no mb-2">
							<form action="#" class="input-wrapper input-wrapper-inline btn-absolute">
								<input type="text" class="form-control" name="search" autocomplete="off"
									placeholder="Search in Blog" required />
								<button class="btn btn-search btn-link" type="submit">
									<i class="d-icon-search"></i>
								</button>
							</form>
						</div>
						<div class="widget widget-collapsible border-no">
							<h3 class="widget-title">Blog Categories</h3>
							<ul class="widget-body filter-items search-ul">
								@foreach($blogcategory as $category)
							 
									<a href="{{ url('blog/category/post/'.$category->id) }}">
										<li class="list-group-item">@if(session()->get('language') == 'hindi') {{ $category->blog_category_name_hin }} @else {{ $category->blog_category_name_en }} @endif
										</li>
									</a>
							
					 
								@endforeach
								 
							</ul>
						</div>
						{{-- <div class="widget widget-collapsible">
							<h3 class="widget-title">Popular Posts</h3>
							<div class="widget-body">
								<div class="post-col">
									<div class="post post-list-sm">
										<figure class="post-media">
											<a href="post-single.html">
												<img src="images/blog/1_xs.jpg" width="90" height="90"
													alt="post" />
											</a>
										</figure>
										<div class="post-details">
											<div class="post-meta">
												<a href="#" class="post-date">Nov 22, 2020</a>
											</div>
											<h4 class="post-title"><a href="post-single.html">The Best
													Choice For
													Spending Time</a></h4>
										</div>
									</div>
									<div class="post post-list-sm">
										<figure class="post-media">
											<a href="post-single.html">
												<img src="images/blog/2_xs.jpg" width="90" height="90"
													alt="post" />
											</a>
										</figure>
										<div class="post-details">
											<div class="post-meta">
												<a href="#" class="post-date">Jun 6, 2019</a>
											</div>
											<h4 class="post-title"><a href="post-single.html">Women's
													Fashion
													Summer Dress</a></h4>
										</div>
									</div>
									<div class="post post-list-sm">
										<figure class="post-media">
											<a href="post-single.html">
												<img src="images/blog/3_xs.jpg" width="90" height="90"
													alt="post" />
											</a>
										</figure>
										<div class="post-details">
											<div class="post-meta">
												<a href="#" class="post-date">May 13, 2020</a>
											</div>
											<h4 class="post-title"><a href="post-single.html">Women’s
													Sneaker</a></h4>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
						<div class="widget widget-collapsible">
							<h3 class="widget-title">About us</h3>
							<div class="widget-body">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
									nonummy nibh euismod tincidunt.</p>
							</div>
						</div>

						<div class="widget widget-posts widget-collapsible">
							<h3 class="widget-title">Tag Cloud</h3>
							<div class="widget-body">
								<a href="#" class="tag">Bag</a>
								<a href="#" class="tag">Classic</a>
								<a href="#" class="tag">Converse</a>
								<a href="#" class="tag">Leather</a>
								<a href="#" class="tag">Fit</a>
								<a href="#" class="tag">Green</a>
								<a href="#" class="tag">Man</a>
								<a href="#" class="tag">Jeans</a>
								<a href="#" class="tag">Women</a>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4b85f98de5201f"></script>


@endsection

 