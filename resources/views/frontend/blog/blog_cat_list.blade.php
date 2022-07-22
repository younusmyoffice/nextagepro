

@extends('frontend.master')
@section('content')
 
@section('title')
Blog Category Page 
@endsection

<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
 
<nav class="breadcrumb-nav">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
			<li><a href="#" class="active">Blog</a></li>
			{{-- <li>Grid With Sidebar</li> --}}
		</ul>
	</div>
</nav>
</div>
<br>
<div class="page-content with-sidebar">
	<div class="container">
		<div class="row gutter-lg">
			<div class="col-lg-9">
				<div class="posts grid post-grid row" data-grid-options="{
					'layoutMode': 'fitRows'
				}">
				@foreach($blogpost as $blog)
				
					<div class="grid-item col-sm-6">
						<article class="post mb-3">
							<figure class="post-media overlay-zoom">
								<a href="{{ route('post.details',$blog->id) }}">
									<img src="{{ asset($blog->post_image) }}" width="430" height="300"
										alt="post" />
								</a>
							</figure>
							<div class="post-details">
								<div class="post-meta">
									on <a href="#" class="post-date">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()  }}</a>
									| <a href="#" class="post-comment"><span>2</span> Comments</a>
								</div>
								<h4 class="post-title"><a href="{{ route('post.details',$blog->id) }} "> @if(session()->get('language') == 'hindi') {{ $blog->post_title_hin }} @else {{ $blog->post_title_en }} @endif</a>
								</h4>
								<p class="post-content">
									@if(session()->get('language') == 'hindi') {!! Str::limit($blog->post_details_hin, 200 )  !!} @else {!! Str::limit($blog->post_details_en, 200 )   !!} @endif
								</p>
								{{-- string limit used to hide the whole paragraph to minimum lines  'Str::limit' --}}
								<a href="{{ route('post.details',$blog->id) }}"
									class="btn btn-link btn-underline btn-primary">Read more<i
										class="d-icon-arrow-right"></i></a>
							</div>
						</article>
					</div>
					@endforeach
				</div>
				
				<ul class="pagination mt-5">
					<li class="page-item disabled">
						<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
							aria-disabled="true">
							<i class="d-icon-arrow-left"></i>Prev
						</a>
					</li>
					<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item">
						<a class="page-link page-link-next" href="#" aria-label="Next">
							Next<i class="d-icon-arrow-right"></i>
						</a>
					</li>
				</ul>
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




@endsection


 