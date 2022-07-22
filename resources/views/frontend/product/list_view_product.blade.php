{{-- 
    @foreach($products as $product)
<div class="category-product-inner wow fadeInUp">
  <div class="products">
    <div class="product-list product">
      <div class="row product-list-row">
        <div class="col col-sm-4 col-lg-4">
          <div class="product-image">
            <div class="image"> <img src="{{ asset($product->product_thambnail) }}" alt=""> </div>
          </div>
          <!-- /.product-image --> 
        </div>
        <!-- /.col -->
        <div class="col col-sm-8 col-lg-8">
          <div class="product-info">
            <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
            	@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif</a></h3>
            <div class="rating rateit-small"></div>


            @if ($product->discount_price == NULL)
            <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>  </div>
            @else
<div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
            @endif
            
            <!-- /.product-price -->
            <div class="description m-t-10">
            	@if(session()->get('language') == 'hindi') {{ $product->short_descp_hin }} @else {{ $product->short_descp_en }} @endif</div>
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <li class="add-cart-button btn-group">
                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                  </li>
                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                </ul>
              </div>
              <!-- /.action --> 
            </div>
            <!-- /.cart --> 
            
          </div>
          <!-- /.product-info --> 
        </div>
        <!-- /.col --> 
      </div>
@endforeach


         @php
        $amount = $product->selling_price - $product->discount_price;
        $discount = ($amount/$product->selling_price) * 100;
        @endphp    

                      <!-- /.product-list-row -->
                      <div>
            @if ($product->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif
          </div>



                  
        </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner --> --}}


    @foreach($products as $product)



    <div class="product product-list">
      <figure class="product-media">
        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
          <img src="{{ asset($product->product_thambnail) }}" alt="product" width="260" height="293">
        </a>

        
        @php
        $amount = $product->selling_price - $product->discount_price;
        $discount = ($amount/$product->selling_price) * 100;
        @endphp    

          
            {{-- @if ($product->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif --}}
        
        <div class="product-label-group">
          
          @if ($product->discount_price == NULL)
          <label class="product-label label-new">new</label>
          @else
          <label class="product-label label-new">{{ round($discount) }}%</label>
          
          @endif
      
        </div>
      </figure>
      <div class="product-details">
        <div class="product-cat">
          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">{{ $product->short_descp_en }}</a>
        </div>
        <h3 class="product-name">
          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
            @if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif</a>
        </h3>
        
        <div class="product-price">
          @if ($product->discount_price == NULL)
        <span class="price">  ₹{{ $product->selling_price }} </span>
        @else
         <span class="price">  ₹{{ $product->discount_price }} </span> <span class="old-price"> ₹ {{ $product->selling_price }}</span>
        @endif
          
        </div>
        <div class="ratings-container">
          <div class="ratings-full">
            <span class="ratings" style="width:80%"></span>
            <span class="tooltiptext tooltip-top"></span>
          </div>
          <a href="product.html" class="rating-reviews">( 6 reviews )</a>
        </div>
        <p class="product-short-desc">
          @if(session()->get('language') == 'hindi') {{ $product->short_descp_hin }} @else {{ $product->short_descp_en }} @endif
        </p>
        <div class="product-action">
          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="btn btn-primary btn-rounded btn-md ml-2" data-toggle="modal"
            data-target="#addCartModal" title="Add to cart"><i
              class="d-icon-bag"></i><span> &nbsp; View </span></a>
          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i
              class="d-icon-heart"></i></a>
          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="btn-product-icon btn-quickview" title="Quick View"><i
              class="d-icon-search"></i></a>
        </div>
      </div>
    </div>


    @endforeach