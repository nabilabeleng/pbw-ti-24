<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Mahasiswa')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
            font-family: 'Inter', sans-serif;
        }

        /* NAVBAR */
        .navbar {
            border-radius: 16px;
            margin-top: 20px;
            background: linear-gradient(135deg, #3F84AC, #2f6f94);
            box-shadow: 0 12px 30px rgba(63,132,172,.35);
        }

        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            letter-spacing: .3px;
        }

        /* CARD */
        .card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0,0,0,.08);
        }

        /* BUTTON */
        .btn {
            border-radius: 12px;
            padding: 8px 16px;
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3F84AC, #2f6f94);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2f6f94, #245a77);
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

        .btn-outline-light {
            border-radius: 10px;
        }

        /* TABLE */
        table thead {
            background: rgba(63,132,172,.12);
        }

        table th {
            font-weight: 600;
            color: #334155;
            font-size: .9rem;
        }

        .table tbody tr {
            transition: all .2s ease;
        }

        .table tbody tr:hover {
            background: #f1f7fb;
        }
    </style>
</head>
<body>

<div class="container">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-dark px-4 mb-4 d-flex justify-content-between">
        <a class="navbar-brand" href="{{ route('mahasiswa.index') }}">
            MyWeb
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
