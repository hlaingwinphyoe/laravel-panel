@extends('layouts.guest')
@section('title') Sign In @endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="card shadow bg-img-2 border-0 h-75 overflow-hidden">
                <div class="card-body">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="">
                                <h1 class="text-primary text-center mb-4">Welcome Back!</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-7 offset-md-3">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control custom @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
                                            <label for="email">Email address</label>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-7 offset-md-3">
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control custom @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
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
