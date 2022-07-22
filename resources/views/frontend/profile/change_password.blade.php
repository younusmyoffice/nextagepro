
@extends('frontend.master')
@section('content')

<div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
                <li>Account</li>
            </ul>
        </div>
    </nav>
</div><br>
<div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
    <h3 class="page-subtitle font-weight-bold"> </h3>
    <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">  Change password   </h1>
    <p class="page-desc text-white mb-0"> Change password      </p>
  </div>

            <div class="page-content mt-4 mb-10 pb-6">
                <div class=" " style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                    <h2 class="title title-center mb-10">My Account</h2>
                    <div class="tab tab-vertical gutter-lg">
                     
                            @include('frontend.common.user_sidebar')

                            {{-- <li class="nav-item">
                                <img class="title-center" src="{{(!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" width='100px' height='100px' alt="">
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-primary active" href="{{route('dashboard')}}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('user.change.password')}}">Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('user.profile')}}">User Profile</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                            </li> --}}

                            
                        
                        <div class="tab-content col-lg-9 col-md-8" >
                          
                            <div class="" id="profile" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                                <h1>Change password</h1>
                                <form class="form" method="POST" action="{{ route('user.update.password') }}">
                                    @csrf
                                   
                                    <fieldset>
                                        <legend>Your Password  </legend>
                                        <label>Current Password </label>
                                        <input  id="current_password" type="password" name="oldpassword" class="form-control" wire:model.defer="state.current_password" autocomplete="current-password" />
                                        
                                        @error('password')
                                        <span class="invalid-feedback">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror

                                        <label>New password </label>
                                        <input class="form-control"  placeholder=" New Password *"  
                                        id="password" type="password"  name="password" wire:model.defer="state.password" autocomplete="new-password" />
                                        
                                                @error('password')
                                                <span class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror

                                        <label>Confirm new password</label>
                                        <input  class="form-control"  placeholder="Confirm Password *"   
                                        id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" />
                                        @error('password_confirmation')
                                        <span class="invalid-feedback">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror

                                        <button type="submit" class="btn btn-primary btn-rounded btn-md ml-2">SAVE CHANGES</button>
                                    </fieldset>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>


       
                

  

 
@endsection