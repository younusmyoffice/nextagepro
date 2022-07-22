@extends('frontend.master')
@section('content')
@section('title')
Nextage Nutrition
@endsection


<div class="page-content ">
                {{-- <section class="intro-section">
                    <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
                        data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'items': 1,
                        'autoplay': true,
                        'autoplayTimeout': 1800
                    }">
                        
                        <div class="banner banner-fixed intro-slide1" style="background-color: #000000;">
                            <figure>
                                <img src="{{asset('frontend/images/slides/slide12.png')}}" alt="intro-banner" width="100%"
                                    height="auto" style="background-color: #e53434;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle font-weight-bold ls-l">
                                        <span class="d-inline-block slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                                            2 Get</span>
                                        <span class="d-inline-block label-star bg-white text-primary slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                                            Free</span>
                                    </h4>
                                    <h2 class="banner-title font-weight-bold text-white lh-1 ls-md slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Nutrition</h2>
                                    <h3 class="font-weight-normal lh-1 ls-l text-white slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Collection</h3>
                                    <p class="slide-animate text-white ls-s mb-7"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Get Free Shipping on all orders over Rs 222299.00</p>
                                        <br><br><br><br><br><br><br><br><br><br><br>
                                    <a href="{{url('shop')}}" class="btn btn-dark btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>    
                        <div class="banner banner-fixed intro-slide1" style="background-color: #000000;">
                            <figure>
                                <img src="{{asset('frontend/images/slides/slide14.png')}}" alt="intro-banner" width="100%"
                                    height="auto" style="background-color: #e53434;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle font-weight-bold ls-l">
                                        <span class="d-inline-block slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                                            2 Get</span>
                                        <span class="d-inline-block label-star bg-white text-primary slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                                            Free</span>
                                    </h4>
                                    <h2 class="banner-title font-weight-bold text-white lh-1 ls-md slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Nutrition</h2>
                                    <h3 class="font-weight-normal lh-1 ls-l text-white slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Collection</h3>
                                    <p class="slide-animate text-white ls-s mb-7"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Get Free Shipping on all orders over Rs 222299.00</p>
                                        <br><br><br><br><br><br><br><br><br><br><br>
                                    <a href="{{url('shop')}}" class="btn btn-dark btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>                  
                    
                        <div class="banner banner-fixed intro-slide1" style="background-color: #000000;">
                            <figure>
                                <img src="{{asset('frontend/images/slides/slide13.png')}}" alt="intro-banner" width="100%"
                                    height="auto" style="background-color: #e53434;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle font-weight-bold ls-l">
                                        <span class="d-inline-block slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                                            2 Get</span>
                                        <span class="d-inline-block label-star bg-white text-primary slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                                            Free</span>
                                    </h4>
                                    <h2 class="banner-title font-weight-bold text-white lh-1 ls-md slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Nutrition</h2>
                                    <h3 class="font-weight-normal lh-1 ls-l text-white slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Collection</h3>
                                    <p class="slide-animate text-white ls-s mb-7"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Get Free Shipping on all orders over Rs 222299.00</p>
                                        <br><br><br><br><br><br><br><br><br><br><br>
                                    <a href="{{url('shop')}}" class="btn btn-dark btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">
                            <figure>
                                <img src="{{asset('frontend/images/slides/slide2.png')}}" alt="intro-banner" width="1903"
                                    height="630" style="background-color: #d8d9d9;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50 ml-auto text-right">
                                    <h4 class="banner-subtitle ls-s mb-1 slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s'}"><span
                                            class="d-block text-uppercase mb-2">Coming soon</span><strong
                                            class="font-weight-semi-bold ls-m">Nextage Nutrtion </strong></h4>
                                    <h2 class="banner-title mb-2 d-inline-block font-weight-bold text-primary slide-animate"
                                        data-animation-options="{'name': 'fadeInRight', 'duration': '1.2s', 'delay': '.5s'}">
                                        Sale</h2>
                                    <p class="slide-animate font-primary ls-s text-dark mb-4"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.2s'}">
                                        Up to 70% off on all products <br />online &amp; Free Shipping over $90</p>
                                    <a href="{{url('shop')}}" class="btn btn-dark btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.4s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="banner banner-fixed intro-slide1" style="background-color: #000000;">
                            <figure>
                                <img src="{{asset('frontend/images/slides/slide1.png')}}" alt="intro-banner" width="100%"
                                    height="auto" style="background-color: #34ace5;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle font-weight-bold ls-l">
                                        <span class="d-inline-block slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                                            2 Get</span>
                                        <span class="d-inline-block label-star bg-white text-primary slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                                            Free</span>
                                    </h4>
                                    <h2 class="banner-title font-weight-bold text-white lh-1 ls-md slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Nutrition</h2>
                                    <h3 class="font-weight-normal lh-1 ls-l text-white slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Collection</h3>
                                    <p class="slide-animate text-white ls-s mb-7"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Get Free Shipping on all orders over Rs 222299.00</p>
                                    <a href="{{url('shop')}}" class="btn btn-danger btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed intro-slide1" style="background-color: #000000;">
                            <figure>
                                <img src="{{asset('frontend/images/slides/slide11.png')}}" alt="intro-banner" width="100%"
                                    height="auto" style="background-color: #34ace5;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle font-weight-bold ls-l">
                                        <span class="d-inline-block slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                                            2 Get</span>
                                        <span class="d-inline-block label-star bg-white text-primary slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                                            Free</span>
                                    </h4>
                                    <h2 class="banner-title font-weight-bold text-white lh-1 ls-md slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Nutrition</h2>
                                    <h3 class="font-weight-normal lh-1 ls-l text-white slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Collection</h3>
                                    <p class="slide-animate text-white ls-s mb-7"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Get Free Shipping on all orders over Rs 222299.00</p>
                                        <br><br><br><br><br><br><br><br><br><br><br>
                                    <a href="{{url('shop')}}" class="btn btn-danger btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed video-banner intro-slide3" style="background-color: #dddee0;">
                            <figure>
                                <video src="{{asset('frontend/video/Hrithik Roshan - TUM NAHI SAMJHOGE _ Motivational Video.mp4')}}" width="1903" height="630"></video>
                            </figure>
                            <div class="container">
                                <div class="banner-content x-50 y-50 text-center">
                                    <h4 class="banner-subtitle text-white text-uppercase mb-3 ls-normal slide-animate"
                                        data-animation-options="{'name': 'fadeIn', 'duration': '.7s'}">Check out our
                                    </h4>
                                    <h2 class="banner-title mb-3 text-white font-weight-bold text-uppercase ls-m slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s', 'delay': '.5s'}">
                                        Summer Season's</h2>
                                    <p class="slide-animate mb-7 text-white ls-s font-primary "
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '.8s'}">
                                        Up to 50% Off this Season’s &amp; Get free shipping<br />on all orders over
                                        $199.00</p>
                                    <a href="{{url('shop')}}" class="btn btn-dark btn-rounded slide-animate mb-1"
                                        data-animation-options="{'name': 'fadeInLeft', 'duration': '1s', 'delay': '1.5s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-title1  text-center mt-0 pt-1">Nextage </div>

                    <div class="container mt-6 appear-animate">
                        <div class="service-list">
                            <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                    'items': 3,
                                    'nav': false,
                                    'dots': false,
                                    'loop': true,
                                    'autoplay': false,
                                    'autoplayTimeout': 50000,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3,
                                            'loop': false
                                        }
                                    }
                                }">
                                <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.3s'
                                    }">
                                    <i class="icon-box-icon d-icon-truck"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1"> Shipping &amp;
                                            Return
                                        </h4>
                                        <p class="ls-s lh-1">Instant shipping on orders</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.4s'
                                    }">
                                    <i class="icon-box-icon d-icon-service"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">Customer Support 24/7
                                        </h4>
                                        <p class="ls-s lh-1">Instant access to perfect support</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.5s'
                                    }">
                                    <i class="icon-box-icon d-icon-secure"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">100% Secure Payment
                                        </h4>
                                        <p class="ls-s lh-1">We ensure secure payment!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>   --}}

                <section class="slide-normal mt-0 pt-0">
                    {{-- <h2 class="title title-center title-descri mb-2">Riode Slider</h2>
                    <p class="text-body text-center title-descri pb-2 pb-4">The Slider is a powerful element to show
                        lots of banners,
                        images
                        and any other elements by several items in a restricted area.</p> --}}
                    <div class="container-custom-banner ">
                        <div class="code-template">
                            <div class="big-slider animation-slider owl-carousel owl-dot-inner owl-dot-white   owl-theme owl-nav-bg owl-nav-arrow row cols-1 gutter-no code-content"
                                data-owl-options="{
                       
                                'items': 1,
                                'autoplay': true,
                                'loop': true,
                                'mouseDrag': true,
                                'touchDrag': true,
                                'nav': true,
                                'dots': false,
                                'animateIn': 'fadeIn',
                                'animateOut': 'fadeOut'
                                {{-- 'autoplayTimeout': 180 --}}
                                }">
                                <div class="big-slide1 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <img src="{{asset('frontend/images/slides/slide12.png')}}" alt="intro-banner" width="100%"
                                    height="auto" style="background-color: #e53434;"  />
                                    </figure>
                                    <div class="banner-content y-50 pt-4">
                                        <div class="slide-animate">
                                            {{-- <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">From Online Store</h4>
                                            <h3 class="banner-title font-weight-bold slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">Originals Comper<br>Star. Shoes</h3>
                                            <p class="text-dark font-primary text-uppercase slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }"><span class="ls-super font-weight-bold">For-Men</span>
                                                <br>
                                                Product Identifier: DD1160
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="bottom-title1  text-center mt-0 pt-2">Nextage </div>
                                </div>

                                {{--  --}}
                                <div class="big-slide1 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <img src="{{asset('frontend/images/slides/slide2.png')}}" alt="intro-banner" width="100%"
                                        height="auto" style="background-color: #e53434;" />
                                    </figure>
                                    <div class="banner-content y-50 pt-4">
                                        <div class="slide-animate">
                                            {{-- <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">From Online Store</h4>
                                            <h3 class="banner-title font-weight-bold slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">Originals Comper<br>Star. Shoes</h3>
                                            <p class="text-dark font-primary text-uppercase slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }"><span class="ls-super font-weight-bold">For-Men</span>
                                                <br>
                                                Product Identifier: DD1160
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="bottom-title1-c  text-center mt-0 pt-2">Nextage </div>
                                </div>
                                {{--  --}}
                                <div class="big-slide1 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <img src="{{asset('frontend/images/slides/slide13.png')}}" alt="intro-banner" width="100%"
                                        height="auto" style="background-color: #e53434;" />
                                    </figure>
                                    <div class="banner-content y-50 pt-4">
                                        <div class="slide-animate">
                                            {{-- <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">From Online Store</h4>
                                            <h3 class="banner-title font-weight-bold slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">Originals Comper<br>Star. Shoes</h3>
                                            <p class="text-dark font-primary text-uppercase slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }"><span class="ls-super font-weight-bold">For-Men</span>
                                                <br>
                                                Product Identifier: DD1160
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="bottom-title1-bu  text-center mt-0 pt-2">Nextage </div>
                                </div>
                                {{--  --}}
                                <div class="big-slide1 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <img src="{{asset('frontend/images/slides/slide14.png')}}" alt="intro-banner" width="1903"
                                        height="630" style="background-color: #d8d9d9;" />
                                    </figure>
                                    <div class="banner-content y-50 pt-4">
                                        <div class="slide-animate">
                                            {{-- <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">From Online Store</h4>
                                            <h3 class="banner-title font-weight-bold slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">Originals Comper<br>Star. Shoes</h3>
                                            <p class="text-dark font-primary text-uppercase slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }"><span class="ls-super font-weight-bold">For-Men</span>
                                                <br>
                                                Product Identifier: DD1160
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="bottom-title1-v  text-center mt-0 pt-2">Nextage </div>
                                </div>
                                {{--  --}}
                                <div class="big-slide1 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <img src="{{asset('frontend/images/slides/slide1.png')}}" alt="intro-banner" width="100%"
                                        height="auto" style="background-color: #34ace5;" />
                                    </figure>
                                    <div class="banner-content y-50 pt-4">
                                        <div class="slide-animate">
                                            {{-- <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">From Online Store</h4>
                                            <h3 class="banner-title font-weight-bold slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">Originals Comper<br>Star. Shoes</h3>
                                            <p class="text-dark font-primary text-uppercase slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }"><span class="ls-super font-weight-bold">For-Men</span>
                                                <br>
                                                Product Identifier: DD1160
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="bottom-title1-bk  text-center mt-0 pt-2">Nextage </div>
                                </div>
                                {{--  --}}
                                <div class="big-slide1 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <img src="{{asset('frontend/images/slides/slide11.png')}}" alt="intro-banner" width="100%"
                                    height="auto" style="background-color: #34ace5;" />
                                    </figure>
                                    <div class="banner-content y-50 pt-4">
                                        <div class="slide-animate">
                                            {{-- <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">From Online Store</h4>
                                            <h3 class="banner-title font-weight-bold slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">Originals Comper<br>Star. Shoes</h3>
                                            <p class="text-dark font-primary text-uppercase slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }"><span class="ls-super font-weight-bold">For-Men</span>
                                                <br>
                                                Product Identifier: DD1160
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="bottom-title1-bl  text-center mt-0 pt-2">Nextage </div>
                                </div>
                                {{--  --}}
                                <div class="big-slide1 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <video src="{{asset('frontend/video/Hrithik Roshan - TUM NAHI SAMJHOGE _ Motivational Video.mp4')}}" width="100%" height="auto"></video>
                                    </figure>
                                    <div class="banner-content y-50 pt-4">
                                        <div class="slide-animate">
                                            {{-- <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">From Online Store</h4>
                                            <h3 class="banner-title font-weight-bold slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">Originals Comper<br>Star. Shoes</h3>
                                            <p class="text-dark font-primary text-uppercase slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }"><span class="ls-super font-weight-bold">For-Men</span>
                                                <br>
                                                Product Identifier: DD1160
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="bottom-title1-bk  text-center mt-0 pt-2">Nextage </div>
                                </div>
                                {{--  --}}
                                <div class="big-slide2 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <img src="{{asset('frontend/images/slides/slide11.png')}}" alt="intro-banner" width="100%"
                                    height="auto" style="background-color: #34ace5;" />
                                    </figure>
                                    <div class="container">
                                        <div class="banner-content y-50 pb-2">
                                            <div class="slide-animate">
                                                {{-- <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                    data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                        }">From Online Store</h4>
                                                    <h3 class="banner-title font-weight-normal slide-animate appear-animate"
                                                        data-animation-options="{
                                            'name': 'blurIn', 
                                            'duration': '1s',
                                            'delay': '.5s'
                                        }">Recommend<br>
                                                    <strong class="text-uppercase font-weight-bold">Springchic
                                                        2022</strong>
                                                </h3>
                                                <p class="text-dark font-primary slide-animate appear-animate mb-4"
                                                    data-animation-options="{
                                        'name': 'fadeIn', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                        }">Free Shipping on all orders over $99.00
                                                    </p> --}}
                                                    <a href="{{url('shop')}}'"
                                                        class="btn btn-dark slide-animate appear-animate"
                                                        data-animation-options="{
                                            'name': 'fadeInRightShorter', 
                                            'duration': '1s',
                                            'delay': '.3s'
                                        }">Shop now<i class="d-icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-title1-v  text-center mt-0 pt-2">Nextage </div>
                                </div>
                            </div>
                            {{-- <div class="show-code">
                                <i class="fas fa-code mr-1"></i>Show Code
                            </div> --}}
                        </div>
                    </div>

                    {{-- <div class="bottom-title1  text-center mt-0 pt-2">Nextage </div> --}}

                    <div class="container mt-6 appear-animate">
                        <div class="service-list">
                            <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                    'items': 3,
                                    'nav': false,
                                    'dots': false,
                                    'loop': true,
                                    'autoplay': false,
                                    'autoplayTimeout': 500,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3,
                                            'loop': false
                                        }
                                    }
                                }">
                                <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.3s'
                                    }">
                                    <i class="icon-box-icon d-icon-truck"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1"> Shipping &amp;
                                            Return
                                        </h4>
                                        <p class="ls-s lh-1">Instant shipping on orders</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.4s'
                                    }">
                                    <i class="icon-box-icon d-icon-service"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">Customer Support 24/7
                                        </h4>
                                        <p class="ls-s lh-1">Instant access to perfect support</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.5s'
                                    }">
                                    <i class="icon-box-icon d-icon-secure"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">100% Secure Payment
                                        </h4>
                                        <p class="ls-s lh-1">We ensure secure payment!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                

                <div style="background-color: #ffffff" class="pb-5">
                    <div class="container">
                        <section class="category-icon-section mt-10 pt-10">
                            <h2 class="title title-center"> Category</h2>
                            <div class="code-template">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                        <div class="category category-icon code-content">
                                            <a href="#">
                                                <figure class="category-media">
                                                    <i class="fas fa-tshirt"></i>
                                                </figure>
                                                <div class="category-content">
                                                    <h4 class="category-name">T Shirts</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                        <div class="category category-icon">
                                            <a href="#">
                                                <figure class="category-media">
                                                    <i class="fas fa-dumbbell"></i>
                                                </figure>
                                                <div class="category-content">
                                                    <h4 class="category-name">Mass Gainers</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                        <div class="category category-icon">
                                            <a href="#">
                                                <figure class="category-media">
                                                    <i class="fas fa-bolt"></i>
                                                </figure>
                                                <div class="category-content">
                                                    <h4 class="category-name">Pre Workout</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                        <div class="category category-icon">
                                            <a href="#">
                                                <figure class="category-media">
                                                    <i class="fab fa-artstation"></i>
                                                </figure>
                                                <div class="category-content">
                                                    <h4 class="category-name">Whey Concentrate </h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                        <div class="category category-icon">
                                            <a href="#">
                                                <figure class="category-media">
                                                    <i class="fas fa-user-ninja"></i>
                                                </figure>
                                                <div class="category-content">
                                                    <h4 class="category-name">Whey Isolate</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-4">
                                        <div class="category category-icon">
                                            <a href="#">
                                                <figure class="category-media">
                                                    <i class="fas fa-prescription-bottle"></i>
                                                </figure>
                                                <div class="category-content">
                                                    <h4 class="category-name">Shakers </h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </section>
                        
                    </div>
                </div>
                
                <!-- category -->
                <!-- product higlight -->
                <section>
                    <div class="container">
                        <section class="products-tab mt-10 pt-2">
                            <div class="tab tab-nav-simple tab-nav-center">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#featured">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#on-sale">On Sale</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#best-sellers">Best Sellers</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="featured">
                                        <div class="row gutter-sm">
                                            <div class="col-md-6">
                                                <div class="product text-center product-lg appear-animate"
                                                    data-animation-options="{
                                                    'name': 'fadeIn',
                                                    'delay': '.5s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }} ">
                                                            <img src="{{asset('frontend/images/products/nx/mc1.png')}}" alt="products" width="600" height="675">
                                                                {{-- <img src="{{asset('frontend/images/products/nx/isogold.gif')}}" alt="products"
                                                                width="600" height="675"> --}}
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-sale">27% off</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            {{-- <input type="hidden" id="product_id" value="{{ $product->id }}" min="1"> --}}
							
                                                            <a href="{{ url('shop') }}"   class="btn-product-icon"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>

                                                            {{-- <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist" ><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}">  Chocolate    </a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <ins class="new-price">Advanced Mass Gainer</ins><del
                                                                class="old-price"></del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 order-md-first">
                                                <div class="product text-center appear-animate" data-animation-options="{
                                                    'name': 'fadeInRightShorter',
                                                    'delay': '.3s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/1.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Gluten Free</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product text-center appear-animate" data-animation-options="{
                                                    'name': 'fadeInRightShorter',
                                                    'delay': '.4s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/2.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-new">new</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"> </a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price"> Weight Gain</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="product text-center appear-animate" data-animation-options="{
                                                    'name': 'fadeInLeftShorter',
                                                    'delay': '.3s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/4.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href=" {{ url('shop') }}">  </a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Belgian Chocolate </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product text-center appear-animate" data-animation-options="{
                                                    'name': 'fadeInLeftShorter',
                                                    'delay': '.4s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href=" {{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/5.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-new">new</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}">   </a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Quick Absorbtion</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="on-sale">
                                        <div class="row gutter-sm">
                                            <div class="col-md-6">
                                                <div class="product text-center product-lg">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/wgm1.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-sale">27% off</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            <a href="{{ url('shop') }}" class="btn-product-icon"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            {{-- <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"> Mango </a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <ins class="new-price">Whey Iso Gold</ins><del
                                                                class="old-price"></del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 order-md-first">
                                                <div class="product text-center">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/6.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Gluten Free</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product text-center">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/8.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-new">new</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Whey Protien</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="product text-center">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/13.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Mango Flavoured</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product text-center">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/9.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-new">new</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Quick Absorbtion</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="best-sellers">
                                        <div class="row gutter-sm">
                                            <div class="col-md-6">
                                                <div class="product text-center product-lg appear-animate"
                                                    data-animation-options="{
                                                    'name': 'fadeIn',
                                                    'delay': '.5s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/wcm1.png')}}" alt="products"
                                                                width="600" height="675">
                                                                
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-sale">27% off</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            <a href="{{ url('shop') }}" class="btn-product-icon"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            {{-- <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}">Mango</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <ins class="new-price">Whey Iso Con</ins><del
                                                                class="old-price"></del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 order-md-first">
                                                <div class="product text-center appear-animate" data-animation-options="{
                                                    'name': 'fadeInRightShorter',
                                                    'delay': '.3s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/10.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Gluten Free</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product text-center appear-animate" data-animation-options="{
                                                    'name': 'fadeInRightShorter',
                                                    'delay': '.4s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/12.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-new">new</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Whey Protien</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="product text-center appear-animate" data-animation-options="{
                                                    'name': 'fadeInLeftShorter',
                                                    'delay': '.3s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/13.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Mango Flavoured</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product text-center appear-animate" data-animation-options="{
                                                    'name': 'fadeInLeftShorter',
                                                    'delay': '.4s'
                                                }">
                                                    <figure class="product-media">
                                                        <a href="{{ url('shop') }}">
                                                            <img src="{{asset('frontend/images/products/nx/14.png')}}" alt="products"
                                                                width="600" height="675">
                                                        </a>
                                                        <div class="product-label-group">
                                                            <label class="product-label label-new">new</label>
                                                        </div>
                                                        <div class="product-action-vertical">
                                                            {{-- <a href="#" class="btn-product-icon btn-cart"
                                                                data-toggle="modal" data-target="#addCartModal"
                                                                title="Add to cart"><i class="d-icon-bag"></i></a>
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                            <a href="#" class="btn-product-icon btn-quickview"
                                                                title="Quick View"><i class="d-icon-search"></i></a> --}}
                                                        </div>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ url('shop') }}"></a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">Quick Absorbtion</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End of Product Grid Tab -->
    

                    </div>
                </section>

                
                <!-- prodict highlight -->
                <section class="slide-normal mt-10 pt-7">
                    <h2 class="title title-center title-descri mb-2">Nextage Organics</h2>
                    <p class="text-body text-center title-descri pb-2 pb-2">Want your health status checked </p>
                     <a href="bmi"><button class="btn btn-success btn-shadow-lg btn-ellipse btn-block "style=" display: block; margin-left: auto; margin-right: auto; width: auto;">
                       Click here
                    </button></a>
                    <div class="container">
                        <div class="code-template">
                            <div class="big-slider animation-slider owl-carousel owl-theme owl-nav-bg owl-nav-arrow row cols-1 gutter-no code-content"
                                data-owl-options="{
                        'items': 1,
                        'autoplay': true,
                        'loop': true,
                        'mouseDrag': true,
                        'touchDrag': true,
                        'nav': true,
                        'dots': false,
                        'animateIn': 'fadeIn',
                        'animateOut': 'fadeOut'
                      
                    }">

                                @foreach($sliders as $slide)
                                <div class="big-slide1 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        {{-- <img href="https://nextageorg.com" src="{{asset('frontend/images/slider/big-slide1.png')}}" alt="banner" width="100%"
                                            height="auto" /> --}}
                                            <img href="https://nextageorg.com" src="{{asset($slide->slider_img)}}" alt="banner" width="100%"
                                            height="auto" /> 
                                    </figure>
                                    <div class="banner-content y-50 pt-4">
                                        <div class="slide-animate">
                                            <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">
                                    
                                                 {{-- {{$slide->title}} --}}
                                            </h4>
                                            <h3 class="banner-title font-weight-bold slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">
                                                {{-- {{$slide->description}} --}}
                                            </h3>
                                            <p class="text-dark font-primary text-uppercase slide-animate appear-animate"
                                                data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }"><span class="ls-super font-weight-bold"></span>
                                    {{-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> --}}
                                                {{-- <button class="btn btn-success btn-shadow-lg  btn-block"style=" display: block; margin-left: auto; margin-right: auto; width: auto;">
                                                    <a href="{{route('bmi')}}">Check your BMR</a>
                                                </button> --}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="big-slide2 banner banner-fixed code-content" style="background-color: #fff">
                                    <figure>
                                        <img src="{{asset('frontend/images/slider/big-slide2.png')}}" alt="banner" width="100%"
                                            height="auto" />
                                    </figure>
                                    <div class="container">
                                        <div class="banner-content y-50 pb-2">
                                            <div class="slide-animate">
                                                <h4 class="banner-subtitle text-uppercase slide-animate appear-animate mb-1"
                                                    data-animation-options="{
                                        'name': 'fadeInUpShorter', 
                                        'duration': '1s',
                                        'delay': '.3s'
                                    }">From Online Store</h4>
                                                <h3 class="banner-title font-weight-normal slide-animate appear-animate"
                                                    data-animation-options="{
                                        'name': 'blurIn', 
                                        'duration': '1s',
                                        'delay': '.5s'
                                    }">Recommend<br>
                                                    <strong class="text-uppercase font-weight-bold">Springchic
                                                        2022</strong>
                                                </h3>
                                                <p class="text-dark font-primary slide-animate appear-animate mb-4"
                                                    data-animation-options="{
                                        'name': 'fadeIn', 
                                        'duration': '1s',
                                        'delay': '.7s'
                                    }">Free Shipping on all orders over $99.00
                                                </p>
                                                <a href="{{url('shop')}}"
                                                    class="btn btn-dark slide-animate appear-animate"
                                                    data-animation-options="{
                                        'name': 'fadeInRightShorter', 
                                        'duration': '1s',
                                        'delay': '.9s'
                                    }">Shop now<i class="d-icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            
                        </div>
                    </div>
                </section>

                {{-- <section class="mt-10 pt-7 mb-10 pb-7">
                    <div class="container">
                      
                    </div>
                 </section> --}}

               
                <section class="pt-10 mt-7 ">
                    <h2 class="title title-center title-descri mb-2">Nextage Nutrtion  </h2>
                    <p class="text-body text-center title-descri pb-2 pb-4">The Slider is a powerful element to show
                        lots of banners,
                        images
                        and any other elements by several items in a restricted area.</p>
                    <div class="container">
                        <div class="row grid">
                            <div class="grid-item col-lg-8 height-x2 appear-animate" data-animation-options="{'name': 'fadeInRightShorter'}">
                                <div class="grid-banner banner banner-fixed">
                                    <figure>
                                        <img src="{{asset('frontend/images/creative-grid/1.png')}}" style="background-color: #f5f6f8" alt="banner" width="785" height="433">
                                    </figure>
                                    <div class="banner-content y-50">
                                        <h4 class="banner-price mb-0">Exclusive Products
                                            with discounts</h4>
                                        <h3 class="banner-title text-uppercase"> Sale
                                        </h3>
                                        <p class="banner-price text-uppercase mb-5">starting at
                                            <span><sup>₹</sup>1111.<sup>99</sup></span>
                                        </p>
                                        <a href="{{url('shop')}}" class="btn btn-outline btn-white btn-md mb-2 btn-rounded">Shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-4 col-sm-6 height-x2 appear-animate" data-animation-options="{'name': 'fadeInDownShorter'}">
                                <div class="grid-banner1 banner banner-fixed">
                                    <figure>
                                        <img src="{{asset('frontend/images/creative-grid/2.png')}}" alt="banner" width="385" height="433">
                                    </figure>
                                    <div class="banner-content w-100 x-50 text-center">
                                        <h4 class="banner-subtitle mb-3">
                                            </h4>
                                        <h3 class="banner-title mb-0 font-weight-bold"></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-6 height-x1 appear-animate" data-animation-options="{'name': 'fadeInUpShorter'}">
                                <div class="grid-banner2 banner banner-fixed overlay-light">
                                    <figure>
                                        <img src="{{asset('frontend/images/creative-grid/4.png')}}" alt="banner" width="585" height="213">
                                    </figure>
                                    <div class="banner-content w-100 y-50">
                                        <h3 class="banner-title mb-2 ls-m text-uppercase"><span class="d-block text-normal"></span></h3>
                                        <h4 class="banner-subtitle font-secondary"></h4>
                                        <div class="banner-price-info ls-m font-weight-semi-bold text-dark"><ins class="mr-2"></ins><del></del></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-6 height-x1 appear-animate" data-animation-options="{'name': 'fadeInLeftShorter'}">
                                <div class="grid-banner3 banner banner-fixed overlay-dark">
                                    <figure>
                                        <img src="{{asset('frontend/images/creative-grid/1-1.png')}}" alt="banner" width="585" height="213">
                                    </figure>
                                    <div class="banner-content w-100 y-50">
                                        <h4 class="banner-subtitle mb-1 text-white">New Arrivals</h4>
                                        <h3 class="banner-title ls-m text-white">T-Shirt Collection</h3>
                                        <p class="font-weight-semi-bold text-white ls-m">Boost, Excite, Strength
                                        </p>
                                        <h4 class="banner-desc text-white mb-0">Discount <span class="text-secondary">20%
                        Off</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-space col-1"></div>
                        </div>
                    </div>
                    
                </section>

{{-- <section>
                <div class="row cols-1 cols-sm-2 cols-lg-3 pt-4">
                    <div>
                        <div class="banner banner-fixed overlay-filter overlay-blur">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">Blur</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="banner banner-fixed overlay-filter overlay-brightness">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">Brightness</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="banner banner-fixed overlay-filter overlay-contrast">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">Contrast</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="banner banner-fixed  overlay-filter overlay-grayscale">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">Grayscale</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="banner banner-fixed overlay-filter overlay-none">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">None</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="banner banner-fixed overlay-filter overlay-hue">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">Hue Rotate</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="banner banner-fixed overlay-filter overlay-opacity">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">Opacity</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="banner banner-fixed overlay-filter overlay-saturate">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">Saturate</h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="banner banner-fixed overlay-filter overlay-sepia">
                            <figure>
                                <img src="{{asset('frontend/images/banner-effect/banner-effect.png')}}" width="380" height="240" alt="effect">
                            </figure>
                            <div class="banner-content x-50 y-50">
                                <h2 class="mb-0 text-center text-white">Sepia</h2>
                            </div>
                        </div>
                    </div>
                </div>
</section> --}}
                <section class="mt-10 pt-7">
                    <div class="container">
                        <h2 class="title title-center title-descri mb-2">
                            Best Seller
                        </h2>
                        <p class="text-body text-center title-descri mb-2 pb-4">
                            Best Selling Pre Workout and BCAA with Different Flavoures
                        </p>
                        <div class="row cols-1 cols-md-2 svg-floating">
                            <div class="svg-floating-item">
                                <div class="code-template">
                                    <figure class="svg-background">
                                        <img src="{{asset('frontend/images/svg-floating/svg-background.png')}}" alt="svg-floating"
                                            width="722" height="525" />
                                    </figure>
                                    <div class="svg-template">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="980px"
                                            height="980px" viewBox="0 -1 70 72" class="float-svg code-content"
                                            data-float-options="{&quot;delta&quot;:1,&quot;speed&quot;:2,&quot;size&quot;:14}"
                                            xml:space="preserve">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0,70V0h70v70H0z M50.728,30.397c-0.292-3.632-3.452-5.655-6.937-5.383  c-3.695,0.289-6.916-1.362-10.281-2.588c-0.035-0.012-0.068-0.024-0.103-0.036c-2.406-0.851-4.996-1.615-7.574-1.326  c-2.607,0.292-5.202,1.786-6.206,4.206c-0.961,2.321-0.315,5.027,0.905,7.223c1.22,2.195,2.968,4.045,4.407,6.105  c1.018,1.454,1.882,3.014,2.578,4.647c0.72,1.693,1.061,4.15,2.83,5.117c3.21,1.753,6.673-0.013,8.736-1.995  C43.023,42.582,51.245,36.861,50.728,30.397z">
                                            </path>
                                        </svg>
                                        <figure class="appear-animate" data-animation-options="{
                                                'delay': '.3s'
                                            }">
                                            <img src="{{asset('frontend/images/svg-floating/svg1.png')}}" alt="svg-floating"
                                                width="393" height="398" />
                                        </figure>
                                    </div>
                                    <figure class="svg-notice">
                                        <img src="{{asset('frontend/images/svg-floating/svg-low.png')}}" width="135" height="155"
                                            alt="svg-level" />
                                    </figure>
                                    
                                </div>
                            </div>
                            <div class="svg-floating-item">
                                <div class="code-template">
                                    <figure class="svg-background">
                                        <img src="{{asset('frontend/images/svg-floating/svg-background.png')}}" alt="svg-floating"
                                            width="722" height="525" />
                                    </figure>
                                    <div class="svg-template">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="980px"
                                            height="980px" viewBox="0 -3 70 76" class="float-svg code-content"
                                            data-float-options="{&quot;delta&quot;:2.8,&quot;speed&quot;:2,&quot;size&quot;:14}"
                                            xml:space="preserve">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0,70V0h70v70H0z M50.728,30.397c-0.292-3.632-3.452-5.655-6.937-5.383  c-3.695,0.289-6.916-1.362-10.281-2.588c-0.035-0.012-0.068-0.024-0.103-0.036c-2.406-0.851-4.996-1.615-7.574-1.326  c-2.607,0.292-5.202,1.786-6.206,4.206c-0.961,2.321-0.315,5.027,0.905,7.223c1.22,2.195,2.968,4.045,4.407,6.105  c1.018,1.454,1.882,3.014,2.578,4.647c0.72,1.693,1.061,4.15,2.83,5.117c3.21,1.753,6.673-0.013,8.736-1.995  C43.023,42.582,51.245,36.861,50.728,30.397z">
                                            </path>
                                        </svg>
                                        <figure class="appear-animate" data-animation-options="{
                                            'delay': '.3s'
                                        }">
                                            <img src="{{asset('frontend/images/svg-floating/svg2.png')}}" alt="svg-floating"
                                                width="393" height="398" />
                                        </figure>
                                    </div>
                                    <figure class="svg-notice">
                                        <img src="{{asset('frontend/images/svg-floating/svg-high.png')}}" width="135" height="155"
                                            alt="svg-level" />
                                    </figure>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

               

                <section class="banner-group mt-4">
                    <div class="container">
                        <h2 class="title d-none">Banner Group</h2>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="banner banner-3 overlay-zoom banner-fixed banner-radius content-middle appear-animate"
                                    data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s', 'delay': '.2s'}">
                                    <figure>
                                        <img src="{{asset('frontend/images/banners/banner1.png')}}" alt="banner" width="380"
                                            height="207" style="background-color: #836648;" />
                                    </figure>
                                    <div class="banner-content">
                                        <h3 class="banner-title text-white mb-1"></h3>
                                        <h4 class="banner-subtitle text-uppercase font-weight-normal text-white">
                                           
                                        </h4>
                                        <hr class="banner-divider">
                                        <a href="{{url('shop')}}" class="btn btn-white btn-link btn-underline">Shop Now<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4 order-lg-auto order-sm-last">
                                <div class="banner banner-4 banner-fixed banner-radius overlay-effect2 content-middle content-center appear-animate"
                                    data-animation-options="{'name': 'fadeIn', 'duration': '1s', 'delay': '.2s'}">
                                    <figure>
                                        <img src="{{asset('frontend/images/banners/banner2.png')}}" alt="banner" width="350"
                                            height="177" style="background-color: #1e1e1e;" />
                                    </figure>
                                    <div class="banner-content d-flex align-items-center w-100 text-left">
                                        <div class="mr-auto mb-4 mb-md-0">
                                            <h4 class="banner-subtitle text-white">
                                                Up to 20% Off<br><span class="ls-l">Black Friday</span>
                                            </h4>
                                            <h3 class="banner-title text-primary font-weight-bold lh-1 mb-0">Sale</h3>
                                        </div>
                                        <a href="{{url('shop')}}"
                                            class="btn btn-primary btn-outline btn-rounded font-weight-bold text-white">Shop
                                            Now<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="banner overlay-zoom banner-5 banner-fixed banner-radius content-middle appear-animate"
                                    data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                    <figure>
                                        <img src="{{asset('frontend/images/banners/banner3.png')}}" alt="banner" width="380"
                                            height="207" style="background-color: #97928b;" />
                                    </figure>
                                    <div class="banner-content">
                                        <h3 class="banner-title text-white mb-1">Big Sale</h3>
                                        <h4 class="banner-subtitle text-uppercase font-weight-normal text-white">30% Off
                                        </h4>
                                        <hr class="banner-divider">
                                        <a href="{{url('shop')}}" class="btn btn-white btn-link btn-underline">Shop Now<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    <div class=" subtitle"></div>
                    <div ><span></span></div>
                <section>

                </section>

                <section class="benefit-section text-center appear-animate mb-10 pb-10" style="background-image: url({{asset('frontend/images/background1.jpg')}}); background-position: center center;
                background-repeat: no-repeat; background-color: #FFF;">
                <div class=" title title-center title-descri mt-4 mb-2">WHY Nextage Nutrition?</div>
                <div class="subtitle title-underline"><span>Benefits
                        &
                        Outcomes</span></div>
                <div class="benefit-container container p-relative mt-md-10 pt-md-8">
                    <figure class="floating d-flex justify-content-center"
                        data-options='{"invertX":false,"invertY":false,"limitY":"0"}' data-floating-depth="0.1">
                        <img src="{{asset('frontend/images/benefit-img.png')}}" class="layer" alt="benefit" width="999"
                            height="592">
                    </figure>
                    <div class="benefit-content row gutter-lg">
                        <div class="col-md-6 col-12 benefit-left">
                            <div class="icon-boxi icon-box-side icon-border appear-animate benefit-icon1 skrollr"
                                data-options='{"data-bottom-top":"transform: translate(-24%, 0);","data-center":"transform: translate(0%, 0);"}'
                                data-animation-options="{
                                'name': 'zoomIn',
                                'delay': '.3s'
                            }">
                                <div class="icon-box-content pr-md-4">
                                    <h2 class="icon-box-title">Improve Health</h2>
                                    <p>Tellus rutrum tellus pellentesque eu dunt
                                        tortor aliquam nulla.</p>
                                </div>
                                <div class="icon-box-icon">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_7" x="0px" y="0px"
                                            width="75px" height="75px" viewBox="0 0 75 75" xml:space="preserve">
                                            <path
                                                d="M67.817,10.341c3.041,2.542,5.15,5.671,6.328,9.386s1.35,7.455,0.515,11.22c-0.834,3.764-2.624,7.015-5.371,9.753  L40.885,70.032c-0.981,0.978-2.109,1.467-3.385,1.467c-1.276,0-2.405-0.489-3.385-1.467L5.71,40.847  c-2.748-2.835-4.538-6.136-5.372-9.899c-0.834-3.765-0.662-7.504,0.515-11.22c1.178-3.715,3.287-6.844,6.328-9.386  c2.649-2.249,5.642-3.667,8.978-4.253c3.336-0.586,6.623-0.342,9.86,0.733c3.238,1.076,6.083,2.884,8.536,5.427l2.944,2.933  l2.943-2.933c2.452-2.542,5.298-4.351,8.536-5.427c3.237-1.075,6.524-1.32,9.86-0.733C62.175,6.675,65.168,8.092,67.817,10.341z">
                                            </path>
                                        </svg> </span>
                                </div>
                            </div>
                            <div class="icon-boxi icon-box-side icon-border appear-animate benefit-icon2 skrollr"
                                data-options='{"data-bottom-top":"transform: translate(-24%, 0);","data-center":"transform: translate(0%, 0);"}'
                                data-animation-options="{
                                'name': 'zoomIn',
                                'delay': '.3s'
                            }">
                                <div class="icon-box-content pr-md-4">
                                    <h2 class="icon-box-title">Balance Your Mind</h2>
                                    <p>Tellus rutrum tellus pellentesque<br>dunt
                                        tortor aliquam nulla.</p>
                                </div>
                                <div class="icon-box-icon">
                                    <span class="icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_8" x="0px" y="0px"
                                            width="75px" height="75px" viewBox="0 0 75 75" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M37.5,44.96c1.649-2.503,3.56-4.704,5.729-6.603c2.257-2.245,4.861-4.188,7.813-5.828    c-1.042-4.575-2.67-8.805-4.883-12.689c-2.214-3.885-4.753-7.08-7.618-9.583c-0.26-0.259-0.585-0.389-0.976-0.389    s-0.759,0.13-1.106,0.389c-2.865,2.503-5.404,5.697-7.618,9.583c-2.213,3.884-3.841,8.114-4.882,12.689    c2.864,1.641,5.425,3.539,7.682,5.697C33.898,40.213,35.851,42.457,37.5,44.96z M74.739,30.911    c-0.173-0.216-0.434-0.324-0.781-0.324c-3.732,0-7.552,0.562-11.458,1.684c-6.511,1.813-11.979,4.835-16.406,9.064    c-3.732,3.366-6.597,7.467-8.594,12.301c-1.997-4.834-4.861-8.935-8.594-12.301c-4.427-4.229-9.896-7.251-16.406-9.064    c-3.906-1.122-7.726-1.684-11.458-1.684c-0.347,0-0.607,0.108-0.781,0.324C0.087,31.126,0,31.364,0,31.623    c0,3.453,0.607,7.035,1.823,10.748c1.91,5.956,5.166,10.963,9.766,15.021c4.601,4.489,9.723,7.553,15.365,9.193    c3.038,0.863,6.511,1.295,10.417,1.295h0.261c3.907,0,7.378-0.432,10.417-1.295c5.643-1.641,10.764-4.704,15.364-9.193    c4.602-4.058,7.856-9.064,9.766-15.021C74.393,38.658,75,35.076,75,31.623C75,31.364,74.913,31.126,74.739,30.911z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg> </span>
                                </div>
                            </div>
                            <div class="icon-boxi icon-box-side icon-border appear-animate benefit-icon3 skrollr"
                                data-options='{"data-bottom-top":"transform: translate(-24%, 0);","data-center":"transform: translate(0%, 0);"}'
                                data-animation-options="{
                                'name': 'zoomIn',
                                'delay': '.3s'
                            }">
                                <div class="icon-box-content pr-md-4">
                                    <h2 class="icon-box-title">Weight Loss</h2>
                                    <p>Tellus rutrum tellus pellentesque eu dunt
                                        tortor aliquam nulla.</p>
                                </div>
                                <div class="icon-box-icon">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_9" x="0px" y="0px"
                                            width="75px" height="75px" viewBox="0 0 75 75" xml:space="preserve">
                                            <path
                                                d="M65.625,9.375c2.54,0,4.738,0.929,6.592,2.784C74.073,14.014,75,16.21,75,18.75v46.875c0,2.54-0.927,4.738-2.783,6.592  C70.363,74.073,68.165,75,65.625,75H9.375c-2.54,0-4.738-0.927-6.591-2.783C0.929,70.363,0,68.165,0,65.625V18.75  c0-2.54,0.929-4.736,2.784-6.591c1.853-1.855,4.052-2.784,6.591-2.784h3.808c-2.54,4.395-3.808,9.108-3.808,14.136  c0,5.027,1.268,9.693,3.808,13.989c2.54,4.296,5.958,7.717,10.257,10.253c4.295,2.54,8.981,3.812,14.061,3.812  c5.079,0,9.766-1.271,14.061-3.812c4.299-2.536,7.717-5.957,10.257-10.253s3.808-8.962,3.808-13.989  c0-5.027-1.268-9.741-3.808-14.136H65.625z M37.5,46.875c-4.198,0-8.107-1.051-11.72-3.151c-3.613-2.097-6.468-4.952-8.568-8.568  c-2.101-3.613-3.151-7.518-3.151-11.72c0-4.198,1.05-8.103,3.151-11.716c2.101-3.615,4.956-6.471,8.568-8.57S33.302,0,37.5,0  c4.197,0,8.107,1.05,11.72,3.149s6.468,4.956,8.568,8.57c2.101,3.613,3.151,7.518,3.151,11.716c0,4.202-1.051,8.107-3.151,11.72  c-2.101,3.616-4.956,6.472-8.568,8.568C45.607,45.824,41.697,46.875,37.5,46.875z M37.5,24.61c-1.662,0-3.05,0.585-4.175,1.759  c-1.122,1.17-1.685,2.563-1.685,4.172c0,1.613,0.563,2.979,1.685,4.104c1.125,1.121,2.513,1.681,4.175,1.681s3.05-0.56,4.176-1.681  c1.121-1.126,1.684-2.469,1.684-4.029c0-1.561-0.536-2.93-1.613-4.104l4.982-11.569c0.195-0.587,0.173-1.172-0.075-1.76  c-0.243-0.585-0.656-1-1.241-1.244c-0.589-0.246-1.175-0.246-1.76,0c-0.585,0.244-1.024,0.659-1.316,1.244L37.5,24.61z">
                                            </path>
                                        </svg> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 benefit-right">
                            <div class="icon-boxi icon-box-side icon-border appear-animate benefit-icon4 skrollr"
                                data-options='{"data-bottom-top":"transform: translate(24%, 0);","data-center":"transform: translate(0%, 0);"}'
                                data-animation-options="{
                                'name': 'zoomIn',
                                'delay': '.3s'
                            }">
                                <div class="icon-box-icon mr-md-4">
                                    <span class="icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_5" x="0px" y="0px"
                                            width="75px" height="75px" viewBox="0 0 75 75" xml:space="preserve">
                                            <path
                                                d="M8.31,11.872c-0.875-0.878-1.313-1.947-1.313-3.203c0-1.256,0.438-2.325,1.313-3.204l4.314-4.146  C13.498,0.439,14.561,0,15.812,0c1.25,0,2.313,0.439,3.188,1.319l18.004,18.089L55.005,1.319C55.878,0.439,56.941,0,58.192,0  c1.25,0,2.313,0.439,3.188,1.319l4.312,4.146c0.878,0.878,1.315,1.947,1.315,3.204c0,1.256-0.438,2.325-1.315,3.203l-25.5,25.629  c-0.878,0.882-1.938,1.321-3.188,1.321c-1.254,0-2.314-0.439-3.191-1.321L8.31,11.872z M65.691,48.054  c0.878-0.878,1.315-1.947,1.315-3.203c0-1.257-0.438-2.325-1.315-3.203l-4.312-4.146c-0.874-0.882-1.938-1.321-3.188-1.321  c-1.251,0-2.25,0.439-3.002,1.321L37.003,55.594L18.999,37.501c-0.874-0.882-1.938-1.321-3.188-1.321  c-1.25,0-2.314,0.439-3.188,1.321L8.31,41.647c-0.875,0.878-1.313,1.946-1.313,3.203c0,1.256,0.438,2.325,1.313,3.203l25.502,25.629  C34.689,74.561,35.75,75,37.003,75c1.25,0,2.31-0.439,3.188-1.317L65.691,48.054z">
                                            </path>
                                        </svg> </span>
                                </div>
                                <div class="icon-box-content">
                                    <h2 class="icon-box-title">Lower Blood Pressure</h2>
                                    <p>Tellus rutrum tellus pellentesque eu dunt
                                        tortor aliquam nulla.</p>
                                </div>
                            </div>
                            <div class="icon-boxi icon-box-side icon-border appear-animate benefit-icon5 skrollr"
                                data-options='{"data-bottom-top":"transform: translate(24%, 0);","data-center":"transform: translate(0%, 0);"}'
                                data-animation-options="{
                                'name': 'zoomIn',
                                'delay': '.3s'
                            }">
                                <div class="icon-box-icon mr-md-4">
                                    <span class="icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_4" x="0px" y="0px"
                                            width="75px" height="75px" viewBox="0 0 75 75" xml:space="preserve">
                                            <path
                                                d="M0,37.5c0-6.754,1.688-13.004,5.066-18.75C8.443,13.004,13.004,8.443,18.75,5.066C24.496,1.688,30.746,0,37.5,0  c6.754,0,13.004,1.688,18.75,5.066c5.746,3.377,10.308,7.938,13.685,13.684S75,30.746,75,37.5c0,6.754-1.688,13.004-5.065,18.75  S61.996,66.558,56.25,69.935S44.254,75,37.5,75c-6.754,0-13.004-1.688-18.75-5.065S8.443,61.996,5.066,56.25  C1.688,50.504,0,44.254,0,37.5z M37.5,65.322c5.04,0,9.702-1.234,13.986-3.704s7.662-5.848,10.132-10.132s3.704-8.945,3.704-13.986  c0-5.041-1.234-9.703-3.704-13.987c-2.47-4.285-5.848-7.661-10.132-10.131c-4.284-2.47-8.946-3.705-13.986-3.705V65.322z">
                                            </path>
                                        </svg> </span>
                                </div>
                                <div class="icon-box-content">
                                    <h2 class="icon-box-title">Sleep Better</h2>
                                    <p>Tellus rutrum tellus pellentesque<br>dunt
                                        tortor aliquam nulla.</p>
                                </div>
                            </div>
                            <div class="icon-boxi icon-box-side icon-border appear-animate benefit-icon6 skrollr"
                                data-options='{"data-bottom-top":"transform: translate(24%, 0);","data-center":"transform: translate(0%, 0);"}'
                                data-animation-options="{
                                'name': 'zoomIn',
                                'delay': '.3s'
                            }">
                                <div class="icon-box-icon mr-md-4">
                                    <span class="icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_6" x="0px" y="0px"
                                            width="75px" height="75px" viewBox="0 0 75 75" xml:space="preserve">
                                            <path
                                                d="M58.563,9.415h16.374l-4.681,9.357v23.391c0,4.29-1.046,8.211-3.143,11.773c-2.093,3.555-4.944,6.382-8.551,8.479  s-7.508,3.144-11.697,3.144H35.608l-9.505,8.187c-0.975,0.779-2.045,1.17-3.215,1.17c-6.042-0.291-11.158-1.705-15.352-4.24  c-2.923-1.85-5.263-4.142-7.017-6.874c-0.487-0.679-0.585-1.409-0.293-2.188c0.293-0.782,0.829-1.27,1.609-1.462l21.053-5.264  c-2.145-1.561-4.045-3.122-5.703-4.681c-3.803-3.706-6.821-7.844-9.062-12.428c-2.245-4.873-3.362-9.792-3.362-14.769  c0-5.942,1.266-11.595,3.798-16.957C8.95,5.176,9.657,4.737,10.68,4.737c1.022,0,1.729,0.487,2.12,1.461  c2.923,6.726,7.433,12.233,13.523,16.524c6.094,4.289,12.94,6.625,20.543,7.013v-8.623c0-3.217,1.146-5.971,3.435-8.261  C52.594,10.561,55.345,9.415,58.563,9.415z M42.189,24.476c-3.706-0.779-7.188-2.097-10.455-3.95  c-3.267-1.853-6.167-4.189-8.698-7.017c1.657-4.777,4.045-8.968,7.165-12.575c0.679-0.778,1.485-1.022,2.412-0.73  c0.922,0.293,1.486,0.927,1.681,1.901c0.975,6.726,3.606,12.818,7.896,18.277V24.476z M58.563,23.449  c0.683,0,1.242-0.215,1.681-0.655c0.44-0.439,0.659-0.998,0.659-1.681s-0.219-1.242-0.659-1.681  c-0.438-0.439-0.998-0.659-1.681-0.659s-1.242,0.243-1.682,0.73c-0.438,0.487-0.659,1.046-0.659,1.682s0.221,1.17,0.659,1.609  C57.321,23.233,57.881,23.449,58.563,23.449z">
                                            </path>
                                        </svg> </span>
                                </div>
                                <div class="icon-box-content">
                                    <h2 class="icon-box-title">Increase Elexibility</h2>
                                    <p>Tellus rutrum tellus pellentesque eu dunt
                                        tortor aliquam nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-title">Nextage </div>
            </section>

            

                <section class="mt-10 pt-7 mb-10 pb-7">
                    <div class="container">
                        <h2 class="title title-center title-descri mb-4">Nextage Nutrition Hotspots </h2>
                        <p class="text-body text-center title-descri">
                            {{-- You could create beautiful looks by combining the slider, banner and hotspots. Try this. --}}
                        </p>
                        <div class="code-template">
                            <div class="hotspot-section banner banner-hotspot appear-animate code-content">
                                <figure>
                                    <img src="{{asset('frontend/images/hotspot/hotspot-bg.gif')}}" alt="hotspot" width="100%"
                                        height="auto" style="background-color: #b8b8b5">
                                </figure>
                                <div class="hotspot-container">
                                    <div class="hotspot hotspot-type1 hotspotspread hotspot-bottom text-center"
                                        style="top: 11%;left: 27%;">
                                        <a href="#" title="hotspot"></a>
                                        <div class="tooltip">
                                            <figure class="tooltip-media">
                                                <img src="{{asset('frontend/images/hotspot/hotspot-2-1-300x338.png')}}" alt="hotspot"
                                                    width="300" height="338">
                                            </figure>
                                            <h2 class="tooltip-name"><a href="{{url('shop')}}"></a></h2>
                                            <h4 class="tooltip-price"><span class="price"></span></h4>
                                            <a href="#" class="btn btn-primary btn-radius btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart">Gluten Free </a>
                                        </div>
                                    </div>
                                    <div class="hotspot hotspot-type2 hotspotspread hotspot-right text-center"
                                        style="top: 48%;left: 52%;">
                                        <a href="#" title="hotspot"></a>
                                        <div class="tooltip">
                                            <figure class="tooltip-media">
                                                <img src="{{asset('frontend/images/hotspot/hotspot-2-7-300x338.png')}}" alt="hotspot"
                                                    width="300" height="338">
                                            </figure>
                                            <h2 class="tooltip-name"><a href="{{url('shop')}}">   
                                                     
                                                </a></h2>
                                            <h4 class="tooltip-price"><span class="price"></span></h4>
                                            <a href="#" class="btn btn-primary btn-radius btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart">Quick Absorb</a>
                                        </div>
                                    </div>
                                    <div class="hotspot hotspot-type3 hotspot-style-flash hotspot-top text-center"
                                        style="top: 87%;left: 47%;">
                                        <a href="#" title="hotspot"></a>
                                        <div class="tooltip">
                                            <figure class="tooltip-media">
                                                <img src="{{asset('frontend/images/hotspot/hotspot-3-300x338.png')}}" alt="hotspot"
                                                    width="300" height="338">
                                            </figure>
                                            <h2 class="tooltip-name"><a href="{{url('shop')}}"> </a></h2>
                                            <h4 class="tooltip-price"><span class="price"></span></h4>
                                            <a href="#" class="btn btn-primary btn-radius btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart">Muscle Power</a>
                                        </div>
                                    </div>
                                    <div class="hotspot hotspot-type4 hotspot-style-flash hotspot-top text-center"
                                        style="top: 81%;left: 22%;">
                                        <a href="#" title="hotspot"></a>
                                        <div class="tooltip">
                                            <figure class="tooltip-media">
                                                <img src="{{asset('frontend/images/hotspot/hotspot-12-300x338.png')}}" alt="hotspot"
                                                    width="300" height="338">
                                            </figure>
                                            <h2 class="tooltip-name"><a href="{{url('shop')}}"> 
                                                     </a></h2>
                                            <h4 class="tooltip-price"><span class="price"></span></h4>
                                            <a href="#" class="btn btn-primary btn-radius btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart">Qulaity</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                        </div>
                    </div>
                </section> 

                
        <!-- ===== ===== PRODUCT TAGS ==== ====== -->
   {{-- @include('frontend.common.product_tags') --}}
   <!-- ==== ===== PRODUCT TAGS : END ======= ==== --> 

                <!-- product tab -->
                                
                <section class="product-tab-filter mt-10 pt-7 appear-animate element-product-tab">
            
                        <div class="code-template">
                            <div class="container code-content">
                                <h2 class="title title-center mb-8">Products</h2>
                                <div class="toolbox pt-0">
                                    <div class="toolbox-left">
                                        <ul class="nav-filters product-filters" data-target="#products-grid">
                                            <li><a href="#" class="nav-filter active font-weight-semi-bold"
                                                    data-filter="*">All</a></li>
                                            @foreach($categories as $category)
                                            {{-- <li><a data-transition-type="backSlide" href="#category{{ $category->id }}" data-toggle="tab">{{ $category->category_name_en }}</a></li>
                                                        @endforeach --}}
                                            <li><a href="#category{{ $category->id }}" class="nav-filter font-weight-semi-bold"
                                                    data-filter=".category{{ $category->id }}">{{ $category->category_name_en }}</a></li>
                                            {{-- <li><a href="#" class="nav-filter font-weight-semi-bold"
                                                    data-filter=".category{{ $category->id }}">Pre Workout</a></li>
                                            <li><a href="#" class="nav-filter font-weight-semi-bold"
                                                    data-filter=".category{{ $category->id }}">Mass Gainer</a></li>
                                            <li><a href="#" class="nav-filter font-weight-semi-bold"
                                                    data-filter=".category{{ $category->id }}">BCAA</a></li> --}}
                                            @endforeach
                                                    {{-- <li><a href="#" class="nav-filter font-weight-semi-bold"
                                                        data-filter=".whey">Whey</a></li>
                                                <li><a href="#" class="nav-filter font-weight-semi-bold"
                                                        data-filter=".pre">Pre Workout</a></li>
                                                <li><a href="#" class="nav-filter font-weight-semi-bold"
                                                        data-filter=".mass">Mass Gainer</a></li>
                                                <li><a href="#" class="nav-filter font-weight-semi-bold"
                                                        data-filter=".bcaa">BCAA</a></li> --}}
                                            <!-- <li><a href="#" class="nav-filter font-weight-semi-bold"
                                                    data-filter=".sale">Sale</a></li> -->
                                        </ul>
                                        <!-- End of Header Search -->
                                    </div>
                                </div>
                                <div class="row grid products-grid mb-2" id="products-grid" data-grid-options="{
                                    'masonry': {
                                        'columnWidth': ''
                                    }
                                }">

                                @if($category->id   != null)
                                @foreach($products as $product)
                                
                                <div class="col-md-3 col-sm-4 col-6 grid-item category{{ $product->category_id }}  ">
                                    <div class="product text-center">
                                        
                                        {{-- @php
                                        $catwiseProduct = App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get(); 
                                        @endphp--}}
                                        
                                        
                                        <figure class="product-media" style="background-color: #f9f9f9;">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                <img src="{{ asset($product->product_thambnail) }}" alt="product"
                                                    width="280" height="315">
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
                                                <a href="{{ url('shop') }}" class="btn-product-icon " data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart" id="{{ $product->id }}" onclick="productView(this.id)"><i
                                                        class="d-icon-bag"></i></a>
                                                        
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="d-icon-heart"></i></a>
                                                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="btn-product-icon "
                                                    title="Quick View"><i class="d-icon-search"></i></a>
                                            
                                            </div>
                                            <div class="product-action">
                                                {{-- <a href="#" class="btn-product btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)">
                                                    Quick View</a> --}}
                                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)">
                                                        Launch demo modal
                                                      </button> --}}
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="">{{ $product->short_descp_en }}</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                                                </a>
                                            </h3>
                                            
                        
                                                @if ($product->discount_price == NULL)
                                                    <div class="product-price">
                                                        <span class="price"> ₹{{ $product->selling_price }}</span>
                                                    </div>
                                                @else
                                                    <div class="product-price">
                                                        <span class="price">₹{{ $product->discount_price }} </span>      <del class="old-price">₹ {{ $product->selling_price }}</del>
                                                    </div>
                                                        
                                                @endif
                                                
                                            
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="rating-reviews">( reviews )</a>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                
                                
                               
                                @endforeach
                                
                                @else
                                <div class="col-md-3 col-sm-4 col-6 grid-item category{{ $categories->category_id }}  ">
                                            <h5 class="text-danger" id="out">No Product Found</h5>
                                </div>            
                                @endif
                                   


                                    {{-- <div class="col-md-3 col-sm-4 col-6 grid-item bags sale">
                                        <div class="product text-center">
                                            <figure class="product-media" style="background-color: #f9f9f9;">
                                                <a href=" {{url('shop')}}">
                                                    <img src="{{asset('frontend/images/product-tab/type2/12.jpg')}}" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart"><i
                                                            class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                        View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3cols.html">Bags & Backpack</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Mackintosh Poket backpack</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$98.00</ins><del class="old-price">$129.00</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 8 reviews )</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  --}}
                                </div>
                            </div>
                           
                        </div>
                    
                </section>

                {{-- <section class="mt-10 pt-6" style="background-color: #f8f8f8;">
                    <div class="container pt-10 pb-6">
                        <h2 class="title title-center mb-4">One Column</h2>
                        <div class="banner-desc-container">
                            <p>Below is a call to action banner that has 100% full width and is placed in entire row.
                            </p>
                        </div>
                        <div class="banner-one-col align-items-center pb-10">
                            <div class="banner-left-section">
                                <div class="banner">
                                    <img src="{{asset('frontend/images/cta/3.png')}}" class="d-block" alt="banner" width="50%"
                                        height="auto" style="background-color: rgb(21, 22, 17);">
                                </div>
                            </div>
                            <div class="banner-right-section bg-white mt-4 mt-md-0">
                                <div class="banner-content pr-3 pl-3 pr-lg-10 y-50">
                                    <h4 class="banner-subtitle ftext-body">Up to
                                        <span class="font-weight-semi-bold text-secondary">30% Off</span>
                                    </h4>
                                    <h3 class="banner-title font-weight-bold ls-m mb-2">Cyber Monday Sale</h3>
                                    <p class="ls-normal mb-8 pr-5">We support 4 main product types and customize
                                        options. So you can create amazing product</p>
                                    <a href="shop.html" class="btn btn-primary btn-rounded mb-1">Shop Now
                                        <i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                <section class="mt-10 pt-7 single-slider page-content element-single-product">
                    <div class="container">
                        <h1 class="title title-center ">Nextage Iso Con</h1>
                        <div class="code-template">
                            <div class="product product-single row code-content" style="padding-top: 30px;">
                                <div class="col-md-6 product-gallery">
                                    <div class="rotate-slider owl-carousel owl-theme product-single-carousel owl-nav-arrow row gutter-no cols-1"
                                        data-owl-options="{
                                        'nav': true,
                                        'dots': false,
                                        'loop': true
                                    }">
                                        <figure class="product-image">
                                            <img src="{{asset('frontend/images/single-product/1.png')}}"
                                                data-zoom-image="images/single-product/1.jpg')}}"
                                                alt="Women's Leather Backpacks" width="800" height="800">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="{{asset('frontend/images/single-product/2.png')}}"
                                                data-zoom-image="images/single-product/2.jpg')}}"
                                                alt="Women's Brown Leather Backpacks" width="800" height="800">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="{{asset('frontend/images/single-product/3.png')}}"
                                                data-zoom-image="images/single-product/3.jpg')}}"
                                                alt="Women's Brown Leather Backpacks" width="800" height="800">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="{{asset('frontend/images/single-product/4.png')}}"
                                                data-zoom-image="images/single-product/4.jpg')}}"
                                                alt="Women's Brown Leather Backpacks" width="800" height="800">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-details">
                                        <h2 class="product-name">
                                            <a href="{{url('shop')}}">Pure Whey Protein Concentrate</a>
                                        </h2>
                                        <div class="product-meta mb-3">
                                             <span class="product-sku">RAW Whey Protein With Testobooster. 
                                            </span>
                                             <span class="product-cat text-capitalize"></span>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">Whey Iso Con</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="{{url('shop')}}#product-tab-reviews" class="rating-reviews">( 
                                                  )</a>
                                        </div>

                                        <p class="product-short-desc font-primary">
                                            ♦24g of Protein & 120 kcal Per Serving (30g).</p>
                                            <p class="product-short-desc font-primary">
                                            ♦ Fulfill Calorie & Protein Requirement.</p>
                                            <p class="product-short-desc font-primary">
                                            ♦ Repair & Recover Muscle Tissues.</p>
                                            <p class="product-short-desc font-primary">
                                            ♦ Promote Muscle Growth.</p>
                                            <p class="product-short-desc font-primary">
                                            ♦ Boost Strength & Stamina.</p>
                                        <hr class="product-divider">

                                        <div class="product-form product-qty">
                                            <div class="product-form-group" >
                                                {{-- <div class="input-group mr-2">
                                                    <button class="quantity-minus d-icon-minus"></button>
                                                    <input class="quantity form-control" type="number" min="1"
                                                        max="1000000">
                                                    <button class="quantity-plus d-icon-plus"></button>
                                                </div> --}}
                                                <a href="{{url('shop')}}" 
                                                    class="btn btn-primary btn-rounded btn-md ml-2 text-normal ls-normal font-weight-semi-bold"><i
                                                        class="d-icon-bag"></i> &nbsp; Shop Now</a>
                                            </div>
                                        </div>

                                        <hr class="product-divider mb-3">

                                        <div class="product-footer">
                                            <div class="social-links mr-4">
                                                {{-- <a href="#" title="social-link"
                                                    class="social-link social-facebook fab fa-facebook-f"></a>
                                                <a href="#" title="social-link"
                                                    class="social-link social-twitter fab fa-twitter"></a>
                                                <a href="#" title="social-link"
                                                    class="social-link social-pinterest fab fa-pinterest-p"></a> --}}
                                            </div>
                                            <a href="" class="addthis_inline_share_toolbox"></a>				
						                    
                                            {{-- <span class="divider d-lg-show"></span>
                                            <span class="divider d-lg-show"></span>
                                            <a href="#" class="btn-product btn-wishlist mr-6"><i
                                                    class="d-icon-heart"></i>Add to
                                                wishlist</a>
                                            <a href="#" class="btn-product btn-compare"><i
                                                    class="d-icon-compare"></i>Add
                                                to
                                                compare</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </section>



                {{-- <section class="banner-section mb-10 pb-7">
                    <div class="container">
                        <div class="banner banner-radius" style="background-image: url('images/demos/demo-market1/banner/5.jpg'); background-color: #2f2d2c;">
                            <div class="banner-content content-left mr-4">
                                <h3 class="banner-title text-white text-uppercase font-weight-bold ls-m">Today’s Special
                                </h3>
                                <p class="text-white font-weight-normal ls-m">New collection release spring season</p>
                                <a href="{{url('shop')}}" class="btn btn-primary btn-link btn-underline">View All
                                    Collection<i class="d-icon-arrow-right"></i></a>
                            </div>
                            <div class="banner-content content-right">
                                <div class="owl-carousel owl-theme owl-loaded owl-drag" data-owl-options="{
                                    'nav': true,
                                    'dots': false,
                                    'items': 1
                                }">
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 610px;"><div class="owl-item active" style="width: 305px;"><div class="banner-item text-center">
                                        <h4 class="item-subtitle text-white text-uppercase font-weight-bold ls-m">On Shoes
                                        </h4>
                                        <h3 class="item-title text-primary ls-m">Up to 30% Off</h3>
                                        <a href="{{url('shop')}}" class="btn btn-white btn-link btn-slide-right">Shop
                                            Now<i class="d-icon-arrow-right"></i></a>
                                    </div></div><div class="owl-item" style="width: 305px;"><div class="banner-item text-center">
                                        <h4 class="item-subtitle text-white text-uppercase font-weight-bold ls-m">On
                                            Sneakers</h4>
                                        <h3 class="item-title text-primary ls-m">Up to 20% Off</h3>
                                        <a href="{{url('shop')}}" class="btn btn-white btn-link btn-slide-right">Shop
                                            Now<i class="d-icon-arrow-right"></i></a>
                                    </div></div></div></div><div class="owl-nav"><button type="button" title="presentation" class="owl-prev disabled"><i class="d-icon-angle-left"></i></button><button type="button" title="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                            </div>
                        </div>
                    </div>
                </section> --}}


                {{-- <section class="banner-big-section" style="background-image: url('images/demos/demo-sport/bg.jpg'); background-color: #333;">
                    <div class="shape-divider">
                        <div class="shape shape2">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 41.624 100 3.792" enable-background="new 0 41.624 100 3.792" xml:space="preserve">
                                <path fill="#fff" d="M100,55.783L0,55.746V45.017c10.703-1.928,29.146-3.2,50.104-3.2c20.822,0,39.164,1.257,49.896,3.163V55.783z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="brand-carousel owl-carousel owl-theme owl-shadow-carousel owl-loaded owl-drag" data-owl-options="{
                            'items': 7,
                            'loop': false,
                            'autoplay': true,   
                            'dots': false,
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
                                    'items': 6
                                },
                                '1200': {
                                    'items': 7
                                }
                            }
                        }">
                        
                        
                        
                        
                        
                        
                        
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-375px, 0px, 0px); transition: all 1s ease 0s; width: 1313px;"><div class="owl-item" style="width: 187.5px;"><figure class="brand">
                            <img src="images/demos/demo-sport/brands/1.png" alt="brand" width="125" height="53">
                        </figure></div><div class="owl-item" style="width: 187.5px;"><figure class="brand">
                            <img src="images/demos/demo-sport/brands/2.png" alt="brand" width="104" height="56">
                        </figure></div><div class="owl-item active" style="width: 187.5px;"><figure class="brand">
                            <img src="images/demos/demo-sport/brands/3.png" alt="brand" width="117" height="31">
                        </figure></div><div class="owl-item active" style="width: 187.5px;"><figure class="brand">
                            <img src="images/demos/demo-sport/brands/4.png" alt="brand" width="139" height="58">
                        </figure></div><div class="owl-item" style="width: 187.5px;"><figure class="brand">
                            <img src="images/demos/demo-sport/brands/5.png" alt="brand" width="123" height="36">
                        </figure></div><div class="owl-item" style="width: 187.5px;"><figure class="brand">
                            <img src="images/demos/demo-sport/brands/6.png" alt="brand" width="113" height="36">
                        </figure></div><div class="owl-item" style="width: 187.5px;"><figure class="brand">
                            <img src="images/demos/demo-sport/brands/7.png" alt="brand" width="144" height="43">
                        </figure></div></div></div><div class="owl-nav disabled"><button type="button" title="presentation" class="owl-prev"><i class="d-icon-angle-left"></i></button><button type="button" title="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                    <div class="container">
                        <div class="banner-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="banner-subtitle mt-2 mb-0">Flash Sale</h4>
                                    <h3 class="banner-title font-weight-bold text-uppercase mb-5">
                                        Light Sneaker</h3>
                                    <p class="text-uppercase mb-6"><span class="d-block text-normal mb-1">2022 Fashion
                                            Style
                                            Collection</span>
                                        Start At ₹99.00</p>
                                    <a href="{{url('shop')}}" class="btn btn-rounded btn-outline btn-white mb-1">Shop
                                        now<i class="d-icon-arrow-right"></i></a>
                                    <div class="banner-info">
                                        <h6 class="text-white font-weight-bold mb-0">Hot <br> Deal</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="floating" style="transform: translate3d(0px, 0px, 0px); position: relative; transform-style: preserve-3d; backface-visibility: hidden;" data-options="{&quot;invertX&quot;:false,&quot;invertY&quot;:false}" data-floating-depth=".3">
                                        <img src="images/demos/demo-sport/shoes.png" class="banner-image slide-animate mt-2 layer appear-animate fadeInRightShorter appear-animation-visible" alt="Shoes" width="698" height="401" data-animation-options="{
                                            'name': 'fadeInRightShorter', 
                                            'duration': '1s',
                                            'delay': '.1s'
                                        }" data-depth=".3" style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(-1.38px, 4.59763px, 0px); transform-style: preserve-3d; backface-visibility: hidden; animation-duration: 1s;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                <section class="mt-10 pt-4">
             
                    <div class="container">
                    
                            <h2 class="title title-center mb-4"></h2>
                            <div class="banner-desc-container">
                                {{-- <p>Nextage Nutrtion promo banners are the typical element of call to actions. They are commonly used
                                    for advertising.</p> --}}
                            </div>
                            <div class="banner cta-simple">
                                <div class="banner-content bg-white d-lg-flex align-items-center">
                                    <div class="banner-header pr-lg-7 pb-lg-0 pb-4 mb-lg-0 mb-6">
                                        <h3 class="banner-title font-weight-bold ls-s text-uppercase">Trade-in</h3>
                                        <h4 class="banner-subtitle font-weight-normal ls-s text-body">Upgrade and save</h4>
                                    </div>
                                    <div class="banner-text mb-lg-0 mb-4 mr-lg-4 pl-lg-6 pr-lg-0 pl-2 pr-2">
                                        <h4 class="font-weight-normal ls-normal text-uppercase mb-0">Get a Nextage Nutrtion gift
                                            card<b>+25% off</b></h4>
                                        <p class="ls-m mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod.</p>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-ellipse">Shop Now<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                    
                        
                    </div>
                    

                    
                    
                
                </section>
           
                <section class="pt-10 mt-3 pb-10">
                    <div class="container mt-4">
                        <h2 class="title title-center">Latest Events</h2>
                        <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                            'nav': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
                        @foreach($blogpost as $blog)
                            <div class="blog-post">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media" style="background-color: #e9e9e9;">
                                        <a href="{{ route('post.details',$blog->id) }}">
                                            <img src="{{ asset($blog->post_image) }}" alt="Blog post" width="340"
                                                height="206" />
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()  }}</span>
                                            <span class="post-month">JAN</span>
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="{{url('shop')}}">@if(session()->get('language') == 'hindi') {{ $blog->post_title_hin }} @else {{ $blog->post_title_en }} @endif
                                                 </a></h4>
                                        <p class="post-content mb-4">@if(session()->get('language') == 'hindi') {!! Str::limit($blog->post_details_hin, 100 )  !!} @else {!! Str::limit($blog->post_details_en, 100 )  !!} @endif  
                                            ....</p>
                                        <a href="{{ route('post.details',$blog->id) }} "
                                            class="btn btn-primary btn-sm btn-link btn-underline btn-icon-right">Read
                                            More<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </section>


                <section class="mt-10 pt-7 video-innner">
                    <div class="container">
                        <h2 class="title title-center title-descri mb-2">Nextage Sport</h2>
                        <p class="text-body text-center title-descri">Nextage Nutrtion Proven formula for Muscle build.
                        </p>
                        <div class="code-template">
                            <div class="inner-video overlay-dark code-content">
                                <figure>
                                    <a href="#">
                                        <img src="{{asset('frontend/video/v2.png')}}" width="1843" height="606"
                                            alt="inner-video" />
                                    </a>
                                    <span class="video-play"></span>
                                    <video>
                                        <source src="{{asset('frontend/video/Hrithik Roshan - TUM NAHI SAMJHOGE _ Motivational Video.mp4')}}" type="video/mp4">
                                           {{-- <source src="https://www.facebook.com/manomaytv/videos/2061552457360446/?extid=NS-UNK-UNK-UNK-AN_GK0T-GK1C" type="video/mp4">  --}}
                                            {{-- <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fmanomaytv%2Fvideos%2F2061552457360446%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe> --}}
                                    </video>
                                    {{-- <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fmanomaytv%2Fvideos%2F2061552457360446%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe> --}}
                                </figure>
                            </div>
                         
                        </div>
                    </div>
                </section>


                 <section>
                    <div class="page-content element-counter">
                        <div class="container mt-10 pt-7 pb-10">
                            <div class="counter-box">
                                <h2 class="title title-center title-descri mb-4">Our Market</h2>
                                <p class="text-body title-descri text-center pb-1">We are providing awesome prebuilt counter -
                                    Boxed
                                    Counter with
                                    box
                                    shadow
                                    style.</p>
                                <div class="code-template">
                                    <div class="row cols-1 cols-sm-2 cols-md-3 cols-xl-4 gutter-lg mt-2 code-content">
                                        <div class="counter-part">
                                            <div class="counter text-center">
                                                <span class="count-to" data-fromvalue="0" data-tovalue="1900"
                                                    data-duration="2000" data-delimiter=",">0</span>
                                                <div class="counter-content">
                                                    <h3 class="count-title">Happy Clients</h3>
                                                    <p class="counter-descri">Lorem ipsum dolor sit amet, conctetur adipisci
                                                        elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="counter-part">
                                            <div class="counter text-center">
                                                <span class="count-to" data-fromvalue="0" data-tovalue="2346"
                                                    data-duration="2000" data-delimiter=",">0</span>
                                                <div class="counter-content">
                                                    <h3 class="count-title">Reviews</h3>
                                                    <p class="counter-descri">Lorem ipsum dolor sit amet, conctetur adipisci
                                                        elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="counter-part">
                                            <div class="counter text-center">
                                                <span class="count-to" data-fromvalue="0" data-tovalue="15" data-duration="2000"
                                                    data-delimiter=",">0</span>
                                                <div class="counter-content">
                                                    <h3 class="count-title">Years in Business</h3>
                                                    <p class="counter-descri">Lorem ipsum dolor sit amet, conctetur adipisci
                                                        elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="counter-part">
                                            <div class="counter text-center">
                                                <span class="count-to" data-fromvalue="0" data-tovalue="2253"
                                                    data-duration="2000" data-delimiter=",">0</span>
                                                <div class="counter-content">
                                                    <h3 class="count-title">Ratings</h3>
                                                    <p class="counter-descri">Lorem ipsum dolor sit amet, conctetur
                                                        adipisci elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                         
      
                    </div>
                 </section>
                 <section class="mt-2 pb-6 pt-10 pb-md-10 appear-animate" data-animation-options="{ 'delay': '.3s' }">
                    <h2 class="title d-none">Our Brand</h2>
                    <div class="container">
                        <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                            data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'loop': true,
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
                            <figure><img src="{{asset('frontend/images/brands/1.png')}}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{asset('frontend/images/brands/2.png')}}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{asset('frontend/images/brands/3.png')}}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{asset('frontend/images/brands/4.png')}}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{asset('frontend/images/brands/5.png')}}" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="{{asset('frontend/images/brands/6.png')}}" alt="brand" width="180" height="100" />
                            </figure>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="social-links social-link-active">
                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                        <a href="#" class="social-link social-linkedin fab fa-instagram"></a>
                        <a href="#" class="social-link social-email far fa-envelope"></a>
                        <a href="#" class="social-link social-google fab fa-google-plus-g"></a>
                        <a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
                        <a href="#" class="social-link social-reddit fab fa-reddit-alien"></a>
                        <a href="#" class="social-link social-tumblr fab fa-tumblr"></a>
                        <a href="#" class="social-link social-vk fab fa-vk"></a>
                        <a href="#" class="social-link social-youtube fab fa-youtube"></a>
                        <a href="#" class="social-link social-whatsapp fab fa-whatsapp"></a>
                        <a href="#" class="social-link social-xing fab fa-xing"></a>
                    </div>
                </section>

 
            </div>
@endsection

