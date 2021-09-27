@extends('layouts.app')
@section('content')
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="login-card">
            <div class="row no-gutters">
                <div class="col-md-4">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="brand-wrapper">
                        </div>
                        <p class="login-card-description">Login into your
                            account</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" name="email" class="form-control  @error('email') is-invalid @enderror" 
                                    placeholder="Enter the email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">{{ __('Password') }}</label>
                                <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                                    placeholder="**********" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button name="login" id="login" class="btn
                                btn-block login-btn mb-4" type="submit">{{ __('Login') }}</button>
                        </form>
                        @if (Route::has('password.request'))
                        <a class="forgot-password-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                        <p class="login-card-footer-text">Don't have an
                            account? <a href="#!" class="text-reset">Register
                                here</a></p>
                        <nav class="login-card-footer-nav">
                            <!-- <a href="#!">Terms of use.</a>
                            <a href="#!">Privacy policy</a> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
