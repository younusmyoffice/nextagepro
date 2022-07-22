

@extends('frontend.master')
@section('content')


            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li><a href="shop.html">Riode Shop</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content mt-6 pb-2 mb-10">
                <div class="container">
                    <div class="login-popup">
                        <div class="form-box">
                            <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Login</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="signin">
                                    <form method="POST" action="{{ route('password.update') }}">
                                          @csrf
                                          <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                        <div class="form-group mb-3">
                                            <input   class="form-control" value="{{ __('Email') }}"
                                                id="email"  type="email" name="email" :value="old('email', $request->email)" required autofocus/>
                                                
                                                @error('email')
                                                <span class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control"  placeholder=" New Password *"  
                                                id="password"  type="password" name="password" required autocomplete="new-password" />
                                        </div>
                                                @error('password')
                                                <span class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                        
                                        <div class="form-group">
                                            <input  class="form-control"  placeholder="Confirm Password *"   
                                            id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>
                                                @error('password_confirmation')
                                                <span class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
                                      
                                        
                                        <button class="btn btn-dark btn-block btn-rounded"
                                            type="submit"> {{ __('Reset Password') }}</button>
                                    </form>
                                    

                                         
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
@endsection
