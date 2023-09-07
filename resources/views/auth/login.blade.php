@extends('layouts.app')

@section('content')
<section class="login-register">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 d-none d-md-block">
                <!-- <img class="img-fluid w-100" src="https://bb.astagingsite.com/assets/images/Login-image.jpg" alt=""> -->
                <div class="login-img"></div>
            </div>
            <div class="col-md-6">
                <div class="w-75 mx-auto py-4">
                    <!-- <div class="card-header">{{ __('Login') }}</div> -->
                    <div class="text-center">
                        <a href="{{url('/')}}">
                        <img class="" height="40" src="http://127.0.0.1:8000/assets/images/business_buzzer_logo.png" alt="">

                        </a>
                        <h2 class="fw-bold">Welcome Back</h2>
                        <p>Don't have account? <a href="{{ route('register') }}"> Sign Up</a></p>

                    </div>

                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="position-relative mb-3">
                                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                
                            </div>

                            <div class="mb-3">
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-0">
                                <div class="">
                                    <button type="submit" class="btn btn-warning w-100 text-uppercase text-white fw-bold">
                                        {{ __('Login') }}
                                    </button>

                                   <div class="text-center">
                                   @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                   </div>
                                </div>
                            </div>
                        </form>
                        <div class="position-relative">
                            <hr class="devider"></hr>   
                        </div>
                        <div class="mt-4">
                            <a class="btn btn-primary w-100 text-center text-uppercase mb-3" href="#"><i class="fa fa-facebook float-start py-1" aria-hidden="true"></i> Continue with Facebook</a>
                            <a class="btn btn-danger w-100 text-center text-uppercase" href="#"><i class="fa fa-google float-start py-1" aria-hidden="true"></i> Continue with google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
