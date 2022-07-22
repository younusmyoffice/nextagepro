 




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
                            <li class="breadcrumb-item active" aria-current="page">All  Admin Users</li>
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
                          <h6 class="mb-0">Admin Users   <span class="badge rounded-pill bg-warning text-dark"> {{ count($adminuser) }}</span></h6>
                        </div>
                        <div class="card-body">
                           <div class="row"> 
							 
								<div class="ms-auto">
									<div class="btn-group">
									{{-- <button type="button" class="btn btn-primary">Settings</button> --}}
									<a href="{{ route('add.admin') }}" class="btn btn-primary" style="float: right;">Add Admin User</a>
									
									</div>
								</div><br><br><br>
                             <div class="col-12 col-lg-12 d-flex">
                              <div class="card border shadow-none w-100">
                                <div class="card-body">
                                  <div class="table-responsive">
                                     <table id="example2"  class="table align-middle table-striped table-bordered dataTable">
                                          <thead>
                                            <tr>
												<th></th>
												<th>Image & Name </th>
												<th>Email</th>
												{{-- <th>Phone</th> --}}
												<th>Access</th>
												<th>Action</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
											@foreach($adminuser as $item)
                                            
                                                <tr>
                                                  <td>{{$item->id}}</td>

     
                                                  <td>
                                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                      <img src="{{ asset($item->profile_photo_path) }}"  class="product-box" width="44" height="44" alt="">
                                                      <div class="">
                                                        <p class="mb-0">  {{  $item->name  }}</p>
                                                      </div>
                                                    </div>
                                                  </td>
												 
												  <td>{{ $item->email }}</td>
												  {{-- <td>{{ $user->phone }}</td> --}}
												  <td>
													@if($item->brand == 1)
														<span class="badge btn-primary">Brand</span>
													@else
													@endif
										
													@if($item->category == 1)
														<span class="badge btn-secondary">Category</span>
													@else
													@endif
										
										
													@if($item->product == 1)
														<span class="badge btn-success">Product</span>
													@else
													@endif
										
										
													@if($item->slider == 1)
														<span class="badge btn-danger">Slider</span>
													@else
													@endif
										
										
													@if($item->coupons == 1)
														<span class="badge btn-warning">Coupons</span>
													@else
													@endif
										
										
													@if($item->shipping == 1)
														<span class="badge btn-info">Shipping</span>
													@else
													@endif
										
										
													@if($item->blog == 1)
														<span class="badge btn-light">Blog</span>
													@else
													@endif
										
										
													@if($item->setting == 1)
														<span class="badge btn-dark">Setting</span>
													@else
													@endif
										
										
													@if($item->returnorder == 1)
														<span class="badge btn-primary">Return Order</span>
													@else
													@endif
										
										
													@if($item->review == 1)
														<span class="badge btn-secondary">Review</span>
													@else
													@endif
										
										
													@if($item->orders == 1)
														<span class="badge btn-success">Orders</span>
													@else
													@endif
										
													@if($item->stock == 1)
														<span class="badge btn-danger">Stock</span>
													@else
													@endif
										
													@if($item->reports == 1)
														<span class="badge btn-warning">Reports</span>
													@else
													@endif
										
													@if($item->alluser == 1)
														<span class="badge btn-info">Alluser</span>
													@else
													@endif
										
													@if($item->adminuserrole == 1)
														<span class="badge btn-dark">Adminuserrole</span>
													@else
													@endif
										 
										
												  </td>
								
                                                  <td>
                                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                      {{-- <a href=" " class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a> --}}
                                                      <a href=" {{ route('edit.admin.user',$item->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill">edit</i></a>
                                                      <a href="{{ route('delete.admin.user',$item->id) }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" id="delete" ><i class="bi bi-trash-fill"></i>delete</a>
														
													</div>
                                                  </td>
                                                
                                                </tr>
                                            @endforeach
                                          </tbody>
                                          <tfoot>
                                            <tr>
												<th></th>
												<th>Image & Name </th>
												<th>Email</th>
												{{-- <th>Phone</th> --}}
												<th>Access</th>
												<th>Action</th>
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