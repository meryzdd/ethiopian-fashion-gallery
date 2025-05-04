@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="font-weight-bold">Login</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label fw-bold" for="remember">Remember Me</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold">Login</button>
                    </form>

                    <!-- Social Login Buttons -->
                    <div class="text-center mt-4">
                        <p class="fw-bold">Or sign in with:</p>
                        <a href="{{ route('social.login', 'google') }}" class="btn btn-danger me-2">
                            <i class="fab fa-google"></i> Sign in with Google
                        </a>
                        <a href="{{ route('social.login', 'facebook') }}" class="btn btn-primary">
                            <i class="fab fa-facebook"></i> Sign in with Facebook
                        </a>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="text-center mt-3">
                        <a href="{{ route('password.request') }}" class="text-decoration-none fw-bold">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection