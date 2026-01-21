@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<div class="container">

    <!-- TITLE -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Contact Me</h2>
        <p class="text-muted">
            Feel free to reach out through any of the platforms below
        </p>
    </div>

    <!-- CONTACT BLOCKS HORIZONTAL -->
    <div class="row g-4 justify-content-center">

        <!-- EMAIL -->
        <div class="col-md-4">
            <div class="card h-100 p-4 text-center">
                <div class="fs-1 mb-3">📧</div>
                <h5 class="fw-semibold">Email</h5>
                <p class="text-muted mb-0">admin@myweb.ac.id</p>
            </div>
        </div>

        <!-- WHATSAPP -->
        <div class="col-md-4">
            <div class="card h-100 p-4 text-center">
                <div class="fs-1 mb-3">📱</div>
                <h5 class="fw-semibold">WhatsApp</h5>
                <p class="text-muted mb-0">08xxxxxxxxxx</p>
            </div>
        </div>

        <!-- ADDRESS -->
        <div class="col-md-4">
            <div class="card h-100 p-4 text-center">
                <div class="fs-1 mb-3">📍</div>
                <h5 class="fw-semibold">Alamat</h5>
                <p class="text-muted mb-0">
                    Kampus Universitas, Kota Anda
                </p>
            </div>
        </div>

    </div>

    <!-- NOTE / QUOTE -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card p-4 text-center"
                 style="background:#f0f4ff; border-left:6px solid #AAC4F5;">
                <p class="mb-0 fst-italic text-muted">
                    “Good communication is the foundation of every great collaboration.”
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
