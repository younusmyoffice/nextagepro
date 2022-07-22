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
                            <li class="breadcrumb-item active" aria-current="page">SubCategory</li>
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
                          <h6 class="mb-0">Edit subcategory</h6>
                        </div>
                        <div class="card-body">
                           <div class="row">
                             <div class="col-12 col-lg-12 d-flex">
                               <div class="card border shadow-none w-100">
                                 <div class="card-body">
                                   <form class="row g-3" method="POST" action="{{route('subcategory.update')}}">
                                    @csrf 
                                    <input type="hidden" name="id" value="{{$subcategory->id}}">
                                    
                                    <div class="col-12">
                                       <label class="form-label">subcategory Name English</label>
                                       <input type="text" name="subcategory_name_en" class="form-control" placeholder="subcategory name ENG" value="{{$subcategory->subcategory_name_en}}"> 
                                     </div>
                                     @error('subcategory_name_en')
                                        
                                              <div class="text-danger">{{$message}}</div>
                                          
                                     @enderror
                                     <div class="col-12">
                                      <label class="form-label">subcategory Name Hindi</label>
                                      <input type="text" name="subcategory_name_hin"class="form-control" placeholder="subcategory  name HIN" value="{{$subcategory->subcategory_name_hin}}">
                                    </div>
                                    @error('subcategory_name_hin')

                                        <div class="text-danger">{{$message}}</div>
                                          
                                     @enderror
                                    <div class="col-12">
                                      <label class="form-label">Category </label>
                                       
                                      <select name="category_id"class="form-select mb-3" aria-label="Default select example">
                                        <option selected="" value="" disabled=""> select category</option>
                                        @foreach ($categories as $category)
                                            
                                        <option value="{{$category->id}}" {{$category->id == $subcategory->category_id? 'selected':''}}>{{$category->category_name_en}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    @error('category_id')
                                        
                                        <div class="text-danger">{{$message}}</div>
                                          
                                     @enderror
                                    
                                    <div class="col-12">
                                      <label class="form-label">Description</label>
                                      <textarea class="form-control" rows="3" cols="3" placeholder="subcategory Description"></textarea>
                                    </div>
                                    <div class="col-12">
                                      <div class="d-grid">
                                        <input class="btn btn-primary" type="submit" value="Update"placeholder="Update subcategory">
                                      </div>
                                    </div>
                                   </form>
                                 </div>
                               </div>
                             </div>
                            
                           </div><!--end row-->
                        </div>
                      </div>


                      {{--  --}}
				{{-- <h6 class="mb-0 text-uppercase">DataTable Import</h6> --}}



@endsection