@extends('frontend.master')
@section('content') 
 
<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li>Account</li>
                    </ul>
                </div>
            </nav>
</div><br>
<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
  <h3 class="page-subtitle font-weight-bold"> </h3>
  <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">My Orders   </h1>
  <p class="page-desc text-white mb-0"> My  Order History </p>
</div>

            {{-- <div class="page-header" style="background-image: url('images/shop/page-header-back.jpg'); background-color: #3C63A4;">
              <h3 class="page-subtitle">Elements</h3>
              <h1 class="page-title">PRODUCTS + BANNER</h1>
              <ul class="breadcrumb">
                  <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                  <li class="delimiter">/</li>
                  <li><a href="element.html">Elements</a></li>
                  <li class="delimiter">/</li>
                  <li>Products + Banner</li>
              </ul>
            </div> --}}
            
            <div class="page-content mt-4 mb-10 pb-6 " >
                <div class=" " style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                    <h2 class="title title-center mb-10">My Orders</h2>
                    <div class="tab tab-vertical gutter-lg">
                     
                            @include('frontend.common.user_sidebar')

                            
                            
                        <div class="tab-content col-lg-9 col-md-8">
                          
                          
                                <div class="tab-pane active in" id="myorders" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                                    
                                    <fieldset >
                                        <table class="shop-table wishlist-table mt-2 mb-4 table" style="text-align:center">
                                          <thead>
                                              <tr class="align-items-center pt-2"  style="height:50px;text-align:center;padding: 400px;" style="color: rgb(88, 88, 88);">
                                                  <th class="pl-2" >Date</th>
                                                  <th>Total</th>
                                                  <th>Payment</th>
                                                  <th>Invoice</th>
                                                  <th>Order</th>
                                                  
                                                  <th class="pr-2">Actions</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach ($orders as $order) 
                                                  <tr class="align-items-center" >
                                                      <td class="order-number  "><a href="#">{{ $order->order_date }}</a></td>
                                                      <td class="order-number"><span>Rs.{{ $order->amount }}</span></td>
                                                      <td class="order-status"><span>{{ $order->payment_method }}</span></td>
                                                      <td class="order-total"><span>{{ $order->invoice_no }}</span></td>
                                                      <td class="order-status">
                                                        @if($order->status == 'pending')        
                                                        <span class="btn btn-rounded btn-outline btn-secondary  " > Pending </span>
                                                        @elseif($order->status == 'confirm')
                                                        <span class="btn btn-rounded btn-outline  btn-success " > Confirm </span>

                                                          @elseif($order->status == 'processing')
                                                        <span class=" btn btn-rounded btn-outline btn-alert  " > Processing </span>

                                                          @elseif($order->status == 'picked')
                                                        <span class="btn btn-rounded btn-outline   "  > Picked </span>

                                                          @elseif($order->status == 'shipped')
                                                        <span class="btn btn-rounded btn-outline btn-outline-light btn-dark " > Shipped </span>

                                                          @elseif($order->status == 'delivered')
                                                        <span class="btn btn-rounded btn-outline btn-success"> Delivered </span>

                                                          @if($order->return_order == 1) 
                                                          <span class="btn btn-rounded btn-outline  btn-primary "  >Return </span>

                                                          @endif

                                                        @else
                                                            <span class="badge badge-pill badge-warning" style="background: #FF0000; color:#e2e2e2"> Cancel </span>

                                                          @endif
                                                      </td>
                                                      <td class="order-action" style=" width:auto;">
                                                        <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-primary button   button-pill"><i class="fa fa-eye"></i> View</a> 
                                                        <a target="_blank" href="{{ url('user/invoice_download/'.$order->id ) }}" class="btn btn-sm btn-danger button-flat-royal button-pill" style="margin-top: 5px;"><i class="fa fa-download"></i> Invoice </a>
                                                      </td>
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                        </table>




                                        
                                    </fieldset>
                                </div>
                        </div>
                    </div>
                </div> 
            </div>


            


       
                

  

 
@endsection



