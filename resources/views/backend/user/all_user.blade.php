

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
                            <li class="breadcrumb-item active" aria-current="page">All Users</li>
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
                          <h6 class="mb-0">Total Users   <span class="badge rounded-pill bg-warning text-dark"> {{ count($users) }}</span></h6>
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
												<th>Image & Name </th>
												<th>Email</th>
												<th>Phone</th>
												<th>Status</th>
                        <th>Dealer </th>
                        <th>Discount</th>
												<th>Action</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
											@foreach($users as $user)
                                            
                                                <tr>
                                                  <td>{{$user->id}}</td>

     
                                                  <td>
                                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                      <img src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}"  class="product-box" width="44" height="44" alt="">
                                                      <div class="">
                                                        <p class="mb-0">  {{  $user->name  }}</p>
                                                      </div>
                                                    </div>
                                                  </td>
												 
												  <td>{{ $user->email }}</td>
												  <td>{{ $user->phone }}</td>

												

												<td>
													@if($user->UserOnline())
														<span class="badge rounded-pill bg-success"> Active Now </span>
													@else
														<span class="badge rounded-pill bg-danger">  {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}  </span>
													@endif
													 
												

												</td>
                        <td>
													{{-- @if($user->dealer == 1)
														<span class="badge rounded-pill bg-success"> Active </span>
													@else
														<span class="badge rounded-pill bg-danger"> InActive </span>
													@endif  --}}

                          @if($user->dealer == 0)
                          <span class="badge rounded-pill bg-success"> customer </span>
                        @elseif($user->dealer == 1)
                          <span class="badge rounded-pill bg-warning"> trainer </span>
                          @else
                          <span class="badge rounded-pill bg-danger"> dealer </span>
                        @endif 
												</td>
                        <td>
                          {{-- @if($user->dealer == 1)
                          <a href="{{ route('dealer.inactive',$user->id) }}" class="btn btn-danger btn-sm" title="Inactive Now" style="text-align: right;"> &nbsp; <i class="lni lni-power-switch"></i> &nbsp; Off </a>
                            @else
                          <a href="{{ route('dealer.active',$user->id) }}" class="btn btn-success btn-sm" title="Active Now"> &nbsp; <i class="lni lni-power-switch"></i> &nbsp; On</a>
                            @endif --}}


                            @if($user->dealer == 0)
                          <a href="{{ route('customer.active',$user->id) }}" class="btn btn-success btn-sm" title="Active Now"> &nbsp; <i class="lni lni-power-switch"></i>  customer </a>
                            @elseif($user->dealer == 1)
                          <a href="{{ route('trainer.active',$user->id) }}" class="btn btn-warning btn-sm" title="Active Now"> &nbsp; <i class="lni lni-power-switch"></i> trainer</a>
                            @else
                          <a href="{{ route('dealer.active',$user->id) }}" class="btn btn-danger btn-sm" title="Active Now"> &nbsp; <i class="lni lni-power-switch"></i>  Dealer</a>
                            @endif
												 
                        </td>


                          
                          <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                              {{-- <a href=" " class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a> --}}
                              <a href=" " class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill">edit</i></a>
                              <a href="" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" id="delete" ><i class="bi bi-trash-fill"></i></a>
    
                            
 

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
												<th>Phone</th>
                        <th>Status</th>
												<th>Dealer</th>
                        <th> Discount</th>
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