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
                            <li class="breadcrumb-item active" aria-current="page">Coupons  <span class="badge rounded-pill bg-warning text-dark"> {{ count($coupons) }}</span></li>
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
                          <h6 class="mb-0">Add Coupons</h6>
                        </div>
                        <div class="card-body">
                           <div class="row">
                             <div class="col-12 col-lg-4 d-flex">
                               <div class="card border shadow-none w-100">
                                 <div class="card-body">
                                   <form class="row g-3" method="POST" action="{{route('coupon.store')}}">
                                    @csrf 
                                    <div class="col-12">
                                       <label class="form-label">Coupon Name  </label>
                                       <input type="text" name="coupon_name" class="form-control" placeholder="Coupon name ">
                                     </div>
                                     @error('coupon_name')
                                        
                                              <div class="text-danger">{{$message}}</div>
                                          
                                     @enderror
                                     <div class="col-12">
                                      <label class="form-label">Coupon   Discount(%)</label>
                                      <input type="text" name="coupon_discount"class="form-control" placeholder="Coupon  Discount">
                                    </div>
                                    @error('coupon_discount')

                                        <div class="text-danger">{{$message}}</div>
                                          
                                     @enderror
                                    <div class="col-12">
                                      <label class="form-label">Coupon Validity</label>
                                      <input type="date" class="result form-control"  id="time" name="coupon_validity" placeholder=" Coupon Validity" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                    </div>
                                    @error('coupon_validity')
                                        
                                        <div class="text-danger">{{$message}}</div>
                                          
                                     @enderror
                                    
                                    <div class="col-12">
                                      <label class="form-label">Description</label>
                                      <textarea class="form-control" rows="3" cols="3" placeholder="Coupon Description"></textarea>
                                    </div>
                                    <div class="col-12">
                                      <div class="d-grid">
                                        <input class="btn btn-primary" type="submit" placeholder="Add Coupon">
                                      </div>
                                    </div>
                                   </form>
                                 </div>
                               </div>
                             </div>
                             <div class="col-12 col-lg-8 d-flex">
                              <div class="card border shadow-none w-100">
                                <div class="card-body">
                                  <div class="table-responsive">
                                     <table id="example2"  class="table align-middle table-striped table-bordered dataTable">
                                          <thead>
                                            <tr>
                                            <th>Coupon Name </th>
                                            <th>Coupon Discount</th>
                                            <th>Validity </th>
                                            <th>Status </th>
                                            <th>Action</th>
                                              
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($coupons as $item)
												<tr>
													<td> {{ $item->coupon_name }}  </td>
													<td> {{ $item->coupon_discount }}% </td>
                                                   
                                                 
												  <td width="25%">
													{{ Carbon\Carbon::parse($item->coupon_validity)->format('D, d F Y') }}
														  </td>
											 
													 <td>
														  @if($item->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
														  <span class="badge badge-pill bg-success"> Valid </span>
														  @else
														<span class="badge badge-pill bg-danger"> Invalid </span>
														  @endif
											 
													  </td>
											 
													 
																		  
												 
                                                  <td>
                                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                      <a href="{{route('coupon.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                      <a href="{{route('coupon.delete',$item->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" id="delete" ><i class="bi bi-trash-fill"></i></a>
                                                    </div>
                                                  </td>
                                                
                                                </tr>
                                            @endforeach
                                          </tbody>
                                          <tfoot>
                                            <tr>
                                            	<th>Coupon Name </th>
												<th>Coupon Discount</th>
												<th>Validity </th>
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