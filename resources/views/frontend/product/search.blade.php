@extends('frontend.master')
@section('content')
@section('title')
Product Search Page 
@endsection



 

{{-- klklklklkkklkl --}}




{{-- ------------ --}}
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
 
<nav class="breadcrumb-nav">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
      <li><a href="">Categories</a></li>
      <li>  Shop  ({{ count($products) }})</li>
    </ul>
  </div>
</nav>
</div><br>
<div class="page-content pb-10 mb-3">
  <div class="container">
    <div class="row gutter-lg main-content-wrap">
      <aside class="col-lg-3 sidebar sidebar-fixed shop-sidebar sticky-sidebar-wrapper">
        <div class="sidebar-overlay"></div>
        <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
        <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
        <div class="sidebar-content">
          <div class="sticky-sidebar">

            @include('frontend.common.vertical_menu')
              <!-- ===== ===== PRODUCT TAGS ==== ====== -->
            @include('frontend.common.product_tags')
            <!-- ==== ===== PRODUCT TAGS : END ======= ==== -->
            
            <div class="widget widget-collapsible">
              <h3 class="widget-title">Filter by Price</h3>
              <div class="widget-body mt-3">
                <form action="#">
                  <div class="filter-price-slider"></div>

                  <div class="filter-actions">
                    <div class="filter-price-text mb-4">Price:
                      <span class="filter-price-range"></span>
                    </div>
                    <button type="submit"
                      class="btn btn-dark btn-filter btn-rounded">Filter</button>
                  </div>
                </form><!-- End Filter Price Form -->
              </div>
            </div>
            <div class="widget widget-collapsible">
              <h3 class="widget-title">Size</h3>
              <ul class="widget-body filter-items">
                <li><a href="#">Extra Large</a></li>
                <li><a href="#">Large</a></li>
                <li><a href="#">Medium</a></li>
                <li><a href="#">Small</a></li>
              </ul>
            </div>
            <div class="widget widget-collapsible">
              <h3 class="widget-title">Color</h3>
              <ul class="widget-body filter-items">
                <li><a href="#">Black</a></li>
                <li><a href="#">Blue</a></li>
                <li><a href="#">Green</a></li>
                <li><a href="#">White</a></li>
              </ul>
            </div>
            <div class="widget widget-collapsible">
              <h3 class="widget-title">Brands</h3>
              <ul class="widget-body filter-items">
                <li><a href="#">Cinderella</a></li>
                <li><a href="#">Comedy</a></li>
                <li><a href="#">Rightcheck</a></li>
                <li><a href="#">SkillStar</a></li>
                <li><a href="#">SLS</a></li>
              </ul>
            </div>
          </div>
        </div>
      </aside>
      <div class="col-lg-9 main-content">
        {{-- <div class="shop-banner-default banner mb-1"
          style="background-image: url({{ asset('frontend/images/shop/banner.jpg') }}); background-color: #4e6582;">
          <div class="banner-content">
            <h4 class="banner-subtitle font-weight-bold ls-normal text-uppercase text-white">
              Riode Shop</h4>
            <h1 class="banner-title font-weight-bold text-white">Inner Top Banner</h1>
            <a href="#"
              class="btn btn-white btn-outline btn-icon-right btn-rounded text-normal">Discover
              now<i class="d-icon-arrow-right"></i></a>
          </div>
        </div> --}}
        @include('frontend.common.product_nav')


        {{-- <nav class="toolbox sticky-toolbox sticky-content fix-top">
          <div class="toolbox-left">
            <div class="toolbox-item toolbox-sort select-box text-dark">
              <label>Sort By : {{ count($products) }} </label>
              <select name="orderby" class="form-control">
                <option value="default">Default</option>
                <option value="popularity" selected="selected">Most Popular</option>
                <option value="rating">Average rating</option>
                <option value="date">Latest</option>
                <option value="price-low">Sort forward price low</option>
                <option value="price-high">Sort forward price high</option>
                <option value="">Clear custom sort</option>
              </select>
            </div>
          </div>
          <div class="toolbox-right">
            <div class="toolbox-item toolbox-show select-box text-dark">
              <label>Show :</label>
              <select name="count" class="form-control">
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="36">36</option>
              </select>
            </div>
            <div class="toolbox-item toolbox-layout tab tab-nav-simple nav nav-tabs "role="tablist">
              <a href="#list_view" class="d-icon-mode-list btn-layout nav-item nav-link "></a>
              <a href="#grid_view" class="d-icon-mode-grid btn-layout nav-item nav-link active"></a>
            </div>
          </div>
        </nav> --}}
        
        
        <div class="tab-content" id="myTabContent"> 


          <div class="row cols-2 cols-sm-3 product-wrapper tab-pane active" id="grid_view" >    
            @include('frontend.product.grid_view_product')
          </div>
  
          <div class="product-lists product-wrapper tab-pane" id="list_view" >
            @include('frontend.product.list_view_product')
          </div>
      </div>

        <nav class="toolbox toolbox-pagination">
          {{-- <p class="show-info">Showing 12 of 56 Products</p> --}}

          <ul class="pagination">
            <li>

            {{-- {{ $products->links()  }} --}}
            </li>
            {{-- <li class="page-item disabled">
              <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                aria-disabled="true">
                <i class="d-icon-arrow-left"></i>Prev
              </a>
            </li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
            <li class="page-item">
              <a class="page-link page-link-next" href="#" aria-label="Next">
                Next<i class="d-icon-arrow-right"></i>
              </a>
            </li> --}}
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>


{{-- ---------- --}}











@endsection

