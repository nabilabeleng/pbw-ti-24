<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Mahasiswa')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
            font-family: 'Inter', sans-serif;
        }

        .navbar {
            border-radius: 14px;
            margin-top: 20px;
            background: linear-gradient(135deg, #1f2937, #111827);
        }

        .card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0,0,0,.05);
        }

        .btn {
            border-radius: 12px;
            padding: 8px 16px;
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border: none;
        }

        .btn-warning {
            background: linear-gradient(135deg, #facc15, #eab308);
            border: none;
            color: #111;
        }

        .btn-danger {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border: none;
        }

        table thead {
            background: #f1f5f9;
        }

        table th {
            font-weight: 600;
            color: #334155;
        }

        .table tbody tr {
            transition: all .2s ease;
        }

        .table tbody tr:hover {
            background: #f8fafc;
        }
    </style>
</head>
<body>

<div class="container">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-dark px-4 mb-4 d-flex justify-content-between">
        <a class="navbar-brand fw-semibold" href="{{ route('mahasiswa.index') }}">
             Laravel Mahasiswa
        </a>

        {{-- AUTH --}}
        @auth
        <div class="d-flex align-items-center gap-3">
            <span class="text-light small">
                 {{ Auth::user()->name }}
            </span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-outline-light">
                    Logout
                </button>
            </form>
        </div>
        @endauth
    </nav>

    @yield('content')
</div>

{{-- JS --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stack('scripts')
</body>
</html>
