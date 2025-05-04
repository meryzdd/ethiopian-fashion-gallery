
@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 500px; margin: auto;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg border-0 rounded-lg mt-3" style="padding: 0.75rem;">
                <div class="card-header bg-primary text-white text-center" style="padding: 0.5rem;">
                    <h3 class="font-weight-bold" style="font-size: 1rem; margin: 0;">Register</h3>
                </div>
                <div class="card-body" style="padding: 0.75rem;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-2" style="margin-bottom: 0.5rem;">
                            <label for="name" class="form-label fw-bold" style="font-size: 0.85rem; margin-bottom: 0.25rem;">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus style="font-size: 0.85rem; padding: 0.375rem 0.75rem; height: auto;">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="mb-2" style="margin-bottom: 0.5rem;">
                            <label for="email" class="form-label fw-bold" style="font-size: 0.85rem; margin-bottom: 0.25rem;">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required style="font-size: 0.85rem; padding: 0.375rem 0.75rem; height: auto;">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-2" style="margin-bottom: 0.5rem;">
                            <label for="password" class="form-label fw-bold" style="font-size: 0.85rem; margin-bottom: 0.25rem;">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required style="font-size: 0.85rem; padding: 0.375rem 0.75rem; height: auto;">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-2" style="margin-bottom: 0.5rem;">
                            <label for="password-confirm" class="form-label fw-bold" style="font-size: 0.85rem; margin-bottom: 0.25rem;">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required style="font-size: 0.85rem; padding: 0.375rem 0.75rem; height: auto;">
                        </div>

                        <!-- Role Selection -->
                        <div class="mb-2" style="margin-bottom: 0.5rem;">
                            <label for="role" class="form-label fw-bold" style="font-size: 0.85rem; margin-bottom: 0.25rem;">Role</label>


<select id="role" class="form-select" name="role" required style="font-size: 0.85rem; padding: 0.375rem 0.75rem; height: auto;">
                                <option value="customer">Customer</option>
                                <option value="designer">Designer</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 fw-bold" style="font-size: 0.85rem; padding: 0.375rem 0.75rem; margin-top: 0.75rem;">Register</button>

                        <!-- Link to Login Page -->
                        <div class="text-center mt-2" style="font-size: 0.8rem; margin-top: 0.5rem;">
                            <p style="margin: 0;">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none fw-bold" style="font-size: 0.8rem;">Login here</a></p>
                        </div>
                    </form>

                    <!-- Social Login Buttons -->
                    <div class="text-center mt-3" style="font-size: 0.8rem; margin-top: 0.75rem;">
                        <p class="fw-bold" style="margin: 0;">Or sign up with:</p>
                        <a href="{{ route('social.login', 'google') }}" class="btn btn-danger me-2" style="font-size: 0.8rem; padding: 0.375rem 0.75rem;">
                            <i class="fab fa-google"></i> Sign up with Google
                        </a>
                        <a href="{{ route('social.login', 'facebook') }}" class="btn btn-primary" style="font-size: 0.8rem; padding: 0.375rem 0.75rem;">
                            <i class="fab fa-facebook"></i> Sign up with Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                   

                       