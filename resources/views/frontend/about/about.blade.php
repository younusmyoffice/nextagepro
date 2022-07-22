@extends('frontend.master')
@section('content')
@section('title')
About 
@endsection

        <div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;border-top: 2px solid red;">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </nav>
        </div><br>
           
<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
	<h3 class="page-subtitle font-weight-bold"> </h3>
	<h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">ABOUT   </h1>
	<p class="page-desc text-white mb-0"> About us </p>
</div>
            <div class="page-content mt-10 pt-10">
                <section class="about-section pb-10 appear-animate">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-10 mb-lg-4">
                                <h5 class="section-subtitle lh-2 ls-md font-weight-normal">01. What We Do</h5>
                                <h3 class="section-title lh-1 font-weight-bold"> Bodybuilding supplements in <br>one place
                                </h3>
                                <p class="section-desc">We at Nextage Nutrition work hard to ensure international safety standards in order to offer your goal close-grained support providing the highest level of quality. .
                                    </p>
                            </div>
                            <div class="col-lg-8 ">
                                <div class="row">
                                    <div class="col-md-4 mb-4" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em; padding:25px;">
                                        <div class="counter text-center text-dark">
                                            <span class="count-to" data-fromvalue="0" data-tovalue="34"
                                                data-duration="900" data-delimiter=",">0</span>
                                            <h5 class="count-title font-weight-bold text-body ls-md">Business Year</h5>
                                            <p class="text-grey mb-0"> Global grade quality supplements and 100% safety assurance at an affordable price.   </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em; padding:20px;">
                                        <div class="counter text-center text-dark">
                                            <span class="count-to" data-fromvalue="0" data-tovalue="130"
                                                data-duration="900" data-delimiter=",">0</span>
                                            <h5 class="count-title font-weight-bold text-body ls-md"> Brand</h5>
                                            <p class="text-grey mb-0">
                                                {{-- With industry-first step in the various directions such as ensure scan validity, layers of authenticity, protein test certificates, scientifically researched products, and more,  --}}
                                                Nextage Nutrition has rapidly risen to become the consumer's favorite brand.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em; padding:20px;">
                                        <div class="counter text-center text-dark">
                                            <span class="count-to" data-fromvalue="0" data-tovalue="50"
                                                data-duration="900" data-delimiter=",">0</span>
                                            <h5 class="count-title font-weight-bold text-body ls-md"> Team</h5>
                                            <p class="text-grey mb-0">Our commitment to provide research-backed products helps us in our aim to become India’s most trusted sports nutrition brand</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About Section-->

                <section class="customer-section pb-10 appear-animate">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 mb-4">
                                <figure>
                                    <img src="{{ asset('frontend/images/about/021.png')}}" alt="Happy Customer" width="580"
                                        height="507" class="banner-radius" style="background-color: #BDD0DE;" />
                                </figure>
                            </div>
                            <div class="col-md-5 mb-4">
                                <h5 class="section-subtitle lh-2 ls-md font-weight-normal">02. Happy Customer</h5>
                                <h3 class="section-title lh-1 font-weight-bold">Provide qualifed<br>
                                    products</h3>
                                <p class="section-desc text-grey">
                                    We're based on getting you fitter and healthier using our experts comprehensive analysis and experience of the ever-changing market. So make health a priority today and let us handle the rest!
                                    Nextage Nutrition supplements have been clinically tried throughout short periods in various examinations to definitively demonstrate their adequacy and safety, so you do not need to worry about anything, at all!
                                    We have launched this website with just one mission - to make people fall in love with fitness! No fitness activity is complete without the right diet & we’re here to provide it to you. From gainers to proteins to multi-vitamins, there’s nothing that our fellow fitness freaks won’t find here!
                                </p>
                                <a href="#" class="btn btn-dark btn-link btn-underline ls-m">Visit Our Store<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Customer Section -->

                <section class="store-section pb-10 appear-animate">
                    <div class="container" >
                        <div class="row align-items-center"> 
                            <div class="col-md-6 order-md-first mb-4">
                                <h5 class="section-subtitle lh-2 ls-md font-weight-normal mb-1">03. Our Store</h5>
                                <h3 class="section-title lh-1 font-weight-bold">Expect Restless<br>Authenticity & Ingredients </h3>
                                <p class="section-desc text-grey">
                                    We are amongst India’s most trusted health supplement brands, with a mission to make nutrition more reliable and effective.
                                    We know the dedication of a sportsperson & those who challenge themselves everyday. It’s amazing to see how dedicated and diligent people are who never give up & we want to create a world full of things that people who never like to give up; would like! Our vision is crystal clear, it’s meant for people who love to challenge themselves & we would love to serve them!
                                </p>
                                <a href="#" class="btn btn-dark btn-link btn-underline ls-m">Get Our Store<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                            <div class="col-md-6 mb-4">
                                <figure>
                                    <img src="{{ asset('frontend/images/about/11.png')}}" alt="Our Store" width="580" height="507"
                                        class="banner-radius" style="background-color: #DEE6E8;" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Store-section -->

                <section class="brand-section grey-section pt-10 pb-10 appear-animate">
                    <div class="container mt-8 mb-10">
                        <h5 class="section-subtitle lh-2 ls-md font-weight-normal mb-1 text-center">04. Our Clients</h5>
                        <h3 class="section-title lh-1 font-weight-bold text-center mb-5">Popular Brands</h3>
                        <div class="owl-carousel owl-theme row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                            data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6
                                }
                            }
                        }">
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="{{ asset('frontend/images/brands/1.png')}}" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="{{ asset('frontend/images/brands/2.png')}}" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="{{ asset('frontend/images/brands/3.png')}}" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="{{ asset('frontend/images/brands/4.png')}}" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="{{ asset('frontend/images/brands/5.png')}}" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="{{ asset('frontend/images/brands/6.png')}}" alt="Brand" width="180" height="100" />
                            </figure>
                        </div>
                    </div>
                </section>

                <section class="team-section pt-8 mt-10 pb-10 mb-6 appear-animate">
                    <div class="container">
                        <h5 class="section-subtitle lh-2 ls-md font-weight-normal mb-1 text-center">04. Our Leaders</h5>
                        <h3 class="section-title lh-1 font-weight-bold text-center mb-5">Meet our team</h3>
                        <div class="row cols-sm-2 cols-md-4">
                            <div class="member appear-animate" data-animation-options="{'name': 'fadeInLeftShorter'}">
                                <figure class="banner-radius">
                                    <img src="{{ asset('frontend/images/subpages/team3.png')}}" alt="team member" width="280" height="280"
                                        style="background-color: #EEE;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Abdus Salam  </h4>
                                <h5 class="member-job">Ceo / Founder</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.3s'}">
                                <figure class="banner-radius">
                                    <img src="{{ asset('frontend/images/subpages/team2.png')}}" alt="team member" width="280" height="280"
                                        style="background-color: #121A1F;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name"> Najeeb ur Rehman  </h4>
                                <h5 class="member-job">Ceo / Founder</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.4s'}">
                                <figure class="banner-radius">
                                    <img src="{{ asset('frontend/images/subpages/team1.png')}}" alt="team member" width="280" height="280"
                                        style="background-color: #E8E7E3;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Zainulla</h4>
                                <h5 class="member-job">Director</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.5s'}">
                                <figure class="banner-radius">
                                    <img src="{{ asset('frontend/images/subpages/team4.jpg')}}" alt="team member" width="280" height="280"
                                        style="background-color: #465D7F;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Mikhail Hnatuk</h4>
                                <h5 class="member-job">Support</h5>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Team Section -->
            </div>





            @endsection

