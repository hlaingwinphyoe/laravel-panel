@extends('layouts.guest')
@section('title') Sign Up @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="card shadow bg-img border-0 h-75 overflow-hidden">
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
                                        <div class="form-floating">
                                            <input id="name" type="text" class="form-control custom @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            <label for="name">Username</label>
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

                                <div class="row mb-4">
                                    <div class="col-md-7 offset-md-4">
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control custom  @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                            <label for="password">Password</label>
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
                                        <div class="form-floating">
                                            <input type="password" name="password_confirmation" class="form-control custom  @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Password">
                                            <label for="password_confirmation">Confirm Password</label>
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
