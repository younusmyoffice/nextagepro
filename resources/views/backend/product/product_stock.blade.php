 

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
                            <li class="breadcrumb-item active" aria-current="page">Product  Stock list</li>
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
                        <div class="card-header py-3">
                          <h6 class="mb-0">Product Stock List   <span class="badge rounded-pill bg-warning text-dark"> {{ count($products) }}</span> </h6>
                        </div>
                        <div class="card-body">
                           <div class="row"> 
                             <div class="col-12 col-lg-12 d-flex">
                              <div class="card border shadow-none w-100">
                                <div class="card-body">
                                  <div class="table-responsive">
                                     <table id="example2"  class="table align-middle table-striped table-bordered dataTable">
                                          <thead>
                                            <tr>
												<th></th>
												<th>Image  & Product En</th>
												<th>Product Price </th>
												<th>Quantity </th>
												<th>Discount </th>
												<th>Status </th>
                        <th>Action </th>
												
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($products as $item)
                                            
                                                <tr>
                                                  <td>{{$item->id}}</td>

     
                                                  <td>
                                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                      <img src="{{ asset($item->product_thambnail) }}"  class="product-box" width="44" height="44" alt="">
                                                      <div class="">
                                                        <p class="mb-0">  {{ $item->product_name_en }}</p>
                                                      </div>
                                                    </div>
                                                  </td>
												 
												<td>{{ $item->selling_price }} $</td>
												<td>{{ $item->product_qty }} pc</td>

												<td> 
													@if($item->discount_price == NULL)
													<span class="text-danger">No Discount</span>

													@else
													@php
													$amount = $item->selling_price - $item->discount_price;
													$discount = ($amount/$item->selling_price) * 100;
													@endphp
													<span class="text-danger">{{ round($discount)  }} %</span>

													@endif



												</td>

												<td>
													@if($item->status == 1)
														<span class="badge rounded-pill bg-success"> Active </span>
													@else
														<span class="badge rounded-pill bg-danger"> InActive </span>
													@endif
													{{-- @if($item->status == 1)
													<a href="{{ route('product.inactive',$item->id) }}" class="text-danger" title="Inactive Now"> &nbsp; <i class="lni lni-power-switch"></i> &nbsp; Off </a>
														@else
													<a href="{{ route('product.active',$item->id) }}" class="text-success" title="Active Now"> &nbsp; <i class="lni lni-power-switch"></i> &nbsp; On</a>
														@endif --}}
												

												</td>


                          
                                                  <td>
                                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                      <a href="{{ route('product.edit',$item->id) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                      <a href="{{route('product.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill">edit</i></a>
                                                      <a href="{{route('product.delete',$item->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" id="delete" ><i class="bi bi-trash-fill"></i></a>
														
													</div>
                                                  </td>
                                                
                                                </tr>
                                            @endforeach
                                          </tbody>
                                          <tfoot>
                                            <tr>
												<th></th>
												<th>Image  & Product En</th>
												<th>Product Price </th>
												<th>Quantity </th>
												<th>Discount </th>
												<th>Status </th>
                        <th>Action </th>
												
                                            </tr>
                                          </tfoot>
                                          
                                     </table>
                                  </div>
                               
                                </div>
                              </div>
                            </div>
                           </div><!--end row-->
                        </div>
                      </div>


                      {{--  --}}
				{{-- <h6 class="mb-0 text-uppercase">DataTable Import</h6> --}}


 


@endsection