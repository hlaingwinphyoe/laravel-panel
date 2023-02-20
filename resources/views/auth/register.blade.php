@extends('layouts.guest')
@section('title') Sign Up @endsection
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
            <div class="card shadow-sm bg-img border-opacity-50 border h-75 overflow-hidden">
                <div class="card-body">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="">
                                <img src="{{ asset('image/welcome.svg') }}" class="login-svg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="">
                                <h1 class="text-primary text-center mb-4">Welcome!</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-4">
                                    <div class="col-md-7 offset-md-4">
                                        <div class="form">
                                            <input type="text" name="name" class=" @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="off" required />
                                            <label for="name" class="label-name">
                                                <span class="content-name">
                                                  Username
                                                </span>
                                            </label>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-7 offset-md-4">
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
                                    <div class="col-md-7 offset-md-4">
                                        <div class="form">
                                            <input type="password" name="password" class=" @error('password') is-invalid @enderror" autocomplete="off" required />
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
                                    <div class="col-md-7 offset-md-4">
                                        <div class="form">
                                            <input type="password" name="password_confirmation" class=" @error('password_confirmation') is-invalid @enderror" autocomplete="off" required />
                                            <label for="password_confirmation" class="label-name">
                                                <span class="content-name">
                                                  Password
                                                </span>
                                            </label>
                                        </div>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-7 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember">
                                            <label class="form-check-label" for="remember">
                                                I agree to the <span class="text-primary">Terms</span> & <span class="text-primary">Conditions</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-7 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-sign-in me-2"></i>{{ __('Sign Up') }}
                                        </button>
                                        <a class="btn btn-link" href="{{ route('login') }}">
                                            Already have one? Sign In
                                        </a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
