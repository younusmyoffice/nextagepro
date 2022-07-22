@extends('frontend.master')
@section('content')
@section('title')
Conatct 
@endsection
@php
$setting = App\Models\SiteSetting::find(1);
 @endphp
       <div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </nav>
        </div><br>
        <div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
            <h3 class="page-subtitle font-weight-bold"> </h3>
            <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">CONTACT   </h1>
            <p class="page-desc text-white mb-0"> Contact us </p>
        </div>
        <div class="page-content mt-10 pt-7">
            <section class="contact-section">
                <div class="container">
                    <div class="row" style="padding-left: 20px" >
                        <div class="col-lg-3 col-md-4 col-sm-6 ls-m mb-4">
                            <div class="grey-section d-flex align-items-center h-100">
                                <div>
                                    <h4 class="mb-2 text-capitalize">Headquarters</h4>
                                    <p>{{ $setting->company_address }}</p>

                                    <h4 class="mb-2 text-capitalize">Phone Number</h4>
                                    <p>
                                        <a href="tel:#">{{ $setting->phone_one }} </a><br>
                                        <a href="tel:#"> {{ $setting->phone_two }}</a>
                                    </p>

                                    <h4 class="mb-2 text-capitalize">Support</h4>
                                    <p class="mb-4">
                                        <a href="#">{{ $setting->email }}</a><br>
                                        <a href="#">help@your-domain.com</a><br>
                                        <a href="#">Sale</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-6 d-flex align-items-center mb-4">
                            <div class="w-100">
                                {{-- <form class="pl-lg-2"> --}}
                                <form class="pl-lg-2" action="{{ route('contact.form') }}" method="post" id="contact-form"  enctype="multipart/form-data">
                                   @csrf
                                    <h4 class="ls-m font-weight-bold">Let’s Connect</h4>
                                    <p>Your email address will not be published. Required fields are
                                        marked *</p>
                                    <div class="row mb-2">
                                        <div class="col-12 mb-4">
                                            <textarea class="form-control" required
                                                placeholder="Comment*" name="message"></textarea>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <input class="form-control" type="text" name="name" placeholder="Name *" required>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <input class="form-control" type="email"name="email" placeholder="Email *" required>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <input class="form-control" type="phone"name="phone" placeholder="Phone *" required>
                                        </div>
                                    </div>
                                    <button class="btn btn-dark btn-rounded" type="submit">Post Comment<i
                                            class="d-icon-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section-->

            <section class="store-section mt-6 pt-10 pb-8">
                <div class="container">
                    <h2 class="title title-center mb-7 text-normal">Our store</h2>
                    <div class="row cols-sm-2 cols-lg-4">
                        <div class="store">
                            <figure class="banner-radius">
                                <img src="{{ asset('frontend/images/subpages/store-1.jpg')}}" alt="store" width="280" height="280">
                                <h4 class="overlay-visible">New York</h4>
                                <div class="overlay overlay-transparent">
                                    <a class="mt-8" href="mail:#">mail@newyorkriodestore.com</a>
                                    <a href="tel:#">Phone: (123) 456-7890</a>
                                    <div class="social-links mt-1">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="store">
                            <figure class="banner-radius">
                                <img src="{{ asset('frontend/images/subpages/store-2.jpg')}}" alt="store" width="280" height="280">
                                <h4 class="overlay-visible">London</h4>
                                <div class="overlay overlay-transparent">
                                    <a class="mt-8" href="mail:#">mail@londonriodestore.com</a>
                                    <a href="tel:#">Phone: (123) 456-7890</a>
                                    <div class="social-links mt-1">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="store">
                            <figure class="banner-radius">
                                <img src="{{ asset('frontend/images/subpages/store-3.jpg')}}" alt="store" width="280" height="280">
                                <h4 class="overlay-visible">Oslo</h4>
                                <div class="overlay overlay-transparent">
                                    <a class="mt-8" href="mail:#">mail@osloriodestore.com</a>
                                    <a href="tel:#">Phone: (123) 456-7890</a>
                                    <div class="social-links mt-1">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="store">
                            <figure class="banner-radius">
                                <img src="{{ asset('frontend/images/subpages/store-4.jpg')}}" alt="store" width="280" height="280">
                                <h4 class="overlay-visible">Stockholm</h4>
                                <div class="overlay overlay-transparent">
                                    <a class="mt-8" href="mail:#">mail@stockholmriodestore.com</a>
                                    <a href="tel:#">Phone: (123) 456-7890</a>
                                    <div class="social-links mt-1">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Store Section -->

            <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
            <div class="grey-section google-map" id="googlemaps" style="height: 386px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d996385.31874772!2d76.59054088691322!3d12.70492712490017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d13.0121728!2d77.6568832!4m5!1s0x3baf7a8fd2b95555%3A0x846c7aebf736925c!2sNextage%20Organics%20Pvt.%20Ltd.%2C%204397-4397%2F1%2C%209th%20Cross%2C%20St%20Mary&#39;s%20Rd%2C%20N%20R%20Mohalla%2C%20Mysuru%2C%20Karnataka%20570007!3m2!1d12.32411!2d76.6269459!5e0!3m2!1sen!2sin!4v1655930238401!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- End Map Section -->
        </div>





            @endsection

