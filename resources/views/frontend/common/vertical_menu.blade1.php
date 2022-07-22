<div class="widget widget-collapsible">
              <h3 class="widget-title">All Categories</h3>
              <ul class="widget-body filter-items search-ul">
                @foreach($categories as $category)
                <li>
                  <a href="#">	
                    @if(session()->get('language') == 'hindi') {{ $category->category_name_hin }} @else {{ $category->category_name_en }} @endif 
                  </a>
                  <ul>
                    @php
                    $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                    @endphp 
                  
                     @foreach($subcategories as $subcategory)
                    <li>
                      <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">
                      @if(session()->get('language') == 'hindi') {{ $subcategory->subcategory_name_hin }} @else {{ $subcategory->subcategory_name_en }} @endif
                      </a>
                    </li>
                  	@endforeach 
                  </ul>
                </li>
                @endforeach 
                
              </ul>
            </div>