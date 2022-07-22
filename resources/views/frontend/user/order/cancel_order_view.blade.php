 






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
            <div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
              <h3 class="page-subtitle font-weight-bold"> </h3>
              <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">Cancelled Orders   </h1>
              <p class="page-desc text-white mb-0"> Cancelled  Order History </p>
            </div>
</div><br>
            <div class="page-content mt-4 mb-10 pb-6">
                <div class=" " style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                    <h2 class="title title-center mb-10">Cancelled Orders </h2>
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
                                                <th class="col-md-1">
                                                  Date
                                                </th>
                                
                                                <th class="col-md-3">
                                                  Total
                                                </th>
                                
                                                <th class="col-md-3">
                                                  Payment
                                                </th>
                                
                                
                                                <th class="col-md-2">
                                                  Invoice
                                                </th>
                                
                                                 <th class="col-md-1">
                                                  Order   
                                                </th>
                                
                                                 <th class="col-md-2">
                                                  Action  
                                                </th>  
                                              </tr>
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center;" ><tr><td></td></tr>
                                          
                                              @forelse($orders as $order)
                                              <tr>
                                                  <td class="order-number  "><a href="#">{{ $order->order_date }}</a></td>
                                                  <td class="order-number"><span>Rs.{{ $order->amount }}</span></td>
                                                  <td class="order-status"><span>{{ $order->payment_method }}</span></td>
                                                  <td class="order-total"><span>{{ $order->invoice_no }}</span></td>
                                                   <td class="order-status">
                                                        
                                                          <span class="btn btn-rounded btn-outline btn-secondary " style="background: #418DB9;">{{ $order->status }} </span>
                                      
                                                          
                                                      </td>
                                      
                                                        <td  class="order-action">
                                                        <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn  btn-primary button   button-pill"><i class="fa fa-eye"></i> View</a>
                                              
                                                          <a target="_blank" href="{{ url('user/invoice_download/'.$order->id ) }}" class="btn btn-sm btn-danger  button-flat-royal button-pill" style="margin-top: 5px;"><i class="fa fa-download" style="color: white;"></i> Invoice </a>
                                                        
                                                      </td>
                                                      
                                                    </tr>
                                                      <tr>
                                                        <td> @empty
                                                          <h5 class="text-danger">Order Not Found</h5>
                                            
                                                          @endforelse
                                                        </td>
                                                      </tr>
                                                   
                                      
                                      
                                      
                                      
       
                                            
                                        </tbody>
                                      </table>
                                  </fieldset>
                                </div>
                            </div>

                            



                            
                       
                        
                          </div>

                </div> 
            </div>

 
@endsection


