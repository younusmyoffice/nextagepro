
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
    <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">My   Account     </h1>
    <p class="page-desc text-white mb-0"> My Account      </p>
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


                        <div class="tab-content col-lg-9 col-md-8">
                          
                            <div class="" id="profile" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;">
                                <h1>My Profile</h1>
                                <form class="form" method="POST" action="{{  route('user.profile.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    {{-- <div class="row">
                                        <div class="col-sm-6">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control" name="first_name" required="" value="{{$user->name}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control" name="last_name" required="">
                                        </div>
                                    </div> --}}
                                    <fieldset>
                                        <label>Display Name *</label>
                                        <input type="text" class="form-control mb-0" name="name" required="" value="{{$user->name}}">
                                        <small class="d-block form-text mb-7">This will be how your name will be displayed
                                            in the account section and in reviews</small>

                                        <label>Email Address *</label>
                                        <input id="email"type="email" class="form-control" name="email" required="" value="{{$user->email}}">
                                        <label>Phone *</label>
                                        <input id="phone"type="phone" class="form-control" name="phone" required="" value="{{$user->phone}}">
                                        <label>Photo *</label>
                                        <input type="file" class="form-control" name="profile_photo_path" required="">
                                        <button type="submit" class="btn btn-primary btn-rounded btn-md ml-2">SAVE CHANGES</button>
                                    </fieldset>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>


       
                

  

 
@endsection