



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
                            <li class="breadcrumb-item active" aria-current="page">Pending Reviews  <span class="badge rounded-pill bg-warning text-dark"> {{ count($review) }}</span></li>
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
                          <h6 class="mb-0">Pending Reviews List</h6>
                        </div>
                        <div class="card-body">
                           <div class="row">
                             
                             <div class="col-12 col-lg-12 d-flex">
                              <div class="card border shadow-none w-100">
                                <div class="card-body">
                                  <div class="table-responsive">
                                     <table id="example2"  class="table align-middle table-striped table-bordered dataTable"> 
                                          <thead >
                                            <tr>
												<th>Summary  </th>
												<th>Comment </th>
												<th>User </th>
												<th>Product  </th>
												<th>Status </th>
												<th>Action</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($review as $item)
                                            
                                                <tr>
													<td> {{ $item->summary }}  </td>
													<td> {{ $item->comment }}  </td>
													<td>  {{ $item->user->name }}  </td>
											
													<td class="text-danger"> {{ $item->product->product_name_en }}  </td>
													<td>
														@if($item->status == 0)
													  <span class="badge rounded-pill bg-info text-dark">Pending </span>
													   @elseif($item->status == 1)
													   <span class="badge rounded-pill bg-success">Publish </span>
														@endif
												
													</td>
												  <td>
												   
                                                    <div class="table-actions d-flex align-items-center gap-3 fs-6" >
													
															<a href="{{ route('review.approve',$item->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Approve"><i class="bi bi-pencil-fill"> Approve</i> </a>
															{{-- <a href="{{ route('coupon.delete',$item->id) }}"  class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" id="delete">
																<i class="bi bi-trash-fill"></i> Delete</a> --}}
															{{-- <a target="_blank" href="{{ route('invoice.download',$item->id) }}" class="text-success" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Invoice Download">
																<i class="bi bi-cloud-download-fill me-0"></i> Invoice</a>  --}}
																{{-- <a target="_blank" href="{{ route('invoice.download',$item->id) }}" class="text-success" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Invoice Download">
																	<i class="bi bi-download"></i> Invoice</a> --}}
															 
														</div>
                                                  </td>
                                                
                                                </tr>
                                            @endforeach
                                          </tbody>
                                          <tfoot >
                                            <tr>
												<th>Summary  </th>
												<th>Comment </th>
												<th>User </th>
												<th>Product  </th>
												<th>Status </th>
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








