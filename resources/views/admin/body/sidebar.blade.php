@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
 
@endphp

<div class="sidebar-header">
            <div>
              <img src="{{asset('backend/admin_assets/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">Nextage Nutrition</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title active">Dashboard</div>
              </a>
              <ul>
                <li> <a href="{{ url('admin/dashboard') }}"><i class="bi bi-circle"></i>Nextage Dashboard</a>
                </li>
              </ul>
            </li>


        @php
        $brand = (auth()->guard('admin')->user()->brand == 1);
        $category = (auth()->guard('admin')->user()->category == 1);
        $product = (auth()->guard('admin')->user()->product == 1);
        $slider = (auth()->guard('admin')->user()->slider == 1);
        $coupons = (auth()->guard('admin')->user()->coupons == 1);
        $shipping = (auth()->guard('admin')->user()->shipping == 1);
        $blog = (auth()->guard('admin')->user()->blog == 1);
        $setting = (auth()->guard('admin')->user()->setting == 1);
        $returnorder = (auth()->guard('admin')->user()->returnorder == 1);
        $review = (auth()->guard('admin')->user()->review == 1);
        $orders = (auth()->guard('admin')->user()->orders == 1);
        $stock = (auth()->guard('admin')->user()->stock == 1);
        $reports = (auth()->guard('admin')->user()->reports == 1);
        $alluser = (auth()->guard('admin')->user()->alluser == 1);
        $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);

        @endphp

            @if($brand == true) 
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-adobe"></i>
                </div>
                <div class="menu-title">Brands</div>
              </a>
              <ul>
                <li> <a href="{{route('all.brand')}}"><i class="bi bi-circle"></i>All Brands</a>
                </li>
                 
              </ul>
            </li>
            @else
            @endif

            @if($category == true)
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-airbnb"></i>
                </div>
                <div class="menu-title">Categories</div>
              </a>
              <ul>
                <li> <a href="{{route('all.category')}}"><i class="bi bi-circle"></i>All Category</a>
                </li>
                <li> <a href="{{route('all.subcategory')}}"><i class="bi bi-circle"></i>All Sub Category</a>
                </li>
                <li> <a href="{{route('all.subsubcategory')}}"><i class="bi bi-circle"></i>All Sub->SubCategory</a>
                </li>
                 
              </ul>
            </li>
            @else
            @endif

            @if($product == true)
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Products</div>
              </a>
              <ul>
                <li> <a href="{{route('add-product')}}"><i class="bi bi-circle"></i>Add Products</a>
                </li>
                <li> <a href="{{route('manage-product')}}"><i class="bi bi-circle"></i>Manage Products</a>
                </li>
                
              </ul>
            </li>
            @else
            @endif

            @if($slider == true)
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-apartment"></i>
                </div>
                <div class="menu-title">Slider</div>
              </a>
              <ul>
    
                <li> <a href="{{route('manage-slider')}}"><i class="bi bi-circle"></i>Manage Sliders</a>
                </li>
                
              </ul>
            </li>
            @else
            @endif

            @if($coupons == true)
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-archive"></i>
                </div>
                <div class="menu-title">Coupons</div>
              </a>
              <ul>
    
                <li> <a href="{{route('manage-coupon')}}"><i class="bi bi-circle"></i>Manage Coupons</a>
                </li>
                <li> <a href="{{route('manage-newsletter')}}"><i class="bi bi-circle"></i>Newsletter</a>
                </li>
                
              </ul>
            </li>
            @else
            @endif

            @if($shipping == true)
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-ambulance"></i>
                </div>
                <div class="menu-title">Shipping area</div>
              </a>
              <ul>
    
                <li> <a href="{{route('manage-division')}}"><i class="bi bi-circle"></i>Ship Division</a>
                </li>
                <li> <a href="{{route('manage-district')}}"><i class="bi bi-circle"></i>Ship District </a>
                </li>
                <li> <a href="{{route('manage-state')}}"><i class="bi bi-circle"></i>Ship State  </a>
                </li>
                
              </ul>
            </li>
            @else
            @endif

            @if($orders == true)
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-cart"></i>
                </div>
                <div class="menu-title">Orders</div>
              </a>
              <ul>
                <li class=" "><a href="{{ route('all-orders') }}"><i class="bi bi-circle"></i>All Orders</a></li>

                <li class=" "><a href="{{ route('pending-orders') }}"><i class="bi bi-circle"></i>Pending Orders</a></li>

                <li class=" "><a href="{{ route('confirmed-orders') }}"><i class="bi bi-circle"></i>Confirmed Orders</a></li>
        
                <li class=" "><a href="{{ route('processing-orders') }}"><i class="bi bi-circle"></i>Processing Orders</a></li>
        
                <li class=" "><a href="{{ route('picked-orders') }}"><i class="bi bi-circle"></i> Picked Orders</a></li>
        
                <li class=" "><a href="{{ route('shipped-orders') }}"><i class="bi bi-circle"></i> Shipped Orders</a></li>
        
                <li class=""><a href="{{ route('delivered-orders') }}"><i class="bi bi-circle"></i> Delivered Orders</a></li>
          
                <li class=""><a href="{{ route('cancel-orders') }}"><i class="bi bi-circle"></i> Cancel Orders</a></li>
        
                
              </ul>
            </li>
            @else
            @endif
           
            @if($reports == true)
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Reports</div>
              </a>
              <ul>
               

                <li class=" "><a href="{{ route('all-reports') }}"><i class="bi bi-circle"></i>All Reports</a></li>

                 
              </ul>
            </li>
            @else
            @endif

            


            @if($alluser == true)

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="menu-title"> Users</div>
              </a>
              <ul>
                <li><a href="{{ route('all-users') }}"><i class="bi bi-circle"></i>All Users</a>
                </li>
                
              </ul>
            </li>   
            
            @else
            
            @endif

            @if($returnorder == true)

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="lni lni-cart-full"></i>
                </div>
                <div class="menu-title"> Return Order</div>
              </a>
              <ul>
                <li><a href="{{ route('return.request') }}"><i class="bi bi-circle"></i>Return Request</a>
                </li>
                <li class=""><a href="{{ route('all.request') }}"><i class="bi bi-circle"></i>All Request</a>
                </li>
                
              </ul>
            </li>   
   
    
            @else
            @endif


              @if($review == true)

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="lni lni-bar-chart"></i>
                </div>
                <div class="menu-title"> Manage Review</div>
              </a>
              <ul>
                <li><a href="{{ route('pending.review') }}"><i class="bi bi-circle"></i>Pending Review</a>
                </li>
                <li class=""><a href="{{ route('publish.review') }}"><i class="bi bi-circle"></i>Publish Review</a>
                </li>
                
              </ul>
            </li>   


            @else
            @endif

            @if($stock == true)

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="lni lni-blackboard"></i>
                </div>
                <div class="menu-title"> Manage Stock</div>
              </a>
              <ul>
                <li><a href="{{ route('product.stock') }}"><i class="bi bi-circle"></i>Product Stock</a>
                </li>
                 
              </ul>
            </li> 

            @else
            @endif

            @if($adminuserrole == true)

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="lni lni-bridge"></i>
                </div>
                <div class="menu-title"> Admin User Role</div>
              </a>
              <ul>
                <li><a href="{{ route('all.admin.user') }}"><i class="bi bi-circle"></i>Admin Roles</a>
                </li>
                 
              </ul>
            </li> 

            @else
            @endif
           


     @if($blog == true)

     <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="lni lni-book"></i>
        </div>
        <div class="menu-title">   Blog</div>
      </a>
      <ul>
        <li><a href="{{ route('blog.category') }}"><i class="bi bi-circle"></i>Blog Category  </a>
        </li>
        <li class=""><a href="{{ route('list.post') }}"><i class="bi bi-circle"></i> List Blog Post</a>
        </li> 
        <li class=""><a href="{{ route('add.post') }}"><i class="bi bi-circle"></i>  Add Blog Post</a>
        </li>
        
      </ul>
    </li> 


     @else
     @endif

     {{-- @if($contact == true) --}}

     <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="lni lni-caravan"></i>
        </div>
        <div class="menu-title">   Contact</div>
      </a>
      <ul>
        <li><a href="{{ route('contact.view') }}"><i class="bi bi-circle"></i>View Contact  </a>
        </li>
        
        
      </ul>
    </li> 


     {{-- @else
     @endif --}}

  @if($setting == true)

      <li>
        <a class="has-arrow" href="javascript:;">
          <div class="parent-icon"><i class="lni lni-lock"></i>
          </div>
          <div class="menu-title"> Setting</div>
        </a>
        <ul>
          <li><a href="{{ route('site.setting') }}"><i class="bi bi-circle"></i>Site Setting</a>
          </li>

          <li class=""><a href="{{ route('seo.setting') }}"><i class="bi bi-circle"></i>  SEO Setting</a>
          </li>
         
          
        </ul>
      </li> 
    
     @else
     @endif



{{-- 
 
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Application</div>
              </a>
              <ul>
                <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Email</a>
                </li>
                <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>Chat Box</a>
                </li>
                <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>File Manager</a>
                </li>
                <li> <a href="app-to-do.html"><i class="bi bi-circle"></i>Todo List</a>
                </li>
                <li> <a href="app-invoice.html"><i class="bi bi-circle"></i>Invoice</a>
                </li>
                <li> <a href="app-fullcalender.html"><i class="bi bi-circle"></i>Calendar</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">UI Elements</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                </div>
                <div class="menu-title">Widgets</div>
              </a>
              <ul>
                <li> <a href="widgets-static-widgets.html"><i class="bi bi-circle"></i>Static Widgets</a>
                </li>
                <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>Data Widgets</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">eCommerce</div>
              </a>
              <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Products List</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Products Grid</a>
                </li>
                <li> <a href="ecommerce-products-categories.html"><i class="bi bi-circle"></i>Categories</a>
                </li>
                <li> <a href="ecommerce-orders.html"><i class="bi bi-circle"></i>Orders</a>
                </li>
                <li> <a href="ecommerce-orders-detail.html"><i class="bi bi-circle"></i>Order details</a>
                </li>
                <li> <a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Add New Product</a>
                </li>
                <li> <a href="ecommerce-add-new-product-2.html"><i class="bi bi-circle"></i>Add New Product 2</a>
                </li>
                <li> <a href="ecommerce-transactions.html"><i class="bi bi-circle"></i>Transactions</a>
                </li>
              </ul>
            </li>


             <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Components</div>
              </a>
              <ul>
                <li> <a href="component-alerts.html"><i class="bi bi-circle"></i>Alerts</a>
                </li>
                <li> <a href="component-accordions.html"><i class="bi bi-circle"></i>Accordions</a>
                </li>
                <li> <a href="component-badges.html"><i class="bi bi-circle"></i>Badges</a>
                </li>
                <li> <a href="component-buttons.html"><i class="bi bi-circle"></i>Buttons</a>
                </li>
                <li> <a href="component-cards.html"><i class="bi bi-circle"></i>Cards</a>
                </li>
                <li> <a href="component-carousels.html"><i class="bi bi-circle"></i>Carousels</a>
                </li>
                <li> <a href="component-list-groups.html"><i class="bi bi-circle"></i>List Groups</a>
                </li>
                <li> <a href="component-media-object.html"><i class="bi bi-circle"></i>Media Objects</a>
                </li>
                <li> <a href="component-modals.html"><i class="bi bi-circle"></i>Modals</a>
                </li>
                <li> <a href="component-navs-tabs.html"><i class="bi bi-circle"></i>Navs & Tabs</a>
                </li>
                <li> <a href="component-navbar.html"><i class="bi bi-circle"></i>Navbar</a>
                </li>
                <li> <a href="component-paginations.html"><i class="bi bi-circle"></i>Pagination</a>
                </li>
                <li> <a href="component-popovers-tooltips.html"><i class="bi bi-circle"></i>Popovers & Tooltips</a>
                </li>
                <li> <a href="component-progress-bars.html"><i class="bi bi-circle"></i>Progress</a>
                </li>
                <li> <a href="component-spinners.html"><i class="bi bi-circle"></i>Spinners</a>
                </li>
                <li> <a href="component-notifications.html"><i class="bi bi-circle"></i>Notifications</a>
                </li>
                <li> <a href="component-avtars-chips.html"><i class="bi bi-circle"></i>Avatrs & Chips</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                </div>
                <div class="menu-title">Icons</div>
              </a>
              <ul>
                <li> <a href="icons-line-icons.html"><i class="bi bi-circle"></i>Line Icons</a>
                </li>
                <li> <a href="icons-boxicons.html"><i class="bi bi-circle"></i>Boxicons</a>
                </li>
                <li> <a href="icons-feather-icons.html"><i class="bi bi-circle"></i>Feather Icons</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Forms & Tables</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Forms</div>
              </a>
              <ul>
                <li> <a href="form-elements.html"><i class="bi bi-circle"></i>Form Elements</a>
                </li>
                <li> <a href="form-input-group.html"><i class="bi bi-circle"></i>Input Groups</a>
                </li>
                <li> <a href="form-layouts.html"><i class="bi bi-circle"></i>Forms Layouts</a>
                </li>
                <li> <a href="form-validations.html"><i class="bi bi-circle"></i>Form Validation</a>
                </li>
                <li> <a href="form-wizard.html"><i class="bi bi-circle"></i>Form Wizard</a>
                </li>
                <li> <a href="form-date-time-pickes.html"><i class="bi bi-circle"></i>Date Pickers</a>
                </li>
                <li> <a href="form-select2.html"><i class="bi bi-circle"></i>Select2</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
                </div>
                <div class="menu-title">Tables</div>
              </a>
              <ul>
                <li> <a href="table-basic-table.html"><i class="bi bi-circle"></i>Basic Table</a>
                </li>
                <li> <a href="table-advance-tables.html"><i class="bi bi-circle"></i>Advance Tables</a>
                </li>
                <li> <a href="table-datatable.html"><i class="bi bi-circle"></i>Data Table</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Pages</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title">Authentication</div>
              </a>
              <ul>
                <li> <a href="authentication-signin.html" target="_blank"><i class="bi bi-circle"></i>Sign In</a>
                </li>
                <li> <a href="authentication-signup.html" target="_blank"><i class="bi bi-circle"></i>Sign Up</a>
                </li>
                <li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i class="bi bi-circle"></i>Sign In with Header & Footer</a>
                </li>
                <li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i class="bi bi-circle"></i>Sign Up with Header & Footer</a>
                </li>
                <li> <a href="authentication-forgot-password.html" target="_blank"><i class="bi bi-circle"></i>Forgot Password</a>
                </li>
                <li> <a href="authentication-reset-password.html" target="_blank"><i class="bi bi-circle"></i>Reset Password</a>
                </li>
              </ul>
            </li>  --}}


            
            <li>
              <a href="{{route('admin.profile')}}">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">User Profile</div>
              </a>
            </li>
            {{-- @else
            @endif --}}


            {{-- <li>
              <a href="pages-timeline.html">
                <div class="parent-icon"><i class="bi bi-collection-play-fill"></i>
                </div>
                <div class="menu-title">Timeline</div>
              </a>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <div class="menu-title">Errors</div>
              </a>
              <ul>
                <li> <a href="pages-errors-404-error.html" target="_blank"><i class="bi bi-circle"></i>404 Error</a>
                </li>
                <li> <a href="pages-errors-500-error.html" target="_blank"><i class="bi bi-circle"></i>500 Error</a>
                </li>
                <li> <a href="pages-errors-coming-soon.html" target="_blank"><i class="bi bi-circle"></i>Coming Soon</a>
                </li>
                <li> <a href="pages-blank-page.html" target="_blank"><i class="bi bi-circle"></i>Blank Page</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="pages-faq.html">
                <div class="parent-icon"><i class="bi bi-question-lg"></i>
                </div>
                <div class="menu-title">FAQ</div>
              </a>
            </li>
            <li>
              <a href="pages-pricing-tables.html">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Pricing Tables</div>
              </a>
            </li>
            <li class="menu-label">Charts & Maps</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-bar-chart-line-fill"></i>
                </div>
                <div class="menu-title">Charts</div>
              </a>
              <ul>
                <li> <a href="charts-apex-chart.html"><i class="bi bi-circle"></i>Apex</a>
                </li>
                <li> <a href="charts-chartjs.html"><i class="bi bi-circle"></i>Chartjs</a>
                </li>
                <li> <a href="charts-highcharts.html"><i class="bi bi-circle"></i>Highcharts</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="menu-title">Maps</div>
              </a>
              <ul>
                <li> <a href="map-google-maps.html"><i class="bi bi-circle"></i>Google Maps</a>
                </li>
                <li> <a href="map-vector-maps.html"><i class="bi bi-circle"></i>Vector Maps</a>
                </li>
              </ul>
            </li>
            <li class="menu-label">Others</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-music-note-list"></i>
                </div>
                <div class="menu-title">Menu Levels</div>
              </a>
              <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>
                  <ul>
                    <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level Two</a>
                      <ul>
                        <li> <a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="https://codervent.com/skodash/documentation/index.html" target="_blank">
                <div class="parent-icon"><i class="bi bi-file-code-fill"></i>
                </div>
                <div class="menu-title">Documentation</div>
              </a>
            </li>
            <li>
              <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bi bi-telephone-fill"></i>
                </div>
                <div class="menu-title">Support</div>
              </a>
            </li> --}}
          </ul>
          <!--end navigation-->