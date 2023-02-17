@extends('layouts.guest')
@section('title') Sign In @endsection

@section('content')
    <!-- dark mode btn -->
    <div class="dark-mode-btn">
        <button class="btn btn-link" id="darkMode">
            <i class="fa-regular fa-moon" style="font-size: 20px" id="dark-mode"></i>
        </button>
    </div>
    <!-- dark mode btn end -->

    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="card shadow-sm bg-img-2 border-opacity-50 border h-75 overflow-hidden">
                <div class="card-body">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="">
                                <h1 class="text-primary text-center mb-4">Welcome Back!</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <div class="form">
                                            <input type="email" name="email" class=" @error('email') is-invalid @enderror" autocomplete="off" required />
                                            <label for="email" class="label-name">
                                                <span class="content-name">
                                                  Email Address
                                                </span>
                                            </label>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <div class="form">
                                            <input type="text" name="password" class=" @error('password') is-invalid @enderror" autocomplete="off" required />
                                            <label for="password" class="label-name">
                                                <span class="content-name">
                                                  Password
                                                </span>
                                            </label>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-7 offset-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-7 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-sign-in me-2"></i>{{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        <div class="mt-3">
                                            <p class="text-muted">Or With</p>
                                            <div class="d-flex">
                                                <span class="social-icon">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </span>
                                                <span class="social-icon">
                                                    <i class="fa-brands fa-google"></i>
                                                </span>
                                                <span class="social-icon">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="">
                                <img src="{{ asset('image/login.svg') }}" class="login-svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
