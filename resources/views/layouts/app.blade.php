<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Creative Web')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --brand: #AAC4F5;
            --dark: #1f2937;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f6f8fc;
            color: var(--dark);
        }

        /* NAVBAR */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.85);
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--brand) !important;
        }

        .nav-link {
            font-weight: 500;
            color: #374151 !important;
            margin-right: 10px;
        }

        .nav-link:hover {
            color: var(--brand) !important;
        }

        /* BUTTON */
        .btn-brand {
            background-color: var(--brand);
            color: #1e293b;
            border: none;
            padding: 10px 22px;
            border-radius: 12px;
            font-weight: 600;
        }

        .btn-brand:hover {
            background-color: #93b0ee;
        }

        /* CARD */
        .card {
            border: none;
            border-radius: 18px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        footer {
            background: #fff;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">MyWeb</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            </ul>

            <!-- @auth
                <a href="{{ route('dashboard') }}" class="btn btn-dark">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-brand">Login</a>
            @endauth -->
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div style="margin-top:100px">
    @yield('content')
</div>

<footer class="text-center py-4 mt-5">
    <small>© {{ date('Y') }} Teknologi Informasi • Sasya Putri 💙</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
