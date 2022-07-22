


@extends('frontend.master')
@section('frontend')
@php
$user = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li>Account</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content mt-4 mb-10 pb-6">
                <div class="container">
                    <h2 class="title title-center mb-10">My Account</h2>
                    <div class="tab tab-vertical gutter-lg">
                        <ul class="nav nav-tabs mb-4 col-lg-3 col-md-4" role="tablist">
                            <li class="nav-item">
                                <img class="title-center" src="{{(!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" width='100px' height='100px' alt="">
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-primary active" href="{{route('dashboard')}}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('user.profile')}}">User Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('user.change.password')}}">Change Password</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                            </li>
                        </ul>
                        <div class="tab-content col-lg-9 col-md-8">
                            <div class="tab-pane active" id="dashboard">
                                
                                <p class="mb-0">
                                    Hello <span>{{ Auth::user()->name }}</span> (not <span>User</span>? <a href="#" class="text-primary">Log
                                        out</a>)
                                </p>
                                <p class="mb-8">
                                    From your account dashboard you can view your
                                    <a href="#orders" class="link-to-tab text-primary">recent orders, manage your
                                        shipping and
                                        billing
                                        addresses,<br>and edit your password and account details</a>.
                                </p>
                                <a href="shop.html" class="btn btn-dark btn-rounded">Go To Shop<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div> 
            </div>


       
                

  

 
@endsection














                                <li>
                                    <a href="shop.html ">Categories</a>
      

                                    
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <h4 class="menu-title">Variations 1</h4>
                                                <ul>    
                                                    @php
                                                    $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                                                    @endphp
                                                     @foreach($categories as $category)
                                                    <li><a href=" "> @if(session()->get('language') == 'hindi') {{ $category->category_name_hin }} @else {{ $category->category_name_en }} @endif</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <h4 class="menu-title">Variations 2</h4>
                                                <ul>
                                                    @php
                                                    $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                                    @endphp
                                                      @foreach($subcategories as $subcategory)
                                                    <li><a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }} ">
                                                        @if(session()->get('language') == 'hindi') {{ $subcategory->subcategory_name_hin }} @else {{ $subcategory->subcategory_name_en }} @endif
                                                    </a></li>
                                                    @endforeach     
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <h4 class="menu-title">Variations 3</h4>
                                                <ul>
                                                    @php
                                                    $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                                                    @endphp          
                                                         
                                                    @foreach($subsubcategories as $subsubcategory)
                                                    <li><a href="{{ url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en ) }} ">@if(session()->get('language') == 'hindi') {{ $subsubcategory->subsubcategory_name_hin }} @else {{ $subsubcategory->subsubcategory_name_en }} @endif
                                                    </a></li>
                                                    @endforeach  
                                                </ul>
                                            </div>
                                            <div
                                                class="col-6 col-sm-4 col-md-4 col-lg-3 menu-banner menu-banner1 banner banner-fixed">
                                                <figure>
                                                    <img src="{{asset('frontend/images/menu/banner-1.jpg ')}} " alt="Menu banner" width="221"
                                                        height="330" />
                                                </figure>
                                                <div class="banner-content y-50">
                                                    <h4 class="banner-subtitle font-weight-bold text-primary ls-m">Sale.
                                                    </h4>
                                                    <h3 class="banner-title font-weight-bold"><span
                                                            class="text-uppercase">Up to</span>70% Off</h3>
                                                    <a href="shop.html " class="btn btn-link btn-underline">shop now<i
                                                            class="d-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Megamenu -->
                                        </div>
                                    </div>
                                </li>

                                @php
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
                                @endforeach <!-- // End Category Foreach -->




                                <div class="minipopup-box show focus" style="top: 0px;"><p class="minipopup-title">Successfully Added</p><div class="product product-purchased product-cart mb-0"><figure class="product-media"><a href="#"><img src="http://127.0.0.1:8000/upload/products/multi-image/1729344915811714.jpg" alt="product" width="90" height="90"></a></figure><div class="product-detail"><a href="#" class="product-name">Sed egtas Dnte Comfort Preworkout  Preworkout 					</a><div class="price-box"><span class="product-quantity">5</span><span class="product-price"></span></div></div></div><div class="action-group d-flex mt-3"><a href="cart.html" class="btn btn-sm btn-outline btn-primary btn-rounded mr-2">View Cart</a><a href="checkout.html" class="btn btn-sm btn-primary btn-rounded">Check Out</a></div></div>