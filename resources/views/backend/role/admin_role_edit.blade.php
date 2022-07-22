 



 

@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center">
              <div class="breadcrumb-title pe-3 text-white">Pages</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt text-white"></i></a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Edit Admin user Profile</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-light">Settings</button>
                  <button type="button" class="btn btn-light split-bg-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
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
           
            <div class="profile-cover bg-dark"></div>

            <div class="row">
              <div class="col-12 col-lg-12">
                <div class="card shadow-sm border-0">
                  <div class="card-body">
                      <h5 class="mb-0">My Account</h5>
                      <hr>
                      
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">Admin Profile Edit</h6>
                        </div>
                        <div class="card-body">

                        <form class="row g-3" method="post" action="{{route('admin.user.update')}}" enctype="multipart/form-data">
                            @csrf

							<input type="hidden" name="id" value="{{ $adminuser->id }}">	
							 <input type="hidden" name="old_image" value="{{ $adminuser->profile_photo_path }}">

                            <div class="col-4">
                                <label class="form-label">Admin Username</label>
                                <input type="text" name="name" class="form-control" value="{{ $adminuser->name }}">
                             </div>
                             <div class="col-4">
                              <label class="form-label">Admin Email address</label>
                              <input type="email" name="email" class="form-control" value="{{ $adminuser->email }}">
                            </div>
							{{-- <div class="col-4">
								<label class="form-label">Admin password</label>
								<input type="password" name="password" class="form-control" value="">
							  </div> --}}
							<div class="col-4">
								<label class="form-label">Admin Phone</label>
								<input type="text" name="phone" class="form-control" value="{{ $adminuser->phone }}">
							  </div>
                            <div class="col-4">
                              <label for="formFile" class="form-label">Admin Upload image</label>
                              <input class="form-control" type="file" name="profile_photo_path" id="image">
                            </div>
                            <div class="col-4">
                            <img src="{{(!empty($editData->profile_photo_path))?url('upload/admin_images/'.$editData->profile_photo_path):url('upload/no_image.png')}}" class="rounded-circle shadow" id="showimage" width="120" height="120" alt="">

                            </div>
                          
                        </div>
                      </div>
                        <div class="card shadow-none border">
                          <div class="card-header">
                            <h6 class="mb-0">  Previlages</h6>
                          </div>
                          <div class="card-body">
                            <form class="row g-3">
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="brand" value="1" {{ $adminuser->brand == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Brand  </label>
									</div>
                              </div>
							  <div class="col-3">
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="category" value="1" {{ $adminuser->category == 1 ? 'checked' : '' }}>
									<label class="form-check-label" for="flexSwitchCheckDefault">  Category</label>
								</div>
						  	  </div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="product" value="1" {{ $adminuser->product == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">  Product</label>
									</div>
                              </div>
							  <div class="col-3">
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="slider" value="1" {{ $adminuser->slider == 1 ? 'checked' : '' }}>
									<label class="form-check-label" for="flexSwitchCheckDefault">Slider</label>
								</div>
						  	  </div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="coupons" value="1" {{ $adminuser->coupons == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Coupons  </label>
									</div>
                              </div>
							  <div class="col-3">
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="blog" value="1" {{ $adminuser->blog == 1 ? 'checked' : '' }}>
									<label class="form-check-label" for="flexSwitchCheckDefault">Blog</label>
								</div>
						  	  </div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="shipping" value="1" {{ $adminuser->shipping == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Shipping</label>
									</div>
								</div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="setting" value="1" {{ $adminuser->setting == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Setting</label>
									</div>
								</div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="returnorder" value="1" {{ $adminuser->returnorder == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Return Order</label>
									</div>
								</div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="review" value="1" {{ $adminuser->review == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Review</label>
									</div>
								</div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="orders" value="1" {{ $adminuser->orders == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Orders</label>
									</div>
								</div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="stock" value="1" {{ $adminuser->stock == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Stock</label>
									</div>
								</div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="reports" value="1" {{ $adminuser->reports == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Reports</label>
									</div>
								</div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="alluser" value="1" {{ $adminuser->alluser == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Alluser</label>
									</div>
								</div>
								<div class="col-3">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="adminuserrole" value="1"{{ $adminuser->adminuserrole == 1 ? 'checked' : '' }}>
										<label class="form-check-label" for="flexSwitchCheckDefault">Adminuserrole</label>
									</div>
								</div>
								
                              <div class="text-start">
                                <input type="submit" class="btn btn-primary px-4" value="Update">
                              </div>
                            </form>
                          </div>
                        </div>            

                  </div>
                </div>
              </div>
             
            </div><!--end row-->


<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showimage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

  });
</script>
    
@endsection