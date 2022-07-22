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
                            <li class="breadcrumb-item active" aria-current="page">Division</li>
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
                          <h6 class="mb-0">Add Division</h6>
                        </div>
                        <div class="card-body">
                           <div class="row">
                             <div class="col-12 col-lg-4 d-flex">
                               <div class="card border shadow-none w-100">
                                 <div class="card-body">
                                   <form class="row g-3" method="POST" action="{{route('division.store')}}">
                                    @csrf 
                                    <div class="col-12">
                                       <label class="form-label">Division Name  </label>
                                       <input type="text" name="division_name" class="form-control" placeholder="Division name ">
                                     </div>
                                     @error('division_name')
                                     
                                              <div class="text-danger">{{$message}}</div>
                                          
                                     @enderror
                                     
                                    
                                    
                                    <div class="col-12">
                                      <label class="form-label">Description</label>
                                      <textarea class="form-control" rows="3" cols="3" placeholder="subcategory Description"></textarea>
                                    </div>
                                    <div class="col-12">
                                      <div class="d-grid">
                                        <input class="btn btn-primary" type="submit" placeholder="Add subcategory">
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
												<th>Division Name </th> 
												 
                                              <th>Action</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
											@foreach($divisions as $item)
											<tr>
											   <td> {{ $item->division_name }}  </td> 
                                                  
                          
                                                  <td>
                                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                      <a href="{{route('division.edit',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                      <a href="{{route('division.delete',$item->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" id="delete" ><i class="bi bi-trash-fill"></i></a>
                                                    </div>
                                                  </td>
                                                
                                                </tr>
                                            @endforeach
                                          </tbody>
                                          <tfoot>
                                            <tr>
												<th>Division Name </th> 
												 
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


