@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- HERO -->
<section class="container mb-5">
    <div class="row align-items-center">

        <!-- TEXT -->
        <div class="col-md-6">
            <h1 class="fw-bold display-5">
                Website <span style="color:#AAC4F5">Modern</span><br>
                untuk Mahasiswa
            </h1>

            <p class="text-muted mt-3">
                Platform informatif dengan desain elegan, aman,
                dan mudah digunakan.
            </p>

            <a href="{{ route('login') }}" class="btn btn-brand mt-3">
                Mulai Sekarang →
            </a>
        </div>

        <!-- IMAGE -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/logo.png') }}"
                 alt="Logo Website"
                 class="img-fluid"
                 style="max-width:300px;">
        </div>

    </div>
</section>

<!-- FEATURES -->
<section class="container">
    <div class="row text-center g-4">

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h4>📘 Akademik</h4>
                <p class="text-muted mt-2">
                    Kelola data mahasiswa dengan rapi dan cepat.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h4>📰 Informasi</h4>
                <p class="text-muted mt-2">
                    Berita & update kampus terbaru.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h4>🔐 Keamanan</h4>
                <p class="text-muted mt-2">
                    Sistem login aman & terpercaya.
                </p>
            </div>
        </div>

    </div>
</section>

@endsection
