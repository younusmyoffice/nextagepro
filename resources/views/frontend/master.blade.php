<!DOCTYPE html>
<html lang="en" >
    @php
    $seo = App\Models\Seo::find(1);
    @endphp

<!-- Mirrored from d-themes.com/html/Nextage Nutrtion/demo1.html  by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2022 18:44:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>@yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keywords" content="{{ $seo->meta_keyword }}">
    <!-- /// Google Analytics Code // -->
    <script>
        {{ $seo->google_analytics }}
    </script>
    <!-- /// Google Analytics Code // -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('frontend/images/icons/favicon.png ')}} ">
    <!-- Preload Font -->
    <link rel="preload" href="{{asset('frontend/fonts/Nextage Nutrtion115b.ttf?5gap68')}} " as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend/vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}} " as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend/vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}} " as="font" type="font/woff2"
        crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:300,400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>



<script>
    WebFontConfig = {
        google: { families: ['Poppins:400,500,600,700'] }
    };
    (function (d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'js/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>

 
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/photoswipe/photoswipe.min.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/photoswipe/default-skin/default-skin.min.css')}} ">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css ')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/owl-carousel/owl.carousel.min.css ')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/sticky-icon/stickyicon.css ')}} ">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/demo1.min.css ')}} ">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/codemirror/codemirror.css ')}} ">
    <link rel="stylesheet" href="{{asset('frontend/../../../fonts.googleapis.com/css6109.css ')}} ?family=Poppins:400,500,600,700" media="all">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.min.css ')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/demo-yoga.min.css ')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css ')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.min.css ')}} ">
<!-- BMI calculator -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
{{-- stripe --}}
<script src="https://js.stripe.com/v3/"></script>

{{-- bootstrap --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

{{-- bottom --}}

{{-- bottom --}}
</head>

<body class="home">

    <div class="page-wrapper">
        <h1 class="d-none">Nextage Nutrition</h1>
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg text-primary1">Welcome to Nextage Nutrtion</p>
                    </div>
                    <div class="header-right text-primary1">
                        <div class="dropdown">
                            <a href="#currency "> USD </a>
                            <ul class="dropdown-box">
                                <li><a href="#USD"> USD </a></li>
                                <li><a href="#EUR"> EUR </a></li>
                            </ul>
                        </div>
                        <!-- End DropDown Menu -->
                        <div class="dropdown ml-5 text-primary1">

                            <a href="#language"> @if(session()->get('language') == 'hindi') भाषा: हिन्दी @else Language @endif</a>
                            <ul class="dropdown-box">
                                @if(Session()->get('language') == 'hindi')
                                <li>
                                    <a href="{{route('english.language')}}"> ENG </a>
                                </li>
                                @else
                                <li>
                                    <a href="{{route('hindi.language')}}"> Hin </a>
                                </li>
                                @endif
                            </ul>
                        </div>

                        <div class="dropdown ml-5 text-primary1">

                            <a href="#trackorder"> <i class="d-icon-info"></i> &nbsp; Track Order  </a>
                            <ul class="dropdown-box text-primary1" >
                                
                                <li>
                                    <span>

                                    
                                        <form method="post" action="{{ route('order.tracking') }}" style="padding: 10px;align-items: center;align-content: center">
                                            @csrf
                                        <div class="modal-body" >
                                            {{-- <label>Invoice Code</label><br> --}}
                                            <input type="text" name="code" required="" class="form-control" placeholder="Invoice No" style="width: 350px;"> <br>          
                                           </div>
                                           <button class="btn btn-primary btn-rounded btn-md ml-2" type="submit" style="float: right;"> Track Now </button>                                        
                                      </form>

                                    </span>

                                </li>
                                
                            </ul>
                        </div>
                        <!-- End DropDown Menu -->
                        <span class="divider"></span>
                        {{-- <a href="{{ route('contact') }} " class="contact d-lg-show text-primary1"><i class="d-icon-map"></i>Contact</a> --}}
                        {{-- <a href="{{ route('order.t') }}" class="help d-lg-show text-primary1"><i class="d-icon-info"></i> Order Tracking</a> --}}
                        <a href="{{ route('dashboard') }}" class="help d-lg-show text-primary1"> <i class="d-icon-home"></i> @if(session()->get('language') == 'hindi') मेरी प्रोफाइल @else My Account @endif</a>
                        {{-- <a href="#" class="help d-lg-show text-primary1"><i class="d-icon-heart"></i> Wishlist</a> --}}
                        <a href="{{ route('mycart') }}" class="help d-lg-show text-primary1"> <i class="icon fa fa-shopping-cart"> </i> Cart</a>
                        {{-- <a href="#" class="help d-lg-show text-primary1"><i class="d-icon-check"></i> Need Help</a> --}}
                        {{-- <a href="{{ route('wishlist') }}"><i class="icon fa fa-heart"></i>Wishlist</a>
                        <a href="{{ route('mycart') }}"><i class="icon fa fa-shopping-cart"></i>My Cart</a>
                        <a href="{{ route('checkout') }}"><i class="icon fa fa-check"></i>Checkout</a> --}}
                        <span class="divider"></span>

                        @auth
                        
                        <a href="{{route('dashboard')}}" class="register-toggl link-to-tab d-md-show text-primary1"> <i class="d-icon-user"></i>  &nbsp; {{ Auth::user()->name }}</a>
                         @else
                         <a href="{{route('login')}}" class="login-toggl link-to-tab d-md-show text-primary1"> <i class="d-icon-user"></i> &nbsp; Log
                        in</a> <span class="delimiter">/</span>
                        <a href="{{route('login')}}" class="register-toggl link-to-tab d-md-show ml-0 text-primary1">Register</a>
        
                        @endauth


                        <div class="dropdown login-dropdown off-canvas">
                            <div class="canvas-overlay"></div>
                            <!-- End Login Toggle -->
                            <div class="dropdown-box scrollable">
                                <div class="login-popup">
                                    <div class="form-box">
                                        <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                            <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                                role="tablist">
                                                @auth
                                                    <li class="nav-item">
                                                        <a class="nav-link active border-no lh-1 ls-normal"
                                                            href="{{route('dashboard')}}"> {{ Auth::user()->name }}</a>
                                                    </li>
                                                @else
                                                    <li class="nav-item">
                                                        <a class="nav-link active border-no lh-1 ls-normal"
                                                            href="{{route('login')}}">Login</a>
                                                    </li>
                                                    <li class="delimiter">or</li>
                                                    <li class="nav-item">
                                                        <a class="nav-link border-no lh-1 ls-normal"
                                                            href="{{route('login')}}">Register</a>
                                                    </li>
                                                
                                                
                                                @endauth
                                            </ul>
                                           
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="signin">
                                                    <form action="#">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" id="singin-email"
                                                                name="singin-email"
                                                                placeholder="Username or Email Address *" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                id="singin-password" name="singin-password"
                                                                placeholder="Password *" required="">
                                                        </div>
                                                        <div class="form-footer">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="custom-checkbox"
                                                                    id="signin-remember" name="signin-remember">
                                                                <label class="form-control-label"
                                                                    for="signin-remember">Remember
                                                                    me</label>
                                                            </div>
                                                            <a href="#" class="lost-link">Lost your password?</a>
                                                        </div>
                                                        <button class="btn btn-dark btn-block btn-rounded"
                                                            type="submit">Login</button>
                                                    </form>
                                                    <div class="form-choice text-center">
                                                        <label class="ls-m">or Login With</label>
                                                        <div class="social-links">
                                                            <a href="#" title="social-link"
                                                                class="social-link social-google fab fa-google border-no"></a>
                                                            <a href="#" title="social-link"
                                                                class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                            <a href="#" title="social-link"
                                                                class="social-link social-twitter fab fa-twitter border-no"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="register">
                                                    <form action="#">
                                                        <div class="form-group mb-3">
                                                            <input type="email" class="form-control" id="register-email"
                                                                name="register-email" placeholder="Your Email Address *"
                                                                required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                id="register-password" name="register-password"
                                                                placeholder="Password *" required="">
                                                        </div>
                                                        <div class="form-footer">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="custom-checkbox"
                                                                    id="register-agree" name="register-agree"
                                                                    required="">
                                                                <label class="form-control-label" for="register-agree">I
                                                                    agree to the
                                                                    privacy policy</label>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-dark btn-block btn-rounded"
                                                            type="submit">Register</button>
                                                    </form>
                                                    <div class="form-choice text-center">
                                                        <label class="ls-m">or Register With</label>
                                                        <div class="social-links">
                                                            <a href="#" title="social-link"
                                                                class="social-link social-google fab fa-google border-no"></a>
                                                            <a href="#" title="social-link"
                                                                class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                            <a href="#" title="social-link"
                                                                class="social-link social-twitter fab fa-twitter border-no"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
                                </div>
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
                        <!-- End of Login -->
                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="{{url('/')}} " class="logo">
                            <img src="{{asset('frontend/images/logo.png ')}} " alt="logo" width="153" height="44" />
                        </a>
                        <!-- End Logo -->
                        {{-- search area --}}
                        <div class="header-search hs-simple">
                            <form method="post" action="{{ route('product.search') }}" class="input-wrapper">
                                @csrf 
                                <input type="text" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" class="form-control"  autocomplete="off"
                                    placeholder="Search..." required />
                                <button class="btn btn-search" type="submit" title="submit-button">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                            <div id="searchProducts"></div>
                        </div>
                        {{-- search area --}}
                        <!-- End Header Search -->
                    </div>
                    <div class="header-right">
                        <a href="tel:#" class="icon-box icon-box-side">
                            <div class="icon-box-icon mr-0 mr-lg-2">
                                <i class="d-icon-phone"></i>
                            </div>
                            <div class="icon-box-content d-lg-show">
                                <h4 class="icon-box-title">Call Us Now:</h4>
                                <p>0(800) 123-456</p>
                            </div>
                        </a>
                        <span class="divider"></span>
                        <div class="dropdown wishlist wishlist-dropdown off-canvas">
                            <a href="{{ route('wishlist') }}" class="wishlist-togglee">
                                <i class="d-icon-heart"></i>
                            </a>
                            <div class="canvas-overlay"></div>
                            <!-- End Wishlist Toggle -->

                            {{-- <div class="dropdown-box scrollable">
                                <div class="canvas-header">
                                    <h4 class="canvas-title">wishlist</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                            class="d-icon-arrow-right"></i><span class="sr-only">wishlist</span></a>
                                </div>
                                <div class="products scrollable">
                                    <div class="product product-wishlist">
                                        <figure class="product-media">
                                            <a href="product.html ">
                                                <img src="{{asset('frontend/images/wishlist/product-1.jpg ')}} " width="100" height="100"
                                                    alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html " class="product-name">Girl's Dark Bag</a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of wishlist Product -->
                                    <div class="product product-wishlist">
                                        <figure class="product-media">
                                            <a href="product.html ">
                                                <img src="{{asset('frontend/images/wishlist/product-2.jpg ')}} " width="100" height="100"
                                                    alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html " class="product-name">Women's Fashional Comforter
                                            </a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of wishlist Product -->
                                    <div class="product product-wishlist">
                                        <figure class="product-media">
                                            <a href="product.html ">
                                                <img src="{{asset('frontend/images/wishlist/product-3.jpg ')}} " width="100" height="100"
                                                    alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html " class="product-name">Wide Knickerbockers</a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End of wishlist Product -->
                                </div>
                                <a href="{{ route('wishlist') }} " class="btn btn-dark wishlist-btn mt-4"><span>Go To
                                        Wishlist</span></a>
                                <!-- End of Products  -->
                            </div> --}}
                            <!-- End Dropdown Box -->
                        </div>
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2" >
                            <a href="#" class="cart-toggle label-block link">
                                <div class="cart-label d-lg-show"> 
                                    {{-- <label>Subtotal:</label> ₹  --}}
                                    <span class="cart-name">Shopping Cart: ₹ </span> 
                                    {{-- <span>₹</span> --}} 
                                     <span class="cart-price" id="cartSubTotal" > </span>
                                </div>
                                <i class="d-icon-bag"><span class="cart-count"  id="cartQty" ></span></i>
                            </a>
                            <div class="canvas-overlay"></div>
                            <!-- End Cart Toggle -->
                            <div class="dropdown-box" >
                                <div class="canvas-header">
                                    <h4 class="canvas-title">Shopping Cart</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                            class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                                </div>
                                <div class="products scrollable" id="miniCart">
                                   
                                    <!-- End of Cart Product -->
                                    {{-- <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="product.html ">
                                                <img src="{{asset('frontend/images/cart/product-2.jpg ')}} " alt="product" width="80"
                                                    height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html " class="product-name">Dark Blue Women’s
                                                Leomora Hat</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$118.00</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- End of Cart Product -->
                                </div>
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Subtotal:</label> ₹ 
                                    <span class="price" id="cartSubTotal"></span>.00
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                                    <a href="{{ route('mycart') }}" class="btn btn-dark btn-link">View Cart</a>
                                    <a href="{{ route('mycart') }}" class="btn btn-dark"><span>Go To Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom d-lg-show">
                <div class="container">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="{{ url('/') }} ">@if(session()->get('language') == 'hindi') घर @else HOME @endif
                                        </a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }} ">@if(session()->get('language') == 'hindi') के बारे में @else ABOUT  @endif
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="{{ url('shop') }} ">@if(session()->get('language') == 'hindi') के बारे में @else SHOP  @endif
                                    </a>
                                </li>

                                <li>
                                    <a href="">CATEGORIES</a>
      

                                    
                                    <div class="megamenu">
                                        <div class="row">
                                            @php
                                            $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                                            @endphp
                                            @foreach($categories as $category)
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                               
                                                <h4 class="menu-title">  @if(session()->get('language') == 'hindi') {{ $category->category_name_hin ?? ' '}} @else {{ $category->category_name_en ?? ' '}} @endif</h4>
                                               
                                                <ul>    
                                                    @php
                                                    $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                                    @endphp
                                                      @foreach($subcategories as $subcategory)
                                                    
                                                    <li><a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ?? ' ' ) }} ">
                                                        @if(session()->get('language') == 'hindi') {{ $subcategory->subcategory_name_hin ?? ' '}} @else {{ $subcategory->subcategory_name_en ?? ' '}} @endif
                                                    </a></li>
                                                    @endforeach  
                                                </ul>
                                            </div>
                                            @endforeach
                                             
                                            <div
                                                class="col-6 col-sm-4 col-md-4 col-lg-3 menu-banner menu-banner1 banner banner-fixed">
                                                <figure>
                                                    <img src="{{asset('frontend/images/menu/banner-11.png ')}} " alt="Menu banner" width="221"
                                                        height="330" />
                                                </figure>
                                                <div class="banner-content y-50">
                                                    <h4 class="banner-subtitle font-weight-bold text-primary ls-m">Sale.
                                                    </h4>
                                                    <h3 class="banner-title font-weight-bold"><span
                                                            class="text-uppercase">Up to</span>70% Off</h3>
                                                    <a href="{{url('shop')}}" class="btn btn-link btn-underline">shop now<i
                                                            class="d-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Megamenu -->
                                        </div>
                                    </div>
                                </li>

                                {{-- @php
                                $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                                @endphp
                                 @foreach($categories as $category)
                                                    
                                <li>
                                    <a href="product.html "> @if(session()->get('language') == 'hindi') {{ $category->category_name_hin }} @else {{ $category->category_name_en }} @endif</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            @php
                                            $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                            @endphp
                                              @foreach($subcategories as $subcategory)

                                            <div class="col-6 col-sm-4 col-md-3">
                                                <!--   // Get SubCategory Table Data -->
                                               
                                                    <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">
                                                                
                                                        <h4 class="menu-title">@if(session()->get('language') == 'hindi') {{ $subcategory->subcategory_name_hin }} @else {{ $subcategory->subcategory_name_en }} @endif</h4>
                                                    
                                                    </a>
                                               

                                                        <!--   // Get SubSubCategory Table Data -->
                                                    @php
                                                    $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                                                    @endphp          
                                                        <ul> 
                                                    @foreach($subsubcategories as $subsubcategory)
                                                           
                                                            <li><a href="{{ url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en ) }}">
                                                                @if(session()->get('language') == 'hindi') {{ $subsubcategory->subsubcategory_name_hin }} @else {{ $subsubcategory->subsubcategory_name_en }} @endif
                                                                                </a></li>
                                                       
                                                     @endforeach <!-- // End SubSubCategory Foreach -->
                                                        </ul>
                                            </div>
                                            @endforeach <!-- // End SubCategory Foreach -->
                                           
                                            
                                            <div
                                                class="col-6 col-sm-4 col-md-3 menu-banner menu-banner2 banner banner-fixed">
                                                <figure>
                                                    <img src="{{asset('frontend/images/menu/banner-2.jpg ')}} " alt="Menu banner" width="221"
                                                        height="330" />
                                                </figure>
                                                <div class="banner-content x-50 text-center">
                                                    <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                                    <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                                        -
                                                        $120.00</h4>
                                                </div>
                                            </div>
                                            <!-- End MegaMenu -->
                                        </div>
                                    </div>
                                </li>
                                @endforeach <!-- // End Category Foreach --> --}}

                                {{-- <li>
                                    <a href="product.html ">Products</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-3">
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-simple.html ">Simple Product</a></li>
                                                    <li><a href="product-featured.html ">Featured &amp; On Sale</a></li>
                                                    <li><a href="product.html ">Variable Product</a></li>
                                                    <li><a href="product-variable-swatch.html ">Variation Swatch
                                                            Product</a></li>
                                                    <li><a href="product-grouped.html ">Grouped Product </a></li>
                                                    <li><a href="product-external.html ">External Product</a></li>
                                                    <li><a href="product-in-stock.html ">In Stock Product</a></li>
                                                    <li><a href="product-out-stock.html ">Out of Stock Product</a></li>
                                                    <li><a href="product-upsell.html ">Upsell Products</a></li>
                                                    <li><a href="product-cross-sell.html ">Cross Sell Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3">
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-vertical.html ">Vertical Thumb</a></li>
                                                    <li><a href="product-horizontal.html ">Horizontal Thumb</a></li>
                                                    <li><a href="product-gallery.html ">Gallery Type</a></li>
                                                    <li><a href="product-grid.html ">Grid Images</a></li>
                                                    <li><a href="product-masonry.html ">Masonry Images</a></li>
                                                    <li><a href="product-sticky.html ">Sticky Info</a></li>
                                                    <li><a href="product-sticky-both.html ">Left & Right Sticky</a></li>
                                                    <li><a href="product-left-sidebar.html ">With Left Sidebar</a></li>
                                                    <li><a href="product-right-sidebar.html ">With Right Sidebar</a></li>
                                                    <li><a href="product-full.html ">Full Width Layout </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3">
                                                <h4 class="menu-title">Product Features</h4>
                                                <ul>
                                                    <li><a href="product-sale.html ">Sale Countdown</a></li>
                                                    <li><a href="product-hurryup.html ">Hurry Up Notification </a></li>
                                                    <li><a href="product-attribute-guide.html ">Attribute Guide </a></li>
                                                    <li><a href="product-sticky-cart.html ">Add Cart Sticky</a></li>
                                                    <li><a href="product-thumbnail-label.html ">Labels on Thumbnail</a>
                                                    </li>
                                                    <li><a href="product-more-description.html ">More Description
                                                            Tabs</a></li>
                                                    <li><a href="product-accordion-data.html ">Data In Accordion</a></li>
                                                    <li><a href="product-tabinside.html ">Data Inside</a></li>
                                                    <li><a href="product-video.html ">Video Thumbnail </a></li>
                                                    <li><a href="product-360-degree.html ">360 Degree Thumbnail </a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="col-6 col-sm-4 col-md-3 menu-banner menu-banner2 banner banner-fixed">
                                                <figure>
                                                    <img src="{{asset('frontend/images/menu/banner-2.jpg ')}} " alt="Menu banner" width="221"
                                                        height="330" />
                                                </figure>
                                                <div class="banner-content x-50 text-center">
                                                    <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                                    <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                                        -
                                                        $120.00</h4>
                                                </div>
                                            </div>
                                            <!-- End MegaMenu -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html ">About</a></li>
                                        <li><a href="contact-us.html ">Contact Us</a></li>
                                        <li><a href="account.html ">My Account</a></li>
                                        <li><a href="wishlist.html ">Wishlist</a></li>
                                        <li><a href="faq.html ">FAQs</a></li>
                                        <li><a href="error-404.html ">Error 404</a>
                                            <ul>
                                                <li><a href="error-404.html ">Error 404-1</a></li>
                                                <li><a href="error-404-1.html ">Error 404-2</a></li>
                                                <li><a href="error-404-2.html ">Error 404-3</a></li>
                                                <li><a href="error-404-3.html ">Error 404-4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="coming-soon.html ">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="d-xl-show">
                                    <a href="element.html ">Elements</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4 class="menu-title">Elements 1</h4>
                                                <ul>
                                                    <li><a href="element-accordions.html ">Accordions</a></li>
                                                    <li><a href="element-alerts.html ">Alert &amp; Notification</a></li>

                                                    <li><a href="element-banner-effect.html ">Banner Effect

                                                        </a></li>
                                                    <li><a href="element-banner.html ">Banner
                                                        </a></li>
                                                    <li><a href="element-blog-posts.html ">Blog Posts</a></li>
                                                    <li><a href="element-breadcrumb.html ">Breadcrumb
                                                        </a></li>
                                                    <li><a href="element-buttons.html ">Buttons</a></li>
                                                    <li><a href="element-cta.html ">Call to Action</a></li>
                                                    <li><a href="element-countdown.html ">Countdown
                                                        </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="menu-title">Elements 2</h4>
                                                <ul>
                                                    <li><a href="element-counter.html ">Counter </a></li>
                                                    <li><a href="element-creative-grid.html ">Creative Grid

                                                        </a></li>
                                                    <li><a href="element-animation.html ">Entrance Effect

                                                        </a></li>
                                                    <li><a href="element-floating.html ">Floating

                                                        </a></li>
                                                    <li><a href="element-hotspot.html ">Hotspot

                                                        </a></li>
                                                    <li><a href="element-icon-boxes.html ">Icon Boxes</a></li>
                                                    <li><a href="element-icons.html ">Icons</a></li>
                                                    <li><a href="element-image-box.html ">Image box

                                                        </a></li>
                                                    <li><a href="element-instagrams.html ">Instagrams</a></li>

                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="menu-title">Elements 3</h4>
                                                <ul>

                                                    <li><a href="element-categories.html ">Product Category</a></li>
                                                    <li><a href="element-products.html ">Products</a></li>
                                                    <li><a href="element-product-banner.html ">Products + Banner

                                                        </a></li>
                                                    <li><a href="element-product-grid.html ">Products + Grid

                                                        </a></li>
                                                    <li><a href="element-product-single.html ">Product Single

                                                        </a>
                                                    </li>
                                                    <li><a href="element-product-tab.html ">Products + Tab

                                                        </a></li>
                                                    <li><a href="element-single-product.html ">Single Product

                                                        </a></li>
                                                    <li><a href="element-slider.html ">Slider

                                                        </a></li>
                                                    <li><a href="element-social-link.html ">Social Icons </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="menu-title">Elements 4</h4>
                                                <ul>
                                                    <li><a href="element-subcategory.html ">Subcategory

                                                        </a></li>
                                                    <li><a href="element-svg-floating.html ">Svg Floating

                                                        </a></li>
                                                    <li><a href="element-tabs.html ">Tabs</a></li>
                                                    <li><a href="element-testimonials.html ">Testimonials
                                                        </a></li>
                                                    <li><a href="element-titles.html ">Title</a></li>
                                                    <li><a href="element-typography.html ">Typography</a></li>
                                                    <li><a href="element-vendor.html ">Vendor

                                                        </a></li>
                                                    <li><a href="element-video.html ">Video

                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                 --}}
                                {{-- <li>
                                    <a href="{{route('home.blog') }} ">@if(session()->get('language') == 'hindi') के बारे में @else EVENTS   @endif
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="{{route('home.blog') }} ">@if(session()->get('language') == 'hindi') के बारे में @else EVENTS   @endif
                                    </a>
                                    @php
                                    $blogcategory = App\Models\Blog\BlogPostCategory::orderBy('blog_category_name_en','ASC')->get();
                                    @endphp
                                    <ul>
                                        @foreach($blogcategory as $category)
                                                    
                                        <li>
                                            <a href="{{ url('blog/category/post/'.$category->id) }} ">
                                                @if(session()->get('language') == 'hindi') {{ $category->blog_category_name_hin }} @else {{ $category->blog_category_name_en }} @endif
                                            </a>
                                        </li>
                                        @endforeach 
                                         
                                    </ul>
                                </li>
                               
                                
                                
                                <li>
                                    <a href="{{ url('contact') }} ">@if(session()->get('language') == 'hindi') के बारे में @else CONTACT  @endif
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        
                        <a href=""><i class="d-icon-card"></i>Special Offers</a>
                        <a href="" class="ml-6">Buy Nextage Nutrtion!</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
        <main class="main">

        @yield('content')

        </main>

        <!-- End of Main -->
        @php
        $setting = App\Models\SiteSetting::find(1);
         @endphp
        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="{{url('shop')}}" class="logo-footer">
                                <img src="{{asset('frontend/images/logo-footer.png')}} " alt="logo-footer" width="154" height="43" />
                            </a>
                            <!-- End FooterLogo -->
                        </div>
                        <div class="col-lg-9">
                            <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                                <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                                    <h4 class="widget-title">Subscribe to our Newsletter</h4>
                                    <p>Get all the latest information, Sales and Offers.</p>
                                </div>
                                <form method="post" action="{{ route('newsletter.store') }}" class="input-wrapper input-wrapper-inline">
                                   @csrf 
                                   <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email address here..." required />
                                    <button class="btn btn-primary btn-rounded btn-md ml-2" type="submit">subscribe<i
                                            class="d-icon-arrow-right"></i></button>
                                </form>
                            </div>
                            <!-- End Newsletter -->
                        </div>
                    </div>
                </div>
                <!-- End FooterTop -->
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                {{-- <div class="widget widget-info"> --}}
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">
                                    <li>
                                        <label>Phone:</label>
                                        <a href="">Toll Free {{ $setting->phone_one }} / {{ $setting->phone_two }}</a>
                                    </li>
                                    <li>
                                        <label>Email:</label>
                                        <a href="mailto:mail@Nextage Nutrtion.com">{{ $setting->email }}</a>
                                    </li>
                                    <li>
                                        <label>Address:</label>
                                        <a href="">{{ $setting->company_address }}</a>
                                    </li>
                                    <li>
                                        <label>WORKING DAYS / HOURS:</label>
                                    </li>
                                    <li>
                                        <a href="">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="{{url('about')}} ">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard')}}">Order History</a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard')}}">Returns</a>
                                    </li>
                                    <li>
                                        <a href="{{url('policy')}}">Custom Service</a>
                                    </li>
                                    <li>
                                        <a href="{{url('terms')}}">Terms &amp; Condition</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">

                                    @auth
                                    <li >
                                        <a  href="{{route('dashboard')}}"> {{ Auth::user()->name }}</a>
                                    </li>
                                     @else
                                    <li  >
                                        <a   href="{{route('login')}}">Sign in / Register</a>
                                    </li>
                                
                                
                                    @endauth
                    
                                    <li>
                                        <a href="{{ route('mycart') }}">View Cart</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('wishlist') }} ">My Wishlist</a>
                                    </li>
                                    {{-- <li>
                                        <a href="#">Track My Order</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{url('policy')}}">Help</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-instagram">
                                <h4 class="widget-title">Instagram</h4>
                                <figure class="widget-body row">
                                    <div class="col-3">
                                        <img src="{{asset('frontend/images/instagram/01.jpg ')}} " alt="instagram 1" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{asset('frontend/images/instagram/02.jpg ')}} " alt="instagram 2" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{asset('frontend/images/instagram/03.jpg ')}} " alt="instagram 3" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{asset('frontend/images/instagram/04.jpg ')}} " alt="instagram 4" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{asset('frontend/images/instagram/05.jpg ')}} " alt="instagram 5" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{asset('frontend/images/instagram/06.jpg ')}} " alt="instagram 6" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{asset('frontend/images/instagram/07.jpg ')}} " alt="instagram 7" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{asset('frontend/images/instagram/08.jpg ')}} " alt="instagram 8" width="64" height="64" />
                                    </div>
                                </figure>
                            </div>
                            <!-- End Instagram -->
                        </div>
                    </div>
                </div>
                <!-- End FooterMiddle -->
                <div class="footer-bottom">
                    <div class="footer-left">
                        <figure class="payment">
                            <img src="{{asset('frontend/images/payment.png ')}} " alt="payment" width="159" height="29" />
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">{{ $setting->company_name }}   &copy; 2022. All Rights Reserved</p>
                    </div>
                    
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="{{ $setting->facebook }}" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="{{ $setting->twitter }}" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="{{ $setting->linkedin }}" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
                            <a href="{{ $setting->youtube }}" title="social-link" class="social-link social-linkedin fab fa-youtube"></a>
                        </div>
                    </div>
                </div>
                <!-- End FooterBottom -->
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="{{url('/')}} " class="sticky-link">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="{{url('shop')}} " class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Shop</span>
        </a>
        <a href="{{ route('wishlist') }} " class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="{{route('dashboard')}}" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form method="post" action="{{ route('product.search') }}" class="input-wrapper">
                @csrf 
                <input type="text" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" class="form-control"  autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <div id="searchProducts"></div>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides.
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                        <div class="pswp__preloader">
                            <div class="loading-spin"></div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>

                    <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                    <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form method="post" action="{{ route('product.search') }}" class="input-wrapper">
                @csrf 
                <input type="text" class="form-control" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" class="form-control"  autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <div id="searchProducts"></div>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="{{ url('/') }} ">@if(session()->get('language') == 'hindi') घर @else HOME @endif</a>
                </li>
                <li><a href="{{ url('about') }} ">@if(session()->get('language') == 'hindi') के बारे में @else ABOUT   @endif</a></li>
                <li><a href="{{ url('shop') }} ">@if(session()->get('language') == 'hindi') के बारे में @else SHOP   @endif</a></li>
                <li>
                    <a href="{{url('shop')}} ">CATEGORIES</a>
                    @php
                    $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                  
                    @endphp
                    <ul>
                        @foreach($categories as $category)
                    
                            <li>
                                <a href="">
                                    @if(session()->get('language') == 'hindi') {{ $category->category_name_hin }} @else {{ $category->category_name_en }} @endif
                                </a>
                                <ul>
                                    @php
                                    $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                    @endphp
                                        @foreach($subcategories as $subcategory)
                                    
                                        <li>
                                            <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }} ">
                                            @if(session()->get('language') == 'hindi') {{ $subcategory->subcategory_name_hin }} @else {{ $subcategory->subcategory_name_en }} @endif
                                            </a>
                                        </li>
                                        @endforeach  
                                </ul>
                            </li>
                            
                    
                        @endforeach 
                    </ul>
                </li>
                {{-- <li>
                    <a href="{{url('shop')}}">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                                <li><a href="product-simple.html ">Simple Product</a></li>
                                <li><a href="product-featured.html ">Featured &amp; On Sale</a></li>
                                <li><a href="product.html ">Variable Product</a></li>
                                <li><a href="product-variable-swatch.html ">Variation Swatch
                                        Product</a></li>
                                <li><a href="product-grouped.html ">Grouped Product </a></li>
                                <li><a href="product-external.html ">External Product</a></li>
                                <li><a href="product-in-stock.html ">In Stock Product</a></li>
                                <li><a href="product-out-stock.html ">Out of Stock Product</a></li>
                                <li><a href="product-upsell.html ">Upsell Products</a></li>
                                <li><a href="product-cross-sell.html ">Cross Sell Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                                <li><a href="product-vertical.html ">Vertical Thumb</a></li>
                                <li><a href="product-horizontal.html ">Horizontal Thumb</a></li>
                                <li><a href="product-gallery.html ">Gallery Type</a></li>
                                <li><a href="product-grid.html ">Grid Images</a></li>
                                <li><a href="product-masonry.html ">Masonry Images</a></li>
                                <li><a href="product-sticky.html ">Sticky Info</a></li>
                                <li><a href="product-sticky-both.html ">Left & Right Sticky</a></li>
                                <li><a href="product-left-sidebar.html ">With Left Sidebar</a></li>
                                <li><a href="product-right-sidebar.html ">With Right Sidebar</a></li>
                                <li><a href="product-full.html ">Full Width Layout </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Features</a>
                            <ul>
                                <li><a href="product-sale.html ">Sale Countdown</a></li>
                                <li><a href="product-hurryup.html ">Hurry Up Notification </a></li>
                                <li><a href="product-attribute-guide.html ">Attribute Guide </a></li>
                                <li><a href="product-sticky-cart.html ">Add Cart Sticky</a></li>
                                <li><a href="product-thumbnail-label.html ">Labels on Thumbnail</a>
                                </li>
                                <li><a href="product-more-description.html ">More Description
                                        Tabs</a></li>
                                <li><a href="product-accordion-data.html ">Data In Accordion</a></li>
                                <li><a href="product-tabinside.html ">Data Inside</a></li>
                                <li><a href="product-video.html ">Video Thumbnail </a>
                                </li>
                                <li><a href="product-360-degree.html ">360 Degree Thumbnail </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.html ">About</a></li>
                        <li><a href="contact-us.html ">Contact Us</a></li>
                        <li><a href="account.html ">Login</a></li>
                        <li><a href="faq.html ">FAQs</a></li>
                        <li><a href="error-404.html ">Error 404</a>
                            <ul>
                                <li><a href="error-404.html ">Error 404-1</a></li>
                                <li><a href="error-404-1.html ">Error 404-2</a></li>
                                <li><a href="error-404-2.html ">Error 404-3</a></li>
                                <li><a href="error-404-3.html ">Error 404-4</a></li>
                            </ul>
                        </li>
                        <li><a href="coming-soon.html ">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-classic.html ">Blog</a>
                    <ul>
                        <li><a href="blog-classic.html ">Classic</a></li>
                        <li><a href="blog-listing.html ">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2col.html ">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3col.html ">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4col.html ">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html ">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2col.html ">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3col.html ">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4col.html ">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html ">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html ">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html ">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.html ">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="element.html ">Elements</a>
                    <ul>
                        <li>
                            <a href="#">Elements 1</a>
                            <ul>
                                <li><a href="element-accordions.html ">Accordions</a></li>
                                <li><a href="element-alerts.html ">Alert &amp; Notification</a></li>

                                <li><a href="element-banner-effect.html ">Banner Effect

                                    </a></li>
                                <li><a href="element-banner.html ">Banner
                                    </a></li>
                                <li><a href="element-blog-posts.html ">Blog Posts</a></li>
                                <li><a href="element-breadcrumb.html ">Breadcrumb
                                    </a></li>
                                <li><a href="element-buttons.html ">Buttons</a></li>
                                <li><a href="element-cta.html ">Call to Action</a></li>
                                <li><a href="element-countdown.html ">Countdown
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 2</a>
                            <ul>
                                <li><a href="element-counter.html ">Counter </a></li>
                                <li><a href="element-creative-grid.html ">Creative Grid

                                    </a></li>
                                <li><a href="element-animation.html ">Entrance Effect

                                    </a></li>
                                <li><a href="element-floating.html ">Floating

                                    </a></li>
                                <li><a href="element-hotspot.html ">Hotspot

                                    </a></li>
                                <li><a href="element-icon-boxes.html ">Icon Boxes</a></li>
                                <li><a href="element-icons.html ">Icons</a></li>
                                <li><a href="element-image-box.html ">Image box

                                    </a></li>
                                <li><a href="element-instagrams.html ">Instagrams</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 3</a>
                            <ul>

                                <li><a href="element-categories.html ">Product Category</a></li>
                                <li><a href="element-products.html ">Products</a></li>
                                <li><a href="element-product-banner.html ">Products + Banner

                                    </a></li>
                                <li><a href="element-product-grid.html ">Products + Grid

                                    </a></li>
                                <li><a href="element-product-single.html ">Product Single

                                    </a>
                                </li>
                                <li><a href="element-product-tab.html ">Products + Tab

                                    </a></li>
                                <li><a href="element-single-product.html ">Single Product

                                    </a></li>
                                <li><a href="element-slider.html ">Slider

                                    </a></li>
                                <li><a href="element-social-link.html ">Social Icons </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 4</a>
                            <ul>
                                <li><a href="element-subcategory.html ">Subcategory

                                    </a></li>
                                <li><a href="element-svg-floating.html ">Svg Floating

                                    </a></li>
                                <li><a href="element-tabs.html ">Tabs</a></li>
                                <li><a href="element-testimonials.html ">Testimonials
                                    </a></li>
                                <li><a href="element-titles.html ">Title</a></li>
                                <li><a href="element-typography.html ">Typography</a></li>
                                <li><a href="element-vendor.html ">Vendor

                                    </a></li>
                                <li><a href="element-video.html ">Video

                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
               
                <li><a href="{{ url('blog') }} ">@if(session()->get('language') == 'hindi') के बारे में @else EVENTS   @endif</a></li>
                
                <li><a href="{{ url('contact') }} ">@if(session()->get('language') == 'hindi') के बारे में @else CONTACT US   @endif</a></li>
            </ul>
            <!-- End of MobileMenu -->
            <ul class="mobile-menu mmenu-anim"> 
                @auth
                <li>
                    <a href="{{route('dashboard')}}"><i class="d-icon-user"></i>  &nbsp; {{ Auth::user()->name }}</a>
                </li>
                @else
                <li><a href="{{route('login')}} "> <i class="d-icon-user"></i>  Login / Register</a></li>
                {{-- <li><a href="{{route('login')}} "> <i class="d-icon-user"></i>  </a></li> --}}
                @endauth
                
                <li><a href="{{ route('mycart') }} ">My Cart</a></li>
                <li><a href="{{ route('wishlist') }} ">Wishlist</a></li>
            </ul>
            <!-- End of MobileMenu -->
        </div>
    </div>

    <!-- newsletter-popup default -->
    <div class="newsletter-popup newsletter-pop1 mfp-hide" id="newsletter-popup"
        style="background-image: url({{asset('frontend/images/newsletter-popup1.png ')}})">
        <div class="newsletter-content">
            <h4 class="text-uppercase text-dark">Up to <span class="text-primary">20% Off</span></h4>
            <h2 class="font-weight-semi-bold">Sign up to <span>Nextage Nutrtion</span></h2>
            <p class="text-grey">Subscribe to the Nextage Nutrtion eCommerce newsletter to receive timely updates from your
                favorite
                products.</p>
                <form method="post" action="{{ route('newsletter.store') }}" class="input-wrapper input-wrapper-inline">
                    
                 @csrf <input type="email" class="form-control email" name="email" id="email2"
                    placeholder="Email address here..." required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox justify-content-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required />
                <label for="hide-newsletter-popup">Don't show this popup again</label>
            </div>
        </div>
    </div>


    <!-- sticky icons-->
    <div class="sticky-icons-wrapper">
        <div class="sticky-icon-links">
            <ul>
                <li><a href="{{url('/')}}" class="demo-toggle"><i class="fas fa-home"></i><span>Home</span></a></li>
                <li><a href="{{url('shop')}} "><i class="fas fa-info-circle"></i><span>Documentation</span></a>
                </li>
                <li><a href="{{url('/blog')}} "><i class="fas fa-star"></i><span>Events</span></a>
                </li>
                <li><a href="{{url('shop')}} "><i class="fas fa-shopping-cart"></i><span>Buy
                            now!</span></a></li>
            </ul>
        </div>
        {{-- <div class="demos-list">
            <div class="demos-overlay"></div>
            <a class="demos-close" href="#"><i class="close-icon"></i></a>
            <div class="demos-content scrollable scrollable-light">
                <h3 class="demos-title">Demos</h3>
                <div class="demos">
                </div>
            </div>
        </div> --}}
    </div>

 
   
 

    <script src="{{asset('frontend/vendor/jquery.plugin/jquery.plugin.min.js ')}} "></script>
    {{-- <script src="{{asset('frontend/vendor/jquery.countdown/jquery.countdown.min.js ')}} "></script>  --}}
   <script src="{{asset('frontend/vendor/jquery.count-to/jquery-numerator.min.js ')}} "></script>    
   <script src="{{asset('frontend/vendor/elevatezoom/jquery.elevatezoom.min.js ')}} "></script>
  <script src="{{asset('frontend/vendor/popup-code/popcode.js ')}} "></script>
  <script src="{{asset('frontend/vendor/isotope/isotope.pkgd.min.js ')}} "></script>
  <!-- Plugins JS File -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js ')}} "></script>
  <script src="{{asset('frontend/vendor/parallax/parallax.min.js ')}} "></script>
  <script src="{{asset('frontend/vendor/owl-carousel/owl.carousel.min.js ')}} "></script>
  <script src="{{asset('frontend/vendor/codemirror/codemirror.min.js ')}} "></script>
  <script src="{{asset('frontend/vendor/popup-code/popcode.min.js ')}} "></script>
  <script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js ')}} "></script>
  <script src="{{asset('frontend/vendor/jquery.count-to/jquery-numerator.min.js ')}} "></script>
  <!-- Main JS File -->
   <!-- Plugins JS File -->
    <script src="{{asset('frontend/vendor/jquery.floating/jquery.floating.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/skrollr/skrollr.min.js ')}} "></script>
   <!-- Main JS File -->
   <script src="{{asset('frontend/js/main.min.js ')}} "></script>
   
   <script src="{{asset('frontend/js/scripts.js ')}} "></script>
   
   
   
   <script src="{{asset('frontend/vendor/jquery/jquery.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/owl-carousel/owl.carousel.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/isotope/isotope.pkgd.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/jquery.plugin/jquery.plugin.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/codemirror/codemirror.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/popup-code/popcode.min.js ')}} "></script>
   <script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js ')}} "></script>
  
	<!-- Plugins JS File --> 
	<script src="{{asset('frontend/vendor/sticky/sticky.min.js ')}} "></script>
    <script src="{{asset('frontend/vendor/photoswipe/photoswipe.min.js ')}} "></script>
	<script src="{{asset('frontend/vendor/photoswipe/photoswipe-ui-default.min.js ')}} "></script>
	<!-- Main JS File -->
      <script src="{{asset('frontend/vendor/jquery.count-to/jquery-numerator.min.js ')}} "></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
      <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62930fffb2624438"></script>
  
     
     <script>
           @if(Session::has('message'))
             var type="{{Session::get('alert-type','info')}}"
             switch(type){
                 case 'info':
                      toastr.info("{{ Session::get('message') }}");
                      break;
                 case 'success':
                     toastr.success("{{ Session::get('message') }}");
                     break;
                 case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                     break;
                 case 'error':
                     toastr.error("{{ Session::get('message') }}");
                     break;
             }
           @endif
        </script>  
   
   {{-- search --}}
  
   <script>
      function search_result_hide(){
        $("#searchProducts").slideUp();
      }
    
       function search_result_show(){
          $("#searchProducts").slideDown();
      }
    
    
    </script>
  
  
  
   <script>
   var myModal = document.getElementById('myModal')
   var myInput = document.getElementById('myInput')
   
   myModal.addEventListener('shown.bs.modal', function () {
     myInput.focus()
   })
  </script> 
  
  
  <!-- Button trigger modal -->
  
{{--     
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  
  
  
  <!-- Add to Cart Product Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong><span id="pname"></span> </strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    
          <div class="modal-body">
           
           <div class="row">
    
            <div class="col-md-4">
    
                <div class="card" style="width: 18rem;">
    
      <img src=" " class="card-img-top" alt="..." style="height: 200px; width: 200px;" id="pimage">
      
    </div>
                
            </div><!-- // end col md -->
    
    
            <div class="col-md-4">
    
         <ul class="list-group">
      <li class="list-group-item">Product Price: <strong class="text-danger">$<span id="pprice"></span></strong>
    <del id="oldprice">$</del>
       </li>
      <li class="list-group-item">Product Code: <strong id="pcode"></strong></li>
      <li class="list-group-item">Category: <strong id="pcategory"></strong></li>
      <li class="list-group-item">Brand: <strong id="pbrand"></strong></li>
      <li class="list-group-item">Stock: <span class="badge badge-pill badge-success" id="aviable" style="background: green; color: white;"></span> 
    <span class="badge badge-pill badge-danger" id="stockout" style="background: red; color: white;"></span> 
    
      </li>
    </ul>
                
            </div><!-- // end col md -->
    
    
            <div class="col-md-4">
    
                <div class="form-group">
        <label for="color">Choose Color</label>
        <select class="form-control" id="color" name="color">
          
          
        </select>
      </div>  <!-- // end form group -->
    
    
        <div class="form-group" id="sizeArea">
        <label for="size">Choose Size</label>
        <select class="form-control" id="size" name="size">
          <option>1</option>
           
        </select>
      </div>  <!-- // end form group -->
    
           <div class="form-group">
        <label for="qty">Quantity</label>
        <input type="number" class="form-control" id="qty" value="1" min="1" >
      </div> <!-- // end form group -->
    
    <input type="hidden" id="product_id">
    <button type="submit" class="btn btn-primary mb-2" onclick="addToCart()" >Add to Cart</button>
    
                
            </div><!-- // end col md -->
    
               
           </div> <!-- // end row -->
    
     
    
          </div> <!-- // end modal Body -->
          
        </div>
      </div>
    </div>
    <!-- End Add to Cart Product Modal -->
     --}}
  
  
    <script type="text/javascript">
      $.ajaxSetup({
          headers:{
              'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
          }
      })
  
  // Start Product View with Modal 
  
  function productView(id){
      // alert(id)
      $.ajax({
          type: 'GET',
          url: '/product/view/modal/'+id,
          dataType:'json',
          success:function(data){
              // console.log(data)
              $('#pname').text(data.product.product_name_en);
              $('#price').text(data.product.selling_price);
              $('#pcode').text(data.product.product_code);
              $('#pcategory').text(data.product.category.category_name_en);
              $('#pbrand').text(data.product.brand.brand_name_en);
              $('#pimage').attr('src','/'+data.product.product_thambnail);
  
              $('#product_id').val(id);
              $('#qty').val(1);
  
              // Product Price 
              if (data.product.discount_price == null) {
                  $('#pprice').text('');
                  $('#oldprice').text('');
                  $('#pprice').text(data.product.selling_price);
  
  
              }else{
                  $('#pprice').text(data.product.discount_price);
                  $('#oldprice').text(data.product.selling_price);
  
              } // end prodcut price 
  
              // Start Stock opiton
  
              if (data.product.product_qty > 0) {
                  $('#aviable').text('');
                  $('#stockout').text('');
                  $('#aviable').text('aviable');
  
              }else{
                  $('#aviable').text('');
                  $('#stockout').text('');
                  $('#stockout').text('stockout');
              } // end Stock Option 
  
              // Color
      $('select[name="color"]').empty();        
      $.each(data.color,function(key,value){
          $('select[name="color"]').append('<option value=" '+value+' ">'+value+' </option>')
      }) // end color
  
       // Size
      $('select[name="size"]').empty();        
      $.each(data.size,function(key,value){
          $('select[name="size"]').append('<option value=" '+value+' ">'+value+' </option>')
          if (data.size == "") {
              $('#sizeArea').hide();
          }else{
              $('#sizeArea').show();
          }
  
      }) // end size
   
  
          }
  
      })
   
  
  }
  // Eend Product View with Modal 
  
  
   // Start Add To Cart Product 
  
      function addToCart(){
          var product_name = $('#pname').text();
          var id = $('#product_id').val();
          var color = $('#color option:selected').text();
          var size = $('#size option:selected').text();
          var quantity = $('#qty').val();
          $.ajax({
              type: "POST",
              dataType: 'json',
              data:{
                  color:color, size:size, quantity:quantity, product_name:product_name
              },
              url: "/cart/data/store/"+id,
              success:function(data){
  
                  miniCart()
                  $('#closeModel').click();
                  // console.log(data)
  
                  // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          title: data.success
                      })
  
                  }else{
                      Toast.fire({
                          type: 'error',
                          title: data.error
                      })
  
                  }
  
                  // End Message 
              }
          })
  
      }
    
  // End Add To Cart Product 
  
  </script>
  
  <script type="text/javascript">
       function miniCart(){
          $.ajax({
              type: 'GET',
              url: '/product/mini/cart',
              dataType:'json',
              success:function(response){
  
                  $('span[id="cartSubTotal"]').text( response.cartTotal);
                  $('#cartQty').text(response.cartQty);
                  var miniCart = ""
  
                  $.each(response.carts, function(key,value){
                      miniCart += `
                      
                                       <div class="product product-cart">
                                          <figure class="product-media">
                                              <a href="">
                                                  <img src="/${value.options.image}" alt="product" width="80"
                                                      height="88" />
                                              </a>
                                              <button class="btn btn-link btn-close" type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)">
                                                  <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                              </button>
                                          </figure>
                                          <div class="product-detail">
                                              <a href="" class="product-name">${value.name}</a>
                                              <div class="price-box">
                                                  <span class="product-quantity"> ${value.qty}</span>
                                                  <span class="product-price"> ₹ ${value.price}.00 </span>
                                                  
                                              </div>
                                          </div>
  
                                      </div>
                      
                      
                   
          <div class="clearfix"></div>
          <hr>`
          });
                  
                  $('#miniCart').html(miniCart);
              }
          })
  
       }
   miniCart();
  
   /// mini cart remove Start 
      function miniCartRemove(rowId){
          $.ajax({
              type: 'GET',
              url: '/minicart/product-remove/'+rowId,
              dataType:'json',
              success:function(data){
              miniCart();
  
               // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          title: data.success
                      })
  
                  }else{
                      Toast.fire({
                          type: 'error',
                          title: data.error
                      })
  
                  }
  
                  // End Message 
  
              }
          });
  
      }
  
   //  end mini cart remove 
  
  
  </script>
  
  <!--  /// Start Add Wishlist Page  //// -->
  
  <script type="text/javascript">
      
  function addToWishList(product_id){
      $.ajax({
          type: "POST",
          dataType: 'json',
          url: "/add-to-wishlist/"+product_id,
  
          success:function(data){
  
               // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          icon: 'success',
                          title: data.success
                      })
  
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title: data.error
                      })
  
                  }
  
                  // End Message 
  
  
          }
  
      })
  
  } 
  
  </script> 
  
   <!--  /// End Add Wishlist Page  ////   -->
  
  <!-- /// Load Wishlist Data  -->
  
  
  <script type="text/javascript">
       function wishlist(){
          $.ajax({
              type: 'GET',
              url: '/user/get-wishlist-product',
              dataType:'json',
              success:function(response){
  
                  var rows = ""
                  $.each(response, function(key,value){
                      rows += `
                      
                      <tr>
                      <td class="product-thumbnail">
                          <a href="product-simple.html">
                              <figure>
                                  <img src="/${value.product.product_thambnail}" width="100" height="100"
                                      alt="product">
                              </figure>
                          </a>
                      </td>
                      <td class="product-name">
                          <a href="">${value.product.product_name_en}</a>
                      </td>
                      <td class="product-price">
                          <span class="amount"> 
                            ₹ ${value.product.discount_price == null
                              ? ` ₹ ${value.product.selling_price}.00`
                              :
                              ` ₹ ${value.product.discount_price}.00 <del class="old-price"> ₹ ${value.product.selling_price}.00</del>`
                          }
                          </span>
                      </td>
                      <td class="product-stock-status">
                          <span class="wishlist-in-stock">In Stock</span>
                      </td>
                      <td class="product-add-to-cart" >
                          <input type="hidden" id="${value.product_id}"   min="1">
                              <button type="submit" id="${value.product_id}" onclick="addToCart()"
                              class="btn btn-primary btn-rounded btn-md ml-2"> <i class="d-icon-bag"></i> &nbsp; Add to
                                  Cart</button>
  
                      </td>
                      <td class="product-remove">
                          <div>
                              <a href="#" type="submit"  id="${value.id}" onclick="wishlistRemove(this.id)" class="remove" title="Remove this product"><i
                                      class="fas fa-times"></i></a>
                          </div>
                      </td>
                  </tr>
                      `
                      // console.log(rows)
          });
                  
                  $('#wishlist').html(rows);
              }
          })
  
       }
   wishlist();
  
  
  
   ///  Wishlist remove Start 
      function wishlistRemove(id){
          $.ajax({
              type: 'GET',
              url: '/user/wishlist-remove/'+id,
              dataType:'json',
              success:function(data){
              wishlist();
  
               // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          icon: 'success',
                          title: data.success
                      })
  
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title: data.error
                      })
  
                  }
  
                  // End Message 
  
              }
          });
  
      }
  
   // End Wishlist remove   
  
  
   </script>  
  
  <!-- /// End Load Wisch list Data  -->
  
  
  <!-- /// Load My Cart /// -->
  
  <script type="text/javascript">
       function cart(){
          $.ajax({
              type: 'GET',
              url: '/user/get-cart-product',
              dataType:'json',
              success:function(response){
  
      var rows = ""
      $.each(response.carts, function(key,value){
          rows += `
          
          
          
          <tr>
                                  <td class="product-thumbnail">
                                      <figure>
                                          <a href="{{url('shop')}}">
                                              <img src="/${value.options.image}" width="100" height="100"
                                                  alt="product">
                                          </a>
                                      </figure>
                                  </td>
                                  <td class="product-name">
                                      <div class="product-name-section">
                                          <a href="{{url('shop')}}">${value.name}</a>
                                      </div>
                                  </td>
                                  <td class="product-price">
                                      <span class="amount">₹ ${value.price}.00</span>
                                  </td>
                                  <td class="product-price">
                                      <span class="amount">${value.options.color == null
                                                           ? `<span> .... </span>`
                                                              :
                                                          `<strong>${value.options.color} </strong>` 
                                                          }
                                                          </span>
                                      
                                       
                                  </td>
                                  <td class="product-price">
                                      <span class="amount">${value.options.size == null
                                                              ? `<span> .... </span>`
                                                              :
                                                          `<strong>${value.options.size} </strong>` 
                                                          }
                                                          </span>
                                  </td>
                                  <td class="product-quantity">
                                     
                                      <div class="input-group">
                                          ${value.qty > 1
                                          ? `<button type="submit" class="quantity-minus d-icon-minus" id="${value.rowId}" onclick="cartDecrement(this.id)" ></button> `
  
                                          : `<button type="submit" class="quantity-minus d-icon-minus" disabled ></button> `
                                          }
                                          <input class="quantity form-control" type="number"  value="${value.qty}" min="1" max="100" disabled="" >
                                          <button class="quantity-plus d-icon-plus" type="submit"   id="${value.rowId}" onclick="cartIncrement(this.id)"></button>
                                      </div>
                                  </td>
                                  <td class="product-price">
                                      <span class="amount">₹ ${value.subtotal}.00</span>
                                  </td>
                                
                                  <td class="product-close">
                                      <a href="#" class="product-remove" title="Remove this product" type="submit"  id="${value.rowId}" onclick="cartRemove(this.id)">
                                          <i class="fas fa-times"></i>
                                      </a>
                                  </td>
                              </tr>
          
          `
          });
                  
                  $('#cartPage').html(rows);
              }
          })
  
       }
   cart();
  
  
  
   ///  Cart remove Start 
      function cartRemove(id){
          $.ajax({
              type: 'GET',
              url: '/user/cart-remove/'+id,
              dataType:'json',
              success:function(data){
              couponCalculation();
              cart();
              miniCart();
              $('#couponField').show();
              $('#coupon_name').val('');
  
               // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          icon: 'success',
                          title: data.success
                      })
  
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title: data.error
                      })
  
                  }
  
                  // End Message 
  
              }
          });
  
      }
  
   // End Cart remove   
  
  
   // -------- CART INCREMENT --------//
  
      function cartIncrement(rowId){
          $.ajax({
              type:'GET',
              url: "/cart-increment/"+rowId,
              dataType:'json',
              success:function(data){
                  couponCalculation();
                  cart();
                  miniCart();
              }
          });
      }
  
  
   // ---------- END CART INCREMENT -----///
  
  
  
   // -------- CART Decrement  --------//
  
      function cartDecrement(rowId){
          $.ajax({
              type:'GET',
              url: "/cart-decrement/"+rowId,
              dataType:'json',
              success:function(data){
                  couponCalculation();
                  cart();
                  miniCart();
              }
          });
      }
  
  
   // ---------- END CART Decrement -----///
   
  
   </script>  
  
  <!-- //End Load My cart / -->
  
  
  
  <!--  //////////////// =========== Coupon Apply Start ================= ////  -->
  <script type="text/javascript">
    function applyCoupon(){
      var coupon_name = $('#coupon_name').val();
      $.ajax({
          type: 'POST',
          dataType: 'json',
          data: {coupon_name:coupon_name},
          url: "{{ url('/coupon-apply') }}",
          success:function(data){
                 couponCalculation();
                 if (data.validity == true) {
                  $('#couponField').hide();
                 }
                 
               // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          icon: 'success',
                          title: data.success
                      })
  
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title: data.error
                      })
  
                  }
  
                  // End Message 
  
          }
  
      })
    }  
  
  
    function couponCalculation(){
      $.ajax({
          type:'GET',
          url: "{{ url('/coupon-calculation') }}",
          dataType: 'json',
          success:function(data){
              if (data.total) {
                  $('#couponCalField').html(
                      `
                      <table class="shipping">

                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">Sub  total  </h4>
                                      </td>
                                      <td>
                                          <p class="summary-subtotal-price"> ₹ ${data.subtotal}</p>
                                      </td>
  
                                  </tr>
                                  
                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">Total  </h4>
                                      </td>
                                      <td>
                                          <p class="summary-subtotal-price"> ₹ ${data.ptotal}</p>
                                      </td>
  
                                  </tr>
                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">  GST / CGST (18%)</h4>
                                      </td>
                                      <td>
                                          <p class="summary-subtotal-price"> ( + ) ₹ ${data.tax}</p>
                                      </td>
  
                                  </tr>
                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">  Shipping</h4>
                                      </td>
                                      <td>
                                          <p class="summary-subtotal-price">  ( + )  ₹ ${data.delivery}.00</p>
                                      </td>
  
                                  </tr>
                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">Grand total</h4>
                                      </td>
                                      <td>
                                          <p class="summary-total-price text-primary"> ₹ ${data.total}.00</p>
                                      </td>
                                      
                                  </tr> 
                                  </table>`
                                          )
  
                                          }else{
  
                                  $('#couponCalField').html(
                                                  `
                              <table class="shipping">
                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">  Total</h4>
                                      </td>
                                      <td>
                                          <p class="summary-subtotal-price">₹ ${data.ptotal}</p>
                                      </td>
  
                                  </tr>
                                  <tr class="sumnary-shipping shipping-row-last">
                                      
  
                                      <td class="summary-subtotal">
                                          <h4 class="summary-subtitle">Coupon</h4>
                                           
                                      </td>
                                      <td class="summary-subtotal ">
                                          
                                          
                                        <div class="custom-radio">
                                            <label class="custom-control-label center" for="flat_rate">
                                                ${data.coupon_name}</label> <span> </span>
                                            <button href=""class="" type="submit" onclick="couponRemove()"><i class="fas fa-times"></i>  </button>
                                        </div>
                                              
                                      </td>
                                  </tr>

                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">Discount Amount</h4>
                                      </td>
                                      <td>
                                          <p class="summary-subtotal-price ls-s">( - ) ₹ ${data.discount_amount}</p>
                                      </td>
                                  </tr>
                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">GST / CGST</h4>
                                      </td>
                                      <td>
                                          <p class="summary-subtotal-price ls-s">( + ) ₹ ${data.tax}</p>
                                      </td>
                                  </tr>
                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">Shipping</h4>
                                      </td>
                                      <td>
                                          <p class="summary-subtotal-price ls-s">( + )  ₹ ${data.delivery}.00</p>
                                      </td>
                                  </tr>
                                  <tr class="summary-subtotal">
                                      <td>
                                          <h4 class="summary-subtitle">Grand Total</h4>
                                      </td>
                                      <td>
                                          <p class="summary-total-price ls-s text-primary">₹ ${data.total_amount}.00</p>
                                      </td>
                                  </tr>
                              </table>
                              
                      `
              )
  
              }
          }
  
      });
    }
   couponCalculation();
  
  </script>
   
  <!--  //////////////// =========== End Coupon Apply Start ================= ////  -->
   
  
  <!--  //////////////// =========== Start Coupon Remove================= ////  -->
   
  <script type="text/javascript">
       
       function couponRemove(){
          $.ajax({
              type:'GET',
              url: "{{ url('/coupon-remove') }}",
              dataType: 'json',
              success:function(data){
                  couponCalculation();
                  $('#couponField').show();
                  $('#coupon_name').val('');
  
  
                   // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          icon: 'success',
                          title: data.success
                      })
  
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title: data.error
                      })
  
                  }
  
                  // End Message 
  
              }
          });
  
       }
  
  
  </script>
  
  
  <!--  //////////////// =========== End Coupon Remove================= ////  -->
   
        



</body>
 </html>