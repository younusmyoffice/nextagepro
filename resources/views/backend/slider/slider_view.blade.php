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
                            <li class="breadcrumb-item active" aria-current="page">Sliders List</li>
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
                          <h6 class="mb-0">Add Slider</h6>
                        </div>
                        <div class="card-body">
                           <div class="row">
                             <div class="col-12 col-lg-4 d-flex">
                               <div class="card border shadow-none w-100">
                                 <div class="card-body">
                                   <form class="row g-3" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="col-12">
                                       <label class="form-label">Slider Title</label>
                                       <input type="text" name="title" class="form-control" placeholder="title">
                                     </div>
                                    
                                     <div class="col-12">
                                      <label class="form-label">Slider Decription</label>
                                      <input type="text" name="description"class="form-control" placeholder="description">
                                    </div>
                                     
                                    <div class="col-12">
                                      <label class="form-label">Slider Image</label>
                                      <input type="file" name="slider_img"class="form-control" placeholder=" Slider Image">
                                    </div>
                                    @error('slider_img')
                                        
                                        <div class="text-danger">{{$message}}</div>
                                          
                                     @enderror
                                    
                                     
                                    <div class="col-12">
                                      <div class="d-grid">
                                        <input class="btn btn-primary" type="submit" placeholder="Add Slider">
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
                                     <table id="example2"  class="table align-middle">
                                          <thead>
                                            <tr>
                                                {{-- <th>Sl No</th> --}}
                                                <th>Slider Image </th>
                                                <th>Title</th>
                                                <th>Decription</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($sliders as $item)
                                            
                                                <tr>
                                                  {{-- <td>{{$item->id}}</td> --}}
												  
                                                  <td>
                                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                      <img src="{{asset($item->slider_img)}}" class="rounded-circle" width="44" height="44" alt="">
                                                     
                                                    </div>
                                                  </td>
												  <td>
													@if($item->title == NULL)
													<span class="badge badge-pill badge-danger"> No Title </span>
													@else
													{{ $item->title }}
													@endif
												  </td>
												  <td>{{ $item->description }}</td>
												  <td>
													@if($item->status == 1)
														<span class="badge badge-pill bg-success"> Active </span>
													@else
												 		<span class="badge badge-pill bg-danger"> InActive </span>
													@endif
									   
												  </td>
                          
                                                  <td>
                                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                      <a href="{{route('slider.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                      <a href="{{route('slider.delete',$item->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" id="delete" ><i class="bi bi-trash-fill"></i></a>

														@if($item->status == 1)
														<a href="{{ route('slider.inactive',$item->id) }}" class="btn btn-danger btn-sm" title="Inactive Now"><i class="lni lni-power-switch"></i> &nbsp; Off</a>
															@else
														<a href="{{ route('slider.active',$item->id) }}" class="btn btn-success btn-sm" title="Active Now"><i class="lni lni-power-switch"></i> &nbsp; On </a>
															@endif

                                                    </div>
                                                  </td>
                                                
                                                </tr>
                                            @endforeach
                                          </tbody>
                                          <tfoot>
                                            <tr>
                                              {{-- <th>Sl No</th> --}}
                                              <th>Slider Image </th>
                                              <th>Title</th>
                                              <th>Decription</th>
                                              <th>Status</th>
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

 


@endsection