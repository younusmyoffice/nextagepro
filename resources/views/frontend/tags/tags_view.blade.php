@extends('frontend.master')
@section('content')
@section('title')
Tag Wise Product 
@endsection


<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
  <nav class="breadcrumb-nav">
      <div class="container">
          <ul class="breadcrumb">
              <li><a href="{{url('/')}}"> <i class="d-icon-home"></i> Categories</a></li>
              <li>Shop</li>
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
            
            {{-- <div class="widget widget-collapsible">
              <h3 class="widget-title">Brands</h3>
              <ul class="widget-body filter-items">
                
                @if(!empty($_GET['brand']))
                @php
                $filterBrand = explode(',',$_GET['brand']);
                @endphp
                @endif

                @foreach($brands as $brand)
                <li><a href="#">
                <input type="checkbox" class="form-check-input" name="brand[]" value="{{ $brand->brand_slug_en }}" @if(!empty($filterBrand) && in_array($brand->brand_slug_en,$filterBrand)) checked @endif onchange="this.form.submit()">
  
                @if(session()->get('language') == 'hindi') {{ $brand->brand_name_hin }} @else {{ $brand->brand_name_en }} @endif 
  
                
                @endforeach              
                            
                </a></li>
                
              </ul>
            </div>  --}}
            @include('frontend.common.product_tags')
                        <!-- ==== ===== PRODUCT TAGS : END ======= ==== -->
            @include('frontend.common.vertical_menu')
              <!-- ===== ===== PRODUCT TAGS ==== ====== -->
            
            
             
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
             
          </div>
        </div>
      </aside>
      <div class="col-lg-9 main-content">

        @include('frontend.common.product_nav')

        
        
        <div class="tab-content">


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

            {{ $products->links()  }}
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

