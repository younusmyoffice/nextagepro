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
                    <li class="breadcrumb-item active text-white" aria-current="page">User Profile</li>
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

                        <form class="row g-3" method="post" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-6">
                                <label class="form-label">Username</label>
                                <input type="text" name="name" class="form-control" value="{{$editData->name}}">
                             </div>
                             <div class="col-6">
                              <label class="form-label">Email address</label>
                              <input type="email" name="email" class="form-control" value="{{$editData->email}}">
                            </div>
                            <div class="col-6">
                              <label for="formFile" class="form-label">Upload image</label>
                              <input class="form-control" type="file" name="profile_photo_path" id="image">
                            </div>
                            <div class="col-6">
                            <img src="{{(!empty($editData->profile_photo_path))?url('upload/admin_images/'.$editData->profile_photo_path):url('upload/no_image.png')}}" class="rounded-circle shadow" id="showimage" width="120" height="120" alt="">

                            </div>
                          
                        </div>
                      </div>
                        <div class="card shadow-none border">
                          <div class="card-header">
                            <h6 class="mb-0">CONTACT INFORMATION</h6>
                          </div>
                          <div class="card-body">
                            <form class="row g-3">
                              <div class="col-12">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" value="47-A, city name, United States">
                              </div>
                              <div class="col-6">
                                  <label class="form-label">City</label>
                                  <input type="text" class="form-control" value="@jhon">
                              </div>
                              <div class="col-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" value="xyz@example.com">
                              </div>
                                <div class="col-6">
                                  <label class="form-label">Pin Code</label>
                                  <input type="text" class="form-control" value="jhon">
                              </div>
                              <div class="col-6">
                                  <label class="form-label">Last Name</label>
                                  <input type="text" class="form-control" value="Deo">
                              </div>
                              <div class="col-12">
                                <label class="form-label">About Me</label>
                                <textarea class="form-control" rows="4" cols="4" placeholder="Describe yourself..."></textarea>
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