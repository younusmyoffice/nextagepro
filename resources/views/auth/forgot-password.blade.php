
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
            <h2 class="title title-center title-descri mb-2">Forgot your password? </h2>
            <p class="text-body text-center title-descri pb-2 pb-4">  No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

            <div class="page-content mt-6 pb-2 mb-10">
                <div class="container">
                    <div class="login-popup">
                        <div class="form-box">
                            <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Your Email </a>
                                    </li>
                                    <li></li>
                                </ul>
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="tab-content">
                                    <div class="tab-pane active" id="signin">
                                        <form method="POST" action="{{ route('password.email') }}">
                                               @csrf
                                            <div class="form-group mb-3">
                                                <input class="form-control" placeholder="Username or Email Address *"
                                                    id="email"    type="email" name="email" :value="old('email')" required autofocus  />
                                            </div>
                                             
                                            <button class="btn btn-dark btn-block btn-rounded"
                                                type="submit">  {{ __('Email Password Reset Link') }}</button>
                                        </form>
                                         
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



   
@endsection