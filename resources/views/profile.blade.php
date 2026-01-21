@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <h3 class="fw-bold mb-3">Profil Website</h3>

                <p class="text-muted">
                    Website ini dikembangkan sebagai platform informasi dan pengelolaan data
                    yang ditujukan untuk mendukung kegiatan akademik mahasiswa.
                </p>

                <p class="text-muted">
                    Dengan desain modern dan sistem yang terintegrasi, website ini diharapkan
                    dapat mempermudah pengguna dalam mengakses informasi, mengelola data,
                    serta meningkatkan efisiensi administrasi.
                </p>

                <hr>

                <ul class="list-unstyled">
                    <li><strong>Nama Website:</strong> MyWeb Mahasiswa</li>
                    <li><strong>Fokus:</strong> Informasi & Manajemen Data Mahasiswa</li>
                    <li><strong>Teknologi:</strong> Laravel, Bootstrap 5</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
