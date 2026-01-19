@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg rounded-4 login-card">
                <div class="card-header text-white text-center py-4" style="background: #343a40;">
                    <h3>{{ __('Login') }}</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark btn-lg">{{ __('Login') }}</button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center mt-3">
                                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="text-center py-4">
    <p>© 2026 BengkelMobil. Semua Hak Cipta Dilindungi.</p>
</footer>
@endsection

@section('styles')
<style>
    /* Desain Kartu Login dengan Tema Bengkel */
    .login-card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        background: linear-gradient(135deg, #5a6268, #343a40);
    }

    .card-header {
        background-color: #343a40;
        color: #fff;
    }

    /* Styling Input */
    .form-control {
        border-radius: 25px;
        border: 1px solid #495057;
        background-color: #f8f9fa;
        font-size: 16px;
        padding-left: 30px;
    }

    .input-group-text {
        background-color: #495057;
        border: 1px solid #343a40;
        color: #fff;
        border-radius: 25px;
    }

    /* Tombol Login */
    .btn-dark {
        background-color: #343a40;
        border-color: #343a40;
        padding: 12px 25px;
        border-radius: 30px;
        font-size: 18px;
        font-weight: bold;
    }

    .btn-dark:hover {
        background-color: #212529;
        border-color: #212529;
    }

    /* Footer */
    footer {
        background-color: #f8f9fa;
        padding: 10px 0;
        font-size: 14px;
        color: #6c757d;
    }

    footer p {
        margin-bottom: 0;
    }

    /* Responsif Design */
    @media (max-width: 576px) {
        .container {
            padding: 15px;
        }
        .login-card {
            margin-top: 20px;
        }
    }

    /* Tambahan untuk menambahkan gambar atau ikon */
    .input-group-text i {
        font-size: 18px;
    }

    /* Ikon atau Gambar pada Form */
    .form-control, .btn-dark {
        background-color: #fff;
        color: #343a40;
    }

    /* Background Card */
    .login-card {
        background: url('/images/bengkel-background.jpg') no-repeat center center;
        background-size: cover;
        padding: 50px 30px;
        border-radius: 15px;
    }

</style>
@endsection
