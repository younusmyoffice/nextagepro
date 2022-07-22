@php

$tags_en = App\Models\Product::groupBy('product_tags_en')->select('product_tags_en')->get();

$tags_hin = App\Models\Product::groupBy('product_tags_hin')->select('product_tags_hin')->get();
@endphp     




        <div class="widget">
          <h3 class="widget-title">Product Tags</h3>
          <div class="widget-body pt-2">
            {{-- <a href="#" class="tag"> </a> --}}

              @if(session()->get('language') == 'hindi') 

              @foreach($tags_hin as $tag)
              <a class="tag active" title="Phone" href="{{ url('product/tag/'.$tag->product_tags_hin) }}">
                {{ str_replace(',',' ',$tag->product_tags_hin)  }}</a> 
              @endforeach

              @else 

              @foreach($tags_en as $tag)
              <a class="tag active" title="Phone" href="{{ url('product/tag/'.$tag->product_tags_en) }}">
                {{ str_replace(',',' ',$tag->product_tags_en)  }}</a> 
              @endforeach
              
                @endif
           
          </div>
        </div>