


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
</div>
<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
  <h3 class="page-subtitle font-weight-bold"> </h3>
  <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">Return Orders   </h1>
  <p class="page-desc text-white mb-0"> Return  Order History </p>
</div>
            <div class="page-content mt-4 mb-10 pb-6" >
                <div class=" " style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                    <h2 class="title title-center mb-10">Return Orders    </h2>
                    <div class="tab tab-vertical gutter-lg">
                     
                            @include('frontend.common.user_sidebar')

                             
                            <div class="tab-content col-lg-9 col-md-4">
                                  <div class="tab-pane active in" id="myorders" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
 
                                    {{-- <p> <span class="text-danger"> Invoice : {{ $order->invoice_no }}</span></p> --}}
                                     
                                    <fieldset >
                                      <table class="shop-table wishlist-table mt-2 mb-4 table">
                                        <thead>
                                            <tr style="height:50px;text-align:center;padding: 400px;" style="color: rgb(88, 88, 88);" >
                                                {{-- <th class="pl-2" >Date</th> --}}
                                                <th class="">
                                                  Date
                                                </th>
                                
                                                <th class="">
                                                  Total
                                                </th>
                                
                                                <th class="">
                                                  Payment
                                                </th>
                                
                                
                                                <th class="">
                                                  Invoice
                                                </th>
                                
                                                 <th class="">
                                                  Order Reason 
                                                </th>
                                
                                                 <th class="">
                                                  Order Status
                                                </th>  
                                              </tr>
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center;" >
                                          
                                            @foreach ($orders as $order) 
                                            <tr>
                                              <td class="order-number  "><a href="#">{{ $order->order_date }}</a></td>
                                                <td class="order-number"><span>Rs.{{ $order->amount }}</span></td>
                                                <td class="order-status"><span>{{ $order->payment_method }}</span></td>
                                                <td class="order-total"><span>{{ $order->invoice_no }}</span></td>
                                                {{-- <td class="order-total"><span>{{ $order->order_no }}</span></td> --}}
                        
                                                <td class="">  {{ $order->return_reason }}  </td>
                              
                                               <td class="order-status">
                                                 
                              
                                                    @if($order->return_order == 0) 
                                                        <span class="btn btn-rounded btn-outline " style="background: #418DB9;"> No Return Request </span>
                                                  @elseif($order->return_order == 1)
                                                         <span class=" btn btn-rounded btn-outline btn-secondary "  > Pending </span> 
                                                          <span class="btn btn-rounded btn-outline btn-alert " >Return Request </span>
                                                  
                                                  @elseif($order->return_order == 2)
                                                         <span class="btn btn-rounded btn-outline btn-success">Success </span>
                                                    @endif
                                                                      
                              
                                                  
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


