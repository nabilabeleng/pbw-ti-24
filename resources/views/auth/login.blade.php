<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Laravel Mahasiswa</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Inter:wght@400;500&display=swap" rel="stylesheet">

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: #f5f7fb;
            font-family: 'Inter', sans-serif;
        }

        .login-card {
            border-radius: 20px;
            border: none;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }

        .login-header {
            background: linear-gradient(135deg, #3F84AC, #2f6f94);
            border-radius: 20px 20px 0 0;
        }

        .login-header h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            letter-spacing: 0.4px;
        }

        .form-label {
            font-weight: 500;
            font-size: 0.9rem;
        }

        .form-control {
            border-radius: 12px;
            padding: 10px 14px;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: #3F84AC;
            box-shadow: 0 0 0 .15rem rgba(63, 132, 172, .45);
        }

        .btn-login {
            background: linear-gradient(135deg, #3F84AC, #2f6f94);
            border: none;
            border-radius: 12px;
            padding: 10px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
            color: #fff;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #2f6f94, #245a77);
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="col-md-4">

        <div class="card login-card">
            <div class="login-header text-center p-4 text-white">
                <h5 class="mb-1">Laravel Mahasiswa</h5>
                <small class="text-white-50">Silakan login untuk melanjutkan</small>
            </div>

            <div class="card-body p-4">

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
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
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

                    <button type="submit" class="btn btn-login w-100">
                        Login
                    </button>
                </form>

                @if (Route::has('register'))
                <div class="text-center mt-3 small">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="fw-semibold text-decoration-none">
                        Daftar
                    </a>
                </div>
                @endif

            </div>
        </div>

    </div>
</div>

{{-- SWEETALERT ERROR --}}
@if ($errors->any())
<script>
    Swal.fire({
        icon: 'error',
        title: 'Login Gagal',
        text: 'Email atau password salah!',
        confirmButtonColor: '#3F84AC'
    });
</script>
@endif

</body>
</html>
