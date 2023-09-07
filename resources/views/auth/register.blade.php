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
                        <h2 class="fw-bold">Create Your Account Now</h2>
                        <p>Already have an account? <a href="{{ route('login') }}"> Sign in</a></p>

                    </div>

                    <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-1">
                            <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class=" mb-1">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class=" mb-1">
                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-2">
                            <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-4">
                                <button type="submit" class="btn btn-warning w-100 text-white fw-bold text-uppercase">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
                        <div class="position-relative">
                            <hr class="devider"></hr>   
                        </div>
                        <div class="mt-4">
                            <a class="btn btn-primary w-100 text-center text-uppercase mb-2" href="#"><i class="fa fa-facebook float-start py-1" aria-hidden="true"></i> Continue with Facebook</a>
                            <a class="btn btn-danger w-100 text-center text-uppercase" href="#"><i class="fa fa-google float-start py-1" aria-hidden="true"></i> Continue with google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
