<x-app-layout title="Login">
    <style>
        .container {
            margin-top: 5rem;
        }
        .card {
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #6ab994;
            color: #fff;
            text-align: center;
            font-size: 1.5rem;
            padding: 0.75rem;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
        .card-body {
            padding: 2rem;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.5rem;
        }
        .form-control:focus {
            border-color: #82c9ab;
            box-shadow: 0 0 0 0.2rem rgba(143, 180, 165, 0.25);
        }
        .invalid-feedback {
            color: #dc3545;
        }
        .btn-primary {
            background-color: #6ab994;
            border-color: #6ab994;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #6ab994;
            border-color: #6ab994;
        }
        .form-check-input {
            margin-top: 0.3rem;
        }
        .form-check-label {
            margin-left: 0.5rem;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            border-radius: 0.25rem;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }
        a {
            display: block;
            margin-top: 1rem;
            text-align: center;
            color:#6ab994;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        </form>
                        <a href="{{ route('auth.register') }}">{{ __('Register') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
