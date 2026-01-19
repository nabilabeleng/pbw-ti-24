<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Laravel Mahasiswa</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
            font-family: 'Inter', sans-serif;
        }

        .login-card {
            border-radius: 18px;
            border: none;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }

        .login-header {
            background: linear-gradient(135deg, #1f2937, #111827);
            border-radius: 18px 18px 0 0;
        }

        .form-control {
            border-radius: 12px;
            padding: 10px 14px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border: none;
            border-radius: 12px;
            padding: 10px;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="col-md-4">

        <div class="card login-card">
            <div class="login-header text-white text-center p-4">
                <h5 class="mb-1">📘 Laravel Mahasiswa</h5>
                <small class="text-white-50">Silakan login untuk melanjutkan</small>
            </div>

            <div class="card-body p-4">

                {{-- ERROR --}}
                @if ($errors->any())
                    <div class="alert alert-danger small">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="checkbox"
                                   name="remember"
                                   id="remember">
                            <label class="form-check-label small" for="remember">
                                Ingat saya
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="small text-decoration-none" href="{{ route('password.request') }}">
                                Lupa password?
                            </a>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Login 🚀
                    </button>
                </form>

                @if (Route::has('register'))
                <div class="text-center mt-3 small">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">
                        Daftar
                    </a>
                </div>
                @endif

            </div>
        </div>

    </div>
</div>

</body>
</html>
