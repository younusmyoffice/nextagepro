@extends('frontend.master')
@section('content')
 

					<main class="main">
						<div class="page-content">
							<section class="error-section-1 error-default  banner banner-fixed">
								<figure>
									<img src="{{asset('frontend/images/subpages/error-1/404_2_background.jpg')}}" width="1903" height="800"
										alt="error-page" style="background-color: #f6f6f6;">
								</figure>
								<div class="container">
									<div class="row banner">
										<figure
											class="banner-figure col-12 col-lg-7 d-flex justify-content-center d-lg-block pt-8 pt-lg-4">
											<img src="{{asset('frontend/images/subpages/error-1/404_2_figure.png')}}" alt="error-page" class="p-relative"
												width="629" height="701" />
											<label
												class="error-content ls-normal p-absolute mt-2 y-50  font-weight-bolder">Error</label>
										</figure>
										<div class="col-12 col-lg-5 mt-9 d-flex justify-content-center d-lg-block pt-lg-10 pl-2">
											<div class="banner-content y-50">
												<h2 class="banner-title font-weight-bold text-secondary mb-5">Oops!...
												</h2>
												<h3 class="banner-subtitle font-weight-bold mb-2">Four oh Four! You have gone
													Adrift!</h3>
												<span class="banner-descri ls-normal font-weight-normal text-body d-block">It looks
													like
													nothing was
													found at this location.</span>
												<a class="btn btn-primary btn-rounded mt-7" href="{{ url('/') }}">
													GO Back Home<i class="d-icon-arrow-right"></i> </a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
			
					</main>

@endsection
