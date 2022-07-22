 
@extends('admin.admin_master')
@section('admin')

           <!--breadcrumb-->
				            <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                      <div class="breadcrumb-title pe-3">eCommerce</div>
                      <div class="ps-3">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">  Order Details</li>
                          </ol>
                        </nav>
                      </div>
                      <div class="ms-auto">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary">Settings</button>
                          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--end breadcrumb-->
        
                      <div class="card">

                        <div class="card-body">
                           <div class="row">
                             
                                <div class="col-12 col-lg-6 d-flex">
                                    
                                  <div class="card border shadow-none w-100">
                                        <div class="card-header py-3">
                                          <h6 class="mb-0"> Shipping Details</h6>
                                        </div>
                                    <div class="card-body">
                                      <div class="table-responsive">
                                        <table id=" "  class="table align-middle table-striped table-bordered dataTable"> 
                                              <thead >
                                                <tr>
                                                    <th>Particulars </th>
                                                    <th>Details </th> 
                                                </tr>
                                              </thead>
                                              <tbody>
                                                
                                                    <tr>
                                                      <td> Shipping Name : </td>
                                                      <td> {{ $order->name }} </td>
                                                    </tr>
                                                    <tr>
                                                      <td> Shipping Phone : </td>
                                                      <td> {{ $order->phone }} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> Shipping Email : </td>
                                                      <td> {{ $order->email }} </td>
                                                    </tr>

                                                    <tr>
                                                      <td> Shipping Address : </td>
                                                      <td> {{ $order->shipping_address }} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> Division : </td>
                                                      <td> {{ $order->division->division_name  ??''}} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> District : </td>
                                                      <td> {{ $order->district->district_name ??''}} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> State : </td>
                                                      <td>{{ $order->state->state_name ??''}} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> Post Code : </td>
                                                      <td> {{ $order->post_code }} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> Order Date : </td>
                                                      <td> {{ $order->order_date }} </td>
                                                    </tr>

                                                    <tr>
                                                      <td> Order Total : </td>
                                                      <td>${{ $order->amount }} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> Order : </td>
                                                      <td>   
                                                        <span class="badge rounded-pill bg-info text-dark" style="background: #418DB9;">{{ $order->status }} </span> 
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>  </td>
                                                      <td> 
                                                        @if($order->status == 'pending')
                                                        <a href="{{ route('pending-confirm',$order->id) }}" class="btn btn-block btn-success" id="confirm">Confirm Order</a>
                                        
                                                        @elseif($order->status == 'confirm')
                                                        <a href="{{ route('confirm.processing',$order->id) }}" class="btn btn-block btn-success" id="processing">Processing Order</a>
                                        
                                                        @elseif($order->status == 'processing')
                                                        <a href="{{ route('processing.picked',$order->id) }}" class="btn btn-block btn-success" id="picked">Picked Order</a>
                                        
                                                        @elseif($order->status == 'picked')
                                                        <a href="{{ route('picked.shipped',$order->id) }}" class="btn btn-block btn-success" id="shipped">Shipped Order</a>
                                        
                                                        @elseif($order->status == 'shipped')
                                                        <a href="{{ route('shipped.delivered',$order->id) }}" class="btn btn-block btn-success" id="delivered">Delivered Order</a>
                                        
                                                        @endif
                                        
                                                        </td>
                                                    </tr>
                                                    
                                              </tbody>
                                              <tfoot >
                                                <tr>
                                                  <th>Particulars </th>
                                                  <th>Details </th>
                                                </tr>
                                              </tfoot>
                                              
                                        </table>
                                      </div>
                                  
                                    </div>
                                  </div>
                                </div>

                                <div class="col-12 col-lg-6 d-flex">
                                      
                                  <div class="card border shadow-none w-100">
                                    <div class="card-header py-3">
                                      <h6 class="mb-0"> Order Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger"> Invoice : {{ $order->invoice_no }}</span></h6>
                                    </div>
                                    <div class="card-body">
                                      <div class="table-responsive">
                                        <table id=" "  class="table align-middle table-striped table-bordered dataTable"> 
                                              <thead >
                                                <tr>
                                                    <th>Particulars </th>
                                                    <th>Details </th> 
                                                </tr>
                                              </thead>
                                              <tbody>
                                                
                                                    <tr>
                                                      <td>  Name : </td>
                                                      <td> {{ $order->user->name }} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td>  Phone : </td>
                                                      <td> {{ $order->user->phone }} </td>
                                                    </tr>


                                                    <tr>
                                                      <td > Payment Method  : </td>
                                                      <td class="text-warning"> {{ $order->payment_method }}</td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> Payment Type : </td>
                                                      <td class="text-warning"> {{ $order->payment_type }} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> Tranx ID : </td>
                                                      <td class="text-info"> {{ $order->transaction_id }} </td>
                                                    </tr>
                                        
                                                    <tr>
                                                      <td> Invoice  : </td>
                                                      <td class="text-danger"> {{ $order->invoice_no }} </td>
                                                    </tr> 

                                                    <tr>
                                                      <td > Order No. :</td>
                                                      <td class="text-secondary">  {{ $order->order_number }}</td>
                                                    </tr>

                                                    <tr>
                                                      <td > Payment ID : </td>
                                                      <td class="text-success">  {{ $order->payment_id }}</td>
                                                    </tr>
                                                    {{-- dd({{$order->card_id}})
                                                    if({{$order->card_id}}->count() != 0 )
                                                    { --}}
                                                      <tr>
                                                        <td  > card ID :</td>
                                                        <td class="text-success" > {{ $order->card_id }}</td>
                                                      </tr>
                                                    {{-- }else{}
                                                    if({{ $order->bank }}->isNotEmpty() )
                                                    { --}}
                                                    <tr>
                                                      <td  > bank :</td>
                                                      <td  class="text-success">  {{ $order->bank }}</td>
                                                    </tr>
                                                    {{-- }else{}
                                                    if({{ $order->wallet }}->isNotEmpty() )
                                                    { --}}
                                                    <tr>
                                                      <td  > wallet  : </td>
                                                      <td  class="text-info">  {{ $order->wallet }}</td>
                                                    </tr>
                                                    
                                                    {{-- }else{}
                                                    if({{ $order->rrn_no }}->isNotEmpty() )
                                                    { --}}
                                                    <tr>
                                                      <td  > rrn no  :</td>
                                                      <td  class="text-success">  {{ $order->rrn_no }}</td>
                                                    </tr>
                                                    <tr>
                                                      <td  > payment status  :</td>
                                                      <td  class="text-success">  {{ $order->payment_status }}</td>
                                                    </tr>
                                              
                                              </tbody>
                                              <tfoot style="text-align: center">
                                                <tr>
                                                  <th>Particulars </th>
                                                  <th>Details </th>
                                                </tr>
                                              </tfoot>
                                              
                                        </table>
                                      </div>
                                  
                                    </div>
                                  </div>
                                </div>
                           </div><!--end row-->
                            <div class="row">
                              <div class="col-12 col-lg-12 d-flex">
                                <div class="card border shadow-none w-100">
                                  <div class="card-body">
                                    <div class="table-responsive">
                                       <table id="example2"   class="table align-middle table-striped table-bordered dataTable"> 
                                            <thead >
                                              <tr>
                                                  <td width="10%">
                                                    <label for=""> Image</label>
                                                  </td>
                                  
                                                  <td width="20%">
                                                    <label for=""> Product Name </label>
                                                  </td>
                                  
                                                  <td width="10%">
                                                    <label for=""> Product Code</label>
                                                  </td>
                                        
                                        
                                                  <td width="10%">
                                                      <label for=""> Color </label>
                                                  </td>
                                        
                                                  <td width="10%">
                                                      <label for=""> Size </label>
                                                  </td>
                                        
                                                    <td width="10%">
                                                      <label for=""> Quantity </label>
                                                     </td>
                                        
                                                    <td width="10%">
                                                      <label for=""> Price </label>
                                                    </td>
                                                      
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($orderItem as $item)
                                                                        
                                                      <tr>
                                                      
                                                          <td width="10%">
                                                            <label for=""><img src="{{ asset($item->product->product_thambnail ?? ' ' ) }}" height="50px;" width="50px;"> </label>
                                                          </td>

                                                        <td width="20%">
                                                            <label for=""> {{ $item->product->product_name_en ?? ''}}</label>
                                                          </td>


                                                          <td width="10%">
                                                            <label for=""> {{ $item->product->product_code ?? ''}}</label>
                                                          </td>

                                                        <td width="10%">
                                                            <label for=""> {{ $item->color ?? ''}}</label>
                                                          </td>

                                                        <td width="10%">
                                                            <label for=""> {{ $item->size ?? ''}}</label>
                                                          </td>

                                                          <td width="10%">
                                                            <label for=""> {{ $item->qty ?? ''}}</label>
                                                          </td>

                                                          <td width="10%">
                                                            <label for=""> ${{ $item->price ?? ''}}  ( $ {{ $item->price * $item->qty ?? ''}} ) </label>
                                                          </td>
                                                          
                                                      </tr>
                                                  @endforeach
                                                </tbody>
                                                <tfoot >
                                                  <tr>
                                                    <td width="10%">
                                                      <label for=""> Image</label>
                                                    </td>
                                    
                                                    <td width="20%">
                                                      <label for=""> Product Name </label>
                                                    </td>
                                    
                                                    <td width="10%">
                                                      <label for=""> Product Code</label>
                                                    </td>
                                          
                                          
                                                    <td width="10%">
                                                        <label for=""> Color </label>
                                                    </td>
                                          
                                                    <td width="10%">
                                                        <label for=""> Size </label>
                                                    </td>
                                          
                                                      <td width="10%">
                                                        <label for=""> Quantity </label>
                                                       </td>
                                          
                                                      <td width="10%">
                                                        <label for=""> Price </label>
                                                      </td>
                                                  </tr>
                                                </tfoot>
                                                
                                          </table>
                                        </div>
                                    
                                      </div>
                                    </div>
                                  </div>
      </div>

  </div>
</div>


                      {{--  --}}
				{{-- <h6 class="mb-0 text-uppercase">DataTable Import</h6> --}}



@endsection