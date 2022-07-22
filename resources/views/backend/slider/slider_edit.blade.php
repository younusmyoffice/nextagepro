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
                                   <form class="row g-3" method="POST" action="{{route('slider.update')}}" enctype="multipart/form-data">
                                    @csrf 

									<input type="hidden" name="id" value="{{ $sliders->id }}">	
									<input type="hidden" name="old_image" value="{{ $sliders->slider_img }}">			   
							   
                                    <div class="col-12">
                                       <label class="form-label">Slider Title</label>
                                       <input type="text" name="title" class="form-control" value="{{ $sliders->title }}" >
                                     </div>
                                    
                                     <div class="col-12">
                                      <label class="form-label">Slider Decription</label>
                                      <input type="text" name="description"class="form-control" value="{{ $sliders->description }}" >
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
                                        <input class="btn btn-primary" type="submit" value="Update">
                                      </div>
                                    </div>
                                   </form>
                                 </div>
                               </div>
                             </div>
                             
                           </div><!--end row-->
                        </div>
                      </div>

  
@endsection