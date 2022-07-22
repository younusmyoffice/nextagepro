


@extends('frontend.master')
@section('content')
@php
$user = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp
<div style=" box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li>Account</li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
            <h3 class="page-subtitle font-weight-bold"> </h3>
            <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">My Dashboard     </h1>
            <p class="page-desc text-white mb-0"> Dashboard      </p>
          </div>
            <div class="page-content mt-4 mb-10 pb-6" >
                <div class="" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 30px solid White;" >
                    <h2 class="title title-center mb-10">My Account</h2>
                    <div class="tab tab-vertical gutter-lg" >
                        

                            @include('frontend.common.user_sidebar')


                        <div class="tab-content col-lg-9 col-md-8" >
                            <div class="tab-pane active" id="dashboard" >
                                <h1>Hello <span>{{ Auth::user()->name }}</h1>
                                <p class="mb-0 widget-title">
                                    </span> (not <span>User</span>? <a href="{{ route('user.logout') }}" class="text-primary">Log
                                        out</a>)
                                </p>
                                <p class="mb-8">
                                    From your account dashboard you can view your
                                    <a href="#orders" class="link-to-tab text-primary">recent orders, manage your
                                        shipping and
                                        billing
                                        addresses,<br>and edit your password and account details</a>.
                                </p>
                                <a href="{{url('shop')}}" class="btn btn-dark btn-rounded">Go To Shop<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                            {{-- <div class="tab-pane" id="myorders">
                                <table class="order-table">
                                    <thead>
                                        <tr>
                                            <th class="pl-2">Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th class="pr-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order) 
                                            <tr>
                                                <td class="order-number"><a href="#">{{ $order->order_date }}</a></td>
                                                <td class="order-date"><span>{{ $order->amount }}</span></td>
                                                <td class="order-status"><span>{{ $order->payment_method }}</span></td>
                                                <td class="order-total"><span>{{ $order->invoice_no }}</span></td>
                                                <td class="order-action"><a href="#"
                                                        class="btn btn-primary btn-link btn-underline">View</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="downloads">
                                <p class="mb-4 text-body">No downloads available yet.</p>
                                <a href="#" class="btn btn-primary btn-link btn-underline">Browser Products<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                            <div class="tab-pane" id="address">
                                <p class="mb-2">The following addresses will be used on the checkout page by default.
                                </p>
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div class="card card-address">
                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase">Billing Address</h5>
                                                <p>John Doe<br>
                                                    Riode Company<br>
                                                    Steven street<br>
                                                    El Carjon, CA 92020
                                                </p>
                                                <a href="#" class="btn btn-link btn-secondary btn-underline">Edit <i
                                                        class="far fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <div class="card card-address">
                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase">Shipping Address</h5>
                                                <p>You have not set up this type of address yet.</p>
                                                <a href="#" class="btn btn-link btn-secondary btn-underline">Edit <i
                                                        class="far fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <form action="#" method="POST" class="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control" name="first_name" required="">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control" name="last_name" required="">
                                        </div>
                                    </div>

                                    <label>Display Name *</label>
                                    <input type="text" class="form-control mb-0" name="display_name" required="">
                                    <small class="d-block form-text mb-7">This will be how your name will be displayed
                                        in the account section and in reviews</small>

                                    <label>Email Address *</label>
                                    <input type="email" class="form-control" name="email" required="">
                                    <fieldset>
                                        <legend>Password Change</legend>
                                        <label>Current password (leave blank to leave unchanged)</label>
                                        <input type="password" class="form-control" name="current_password">

                                        <label>New password (leave blank to leave unchanged)</label>
                                        <input type="password" class="form-control" name="new_password">

                                        <label>Confirm new password</label>
                                        <input type="password" class="form-control" name="confirm_password">
                                    </fieldset>

                                    <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                                </form>
                            </div>
                            <div class="tab-pane" id="profile">
                                <form class="form" method="POST" action="{{  route('user.profile.store') }}" enctype="multipart/form-data">
                                    @csrf
                          
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
                                        
                                    </fieldset>

                                    <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                                </form>
                            </div>
                            <div class="tab-pane" id="password">
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
                                    </fieldset>

                                    <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                                </form>
                            </div>
                            <div class="tab-pane" id="logout">
                                
                                    <a href="{{ route('user.logout') }}" class="btn btn-dark btn-rounded">logout<i
                                        class="d-icon-arrow-right"></i></a>
                               
                            </div> --}}


                        </div>
                    </div>
                </div> 
            </div>


       
                

  

 
@endsection