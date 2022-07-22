@extends('admin.admin_master')
@section('admin')

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
                          <h6 class="mb-0">Admin Profile Password</h6>
                        </div>
                        <div class="card-body">
                        
                        <form class="row g-3" method="post" action="{{route('update.change.password')}}" >
                            @csrf
                          
                             <div class="col-6">
                                <label for="current_password" value="{{ __('Current Password') }}"class="form-label">Current Password</label>
                                <input id="current_password" name="oldpassword" wire:model.defer="state.current_password" autocomplete="current-password"  type="password" class="form-control">
                             </div>
                             <div class="col-6">
                              <label for="password" value="{{ __('New Password') }}" class="form-label">New Password</label>
                              <input id="password" name="password"type="password" wire:model.defer="state.password" autocomplete="new-password"  class="form-control"  >
                            </div>
                            <div class="col-6">
                              <label for="password_confirmation" value="{{ __('Confirm Password') }}" class="form-label">Confirm Password</label>
                              <input id="password_confirmation" name="password_confirmation"type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password"  class="form-control"  >
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


    
@endsection