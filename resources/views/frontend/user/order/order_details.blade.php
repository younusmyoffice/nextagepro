 


{{--  --}}

@extends('frontend.master')
@section('content') 
 
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="d-icon-home"></i></a></li>
                        <li>Account</li>
                    </ul>
                </div>
            </nav>
</div><br><div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
  <h3 class="page-subtitle font-weight-bold"> </h3>
  <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">  Orders Details   </h1>
  <p class="page-desc text-white mb-0"> My  Order Details </p>
</div>
            <div class="page-content mt-4 mb-10 pb-6">
                <div class=" " style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                    <h2 class="title title-center mb-10">My Shipping Details</h2>
                    <div class="tab tab-vertical gutter-lg">
                     
                            @include('frontend.common.user_sidebar')

                            <div class="tab-content col-lg-9 col-md-4" >
                                  <div class="tab-pane active in" id="myorders" >
                                    <h4>Shipping Details   </h4>
                                    <p> <span class="text-danger"> Order Date : {{ $order->order_date }}</span></p>
                                    <fieldset>
                                        <table class="shop-table wishlist-table mt-2 mb-4 table">
                                          <thead>
                                              <tr style="height:50px;text-align:center;padding: 400px;" style="color: rgb(88, 88, 88);">
                                                  <th class="" >Particulars</th>
                                                  <th  class="pl-2" >Details</th>
                                              </tr>
                                          </thead>
                                          <tbody style="text-align: left">
                                            
                                                  <tr>
                                                    <td class="order-date" >Shipping Name</td>
                                                    <td class="link-to-tab text-primary" >: {{ $order->name }}</td>
                                                  </tr>
                                      
                                                  <tr >
                                                    <td class="order-date" >Shipping Phone</td>
                                                    <td class=" link-to-tab text-primary" >: {{ $order->phone }}</td>
                                                  </tr>
                                      
                                                  <tr >
                                                    <td class="order-date">Shipping Email </td>
                                                    <td class=" link-to-tab text-primary" >:  {{ $order->email }}</td>
                                                  </tr>
                                      
                                                  <tr >
                                                    <td class="order-date" > Division </td>
                                                    <td class=" link-to-tab text-primary" >:  {{ $order->division->division_name ?? ' '}}</td>
                                                  </tr> 

                                                  <tr >
                                                    <td class="order-date" > Address </td>
                                                    <td class=" link-to-tab text-primary" >:  {{ $order->shipping_address ?? ' ' }}</td>
                                                  </tr> 
                                      
                                                  <tr >
                                                    <td class="order-date" > District </td>
                                                    <td class=" link-to-tab text-primary" >:  {{ $order->district->district_name ?? ' '}}</td>
                                                  </tr>
                                      
                                                  <tr >
                                                    <td class="order-date" > State </td>
                                                    <td class=" link-to-tab text-primary" >: {{ $order->state->state_name ?? ' '}}</td>
                                                  </tr>
                                      
                                                  <tr >
                                                    <td class="order-date" > Post Code </td>
                                                    <td class=" link-to-tab text-primary" >:  {{ $order->post_code }}</td>
                                                  </tr>
                                      
                                                  <tr >
                                                    <td class="order-date" > Order Date </td>
                                                    <td class=" link-to-tab text-primary" >:  {{ $order->order_date }}</td>
                                                  </tr> 
                                                  <tr>
                                                    <td class="order-date  " > Order Total </td>
                                                    <td class=" order-total" >: ₹  {{ $order->amount }}</td>
                                                  </tr>
    
                                                  <tr>
                                                    <td class="order-date  " > Order </td>
                                                    <td>   
                                                        <span  class="btn btn-rounded btn-outline btn-outline-light btn-success btn-block" >  {{ $order->status }} </span> 
                                                    </td>
                                                  </tr>
                                          </tbody>
                                        </table>
                                    </fieldset>
                                     
                                    
                                </div>
                            </div>
                            <div class="tab-content col-lg-9 col-md-4">
                                  <div class="tab-pane active in" id="myorders" >

                                    <h4>My Order Details   </h4>
                                    <p> <span class="text-danger"> Invoice : {{ $order->invoice_no }}</span></p>
                                    <fieldset>
                                        <table class="shop-table wishlist-table mt-2 mb-4 table">
                                          <thead>
                                              <tr style="height:50px;text-align:center;padding: 400px;" style="color: rgb(88, 88, 88);" >
                                                  <th class="" >Particulars</th>
                                                  <th class="pl-2" >Details</th>
                                                  
                                              </tr>
                                          </thead>
                                          <tbody style="text-align: left">
                                                  
                                              <tr>
                                                <td class="order-date" >  Name </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->user->name }}</td>
                                              </tr>
                                  
                                              <tr>
                                                <td class="order-date" >  Phone </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->user->phone }}</td>
                                              </tr>
                                  
                                              <tr>
                                                <td class="order-date" > Payment Type </td>
                                                <td class=" order-total" >:  {{ $order->payment_type }}</td>
                                              </tr>

                                              <tr>
                                                <td class="order-date" > Payment Method </td>
                                                <td class=" order-total" >:  {{ $order->payment_method }}</td>
                                              </tr>
                                  
                                              <tr>
                                                <td class="order-date  " > Tranx ID </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->transaction_id }}</td>
                                              </tr>
                                              <tr>
                                                <td class="order-date  " > Order No.</td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->order_number }}</td>
                                              </tr>
                                              <tr>
                                                <td class="order-date  " > Payment ID </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->payment_id }}</td>
                                              </tr>
                                              {{-- dd({{$order->card_id}})
                                              if({{$order->card_id}}->count() != 0 )
                                              { --}}
                                                <tr>
                                                  <td class="order-date  " > card ID </td>
                                                  <td class=" link-to-tab text-primary" >:  {{ $order->card_id }}</td>
                                                </tr>
                                              {{-- }else{}
                                              if({{ $order->bank }}->isNotEmpty() )
                                              { --}}
                                              <tr>
                                                <td class="order-date  " > bank </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->bank }}</td>
                                              </tr>
                                              {{-- }else{}
                                              if({{ $order->wallet }}->isNotEmpty() )
                                              { --}}
                                              <tr>
                                                <td class="order-date  " > wallet   </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->wallet }}</td>
                                              </tr>
                                              
                                              {{-- }else{}
                                              if({{ $order->rrn_no }}->isNotEmpty() )
                                              { --}}
                                              <tr>
                                                <td class="order-date  " > rrn no  </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->rrn_no }}</td>
                                              </tr>
                                              {{-- }else{} --}}
                                              {{-- if({{ $order->payment_status }}->isNotEmpty() )
                                              {
                                              <tr>
                                                <td class="order-date  " >   payment status </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->payment_status }}</td>
                                              </tr>
                                              }else{}
                                              if({{ $order->payment_captured }}->isNotEmpty() )
                                              {
                                              <tr>
                                                <td class="order-date  " > payment captured  </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->payment_captured }}</td>
                                              </tr>
                                              }else{} --}}
                                              
                                              {{-- <tr>
                                                <td class="order-date  " > Invoice  </td>
                                                <td class=" link-to-tab text-primary" >:  {{ $order->invoice_no }}</td>
                                              </tr> --}}
                                  
                                              
                                            
                                          </tbody>
                                        </table>
                                    </fieldset>
  
                                </div>
                            </div>

                            



                            
                       
                        
                    </div>

                    <h1>My  Details</h1>
                                  <fieldset style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                                      <table class="shop-table wishlist-table mt-2 mb-4 table">
                                        <thead>
                                            <tr style="height:50px;padding: 400px;color: rgb(88, 88, 88);" >
                                                {{-- <th class="pl-2" >Date</th> --}}
                                                <th class="order-date">
                                                   Image
                                                </th>
                                
                                                <th class="col-md-3">
                                                   Product Name 
                                                </th>
                                
                                                <th class="col-md-3">
                                                   Product Code
                                                </th>
                                
                                
                                                <th class="col-md-2">
                                                   Color / Flavour
                                                </th>
                                
                                                <th class="col-md-2">
                                                   Size / Weight
                                                </th>
                                
                                                <th class="col-md-1">
                                                   Quantity 
                                                </th>
                                
                                                {{-- <th class="col-md-1">
                                                   Price 
                                                </th> --}}
                                
                                                <th class="col-md-1">
                                                   Download 
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach ($orderItem as $item) 
                                            <tr>
                                              <td  >
                                                <img src="{{ asset($item->product->product_thambnail) }}" height="100px;" width="100px;"  >
                                              </td>
                              
                                              <td>
                                                 {{ $item->product->product_name_en }}
                                              </td>
                              
                                              <td>
                                                 {{ $item->product->product_code }}
                                              </td>
                              
                                              <td>
                                                 {{ $item->color }}
                                              </td>
                              
                                              <td>
                                                 {{ $item->size }}
                                              </td>
                              
                                              <td>
                                                 {{ $item->qty }}
                                              </td>
                              
                                              {{-- <td>
                                                ₹{{ $item->price }}  ( ₹ {{ $item->price * $item->qty}} ) 
                                              </td> --}}

                                            
                                              
                                                @php 
                                                
                                                $file = App\Models\Product::where('id',$item->product_id)->first();
                                                @endphp
                                                
                                                  <td class="col-md-1">
                                                        @if($order->status == 'pending')  
                                                        <strong> <span class="btn btn-rounded btn-outline btn-dark btn-block" > No File</span>  </strong> 
                                                                
                                                        @elseif($order->status == 'confirm')  
                                                
                                                          <a target="_blank" href="{{ asset('upload/pdf/'.$file->digital_file) }}">  
                                                          <strong>  <span class="btn btn-rounded btn-outline btn-success btn-block"> Download Ready</span>  </strong> </a> 
                                                        @endif
                                                  </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                  </fieldset>


                                  @if($order->status !== "delivered")

                                  @else
                            
                                      @php 
                                          $order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
                                      @endphp
                            
                            
                                            @if($order)
                                                <form action="{{ route('return.order',$order->id) }}" method="post">
                                                  @csrf
                                                
                                                  <div class="form-group"><br>
                                                    <h3><label for="label"> Order Return Reason:</h3>
                                                    <textarea name="return_reason" id="" class="form-control" cols="30" rows="05" placeholder="Return Reason"></textarea>    
                                                  </div><br>
                                                
                                                  <button type="submit" class="btn btn-primary btn-rounded btn-md ml-2">Order Return</button>
                                                
                                                </form>
                                            @else
                                      
                                                <span class="badge badge-pill badge-warning" style="background: red">You Have send return request for this product</span>
                                        
                                            @endif 
                                      
                            
                            
                                  @endif


                </div> 
            </div>


        {{--  --}}
              {{-- <div id="plan">
                <div class="titletable">
                  <h1>$299 <span>/month</span></h1>
                  <p>Simple</p>
              
                </div>
                <div class="containDetails">
                  <ul class="details">
                    <li class="first">5 <span>Accounts</span></li>
                    <li>50GB<span>Storage</span></li>
                    <li>1 <span>Domain</span></li>
                    <li>500GB<span>Bandwidth</span></li>
                  </ul>
                </div>
                <div class="end">
                  <div class="select">
                    <a href="#" class="button button-flat-royal button-pill">Select Plan</a>
                  </div>
                </div>
              </div>
              
              <div id="plan">
                <div class="titletable">
                  <h1>$1199 <span>/month</span></h1>
                  <p>Gold</p>
              
                </div>
                <div class="containDetails">
                  <ul class="details">
                    <li class="first">5 <span>Accounts</span></li>
                    <li>50GB<span>Storage</span></li>
                    <li>1 <span>Domain</span></li>
                    <li>500GB<span>Bandwidth</span></li>
                  </ul>
                </div>
                <div class="end">
                  <div class="select">
                    <a href="#" class="button button-flat-royal button-pill">Select Plan</a>
                  </div>
                </div>
              </div>
              
              <div id="plan">
                <div class="titletable">
                  <h1>$499 <span>/month</span></h1>
                  <p>Plus</p>
              
                </div>
                <div class="containDetails">
                  <ul class="details">
                    <li class="first">5 <span>Accounts</span></li>
                    <li>50GB<span>Storage</span></li>
                    <li>1 <span>Domain</span></li>
                    <li>500GB<span>Bandwidth</span></li>
                  </ul>
                </div>
                <div class="end">
                  <div class="select">
                    <a href="#" class="button button-flat-royal button-pill">Select Plan</a>
                  </div>
                </div>
              </div> --}}
          {{--  --}}
                

  

 
@endsection


