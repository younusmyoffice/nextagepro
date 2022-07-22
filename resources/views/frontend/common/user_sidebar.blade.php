@php

    $id = Auth::user()->id;
    $user = App\Models\User::find($id);


// $user = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp

<ul class="nav nav-tabs mb-4 col-lg-3 col-md-4 widget-body filter-items search-ul grey-section d-flex align-items-center h-100" role="tablist" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;">

<li class="nav-item">
	<img class="title-center" src="{{(!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" width='100px' height='100px' alt="">
</li>
<li class="nav-item">
	<a class="" href="{{ route('dashboard') }}">Dashboard</a>
</li>
<li class="nav-item">
	<a class="" href="{{route('user.profile')}}">User Profile</a> 
</li>{{-- <a class="nav-link" href="#myorders">My Orders</a> --}}

<li class="nav-item">	
	<a class="" href="{{ route('user.change.password') }}">Change Password</a>
</li>
<li class="nav-item">
	<a class="" href="{{ route('my.orders') }}">My Orders</a>
</li>
<li class="nav-item">
	<a class="" href="{{ route('return.order.list') }}" class="btn btn-primary btn-sm btn-block">Return Orders</a>
</li>
<li class="nav-item">
	<a class="" href="{{ route('cancel.orders') }}" class="btn btn-primary btn-sm btn-block">Cancel Orders</a>
</li>
<li class="nav-item">
	<a class="" href="{{ route('user.logout') }}">Logout</a>
</li>
{{-- <li class="nav-item">
	<img class="title-center" src="{{(!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" width='100px' height='100px' alt="">
</li>
<li class="nav-item ">
	<a class="nav-link text-primary active" href="#dashboard">Dashboard</a>
</li>

<li class="nav-item">
	<a class="nav-link" href="#profile">User Profile</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="#myorders">My Orders</a>
	 <a  href="{{ route('my.orders') }}">My Orders</a> 
</li>
<li class="nav-item">
	<a class="nav-link" href="#password">Change Password</a>
</li>
<li class="nav-item ">
	<a class="nav-link" href="#logout">Logout</a>
</li> --}}

</ul>





{{-- <div class="col-md-2"><br> 
				<img class="card-img-top" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" height="100%" width="100%"><br><br>
				
				<ul class="list-group list-group-flush">
<a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>

<a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>

<a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password </a>

<a href="{{ route('my.orders') }}" class="btn btn-primary btn-sm btn-block">My Orders</a>

<a href="{{ route('return.order.list') }}" class="btn btn-primary btn-sm btn-block">Return Orders</a>

<a href="{{ route('cancel.orders') }}" class="btn btn-primary btn-sm btn-block">Cancel Orders</a>

<a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
					
				</ul>
				
			</div>  --}}
			<!-- // end col md 2 -->
