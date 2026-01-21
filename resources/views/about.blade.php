@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center g-4">

        <!-- FOTO -->
        <div class="col-md-4">
            <div class="card p-4 text-center">

                <!-- WRAPPER FLEX CENTER -->
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/sasya.jpeg') }}"
                         alt="Foto Profil"
                         class="rounded-circle mb-3"
                         style="
                            width:180px;
                            height:190px;
                            object-fit:cover;
                            border:6px solid #AAC4F5;
                         ">
                </div>

                <h5 class="fw-bold mb-0">Sasya Putri</h5>
                <small class="text-muted">Mahasiswa / Pengembang Web</small>
            </div>
        </div>

        <!-- DESKRIPSI -->
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="fw-bold mb-3">Profil</h3>

                <p class="text-muted">
                    Saya adalah seorang mahasiswa yang tertarik pada pengembangan
                    aplikasi web modern menggunakan framework Laravel.
                </p>

                <p class="text-muted">
                    Website ini dikembangkan sebagai media pembelajaran dan
                    implementasi konsep sistem informasi berbasis web
                    dengan tampilan yang modern dan responsif.
                </p>

                <hr>

                <ul class="list-unstyled">
                    <li><strong>Nama:</strong> Sasya Putri Adidilla</li>
                    <li><strong>NIM:</strong> 13242420019</li>
                    <li><strong>Program Studi:</strong> Teknologi Informasi</li>
                    <li><strong>Universitas:</strong> Universitas Muhammadiyah Semarang</li>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
