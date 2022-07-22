<div class="shop-banner-default banner mb-1"
style="background-image: url({{ asset('frontend/images/shop/banner.png') }}); background-color: #4e6582;">
<div class="banner-content">
  <h4 class="banner-subtitle font-weight-bold ls-normal text-uppercase text-white">
     Shop</h4>
  <h1 class="banner-title font-weight-bold text-white"></h1>
  <a href="#"
    class="btn btn-white btn-outline btn-icon-right btn-rounded text-normal">Discover
    now<i class="d-icon-arrow-right"></i></a>
</div>
</div>
<nav class="toolbox sticky-toolbox sticky-content fix-top">
<div class="toolbox-left">
  <div class="toolbox-item toolbox-sort select-box text-dark">
    <label>Sort By :</label>
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
  <div>
    {{-- @foreach($breadsubcat as $item)

    <span class="badge badge-danger"  >{{ $item->category->category_name_en }} </span>
           @endforeach
              /
           @foreach($breadsubcat as $item)
    <span class="badge badge-danger"  >{{ $item->subcategory_name_en }} </span>
           
           @endforeach   --}}
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
</nav>