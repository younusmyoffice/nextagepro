{{-- @foreach($products as $product)
  <div class="col-sm-6 col-md-4 wow fadeInUp">
    <div class="products">
      <div class="product">
        <div class="product-image">
          <div class="image"> <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img  src="{{ asset($product->product_thambnail) }}" alt=""></a> </div>
          <!-- /.image -->

           @php
        $amount = $product->selling_price - $product->discount_price;
        $discount = ($amount/$product->selling_price) * 100;
        @endphp     
          
          <div>
            @if ($product->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif
          </div>


        </div>
        <!-- /.product-image -->
        
        <div class="product-info text-left">
          <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
          	@if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif</a></h3>
          <div class="rating rateit-small"></div>
          <div class="description"></div>


@if ($product->discount_price == NULL)
<div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>   </div>

@else

<div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
@endif



          
          <!-- /.product-price --> 
          
        </div>
        <!-- /.product-info -->
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
      <!-- /.product --> 
      
    </div>
    <!-- /.products --> 
  </div>
  <!-- /.item -->
  @endforeach
                --}}

                
                @foreach($products as $product)
                  <div class="product-wrap">
                    <div class="product text-center">
                      <figure class="product-media">
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                          <img src="{{ asset($product->product_thambnail) }}" alt="product" width="280" height="315">
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
                          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="btn-product-icon " data-toggle="modal"
                          data-target="#addCartModal" title="Add to cart" id="{{ $product->id }}" onclick="productView(this.id)"><i
                              class="d-icon-bag"></i></a>
                              
                          <a href="#" class="btn-product-icon btn-wishlist"
                              title="Add to wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                        </div>
                      </figure>
                      <div class="product-details">
                        <div class="product-cat">
                          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">{{ $product->short_descp_en }}</a>
                        </div>
                        <h3 class="product-name">
                          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                              @if(session()->get('language') == 'hindi') {{ $product->product_name_hin }} @else {{ $product->product_name_en }} @endif
                          </a>
                        </h3>
                        
                        <div class="product-price">
                          @if ($product->discount_price == NULL)
                          <ins class="new-price"> ₹ {{ $product->selling_price }}</ins>
                          @else
                          <ins class="new-price">  ₹ {{ $product->discount_price }}</ins><del class="old-price"> ₹ {{ $product->selling_price }}</del>
                          @endif
                        </div>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width:60%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product.html" class="rating-reviews">( 16 reviews )</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
        
        
        