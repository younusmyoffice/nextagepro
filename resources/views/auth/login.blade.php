@extends('frontend.master')
@section('content')



            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li><a href="shop.html"> Shop</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
            </nav>

            <div class="page-content pb-10 mb-10">
                <div class="container">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
 
                    <div class="posts grid row">
                        <div class="grid-item col-sm-6 lifestyle shopping winter-sale">
                            <article class="post post-grid">
                                <!-- login -->
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
                                                    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                                                        @csrf
                                                        <div class="form-group mb-3">
                                                            <input id="email"  type="email" name="email" :value="old('email')" required autofocus  class="form-control"   placeholder="Username or Email Address *" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password"  
                                                                 placeholder="Password *"  />
                                                        </div>
                                                        <div class="form-footer">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="custom-checkbox" d="remember_me" name="remember" />
                                                                <label class="form-control-label" for="signin-remember" >Remember
                                                                    me</label> 
                                                            </div>
                                                            @if (Route::has('password.request'))
                                                                <a class="lost-link" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot your password?') }}
                                                                </a>
                                                            @endif
                                                           
                                                        </div>
                                                        <button class="btn btn-dark btn-block btn-rounded"
                                                            type="submit">{{ __('Log in') }}</button>
                                                    </form>
                                                    <div class="form-choice text-center">
                                                        <label class="ls-m">or Login With</label>
                                                        <div class="social-links">
                                                            <a href="#"
                                                                class="social-link social-google fab fa-google border-no"></a>
                                                            <a href="#"
                                                                class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                            <a href="#"
                                                                class="social-link social-twitter fab fa-twitter border-no"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- login -->
                            </article>
                        </div>
                        <div class="grid-item col-sm-6 lifestyle sport">
                            <article class="post post-grid">
                                    <!-- register -->
                                <div class="login-popup">
                                    <div class="form-box">
                                        <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                            <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Register</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content">
            
                                                <div class="tab-pane active" id="register">
                                                <form method="POST" action="{{ route('register') }}">
                                                         @csrf
                                                        <div class="form-group mb-3">
                                                            <input   class="form-control"  placeholder="Username  *"
                                                                id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                                @error('name')
                                                                <span class="invalid-feedback">
                                                                    <strong>{{$message}}</strong>
                                                                </span>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control"  placeholder="Email *"   
                                                                id="email"  type="email" name="email" :value="old('email')" required />
                                                        </div>
                                                                @error('email')
                                                                <span class="invalid-feedback">
                                                                    <strong>{{$message}}</strong>
                                                                </span>
                                                                @enderror
                                                        <div class="form-group">
                                                            <input class="form-control"  placeholder="Phone *"   
                                                                id="phone"  type="phone" name="phone" required />
                                                        </div>
                                                                @error('phone')
                                                                <span class="invalid-feedback">
                                                                    <strong>{{$message}}</strong>
                                                                </span>
                                                                @enderror
                                                                
                                                        <div class="form-group">
                                                            <input  class="form-control"  placeholder="Password *"   
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
                                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                            <div class="form-footer">
                                                                <div class="form-checkbox">
                                                                    <input type="checkbox" class="custom-checkbox" name="terms" id="terms" required />
                                                                    <label class="form-control-label" for="register-agree">I agree to
                                                                        the
                                                                        privacy policy</label>
                                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                            ]) !!}
                                                                </div>
                                                            </div>

                                                        @endif
                                                        
                                                        <button class="btn btn-dark btn-block btn-rounded"
                                                            type="submit"> {{ __('Register') }}</button>
                                                    </form>
                                                    <div class="form-choice text-center">
                                                        <label class="ls-m"> <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                            {{ __('Already registered?') }}
                                                        </a></label>
                                                    </div>
                                                    <!-- <div class="form-choice text-center">
                                                        <label class="ls-m">or Register With</label>
                                                        <div class="social-links">
                                                            <a href="#"
                                                                class="social-link social-google fab fa-google border-no"></a>
                                                            <a href="#"
                                                                class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                            <a href="#"
                                                                class="social-link social-twitter fab fa-twitter border-no"></a>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                     <!-- register -->
                            </article>
                        </div>
                        
                        <div class="grid-space col-1"></div>
                    </div>
                   
                </div>
            </div>



   
@endsection